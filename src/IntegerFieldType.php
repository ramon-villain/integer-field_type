<?php namespace Anomaly\Streams\Addon\FieldType\Integer;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeAddon;

class IntegerFieldType extends FieldTypeAddon
{
    public $columnType = 'integer';

    public function input()
    {
        return \Form::input('number', $this->inputName(), $this->value);
    }
}
