<?php

namespace OpenActive\Models\Tests\Unit;

use PHPUnit\Framework\TestCase;
use OpenActive\Enums\SchemaOrg\EventStatusType;
use OpenActive\Models\OA\ScheduledSession;

class EnumTest extends TestCase
{
    public function testConstructionFromObj()
    {
        $eventStatus = new EventStatusType\EventCancelled();
        $scheduledSessionData = [
            'id' => '124',
            'identifier' => '1234',
            'duration' => 'PT1H',
            'eventStatus' => $eventStatus
        ];
        $session = new ScheduledSession($scheduledSessionData);

        $this->assertInstanceOf(ScheduledSession::class, $session);
        $this->assertInstanceOf(
            EventStatusType\EventCancelled::class,
            $session->getEventStatus()
        );
    }

    public function testConstructionFromStr()
    {
        $eventStatus = "https://schema.org/EventCancelled";
        $scheduledsessionOptions = [
            'id' => '124',
            'identifier' => '1234',
            'duration' => 'PT1H',
            'eventStatus' => $eventStatus
        ];
        $session = new ScheduledSession($scheduledsessionOptions);

        $this->assertInstanceOf(ScheduledSession::class, $session);
        $this->assertInstanceOf(
            EventStatusType\EventCancelled::class,
            $session->getEventStatus()
        );
    }

    public function testEnumSerialization()
    {
        $eventStatus = new EventStatusType\EventCancelled();
        $scheduledSessionData = [
            'id' => '124',
            'identifier' => '1234',
            'duration' => 'PT1H',
            'eventStatus' => $eventStatus
        ];
        $session = new ScheduledSession($scheduledSessionData);

        $classname = ScheduledSession::class;

        $serializedData = json_decode($classname::serialize($session), true);

        $this->assertEquals(
            $serializedData['eventStatus'],
            $eventStatus::memberVal
        );
    }
}
