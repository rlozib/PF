<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include "../connect/connect.php";
        include "../connect/session.php";
        include "../connect/sessionCheck.php";

        $boardID = $_POST['boardID'];
        $boardTitle = $_POST['boardTitle'];
        $boardContent = $_POST['boardContent'];

        $boardID = $connect -> real_escape_string($boardID);
        $boardTitle = $connect -> real_escape_string($boardTitle);
        $boardContent = $connect -> real_escape_string($boardContent);
        $memberID = $_SESSION['aMemberID'];

        $sql = "SELECT * FROM aMember WHERE aMemberID = {$memberID}";
        $result = $connect -> query($sql);
        if($result) {
            $info = $result -> fetch_array(MYSQLI_ASSOC);

            //업데이트
            $sql = "UPDATE aBoard SET boardTitle = '{$boardTitle}', boardContent = '{$boardContent}' WHERE aBoardID = '{$boardID}'";
            $result = $connect -> query($sql);
            if($result) {
                echo "Good";
            }
        }
    ?>
    <script>
        location.href = "board.php"
    </script>
</body>
</html>