<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tableshow extends Component
{
    public $columns; // مصفوفة لتخزين أعناوين الأعمدة
    public $d; // بيانات الجدول

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($columns =[], $d = [])
    {
        $this->columns = $columns;
        $this->d = $d;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.table-show');
    }
}
