<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AttendancerecordTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AttendancerecordTable Test Case
 */
class AttendancerecordTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AttendancerecordTable
     */
    public $Attendancerecord;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Attendancerecord'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Attendancerecord') ? [] : ['className' => AttendancerecordTable::class];
        $this->Attendancerecord = TableRegistry::getTableLocator()->get('Attendancerecord', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Attendancerecord);

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
