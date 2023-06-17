<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENIFIT</title>
    <link rel="stylesheet" href="../css/signup.css">
</head>
<?php
    session_start();
    if(isset($_SESSION['username'])) { // 로그인 되어있다면
        echo "<script>location.replace('../user/main.php');</script>"; // 메인 페이지로 이동
        exit;
    }
?>

<body>
    <!-- 헤더 시작 -->
    <header>
        <nav class="gnb">
            <a href="../index.php"><img src="../imgs/logo.svg" alt="SENFIT 로고"></a>
            <div class="navigation">
                <a href="/user/login.php" id="login">로그인</a>
                <a href="/user/signup.php" id="signup">회원가입</a>
            </div>
        </nav>
    </header>
    <!-- 헤더 끝 -->

    <!-- 메인 시작 -->
    <main>
        <h2>회원가입</h2>
        <form action="./signup_action.php" method="POST" class="signup">
            <fieldset class="info">
                <legend>회원정보를 입력해주세요.</legend>
                <input type="text" name="id" placeholder="아이디(이메일)" required autocomplete autofocus>
                <input type="password" name="pw" placeholder="비밀번호" required>
                <input type="text" name="name" placeholder="이름" required>
            </fieldset>
            <fieldset class="phone">
                <legend>핸드폰 번호를 입력해주세요.</legend>
                <input type="tel" name="tel" id="tel" placeholder="숫자만 입력해주세요" required>
                <button class="tel_btn" type="button">인증번호 발송</button> <!-- verify phone number -->
            </fieldset>
            <fieldset class="verify">
                <legend>인증번호를 입력해주세요.</legend>
                <input type="text" id="verify" name="verify" placeholder="인증번호 입력" maxlength="6" required>
                <!--check verify code-->
                <button onclick="" type="button">인증번호 확인</button>
            </fieldset>
            <button type="submit" class="submit">가입하기</button>
        </form>
    </main>
    <!-- 메인 끝 -->
    <script src="../scripts/signup.js"></script>
</body>

</html>