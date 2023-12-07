<?php
include 'dbconfig.php';

if(isset($_POST['userid']) && isset($_POST['userpw'])){
    $userid = mysqli_real_escape_string($db, $_POST['userid']);
    $userpw = mysqli_real_escape_string($db, $_POST['userpw']);

    $sql = "SELECT * FROM user WHERE id='$userid'";
    $result = mysqli_query($db, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        $hash = $row['password'];

        if($userpw === $hash){
            header("location: mypage.php");
            exit();
        } else {
            header("location: login.php?error=로그인에 실패하였습니다!");
            exit();
        }
    } else {
        header("location: login.php?error=아이디가 잘못 입력되었습니다!");
        exit();
    }
} else {
        header("location: login.php?error=알 수 없는 오류가 발생했습니다!");
        exit();
}