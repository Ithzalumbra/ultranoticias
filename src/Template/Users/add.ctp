<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create('') ?>
    <br>
  <div class="container">
        <div class="row justify-content-center" style="margin-bottom: 5%;">
            <div class="col-md-7">
                <div class="login">
                    <h3 class="mb-4">Agregar usuario</h3>
                    <?=$this->Form->create()?>

            <?php
            echo $this->Form->control('Nombre', ['class' => 'form-control']);
            echo $this->Form->control('Apellido' , ['class' => 'form-control'] );
            echo $this->Form->control('Correo' , ['class' => 'form-control']);
            echo $this->Form->control('Telefono' , ['class' => 'form-control'] );
            echo $this->Form->control('password' , ['class' => 'form-control'] );
            echo 'Tipo de usuario';
            echo $this->Form->select(
                'tipo_id',
                ['Administrador', 'Editor', 'Lector'],
                [ 'class' => 'form-control', 'value' => [1,2,3],
                        'empty' => 'Selecciones una opcion']
            );
            ?>
            <br>
            <?= $this->Form->button(__('Guardar', ['class' => 'btn'] )) ?>
            <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
        
    </fieldset>
  
</div>
