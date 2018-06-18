<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newsletter $newsletter
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Newsletter'), ['action' => 'edit', $newsletter->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Newsletter'), ['action' => 'delete', $newsletter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newsletter->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Newsletter'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Newsletter'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="newsletter view large-9 medium-8 columns content">
    <h3><?= h($newsletter->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($newsletter->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Short Description') ?></th>
            <td><?= h($newsletter->short_description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Main Content') ?></th>
            <td><?= h($newsletter->main_content) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagen') ?></th>
            <td><?= h($newsletter->imagen) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($newsletter->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Autor') ?></th>
            <td><?= $this->Number->format($newsletter->autor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Published On') ?></th>
            <td><?= h($newsletter->published_on) ?></td>
        </tr>
    </table>
</div>
