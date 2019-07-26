<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmpGrp $empGrp
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Emp Grp'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Set Holiday'), ['controller' => 'SetHoliday', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Set Holiday'), ['controller' => 'SetHoliday', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="empGrp form large-9 medium-8 columns content">
    <?= $this->Form->create($empGrp) ?>
    <fieldset>
        <legend><?= __('Add Emp Grp') ?></legend>
        <?php
            echo $this->Form->control('grp_name');
            echo $this->Form->control('empId');
            echo $this->Form->control('holiday_id', ['options' => $setHoliday, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
