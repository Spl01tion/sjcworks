<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/f4bf638e0e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <script src="jquery-3.5.1.js"></script>
  <title></title>
</head>

<body>
  <!-- <div class="loader_bg">
    <div class="smoke">

    <div style="text-align:center;">
        <object>
            <embed src="imgs/sjcloader.svg" width="40%" height="40%">
        </object>
    </div>
  </div>
  <script>
    
    setTimeout(function(){
      $('.loader_bg').fadeToggle();
    },7000);
  </script>
</div> -->
  <header>
    <div class="logotipo">
      <a href="index.php" class="logo"><img class="sjclogo" src="../sjcworks/imgs/sjclogo.svg"></a>
    </div>
    <nav>
      <ul class="nav_hor">
        <!-- <li><a class="home cool_link" href="index.php"><i class="fas fa-home"></i></a></li> -->
        <li><a class="cool_link" href="portofolio.php">Portofólio</a></li>
        <li class="sub-menu"><a class="cool_link" href="galeria.php">Galeria</a></li>
        <li><a class="cursos cool_link" href="index.php#cursos">Cursos</a></li>
        <li><a class="cool_link" href="contacto.php">Contactos</a></li>
        <li><a><button id="dark-mode-toggle" class="dark-mode-toggle" aria-label="toggle dark mode"><i class="fas fa-adjust"></i></button></a></li>
      </ul>
    </nav>

    <div class="menu-toggle">
      <label>
        <input type="checkbox" name="">
        <div class="iconbar">
          <i class="fas fa-bars" aria-hidden="true"></i>
        </div>
      </label>
    </div>
    <script src="darkmode.js"></script>
    <script>
      $(document).ready(function() {
        $('.menu-toggle').click(function() {
          $('nav').toggleClass('active')
        })
        $('ul li').click(function() {
          $(this).siblings().removeClass('active');
          $(this).toggleClass('active');
        });
      });
    </script>
    <script type="text/javascript">
      window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY > 0);
      })
    </script>
  </header>
  <section class="slider">
    <?php include "slider.php"; ?>
  </section>

  <?php include "overlapping.html"; ?></div>
  <div id="ini" class="a-scroll-static"></div>
  <div class="title-wrap">
    <div class="text--t">
      <p class="text-t">RECENTES</p>
    </div>
    <div class="a-horizon-static"></div>
    <h1 class="title-headvproject">TRABALHOS</h1>
    <h3 class="textfront">Recentes</h3>
  </div>

  <div class="recent">

    <div class="recentbox">
      <div class="recentimg">

        <img src="imgs/recent/r1.jpg">
        <img src="imgs/recent/r2.jpg">
        <img src="imgs/recent/r3.png">
        <img src="imgs/recent/r4.jpg">

      </div>
      <div class="recentimg">

        <img src="imgs/recent/r5.jpg">
        <img src="imgs/recent/r6.jpg">
        <img src="imgs/recent/r7.jpg">
        <img src="imgs/recent/r8.png">

      </div>
      <div class="recentimg">

        <img src="imgs/recent/r9.png">
        <img src="imgs/recent/r10.jpg">
        <img src="imgs/recent/r11.png">
        <img src="imgs/recent/r12.jpg">

      </div>
    </div>
    <div class="btnpor">
      <a href="portofolio.php">Ver mais</a>
    </div>
  </div>

  <div class="comparesection">
      <?php include "compareimg.html"; ?>
  </div>

  <div id="services"> -->
  <div class="a-scroll-static"></div> -->
  <div class="sevtext">
      <div class="a-horizon-static"></div>
      <h1 class="title-serv">SERVIÇOS</h1>
    </div>
    <div id="serv">
      <div class="container">
        <div class="card">
          <div class="imgBx" data-text="Publicidade">
            <img src="imgs/ads.png">
          </div>
          <div class="content">
            <div>
              <h3>Publicidade</h3>
              <p>Criação de publicidade com estratégias para atingir o público-alvo da sua marca ou empresa.</p>
              <a class="textcard" href="contacto.php">Contacte-nos</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="imgBx" data-text="Fotografia">
            <img src="imgs/picture.png">
          </div>
          <div class="content">
            <div>
              <h3>Fotografia</h3>
              <p>Captação dos melhores momentos em fotografia de óptima qualidade com técnicas profissionais.</p>
              <a class="textcard" href="contacto.php">Contacte-nos</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="imgBx" data-text="Videografia">
            <img src="imgs/online-video.png">
          </div>
          <div class="content">
            <div>
              <h3>Videografia</h3>
              <p>Criação de vídeos com maior criatividade e edição profissional.</p>
              <a class="textcard" href="contacto.php">Contacte-nos</a>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="imgBx" data-text="Outros">
            <img src="imgs/clipboards.png">
          </div>
          <div class="content">
            <div>
              <h3>Outros</h3>
              <p>E outros serviços de Design e Multimedia.</p>
              <a class="textcard" href="contacto.php">Contacte-nos</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <section class="about-section2">
    <div class="aboutimage">
      <div class="box">
        <img src="imgs/port1.jpg">
        <img src="imgs/port2.jpg" class="hover-img">
      </div>
    </div>
    <div class="about2-text">
      <h1 class="about2-text1">SOBRE MIM</h1>
      <h2 class="about2-text2">Olá! Meu nome é <span class="textbold">Silvestre da Cruz</span> e sou fotógrafo profissional, Editor de Imagens, Produtor de Vídeo, <span class="textbold">Adobe Certified Expert</span> em Photoshop CC, Lightroom, After Effects, Premiere Pro.</h2>
      <div class="a-horizon-left"></div>
      <div class="a-horizon-right"></div>
    </div>
  </section>

  <div id="cursos">
    <div class="title-wrap">
      <div class="a-horizon-static"></div>
      <h1 class="title-headvproject">CURSOS E TUTORIAIS</h1>
      <h3></h3>
    </div>
    <div>
      <p class="text-t">BREVEMENTE</p>
    </div>
  </div> 
</body>
<footer>
  <?php include "footermain.php"; ?>
</footer>

</html>