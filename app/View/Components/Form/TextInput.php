<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextInput extends Component
{
    public $label;
    public $inputName;
    public $inputId;
    public $value;
    public $placeholder;
    public $error;
    public $type;
    /**
     * Create a new component instance.
     */
    public function __construct( $label, $inputName, $inputId, $value=null, $placeholder, $type, $error=null)
    {
        $this->label = $label;
        $this->inputName = $inputName;
        $this->inputId = $inputId;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->error = $error;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.text-input');
    }
}
