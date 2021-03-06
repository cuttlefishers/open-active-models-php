<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Observation extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Observation";
    }

    public static function fieldList() {
        $fields = [
            "marginOfError" => "marginOfError",
            "observedNode" => "observedNode",
            "measuredValue" => "measuredValue",
            "observationDate" => "observationDate",
            "measuredProperty" => "measuredProperty",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * A marginOfError for an <a class="localLink" href="https://schema.org/Observation">Observation</a>.
     *
     *
     * @var null|DateTime
     */
    protected $marginOfError;

    /**
     * The observedNode of an <a class="localLink" href="https://schema.org/Observation">Observation</a>, often a <a class="localLink" href="https://schema.org/StatisticalPopulation">StatisticalPopulation</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\StatisticalPopulation
     */
    protected $observedNode;

    /**
     * The measuredValue of an <a class="localLink" href="https://schema.org/Observation">Observation</a>.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\DataType
     */
    protected $measuredValue;

    /**
     * The observationDate of an <a class="localLink" href="https://schema.org/Observation">Observation</a>.
     *
     *
     * @var null|DateTime
     */
    protected $observationDate;

    /**
     * The measuredProperty of an <a class="localLink" href="https://schema.org/Observation">Observation</a>, either a schema.org property, a property from other RDF-compatible systems e.g. W3C RDF Data Cube, or schema.org extensions such as <a href="https://www.gs1.org/voc/?show=properties">GS1's</a>.
     *
     *
     * @var string
     */
    protected $measuredProperty;

    /**
     * @return null|DateTime
     */
    public function getMarginOfError()
    {
        return $this->marginOfError;
    }

    /**
     * @param null|DateTime $marginOfError
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMarginOfError($marginOfError)
    {
        $types = array(
            "null",
            "DateTime",
        );

        $marginOfError = self::checkTypes($marginOfError, $types);

        $this->marginOfError = $marginOfError;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\StatisticalPopulation
     */
    public function getObservedNode()
    {
        return $this->observedNode;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\StatisticalPopulation $observedNode
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setObservedNode($observedNode)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\StatisticalPopulation",
        );

        $observedNode = self::checkTypes($observedNode, $types);

        $this->observedNode = $observedNode;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\DataType
     */
    public function getMeasuredValue()
    {
        return $this->measuredValue;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\DataType $measuredValue
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeasuredValue($measuredValue)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\DataType",
        );

        $measuredValue = self::checkTypes($measuredValue, $types);

        $this->measuredValue = $measuredValue;
    }

    /**
     * @return null|DateTime
     */
    public function getObservationDate()
    {
        return $this->observationDate;
    }

    /**
     * @param null|DateTime $observationDate
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setObservationDate($observationDate)
    {
        $types = array(
            "null",
            "DateTime",
        );

        $observationDate = self::checkTypes($observationDate, $types);

        $this->observationDate = $observationDate;
    }

    /**
     * @return string
     */
    public function getMeasuredProperty()
    {
        return $this->measuredProperty;
    }

    /**
     * @param string $measuredProperty
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setMeasuredProperty($measuredProperty)
    {
        $types = array(
            "string",
        );

        $measuredProperty = self::checkTypes($measuredProperty, $types);

        $this->measuredProperty = $measuredProperty;
    }

}
