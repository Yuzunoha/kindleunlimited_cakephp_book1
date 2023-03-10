<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Message Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $category_id
 * @property int $status
 * @property string $title
 * @property string|null $body
 * @property \Cake\I18n\FrozenTime|null $create_datetime
 */
class Message extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'user_id' => true,
        'category_id' => true,
        'status' => true,
        'title' => true,
        'body' => true,
        'create_datetime' => true,
    ];
}
