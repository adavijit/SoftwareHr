<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Attendancerecord Model
 *
 * @method \App\Model\Entity\Attendancerecord get($primaryKey, $options = [])
 * @method \App\Model\Entity\Attendancerecord newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Attendancerecord[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Attendancerecord|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Attendancerecord saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Attendancerecord patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Attendancerecord[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Attendancerecord findOrCreate($search, callable $callback = null, $options = [])
 */
class AttendancerecordTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('attendancerecord');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('empId')
            ->maxLength('empId', 50)
            ->allowEmptyString('empId');

        $validator
            ->scalar('empName')
            ->maxLength('empName', 50)
            ->allowEmptyString('empName');

        $validator
            ->date('Att_Date')
            ->allowEmptyDate('Att_Date');

        $validator
            ->time('InTime')
            ->allowEmptyTime('InTime');

        $validator
            ->time('OutTime')
            ->allowEmptyTime('OutTime');

        $validator
            ->scalar('Shift')
            ->maxLength('Shift', 50)
            ->allowEmptyString('Shift');

        $validator
            ->time('S_InTime')
            ->allowEmptyTime('S_InTime');

        $validator
            ->time('S_OutTime')
            ->allowEmptyTime('S_OutTime');

        $validator
            ->time('WorkDurr')
            ->allowEmptyTime('WorkDurr');

        $validator
            ->time('OT')
            ->allowEmptyTime('OT');

        $validator
            ->time('TotDurr')
            ->allowEmptyTime('TotDurr');

        $validator
            ->time('LateBy')
            ->allowEmptyTime('LateBy');

        $validator
            ->time('EarlyGoingBy')
            ->allowEmptyTime('EarlyGoingBy');

        $validator
            ->scalar('Att_Status')
            ->maxLength('Att_Status', 50)
            ->allowEmptyString('Att_Status');

        $validator
            ->scalar('Punch_Records')
            ->maxLength('Punch_Records', 50)
            ->allowEmptyString('Punch_Records');

        $validator
            ->integer('id_fileuploadrecord')
            ->requirePresence('id_fileuploadrecord', 'create')
            ->notEmptyFile('id_fileuploadrecord');

        return $validator;
    }
}
