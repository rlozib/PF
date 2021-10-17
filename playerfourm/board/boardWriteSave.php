<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $boardTitle = $_POST['boardTitle'];
    $boardContent = $_POST['boardContent'];

    
    // echo $boardTitle, $boardContent;
    
    // 이미지 저장 
    //  파일이 서브밋 됬는지 확입합니다. ***/
    if(!isset($_FILES['b_file']))
    {
        echo '<p>Please select a file</p>';
    }
    else
    {
        try    {
            upload();
            echo '<p>Thank you for submitting</p>';
        }
        catch(Exception $e)
        {
            echo '<h4>'.$e->getMessage().'</h4>';
        }
    }

    function upload(){
        //  이미지가 업로드 됬는지 확인합니다. ***/
        if(is_uploaded_file($_FILES['b_file']['tmp_name']) && getimagesize($_FILES['b_file']['tmp_name']) != false)
        {
            //   이미정보 ***/
            $size = getimagesize($_FILES['b_file']['tmp_name']);
            //  assign our variables ***/
            $type = $size['mime'];
            $imgfp = fopen($_FILES['b_file']['tmp_name'], 'rb');
            $size = $size[3];
            $name = $_FILES['b_file']['name'];
            $maxsize = 99999999;

            //   파일사이즈를 ***/
            if($_FILES['b_file']['size'] < $maxsize )
            {
                //  디비연결 ***/
                /*127.0.0.1*/ 
                $dbh = new PDO("mysql:host=localhost;dbname=rlozib3712", 'rlozib3712', 'j65023genie#');	

                //  에러방지 ***/
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //  sql코드 ***/
                $stmt = $dbh->prepare("INSERT INTO aBoardImg (aBoardID, image_type ,image, image_size, boardFile) VALUES (?, ? ,?, ?, ?)");
                $max_id = $_POST['max_id'];
                $max_id++;
                ///  파라메터 바인드 ***/
                $stmt->bindParam(1, $max_id);
                $stmt->bindParam(2, $type);
                $stmt->bindParam(3, $imgfp, PDO::PARAM_LOB);
                $stmt->bindParam(4, $size);
                $stmt->bindParam(5, $name);

                //  execute the query ***/
                $stmt->execute();
            }
            else
            {
                //  이미지 파일 사이즈 에러 ***/
                throw new Exception("File Size Error");
            }
        }
        else
        {
            // 이미지 타입이 틀릴경우 or 이미지가 업로드 되자않은경우
            throw new Exception("Unsupported Image Format!");
        }
    }

    $boardTitle = $connect -> real_escape_string($boardTitle);
    $boardContent = $connect -> real_escape_string($boardContent);
    $boardView = 0;
    $regTime = time();
    $memberID = $_SESSION['aMemberID'];

    $tmpfile =  $_FILES['b_file']['tmp_name'];
    $o_name = $_FILES['b_file']['name'];
    


    // 데이터 입력
    $sql = "INSERT INTO aBoard(aMemberID, boardTitle, boardContent, boardView, boardFile, regTime) VALUES('$memberID', '$boardTitle', '$boardContent', '$boardView', '$o_name', '$regTime')";

    $result = $connect -> query($sql);

    if($result) {
        echo "true";
    } else {
        /*** 에러 ***/
        throw new Exception("Error");
    }
?>

<script>
    location.href = "board.php"
</script>