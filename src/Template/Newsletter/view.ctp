<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newsletter $newsletter
 */
?>

<?=$this->Html->script('jquery.min')?>
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
            <div id="comments">

            </div>
            <div>
                <h3>Comentar</h3>
                <?=$this->Form->create(null, ['url' => ['controller' => 'comments', 'action' => 'add'], 'id' => 'comens']);?>
                <?=$this->Form->control('message', ['class' => 'form-control', 'type' => 'textarea', 'id' => 'msg', 'required' => true]);?>
                <?=$this->Form->hidden('id_news', [ 'value' => $newsletter->id]);?>
                <?=$this->Form->hidden('id_user_comment', [ 'value' => $currentUser['id']]);?>
                <br>
                <?=$this->Form->submit('Agregar comentario')?>
                <?=$this->Form->end();?>
            </div>
        </div>

    </div>
</div>
<script>
    $( document ).ready(function(){
        reload();
        $('#comens').on('submit',function (event) {
            event.preventDefault();
            var datos = $(this).serializeArray();
            $.ajax({
                type:'post',
                data: datos,
                url: '/comments/add/',
                success:function (data) {
                    reload();
                    $('#msg').val('');
                },
                error:function (e) {
                    console.log(e);
                }
            });
        })
    });
    function reload(){
        $.ajax({
            type:"post",
            url: '/newsletter/ajax/'+<?=$newsletter->id?>,
            success: function (data) {
                $('#comments').html(data);
            },
            error: function (e) {
                console.log(e);
            }
        })
    }
</script>