<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubscriberEventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubscriberEventsTable Test Case
 */
class SubscriberEventsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SubscriberEventsTable
     */
    public $SubscriberEvents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.subscriber_events',
        'app.subscriber_linking_events'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SubscriberEvents') ? [] : ['className' => 'App\Model\Table\SubscriberEventsTable'];
        $this->SubscriberEvents = TableRegistry::get('SubscriberEvents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SubscriberEvents);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
