<header id="header">
    <div class="header-wrap">
        <div class="logoWrap">
            <h1 class="logo"> <a href="../pages/main.php"></a></h1>
            <a href="../pages/main.php">PLAYER FORUM</a>
        </div>
        <nav class="menu-wrap">
            <div class="menu">
                <ul>
                    <li><a href="../player/player.php">PLAYER</a></li>
                    <li><a href="#">TEAM</a></li>
                    <li><a href="../comparison/comparison.php">COMPARISON</a></li>
                    <li><a href="../ranking/ranking.php">RANKING</a></li>
                    <li><a href="../board/board.php">BOARD</a></li>
                </ul>
            </div>
        </nav>
        <div class="sign">
            <strong class="ir_so">회원 정보 영역</strong>
            <?php if (isset($_SESSION['aMemberID'])) { ?>
                    <a href="../login/logout.php">LOG OUT</a>
                    <a href="../login/join.php">JOIN US</a>
            <?php  } else { ?>
                    <a href="../login/login.php">LOGIN</a>
                    <a href="../login/join.php">JOIN US</a>
            <?php   } ?>
        </div>
    </div>
</header>
<script>
    document.querySelector(".logo").addEventListener("click", function(){
        location.href="../pages/main.php";
    })
</script>
    <!-- //header -->