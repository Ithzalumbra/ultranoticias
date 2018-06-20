<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<style>

body{
margin:0;
padding:0;
}
a{
color: #323234;
}

a:hover{
text-decoration:none;
color:#daa520;


}

</style>

<div class="users index large-9 medium-8 columns content">
    <div class="row justify-content-center" style="margin-bottom: 5%;">
        <div class="col-md-7">
            <div>
                <h3><?= __('Usuarios') ?></h3>
                <table cellpadding="0" cellspacing="0" class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Apellido') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Correo') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('Telefono') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('id_type_user') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $this->Number->format($user->id) ?></td>
                            <td><?= h($user->Nombre) ?></td>
                            <td><?= h($user->Apellido) ?></td>
                            <td><?= h($user->Correo) ?></td>
                            <td><?= h($user->Telefono) ?></td>
                            <td><?= h($user->password) ?></td>
                            <td><?php switch (h($user->id_type_user)){
                                    case 1:
                                        echo 'Administrador';
                                        break;
                                    case 2:
                                        echo 'Editor';
                                        break;
                                    case 3:
                                        echo 'Lector';
                                        break;
                                } ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], [ 'class' => 'btn btn-secondary mb-2']) ?>
                                <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $user->id],[ 'class' => 'btn btn-secondary mt-2'], ['confirm' => __('Estas seguro que quieres borrar a este usuario?.', $user->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
