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
            <li class="nav-item">
                <a class="nav-link hvr-sweep-to-top" href="">CONFIGURACIÓN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link hvr-sweep-to-top" href="">MATERIAL HEREJE</a>
            </li>
            <?php
        else:
            ?>
            <li class="nav-item">
                <?= $this->Html->link(('LOGIN'), ['controller'=>'Users','action' => 'login'], [ 'class' => 'nav-link hvr-sweep-to-top']) ?>
            </li>
            <?php
        endif;
        ?>
    </ul>
</div>
</nav>
</div>