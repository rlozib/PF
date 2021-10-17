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
    <title>메인페이지</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
        footer {
            width: 100%;
            height: 100px;
            position: relative;
            border-top: 1px solid #fff;
            box-sizing: border-box;
            background-color: #191919;
            display: flex;
            align-items: center;
        }
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
    <div id="loading">
        <div class="wrap">

        </div>
    </div>
    <main id="contents">
        <section id="mainCont">
            <h2 class="ir_so">메인 컨텐츠</h2>
            <article class="content-article">
                <div class="mainCont">
                    <div class="rankingWrap">
                        <div class="ranking-head">
                            <h3 class="ranking-title">RANKING</h3>
                            <span class="ranking-category">CATEGORY</span>
                            <img class="ranking-category-btn" src="../assets/img/categoryArrow.svg" alt="화살표 이미지">
                        </div>
                        <div class="rankingCont">
                            <div class="ranking">
                                <img class="rankingPlayerImg" src="../assets/img/player001.png" alt="선수1 이미지">
                                <div class="rankingPlayerDesc">
                                    <span class="rankingNum">1</span>
                                    <div class="rankingPlayer">
                                        <span class="rankingPlayerName">Player Name</span>
                                        <div class="rankingPlayerInfo">
                                            <span class="rankingPlayerNum">11</span>
                                            <span class="rankingPlayerTeam">Arsenal</span>
                                        </div>
                                    </div>
                                </div>                            
                            </div>
                            <div class="ranking">
                                <img class="rankingPlayerImg" src="../assets/img/player01.png" alt="선수1 이미지">
                                <div class="rankingPlayerDesc">
                                    <span class="rankingNum">2</span>
                                    <div class="rankingPlayer">
                                        <span class="rankingPlayerName">Player Name</span>
                                        <div class="rankingPlayerInfo">
                                            <span class="rankingPlayerNum">11</span>
                                            <span class="rankingPlayerTeam">Arsenal</span>
                                        </div>
                                    </div>
                                </div>                            
                            </div>
                            <div class="ranking">
                                <img class="rankingPlayerImg" src="../assets/img/player01.png" alt="선수1 이미지">
                                <div class="rankingPlayerDesc">
                                    <span class="rankingNum">3</span>
                                    <div class="rankingPlayer">
                                        <span class="rankingPlayerName">Player Name</span>
                                        <div class="rankingPlayerInfo">
                                            <span class="rankingPlayerNum">11</span>
                                            <span class="rankingPlayerTeam">Arsenal</span>
                                        </div>
                                    </div>
                                </div>                            
                            </div>
                            <div class="ranking">
                                <img class="rankingPlayerImg" src="../assets/img/player01.png" alt="선수1 이미지">
                                <div class="rankingPlayerDesc">
                                    <span class="rankingNum">4</span>
                                    <div class="rankingPlayer">
                                        <span class="rankingPlayerName">Player Name</span>
                                        <div class="rankingPlayerInfo">
                                            <span class="rankingPlayerNum">11</span>
                                            <span class="rankingPlayerTeam">Arsenal</span>
                                        </div>
                                    </div>
                                </div>                            
                            </div>
                            <div class="ranking">
                                <img class="rankingPlayerImg" src="../assets/img/player01.png" alt="선수1 이미지">
                                <div class="rankingPlayerDesc">
                                    <span class="rankingNum">5</span>
                                    <div class="rankingPlayer">
                                        <span class="rankingPlayerName">Player Name</span>
                                        <div class="rankingPlayerInfo">
                                            <span class="rankingPlayerNum">11</span>
                                            <span class="rankingPlayerTeam">Arsenal</span>
                                        </div>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script type="text/javascript"> 
 
</script>