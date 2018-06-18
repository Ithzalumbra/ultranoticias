<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newsletter[]|\Cake\Collection\CollectionInterface $newsletter
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Newsletter'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="newsletter index large-9 medium-8 columns content">
    <h3><?= __('Newsletter') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('short_description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('main_content') ?></th>
                <th scope="col"><?= $this->Paginator->sort('autor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('imagen') ?></th>
                <th scope="col"><?= $this->Paginator->sort('published_on') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($newsletter as $newsletter): ?>
            <tr>
                <td><?= $this->Number->format($newsletter->id) ?></td>
                <td><?= h($newsletter->title) ?></td>
                <td><?= h($newsletter->short_description) ?></td>
                <td><?= h($newsletter->main_content) ?></td>
                <td><?= $this->Number->format($newsletter->autor) ?></td>
                <td><?= h($newsletter->imagen) ?></td>
                <td><?= h($newsletter->published_on) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $newsletter->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $newsletter->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $newsletter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newsletter->id)]) ?>
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
