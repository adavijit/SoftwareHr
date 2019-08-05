<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmpGrpFixture
 */
class EmpGrpFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'emp_grp';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 50, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'grp_name' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'empId' => ['type' => 'integer', 'length' => 50, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'holiday_id' => ['type' => 'integer', 'length' => 50, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'empId' => ['type' => 'index', 'columns' => ['empId'], 'length' => []],
            'holiday_id' => ['type' => 'index', 'columns' => ['holiday_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'emp_grp_ibfk_1' => ['type' => 'foreign', 'columns' => ['empId'], 'references' => ['emp_general_info', 'empId'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'emp_grp_ibfk_2' => ['type' => 'foreign', 'columns' => ['holiday_id'], 'references' => ['set_holiday', 'holiday_id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'grp_name' => 'Lorem ipsum dolor sit amet',
                'empId' => 1,
                'holiday_id' => 1
            ],
        ];
        parent::init();
    }
}
