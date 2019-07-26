<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmpGrp $empGrp
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Emp Grp'), ['action' => 'edit', $empGrp->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Emp Grp'), ['action' => 'delete', $empGrp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empGrp->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Emp Grp'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Emp Grp'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Set Holiday'), ['controller' => 'SetHoliday', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Set Holiday'), ['controller' => 'SetHoliday', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="empGrp view large-9 medium-8 columns content">
    <h3><?= h($empGrp->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Grp Name') ?></th>
            <td><?= h($empGrp->grp_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Set Holiday') ?></th>
            <td><?= $empGrp->has('set_holiday') ? $this->Html->link($empGrp->set_holiday->holiday_id, ['controller' => 'SetHoliday', 'action' => 'view', $empGrp->set_holiday->holiday_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($empGrp->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EmpId') ?></th>
            <td><?= $this->Number->format($empGrp->empId) ?></td>
        </tr>
    </table>
</div>
