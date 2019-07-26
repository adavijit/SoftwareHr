<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EmpGrp Entity
 *
 * @property int $id
 * @property string|null $grp_name
 * @property int|null $empId
 * @property int|null $holiday_id
 *
 * @property \App\Model\Entity\SetHoliday $set_holiday
 */
class EmpGrp extends Entity
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
        'grp_name' => true,
        'empId' => true,
        'holiday_id' => true,
        'set_holiday' => true
    ];
}
