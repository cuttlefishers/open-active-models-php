<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class SeaBodyOfWater extends \OpenActive\Models\SchemaOrg\BodyOfWater
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:SeaBodyOfWater";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
