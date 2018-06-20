<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newsletter $newsletter
 */
?>



<div class="newsletter form large-9 medium-8 columns content">
    <?= $this->Form->create($newsletter) ?>
    <fieldset>
    <div class="container">
        <div class="row justify-content-center" style="margin-bottom: 5%;">
            <div class="col-md-7">
                <div class="login">
                    <h3 class="mb-4">Editar Noticia</h3>
                    <?=$this->Form->create()?>

        <?php
            echo $this->Form->control('title' , ['class' => 'form-control', 'value' => $newsletter->title]);
            echo $this->Form->control('short_description' , ['class' => 'form-control', 'type' => 'textarea', 'value' => $newsletter->short_description]);
            echo $this->Form->control('main_content' , ['class' => 'form-control', 'type' => 'textarea', 'value' => $newsletter->main_content] );
            echo $this->Form->control('imagen' , ['class' => 'form-control', 'value' => $newsletter->imagen] );
        ?>

     <?= $this->Form->button(__('Guardar', ['class' => 'btn'] )) ?>
            <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
        
    </fieldset>
  
</div>
