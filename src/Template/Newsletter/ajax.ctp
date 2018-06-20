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