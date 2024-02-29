<?php
/**
 * AccountJobType
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
 * AccountJobType Class Doc Comment
 *
 * @category Class
 * @description Job type.
 * @package  BytescalePHP\Client
 * @author   BytescalePHP Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountJobType
{
    /**
     * Possible values of this enum
     */
    const PROCESS_IMAGE_JOB = 'ProcessImageJob';
    const PROCESS_VIDEO_JOB = 'ProcessVideoJob';
    const PROCESS_AUDIO_JOB = 'ProcessAudioJob';
    const ANTIVIRUS_JOB = 'AntivirusJob';
    const DELETE_FOLDER_BATCH_JOB = 'DeleteFolderBatchJob';
    const DELETE_FILE_BATCH_JOB = 'DeleteFileBatchJob';
    const COPY_FOLDER_BATCH_JOB = 'CopyFolderBatchJob';
    const COPY_FILE_BATCH_JOB = 'CopyFileBatchJob';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PROCESS_IMAGE_JOB
            self::PROCESS_VIDEO_JOB
            self::PROCESS_AUDIO_JOB
            self::ANTIVIRUS_JOB
            self::DELETE_FOLDER_BATCH_JOB
            self::DELETE_FILE_BATCH_JOB
            self::COPY_FOLDER_BATCH_JOB
            self::COPY_FILE_BATCH_JOB
        ];
    }
}
