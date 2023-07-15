<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f4bf638e0e.js" crossorigin="anonymous"></script>
    
<style>
    *{
        list-style: none;
        padding: 0;
        margin: 0;
        
    }
    :root {
    --black: #000;
    --black1: #0b0b0c;
    --black2: rgb(18, 18, 18);
    --black3: #221f1f;
    --gray: #666;
    --red: #ef3a3d;
    --white2: #d9d9d9;
    --white: #fff;
    --gold: #f0131e;
    --gold1: #f0131e;
}
    @font-face {
    font-family: plight;
    src: url(fonts/Poppins-Light.otf);
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
 

    .foot_icon{
        width: 100%;
        color: white;
        background: black;
        display: inline-block;
        
    }
    .foot_icon ul{
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 10px;
    }
    .foot_icon ul li {
        position: relative;
        display: block;
        color: #666;
        font-size: 20px;
        height: 50px;
        width: 50px;
        background: #171515;
        border-radius: 50%;
        line-height: 50px;
        margin: 0 15px;
        cursor: pointer;
        transition: .3s;
        
        
    }
    
    .foot_icon h3:before{
    content:'//';
    color: var(--gold1);
    padding-right: 10px;

}
    .foot_icon h3{
        font-family: montreg;
        text-align: center;
        margin: 0px 0px 0px 0px;
        font-size: 18px;
        font-weight: bold;
    }
    .foot_icon ul li:before{
        position: absolute;
        content: '';
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: red;
        border-radius: 50%;
        z-index: -1;
        transform: scale(0.9);
        transition: .3s;
    }
    .foot_icon ul li:hover:before{
        filter: blur(3px);
        transform: scale(1.2);
        box-shadow: 0 0 15px var(--gold);
    }
    .foot_icon ul li:hover{
        color: var(--gold1);
        text-shadow: 0 0 15px var(--gold);
        box-shadow: 0 0 15px var(--gold);
    }
    .foot_icon .copywrite{
    text-align: center;
    line-height: 45px;
    background-color: var(--black);
    color: white;
    width: 100%;
    border-top: 1px solid var(--black2);
    font-family: plight;
}
.foot_icon a{
    text-decoration: none;
    color: #666;
    text-align: center;
    justify-content: center;
}
.foot_icon ul li a i:hover{
    color: var(--gold1);
    text-shadow: 0 0 15px var(--gold);
    box-shadow: 0 0 15px var(--gold);
} 

.copywrite{
    margin: 0px 0px 0px 0px;
}
/* ##################Responsivo################## */
@media(max-width:390px){
    .foot_icon ul li{
    margin: 0 10px;
    }
    .copywrite{
      font-size: 12px;  
    }
}
@media(max-width:350px){
    .foot_icon ul li{
        height: 40px;
        width: 40px;
        margin: 0 10px;
        line-height: 40px;
    }
    .copywrite{
      font-size: 12px;  
    }
}
@media(max-width:290px){
    .foot_icon ul li{
        height: 30px;
        width: 30px;
        margin: 0 10px;
        line-height: 35px;
    }
    .copywrite{
      font-size: 10px;  
    }
}


</style>
</head>
<body>

    

<div class="foot_icon" >
            
            <ul>
                <a href="https://web.facebook.com/SJCWorkss" target="_blank"><li><i class="fab fa-facebook-f"></i></li></a>
                <a href="https://twitter.com/SJCWorks" target="_blank"><li><i class="fab fa-twitter"></i></li></a>
                <a href="https://www.instagram.com/sjcworks/" target="_blank"><li><i class="fab fa-instagram"></i></li></a>
                <a href="https://mz.linkedin.com/in/sjc-work-s-07065b13a/pt-br" target="_blank"><li><i class="fab fa-linkedin-in"></i></li></a>
                <a href="https://www.youtube.com/channel/UCEaQtv1pJKZoBHNjAYQ6NoQ"target="_blank"><li><i class="fab fa-youtube"></i></li></a>
            </ul>
            <p class="copywrite">&copy;<script>document.write(new Date().getFullYear())</script> SJCWork's - Todos Direitos reservados.
        </p>
  
</div>
</body>
</html>