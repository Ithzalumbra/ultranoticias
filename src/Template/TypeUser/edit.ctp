<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypeUser $typeUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typeUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typeUser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Type User'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="typeUser form large-9 medium-8 columns content">
    <?= $this->Form->create($typeUser) ?>
    <fieldset>
        <legend><?= __('Edit Type User') ?></legend>
        <?php
            echo $this->Form->control('type');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
