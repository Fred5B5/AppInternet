<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Typeuser Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Typeuser get($primaryKey, $options = [])
 * @method \App\Model\Entity\Typeuser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Typeuser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Typeuser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Typeuser|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Typeuser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Typeuser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Typeuser findOrCreate($search, callable $callback = null, $options = [])
 */
class TypeuserTable extends Table
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

        $this->setTable('typeuser');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Users', [
            'foreignKey' => 'typeuser_id'
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
            ->nonNegativeInteger('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('TypeUsager')
            ->maxLength('TypeUsager', 128)
            ->requirePresence('TypeUsager', 'create')
            ->notEmpty('TypeUsager');

        return $validator;
    }
}
