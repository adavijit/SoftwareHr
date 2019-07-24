<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fileuploadrecord Entity
 *
 * @property int $id
 * @property string|null $month
 * @property int|null $record_Year
 * @property string|null $att_sheetName
 * @property string|null $att_sheetPath
 * @property \Cake\I18n\FrozenDate|null $dtOfUpload
 */
class Fileuploadrecord extends Entity
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
        'month' => true,
        'record_Year' => true,
        'att_sheetName' => true,
        'att_sheetPath' => true,
        'dtOfUpload' => true
    ];
}
