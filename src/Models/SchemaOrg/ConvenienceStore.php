<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class ConvenienceStore extends \OpenActive\Models\SchemaOrg\Store
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:ConvenienceStore";
    }

    public static function fieldList() {
        $fields = [
        ];

        return array_merge(parent::fieldList(), $fields);
    }

}
