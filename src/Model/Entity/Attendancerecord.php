<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Attendancerecord Entity
 *
 * @property int $id
 * @property string|null $empId
 * @property string|null $empName
 * @property \Cake\I18n\FrozenDate|null $Att_Date
 * @property \Cake\I18n\FrozenTime|null $InTime
 * @property \Cake\I18n\FrozenTime|null $OutTime
 * @property string|null $Shift
 * @property \Cake\I18n\FrozenTime|null $S_InTime
 * @property \Cake\I18n\FrozenTime|null $S_OutTime
 * @property \Cake\I18n\FrozenTime|null $WorkDurr
 * @property \Cake\I18n\FrozenTime|null $OT
 * @property \Cake\I18n\FrozenTime|null $TotDurr
 * @property \Cake\I18n\FrozenTime|null $LateBy
 * @property \Cake\I18n\FrozenTime|null $EarlyGoingBy
 * @property string|null $Att_Status
 * @property string|null $Punch_Records
 * @property int $id_fileuploadrecord
 */
class Attendancerecord extends Entity
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
        'empId' => true,
        'empName' => true,
        'Att_Date' => true,
        'InTime' => true,
        'OutTime' => true,
        'Shift' => true,
        'S_InTime' => true,
        'S_OutTime' => true,
        'WorkDurr' => true,
        'OT' => true,
        'TotDurr' => true,
        'LateBy' => true,
        'EarlyGoingBy' => true,
        'Att_Status' => true,
        'Punch_Records' => true,
        'id_fileuploadrecord' => true
    ];
}
