<?php

namespace App\Livewire\Page\Marketing\JobOrder;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;

use App\Models\Marketing\JobOrder;
use App\Models\Common\Customer;
use App\Models\Common\Saleman;

class Page extends Component
{
    use WithPagination;

    public $dateStart;
    public $dateEnd;
    public $documentID = '';
    public $invNo = '';
    public $customerList = [];
    public $customerSearch = "";
    public $salemanList = [];
    public $salemanSearch = "";

    public function mount(){
        $this->dateStart = Carbon::now()->subYear()->format('d/m/Y');
        $this->dateEnd = Carbon::now()->format('d/m/Y');
        $this->customerList = Customer::all()->sortBy('custNameEN');
        $this->salemanList = Saleman::all()->sortBy('empName');
    }

    public function render()
    {
        return view('livewire.page.marketing.job-order.page',[ 'data'=> JobOrder::paginate(50)])->extends('theme.layout.master')->section('main-content');
    }
}