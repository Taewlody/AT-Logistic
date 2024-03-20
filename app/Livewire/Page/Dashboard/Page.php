<?php

namespace App\Livewire\Page\Dashboard;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;

use App\Models\Account\Invoice;
use App\Models\Account\TaxInvoice;
use App\Models\PettyCash\PettyCash;
use App\Models\Payment\PaymentVoucher;
use App\Models\Payment\AdvancePayment;
use App\Models\Marketing\JobOrder;
use Illuminate\Support\Facades\DB;

class Page extends Component
{
    public $data_invoice = null;
    public $data_vat = null;
    public $data_income = null;
    public $data_balance = null;
    public $data_total_balance = null;
    public $data_total_income = null;
    public $data_advance_payment = null;
    public $data_tax_invoice = null;
    public $data_petty_cash = null;
    public $data_payment_voucher = null;

    public $monthTotal;
    public $monthVatBuy;
    public $monthVatSale;
    public $monthCategory;

    public function boot()
    {
        $this->data_invoice = Invoice::where('documentstatus', 'A')
        ->whereDoesntHave('taxInvoiceItems')
        ->sum('total_netamt');
        
        $this->data_vat = TaxInvoice::whereRaw("DATE_FORMAT(documentDate,'%Y%m') = DATE_FORMAT(NOW(),'%Y%m')")->sum('total_vat');

        // income this month
        $this->data_advance_payment = AdvancePayment::selectRaw('0 as tx, sum(sumTotal)  as ap')->whereRaw("DATE_FORMAT(documentDate,'%Y%m') = DATE_FORMAT(NOW(),'%Y%m')")
        ->where('documentstatus', 'A')
        ->first();

        $this->data_tax_invoice = TaxInvoice::selectRaw('sum(total_netamt) as  tx, 0 as ap')
        ->whereRaw("DATE_FORMAT(documentDate,'%Y%m') = DATE_FORMAT(NOW(),'%Y%m')")
        ->first();

        $this->data_income = collect([$this->data_advance_payment, $this->data_tax_invoice]);

        $total_tx = 0;
        $total_ap = 0;
        foreach ($this->data_income as $item) {
            $total_tx += $item->tx;
            $total_ap += $item->ap;
        }
        $this->data_total_income = $total_tx+$total_ap;
        // end income this month

        // account balance
        $this->data_petty_cash = PettyCash::selectRaw('sum(grandTotal) as  pc, 0 as pv')
        ->whereRaw("DATE_FORMAT(documentDate,'%Y%m') = DATE_FORMAT(NOW(),'%Y%m')")
        ->where('documentstatus', 'A')
        ->first();

        $this->data_payment_voucher = PaymentVoucher::selectRaw('0 as  pc, sum(grandTotal)  as pv')->whereRaw("DATE_FORMAT(documentDate,'%Y%m') = DATE_FORMAT(NOW(),'%Y%m')")
        ->where('documentstatus', 'A')
        ->first();

        $this->data_income = collect([$this->data_petty_cash, $this->data_payment_voucher]);
        $total_pc = 0;
        $total_pv = 0;
        foreach ($this->data_income as $item) {
            $total_pc += $item->pc;
            $total_pv += $item->pv;
        }
        $this->data_total_balance = $this->data_total_income - ($total_pc+$total_pv);
        // end account balance

        //start ยอดภาษีมูลค่าเพิ่ม ยอดขาย ยอดซื้อ
        // $this->monthSearch = (int) date('m');
        $this->monthSearch = 1;
        $this->yearSearch = date('Y');
        // $count_days = cal_days_in_month(CAL_GREGORIAN, $this->monthSearch, $this->yearSearch);
        //จำนวนวันใน 1 เดือน
        // $this->monthCategory = range(1, $count_days);
        
        //รายเดือนปัจจุบัน
        //ภาษีซื้อ เดือนปัจจุบัน
        $monthVatBuy = PaymentVoucher::selectRaw('sum(sumTax7)  as sum, DATE(documentDate) as date')
            ->whereYear('documentDate', $this->yearSearch)
            ->whereMonth('documentDate', $this->monthSearch)
            ->groupBy('date')
            ->pluck('sum', 'date');
        
        //ภาษีขาย เดือนปัจจุบัน
        $monthVatSale = TaxInvoice::selectRaw('sum(total_vat)  as sum, DATE(documentDate) as date')
            ->whereYear('documentDate', $this->yearSearch)
            ->whereMonth('documentDate', $this->monthSearch)
            ->groupBy('date')
            ->pluck('sum', 'date');
        
        $this->monthVatBuy = $this->setDataCurrentMonthChart($monthVatBuy->toArray());
        $this->monthVatSale = $this->setDataCurrentMonthChart($monthVatSale->toArray());
        
        //รายปี
        $this->yearTotal = PaymentVoucher::selectRaw('sum(sumTotal)  as sum, MONTH(documentDate) as month')
            ->whereYear('documentDate', $this->yearSearch)
            ->groupBy('month')
            ->get()->toArray();
        

        //ราย 11 ปี
        $years = range($this->yearSearch, $this->yearSearch - 11);
        $this->previousYearsTotal = PaymentVoucher::selectRaw('sum(sumTotal) as sum, YEAR(documentDate) as year')
            ->whereIn(DB::raw('YEAR(documentDate)'), $years)
            ->groupBy(DB::raw('YEAR(documentDate)'))
            ->orderBy(DB::raw('YEAR(documentDate)'), 'asc')
            ->get()
            ->toArray();
        

        //end ยอดภาษีมูลค่าเพิ่ม ยอดขาย ยอดซื้อ

    }

