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
                <div class="boardType">
                    <?php
                        $boardID = $_GET['boardID'];

                        $sql = "SELECT b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM aBoard b JOIN aMember m ON(b.aMemberID = m.aMemberID) WHERE b.aBoardID = {$boardID}";
                        $result = $connect -> query($sql);

                        $view = "UPDATE aBoard SET boardView = boardView+1 WHERE aBoardID = {$boardID}";
                        $connect -> query($view);

                        if($result){
                        $info = $result -> fetch_array(MYSQLI_ASSOC);
                        echo "<p class='content-title'>".$info['boardTitle']."</p>";
                        echo "<div class='board mt20'>";
                            echo "<div class='board-haed'>";
                                echo "<div class='board-writer'><span>작성자</span><span>".$info['youName']."</span></div>";
                                echo "<div class='board-date'><span>작성일</span><span>".date('Y-m-d H:i', $info['regTime'])."</span></div>";
                                echo "<div class='board-view'><span>조회수</span><span>".$info['boardView']."</span></div>";
                            echo "</div>";   


                            $result = $connect -> query($sql);
                            if($result) {
                                $count = $result -> num_rows;
                                if ($count > 0) {
                                    for($i=1; $i<=$count; $i++) {
                                        $info = $result -> fetch_array(MYSQLI_ASSOC);
                                        echo "<div class='board-info'><div class='img'><img src='../assets/img/img.jpg' alt='이미지'></div><p class='desc height'>".$info['boardContent']."</p>";
                                    }
                                }
                            } else {
                                echo "false";
                            }

                            //echo "<div class='board-info'><div class='img'><img src='../assets/img/img.jpg' alt='이미지'></div><p class='desc height'>".$info['boardContent']."</p>";
                                echo "<div class='btn'>";
                                    echo "<a href='boardModify.php?boardID=<?=".$_GET['boardID']."?>'>수정하기</a>";
                                    echo "<a href='boardRemove.php?boardID=<?=".$_GET['boardID']."?>' onclick='confirm('정말삭제하시겠습니까?')'>삭제하기</a>";
                                    echo "<a href='board.php'>목록보기</a>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                        }
                    ?>
                    
                    <!-- <p class="content-title">옥상으로 따라와</p>
                    <div class="board mt20">
                        <div class="board-haed">
                            <div class="board-writer">
                                <span>작성자</span>
                                <span>작성자</span>
                            </div>
                            <div class="board-date">
                                <span>작성일</span>
                                <span>작성일</span>
                            </div>
                            <div class="board-view">
                                <span>조회수</span>
                                <span>조회수</span>
                            </div>
                        </div>
                        <div class="board-info">
                            <div class="img"><img src="../assets/img/img.jpg" alt="이미지"></div>
                            <p class="desc">2019-20 프리시즌 투어에 참가해 좋은 모습을 보여주며 많은 구너들의 기대를 받고있다.
                            2019년 9월 19일 아인트라흐트 프랑크푸르트와의 유로파 리그 조별리그 1차전에 선발 출전하여 전반전 윌록의 득점을 어시스트 했고
                            후반전 엄청난 왼발 중거리 슛으로 팀의 2번째 골을 성공시켰다. 바로 이후에 강력한 전방압박과 원터치 패스로 오바메양의 득점을 도왔다. 3개의 득점에 모두 관여하였다.</p>
                            <div class="btn">
                                <a href="boardModify.php?boardID=<?=$_GET['boardID']?>">수정하기</a>
                                <a href="boardRemove.php?boardID=<?=$_GET['boardID']?>" onclick="confirm('정말삭제하시겠습니까?')">삭제하기</a>
                                <a href="board.php">목록보기</a>
                            </div>
                        </div>
                    </div> -->
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