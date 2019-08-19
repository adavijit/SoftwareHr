<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DesignationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DesignationTable Test Case
 */
class DesignationTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DesignationTable
     */
    public $Designation;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Designation'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Designation') ? [] : ['className' => DesignationTable::class];
        $this->Designation = TableRegistry::getTableLocator()->get('Designation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Designation);

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
