<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class DaySpa extends \OpenActive\Models\SchemaOrg\HealthAndBeautyBusiness
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:DaySpa";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
