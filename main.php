<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENIFIT</title>
    <link rel="stylesheet" href="./css/main.css">
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
                    <a href="./main.php" class="now">메인 페이지</a>
                </li>
                <li>
                    <a href="./exercise/my_exercise.php">나의 운동</a>
                </li>
                <li>
                    <a href="./exercise/part.php">부위별 운동</a>
                </li>
            </ul>
            <button>
                <a href="#">운동하러 가기</a>
            </button>
        </aside>

        <article>
            <div style="display: flex; justify-content: center; overflow:hidden;">
                <div class="main_page_1">
                    <h2>"운동 중 자세 교정을 알려 주는 트레이너가 필요하신가요?"</h2>
                    <h2>실시간 자세 교정 기능을 이용해보세요!</h2>
                    <h2 class="main_go_button"><a href="./exercise/correction.php">바로가기</a></h2>
                </div>
            </div>
            <div class="main_page_2">
                <div>
                    <h2 style="margin-bottom: 20px;">추천 운동 코스</h2>
                    <div class="main_page_2_layout">
                        <div>
                            <div class="video">
                                <img src="">
                            </div>
                            <h2>운동 코스</h2>
                        </div>
                        <div>
                            <div class="video"></div>
                            <h2>운동 코스</h2>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <!-- 메인 끝 -->
</body>

</html>