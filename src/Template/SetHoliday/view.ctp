<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SetHoliday $setHoliday
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Set Holiday'), ['action' => 'edit', $setHoliday->holiday_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Set Holiday'), ['action' => 'delete', $setHoliday->holiday_id], ['confirm' => __('Are you sure you want to delete # {0}?', $setHoliday->holiday_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Set Holiday'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Set Holiday'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="setHoliday view large-9 medium-8 columns content">
    <h3><?= h($setHoliday->holiday_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Leave Year') ?></th>
            <td><?= h($setHoliday->leave_year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group Name') ?></th>
            <td><?= h($setHoliday->group_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($setHoliday->h_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Holiday Id') ?></th>
            <td><?= $this->Number->format($setHoliday->holiday_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Starting Date') ?></th>
            <td><?= h($setHoliday->starting_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ending Date') ?></th>
            <td><?= h($setHoliday->ending_date) ?></td>
        </tr>
    </table>
</div>
