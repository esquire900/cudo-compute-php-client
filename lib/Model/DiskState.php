<?php
/**
 * DiskState
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Cudo Compute service
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.57
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * DiskState Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DiskState
{
    /**
     * Possible values of this enum
     */
    const INIT = 'DISK_STATE_INIT';
    const READY = 'DISK_STATE_READY';
    const USED = 'DISK_STATE_USED';
    const DISABLED = 'DISK_STATE_DISABLED';
    const LOCKED = 'DISK_STATE_LOCKED';
    const ERROR = 'DISK_STATE_ERROR';
    const _CLONE = 'DISK_STATE_CLONE';
    const DELETE = 'DISK_STATE_DELETE';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INIT
            self::READY
            self::USED
            self::DISABLED
            self::LOCKED
            self::ERROR
            self::_CLONE
            self::DELETE
        ];
    }
}
