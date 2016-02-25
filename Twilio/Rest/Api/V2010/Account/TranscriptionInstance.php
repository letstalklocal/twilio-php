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
 * @property string apiVersion
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 * @property string duration
 * @property string price
 * @property string priceUnit
 * @property string recordingSid
 * @property string sid
 * @property transcription.Status status
 * @property string transcriptionText
 * @property string type
 * @property string uri
 */
class TranscriptionInstance extends InstanceResource {
    /**
     * Initialize the TranscriptionInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid Fetch by unique transcription Sid
     * @return \Twilio\Rest\Api\V2010\Account\TranscriptionInstance 
     */
    public function __construct(Version $version, array $payload, $accountSid, $sid = null) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'accountSid' => $payload['account_sid'],
            'apiVersion' => $payload['api_version'],
            'dateCreated' => Deserialize::iso8601DateTime($payload['date_created']),
            'dateUpdated' => Deserialize::iso8601DateTime($payload['date_updated']),
            'duration' => $payload['duration'],
            'price' => $payload['price'],
            'priceUnit' => $payload['price_unit'],
            'recordingSid' => $payload['recording_sid'],
            'sid' => $payload['sid'],
            'status' => $payload['status'],
            'transcriptionText' => $payload['transcription_text'],
            'type' => $payload['type'],
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
     * @return \Twilio\Rest\Api\V2010\Account\TranscriptionContext Context for this
     *                                                             TranscriptionInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new TranscriptionContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }
        
        return $this->context;
    }

    /**
     * Fetch a TranscriptionInstance
     * 
     * @return TranscriptionInstance Fetched TranscriptionInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Deletes the TranscriptionInstance
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
        return '[Twilio.Api.V2010.TranscriptionInstance ' . implode(' ', $context) . ']';
    }
}