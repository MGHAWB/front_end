<?php
echo $_POST['username'];
// Initialize the session
//session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
//if(true){
//  echo "123";
//  header("location: Login.php");
//  exit;
//}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <!-- <link href="./style.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid" align="center">
        <h1>註冊</h1>
    </div>
    <div class="container-sm">
        <form action="./Register.php" method="post"> 
            <div class="mb-3">
                <label class="form-label">使用者名稱</label>
                <input type="text" class="form-control" name="username">
                <div class="form-text">Must be 8-20 characters long.</div>
            </div>


            <div class="mb-3">
                <label class="form-label">密碼</label>
                <input type="password" class="form-control" name="password">
                <div class="form-text">Must be 8-20 characters long.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">名字</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">年齡</label>
                <input type="text" class="form-control" name="age">
            </div>

            <div class="mb-3">
                <label class="form-label">電子信箱</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">身高</label>
                <input type="text" class="form-control" name="height">
            </div>
            <div class="mb-3">
                <label class="form-label">體重</label>
                <input type="text" class="form-control" name="width">
            </div>
            <button type="submit" class="btn btn-primary" ahref="Login.php">送出</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>
