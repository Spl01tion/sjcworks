<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4bf638e0e.js" crossorigin="anonymous"></script>
    <script src="jquery-3.5.1.js"></script>
    <script>
        var slides = [".s1", ".s2", ".s3", ".s4", ".s5", ".s6", ".s7"];
        slideactual = 0;
        slidemax = 6;
        tempo = 10000;




        $(document).ready(function() {
            $(slides[slideactual]).fadeTo(1000, 1);
            setInterval(troca, tempo);

            function troca() {
                $(slides[slideactual]).fadeTo(1000, 0);
                slideactual++;
                if (slideactual > slidemax) {
                    slideactual = 0;
                }

                $(slides[slideactual]).fadeTo(1000, 1);
            }
        });


        showSlides(slideactual);

        function plusSlides(n) {
            showSlides(slideactual += n);
        }

        function showSlides(n) {
            var i;
            var slide = document.getElementsByClassName("mySlides");
            if (n > slide.length) {
                slideactual = 1
            }

            if (n < 1) {
                slideactual = slide.length;
            }
            for (i = 0; i < slide.length; i++) {
                slide[i].style.opacity = "0";
            }

            slide[slideactual - 1].style.opacity = "1";

        }
    </script>
    <title></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        

@font-face {
    font-family: pbold;
    src: url(fonts/Poppins-Bold.otf);
}

@font-face {
    font-family: plight;
    src: url(fonts/Poppins-Light.otf);
}

@font-face {
    font-family: plightit;
    src: url(fonts/Poppins-LightItalic.otf);
}

@font-face {
    font-family: pmed;
    src: url(fonts/Poppins-Medium.otf);
}

