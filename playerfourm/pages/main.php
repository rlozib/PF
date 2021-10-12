<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mixed content 문제 해결(https 사이트에서 http 사이트 요청 시 발생하는 보안 문제) -->
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
    <title>메인페이지</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        
    </style>
</head>
<body>

    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->
    
    <header id="header"> 
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->
    
    <main id="contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <div class="main-banner-img">
            </div>
            <article class="content-article">
                <div class="mainCont">
                    <div class="main-banner">
                        <div class="main-info-wrap">
                            <div class="main-team-table">
                                <div></div>
                            </div>
                            <div class="main-match-result">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-Schedule">

                </div>
            </articel>
        </section>
    </main>
    <!-- //contents -->

    <footer id="footer">
        <?php
            include "../include/footer.php";
        ?>
    </footer>
    <!-- //footer -->
</body>
</html>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
<script type="text/javascript"> 

    // 처음 로딩
    window.onload = (function() {

        var fillDur = 2
        var tl = new TimelineMax({repeat:-1, repeatDelay:5});
        // drawSVG플러그인 필요
        // .fromTo("#wheel", 2, {drawSVG:"50% 50%"}, {drawSVG:"0% 100%"})
        // .fromTo("#cannon", 2, {stroke:"#FFF", drawSVG:"50% 50%"}, {drawSVG:"0% 100%"})
        // .fromTo(["#template", ".blue"], 2, {drawSVG:"50% 50%"}, {drawSVG:"0% 100%"} )
        tl.to("#plate1", fillDur, {fill:"#EC1C2E"}, "fill")
        .to("#plate2", fillDur, {fill:"#CE1141"}, "fill")
        .to("#template", fillDur, {fill:"#A39161", stroke:"#A39161"}, "fill")
        .to(".blue", fillDur, {fill:"#003876", stroke:"#003876"}, "fill")
        .to("#wheel", fillDur, {fill:"#A39161", stroke:"#FFFFFF"}, "fill")
        .to("#cannon", fillDur, {fill:"#A39161", stroke:"#FFFFFF", strokeWidth:"2"}, "fill")
        .to("#bg", fillDur, {fill:"#fff"}, "fill")
        .to("#cannon-fill", fillDur, {opacity:1}, "fill")
        .fromTo(".text", 1, {opacity:0, scale:1.5}, {opacity:1, scale:1, transformOrigin: "0% 50%"}, "-=.25");

        setTimeout(function() {
            // show loader on page load
            const loader = document.querySelector("#loading");
            const loaderInner = document.querySelectorAll(".text");
            const main = document.querySelector("#header");
            const img = document.querySelector(".main-banner-img");
            // var gs = new TimelineMax({repeat:-1, repeatDelay:5});
            gsap.to(loaderInner, 3, {
                        yPercent: -100,
                        ease: "power2.out",
                        transformOrigin: "bottom",
                        scale: 1
            })
            gsap.to(loader, 3, {
                        opacity:1,
                        yPercent: -100,
                        ease: "power2.out",
                        transformOrigin: "bottom",
                        scaleY: 1,
                        delay:0.5
            })
            gsap.fromTo(main, 4, {
                        y:300
            },{
                        duration: 2,
                        opacity:1,
                        yPercent: -300,
                        ease: "power2.out",
                        transformOrigin: "bottom"
            });
            gsap.fromTo(img, 4, {
                        y:800
            },{
                        duration: 2,
                        opacity:1,
                        yPercent: -120,
                        ease: "power2.out",
                        transformOrigin: "bottom"
            });
        }, 3000);
    });

</script>