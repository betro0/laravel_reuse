<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $columns; // مصفوفة لتخزين أعناوين الأعمدة
    public $data; // بيانات الجدول

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($columns =[], $data = [])
    {
        $this->columns = $columns;
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.table-index');
    }
}