@font-face {
    font-family: preg;
    src: url(fonts/Poppins-Regular.otf);
}

        
        .s1 {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url(imgs/slider/slider1.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .s2 {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url(imgs/slider/slider2.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .s3 {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url(imgs/slider/slider3.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .s4 {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url(imgs/slider/slider4.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .s5 {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url(imgs/slider/slider5.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .s6 {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url(imgs/slider/slider6.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .s7 {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url(imgs/slider/slider7.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        /* .s8 {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url(imgs/slider/slider7.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        } */
        
        .s1,
        .s2,
        .s3,
        .s4,
        .s5,
        .s6,
        .s7 {
            opacity: 0;
            filter: alpha(opacity=0);
            position: absolute;
            z-index: 0;
        }
        
        .scrolldown {
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 2px;
            height: 100px;
            background: transparent;
        }
        
        .scrolldown:before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(transparent, white, transparent);
            animation: animate 2s linear infinite;
        }
        
        @keyframes animate {
            0% {
                transform-origin: top;
                transform: scaleY(0);
            }
            50% {
                transform-origin: top;
                transform: scaleY(1);
            }
            51% {
                transform-origin: bottom;
                transform: scaleY(1);
            }
            100% {
                transform-origin: bottom;
                transform: scaleY(0);
            }
        }
        
        .slides {
            display: flex;
            
            min-height: 100vh;
            position: relative;
            width: 100%;
           
        }
        
        .slidertext {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 25px;
            font-family: bark;
            text-shadow: 2px 2px 2px #000;
        }
        /*.btn{
            position: absolute;
            top: 55%;
            left: 50%;
            transform: translate(-50%,-50%);
            
        }
         button{
            text-shadow: 2px 2px 2px #000;
            box-shadow: 2px 2px 2px #000;
            margin-top: 50px;
            background: none;
            color: #ef3a3d;
            width: 100px;
            height: 50px;
            border:1px solid #ef3a3d;
            font-size: 18px;
            border-radius: 15px;
            transition: .3s;
            overflow: hidden;
        }*/
        
        .button {
            position: absolute;
            top: 55%;
            margin-top: 50px;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 1em 1.5em;
            border: none;
            background-color: transparent;
            cursor: pointer;
            outline: none;
            font-size: 18px;
            margin: 1em 0.8em;
            text-shadow: 2px 2px 2px #000;
            transition: .3s;
            overflow: hidden;
        }
        
        .button.type1 {
            color: white;
            font-family: plight;
        }
        
        .button.type1.type1::after,
        .button.type1.type1::before {
            content: "";
            display: block;
            position: absolute;
            width: 20%;
            height: 20%;
            border: 2px solid;
            transition: all 0.6s ease;
            border-radius: 2px;
        }
        
        .button.type1.type1::after {
            bottom: 0;
            right: 0;
            border-top-color: transparent;
            border-left-color: transparent;
            border-bottom-color: white;
            border-right-color: white;
        }
        
        .button.type1.type1::before {
            top: 0;
            left: 0;
            border-bottom-color: transparent;
            border-right-color: transparent;
            border-top-color: white;
            border-left-color: white;
        }
        
        .button.type1.type1:hover:after,
        .button.type1.type1:hover:before {
            width: 100%;
            height: 100%;
        }
        
        .container .slide {
            position: absolute;
            align-items: center;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
            width: 35px;
            height: 35px;
            border: 1px solid white;
            border-radius: 100%;
            cursor: pointer;
            background: rgb(1, 12, 12, 0.6);
        }
        
        .slide span:hover {
            color: #f0131e;
        }
        
        .slide span {
            font-size: 15px;
            color: white;
            line-height: 34px;
        }
        
        .container .right {
            right: 0;
        }
        
        .container .left {
            left: 0;
        }
        /*################################Responsivo####################################  */
        
        @media (max-width:923px) {
            .slidertext {
                font-size: 24px;
                width: 100%;
                text-align: center;
            }
            .s1,
            .s2,
            .s3,
            .s4,
            .s5,
            .s6,
            .s7 {
                width: 100%;
                background-size: 100% 100%;
            }
            .button.type1 {
                margin-top: 50px;
            }
        }
        
        @media (max-width:650px) {
            .container .left {
                left: 5%;
            }
            .container .right {
                right: 5%;
            }
            .s1 {
                position: absolute;
                width: 100%;
                height: 100vh;
                background: url(imgs/slider/slider11.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            .s2 {
                position: absolute;
                width: 100%;
                height: 100vh;
                background-position: center;
                background: url(imgs/slider/slider22.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            .s3 {
                position: absolute;
                width: 100%;
                height: 100vh;
                background-position: center;
                background: url(imgs/slider/slider33.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            .s4 {
                position: absolute;
                width: 100%;
                height: 100vh;
                background-position: 20% 100%;
                background: url(imgs/slider/slider44.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            .s5 {
                position: absolute;
                width: 100%;
                height: 100vh;
                background-position: center;
                background: url(imgs/slider/slider55.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            .s6 {
                position: absolute;
                width: 100%;
                height: 100vh;
                background-position: center;
                background: url(imgs/slider/slider66.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            .s7 {
                position: absolute;
                width: 100%;
                height: 100vh;
                background-position: center;
                background: url(imgs/slider/slider77.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
        }
    </style>
</head>

<body>
    <div class="slides">
        <div class="mySlides s1"></div>
        <div class="mySlides s2"></div>
        <div class="mySlides s3"></div>
        <div class="mySlides s4"></div>
        <div class="mySlides s5"></div>
        <div class="mySlides s6"></div>
        <div class="mySlides s7"></div>
        <!-- <div class="mySlides s8"></div> -->
        <!-- <div class="slidertext">"GIVING LIFE TO YOUR IMAGINATION..."</div> -->
        <div class="container">
            <a href="#ini"><button class="button type1">"GIVING LIFE TO YOUR IMAGINATION..."</button></a>
            <div onclick="plusSlides(-1)" class="slide left">
                <span class="fas fa-angle-left"></span>
            </div>
            <div onclick="plusSlides(1)" class="slide right">
                <span class="fas fa-angle-right"></span>
            </div>
            <div class="scrolldown"></div>
        </div>
    </div>
</body>

</html>