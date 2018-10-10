<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Emplacement Entity
 *
 * @property int $id
 * @property string $Nom_Emplacement
 * @property string $Accronyme_Emplacement
 */
class Emplacement extends Entity
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
        'Nom_Emplacement' => true,
        'Accronyme_Emplacement' => true
    ];
}
