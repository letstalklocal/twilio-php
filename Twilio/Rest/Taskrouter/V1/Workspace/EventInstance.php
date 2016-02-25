<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Taskrouter\V1\Workspace;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string accountSid
 * @property string actorSid
 * @property string actorType
 * @property string actorUrl
 * @property string description
 * @property string eventData
 * @property \DateTime eventDate
 * @property string eventType
 * @property string resourceSid
 * @property string resourceType
 * @property string resourceUrl
 * @property string sid
 * @property string source
 * @property string sourceIpAddress
 * @property string url
 */
class EventInstance extends InstanceResource {
    /**
     * Initialize the EventInstance
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The sid
     * @return \Twilio\Rest\Taskrouter\V1\Workspace\EventInstance 
     */
    public function __construct(Version $version, array $payload, $workspaceSid, $sid = null) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'accountSid' => $payload['account_sid'],
            'actorSid' => $payload['actor_sid'],
            'actorType' => $payload['actor_type'],
            'actorUrl' => $payload['actor_url'],
            'description' => $payload['description'],
            'eventData' => $payload['event_data'],
            'eventDate' => Deserialize::iso8601DateTime($payload['event_date']),
            'eventType' => $payload['event_type'],
            'resourceSid' => $payload['resource_sid'],
            'resourceType' => $payload['resource_type'],
            'resourceUrl' => $payload['resource_url'],
            'sid' => $payload['sid'],
            'source' => $payload['source'],
            'sourceIpAddress' => $payload['source_ip_address'],
            'url' => $payload['url'],
        );
        
        $this->solution = array(
            'workspaceSid' => $workspaceSid,
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return \Twilio\Rest\Taskrouter\V1\Workspace\EventContext Context for this
     *                                                           EventInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new EventContext(
                $this->version,
                $this->solution['workspaceSid'],
                $this->solution['sid']
            );
        }
        
        return $this->context;
    }

    /**
     * Fetch a EventInstance
     * 
     * @return EventInstance Fetched EventInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
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
        return '[Twilio.Taskrouter.V1.EventInstance ' . implode(' ', $context) . ']';
    }
}