<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<br>
<style>
    table.greyGridTable {
        border: 2px solid #FFFFFF;
        width: 100%;
        text-align: center;
        border-collapse: collapse;
    }
    table.greyGridTable td, table.greyGridTable th {
        border: 1px solid #FFFFFF;
        padding: 3px 4px;
    }
    table.greyGridTable tbody td {
        font-size: 13px;
    }
    table.greyGridTable td:nth-child(even) {
        background: #EBEBEB;
    }
    table.greyGridTable thead {
        background: #FFFFFF;
        border-bottom: 4px solid #333333;
    }
    table.greyGridTable thead th {
        font-size: 15px;
        font-weight: bold;
        color: #333333;
        text-align: center;
        border-left: 2px solid #333333;
    }
    table.greyGridTable thead th:first-child {
        border-left: none;
    }

    table.greyGridTable tfoot {
        font-size: 14px;
        font-weight: bold;
        color: #333333;
        border-top: 4px solid #333333;
    }
    table.greyGridTable tfoot td {
        font-size: 14px;
    }
</style>

<div class="users index large-9 medium-8 columns content">
    <div class="row justify-content-center" style="margin-bottom: 5%;">
        <div class="col-md-7">
            <div class="login">
                <h3><?= __('Usuarios') ?></h3>
                <table cellpadding="0" cellspacing="0" class="greyGridTable">
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
                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                                <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $user->id], ['confirm' => __('Estas seguro que quieres borrar a este usuario?.', $user->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
