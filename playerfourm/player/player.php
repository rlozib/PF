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
            <h2 class="ir_so">선수 정보</h2>
            <article class="content-article">
                <div class="position_btn">
                    <span class="active"><a href="#c">ALL</a></span>
                    <span><a href="#c">GK</a></span>
                    <span><a href="#c">DF</a></span>
                    <span><a href="#c">MF</a></span>
                    <span><a href="#c">FW</a></span>
                </div>
                <section id="playerWrap">
                    <div class="GK_Wrap role">
                        <h2 class="position">GOALKEEPERS</h2>
                            <div class="playerBox">
                                <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Leno_1100x693.jpg?itok=9EhBLt-a" alt="레노">
                                <div class="player_info">
                                    <div class="palyer_lname">Bernd</div>
                                    <div class="palyer_fname">Leno</div>
                                    <div class="player_num">01</div>
                                    <div class="country">
                                        <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Germany.png?itok=KbB8KGZO" alt="독일">
                                        <span class="cname">Germany</span>
                                    </div>
                                </div>
                            </div>
                            <!--playerBox-->
                            <div class="playerBox">
                                <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Ramsdale_1100x693.jpg?itok=dsj5wyD4" alt="화이램스달트">
                                <div class="player_info">
                                    <div class="palyer_lname">Aaron</div>
                                    <div class="palyer_fname">Ramsdale</div>
                                    <div class="player_num">32</div>
                                    <div class="country">
                                        <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                        <span class="cname">England</span>
                                    </div>
                                </div>
                            </div>
                            <!--playerBox-->
                            <div class="playerBox">
                                <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Okonkwo_1100x693.jpg?itok=DfwVzL4c" alt="오콘코">
                                <div class="player_info">
                                    <div class="palyer_lname">Arthur</div>
                                    <div class="palyer_fname">Okonkwo</div>
                                    <div class="player_num">33</div>
                                    <div class="country">
                                        <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                        <span class="cname">England</span>
                                    </div>
                                </div>
                            </div>
                            <!--playerBox-->
                    </div>
                    
                    <div class="DF_Wrap role">
                    <h2 class="position">DEFENDERS</h2>
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Tierney_1100x693.jpg?itok=4Ygm52zS" alt="티어니">
                            <div class="player_info">
                                <div class="palyer_lname">Kieran</div>
                                <div class="palyer_fname">Tierney</div>
                                <div class="player_num">03</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Scotland.png?itok=8HZ_W0cF" alt="스코틀랜드">
                                    <span class="cname">Scotland</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/White_1100x693.jpg?itok=oxcwvYUz" alt="화이트">
                            <div class="player_info">
                                <div class="palyer_lname">Ben</div>
                                <div class="palyer_fname">White</div>
                                <div class="player_num">04</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Gabriel_1100x693.jpg?itok=47dgfmNH" alt="가브리엘">
                            <div class="player_info">
                                <div class="palyer_lname">Array</div>
                                <div class="palyer_fname">Gabriel</div>
                                <div class="player_num">06</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Brazil.png?itok=hH2RSAlg" alt="브라질">
                                    <span class="cname">Brazil</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Holding_1100x693.jpg?itok=U14rhbk9" alt="홀딩">
                            <div class="player_info">
                                <div class="palyer_lname">Rob</div>
                                <div class="palyer_fname">Holding</div>
                                <div class="player_num">16</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Cedric_1100x693.jpg?itok=wQUoN53X" alt="세드릭">
                            <div class="player_info">
                                <div class="palyer_lname">Soares</div>
                                <div class="palyer_fname">Cedric</div>
                                <div class="player_num">17</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-10/Portugal.png?itok=3QFfTqQX" alt="포르투갈">
                                    <span class="cname">Portugal</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/MicrosoftTeams-image%20%282%29_3.png?itok=S1lHrTnu" alt="토미야수">
                            <div class="player_info">
                                <div class="palyer_lname">Takehiro</div>
                                <div class="palyer_fname">Tomiyasu</div>
                                <div class="player_num">18</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Japan.png?itok=lNczq_Pw" alt="일본">
                                    <span class="cname">Japan</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Tavares_1100x693.jpg?itok=7bVhRSyK" alt="타바레스">
                            <div class="player_info">
                                <div class="palyer_lname">Nuno</div>
                                <div class="palyer_fname">Tavares</div>
                                <div class="player_num">20</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-10/Portugal.png?itok=3QFfTqQX" alt="포르투갈">
                                    <span class="cname">Portugal</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Chambers_1100x693.jpg?itok=pbl58pyg" alt="챔버">
                            <div class="player_info">
                                <div class="palyer_lname">Calum</div>
                                <div class="palyer_fname">Chambers</div>
                                <div class="player_num">21</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Mari_1100x693.jpg?itok=5cCY0hQ7" alt="챔버">
                            <div class="player_info">
                                <div class="palyer_lname">Calum</div>
                                <div class="palyer_fname">Chambers</div>
                                <div class="player_num">22</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Spain.png?itok=ywkQLfn3" alt="스페인">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Kolasinac_1100x693.jpg?itok=51B3mvlK" alt="챔버">
                            <div class="player_info">
                                <div class="palyer_lname">Sead</div>
                                <div class="palyer_fname">Kolasinac</div>
                                <div class="player_num">31</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Bosnia_and_Herzegovina.png?itok=rOk71SSj" alt="영국">
                                    <span class="cname">Bosnia</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                    </div>
                    
                    <div class="MF_Wrap role">
                    <h2 class="position">MIDFIELDERS</h2>
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Thomas_1100x693.jpg?itok=taMSepWV" alt="토마스">
                            <div class="player_info">
                                <div class="palyer_lname">Partey</div>
                                <div class="palyer_fname">Thomas</div>
                                <div class="player_num">05</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2020-10/Ghana.png?itok=XoB75SaL" alt="가나">
                                    <span class="cname">Ghana</span>
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
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Odegaard_1100x693.jpg?itok=ER7Qz_to" alt="오드가드">
                            <div class="player_info">
                                <div class="palyer_lname">Martin</div>
                                <div class="palyer_fname">Odegaard</div>
                                <div class="player_num">08</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2020-08/norway.png?itok=JV-l-DjI" alt="노르웨이">
                                    <span class="cname">Norway</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/SmithRowe_1100x693.jpg?itok=7zPYf_lK" alt="로위">
                            <div class="player_info">
                                <div class="palyer_lname">Emile</div>
                                <div class="palyer_fname">Smith Rowe</div>
                                <div class="player_num">10</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/MaitlandNiles_1100x693.jpg?itok=EPJlmf6e" alt="나일스">
                            <div class="player_info">
                                <div class="palyer_lname">Ainsley</div>
                                <div class="palyer_fname">Maitland-Niles</div>
                                <div class="player_num">15</div>
                                <div class="country">
                                <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Lokonga_1100x693.jpg?itok=CbPKEHXM" alt="록온가">
                            <div class="player_info">
                                <div class="palyer_lname">Albert Sambi</div>
                                <div class="palyer_fname">Lokonga</div>
                                <div class="player_num">23</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2021-09/MicrosoftTeams-image%20%2832%29.png?itok=KmmjzXoI" alt="벨기에">
                                    <span class="cname">Belgium</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Elneny_1100x693.jpg?itok=l1FyHckN" alt="엘느니">
                            <div class="player_info">
                                <div class="palyer_lname">Mohamed</div>
                                <div class="palyer_fname">Elneny</div>
                                <div class="player_num">25</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Egypt.png?itok=RZvtPHd3" alt="이집트">
                                    <span class="cname">Egypt</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Xhaka_1100x693.jpg?itok=fQ5uzBQ1" alt="샤카">
                            <div class="player_info">
                                <div class="palyer_lname">Granit</div>
                                <div class="palyer_fname">Xhaka</div>
                                <div class="player_num">34</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Switzerland.png?itok=i7fAhpvY" alt="스위스">
                                    <span class="cname">Switzerland</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                    </div>
                    
                    <div class="FW_Wrap role">
                    <h2 class="position">FORWARDS</h2>
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Lacazette_1100x693.jpg?itok=3f6isZ8r" alt="라카제트">
                            <div class="player_info">
                                <div class="palyer_lname">Alexandre</div>
                                <div class="palyer_fname">Lacazette</div>
                                <div class="player_num">09</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/France.png?itok=F39csEk9" alt="프랑스">
                                    <span class="cname">France</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Aubameyang_1100x693.jpg?itok=mjvhVcBQ" alt="사카">
                            <div class="player_info">
                                <div class="palyer_lname">Pierre-Emerick</div>
                                <div class="palyer_fname">Aubameyang</div>
                                <div class="player_num">14</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2018-01/gabon.png?itok=fiQZpQqT" alt="오바메양">
                                    <span class="cname">Gabon</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Pepe_1100x693.jpg?itok=8ayQyNCm" alt="페페">
                            <div class="player_info">
                                <div class="palyer_lname">Nicolas</div>
                                <div class="palyer_fname">Pepe</div>
                                <div class="player_num">19</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2019-08/IvoryCoast.jpg?itok=d3W1pRrI" alt="코트디부아르">
                                    <span class="cname">CotedIvoire</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Balogun_1100x693.jpg?itok=L0I8yw1L" alt="바로건">
                            <div class="player_info">
                                <div class="palyer_lname">Folarin</div>
                                <div class="palyer_fname">Balogun</div>
                                <div class="player_num">26</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Nketiah_1100x693.jpg?itok=jqHkmx21" alt="느케티">
                            <div class="player_info">
                                <div class="palyer_lname">Eddie</div>
                                <div class="palyer_fname">Nketiah</div>
                                <div class="player_num">30</div>
                                <div class="country">
                                <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/England.png?itok=JCX540nD" alt="영국">
                                    <span class="cname">England</span>
                                </div>
                            </div>
                        </div>
                        <!--playerBox-->
                        <div class="playerBox">
                            <img class="player_photo" src="https://www.arsenal.com/sites/default/files/styles/player_listing_image_400x252/public/images/Martinelli_1100x693.jpg?itok=fSYf2jZg" alt="마틴리">
                            <div class="player_info">
                                <div class="palyer_lname">Gabriel</div>
                                <div class="palyer_fname">Martinelli</div>
                                <div class="player_num">35</div>
                                <div class="country">
                                    <img src="https://www.arsenal.com/sites/default/files/styles/flag/public/2017-06/Brazil.png?itok=hH2RSAlg" alt="브라질">
                                    <span class="cname">Brazil</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--모달-->
                <?php
                    include "playerModal.php"
                ?>
                <!--//모달-->
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
    <script src="../assets/js/highlight.min.js"></script>
    <script>    
        const tabBtn = $(".position_btn span");     
        const tabCont = $("#playerWrap .role");   

        tabBtn.click(function(){
            let target = $(this);
            tabBtn.removeClass("active");
            target.addClass("active");

            let index = target.index() == 0 ? -1 : target.index()-1 ;
            //console.log(index)
            if(index == -1){
                console.log(index);
                tabCont.css("display","none");
                tabCont.css("display","flex");
            } else {
                tabCont.css("display","none");
                console.log();
                tabCont.eq(index).css("display","flex");
            }
            // tabCont.css("display","none");
            // tabCont.eq(index).css("display","block");
        });
    </script>
    <!-- //script -->
</body>
</html>