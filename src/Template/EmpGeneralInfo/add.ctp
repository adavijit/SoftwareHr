<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmpGeneralInfo $empGeneralInfo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Emp General Info'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="empGeneralInfo form large-9 medium-8 columns content">
    <?= $this->Form->create($empGeneralInfo,['enctype'=>'multipart/form-data']); ?>
    <fieldset>
        <legend><?= __('Add Emp General Info') ?></legend>
        <?php
            echo $this->Form->file('file',['class'=>'form-control']);
            echo $this->Form->control('empName');
            echo $this->Form->control('dob', ['empty' => true]);
            echo $this->Form->control('nationality');
           
            echo $this->Form->control('bloodGroup');
            echo $this->Form->control('emergencyContact');
            echo $this->Form->control('lastWorkingDate', ['empty' => true]);
            echo $this->Form->control('dateOfJoining', ['empty' => true]);
            echo $this->Form->control('probationCompletionDate', ['empty' => true]);
            echo $this->Form->control('designationId');
            echo $this->Form->file('file2',['class'=>'form-control']);
        ?>
    </fieldset>
   <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end(); ?>
</div>
