<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewLeave $newLeave
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit New Leave'), ['action' => 'edit', $newLeave->l_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete New Leave'), ['action' => 'delete', $newLeave->l_id], ['confirm' => __('Are you sure you want to delete # {0}?', $newLeave->l_id)]) ?> </li>
        <li><?= $this->Html->link(__('List New Leave'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New New Leave'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="newLeave view large-9 medium-8 columns content">
    <h3><?= h($newLeave->l_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Leave Type') ?></th>
            <td><?= h($newLeave->leave_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($newLeave->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('L Id') ?></th>
            <td><?= $this->Number->format($newLeave->l_id) ?></td>
        </tr>
    </table>
</div>
