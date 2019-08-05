<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\NewLeave $newLeave
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $newLeave->l_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $newLeave->l_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List New Leave'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="newLeave form large-9 medium-8 columns content">
    <?= $this->Form->create($newLeave) ?>
    <fieldset>
        <legend><?= __('Edit New Leave') ?></legend>
        <?php
            echo $this->Form->control('leave_type');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
