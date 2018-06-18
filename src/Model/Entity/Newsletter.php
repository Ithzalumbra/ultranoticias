<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Newsletter Entity
 *
 * @property int $id
 * @property string $title
 * @property string $short_description
 * @property string $main_content
 * @property int $autor
 * @property string $imagen
 * @property \Cake\I18n\FrozenTime $published_on
 */
class Newsletter extends Entity
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
        'title' => true,
        'short_description' => true,
        'main_content' => true,
        'autor' => true,
        'imagen' => true,
        'published_on' => true
    ];
}
