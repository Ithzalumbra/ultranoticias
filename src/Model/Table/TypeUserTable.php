<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TypeUser Model
 *
 * @method \App\Model\Entity\TypeUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\TypeUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TypeUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TypeUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypeUser|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypeUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TypeUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TypeUser findOrCreate($search, callable $callback = null, $options = [])
 */
class TypeUserTable extends Table
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

        $this->setTable('type_user');
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('type')
            ->maxLength('type', 50)
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        $validator
            ->scalar('description')
            ->maxLength('description', 50)
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}
