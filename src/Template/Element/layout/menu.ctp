<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav pull-right">
        <li class="nav-item">
            <?= $this->Html->link(('INICIO'), ['controller'=>'Newsletter','action' => 'index'], [ 'class' => 'nav-link hvr-sweep-to-top']) ?>
        </li>
        <?php
        if($currentUser != null):
            ?>
            <li class="nav-item">
                <?= $this->Html->link(('LOGOUT'), ['controller'=>'Users','action' => 'logout'], [ 'class' => 'nav-link hvr-sweep-to-top']) ?>
            </li>
            <?php

            if($currentUser['id_type_user'] == 1 || $currentUser['id_type_user'] == 2):?>
                <li class="nav-item">
                    <?= $this->Html->link(('AGREGAR NOTICIA'), ['controller'=>'newsletter','action' => 'add'], [ 'class' => 'nav-link hvr-sweep-to-top']) ?>
                </li>
            <?php endif;

            if($currentUser['id_type_user'] == 1):?>
                <li class="nav-item">
                    <?= $this->Html->link(('USUARIOS'), ['controller'=>'Users','action' => 'index'], [ 'class' => 'nav-link hvr-sweep-to-top']) ?>
                </li>
            <?php endif;

        else:
            ?>
            <li class="nav-item">
                <?= $this->Html->link(('LOGIN'), ['controller'=>'Users','action' => 'login'], [ 'class' => 'nav-link hvr-sweep-to-top']) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link(('REGISTRASE'), ['controller'=>'Users','action' => 'register'], [ 'class' => 'nav-link hvr-sweep-to-top']) ?>
            </li>
            <?php
        endif;
        ?>
    </ul>
</div>
</nav>
</div>