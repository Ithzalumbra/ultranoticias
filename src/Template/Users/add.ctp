<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create('') ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
       
  <div class="container">
        <div class="row justify-content-center" style="margin-bottom: 5%;">
            <div class="col-md-7">
                <div class="login">
                    <h3 class="mb-4">Registro</h3>
                    <?=$this->Form->create()?>

            <?php
            echo $this->Form->control('Nombre', ['class' => 'form-control']);
            echo $this->Form->control('Apellido' , ['class' => 'form-control'] );
            echo $this->Form->control('Correo' , ['class' => 'form-control']);
            echo $this->Form->control('Telefono' , ['class' => 'form-control'] );
            echo $this->Form->control('password' , ['class' => 'form-control'] );
            echo $this->Form->control('Usuario' , ['class' => 'form-control', 'readonly' => 'readonly', 'value' => 'Lector' ] );
            ?>

            <?= $this->Form->button(__('Guardar', ['class' => 'btn'] )) ?>
            <?= $this->Form->end() ?>

                    <?=$this->Form->end();?>
                </div>
            </div>
        </div>
        
    </fieldset>
  
</div>
