<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SelectInput extends Component
{
    public $id;
    public $options;
    public $values;
    public $selected;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $options, $values, $selected=NULL)
    {
        $this->id = $id;
        $this->options = $options;
        $this->values = $values;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select-input');
    }
}
