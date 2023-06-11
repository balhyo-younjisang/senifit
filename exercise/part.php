<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/part.css">
</head>

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
                    <a href="#">메인 페이지</a>
                </li>
                <li>
                    <a href="../exercise/my_exercise.php">나의 운동</a>
                </li>
                <li>
                    <a href="./part.php" class="active">부위별 운동</a>
                </li>
            </ul>
            <button>
                <a href="#">운동하러 가기</a>
            </button>
        </aside>
        <section class="content__main">
            <div class="main__header">
                <h2 class="title">부위별 운동</h2>
                <div class="category_wrap"></div>
            </div>
        </section>
    </main>
    <!-- 메인 끝 -->
</body>

</html>