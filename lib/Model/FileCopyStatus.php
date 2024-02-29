<?php
/**
 * FileCopyStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  BytescalePHP\Client
 * @author   BytescalePHP Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * @bytescale/api
 *
 * Bytescale API
 *
 * OpenAPI spec version: 2.0.0
 * Contact: hello@bytescale.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * BytescalePHP Codegen version: 3.0.54
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BytescalePHP\Client\Model;
use \BytescalePHP\Client\ObjectSerializer;

/**
 * FileCopyStatus Class Doc Comment
 *
 * @category Class
 * @description The result of the CopyFile operation.
 * @package  BytescalePHP\Client
 * @author   BytescalePHP Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileCopyStatus
{
    /**
     * Possible values of this enum
     */
    const COPIED = 'Copied';
    const FILE_NOT_FOUND = 'FileNotFound';
    const SKIPPED_DUE_TO_CONDITION = 'SkippedDueToCondition';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::COPIED
            self::FILE_NOT_FOUND
            self::SKIPPED_DUE_TO_CONDITION
        ];
    }
}
