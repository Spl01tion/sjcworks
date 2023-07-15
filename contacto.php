<?php include 'sendEmail.php'?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/f4bf638e0e.js" crossorigin="anonymous"></script>
    
    <style>
        *{
   margin: 0; 
   padding: 0;
   box-sizing: border-box;
   
}
body{
    background: var(--background);
}
:root {
    --black: #000;
    --black1: #0b0b0c;
    --dk-black:#202020;
    --dk-white:#fff;
    --black2: rgb(18, 18, 18);
    --black3: #221f1f;
    --gray: #666;
    --red: #ef3a3d;
    --white2: #d9d9d9;
    --white: #fff;
    --gold: #f0131e;
    --gold1: #f0131e;

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
    --red: #ef3a3d;
    --white2: #d9d9d9;
    --white: #fff;
    --gold: #f0131e;
    --gold1: #f0131e;

    --foreground:var(--dk-white);
    --background:var(--dk-black);
}
::-webkit-scrollbar {
    width: 8px;
}
::-webkit-scrollbar-thumb{
    background: linear-gradient(var(--black), var(--black2));
    border: 1px solid var(--white);
    border-radius: 6px;
}@font-face {
    font-family: bark;
    src: url(../fonts/Barkentina.otf);
}
@font-face {
    font-family: montsembold;
    src: url(../fonts/Montserrat-SemiBold.ttf);
}
@font-face {
    font-family: montreg;
    src: url(../fonts/Montserrat-Regular.ttf);
}
@font-face {
    font-family: skir;
    src: url(../fonts/skirmisher.ttf);
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


    .contact{
        position: relative;
        min-height: 100vh;
        padding: 80px 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

        
        
    }
    .contact .content{
        max-width: 800px;
        text-align: center;
    }
    .contact .content h2{
        font-size: 36px;
        font-weight: 500;
        color: var(--foreground);
        font-family: pmed;
    }
    .contact .content p{
        font-weight: 500;
        color: var(--foreground);
        font-family: plightit;
    }
    .container{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
    }
    .container .contactInfo{
        width: 50%;
        display: flex;
        flex-direction: column;
    }
    .container .contactInfo .box{
        position: relative;
        padding: 20px 0;
        display: flex;
    }
    .container .contactInfo .box .icon{
        min-width: 60px;
        height: 60px;
        color: var(--background);
        background: var(--foreground);
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        font-size: 22px;
    }
    .container .contactInfo .box .text{
        display: flex;
        margin-left: 20px;
        font-size: 16px;
        color: var(--foreground);
        flex-direction: column;
        font-family: plight;
        font-weight: 300;
    }
    .container .contactInfo .box .text h3{
        font-weight: 900;
        color: var(--gold1);
    }
    .contactForm{
        width: 40%;
        padding: 40px;
        background: var(--white);
        border: 1px solid var(--gold1);
    }
    .contactForm h2{
        font-size: 30px;
        color:var(--black);
        font-family: preg;
    }
    .contactForm .inputBox{
        position: relative;
        width: 100%;
        margin-top: 10px;
        font-family: plight;
        /* color: blue; */
    }
    .contactForm .inputBox input,
    .contactForm .inputBox textarea{
        width: 100%;
        padding: 5px 0;
        font-size: 16px;
        margin: 10px 0;
        border:none;
        border-bottom: 2px solid #666;
        outline: none;
        resize: none;
    }
    .contactForm .inputBox span{
        position: absolute;
        left: 0;
        padding: 5px 0;
        font-size: 16px;
        margin: 10px 0;
        pointer-events: none;
        transition: 0.5s;
        color: #666;
    }
    .contactForm .inputBox input:focus ~ span,
    .contactForm .inputBox input:valid ~ span,
    .contactForm .inputBox textarea:focus ~ span,
    .contactForm .inputBox textarea:valid ~ span{
        color:var(--gold1);
        font-size: 12px;
        transform: translateY(-20px);
    }
    .contactForm .inputBox button[type="submit"]{
        color:var(--white) ;
        width: 100px;
        background: var(--black);
        border: none;
        cursor: pointer;
        padding: 10px;
        font-size: 18px;
    }
    .alert-success{
     z-index: 1;
     background: #cfffdf;
     font-size: 12px;
     padding: 20px 40px;
     min-width: 420px;
     position: fixed; 
     font-family: plightit;
     border-radius: 10px;
     border:1px solid #138037 ;
     font-weight: 550;
     right: 0;
     top: 80px;
     border-left: 10px solid #138037;
    }
    .alert-error{
     z-index: 1;
     background: #ffdede;
     font-size: 12px;
     padding: 20px 40px;
     min-width: 420px;
     position: fixed; 
     font-family: plightit;
     border-radius: 10px;
     border:1px solid var(--gold1) ;
     font-weight: 550;
     right: 0;
     top: 80px;
     border-left: 10px solid var(--gold1) ;
    }
    /********************RESPONSIVO*************************/ 
    @media (max-width:991px)
    {
        .contact
        {
            padding: 50px;
        }

        .container .contactInfo
        {
            margin-bottom: 40px;
        }
        .container .contactInfo
        {
            width: 100%;
        }
        .contact .content{
            margin-top: 50px;
        }
        .contactForm{
            width: 100%;
        }
        /* .container .contactInfo .box .text{
            
           font-size: 14px;
        } */
    }
    @media (max-width:775px){
        .container{
            flex-direction: column-reverse;
        }
        .contactForm{
            width:70%;
        }
        .container .contactInfo .box{
            align-items: center;
            flex-direction: column;
        }
    }
    @media (max-width:514px){
        .contactForm{
            width:100%;
        }
        .container .contactInfo .box .text h3{
            text-align: center;
        }
    }
    </style>
    <title>Contactos</title>
</head>
<body>
 <?php include "header.php";?>
 
<section class="contact">
<!-- alert Mensagem start -->
<?php echo $alert;?>
<!-- <div class="alert-success">
    <span>Mensagem Enviada! Obrigado por contactar.</span>
 </div> -->
 <!-- alert Mensagem end -->
 <!-- <div class="alert-error">
    <span>Oops!! Algo deu errado, tente de novo.</span>
 </div> -->
    <div class="content">
        <h2>CONTACTE</h2>
        <p>Para obter mais informações preencha o formulário.</p>
    </div>
    <div class="container">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fas fa-map-marked-alt"></i></div>
                    <div class="text">
                        <h3>Endereço</h3>
                        <p>SJCWork's, <br>1112 Machava, <br>Maputo, <br>Moçambique.</p>
                    </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fas fa-mobile-alt"></i></div>
                    <div class="text">
                        <h3>Telefone</h3>
                        <p>+258 84 828 9892<br>+258 82 828 9898<br>+258 86 828 9898</p>
                    </div>
            </div>
            <div class="box">
                <div class="icon"><i class="far fa-envelope"></i></div>
                    <div class="text">
                        <h3>E-mail</h3>
                        <p>sjcworkss@gmail.com</p>
                    </div>
            </div> 
        </div>
        <div class="contactForm">
            <form action="" method="post" >
                <h2>Enviar Mensagem</h2>
                <div class="inputBox">
                    <input type="text" name="nome" required="required">
                    <span>Nome e Apelido</span>
                </div>
                <div class="inputBox">
                    <input type="email" name="email" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <input type="phone" name="phone" required="required">
                    <span>Telefone</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="assunto" required="required">
                    <span>Assunto</span>
                </div>
                <div class="inputBox">
                    <textarea required="required" name="mensagem"></textarea>
                    <span>Escreva a sua Mensagem...</span>
                </div>
                <div class="inputBox">
                    <button type="submit" name="submit">Enviar</button>
                </div>
            </form>
           
        </div>
    </div>
</section>
<script text="text/javascript">
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<script src="darkmode.js"></script>
</body>
</html>


