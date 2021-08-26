<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agencia Escape</title>

    <link href="./css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<body>
    <section id="header">
        <nav class="nav">
            <div class="cont-fluid">
                <a class="nav-brand" href="#">Logo</a>
                <div class="listMenu">
                    <ul class="align-baseline">
                        <li>
                            <a href="#header">Home</a>
                        </li>
                        <li>
                            <a href="#sobre">Sobre</a>
                        </li>
                        <li>
                            <a href="#novidade">Novidades</a>
                        </li>
                        <li>
                            <a href="#contato">Contato</a>
                        </li>
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
                    </div>
                    <hr>
                    <div class="row">
                        <p> Various versions have evolved over the years, sometimes </p>
                    </div>
                    <hr>
                    <div class="row">
                        <p> Various versions have evolved over the years, sometimes </p>
                    </div>
                    <hr>
                    <div class="row">
                        <p> Various versions have evolved over the years, sometimes </p>
                    </div>
                </div>
            </div>
            <div class="row  m-auto">
                <button>CONHEÇA MAIS </button>
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

                    <button>SAIBA MAIS </button>
                </div>
            </div>
            <div class="row">
                <div class="card-image">
                    <img class="" src="{{url('./imgs/CASE_001_INTERNA.jpg')}}" alt="">

                </div>
                <div class="card-image">
                    <img class="" src="{{url('./imgs/CASE_002_INTERNA.jpg')}}" alt="">

                </div>
                <div class="card-image">
                    <img class="" src="{{url('./imgs/CASE_003_INTERNA.jpg')}}" alt="">

                </div>
            </div>
        </div>
    </section>

    <section id="contato">
        <div class="space"></div>
    </section>



    <script src="./js/app.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            // direction: 'horizontal',
            loop: true,

            // If we need pagination
            // pagination: {
            //     el: '.swiper-pagination',
            // },

            // Navigation arcols
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            // scrollbar: {
            //     el: '.swiper-scrollbar',
            // },
        });
    </script>
</body>

</html>