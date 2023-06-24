<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENIFIT</title>
    <link rel="stylesheet" href="../css/part.css">
</head>
<?php

use function PHPSTORM_META\type;

    session_start(); // 세션 사용 
    if(!isset($_SESSION['username'])) { // 만약 세션이 없다면
        echo "<script>location.replace('../user/login.php');</script>"; // 로그인 페이지로 이동
    }else {
        $username = $_SESSION['username']; // 세션이 있다면 변수에 값 저장
    } 

    $conn = mysqli_connect('localhost', 'root', 'Yydo0825..sql', 'senifit'); // mysql 연결
    $q = "SELECT * FROM exercise"; // 쿼리문 설정

    if(isset($_GET['category']))  {
        $CATEGORY = $_GET['category'];
        $q.=" WHERE part = '$CATEGORY'";
    }

    $content = $conn->query($q);  // DB에서 값 찾고 변수에 저장
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
                    <a href="../exercise/my_exercise.php">나의 운동</a>
                </li>
                <li>
                    <a href="./part.php" class="now">부위별 운동</a>
                </li>
            </ul>
            <button>
                <a href="#">운동하러 가기</a>
            </button>
        </aside>
        <div class="content_wrap">
            <section class="content__head">
                <div class="head__header">
                    <h2 class="title">부위별 운동</h2>
                    <div class="category_wrap">
                        <ul>
                            <li class="category">복부</li>
                            <li class="category">목</li>
                            <li class="category">허리</li>
                            <li class="category">골반</li>
                            <li class="category">팔</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="content">
                <?php
                    while($exercise = $content->fetch_array()) { // 반복문 돌며 렌더링
                        $title = $exercise['name'];
                        $idx = $exercise['_id'];
                        $img = $exercise['image'];
                ?>
                <div class="background">
                    <a href="http://localhost/exercise/part_details.php?idx=<?php echo $idx ?>"
                        style="background-image:url(<?php echo '../'.$img?>)"><?php echo $title ?></a>
                </div>

                <?php } ?>
            </section>
        </div>

    </main>
    <!-- 메인 끝 -->
    <script src="../scripts/part.js"></script>
</body>

</html>