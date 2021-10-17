<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
    define('WP_DEBUG_DISPLAY', false);
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

                        $sql = "SELECT b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime, b.aMemberID FROM aBoard b JOIN aMember m ON(b.aMemberID = m.aMemberID) WHERE b.aBoardID = {$boardID}";
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

                            try {
                                //  데이터베이스연결 ***/
                                $dbh = new PDO("mysql:host=localhost;dbname=rlozib3712", 'rlozib3712', 'j65023genie#');
                            
                                //  에러익셉션 추가 ***/
                                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                                //  sql문 ***/
                                $sql = "SELECT image, image_type FROM aBoardImg WHERE aBoardID=$boardID";
                            
                                ///  준비 ***/
                                $stmt = $dbh->prepare($sql);
                            
                                // exceute the query
                                $stmt->execute();
                                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                $array = $stmt->fetch();

                                // 이미지를 성공적으로가져오
                                if($array != null) {
                                    echo "<div class='board-info'><div class='img'><img src='data:".$array['image_type'].";base64,".base64_encode( $array['image'] )."' alt='이미지'></div>";
                                } else {
                                    echo "<div class='board-info'><div class='img none'><img src='#' alt='이미지'></div>";
                                }
                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            } catch(Exception $e) {
                                echo $e->getMessage();
                            }
                                echo "<p class='desc height'>".$info['boardContent']."</p>";
                                echo "<div class='btn'>";
                                    //현재 멤버아이디체크
                                    $memberID = $_SESSION['aMemberID'];
                                    //작성자 멤버아이디체크
                                    $writer = $info['aMemberID'];
                                    // 멤버아이디가 일치할시
                                    if($memberID == $writer) {
                                        echo "<a href='boardModify.php?boardID=<?=".$_GET['boardID']."?>'>수정하기</a>";
                                    // 멤버아이디가 불일치할시
                                    } else {
                                        echo "<a class='none' href='boardModify.php?boardID=<?=".$_GET['boardID']."?>'>수정하기</a>";
                                    }
                                    echo "<a href='boardRemove.php?boardID=<?=".$_GET['boardID']."?>' onclick='confirm('정말삭제하시겠습니까?')'>삭제하기</a>";
                                    echo "<a href='board.php'>목록보기</a>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                        }
                    ?>
                
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