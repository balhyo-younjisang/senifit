<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/course.css">
</head>
<?php
     session_start(); // 세션 사용 
     if(!isset($_SESSION['username'])) { // 만약 세션이 없다면
         echo "<script>location.replace('../user/login.php');</script>"; // 로그인 페이지로 이동
     }else {
         $username = $_SESSION['username']; // 세션이 있다면 변수에 값 저장
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
                    <a href="#" class="now">메인 페이지</a>
                </li>
                <li>
                    <a href="../exercise/my_exercise.php">나의 운동</a>
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
                <h2 class="title">운동 코스</h2>
            </div>
        </section>
    </main>
    <!-- 메인 끝 -->
</body>

</html>