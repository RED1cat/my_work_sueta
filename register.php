<?php

header('Access-Control-Allow-Origin: *');

$name = $_POST["name"];
if($name == "" || $name == " ") {
   header ('Location: user-register.html');
   exit();
}
else{
    if(file_exists('BD/'.$name)==false){
       mkdir('BD/'.$name, 0777);
       file_put_contents('BD/'.$name.'/name.txt',$name);
    }
    else{
       header ('Location: user-register-error.html');
       exit();
    }
}
$password = $_POST["password"];
if($password == "" || $password == " ") {
       header ('Location: user-register.html');
       exit();
}
else{
    file_put_contents('BD/'.$name.'/password.txt',$password);
}

?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Разместите вакансию или создайте свое онлайн резюме с помощью MyJobSueta!">
    <meta name="keywords" content="">

    <title>TheJobs - Register</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
  </head>

  <body class="login-page">


    <main>

      <div class="login-block">
        <img src="assets/img/logo.png" alt="">
        <h1>Log into your account</h1>

        

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-user"></i></span> 
              <form action="register.php" method="post">
              <p><input type="text" name="name" class="form-control" placeholder="Ваше имя" maxlength = "15"/></p>
            </div>
          </div>
            
          
          
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-unlock"></i></span>
              <p><input type="password" name="password" class="form-control" placeholder="Введите пароль" maxlength = "15"/></p>
            </div>
          </div>

          <text class="btn btn-primary btn-block" type="text">Регистрация прошла успешна</text>
          

          

         </form>
      </div>

      <div class="login-links">
        <p class="text-center">Уже есть аккаунт? <a class="txt-brand" href="user-login.html">Логин</a></p>
      </div>

    </main>


  </body>
</html>
