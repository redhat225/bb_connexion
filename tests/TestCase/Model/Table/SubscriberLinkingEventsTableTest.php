<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SubscriberLinkingEventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SubscriberLinkingEventsTable Test Case
 */
class SubscriberLinkingEventsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SubscriberLinkingEventsTable
     */
    public $SubscriberLinkingEvents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.subscriber_linking_events',
        'app.subscribers',
        'app.subscriber_events'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SubscriberLinkingEvents') ? [] : ['className' => 'App\Model\Table\SubscriberLinkingEventsTable'];
        $this->SubscriberLinkingEvents = TableRegistry::get('SubscriberLinkingEvents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SubscriberLinkingEvents);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
