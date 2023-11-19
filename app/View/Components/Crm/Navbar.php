<?php

namespace App\View\Components\Crm;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Company;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     */
    public $company;
    public function __construct()
    {
        $this->company = Company::first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.crm.navbar');
    }
}
