<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <style>
        *{
   margin: 0; 
   padding: 0;
   
   box-sizing: border-box;
}
body{
    overflow-x: hidden;
}
@font-face {
    font-family: montreg;
    src: url(fonts/Montserrat-Regular.ttf);
}
@font-face {
    font-family: cursv;
    src: url(fonts/CutiveMono-Regular.ttf);
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
:root {
    --black: #000;
    --black1: #0b0b0c;
    --dk-black:#202020;
    --dk-white:#fff;
    --black2: rgb(18, 18, 18);
    --black3: #221f1f;
    --gray: #666;
    --gray1:rgba(0, 0, 0, 0.05);
    --red: #ef3a3d;
    --white2: #d9d9d9;
    --white: #fff;
    --red: #f0131e;
    --red1: #f0131e;


    --grayground:var(--gray1);

    --foreground:var(--dk-black);
    --background:var(--dk-white);
}
.darkmode{
    --black: #000;
    --black1: #0b0b0c;
    --dk-black:#202020;
    --dk-white:#fff;
    --black2: rgb(18, 18, 18);
    --black3: #221f1f;
    --gray: #666;
    --gray1:rgba(0, 0, 0);
    --red: #ef3a3d;
    --white2: #d9d9d9;
    --white: #fff;
    --red: #f0131e;
    --red1: #f0131e;

    --grayground:var(--gray1);
    --foreground:var(--dk-white);
    --background:var(--dk-black);
}
body{
    background: var(--background);
}
::-webkit-scrollbar {
    width: 8px;
}
::-webkit-scrollbar-thumb{
    background: linear-gradient(var(--black), var(--black2));
    border: 1px solid var(--white);
    border-radius: 6px;
}
    .main{
        position: relative;
        height: 100%;
        width: 100%;
        padding-top: 60px;
    }
    .main h1{
        position: relative;
        height: auto;
        width: 100%;
        text-align: center;
        margin: 5% 0 2% 5%;
        padding-right: 10%;
        font-size: 1.9em;
        font-weight: 650;
        color: var(--foreground);
        font-family: cursv;
        letter-spacing: 3px;
    }
    .main p{
        margin: 5% 0 2% 5%;
        position: relative;
        height: auto;
        text-align: center;
        width: 85%;
        font-weight: 500;
        font-size: 1.5em;
        letter-spacing: 1px;
        color: var(--foreground);
        font-family: cursv;
    }
    .main .galeria{
        position: relative;
	    height: 100%;
	    width: 90%;
	    margin: auto;
	    padding: 45px 0;
	    display: grid;
	    grid-template-columns: auto auto auto auto; /*i write auto four time because we want four rows*/
	    grid-gap: 1vh;
	    grid-auto-flow: dense;
    }
    .main .galeria .img{
        position: relative;
        height: 100%;
        width: 100%;
        overflow: hidden;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.9);
        border-radius: 2px;
    }
.main .galeria .img:first-child{
	grid-column-start: span 2;
	grid-row-start: span 2;
}
.main .galeria .img:nth-child(2n+3){
    grid-row-start: span 2;
    
}
.main .galeria .img:nth-child(4n+5){
	grid-column-start: span 2;
	grid-row-start: span 2;
}
.main .galeria .img:nth-child(6n+7){
	grid-row-start: span 1;
}
.main .galeria .img:nth-child(8n+9){
	grid-column-start: span 1;
	grid-row-start: span 1;
}
.main .galeria .img:nth-child(10n+11){
	grid-row-start: span 2;
}
    .main .galeria .img img{
       height: 100%;
       width: 100%;
       object-fit: cover;
       filter: brightness(0.5)grayscale(100);
       transition: 0.3s ease-in-out;
    }
    .main .galeria .img:hover img{
        filter: brightness(1)grayscale(0);  
    }
    @media only screen and (max-width: 768px){

	.main p{
		font-size: 1.2em;
	}
	.main .galeria{
		display: grid;
		grid-template-columns: auto auto auto;
	}
}
@media only screen and (max-width: 720px){
    .main .headertext{
        height: auto;
        width: 430px;
    }  

}
@media only screen and (max-width: 475px){
    .main .headertext{
        height: auto;
        width: 330px;
        font-size: 2em;
    }
   .main h1{
    font-size: 1.3em;
    } 

}
@media only screen and (max-width: 430px){

	.main p{
		font-size: 0.89em;
	}
	.main .galeria{
		display: block;
	}
	.main .galeria .img{
		display: block;
		width: 100%;
		height: 100%;
		margin:2% 0;
	}
	.main .galeria .img img{
		display: block;
		filter: brightness(1) grayscale(0);
	}
}
    .insta{
        position: relative;
        text-align: center;

    }
    .ins{
        color: transparent;
        background: linear-gradient(var(--red),var(--red));
        -webkit-background-clip: text;
    }
    .insta a{
        text-decoration: none;

        font-size: 150px;
    }
    .insta p{
        font-size: 40px;
        font-family: montreg;
        line-height: 70px;
    }
    .headertext{
        position: relative;
        height: auto;
        width: 650px;
        left: 50%;
        transform: translateX(-50%);
        margin: 10% 0 5% 0;
        text-align: center;
        font-size: 2.8em;
        font-weight: 650;
        letter-spacing: 1.5px;
        color: var(--foreground);
        border-left: 1px solid var(--red1);
        border-right: 1px solid var(--red1);
        font-family: plight;
    }


    </style>  
    <title>Portofólio</title>
</head>
<body>
<?php
include "header.php";
?> 
<div class="main">
    <div class="headertext">PORTOFÓLIO</div>
    <!-- <h1>Tirar uma imagem, congelar por um momento, revela como a realidade realmente é rica.</h1> -->
    
    <div class="galeria">
        <div class="img">
            <img src="imgs/slider/slider1.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider6.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider2.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider6.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider6.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider6.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider1.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider6.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider2.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider6.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider5.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider6.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider6.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider6.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider2.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider6.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider2.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider2.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider2.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider3.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider3.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider4.jpg">
        </div>
        <div class="img">
            <img src="imgs/slider/slider4.jpg">
        </div>
    </div>

    <p class="porttext">A fotografia é uma forma de sentir, de tocar, de amar. O que você pegou no filme é capturado para sempre ... Ele se lembra de pequenas coisas, muito depois de você ter esquecido de tudo.</p>
</div>
<div class="insta">
    <a href="https://www.instagram.com/sjcworks/" class="fab fa-instagram ins"><p>@sjcworks</p></a> 
</div>
<script src="darkmode.js"></script>
</body>

<?php
include "footer.php";
?> 

</html>