<section id="cont-login">
    <header class="text-center">
    </header>
    <?=$this->Flash->render();?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-8 col-md-6 col-lg-5 col-xl-4 ">
                <div class="login">
                    <h3 class="mb-4">Login</h3>
                    <?=$this->Form->create()?>
                        <div class="form-group">
                            <?=$this->Form->control('email',['class' => 'form-control', 'placeholder' => 'Email', 'id' => 'pass', 'required' => true, 'label' => false, 'type' => 'email'])?>
                        </div>
                        <div class="form-group">

                            <?=$this->Form->control('password',['class' => 'form-control', 'placeholder' => 'Contraseña', 'id' => 'pass', 'required' => true, 'label' => false])?>
                        </div>
                        <input class="btn btn-primary mb-4" type="reset" name="limpiar" value="Limpiar" />
                        <button class="btn btn-primary mb-4" id="IngresoLog" name="ingresar" type="submit">Ingresar</button>
                        </div>
                    <?=$this->Form->end();?>
                </div>
            </div>
        </div>
</section>