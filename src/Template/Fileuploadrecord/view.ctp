<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fileuploadrecord $fileuploadrecord
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fileuploadrecord'), ['action' => 'edit', $fileuploadrecord->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fileuploadrecord'), ['action' => 'delete', $fileuploadrecord->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fileuploadrecord->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fileuploadrecord'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fileuploadrecord'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fileuploadrecord view large-9 medium-8 columns content">
    <h3><?= h($fileuploadrecord->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Month') ?></th>
            <td><?= h($fileuploadrecord->month) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DocumentName') ?></th>
            <td><?= h($fileuploadrecord->documentName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DocumentPath') ?></th>
            <td><?= h($fileuploadrecord->documentPath) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Att SheetName') ?></th>
            <td><?= h($fileuploadrecord->att_sheetName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Att SheetPath') ?></th>
            <td><?= h($fileuploadrecord->att_sheetPath) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fileuploadrecord->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Record Year') ?></th>
            <td><?= $this->Number->format($fileuploadrecord->record_Year) ?></td>
        </tr>
    </table>
</div>
