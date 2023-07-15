<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style-gvideo.css">
    <script src="jquery3.1.1.min.js"></script>
    <title>Galeria de Vídeos</title>
</head>

<body>
    <?php
    include "header.php";
    ?>
    <div class="section-title text-right">
        <h2><span><a href="gfotos.php"><i class="fas fa-angle-double-left"></i>Galeria de fotos</a></span></h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="youtube_video">
                <iframe width="100%" height="100%" id="video_id" src="https://www.youtube.com/embed/nkzWRX8eL-Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>
        <div class="gallery">
            <div class="item">
                <img src="imgs/video_pre.png" data-id="Bfz2u0GGWBE">
                <div class="youtube_icon  active">
                    <img src="imgs/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="imgs/video_pre.png" data-id="mNZv8XJeEGg">
                <div class="youtube_icon">
                    <img src="imgs/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="imgs/video_pre.png" data-id="XG_3ev5YWEY">
                <div class="youtube_icon">
                    <img src="imgs/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="imgs/video_pre.png" data-id="j8Dy6lgS3CM">
                <div class="youtube_icon">
                    <img src="imgs/youtube.svg">
                </div>
            </div>

        </div>
        <div class="gallery1">
            <div class="item">
                <img src="imgs/video_pre.png" data-id="feoOHfSYv7Q">
                <div class="youtube_icon">
                    <img src="imgs/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="imgs/video_pre.png" data-id="8fT3DdBvF-Q">
                <div class="youtube_icon">
                    <img src="imgs/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="imgs/video_pre.png" data-id="gE5bUEyZNK4">
                <div class="youtube_icon">
                    <img src="imgs/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="imgs/video_pre.png" data-id="_M6ah9kZ-Jg">
                <div class="youtube_icon">
                    <img src="imgs/youtube.svg">
                </div>
            </div>

        </div>

        <script>
            $(document).ready(function() {
                $(".item").click(function() {
                    let youtube_id = $(this).children("img").attr("data-id");
                    $(this).children(".youtube_icon")
                        .addClass("active").parent()
                        .siblings()
                        .children(".youtube_icon")
                        .removeClass("active")

                    let newUrl = `https://www.youtube.com/embed/${youtube_id}`;
                    $("#video_id").attr("src", newUrl);

                })

            })
        </script>
    </div>
    <?php
    include "footer.php";
    ?>
    <script src="darkmode.js"></script>
</body>

</html>