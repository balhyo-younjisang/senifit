<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        session_start();
        $conn = mysqli_connect('localhost', 'root', 'Yydo0825..sql', 'senifit');
        $syntax = "SELECT * FROM users";
        $result = mysqli_query($conn, $syntax);

        // login.php에서 넘어온 id, password
        $id = $_POST['id'];
        $password = $_POST['pw'];

        $q = "SELECT * FROM users WHERE id = '$id'";

        $exists = $conn->query($q);
        $row = $exists->fetch_array(MYSQLI_ASSOC);

        if($row == null) {// 결과가 존재하지 않다면 로그인 페이지로 이동
            echo "<script>alert('Invalid username or password')</script>";
            echo "<script>location.replace('login.php');</script>";
            exit;
        } else if (!password_verify($password, $row['password'])) {
            echo "<script>alert('password is not correct')</script>;";
            echo "<script>location.replace('login.php');</script>";
            exit;
        }

        // 결과가 존재한다면 세션 생성
        $_SESSION['username'] = $row['username']; // 세션에 값 저장
        $_SESSION['id'] = $row['id'];
        echo "<script>location.replace('../main.php');</script>"; // 메인 페이지로 이동
        exit; 
    ?>
</body>

</html>