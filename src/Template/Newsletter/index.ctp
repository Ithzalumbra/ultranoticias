<section id="slide">
    <div class="container-fluid">
        <div class="row">
            <div id="slide-img" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators numbers">
                    <li data-target="#slide-img" data-slide-to="0" class="active"></li>
                    <li data-target="#slide-img" data-slide-to="1"></li>
                    <li data-target="#slide-img" data-slide-to="2"></li>
                    <li data-target="#slide-img" data-slide-to="3"></li>
                    <li data-target="#slide-img" data-slide-to="4"></li>
                    <li data-target="#slide-img" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slides/1.png" alt="slide1">
                        <div class="carousel-caption">
                            <h1>Nike Air Max 90/1 Sport Red</h1>
                            <a href="#" class="btn btn-outline-light btn-lg">IR AHORA!</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slides/2.png" alt="slide2">
                        <div class="carousel-caption">
                            <h1>Levi's x AJ Retro 4</h1>
                            <a href="#" class="btn btn-outline-light btn-lg">IR AHORA!</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slides/3.png" alt="slide3">
                        <div class="carousel-caption">
                            <h1>Air Max '98 Wolf Grey</h1>
                            <a href="#" class="btn btn-outline-light btn-lg">IR AHORA!</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slides/4.png" alt="slide4">
                        <div class="carousel-caption">
                            <h1>Air Max 270 Racer Blue</h1>
                            <a href="#" class="btn btn-outline-light btn-lg">IR AHORA!</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slides/5.png" alt="slide5">
                        <div class="carousel-caption">
                            <h1>Air Max Speed Turf 49ers</h1>
                            <a href="#" class="btn btn-outline-light btn-lg">IR AHORA!</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slides/6.png" alt="slide6">
                        <div class="carousel-caption">
                            <h1>Air Max 97 OG Black Volt</h1>
                            <a href="#" class="btn btn-outline-light btn-lg">IR AHORA!</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</section>
<section id="news-cards-n" class="pb-sm-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card-deck">
                    <?php foreach($news as $key => $new):?>
                        <div class="card">
                            <img class="card-img-top" src="<?=$new->imagen?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?=$new->title?></h5>
                                <p class="card-text"><?=$new->short_description?></p>
                                <a href="/noticias/ver/<?=$new->id?>">Mas</a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    <?php
                        if($key >= 2){
                            break;
                        }
                    endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="news-cards-w" class="pb-4">
    <div class="container">
        <div class="row">
            <?php  foreach($news as $key => $new):
                if($key > 2):?>
            <div class="col-12 col-md-6 mb-3 mb-md-0">

                <div class="card">
                    <img class="card-img-top" src="<?=$new->imagen?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?=$new->title?></h5>
                        <p class="card-text"><?=$new->short_description?></p>
                        <a href="/noticias/ver/<?=$new->id?>">Mas</a>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
                <?php
                if($key >= 4){
                    break;
                }
                endif;
            endforeach; ?>
        </div>
    </div>
</section>