<?php
session_start();
session_destroy(); // 세션 삭제
?>
<script>
alert("You've been logged out");
location.replace('../index.php');
</script>