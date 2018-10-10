<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $Prenom_Usager
 * @property string $Nom_Usager
 * @property string $password
 * @property int $typeuser_id
 * @property int $imageuser_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Typeuser $typeuser
 * @property \App\Model\Entity\Imageuser $imageuser
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class User extends Entity
{

	protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();
             return $hasher->hash($value);
        }
    }

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
        'username' => true,
        'email' => true,
        'Prenom_Usager' => true,
        'Nom_Usager' => true,
        'password' => true,
        'typeuser_id' => true,
        'imageuser_id' => true,
        'created' => true,
        'modified' => true,
        'typeuser' => true,
        'imageuser' => true,
        'reservations' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
