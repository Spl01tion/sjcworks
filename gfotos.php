<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/f4bf638e0e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style-gfotos.css">
    <title>Galeria de Fotos</title>
</head>

<body>
    <div><?php
            include "header.php";
            ?></div>
    <div class="modall">
        <div class="modal_content">
            <img src="imgs/galeria/fotos/outdoor3.jpg" id="modal_img">
        </div>
        <span id="bt-close">&times;</span>
    </div>
    <div class="section-title text-right">
        <h2><span><a href="gvideo.php">Galeria de vídeos<i class="fas fa-angle-double-right"></a></i></span></h2>
    </div>
    <section class="section-spacing bottom-none inverse-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <ul id="filter-list">
                        <li class="filter active" data-filter="all" style="display: none;">Todos</li>
                        <div class="dropdown">
                            <button class="dropbtn">Categorias <i class="fas fa-sort-down"></i></button>
                            <div class="dropdown-content">
                                <li class="filter" data-filter="1">Retrato</li>
                                <li class="filter" data-filter="2">Ar-livre</li>
                                <li class="filter" data-filter="3">Casamentos</li>
                                <li class="filter" data-filter="9">Aniversários</li>
                                <li class="filter" data-filter="4">Família</li>
                                <li class="filter" data-filter="8">Studio</li>
                                <li class="filter" data-filter="5">Kids</li>
                                <li class="filter" data-filter="6">Natureza</li>
                                <li class="filter" data-filter="7">Outros</li>
                            </div>
                        </div>
                </div>
                </ul>
            </div>
        </div>
        </div>

        <div class="gallery-outer">
            <ul class="gallery-items" style="padding:0px;position:relative;height:1261px;overflow:hidden;">
                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,0px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato1.jpg" class="small_img" alt="">
                    </div>
                </li>

                <!-- pic2 -->

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(315.25px,0px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato2.jpg" class="small_img" alt="">
                    </div>
                </li>
                <!-- pic3 -->
                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(630.5px,0px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato3.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wed1.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>
                <!-- pic4 -->
                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(945.75px,0px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato4.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/fam1.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>
                <!-- pic5 -->
                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(0px,315.25px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor0.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/drone1.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>
                <!-- pic6 -->
                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(315.25px,315.25px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor01.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/nat1.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>
                <!-- pic7 -->
                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(630.5px,315.25px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor02.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/food1.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>
                <!-- pic8 -->
                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(945.75px,315.25px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor03.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/food2.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>
                <!-- pic9 -->
                <li class="filtr-item" data-category="4" style="opacity:1;transform:scale(1) translate3d(0px,630.5px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/family3.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/retrato2.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>
                <!-- pic10 -->
                <li class="filtr-item" data-category="4" style="opacity:1;transform:scale(1) translate3d(315.25px,630.5px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/family4.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/retrato 1.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>
                <!-- pic11-->
                <li class="filtr-item" data-category="4" style="opacity:1;transform:scale(1) translate3d(630.5px,630.5px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/family5.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/retrato3.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>
                <!-- pic12 -->
                <li class="filtr-item" data-category="4" style="opacity:1;transform:scale(1) translate3d(945.7px,630.5px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/family6.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/retrato4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>
                <!-- pic13 -->
                <li class="filtr-item" data-category="5" style="opacity:1;transform:scale(1) translate3d(0px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/kids_06.jpg" class="small_img" alt="">
                        <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/kids_06.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div>
                </li>
                <!-- pic14 -->
                <li class="filtr-item" data-category="7" style="opacity:1;transform:scale(1) translate3d(315.25px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/family_02.jpg" class="small_img" alt="">
                        <div class="gallery-overlay">
                            <a href="imgs/galeria/fotos/family_02.jpg" id="myImg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                        </div>
                    </div>
                </li>
                <!-- pic15 -->
                <li class="filtr-item" data-category="4" style="opacity:1;transform:scale(1) translate3d(630.5px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/family_101.jpg" class="small_img" alt="">
                        <div class="gallery-overlay">
                            <a href="imgs/galeria/fotos/family_101.jpg" id="myImg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                        </div>
                    </div>
                </li>

                <li class="filtr-item" data-category="4" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/family_201.jpg" class="small_img" alt="">
                        <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/family_201.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div>
                </li>

                <li class="filtr-item" data-category="5" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/kids01.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="5" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/kids02.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>


                <li class="filtr-item" data-category="5" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/kids04.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="5" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/kids05.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="5" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/kids106.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="5" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/kids107.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="4" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/family7.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor11.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor09.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor08.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor07.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor04.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor12.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor13.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor14.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor23.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor16.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor17.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor22.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor19.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor20.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor21.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor24.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor25.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor26.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

       </li>

                <li class="filtr-item" data-category="2" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor30.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/outdoor31.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>


                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato11.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato10.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato12.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato13.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato14.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato15.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato16.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato17.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato18.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato19.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato20.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato21.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato22.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato23.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato24.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato25.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato26.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato27.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato28.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(945.7px,945.7px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato29.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/outdoor4.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato30.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato31.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato33.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato32.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato34.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato35.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato36.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="1" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/retrato37.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd1.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div> -->
                    </div>
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd_7.jpg" class="small_img" alt="">
                    <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_7.jpg" id="myImg"class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd_8.jpg" class="small_img" alt="">
                        <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_8.jpg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div>
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd_9.jpg" class="small_img" alt="">
                        <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_9.jpg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div>
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd_10.jpg" class="small_img" alt="">
                        <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_10.jpg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div>
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd2.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_11.jpg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div> -->
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd3.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_11.jpg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div> -->
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd4.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_11.jpg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div> -->
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd5.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_11.jpg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div> -->
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd301.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_11.jpg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div> -->
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd302.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_11.jpg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div> -->
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd303.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_11.jpg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div> -->
                </li>
                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd404.jpg" class="small_img" alt="">
                        <!-- <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_11.jpg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div> -->
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd_401.jpg" class="small_img" alt="">
                        <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_401.jpg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div>
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd_402.jpg" class="small_img" alt="">
                        <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_402.jpg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div>
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd_403.jpg" class="small_img" alt="">
                        <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_403.jpg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div>
                </li>

                <li class="filtr-item" data-category="3" style="opacity:1;transform:scale(1) translate3d(0px,1260.95px,0px);
        backface-visibility:hidden;perspective:1000px;transform-style:preserve-3d;position:absolute;
        transition:all 0.5s ease-in-out 0ms;pointer-events:auto;">
                    <div class="gallery-inner">
                        <img src="imgs/galeria/fotos/wedd_404.jpg" class="small_img" alt="">
                        <div class="gallery-overlay">
                    <a href="imgs/galeria/fotos/wedd_404.jpg" class="venobox vbox-item" data-gall="gallery"><i class="far fa-image"></i></a>
                </div>
                    </div>
                </li>

            </ul>
        </div>
    </section>
    <script>
        let imagens = document.querySelectorAll('.small_img');
        let modal = document.querySelector('.modall');
        let modalImg = document.querySelector('#modal_img');
        let btClose = document.querySelector('#bt-close');
        let srcVal = "";

        for (let i = 0; i < imagens.length; i++) {
            imagens[i].addEventListener('click', function() {
                srcVal = imagens[i].getAttribute('src');
                modalImg.setAttribute('src', srcVal);
                modal.classList.toggle('modal_active');
            });
        }
        btClose.addEventListener('click', function() {
            modal.classList.toggle('modal_active');
        });
    </script>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="jquery.filterizr.min.js"></script>
    <script src="script.js"></script>
</body>
<section>

    <?php
    include "footer.php";
    ?>
</section>

</html>