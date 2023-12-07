<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="css/style.css" rel="stylesheet" >
</head>
    <section class="login-form">
        <h1>회원가입</h1>
        <form method="post" action="user_insert.php">

            <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
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
            <div class="int-area">
                <input type="password" name="userpwd" id="userpwd" 
                autocomplete="off" required>
                <label for="userpwd">비밀번호 확인</label>
            </div>
            <div class="int-area">
                <input type="text" name="username" id="username" 
                autocomplete="off" required>
                <label for="username">닉네임</label>
            </div>
            <div class="int-area">
                <input type="email" name="useremail" id="useremail" 
                autocomplete="off" required>
                <label for="useremail">이메일</label>
            </div></br>
            <select name="job">
                <option value="">--JOB--</option>
                <option value="student">학생</option>
                <option value="seeker">취준생</option>
                <option value="developer">개발자</option>
            </select>
            <div class="btn-area">
                <button type="submit" id="btn_insert">확인</button>
            </div>
        </form>
        <div class="caption">
            <a href="login.php">로그인 화면으로</a>
        </div>
    </section>
</body>
</html>