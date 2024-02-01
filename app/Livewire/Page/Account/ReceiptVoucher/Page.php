<?php

namespace App\Livewire\page\Account\ReceiptVoucher;

use Livewire\Attributes\On;
use App\Models\Account\ReceiptVoucher;
use App\Models\Common\Customer;
use App\Models\Common\Saleman;
use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;

class Page extends Component
{
    use WithPagination;

    public $dateStart;
    public $dateEnd;
    public $customerList = [];
    public $customerSearch = "";
    public $documentNo = "";
    public $jobNo = "";
    public $query = [];

    public function mount(){
        $this->dateStart = Carbon::now()->subYear()->format('d/m/Y');
        $this->dateEnd = Carbon::now()->format('d/m/Y');
        $this->customerList = Customer::all()->sortBy('cusNameEN');
        $this->salemanList = Saleman::all()->sortBy('salemanNameEN');
    }

    #[On('post-search')] 
    public function search() {
        $this->query = [];
        if($this->dateStart != null && $this->dateEnd != null) {
            $this->query[] = ['documentDate', '>=', Carbon::createFromFormat('d/m/Y', $this->dateStart)->format('Y-m-d')];
            $this->query[] = ['documentDate', '<=', Carbon::createFromFormat('d/m/Y', $this->dateEnd)->format('Y-m-d')];
        }
        if($this->customerSearch != null) {
            $this->query[] = ['cusCode', '=', $this->customerSearch];
        }
        if($this->documentNo != null) {
            $this->query[] = ['documentID', 'like', '%'.$this->documentNo.'%'];
        }
        if($this->jobNo != null) {
            $this->query[] = ['refJobNo', 'like', '%'.$this->jobNo.'%'];
        }
    }

    public function render()
    {
        return view('livewire.page.account.receipt-voucher.page', [ 'data'=> ReceiptVoucher::where($this->query)->orderBy('documentDate', 'desc')->paginate(50)])->extends('layouts.main')->section('main-content');
    }
}