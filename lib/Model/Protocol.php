<?php
/**
 * Protocol
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
 * Protocol Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Protocol
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'PROTOCOL_UNKNOWN';
    const ALL = 'PROTOCOL_ALL';
    const TCP = 'PROTOCOL_TCP';
    const UDP = 'PROTOCOL_UDP';
    const ICMP = 'PROTOCOL_ICMP';
    const ICMPV6 = 'PROTOCOL_ICMPv6';
    const IPSEC = 'PROTOCOL_IPSEC';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN
            self::ALL
            self::TCP
            self::UDP
            self::ICMP
            self::ICMPV6
            self::IPSEC
        ];
    }
}
