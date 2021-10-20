<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <style>
    

    </style>
</head>
<body>
    
    <div id="skip">
        <a href="#contents">회원가입 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->


    <main id="contents">
        <section id="mainCont" class="gray">
            <h2 class="ir_so">선수 정보 팝업창</h2>
            <article class="content-article">
                <!--player-->
                <?php
                    // include "player.php"
                ?>
                <!--//player-->
                <!-- modal -->
                <div id="modal">
                    <div class="modal-bg">
                    <div class="modal-cont">
                        <div class="profile-view">
                            <div class="view-title">
                                <button>X</button>
                                <ul>
                                    <li><a href="#">Profile</a></li>
                                </ul>
                            </div>
                            <div class="view-cont">
                                <div class="profile_wrap">
                                    <div class="profile_photo"><img src="https://www.arsenal.com/sites/default/files/styles/player_featured_image_1045x658/public/images/Leno_1100x693.jpg?itok=aS6rMJUK" alt="Bernd Leno"></div>
                                    <div class="profile_ability"><img src="../assets/img/ability.png" alt="ability"></div>
                                    <div class="profile_info">
                                        <div class="key">Name</div>
                                        <div class="value">Bernd Leno</div>
                                        <div class="key">Number</div>
                                        <div class="value">01</div>
                                        <div class="key">Born</div>
                                        <div class="value">March 4, 1992/Bietighem-Bissingen, Germany</div>
                                        <div class="key">Nation Team</div>
                                        <div class="value">Germany</div>
                                        <div class="key">Debut</div>
                                        <div class="value">Vorskla Poltava Europa League, September 20, 2018 (won 4-2)</div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- //modal -->
            </article>
        </section>
    </main>
    <!-- //contents -->

    <!-- script -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script>
    //function modal() {}
    document.querySelector(".player_photo").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("show");
        document.querySelector("#modal").classList.remove("hide");
    });
    
    document.querySelector(".modal-cont button").addEventListener("click", function(){
        document.querySelector("#modal").classList.add("hide");
    });
    </script>
    <!-- //script -->
</body>
</html>