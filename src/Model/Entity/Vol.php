<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vol Entity
 *
 * @property int $id
 * @property int $EmplacementDepart
 * @property int $EmplacementFin
 * @property \Cake\I18n\FrozenTime $HeureDepart
 * @property \Cake\I18n\FrozenTime $HeureArriver
 * @property int $PrixEconomique
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
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
        'EmplacementDepart' => true,
        'EmplacementFin' => true,
        'HeureDepart' => true,
        'HeureArriver' => true,
        'PrixEconomique' => true,
        'created' => true,
        'modified' => true
    ];
}
