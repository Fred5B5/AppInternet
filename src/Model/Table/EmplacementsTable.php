<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Emplacements Model
 *
 * @method \App\Model\Entity\Emplacement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Emplacement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Emplacement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Emplacement|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Emplacement|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Emplacement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Emplacement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Emplacement findOrCreate($search, callable $callback = null, $options = [])
 */
class EmplacementsTable extends Table
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

        $this->setTable('emplacements');
        $this->setDisplayField('Nom_Emplacement');
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
            ->nonNegativeInteger('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('Nom_Emplacement')
            ->maxLength('Nom_Emplacement', 255)
            ->requirePresence('Nom_Emplacement', 'create')
            ->notEmpty('Nom_Emplacement');

        $validator
            ->scalar('Accronyme_Emplacement')
            ->maxLength('Accronyme_Emplacement', 255)
            ->requirePresence('Accronyme_Emplacement', 'create')
            ->notEmpty('Accronyme_Emplacement');

        return $validator;
    }
}
