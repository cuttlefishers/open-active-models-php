<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class CivicStructure extends \OpenActive\Models\SchemaOrg\Place
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:CivicStructure";
    }

    public static function fieldList() {
        $fields = [
            "openingHours" => "openingHours",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The general opening hours for a business. Opening hours can be specified as a weekly time range, starting with days, then times per day. Multiple days can be listed with commas ',' separating each day. Day or time ranges are specified using a hyphen '-'.<br/><br/>
     * 
     * <ul>
     * <li>Days are specified using the following two-letter combinations: <code>Mo</code>, <code>Tu</code>, <code>We</code>, <code>Th</code>, <code>Fr</code>, <code>Sa</code>, <code>Su</code>.</li>
     * <li>Times are specified using 24:00 time. For example, 3pm is specified as <code>15:00</code>. </li>
     * <li>Here is an example: <code>&lt;time itemprop="openingHours" datetime=&quot;Tu,Th 16:00-20:00&quot;&gt;Tuesdays and Thursdays 4-8pm&lt;/time&gt;</code>.</li>
     * <li>If a business is open 7 days a week, then it can be specified as <code>&lt;time itemprop=&quot;openingHours&quot; datetime=&quot;Mo-Su&quot;&gt;Monday through Sunday, all day&lt;/time&gt;</code>.</li>
     * </ul>
     * 
     *
     *
     * @var string
     */
    protected $openingHours;

    /**
     * @return string
     */
    public function getOpeningHours()
    {
        return $this->openingHours;
    }

    /**
     * @param string $openingHours
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setOpeningHours($openingHours)
    {
        $types = array(
            "string",
        );

        $openingHours = self::checkTypes($openingHours, $types);

        $this->openingHours = $openingHours;
    }

}
