<?php

/**
 * MultipartUploadProtocolTest
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
 * Please update the test case below to test the model.
 */

namespace BytescalePHP\Client;

use PHPUnit\Framework\TestCase;

/**
 * MultipartUploadProtocolTest Class Doc Comment
 *
 * @category    Class
 * @description Multipart file upload protocol version.  - &#x60;1.0&#x60;: this protocol version automatically downgrades to single part uploads when files are below a certain size. When this protocol is used for small files, the file exists immediately after the &#x60;PUT&#x60; request to the &#x60;uploadUrl&#x60; completes. This protocol requires more client-side code to implement, and has a known issue whereby file TTLs are ignored if the client code fails to call CompleteUploadPart.  - &#x60;1.1&#x60;: this protocol version uses multipart uploads for all files. When this protocol is used, files only exist after the last CompleteUploadPart request is made. This protocol simplifies client code, and fixes a known issue in the &#x60;2.0&#x60; protocol for file TTLs (described above).
 * @package     BytescalePHP\Client
 * @author      BytescalePHP Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MultipartUploadProtocolTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "MultipartUploadProtocol"
     */
    public function testMultipartUploadProtocol()
    {
    }
}
