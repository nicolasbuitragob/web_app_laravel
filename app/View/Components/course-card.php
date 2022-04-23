<?php

namespace App\View\Components;

use Illuminate\View\Component;

class courseCard extends Component{
    /**
     * 
     *
     * @return void
     */
    public function __construct($course)
    {
        $this -> course = $course
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.course-card');
    }
}
