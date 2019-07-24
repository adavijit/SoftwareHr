<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendancerecord $attendancerecord
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Attendancerecord'), ['action' => 'edit', $attendancerecord->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Attendancerecord'), ['action' => 'delete', $attendancerecord->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendancerecord->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Attendancerecord'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attendancerecord'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="attendancerecord view large-9 medium-8 columns content">
    <h3><?= h($attendancerecord->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('EmpName') ?></th>
            <td><?= h($attendancerecord->empName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Att Date') ?></th>
            <td><?= h($attendancerecord->Att_Date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('InTime') ?></th>
            <td><?= h($attendancerecord->InTime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OutTime') ?></th>
            <td><?= h($attendancerecord->OutTime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shift') ?></th>
            <td><?= h($attendancerecord->Shift) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('S InTime') ?></th>
            <td><?= h($attendancerecord->S_InTime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('S OutTime') ?></th>
            <td><?= h($attendancerecord->S_OutTime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('WorkDurr') ?></th>
            <td><?= h($attendancerecord->WorkDurr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OT') ?></th>
            <td><?= h($attendancerecord->OT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TotDurr') ?></th>
            <td><?= h($attendancerecord->TotDurr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LateBy') ?></th>
            <td><?= h($attendancerecord->LateBy) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EarlyGoingBy') ?></th>
            <td><?= h($attendancerecord->EarlyGoingBy) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Att Status') ?></th>
            <td><?= h($attendancerecord->Att_Status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Punch Records') ?></th>
            <td><?= h($attendancerecord->Punch_Records) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DocumentName') ?></th>
            <td><?= h($attendancerecord->documentName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DocumentPath') ?></th>
            <td><?= h($attendancerecord->documentPath) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($attendancerecord->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EmpId') ?></th>
            <td><?= $this->Number->format($attendancerecord->empId) ?></td>
        </tr>
    </table>
</div>
