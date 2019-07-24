<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SetHoliday $setHoliday
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $setHoliday->holiday_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $setHoliday->holiday_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Set Holiday'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="setHoliday form large-9 medium-8 columns content">
    <?= $this->Form->create($setHoliday) ?>
    <fieldset>
        <legend><?= __('Edit Set Holiday') ?></legend>
        <?php
            echo $this->Form->control('leave_year');
            echo $this->Form->control('group_name');
            echo $this->Form->control('h_name');
            echo $this->Form->control('starting_date', ['empty' => true]);
            echo $this->Form->control('ending_date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
