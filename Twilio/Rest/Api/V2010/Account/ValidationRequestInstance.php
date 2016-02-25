<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Version;

/**
 * @property string accountSid
 * @property string phoneNumber
 * @property string friendlyName
 * @property string validationCode
 * @property string callSid
 */
class ValidationRequestInstance extends InstanceResource {
    /**
     * Initialize the ValidationRequestInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @return \Twilio\Rest\Api\V2010\Account\ValidationRequestInstance 
     */
    public function __construct(Version $version, array $payload, $accountSid) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'accountSid' => $payload['account_sid'],
            'phoneNumber' => $payload['phone_number'],
            'friendlyName' => $payload['friendly_name'],
            'validationCode' => $payload['validation_code'],
            'callSid' => $payload['call_sid'],
        );
        
        $this->solution = array(
            'accountSid' => $accountSid,
        );
    }

    /**
     * Magic getter to access properties
     * 
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }
        
        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Api.V2010.ValidationRequestInstance]';
    }
}