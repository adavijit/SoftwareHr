<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SetHoliday[]|\Cake\Collection\CollectionInterface $setHoliday
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Set Holiday'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="setHoliday index large-9 medium-8 columns content">
    <h3><?= __('Set Holiday') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('holiday_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('leave_year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('starting_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ending_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($setHoliday as $setHoliday): ?>
            <tr>
                <td><?= $this->Number->format($setHoliday->holiday_id) ?></td>
                <td><?= h($setHoliday->leave_year) ?></td>
                <td><?= h($setHoliday->group_name) ?></td>
                <td><?= h($setHoliday->h_name) ?></td>
                <td><?= h($setHoliday->starting_date) ?></td>
                <td><?= h($setHoliday->ending_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $setHoliday->holiday_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $setHoliday->holiday_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $setHoliday->holiday_id], ['confirm' => __('Are you sure you want to delete # {0}?', $setHoliday->holiday_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
