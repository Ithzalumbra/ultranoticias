<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newsletter $newsletter
 */
?>


<div class="container">

    <div class="row">
        <div class="jumbotron">
            <?php if($currentUser['id_type_user'] == 1 || $currentUser['id_type_user'] == 2) {
                echo $this->Html->link(__('Editar'), ['action' => 'edit', $newsletter->id]);
            } ?>
            <div class="header-title">
                <h3> <?= h($newsletter->title) ?> </h3>
            </div>
            <p>
                <?= h($newsletter->short_description) ?>
            </p>
            <p>
                <?= h($newsletter->main_content) ?>
            </p>

            <img src="<?= h($newsletter->imagen) ?>" width="1000" alt="ImagenNoticia">

            <div class="date-content" style="margin-top: 5%">

                <p> <b>Fecha de publicacion : </b>   <?= h($newsletter->published_on) ?> </p>

            </div>
            <h2>Comentarios</h2><br>
            <?php
            foreach($comments as $come):
                foreach($users as $user):
                    if($come->id_user_comment == $user->id):?>
                        <b><?=$user->Nombre.' '.$user->Apellido?></b>
                    <?php endif;
                endforeach; ?>
                <p>&nbsp&nbsp&nbsp&nbsp<?=$come->message?></p>
            <?php
            endforeach;
            ?>
            <div>
                <h3>Comentar</h3>
                <?=$this->Form->create(null, ['url' => ['controller' => 'comments', 'action' => 'add']]);?>
                    <?=$this->Form->control('message', ['class' => 'form-control', 'type' => 'textarea']);?>
                    <?=$this->Form->hidden('id_news', [ 'value' => $newsletter->id]);?>
                    <?=$this->Form->hidden('id_user_comment', [ 'value' => $currentUser['id']]);?>
                <br>
                    <?=$this->Form->submit('Agregar comentario')?>
                <?=$this->Form->end();?>
            </div>
        </div>

    </div>
</div>
