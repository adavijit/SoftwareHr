<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Attendancerecord $attendancerecord
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Attendancerecord'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="attendancerecord form large-9 medium-8 columns content">
    <?= $this->Form->create($attendancerecord) ?>
    <fieldset>
        <legend><?= __('Add Attendancerecord') ?></legend>
        <?php
            echo $this->Form->control('empId');
            echo $this->Form->control('empName');
            echo $this->Form->control('Att_Date');
            echo $this->Form->control('InTime');
            echo $this->Form->control('OutTime');
            echo $this->Form->control('Shift');
            echo $this->Form->control('S_InTime');
            echo $this->Form->control('S_OutTime');
            echo $this->Form->control('WorkDurr');
            echo $this->Form->control('OT');
            echo $this->Form->control('TotDurr');
            echo $this->Form->control('LateBy');
            echo $this->Form->control('EarlyGoingBy');
            echo $this->Form->control('Att_Status');
            echo $this->Form->control('Punch_Records');
            echo $this->Form->control('documentName');
            echo $this->Form->control('documentPath');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
