<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $id = $_POST['id']; // post method 통해 넘어온 값 저장
    $pw = $_POST['pw']; 
    $username = $_POST['name'];

    if(!is_null($id) && !is_null($pw) && !is_null($username)) { // 만약 모든 값이 입력되었다면
        $conn = mysqli_connect('localhost', 'root', 'Yydo0825..sql', 'senifit');
        $syntax = "SELECT id FROM users WHERE id='$id';";

        $result = mysqli_query($conn, $syntax);
        $id_db;
        
        while($row = mysqli_fetch_array($result)) {
            $id_db = $row['id'];
        }
        if($id != $id_db) { // 일치하는 아이디가 아니라면
            $encrypted_pw = password_hash($pw, PASSWORD_DEFAULT);
            $sql_add_user = "INSERT INTO users ( id, username, password ) VALUES ('$id', '$username', '$encrypted_pw');";
            mysqli_query( $conn, $sql_add_user);
            echo "<script>location.replace('login.php');</script>"; 
        } else {
            echo "<script>location.replace('signup.php');</script>";
        }
    }
?>

<body>

</body>

</html>