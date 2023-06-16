<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENIFIT</title>
    <link rel="stylesheet" href="../css/my_exercise.css">
</head>
<?php
    // session_start();
    // if(!isset($_SESSION['username'])) {
    //     echo "<script>location.replace('../user/login.php');</script>";
    // }else {
    //     $username = $_SESSION['username'];
    // } 
?>

<body>
    <!-- 헤더 시작 -->
    <header>
        <nav class="gnb">
            <a href="../index.php"><img src="../imgs/logo.svg" alt="SENFIT 로고"></a>
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
    <!-- 헤더 끝 -->
    <!-- 메인 시작 -->
    <main>
        <!-- 사이드 내비게이션 바 시작 -->
        <aside class="left_nav">
            <ul>
                <li>
                    <a href="../main.php">메인 페이지</a>
                </li>
                <li>
                    <a href="../exercise/my_exercise.php" class="now">나의 운동</a>
                </li>
                <li>
                    <a href="./part.php">부위별 운동</a>
                </li>
            </ul>
            <button>
                <a href="#">운동하러 가기</a>
            </button>
        </aside>
        <section class="content__main">
            <div class="main__header">
                <h2 class="title">$$$님의 아픈 신체 부위를 입력해주세요.</h2>
                <h2 class="title">아픈 신체 부위를 제외한 운동을 매일 3개씩 추천해드립니다.</h2>
                <div class="category_wrap">
                    <ul>
                        <li class="category">머리</li>
                        <li class="category">목</li>
                        <li class="category">허리</li>
                        <li class="category">골반</li>
                        <li class="category">발</li>
                        <li class="category">다리</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <!-- 메인 끝 -->
    <script src="../scripts/my_exercise.js"></script>
</body>

</html>