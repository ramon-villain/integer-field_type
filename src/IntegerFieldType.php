<?php namespace Anomaly\IntegerFieldType;

use Anomaly\Streams\Platform\Addon\FieldType\FieldType;

/**
 * Class IntegerFieldType
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\FieldType\Integer
 */
class IntegerFieldType extends FieldType
{

    /**
     * Base field type rules.
     *
     * @var array
     */
    protected $rules = ['integer'];

    /**
     * The database column type.
     *
     * @var string
     */
    protected $columnType = 'integer';

    /**
     * Convert value to integer before setting on the model.
     *
     * @param $value
     * @return int|mixed
     */
    public function mutate($value)
    {
        return (int)$value;
    }
}