    public function setDataCurrentMonthChart($items)
    {
        // dd($items->toArray());
        $firstKey = array_key_first($items);
        $date = Carbon::createFromFormat('Y-m-d', $firstKey);
        $year = $date->year;
        $month = $date->month;
        $daysInMonth = [];
        $categorirs = [];
        $startDay = Carbon::create($year, $month, 1);
        $endDay = Carbon::create($year, $month, 1)->endOfMonth();
        $currentDay = clone $startDay;
        while ($currentDay <= $endDay) {
            $categorirs[] = $currentDay->format('Y-m-d');
            $daysInMonth[$currentDay->format('Y-m-d')] = 0;
            $currentDay->addDay();
        }
        $this->monthCategory = $categorirs;
        $mergedData = array_merge($daysInMonth, $items);
        
        return ksort($mergedData);
    }

    public function render()
    {
        $data_advance_pyment_table = AdvancePayment::selectRaw('Sum(advance_payment.sumTotal) AS sumTotal, advance_payment.cusCode, common_customer.custNameTH')
            ->join('joborder', function($join) {
                $join->on('advance_payment.comCode', 'joborder.comCode');
                $join->on('advance_payment.refJobNo', 'joborder.documentID');
            })
            ->leftJoin('invoice', function($join) {
                $join->on('joborder.comCode', 'invoice.comCode');
                $join->on('joborder.documentID', 'invoice.ref_jobNo');
            })
            ->join('common_customer', function($join) {
                $join->on('advance_payment.comCode', 'common_customer.comCode');
                $join->on('advance_payment.cusCode', 'common_customer.cusCode');
            })
            ->whereRaw('invoice.documentID IS NULL')
            ->groupBy('advance_payment.cusCode', 'common_customer.custNameTH');
        // ->paginate(10);
        
        $data_invoice_table = Invoice::selectRaw('invoice.documentstatus, common_customer.custNameTH, sum(invoice.total_netamt) as total_netamt')
            ->join('common_customer', function($join) {
                $join->on('invoice.comCode', 'common_customer.comCode');
                $join->on('invoice.cusCode', 'common_customer.cusCode');
            })
            ->leftJoin('tax_invoice_items', function($join) {
                $join->on('invoice.comCode', 'tax_invoice_items.comCode');
                $join->on('invoice.documentID', 'tax_invoice_items.invNo');
            })
            ->where('invoice.documentstatus', 'A')
            ->whereRaw('tax_invoice_items.documentID IS NULL')
            ->groupBy('invoice.documentstatus', 'common_customer.custNameTH')
            ->orderBy('total_netamt', 'DESC');
        
        $data_invoice_table_total = $data_invoice_table->get();
        $sum_invoice_total = 0;
        foreach($data_invoice_table_total as $invoice) {
            $sum_invoice_total += $invoice['total_netamt'];
        }

        $data_advance_pyment_table_total = $data_advance_pyment_table->get();
        $sum_advance_total = 0;
        foreach($data_advance_pyment_table_total as $advance) {
            $sum_advance_total += $advance['sumTotal'];
        }
        

        $data_payment_voucher_table = PaymentVoucher::selectRaw('sum(payment_voucher.sumTotal) as sumTotal, supCode')
        ->with(['supplier', 'docStatus'])->groupBy('supCode')->orderBy('sumTotal', 'DESC');
        $data_payment_voucher_table_total = $data_payment_voucher_table->get();
        $sum_payment_voucher_total = 0;
        foreach($data_payment_voucher_table_total as $payment) {
            $sum_payment_voucher_total += $payment['sumTotal'];
        }
        

        return view('livewire.page.dashboard.page',[ 
                'data_job_inprocess'=> JobOrder::where('documentstatus', 'P')->paginate(10),
                'data_advance_pyment_table' => $data_advance_pyment_table->paginate(10),
                'data_invoice_table' => $data_invoice_table->paginate(10),
                'sum_invoice_total' => $sum_invoice_total,
                'sum_advance_total' => $sum_advance_total,
                'data_payment_voucher_table' => $data_payment_voucher_table->paginate(10),
                'sum_payment_voucher_total' => $sum_payment_voucher_total
            ]
            )->extends('layouts.main')->section('main-content');
    }
}