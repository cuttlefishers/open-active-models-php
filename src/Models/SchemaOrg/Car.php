<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class Car extends \OpenActive\Models\SchemaOrg\Vehicle
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:Car";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
