<?php

namespace OpenActive\Models\OA;

/**
 * 
 * ## **Error Use Case**
 * The Booking System is unable for technical reasons to produce an `OrderQuote` where the data provided to it is sufficient to allow it to do so.
 * 
 *
 */
class TemporarilyUnableToProduceOrderQuoteError extends \OpenActive\Models\OA\OpenBookingError
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "TemporarilyUnableToProduceOrderQuoteError";
    }

    public static function fieldList() {
        $fields = [
            "name" => "name",
            "statusCode" => "statusCode",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A short, human-readable summary of the problem type. It should not change from occurrence to occurrence of the problem, except for purposes of localization.
     *
     * ```json
     * "name": "The Booking System is unable for technical reasons to produce an 'OrderQuote' where the data provided to it is sufficient to allow it to do so."
     * ```
     *
     * @var string
     */
    protected $name;

    /**
     * Must always be present and set to ```json
     * "statusCode": 503
     * ```
     *
     *
     * @var null|int
     */
    protected $statusCode;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setName($name)
    {
        $types = array(
            "string",
        );

        $name = self::checkTypes($name, $types);

        $this->name = $name;
    }

    /**
     * @return null|int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param null|int $statusCode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setStatusCode($statusCode)
    {
        $types = array(
            "null",
            "int",
        );

        $statusCode = self::checkTypes($statusCode, $types);

        $this->statusCode = $statusCode;
    }

}
