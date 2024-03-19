<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Itemlistaservico Entity
 *
 * @property int $id
 * @property string $item
 * @property string $subitem
 * @property string $descricao
 * @property string $cnae
 */
class Itemlistaservico extends Entity
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
        'item' => true,
        'subitem' => true,
        'descricao' => true,
        'cnae' => true,
    ];
}
