<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 수정</title>
</head>
<body>
    <?php 
        include "../connect/connect.php";
        include "../connect/session.php";
        include "../connect/sessionCheck.php";

        $boardID = $_POST['boardID'];
        $boardTitle = $_POST['boardTitle'];
        $boardContent = $_POST['boardContent'];
        $boardPass = $_POST['boardPass'];

        $boardID = $connect -> real_escape_string($boardID);
        $boardTitle = $connect -> real_escape_string($boardTitle);
        $boardContent = $connect -> real_escape_string($boardContent);
        $memberID = $_SESSION['aMemberID'];

        $sql = "SELECT * FROM aMember WHERE aMemberID = {$memberID}";
        $result = $connect -> query($sql);
        if($result) {
            $info = $result -> fetch_array(MYSQLI_ASSOC);

            if ($info['youPass'] == $boardPass) {
                //업데이트
                $sql = "UPDATE aBoard SET boardTitle = '{$boardTitle}', boardContent = '{$boardContent}' WHERE aBoardID = '{$boardID}'";
                $result = $connect -> query($sql);
                if($result) {
                    echo "Good";
                }
            } else {
                echo "<script>alert('비밀번호가 일치하지않습니다'); history.back(1);</script>";
            }
        }
    ?>
    <script>
        location.href = "board.php"
    </script>
</body>
</html>