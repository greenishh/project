<?php
include 'dbconfig.php';

if(isset($_POST['userid']) && isset($_POST['userpw']) && isset($_POST['userpwd']) && isset($_POST['username']) && isset($_POST['useremail'])){
    $userid = mysqli_real_escape_string($db, $_POST['userid']);
    $userpw = mysqli_real_escape_string($db, $_POST['userpw']);
    $userpwd = mysqli_real_escape_string($db, $_POST['userpwd']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $useremail = mysqli_real_escape_string($db, $_POST['useremail']);
    $job = mysqli_real_escape_string($db, $_POST['job']);

    if($job == ''){
        header("location: register.php?error=직업을 다시 골라주세요!");
        exit();
    } else {
        if($userpw !== $userpwd){
            header("location: register.php?error=비밀번호가 일치하지 않습니다!");
            exit();
        } else {
            $sql_same = "SELECT * FROM user WHERE id='$userid'";
            $order = mysqli_query($db, $sql_same);
    
            if(mysqli_num_rows($order) > 0){
                header("location: register.php?error=아이디가 이미 존재합니다!");
                exit();
            } else {
                $sql_same = "INSERT INTO user(id, password, name, email, job) VALUES 
                            ('$userid','$userpw','$username','$useremail','$job')";
                $result = mysqli_query($db, $sql_same);
    
                if($result){
                    echo '성공적으로 가입되었습니다!';
                    header("location: login.php?success=성공적으로 가입되었습니다!");
                    exit();
                } else {
                    header("location: register.php?error=가입을 실패했습니다!");
                    exit();
                }
            }
        }
    }
} else {
        header("location: register.php?error=알 수 없는 오류가 발생했습니다!");
        exit();
}