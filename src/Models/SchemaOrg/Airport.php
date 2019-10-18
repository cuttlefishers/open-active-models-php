<?php

namespace OpenActive\Models\SchemaOrg;

/**
 * [NOTICE: This is a beta class, and is highly likely to change in future versions of this library.].
 *
 */
class Airport extends \OpenActive\Models\SchemaOrg\CivicStructure
{
    /**
     * IATA identifier for an airline or airport.
     *
     *
     * @var string
     */
    protected $iataCode;

    /**
     * ICAO identifier for an airport.
     *
     *
     * @var string
     */
    protected $icaoCode;

    /**
     * @return string
     */
    public function getIataCode()
    {
        return $this->iataCode;
    }

    /**
     * @param string $iataCode
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setIataCode($iataCode)
    {
        $types = array(
            "string",
        );

        $iataCode = self::checkTypes($iataCode, $types);

        $this->iataCode = $iataCode;
    }

    /**
     * @return string
     */
    public function getIcaoCode()
    {
        return $this->icaoCode;
    }

    /**
     * @param string $icaoCode
     * @return void
     * @throws \Exception If the provided argument is not of a supported type.
     */
    public function setIcaoCode($icaoCode)
    {
        $types = array(
            "string",
        );

        $icaoCode = self::checkTypes($icaoCode, $types);

        $this->icaoCode = $icaoCode;
    }

}