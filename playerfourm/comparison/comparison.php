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
    <title>COMPARISON</title>

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
            <article class="content-article">
                <p class="content-title">COMPARISON</p>
                    <div class="comparison">
                        <div class="comparison-wrap">
                            <div class=comparison-first>
                                <div class="home-player">
                                    <img src="../assets/img/player-placeholder.png" alt="이미지">
                                </div>
                                <div class="plus"><img src="../assets/img/player-plus.png" alt="plus"></div>
                            </div>
                            <div class=comparison-second>
                                <div class="away-player">
                                    <img src="../assets/img/player-placeholder.png" alt="이미지">
                                </div>
                                <div class="plus"><img src="../assets/img/player-plus-gray.png" alt="plus"></div>
                            </div>
                        </div>
                        <div class="over-view">
                            <span>overview</span>
                            <div class="over-view-tabel">
                                <table>
                                    <colgroup>
                                        <col style="width:30%"/>
                                        <col style="width:35%"/>
                                        <col style="width:35%"/>
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <td>Appearances</td>
                                            <td>5</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>Goals</td>
                                            <td>5</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>Assists</td>
                                            <td>5</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>Clean sheets</td>
                                            <td>5</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>Saves</td>
                                            <td>5</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>Yellow cards</td>
                                            <td>5</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>Red cards</td>
                                            <td>5</td>
                                            <td>5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="popular-player-wrap">
                            <span>POPULAR</span>
                            <div class="playerBox-wrap">
                                <div class="playerBox">
                                    <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Saka_1100x693.jpg?itok=-haUUA_r" alt="사카">
                                    <div class="player_info">
                                        <div class="palyer_lname">Bukayo</div>
                                        <div class="palyer_fname">Saka</div>
                                        <div class="player_num">07</div>
                                        <div class="country">
                                            <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                            <span class="cname">England</span>
                                        </div>
                                    </div>
                                </div>
                                <!--playerBox-->
                                <div class="playerBox">
                                    <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Saka_1100x693.jpg?itok=-haUUA_r" alt="사카">
                                    <div class="player_info">
                                        <div class="palyer_lname">Bukayo</div>
                                        <div class="palyer_fname">Saka</div>
                                        <div class="player_num">07</div>
                                        <div class="country">
                                            <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                            <span class="cname">England</span>
                                        </div>
                                    </div>
                                </div>
                                <!--playerBox-->
                                <div class="playerBox">
                                    <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Saka_1100x693.jpg?itok=-haUUA_r" alt="사카">
                                    <div class="player_info">
                                        <div class="palyer_lname">Bukayo</div>
                                        <div class="palyer_fname">Saka</div>
                                        <div class="player_num">07</div>
                                        <div class="country">
                                            <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                            <span class="cname">England</span>
                                        </div>
                                    </div>
                                </div>
                                <!--playerBox-->
                                <div class="playerBox">
                                    <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Saka_1100x693.jpg?itok=-haUUA_r" alt="사카">
                                    <div class="player_info">
                                        <div class="palyer_lname">Bukayo</div>
                                        <div class="palyer_fname">Saka</div>
                                        <div class="player_num">07</div>
                                        <div class="country">
                                            <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                            <span class="cname">England</span>
                                        </div>
                                    </div>
                                </div>
                                <!--playerBox-->
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/Draggable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
<script type="text/javascript"> 
</script>