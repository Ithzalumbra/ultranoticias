<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>

        <div class="container">
            <div class="row justify-content-center" style="margin-bottom: 5%;">
                <div class="col-md-7"><br>
                    <div class="login">
                        <?php switch (h($user->id_type_user)){
                            case 1:
                                $tipo =  'Administrador';
                                break;
                            case 2:
                                $tipo = 'Editor';
                                break;
                            case 3:
                                $tipo=  'Lector';
                                break;
                        } ?>
                        <h3 class="mb-4">Editar usuario</h3>
                        <?= $this->Form->create() ?>

                        <?php
                        echo $this->Form->hidden('id', ['value' => $user->id]);
                        echo $this->Form->control('Nombre', ['class' => 'form-control', 'value' => $user->Nombre]);
                        echo $this->Form->control('Apellido', ['class' => 'form-control', 'value' => $user->Apellido]);
                        echo $this->Form->control('Correo', ['class' => 'form-control', 'value' => $user->Correo]);
                        echo $this->Form->control('Telefono', ['class' => 'form-control', 'value' => $user->Telefono]);
                        echo $this->Form->control('password', ['class' => 'form-control']);

                        echo $this->Form->control('', ['class' => 'form-control', 'readonly' => 'readonly', 'value' => $tipo]);
                        echo $this->Form->hidden('Usuario', ['value' => 'Lector']);

                        ?>

                        <?= $this->Form->button(__('Guardar', ['class' => 'btn'])) ?>
                        <?= $this->Form->end() ?>

                        <?= $this->Form->end(); ?>
                    </div>
                </div>
            </div>

    </fieldset>

</div>
