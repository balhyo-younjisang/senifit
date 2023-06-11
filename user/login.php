<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENIFIT</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <header>
        <nav class="gnb">
            <a href="index.php"><img src="../imgs/logo.svg" alt="SENFIT 로고"></a>
            <div class="navigation">
                <a href="/user/login.php" id="login">로그인</a>
                <a href="/user/signup.php" id="signup">회원가입</a>
            </div>
        </nav>
    </header>
    <main class="main">
        <h2>로그인</h2>
        <form action="/user/login_action.php" method="post">
            <h4>회원정보를 입력해주세요.</h4>
            <div class="input_container">
                <input type="text" autocomplete autofocus placeholder="아이디(이메일)" required>
                <input type="password" required placeholder="비밀번호">
            </div>
            <button type="submit" class="submit">로그인</button>
        </form>
    </main>
</body>

</html>