<?php

namespace App\Livewire\Page\Common\Charges;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Common\Charges;

class Page extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.page.common.charges.page',[ 'data'=> Charges::paginate(50)])->extends('theme.layout.master')->section('main-content');
    }
}