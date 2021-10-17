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
                <section class="boardType">
                    <p class="content-title">글쓰기</p>
                    <div class="board-write">
                        <form action="boardWriteSave.php" name="boardWrite" method="post" enctype="multipart/form-data">
                            <?php
                                $boardID = $_GET['boardID'];

                                $sql = "SELECT MAX(aBoardID) AS max_id FROM aBoard";
                                $result = $connect -> query($sql);
                                
                                if($result){
                                    $info = $result -> fetch_array(MYSQLI_ASSOC);
                                    $max = (int)$info['max_id'];
                                    echo "<input type='hidden' name='max_id' value ='$max'>";
                                }
                            ?>
                            <div>
                                <label for="boardTitle"><h2>제목</h2></label>
                                <input type="text" id="boardTitle" name="boardTitle" class="title-text" placeholder="제목을 입력해주세요!" required autofocus>
                            </div>
                            <div>
                                <label for="boardContent"><h2>내용</h2></label>
                                <textarea name="boardContent" id="boardContent" rows="17" class="title-text" placeholder="내용을 작성해주세요!" required></textarea>
                            </div>
                            <input class="image-btn" type="file" name="b_file" size="100" value="이미지첨부"></input>
                            <input class="board-btn" type="submit" value="저장하기"></input>
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