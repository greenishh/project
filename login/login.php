<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="login-form">
        <h1>로그인</h1>
        <form method="post" action="login_check.php">

            <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <?php if(isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <div class="int-area">
                <input type="text" name="userid" id="userid" 
                autocomplete="off" required>
                <label for="userid">아이디</label>
            </div>
            <div class="int-area">
                <input type="password" name="userpw" id="userpw" 
                autocomplete="off" required>
                <label for="userpw">비밀번호</label>
            </div>
            <div class="btn-area">
                <button type="submit" id="btn_login">확인</button>
            </div>
        </form>
        <div class="caption">
            <a href="register.php">회원정보를 잊으셨나요?</a>
        </div>
    </section>
</body>
</html>