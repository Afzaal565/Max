{{-- public $label;
public $inputName;
public $inputId;
public $value;
public $placeholder;
public $error; --}}

<label for="{{$inputId}}" class="form-label">{{$label}}</label>
<input type="{{$type}}" name="{{ $inputName }}" @class(['form-control', 'is-invalid' => count($error) > 0 ])
 id="{{$inputId}}" value="{{ $value ?? old('name') }}"
 placeholder="{{ $placeholder }}"
    required>
@if (isset($error) && count($error) > 0)
<div class="invalid-feedback">
    {{ json_encode($error) }}
</div>
@endif
