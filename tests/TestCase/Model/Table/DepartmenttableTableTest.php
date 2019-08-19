<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepartmenttableTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepartmenttableTable Test Case
 */
class DepartmenttableTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DepartmenttableTable
     */
    public $Departmenttable;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Departmenttable'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Departmenttable') ? [] : ['className' => DepartmenttableTable::class];
        $this->Departmenttable = TableRegistry::getTableLocator()->get('Departmenttable', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Departmenttable);

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
