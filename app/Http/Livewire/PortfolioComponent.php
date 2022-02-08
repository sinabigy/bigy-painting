<?php

namespace App\Http\Livewire;

use App\Models\Portfolio;
use Livewire\Component;

class PortfolioComponent extends Component
{

    public $selectedModal;


    public function render()
    {
        $portfolios = Portfolio::all();

        return view('livewire.portfolio-component', ['portfolios' => $portfolios])->layout('layouts.base');
    }
}
