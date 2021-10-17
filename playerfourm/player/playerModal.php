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
    #modal {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100vh;
        z-index: 1000;
        transform: scale(0);
    }
    #modal .modal-bg {
        background: rgba(0, 0, 0, 0.6);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #modal .modal-bg .modal-cont h2 {
        font-weight: 400;
        font-size: 30px;
        margin-bottom: 10px;
    }
    #modal .modal-bg .modal-cont p {
        font-weight: 300;
        line-height: 1.6;
    }
    #modal .modal-bg .modal-cont button {
        float: right;
        border: 1px solid #000;
        background: #000;
        border-radius: 50px;
        color: #fff;
        padding: 5px 12px;
        cursor: pointer;
        margin-top: 15px;
    }

    #modal.show {
        -webkit-animation: unfoldIn 1s ease forwards;
                animation: unfoldIn 1s ease forwards;
    }

    @-webkit-keyframes unfoldIn {
        0% {
            transform: scaley(0.005) scalex(0);
        }
        50% {
            transform: scaley(0.005) scalex(1);
        }
        100% {
            transform: scaley(1) scalex(1);
        }
    }

    @keyframes unfoldIn {
        0% {
            transform: scaley(0.005) scalex(0);
        }
        50% {
            transform: scaley(0.005) scalex(1);
        }
        100% {
            transform: scaley(1) scalex(1);
        }
    }
    #modal.show.hide {
        -webkit-animation: unfoldOut 1s ease forwards;
                animation: unfoldOut 1s ease forwards;  
    }

    @-webkit-keyframes unfoldOut {
        0% {
            transform: scaley(1) scalex(1);
        }
        50% {
            transform: scaley(0.005) scalex(1);
        }
        100% {
            transform: scaley(0.005) scalex(0);
        }
    }

    @keyframes unfoldOut {
        0% {
            transform: scaley(1) scalex(1);
        }
        50% {
            transform: scaley(0.005) scalex(1);
        }
        100% {
            transform: scaley(0.005) scalex(0);
        }
    }
    #modal.show .modal-bg .modal-cont {
        transform: scale(0);
        -webkit-animation: zoomIn 0.5s 0.8s ease forwards;
                animation: zoomIn 0.5s 0.8s ease forwards;
    }

    #modal.show.hide .modal-bg .modal-cont {
        transform: scale(0);
        -webkit-animation: zoomOut 0.5s ease forwards;
                animation: zoomOut 0.5s ease forwards;
    }

    @-webkit-keyframes zoomIn {
        0% {
            transform: scale(0);
        }
        100% {
            transform: scale(1);
        }
    }

    @keyframes zoomIn {
        0% {
            transform: scale(0);
        }
        100% {
            transform: scale(1);
        }
    }
    @-webkit-keyframes zoomOut {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(0);
        }
    }
    @keyframes zoomOut {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(0);
        }
    }
    .profile-view {
        background: #373839;
        width: 30vw; 
        border: 1px solid #f2f2f2;
        border-radius: 10px;
        overflow: hidden;
    }
    .profile-view .view-header {
        border-bottom: 1px solid #f2f2f2;
    }
    .profile-view .view-title {
        border-bottom: 1px solid #f2f2f2;
        padding: 0 11px;
    }
    .profile-view .view-title li {
        display: inline;
        list-style: none;
    }
    .profile-view .view-title li a {
        text-decoration: none;
        color: #ccc;
        padding: 10px 10px 12px;
        margin: 0 5px;
        display: inline-block;
        font-size: 30px;
        font-weight: 500;
    }
    .profile-view .view-cont {
        height: 33vw;
        background: #373839;
        font-weight: 400;
        font-size: 20px;
        position: relative;
    }
    .profile-view .view-cont dt {
        display: inline-block;
        
    }
    .profile-view .view-cont dd {
        display: inline-block;
        margin-left: 20px;
    }
    .profile-view .view-cont .profile_photo {
        
    }
    .profile-view .view-cont .profile_photo img {
        width: 100%;
        margin-left: 0;
    }
    .profile-view .view-cont .profile_info {
        margin-left: 20px;
    }
    .profile-view .view-cont .profile_name {
        
    }
    .profile-view .view-cont .profile_number {
       
    }
    .profile-view .view-cont .profile_born {
       
    }
    .profile-view .view-cont .profile_nationteam {
        
    }
    .profile-view .view-cont .profile_debut {
        
    }

    </style>
</head>
<body>
    
    <div id="skip">
        <a href="#contents">회원가입 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->

    <header id="header">  
        <?php
            include "../include/header.php"
        ?>
    </header>
    <!-- //header -->

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
                                <div>
                                    <div class="profile_photo"><img src="https://www.arsenal.com/sites/default/files/styles/player_featured_image_1045x658/public/images/Leno_1100x693.jpg?itok=aS6rMJUK" alt="Bernd Leno"></div>
                                    <dl class="profile_info">
                                        <div>
                                            <dt class="profile_name">Name</dt>
                                            <dd>Bernd Leno</dd>
                                        </div>
                                        <div>
                                            <dt class="profile_number">Squad Number</dt>
                                            <dd>01</dd>
                                        </div>
                                        <div>
                                            <dt class="profile_born">Born</dt>
                                            <dd>March 4, 1992/Bietighem-Bissingen, Germany</dd>
                                        </div>
                                        <div>
                                            <dt class="profile_nationteam">Nation Team</dt>
                                            <dd>Germany</dd>
                                        </div>
                                        <div>
                                            <dt class="profile_debut">Debut</dt>
                                            <dd>Vorskla Poltava Europa League, September 20, 2018 (won 4-2)</dd>
                                        </div>
                                    </dl>
                                    <!-- <div class="profile_photo"><img src="https://www.arsenal.com/sites/default/files/styles/player_featured_image_1045x658/public/images/Leno_1100x693.jpg?itok=aS6rMJUK" alt="Bernd Leno"></div>
                                    <div class="profile_name">Bernd Leno</div>
                                    <div class="profile_number">01</div>
                                    <div class="profile_born">March 4, 1992/Bietighem-Bissingen, Germany</div>
                                    <div class="profile_nationteam">Germany</div>
                                    <div class="profile_debut">v Vorskla Poltava (h) Europa League, September 20, 2018 (won 4-2)</div> -->
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

    <footer id="footer">
        <?php
            include "../include/footer.php"
        ?>
    </footer>
    <!-- //footer -->

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