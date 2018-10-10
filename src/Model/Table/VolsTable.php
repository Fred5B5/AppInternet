<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vols Model
 *
 * @property |\Cake\ORM\Association\HasMany $Reservations
 *
 * @method \App\Model\Entity\Vol get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vol newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Vol[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vol|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vol|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vol patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vol[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vol findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VolsTable extends Table
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

        $this->setTable('vols');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Reservations', [
            'foreignKey' => 'vol_id'
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
            ->integer('EmplacementDepart')
            ->requirePresence('EmplacementDepart', 'create')
            ->notEmpty('EmplacementDepart');

        $validator
            ->integer('EmplacementFin')
            ->requirePresence('EmplacementFin', 'create')
            ->notEmpty('EmplacementFin');

        $validator
            ->dateTime('HeureDepart')
            ->requirePresence('HeureDepart', 'create')
            ->notEmpty('HeureDepart');

        $validator
            ->dateTime('HeureArriver')
            ->requirePresence('HeureArriver', 'create')
            ->notEmpty('HeureArriver');

        $validator
            ->integer('PrixEconomique')
            ->allowEmpty('PrixEconomique');

        return $validator;
    }
}
