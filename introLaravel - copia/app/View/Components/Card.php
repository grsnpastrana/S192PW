<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $encabezado;  //atributos 
    public $titulo;
    public $textoBoton;

    public function __construct($encabezado,$titulo,$textoBoton) //parametros 
    {
        $this->encabezado = $encabezado; //inicializar atributos 
        $this->titulo = $titulo;
        $this->textoBoton = $textoBoton;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
