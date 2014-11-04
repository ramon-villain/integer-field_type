<?php namespace Anomaly\Streams\Addon\FieldType\Integer;

use Anomaly\Streams\Platform\Addon\FieldType\FieldTypeAddon;

/**
 * Class IntegerFieldType
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\FieldType\Integer
 */
class IntegerFieldType extends FieldTypeAddon
{

    /**
     * Base field type rules.
     *
     * @var array
     */
    protected $rules = ['integer'];

    /**
     * Uses integer database column.
     *
     * @var string
     */
    protected $columnType = 'integer';

    /**
     * Return the input HTML.
     *
     * @return mixed
     */
    public function input()
    {
        return app('form')->input('number', $this->getFieldName(), $this->getValue());
    }

    /**
     * Hook into the setAttribute and make
     * sure the value is an integer.
     *
     * @param $value
     * @return int
     */
    public function onSet($value)
    {
        return (int)$value;
    }
}
