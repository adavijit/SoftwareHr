<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FileuploadrecordTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FileuploadrecordTable Test Case
 */
class FileuploadrecordTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FileuploadrecordTable
     */
    public $Fileuploadrecord;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Fileuploadrecord'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Fileuploadrecord') ? [] : ['className' => FileuploadrecordTable::class];
        $this->Fileuploadrecord = TableRegistry::getTableLocator()->get('Fileuploadrecord', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Fileuploadrecord);

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
