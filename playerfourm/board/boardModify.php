<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
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
                <section class="boardType">
                    <p class="content-title">수정하기</p>
                    <div class="board-write">
                        <form action="boardWriteSave.php" name="boardWrite" method="post">
                            <?php
                                $boardID = $_GET['boardID'];
                                $sql = "SELECT b.boardTitle, b.boardContent, m.youName FROM aBoard b JOIN aMember m ON(b.aMemberID = m.aMemberID) WHERE b.aBoardID = {$boardID}";
                                $result = $connect -> query($sql);
                                if($result) {
                                    $info = $result -> fetch_array(MYSQLI_ASSOC);
                                    // echo "<div style='display:none'><label for='boardID'>번호</label>";
                                    // echo "<input type='text' name='boardID' id='boardID' value='".$boardID."'></div>";
                                    echo "<div><label for='boardTitle'><h2>제목</h2></label>";
                                    echo "<input type='text' class='title-text' name='boardTitle' id='boardTitle' value='".$info['boardTitle']."'></div>";
                                    echo "<div><label for='boardContent'>내용</label>";
                                    echo "<textarea type='text' class='title-text' name='boardContent' id='boardContent' row='17'>".$info['boardContent']."</textarea></div>";
                                }
                            ?>
                            <button class="image-btn" type="submit" value="이미지첨부">이미지 첨부</button>
                            <button class="board-btn" type="submit" value="저장하기">저장하기</button>
                        </form>
                    </div>
                </section>
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