<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $status
 * @property string|null $role
 * @property string|null $pr
 * @property \Cake\I18n\FrozenTime|null $create_datetime
 *
 * @property \App\Model\Entity\Message[] $messages
 */
class User extends Entity
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
        'username' => true,
        'password' => true,
        'status' => true,
        'role' => true,
        'pr' => true,
        'create_datetime' => true,
        'messages' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword(string $password): string
    {
        // パスワードが空文字列でなければハッシュ化する
        return 0 < strlen($password)
            ? (new DefaultPasswordHasher)->hash($password)
            : '';
    }
}
