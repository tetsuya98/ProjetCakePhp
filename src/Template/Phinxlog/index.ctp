<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Phinxlog[]|\Cake\Collection\CollectionInterface $phinxlog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Phinxlog'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="phinxlog index large-9 medium-8 columns content">
    <h3><?= __('Phinxlog') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('version') ?></th>
                <th scope="col"><?= $this->Paginator->sort('migration_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('breakpoint') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($phinxlog as $phinxlog): ?>
            <tr>
                <td><?= $this->Number->format($phinxlog->version) ?></td>
                <td><?= h($phinxlog->migration_name) ?></td>
                <td><?= h($phinxlog->start_time) ?></td>
                <td><?= h($phinxlog->end_time) ?></td>
                <td><?= h($phinxlog->breakpoint) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $phinxlog->version]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $phinxlog->version]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $phinxlog->version], ['confirm' => __('Are you sure you want to delete # {0}?', $phinxlog->version)]) ?>
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
