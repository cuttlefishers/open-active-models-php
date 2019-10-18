<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class OpeningHoursSpecification extends \OpenActive\Models\SchemaOrg\StructuredValue
{
    /**
     * The date when the item becomes valid.
     *
     *
     * @var DateTime|null
     */
    protected $validFrom;

    /**
     * The date after when the item is not valid. For example the end of an offer, salary period, or a period of opening hours.
     *
     *
     * @var DateTime|null
     */
    protected $validThrough;

    /**
     * The opening hour of the place or service on the given day(s) of the week.
     *
     *
     * @var DateTime|null
     */
    protected $opens;

    /**
     * The closing hour of the place or service on the given day(s) of the week.
     *
     *
     * @var DateTime|null
     */
    protected $closes;

    /**
     * The day of the week for which these opening hours are valid.
     *
     *
     * @var Schema.NET.DayOfWeek|null
     */
    protected $dayOfWeek;

    /**
     * @return DateTime|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * @param DateTime|null $validFrom
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setValidFrom($validFrom)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $validFrom = self::checkTypes($validFrom, $types);

        $this->validFrom = $validFrom;
    }

    /**
     * @return DateTime|null
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * @param DateTime|null $validThrough
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setValidThrough($validThrough)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $validThrough = self::checkTypes($validThrough, $types);

        $this->validThrough = $validThrough;
    }

    /**
     * @return DateTime|null
     */
    public function getOpens()
    {
        return $this->opens;
    }

    /**
     * @param DateTime|null $opens
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setOpens($opens)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $opens = self::checkTypes($opens, $types);

        $this->opens = $opens;
    }

    /**
     * @return DateTime|null
     */
    public function getCloses()
    {
        return $this->closes;
    }

    /**
     * @param DateTime|null $closes
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setCloses($closes)
    {
        $types = array(
            "DateTime",
            "null",
        );

        $closes = self::checkTypes($closes, $types);

        $this->closes = $closes;
    }

    /**
     * @return Schema.NET.DayOfWeek|null
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @param Schema.NET.DayOfWeek|null $dayOfWeek
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $types = array(
            "Schema.NET.DayOfWeek",
            "null",
        );

        $dayOfWeek = self::checkTypes($dayOfWeek, $types);

        $this->dayOfWeek = $dayOfWeek;
    }

}