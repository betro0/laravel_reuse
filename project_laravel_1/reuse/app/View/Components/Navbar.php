<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $links; // تعريف متغير عام لاستقبال الروابط

    /**
     * Constructor: يقوم بتهيئة المكون واستقبال الروابط.
     *
     * @param array $links
     */
    public function __construct($links = [])
    {
        $this->links = $links; // تعيين الروابط إلى المتغير العام
    }

    /**
     * Method render: تحدد طريقة عرض المكون وتربطه بملف العرض (View).
     */    public function render()
    //  : View|Closure|string
    {
        return view('components.navbar');
    }
}
