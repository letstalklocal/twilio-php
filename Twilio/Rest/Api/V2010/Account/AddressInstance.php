<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string accountSid
 * @property string city
 * @property string customerName
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 * @property string friendlyName
 * @property string isoCountry
 * @property string postalCode
 * @property string region
 * @property string sid
 * @property string street
 * @property string uri
 */
class AddressInstance extends InstanceResource {
    /**
     * Initialize the AddressInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The sid
     * @return \Twilio\Rest\Api\V2010\Account\AddressInstance 
     */
    public function __construct(Version $version, array $payload, $accountSid, $sid = null) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'accountSid' => $payload['account_sid'],
            'city' => $payload['city'],
            'customerName' => $payload['customer_name'],
            'dateCreated' => Deserialize::iso8601DateTime($payload['date_created']),
            'dateUpdated' => Deserialize::iso8601DateTime($payload['date_updated']),
            'friendlyName' => $payload['friendly_name'],
            'isoCountry' => $payload['iso_country'],
            'postalCode' => $payload['postal_code'],
            'region' => $payload['region'],
            'sid' => $payload['sid'],
            'street' => $payload['street'],
            'uri' => $payload['uri'],
        );
        
        $this->solution = array(
            'accountSid' => $accountSid,
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return \Twilio\Rest\Api\V2010\Account\AddressContext Context for this
     *                                                       AddressInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new AddressContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }
        
        return $this->context;
    }

    /**
     * Deletes the AddressInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete() {
        return $this->proxy()->delete();
    }

    /**
     * Fetch a AddressInstance
     * 
     * @return AddressInstance Fetched AddressInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Update the AddressInstance
     * 
     * @param array $options Optional Arguments
     * @return AddressInstance Updated AddressInstance
     */
    public function update(array $options = array()) {
        return $this->proxy()->update(
            $options
        );
    }

    /**
     * Access the dependentPhoneNumbers
     * 
     * @return \Twilio\Rest\Api\V2010\Account\Address\DependentPhoneNumberList 
     */
    protected function getDependentPhoneNumbers() {
        return $this->proxy()->dependentPhoneNumbers;
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
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Api.V2010.AddressInstance ' . implode(' ', $context) . ']';
    }
}