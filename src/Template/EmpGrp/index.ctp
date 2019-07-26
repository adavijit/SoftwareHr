<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmpGrp[]|\Cake\Collection\CollectionInterface $empGrp
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Emp Grp'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Set Holiday'), ['controller' => 'SetHoliday', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Set Holiday'), ['controller' => 'SetHoliday', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="empGrp index large-9 medium-8 columns content">
    <h3><?= __('Emp Grp') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grp_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('holiday_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empGrp as $empGrp): ?>
            <tr>
                <td><?= $this->Number->format($empGrp->id) ?></td>
                <td><?= h($empGrp->grp_name) ?></td>
                <td><?= $this->Number->format($empGrp->empId) ?></td>
                <td><?= $empGrp->has('set_holiday') ? $this->Html->link($empGrp->set_holiday->holiday_id, ['controller' => 'SetHoliday', 'action' => 'view', $empGrp->set_holiday->holiday_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $empGrp->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empGrp->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empGrp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empGrp->id)]) ?>
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
