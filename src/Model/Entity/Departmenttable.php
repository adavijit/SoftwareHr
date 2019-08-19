<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Departmenttable Entity
 *
 * @property int $id
 * @property string|null $department
 * @property int|null $designationId
 * @property string|null $documentName
 * @property string|null $documentPath
 * @property string|null $departmentStatus
 */
class Departmenttable extends Entity
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
        'department' => true,
        'designationId' => true,
        'documentName' => true,
        'documentPath' => true,
        'departmentStatus' => true
    ];
}
