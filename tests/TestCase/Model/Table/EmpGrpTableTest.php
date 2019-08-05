<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpGrpTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpGrpTable Test Case
 */
class EmpGrpTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpGrpTable
     */
    public $EmpGrp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EmpGrp',
        'app.SetHoliday'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmpGrp') ? [] : ['className' => EmpGrpTable::class];
        $this->EmpGrp = TableRegistry::getTableLocator()->get('EmpGrp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmpGrp);

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
