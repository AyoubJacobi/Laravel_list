
    {{ Form::label($name, null, ['class' => 'col-sm-2 control-label']) }}
    
    {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
   