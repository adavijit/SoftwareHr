<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Fileuploadrecord Model
 *
 * @method \App\Model\Entity\Fileuploadrecord get($primaryKey, $options = [])
 * @method \App\Model\Entity\Fileuploadrecord newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Fileuploadrecord[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Fileuploadrecord|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fileuploadrecord saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Fileuploadrecord patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Fileuploadrecord[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Fileuploadrecord findOrCreate($search, callable $callback = null, $options = [])
 */
class FileuploadrecordTable extends Table
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

        $this->setTable('fileuploadrecord');
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
            ->scalar('month')
            ->maxLength('month', 255)
            ->allowEmptyString('month');

        $validator
            ->integer('record_Year')
            ->allowEmptyString('record_Year');

        $validator
            ->scalar('att_sheetName')
            ->maxLength('att_sheetName', 255)
            ->allowEmptyString('att_sheetName');

        $validator
            ->scalar('att_sheetPath')
            ->maxLength('att_sheetPath', 255)
            ->allowEmptyString('att_sheetPath');

        $validator
            ->date('dtOfUpload')
            ->allowEmptyDate('dtOfUpload');

        return $validator;
    }
}
