<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vol Entity
 *
 * @property int $id
 * @property int $emplacementdepart_id
 * @property int $emplacementfin_id
 * @property \Cake\I18n\FrozenTime $HeureDepart
 * @property \Cake\I18n\FrozenTime $HeureArriver
 * @property int $PrixEconomique
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Emplacement $emplacement
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class Vol extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'emplacementdepart_id' => true,
        'emplacementfin_id' => true,
        'HeureDepart' => true,
        'HeureArriver' => true,
        'PrixEconomique' => true,
        'created' => true,
        'modified' => true,
        'emplacement' => true,
        'reservations' => true
    ];
}
