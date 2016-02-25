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
 * @property string friendlyName
 * @property string messageStatusCallback
 * @property string sid
 * @property string smsFallbackMethod
 * @property string smsFallbackUrl
 * @property string smsMethod
 * @property string smsStatusCallback
 * @property string smsUrl
 * @property string statusCallback
 * @property string statusCallbackMethod
 * @property string uri
 * @property string voiceCallerIdLookup
 * @property string voiceFallbackMethod
 * @property string voiceFallbackUrl
 * @property string voiceMethod
 * @property string voiceUrl
 */
class ApplicationInstance extends InstanceResource {
    /**
     * Initialize the ApplicationInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid Fetch by unique Application Sid
     * @return \Twilio\Rest\Api\V2010\Account\ApplicationInstance 
     */
    public function __construct(Version $version, array $payload, $accountSid, $sid = null) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'accountSid' => $payload['account_sid'],
            'apiVersion' => $payload['api_version'],
            'dateCreated' => Deserialize::iso8601DateTime($payload['date_created']),
            'dateUpdated' => Deserialize::iso8601DateTime($payload['date_updated']),
            'friendlyName' => $payload['friendly_name'],
            'messageStatusCallback' => $payload['message_status_callback'],
            'sid' => $payload['sid'],
            'smsFallbackMethod' => $payload['sms_fallback_method'],
            'smsFallbackUrl' => $payload['sms_fallback_url'],
            'smsMethod' => $payload['sms_method'],
            'smsStatusCallback' => $payload['sms_status_callback'],
            'smsUrl' => $payload['sms_url'],
            'statusCallback' => $payload['status_callback'],
            'statusCallbackMethod' => $payload['status_callback_method'],
            'uri' => $payload['uri'],
            'voiceCallerIdLookup' => $payload['voice_caller_id_lookup'],
            'voiceFallbackMethod' => $payload['voice_fallback_method'],
            'voiceFallbackUrl' => $payload['voice_fallback_url'],
            'voiceMethod' => $payload['voice_method'],
            'voiceUrl' => $payload['voice_url'],
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
     * @return \Twilio\Rest\Api\V2010\Account\ApplicationContext Context for this
     *                                                           ApplicationInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new ApplicationContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }
        
        return $this->context;
    }

    /**
     * Deletes the ApplicationInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete() {
        return $this->proxy()->delete();
    }

    /**
     * Fetch a ApplicationInstance
     * 
     * @return ApplicationInstance Fetched ApplicationInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Update the ApplicationInstance
     * 
     * @param array $options Optional Arguments
     * @return ApplicationInstance Updated ApplicationInstance
     */
    public function update(array $options = array()) {
        return $this->proxy()->update(
            $options
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
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Api.V2010.ApplicationInstance ' . implode(' ', $context) . ']';
    }
}