<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Designation Model
 *
 * @method \App\Model\Entity\Designation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Designation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Designation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Designation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Designation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Designation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Designation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Designation findOrCreate($search, callable $callback = null, $options = [])
 */
class DesignationTable extends Table
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

        $this->setTable('designation');
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
            ->scalar('designation')
            ->maxLength('designation', 50)
            ->allowEmptyString('designation');

        $validator
            ->scalar('department')
            ->maxLength('department', 50)
            ->allowEmptyString('department');

        $validator
            ->scalar('documentName')
            ->maxLength('documentName', 255)
            ->allowEmptyString('documentName');

        $validator
            ->scalar('documentPath')
            ->maxLength('documentPath', 255)
            ->allowEmptyString('documentPath');

        $validator
            ->scalar('designationStatus')
            ->maxLength('designationStatus', 50)
            ->allowEmptyString('designationStatus');

        return $validator;
    }
}
