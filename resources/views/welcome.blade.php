<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agencia Escape</title>

    <link href="./css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/d7c48c440e.js" crossorigin="anonymous"></script>

<body>
    <section id="header">
        <nav class="nav">
            <div class="cont-fluid">
                <a class="nav-brand" href="#header">Logo</a>
                <div class="listMenu">
                    <ul class="align-baseline">
                        <li> <a href="#home">Home</a> </li>
                        <li> <a href="#sobre">Sobre</a> </li>
                        <li> <a href="#novidade">Novidades</a> </li>
                        <li> <a href="#contato">Contato</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="slide">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{url('./imgs/2020_08_27_hatteras_site_banner_home.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{url('./imgs/2020_08_27_hatteras_site_banner_contato.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{url('./imgs/2020_08_27_hatteras_site_banner_transparencia.jpg')}}" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section id="sobre">
        <div class="space">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <h1>
                            Lipsum generator:
                            Lorem Ipsum
                            All the facts
                        </h1>
                    </div>
                    <div class="row">
                        <p class="text-end">
                            use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <p> Various versions have evolved over the years, sometimes </p>
                        <hr>
                    </div>
                    <div class="row">
                        <p> Various versions have evolved over the years, sometimes </p>
                        <hr>
                    </div>
                    <div class="row">
                        <p> Various versions have evolved over the years, sometimes </p>
                        <hr>
                    </div>
                    <div class="row">
                        <p> Various versions have evolved over the years, sometimes </p>
                    </div>
                </div>
            </div>
            <div class="row col-3  m-auto">
                <button class="btn-black">CONHEÇA MAIS <i class="fas fa-angle-right"></i> </button>
            </div>
        </div>
    </section>

    <section id="novidade" class="background-black">
        <div class="space">
            <div class="row ">
                <div class="col col-3 m-auto text-center">
                    <p class="text-center">
                        CONFIRA NOSSOS CASES DE SUCESSO
                    </p>
                    <button class="btn-white">SAIBA MAIS <i class="fas fa-angle-right"></i></button>
                </div>
            </div>
            <div class="row">
                <div class="card-image" style="background-image: url('./imgs/CASE_001_INTERNA.jpg'); background-repeat: no-repeat, repeat;background-size: cover; align-items:center;justify-content:center">
                    <div class="title-image-transparent">
                        <p>Lorem ipsum </p>
                        <a href="#">ver case <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="card-image" style="background-image: url('./imgs/CASE_002_INTERNA.jpg');background-repeat: no-repeat, repeat;background-size: cover;display:flex; align-items:center;justify-content:center">
                    <div class="title-image-transparent">
                        <p>Lorem ipsum </p>
                        <a href="#">ver case <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="card-image" style="background-image: url('./imgs/CASE_003_INTERNA.jpg');background-repeat: no-repeat, repeat;background-size: cover; align-items:center;justify-content:center">
                    <div class="title-image-white">
                        <p>Lorem ipsum </p>
                        <a href="#">ver case <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="img-contato" style="background-image: url('./imgs/2020_08_27_hatteras_video_banner.jpg');background-repeat: no-repeat, repeat;background-size: cover;align-items:center;justify-content:center">
            <button type="button" data-toggle="modal" data-target="#exampleModal">
                <i class="far fa-play-circle"></i>
            </button>
        </div>

    </section>

    <section>
        <div class="alinharCentro">
            <div class="row center-contato">
                <div class="col-4">
                    Assine a nossa newsletter e receba
                    direto no seu e-mail nossos insights,
                    informações e novidades.
                </div>
                <div class="col-4">
                    <div class="row">
                        <input class="form-control" type="text" placeholder="Name">
                    </div>
                    <div class="row">
                        <input class="form-control" type="text" placeholder="Email">
                        <button class="btn-black col-3 mt-2">ok <i class="fas fa-angle-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/app.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>
</body>

</html>