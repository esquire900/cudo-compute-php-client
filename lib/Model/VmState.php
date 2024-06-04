<?php
/**
 * VmState
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
 * VmState Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VmState
{
    /**
     * Possible values of this enum
     */
    const CLONING = 'CLONING';
    const CREATING_SNAPSHOT = 'CREATING_SNAPSHOT';
    const DELETED = 'DELETED';
    const DELETING = 'DELETING';
    const DELETING_SNAPSHOT = 'DELETING_SNAPSHOT';
    const FAILED = 'FAILED';
    const HOTPLUGGING = 'HOTPLUGGING';
    const MIGRATING = 'MIGRATING';
    const RECREATING = 'RECREATING';
    const REVERTING_SNAPSHOT = 'REVERTING_SNAPSHOT';
    const RESIZING = 'RESIZING';
    const RESIZING_DISK = 'RESIZING_DISK';
    const ACTIVE = 'ACTIVE';
    const STARTING = 'STARTING';
    const STOPPED = 'STOPPED';
    const STOPPING = 'STOPPING';
    const SUSPENDED = 'SUSPENDED';
    const SUSPENDING = 'SUSPENDING';
    const UNKNOWN = 'UNKNOWN';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CLONING
            self::CREATING_SNAPSHOT
            self::DELETED
            self::DELETING
            self::DELETING_SNAPSHOT
            self::FAILED
            self::HOTPLUGGING
            self::MIGRATING
            self::RECREATING
            self::REVERTING_SNAPSHOT
            self::RESIZING
            self::RESIZING_DISK
            self::ACTIVE
            self::STARTING
            self::STOPPED
            self::STOPPING
            self::SUSPENDED
            self::SUSPENDING
            self::UNKNOWN
        ];
    }
}
