<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departmenttable Model
 *
 * @method \App\Model\Entity\Departmenttable get($primaryKey, $options = [])
 * @method \App\Model\Entity\Departmenttable newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Departmenttable[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Departmenttable|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departmenttable saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departmenttable patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Departmenttable[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Departmenttable findOrCreate($search, callable $callback = null, $options = [])
 */
class DepartmenttableTable extends Table
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

        $this->setTable('departmenttable');
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
            ->scalar('department')
            ->maxLength('department', 50)
            ->allowEmptyString('department');

        $validator
            ->integer('designationId')
            ->allowEmptyString('designationId');

        $validator
            ->scalar('documentName')
            ->maxLength('documentName', 255)
            ->allowEmptyString('documentName');

        $validator
            ->scalar('documentPath')
            ->maxLength('documentPath', 255)
            ->allowEmptyString('documentPath');

        $validator
            ->scalar('departmentStatus')
            ->maxLength('departmentStatus', 50)
            ->allowEmptyString('departmentStatus');

        return $validator;
    }
}
