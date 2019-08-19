<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fileuploadrecord $fileuploadrecord
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fileuploadrecord->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fileuploadrecord->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fileuploadrecord'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="fileuploadrecord form large-9 medium-8 columns content">
    <?= $this->Form->create($fileuploadrecord) ?>
    <fieldset>
        <legend><?= __('Edit Fileuploadrecord') ?></legend>
        <?php
            echo $this->Form->control('month');
            echo $this->Form->control('record_Year');
            echo $this->Form->control('documentName');
            echo $this->Form->control('documentPath');
            echo $this->Form->control('att_sheetName');
            echo $this->Form->control('att_sheetPath');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
