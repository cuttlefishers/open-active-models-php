<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class TouristInformationCenter extends \OpenActive\Models\SchemaOrg\LocalBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:TouristInformationCenter";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
