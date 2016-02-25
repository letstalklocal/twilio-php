<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Sip\Domain;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string accountSid
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 * @property string friendlyName
 * @property string sid
 * @property string uri
 */
class CredentialListMappingInstance extends InstanceResource {
    /**
     * Initialize the CredentialListMappingInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The sid
     * @return \Twilio\Rest\Api\V2010\Account\Sip\Domain\CredentialListMappingInstance 
     */
    public function __construct(Version $version, array $payload, $accountSid, $domainSid, $sid = null) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'accountSid' => $payload['account_sid'],
            'dateCreated' => Deserialize::iso8601DateTime($payload['date_created']),
            'dateUpdated' => Deserialize::iso8601DateTime($payload['date_updated']),
            'friendlyName' => $payload['friendly_name'],
            'sid' => $payload['sid'],
            'uri' => $payload['uri'],
        );
        
        $this->solution = array(
            'accountSid' => $accountSid,
            'domainSid' => $domainSid,
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return \Twilio\Rest\Api\V2010\Account\Sip\Domain\CredentialListMappingContext Context for this
     *                                                                                CredentialListMappingInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new CredentialListMappingContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['domainSid'],
                $this->solution['sid']
            );
        }
        
        return $this->context;
    }

    /**
     * Fetch a CredentialListMappingInstance
     * 
     * @return CredentialListMappingInstance Fetched CredentialListMappingInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Deletes the CredentialListMappingInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete() {
        return $this->proxy()->delete();
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
        return '[Twilio.Api.V2010.CredentialListMappingInstance ' . implode(' ', $context) . ']';
    }
}