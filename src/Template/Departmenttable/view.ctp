<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departmenttable $departmenttable
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Departmenttable'), ['action' => 'edit', $departmenttable->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departmenttable'), ['action' => 'delete', $departmenttable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departmenttable->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departmenttable'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departmenttable'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departmenttable view large-9 medium-8 columns content">
    <h3><?= h($departmenttable->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= h($departmenttable->department) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DocumentName') ?></th>
            <td><?= h($departmenttable->documentName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DocumentPath') ?></th>
            <td><?= h($departmenttable->documentPath) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DepartmentStatus') ?></th>
            <td><?= h($departmenttable->departmentStatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($departmenttable->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DesignationId') ?></th>
            <td><?= $this->Number->format($departmenttable->designationId) ?></td>
        </tr>
    </table>
</div>
