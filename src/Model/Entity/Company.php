<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity
 *
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property string $phone
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string $slug
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Delivery[] $deliveries
 * @property \App\Model\Entity\Photo[] $photos
 */
class Company extends Entity
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
        'name' => true,
        'user_id' => true,
        'phone' => true,
        'created' => true,
        'modified' => true,
        'slug' => true,
        'user' => true,
        'deliveries' => true,
        'photos' => true,
    ];
}
