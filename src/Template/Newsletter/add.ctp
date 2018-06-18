<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newsletter $newsletter
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Newsletter'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="newsletter form large-9 medium-8 columns content">
    <?= $this->Form->create($newsletter) ?>
    <fieldset>
        <legend><?= __('Add Newsletter') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('short_description');
            echo $this->Form->control('main_content');
            echo $this->Form->control('autor');
            echo $this->Form->control('imagen');
            echo $this->Form->control('published_on');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
