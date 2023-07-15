<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/f4bf638e0e.js" crossorigin="anonymous"></script>
    <script src="jquery-3.5.1.js"></script>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
 
        @font-face {
    font-family: bark;
    src: url(fonts/Barkentina.otf);
}
@font-face {
    font-family: montsembold;
    src: url(fonts/Montserrat-SemiBold.ttf);
}
@font-face {
    font-family: montreg;
    src: url(fonts/Montserrat-Regular.ttf);
}
@font-face {
    font-family: skir;
    src: url(fonts/skirmisher.ttf);
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

:root {
    --black: #000;
    --black1: #0b0b0c;
    --black2: rgb(18, 18, 18);
    --black3:#221f1f;
    --gray: #666;
    --red: #ef3a3d;
    --white2: #d9d9d9;
    --white: #fff;
    --gold: #f0131e;
}
header{
    position: fixed;
    top: 0;
    left: 0;
    padding: 5px 100px 10px;
    z-index: 100;
    width: 100%;
    border-bottom: 1px #f0131e solid;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: 0.2s;

}
header .logotipo {
    color: #fff;
    height: 50px;
    line-height: 50px;
    font-size: 24px;
    float: left;
    font-weight: bold;

}

img.sjclogo{
    width: 55px;
    height: 55px;
    float: left;
}

/* header nav{
    float: right;
    list-style: none;
    
} */
header nav ul{
    margin: 0;
    padding: 0;
    display: flex;
    text-align: center;
}
header nav ul li{
    list-style: none;
    position: relative;
    text-align: center;
}
header nav ul li a {
    text-shadow: 2px 2px 2px #000;
}

nav li a {
    display: inline-block;
}

.cool_link::after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background: #f0131e;
    transition: width .3s;
}

.cool_link:hover::after {
    width: 100%;
    transition: width .3s;
}
/* SUBmenu */
/* header nav ul li.sub-menu:before{
    position: absolute;
    content: '\f0d7';
    font-family: fontAwesome;
    color: #fff;
    line-height: 50px;
    right: 5px;
} */
/* header nav ul li ul{
    position: absolute;
    left: 0;
    background: #080808;
    display: none;
}
header nav ul li.active ul{
    display: block;
}
header nav ul li ul li{
    display: block;
    width: 200px; 
}
header nav ul li:hover ul{
    display: block;
}
header nav ul li ul li{
    display: block;
    width: 200px;
} */
header nav ul li a {
    height: 50px;
    padding: 0 20px;
    font-weight: 400;
    color: #fff;
    text-decoration: none;
    display: block;
    font-family: plight;
    padding-top: 15px;
}
header nav .cursos {
    color: var(--white);
    transition: 0.6s ease-in-out;
}
header nav ul li a:hover {
    text-decoration: none;
    color: #f0131e;
    transition: 0.3s;
}
.menu-toggle{
    color: #fff;
    float: right;
    line-height: 50px;
    font-size: 24px;
    cursor: pointer;
    display: none;
}

.home{
    color:var(--gold)
}

/* ##############################Responsivo############################## */
@media (max-width:1120px)
{

    header
    {
        padding: 5px 20px 10px;
    }
    .menu-toggle
    {
        display: block;
    }
    header nav{
        position: absolute;
        width: 100%;
        height: calc(100vh - 50px);
        background: transparent;
        backdrop-filter: blur(10px);
        top: 67px;
        left: -100%;
        transition: 0.5s;
    }
    header nav.active{
        left: 0;
        
    }
    header nav ul{
        display: block;
        text-align: center;
        position: relative;
        left: 0;
        top: 30%;
    }
    header nav ul li a{
        border-bottom:1px solid rgba(255,255,255,0.1);
    }
    header nav ul li a:hover{
    text-decoration: none;
    color: var(--gold);

    transition: 0.3s;
    }
    header nav ul li a{
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        font-size: xx-large;
        margin-bottom: 20px;
    }
    

    
}
@media (max-width:310px){
    header .logotipo{
        font-size: 18px;
    }
    img.sjclogo{
    width: 50px;
    height: 50px;
    float: left;
    }
}
 .sticky {
    
    top: 0;
    color: var(--black);
    transition: 0.3s ease-out;
    background: var(--black);
    align-items: center;
    border-bottom: 1px #f0131e solid;
}
header nav li .dark-mode-toggle {
    color: var(--white);
    padding: 3px;
    border: none;
    outline: none;
    background: none;
    text-shadow: 2px 2px 2px #000;
    cursor: pointer;
    
}

</style>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
</head>
<body>
    <header class="sticky">
    <div class="logotipo">
            <a href="index.php" class="logo"><img class="sjclogo" src="../sjcworks/imgs/sjclogo.svg"></a>
    </div>
      <nav>
        <ul class="nav_hor">
          <!-- <li><a class="home cool_link" href="index.php"><i class="fas fa-home"></i></a></li> -->
          <li><a class="cool_link" href="portofolio.php">Portofólio</a></li>
          <li class="sub-menu"><a class="cool_link" href="galeria.php">Galeria</a></li>
          <li ><a class="cursos cool_link" href="index.php#cursos">Cursos</a></li>
          <li><a class="cool_link" href="contacto.php">Contactos</a></li>
          <li><a><button id="dark-mode-toggle" class="dark-mode-toggle" aria-label="toggle dark mode"><i class="fas fa-adjust"></i></button></a></li>
        </ul>
        
    </nav>
    
    <div class="menu-toggle"><i class="fas fa-bars"></i></div>
    </header>
    <script src="darkmode.js"></script>
    <script>
        $(document).ready(function(){
            $('.menu-toggle').click(function(){
                $('nav').toggleClass('active')
            })
            $('ul li').click(function(){
                $(this).siblings().removeClass('active');
                $(this).toggleClass('active');
            })
        })
    </script>
</body>
</html>