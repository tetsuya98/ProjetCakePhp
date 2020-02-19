<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Phinxlog Entity
 *
 * @property int $version
 * @property string $migration_name
 * @property \Cake\I18n\FrozenTime $start_time
 * @property \Cake\I18n\FrozenTime $end_time
 * @property bool $breakpoint
 */
class Phinxlog extends Entity
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
        'migration_name' => true,
        'start_time' => true,
        'end_time' => true,
        'breakpoint' => true
    ];
}
