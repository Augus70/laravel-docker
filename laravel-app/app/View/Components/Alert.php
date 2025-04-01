<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title
    )
    {
        //

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }

    // ejemplo de un método que retorna un array
    public function languajes($language)
    {
        return [
            'PHP',
            'JavaScript',
            'Java',
            'C#',
            'C++',
            'Ruby',
            'Swift',
            'Go',
            'Rust',
            $language,
        ];
    }
    // ejemplo de un metodo que retorna un string
    public function languaje()
    {
        return "El lenguaje fijo es RUST";
    }
}
