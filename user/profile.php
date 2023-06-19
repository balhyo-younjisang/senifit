<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENFIT</title>
    <link rel="stylesheet" href="../css/user_page.css">
</head>
<?php
    session_start(); 
    if(!isset($_SESSION['username'])) { // 로그인이 안되어있다면
        echo "<script>location.replace('../user/login.php');</script>"; // 로그인 페이지로 이동
    }else {
        $username = $_SESSION['username']; // 유저네임 변수에 세션 유저네임 값 담기
    } 
?>

<body>
    <header>
        <nav class="gnb">
            <a href="index.php"><img src="../imgs/logo.svg" alt="SENFIT 로고"></a>
            <div class="navigation">
                <a href="#" id="search">
                    <img src="../imgs/search.svg" alt="검색">
                </a>
                <a href="/user/profile.php" id="profile">
                    <img src="../imgs/user.svg" alt="프로필">
                </a>
            </div>
        </nav>
    </header>

    <main>
        <h4>마이페이지</h4>

        <article class="my_infor">
            <div style="display: flex;">
                <a href="#" class="my_img"></a>
                <div class="my_name">
                    <h4><a href="#"><?php echo $_SESSION['username']?>님</a></h4>
                </div>
            </div>
            <div>
                <a href="./logout_action.php">
                    <h6>로그아웃</h6>
                </a>
            </div>
        </article>

        <article class="infor_menu">
            <h5><a href="#">내 정보 관리</a></h5>
            <h5><a href="#">아이디/비밀번호 변경</a></h5>
            <h5><a href="#">공지사항</a></h5>
            <h5><a href="#">서비스 정책</a></h5>
            <h5><a href="#">문의하기</a></h5>
            <h5><a href="#">회원탈퇴</a></h5>
        </article>
    </main>

</body>

</html>