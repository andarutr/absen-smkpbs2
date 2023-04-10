<?php

namespace App\View\Components\Form;

use App\Models\User;
use App\Models\MataPelajaran;
use Illuminate\View\Component;

class Absen extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $nrp;
    public function __construct($nrp)
    {
        $this->nrp = $nrp;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $matpel = MataPelajaran::where('nrp', $this->nrp)->get();
	    $username = User::where('username', $this->nrp)->first();

        return view('components.form.absen', compact('matpel','username'));
    }
}
