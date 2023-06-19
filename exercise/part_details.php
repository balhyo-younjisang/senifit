<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENIFIT</title>
    <link rel="stylesheet" href="../css/part_details.css">
</head>
<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        echo "<script>location.replace('../user/login.php');</script>";
    }else {
        $username = $_SESSION['username'];
    } 

    $conn = mysqli_connect('localhost', 'root', 'Yydo0825..sql', 'senifit');
    
    $idx = $_GET['idx']; // URL에서 데이터 가져오기 
    $q = "SELECT * FROM exercise WHERE _id = $idx"; 
    $content = $conn->query($q);
    $exercise = $content -> fetch_array();

    $title = $exercise['name'];
    $video = $exercise['video'];
    $method = $exercise['method'];
    $howto = $exercise['howto'];
?>

<body>
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
        <article>
            <div>
                <h4><?php echo $title ?></h4>
                <!-- <div class="video"> -->
                <?php echo $video ?>
                <!-- </div> -->

                <h4 style="margin-top: 40px;">설명</h4>
                <h4 class="explain">
                    <?php
                        echo $method;
                        echo $howto;
                    ?>
                </h4>
            </div>
        </article>
    </main>
</body>

</html>