<?php namespace Streams\Addon\FieldType\Integer;

use Streams\Core\Addon\FieldTypeAbstract;

class IntegerFieldType extends FieldTypeAbstract
{
    /**
     * The database column type this field type uses.
     *
     * @var string
     */
    public $columnType = 'integer';

    /**
     * Return the input used for forms.
     *
     * @return mixed
     */
    public function input()
    {
        return \Form::input('number', $this->inputName(), $this->value());
    }

    /**
     * Force an integer value.
     *
     * @param $value
     * @return int|mixed
     */
    public function mutate($value)
    {
        return (int)$value;
    }
}
