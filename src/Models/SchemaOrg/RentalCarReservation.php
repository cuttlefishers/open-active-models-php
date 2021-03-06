<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class RentalCarReservation extends \OpenActive\Models\SchemaOrg\Reservation
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:RentalCarReservation";
    }

    public static function fieldList() {
        $fields = [
            "pickupTime" => "pickupTime",
            "dropoffTime" => "dropoffTime",
            "dropoffLocation" => "dropoffLocation",
            "pickupLocation" => "pickupLocation",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * When a taxi will pickup a passenger or a rental car can be picked up.
     *
     *
     * @var null|DateTime
     */
    protected $pickupTime;

    /**
     * When a rental car can be dropped off.
     *
     *
     * @var null|DateTime
     */
    protected $dropoffTime;

    /**
     * Where a rental car can be dropped off.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $dropoffLocation;

    /**
     * Where a taxi will pick up a passenger or a rental car can be picked up.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\Place
     */
    protected $pickupLocation;

    /**
     * @return null|DateTime
     */
    public function getPickupTime()
    {
        return $this->pickupTime;
    }

    /**
     * @param null|DateTime $pickupTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPickupTime($pickupTime)
    {
        $types = array(
            "null",
            "DateTime",
        );

        $pickupTime = self::checkTypes($pickupTime, $types);

        $this->pickupTime = $pickupTime;
    }

    /**
     * @return null|DateTime
     */
    public function getDropoffTime()
    {
        return $this->dropoffTime;
    }

    /**
     * @param null|DateTime $dropoffTime
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDropoffTime($dropoffTime)
    {
        $types = array(
            "null",
            "DateTime",
        );

        $dropoffTime = self::checkTypes($dropoffTime, $types);

        $this->dropoffTime = $dropoffTime;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getDropoffLocation()
    {
        return $this->dropoffLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $dropoffLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setDropoffLocation($dropoffLocation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
        );

        $dropoffLocation = self::checkTypes($dropoffLocation, $types);

        $this->dropoffLocation = $dropoffLocation;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\Place
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\Place $pickupLocation
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setPickupLocation($pickupLocation)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\Place",
        );

        $pickupLocation = self::checkTypes($pickupLocation, $types);

        $this->pickupLocation = $pickupLocation;
    }

}
