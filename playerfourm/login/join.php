<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
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
    <!-- //header -->

    <main id="contents">
        <section id="mainCont" class="gray">
            <h2 class="ir_so">회원가입 컨텐츠</h2>
            <article class="content-article">
                <div class="signin">
                    <div class="signin-inner">
                        <form name="signinForm" class="signin-window" action="joinSave.php" method="POST">
                        <h3 class="signin-title">회원 정보 입력</h3>
                            <span class="signin-desc">입력 항목을 정확히 기입해 주세요</span>
                            <div>
                                <div>
                                    <p class="signin-email-title">이메일</p>
                                    <input type="email" name="youEmail" id="youEmail" class="signin-email-input singin" type="text" placeholder="email@adress.com" required>
                                </div>
                                <!-- input박스의 이메일 -->
                                <div>
                                    <p class="signin-password-title">비밀번호</p>
                                    <input type="password" name="youPass" id="youPass" class="signin-password-input singin" type="password" placeholder="8~16자 이내 영문, 숫자, 특수문자 조합" required>
                                </div>
                                <!-- input박스의 비밀번호 -->
                                <div>
                                    <p class="signin-password-confirm-title">비밀번호 확인</p>
                                    <input type="password" name="youPassC" id="youPassC" class="signin-password-confirm-input singin" type="password" placeholder="비밀번호 확인" required>
                                </div>
                                <!-- input박스의 비밀번호 확인 -->
                                <div>
                                    <p class="signin-name-title">이름</p>
                                    <input type="text" name="youName" id="youName" class="signin-name-input singin" type="text" placeholder="이름을 입력해주세요." required>
                                </div>
                                <!-- input박스의 이름 -->
                                <div>
                                    <p class="signin-birthday-title">생년월일</p>
                                    <input type="text" name="youBirth" id="youBirth" class="signin-birthday-input singin" type="text" placeholder="생년월일을 입력해주세요." required>
                                </div>
                                <!-- input박스의 생년월일 -->
                                <div class="s-btn">
                                    <a href="../pages/main.php" class="signin-cancel-btn"><span>취소</span></a>
                                    <button class="signin-btn" type="submit">회원가입</button>    
                                </div>
                            </div>
                        </form>
                    </div>
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
</body>
</html>