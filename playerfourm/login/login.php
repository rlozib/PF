<?php
    include "../connect/connect.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    
    <div id="skip">
        <a href="#contents">로그인 바로가기</a>
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
        <section id="mainCont" class="gray">
            <h2 class="ir_so">로그인 컨텐츠</h2>
            <article class="content-article">
                <div class="login">
                    <div class="login-inner">
                        <div class="login-window">
                            <h3 class="login-title">LOGIN</h3>
                            <form name="login" action="loginSave.php" method="POST">
                                <fieldset>
                                <span class="login-desc">플레이어 포럼 회원 로그인</span>
                                <div>
                                    <div>
                                        <label name="youEmail" class="login-id-title">아이디</label>
                                        <input class="login-id-input" name="youEmail" id="youEmail" type="email" autocomplete="off" autofocus required>
                                    </div>
                                    <div>
                                        <label for="youPass" class="login-password-title">비밀번호</label>
                                        <input type="password" name="youPass" id="youPass" class="login-password-input" maxlength="20" autocomplete="off" required>
                                    </div>
                                    <button id="loginBtn"  class="login-btn" type="submit">로그인</button>
                                    <div>
                                        <span class="signin-desc">플레이어 포럼 회원이 아니세요?</span>
                                        <a href="joinAgreement.php"><span class="signin-btn">회원가입</span></a>
                                    </div>
                                </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
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