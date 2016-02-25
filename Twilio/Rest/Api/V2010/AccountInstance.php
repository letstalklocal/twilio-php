<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string authToken
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 * @property string friendlyName
 * @property string ownerAccountSid
 * @property string sid
 * @property account.Status status
 * @property string subresourceUris
 * @property account.Type type
 * @property string uri
 */
class AccountInstance extends InstanceResource {
    /**
     * Initialize the AccountInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid Fetch by unique Account Sid
     * @return \Twilio\Rest\Api\V2010\AccountInstance 
     */
    public function __construct(Version $version, array $payload, $sid = null) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'authToken' => $payload['auth_token'],
            'dateCreated' => Deserialize::iso8601DateTime($payload['date_created']),
            'dateUpdated' => Deserialize::iso8601DateTime($payload['date_updated']),
            'friendlyName' => $payload['friendly_name'],
            'ownerAccountSid' => $payload['owner_account_sid'],
            'sid' => $payload['sid'],
            'status' => $payload['status'],
            'subresourceUris' => $payload['subresource_uris'],
            'type' => $payload['type'],
            'uri' => $payload['uri'],
        );
        
        $this->solution = array(
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return \Twilio\Rest\Api\V2010\AccountContext Context for this
     *                                               AccountInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new AccountContext(
                $this->version,
                $this->solution['sid']
            );
        }
        
        return $this->context;
    }

    /**
     * Fetch a AccountInstance
     * 
     * @return AccountInstance Fetched AccountInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Update the AccountInstance
     * 
     * @param array $options Optional Arguments
     * @return AccountInstance Updated AccountInstance
     */
    public function update(array $options = array()) {
        return $this->proxy()->update(
            $options
        );
    }

    /**
     * Access the addresses
     * 
     * @return \Twilio\Rest\Api\V2010\Account\AddressList 
     */
    protected function getAddresses() {
        return $this->proxy()->addresses;
    }

    /**
     * Access the applications
     * 
     * @return \Twilio\Rest\Api\V2010\Account\ApplicationList 
     */
    protected function getApplications() {
        return $this->proxy()->applications;
    }

    /**
     * Access the authorizedConnectApps
     * 
     * @return \Twilio\Rest\Api\V2010\Account\AuthorizedConnectAppList 
     */
    protected function getAuthorizedConnectApps() {
        return $this->proxy()->authorizedConnectApps;
    }

    /**
     * Access the availablePhoneNumbers
     * 
     * @return \Twilio\Rest\Api\V2010\Account\AvailablePhoneNumberCountryList 
     */
    protected function getAvailablePhoneNumbers() {
        return $this->proxy()->availablePhoneNumbers;
    }

    /**
     * Access the calls
     * 
     * @return \Twilio\Rest\Api\V2010\Account\CallList 
     */
    protected function getCalls() {
        return $this->proxy()->calls;
    }

    /**
     * Access the conferences
     * 
     * @return \Twilio\Rest\Api\V2010\Account\ConferenceList 
     */
    protected function getConferences() {
        return $this->proxy()->conferences;
    }

    /**
     * Access the connectApps
     * 
     * @return \Twilio\Rest\Api\V2010\Account\ConnectAppList 
     */
    protected function getConnectApps() {
        return $this->proxy()->connectApps;
    }

    /**
     * Access the incomingPhoneNumbers
     * 
     * @return \Twilio\Rest\Api\V2010\Account\IncomingPhoneNumberList 
     */
    protected function getIncomingPhoneNumbers() {
        return $this->proxy()->incomingPhoneNumbers;
    }

    /**
     * Access the messages
     * 
     * @return \Twilio\Rest\Api\V2010\Account\MessageList 
     */
    protected function getMessages() {
        return $this->proxy()->messages;
    }

    /**
     * Access the notifications
     * 
     * @return \Twilio\Rest\Api\V2010\Account\NotificationList 
     */
    protected function getNotifications() {
        return $this->proxy()->notifications;
    }

    /**
     * Access the outgoingCallerIds
     * 
     * @return \Twilio\Rest\Api\V2010\Account\OutgoingCallerIdList 
     */
    protected function getOutgoingCallerIds() {
        return $this->proxy()->outgoingCallerIds;
    }

    /**
     * Access the queues
     * 
     * @return \Twilio\Rest\Api\V2010\Account\QueueList 
     */
    protected function getQueues() {
        return $this->proxy()->queues;
    }

    /**
     * Access the recordings
     * 
     * @return \Twilio\Rest\Api\V2010\Account\RecordingList 
     */
    protected function getRecordings() {
        return $this->proxy()->recordings;
    }

    /**
     * Access the sandbox
     * 
     * @return \Twilio\Rest\Api\V2010\Account\SandboxList 
     */
    protected function getSandbox() {
        return $this->proxy()->sandbox;
    }

    /**
     * Access the sip
     * 
     * @return \Twilio\Rest\Api\V2010\Account\SipList 
     */
    protected function getSip() {
        return $this->proxy()->sip;
    }

    /**
     * Access the sms
     * 
     * @return \Twilio\Rest\Api\V2010\Account\SmsList 
     */
    protected function getSms() {
        return $this->proxy()->sms;
    }

    /**
     * Access the tokens
     * 
     * @return \Twilio\Rest\Api\V2010\Account\TokenList 
     */
    protected function getTokens() {
        return $this->proxy()->tokens;
    }

    /**
     * Access the transcriptions
     * 
     * @return \Twilio\Rest\Api\V2010\Account\TranscriptionList 
     */
    protected function getTranscriptions() {
        return $this->proxy()->transcriptions;
    }

    /**
     * Access the usage
     * 
     * @return \Twilio\Rest\Api\V2010\Account\UsageList 
     */
    protected function getUsage() {
        return $this->proxy()->usage;
    }

    /**
     * Access the validationRequests
     * 
     * @return \Twilio\Rest\Api\V2010\Account\ValidationRequestList 
     */
    protected function getValidationRequests() {
        return $this->proxy()->validationRequests;
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
        return '[Twilio.Api.V2010.AccountInstance ' . implode(' ', $context) . ']';
    }
}