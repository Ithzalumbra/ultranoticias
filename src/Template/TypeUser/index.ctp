<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypeUser[]|\Cake\Collection\CollectionInterface $typeUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Type User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typeUser index large-9 medium-8 columns content">
    <h3><?= __('Type User') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($typeUser as $typeUser): ?>
            <tr>
                <td><?= $this->Number->format($typeUser->id) ?></td>
                <td><?= h($typeUser->type) ?></td>
                <td><?= h($typeUser->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $typeUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typeUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typeUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typeUser->id)]) ?>
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
