<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>회원가입</title>
     <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
    <style>
        #mainCont {

        }
    </style>
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

    

    <main id="contents">
        <div id="welcome">
            <div class="welcome-window hide">
                <h3 class="welcome-en">WELCOME!</h3>
                <P class="welcome-kr hide">환영합니다!</P>
                <a href="login.php" class="login-btn hide"><span>로그인</span></a>
            </div>
        </div>
        <!-- //modal -->
        <section id="mainCont" class="gray">
            <h2 class="ir_so">회원가입 컨텐츠</h2>
            <article class="content-article">
                <div class="member-form">
                    <h3>안내</h3>
<?php
    include "../connect/connect.php";

    $youEmail = $_POST['youEmail'];
    $youPass = $_POST['youPass'];
    $youPassC = $_POST['youPassC'];
    $youName = $_POST['youName'];
    $youBirth = $_POST['youBirth'];
    $regTime = time();

    // echo $youEmail, $youPass, $youPassC, $youName, $youBirth, $youPhone;

    // $sql ="INSERT INTO myMember(youEmail, youPass, youName, youBirth, youPhone, regTime) VALUES('$youEmail', '$youPass', '$youName', '$youBirth', '$youPhone', '$regTime')";

    // $result = $connect -> query($sql);

    // if ($result) {
    //     echo "INSERT INTO true";
    // } else {
    //     echo "INSERT INTO false";
    // }

    // 메세지 출력
    function msg($alert) {
        echo "<p class='alert'>{$alert}</p>";
    }

    // //이메일 검사 : 정규식 표현 
    // $check_email = preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $youEmail);
    // if ($check_email == false) {
    //     echo "이메일이 잘못되었습니다. <b> 올바른 이메일을 적어주세요!!";
    // }

    // 빈칸
    if($youEmail == null || $youEmail == '') {
        msg("이메일을 입력해주세요");
        exit;
    }
    if($youPass == null || $youPass == '') {
        msg("비밀번호를 입력해주세요");
        exit;
    }
    if($youPassC== null || $youPassC == '') {
        msg("확인 비밀번호를 입력해주세요");
        exit;
    }
    if($youName == null || $youName == '') {
        msg("이름을 입력해주세요");
        exit;
    }
    if($youBirth == null || $youBirth == '') {
        msg("생년월일을 입력해주세요");
        exit;
    }

    //이메일 검사 : 내장 함수
    $check_email = filter_var($youEmail, FILTER_VALIDATE_EMAIL);
    if ($check_email == false) {
        msg("이메일이 잘못되었습니다. <b> 올바른 이메일을 적어주세요!!");
        exit;
    }

    //비밀번호 검사
    if($youPass !== $youPassC) {
        msg("비밀번호가 일치하지 않습니다. <b> 다시한번 확인해주세요!!");
        exit;
    }

    //비밀번호 암호화
    // $youPass = sha1($youPass);

    //이름 검사
    $check_name = preg_match("/[가-힣]{1,}$/", $youName);
    if($check_name == false) {
        msg("이름이 정확하지 않습니다. <b> 한글로만 적어주세요!!");
        exit;
    }

    //생년월일 검사
    $chekc_birth = preg_match("/^(19[0-9][0-9]|20\d{2})-(0[0-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $youBirth);
    if($chekc_birth == false) {
        msg("생년월일이 정확하지 않습니다. <b> 올바른 생년월일(YYYY-MM-DD)을 적어주세요!!");
        echo  "<script language=javascript>document.querySelector('#welcome .welcome-window').classList.remove('hide'); document.querySelector('#mainCont').style.cssText = 'visibility: hidden;'; document.querySelector('.welcome-en').innerText = '생년월일이 정확하지 않습니다. <b> 올바른 생년월일(YYYY-MM-DD)을 적어주세요!!'; document.querySelector('.welcome-kr').classList.add('hide'); document.querySelector('.welcome-kr').classList.add('hide');</script>";
    }

    //이메일 중복 검사
    $isEmailCheck = false;
    $sql = "SELECT youEmail FROM aMember WHERE youEmail = '$youEmail'";
    $result = $connect -> query($sql);

    if ($result) {
        $count = $result -> num_rows;
        //echo "true";
        if ($count == 0) {
            $isEmailCheck = true;
        } else  {
            msg("이미 회원가입을 했내요!! 로그인을 해주세요!!");
            echo  "<script language=javascript>document.querySelector('#welcome .welcome-window').classList.remove('hide'); document.querySelector('#mainCont').style.cssText = 'visibility: hidden;'; document.querySelector('.welcome-en').innerText = '이미 회원가입을 했내요!! 로그인을 해주세요!!'; document.querySelector('.welcome-kr').classList.add('hide'); document.querySelector('.welcome-kr').classList.add('hide');</script>";
        }
    } else {
        msg("에러발생01 - 관리자에게 문의하세요!!");
        echo  "<script language=javascript>document.querySelector('#welcome .welcome-window').classList.remove('hide'); document.querySelector('#mainCont').style.cssText = 'visibility: hidden;'; document.querySelector('.welcome-en').innerText = '에러발생01 - 관리자에게 문의하세요!!'; document.querySelector('.welcome-kr').classList.add('hide'); document.querySelector('.welcome-kr').classList.add('hide');</script>";
        exit;
    }

    if ($isEmailCheck) {
        $sql ="INSERT INTO aMember(youEmail, youPass, youName, youBirth, regTime) VALUES('$youEmail', '$youPass', '$youName', '$youBirth', '$regTime')";

        $result = $connect -> query($sql);

        if ($result) {
            echo "<script language=javascript>document.querySelector('#welcome .welcome-window').classList.remove('hide'); document.querySelector('#mainCont').style.cssText = 'visibility: hidden;';</script>";
            //msg("회원가입을 축하합니다. 로그인 해주세요!!");
        } else {
            msg("에러발생03 - 관리자에게 문의하세요!!");
            echo  "<script language=javascript>document.querySelector('#welcome .welcome-window').classList.remove('hide'); document.querySelector('#mainCont').style.cssText = 'visibility: hidden;'; document.querySelector('.welcome-en').innerText = '에러발생03 - 관리자에게 문의하세요!!'; document.querySelector('.welcome-kr').classList.add('hide'); document.querySelector('.welcome-kr').classList.add('hide');</script>";
            exit;
        }
    } else {
        msg("이메일이 틀립니다. 다시 한번 확인해주세요!!");
        echo  "<script language=javascript>document.querySelector('#welcome .welcome-window').classList.remove('hide'); document.querySelector('#mainCont').style.cssText = 'visibility: hidden;'; document.querySelector('.welcome-en').innerText = '이메일이 틀립니다. 다시 한번 확인해주세요!!'; document.querySelector('.welcome-kr').classList.add('hide'); document.querySelector('.welcome-kr').classList.add('hide');</script>";
    }
?>
                </div>
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

    <script>
        document.querySelector(".login-btn").addEventListener("onclick", function(){
            //document.querySelector('#welcome .welcome-window').classList.add('hide');
            location.href="login.php";
        });
    </script>
</body>
</html>