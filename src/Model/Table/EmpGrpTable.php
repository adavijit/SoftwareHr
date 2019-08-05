<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmpGrp Model
 *
 * @property \App\Model\Table\SetHolidayTable|\Cake\ORM\Association\BelongsTo $SetHoliday
 *
 * @method \App\Model\Entity\EmpGrp get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmpGrp newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmpGrp[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmpGrp|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmpGrp saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmpGrp patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmpGrp[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmpGrp findOrCreate($search, callable $callback = null, $options = [])
 */
class EmpGrpTable extends Table
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

        $this->setTable('emp_grp');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('SetHoliday', [
            'foreignKey' => 'holiday_id'
        ]);
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
            ->scalar('grp_name')
            ->maxLength('grp_name', 255)
            ->allowEmptyString('grp_name');

        $validator
            ->integer('empId')
            ->allowEmptyString('empId');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['holiday_id'], 'SetHoliday'));

        return $rules;
    }
}
