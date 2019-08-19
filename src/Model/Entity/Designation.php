<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Designation Entity
 *
 * @property int $id
 * @property string|null $designation
 * @property string|null $department
 * @property string|null $documentName
 * @property string|null $documentPath
 * @property string|null $designationStatus
 */
class Designation extends Entity
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
        'designation' => true,
        'department' => true,
        'documentName' => true,
        'documentPath' => true,
        'designationStatus' => true
    ];
}
