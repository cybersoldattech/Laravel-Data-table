<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tableHeader extends Component
{
    private $name;
    private $field;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $direction , string $name , string $label , string $field)
    {
        $this->name = $name;
        $this->field=$field;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table-header',[

        ]);
    }
}
