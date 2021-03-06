<?php
header('Access-Control-Allow-Origin: *');

$name = $_POST["name"];
if($name == "" || $name == " ") {
   header ('Location: user-login.html');
   exit();
}
else{
    if(file_exists('BD/'.$name)==true){
       $password = $_POST["password"];
       if($password == "" || $password == " ") {
           header ('Location: user-login.html');
           exit();
       }
       else{
           $name1 = file_get_contents('BD/'.$name.'/name.txt');
           $password1 = file_get_contents('BD/'.$name.'/password.txt');
           if($name1==$name & $password1==$password){
               
           }
       }
 
    }
   else{
      header ('Location: user-login.html');
      exit();
    }

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

    <title>TheJobs</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
  </head>

  <body class="nav-on-header">

    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="index.html"><img src="assets/img/logo.png" alt="logo"></a>
            <a class="logo-alt" href="index.html"><img src="assets/img/logo-alt.png" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="/resume-detail.html"><?php echo $name;?></a> / <a href="index.html">выход</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li>
            <a class="active" href="index.html">Главная</a>
          </li>
          <li>
            <a href="#">Вакансии</a>
            <ul>
              <li><a href="job-list-1.html">Поиск работы</a></li>
              <li><a href="job-detail.html">Информация о работе</a></li>
              <li><a href="job-add.html">Добавить вакансию</a></li>
              <li><a href="job-manage.html">Управление вакансиями</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Резюме</a>
            <ul>
              <li><a href="resume-list.html">Поиск резюме</a></li>
              <li><a href="resume-detail.html">Информация о резюме</a></li>
              <li><a href="resume-add.html">Создать резюме</a></li>
              <li><a href="resume-manage.html">Управлять резюме</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Компании</a>
            <ul>
              <li><a href="company-list.html">Поиск компании</a></li>
              <li><a href="company-detail.html">Информация о компании</a></li>
              <li><a href="company-add.html">Зарегистрировать компанию</a></li>
              <li><a href="company-manage.html">Управление компаниями</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Страницы</a>
            <ul>
              <li><a href="page-about.html">О нас</a></li>
              <li><a href="page-contact.html">Контакты</a></li>
              <li><a href="page-faq.html">FAQ</a></li>
            </ul>
          </li>
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->


    <!-- Site header -->
    <header class="site-header size-lg text-center" style="background-image: url(assets/img/bg-banner1.jpg)">
      <div class="container">
        <div class="col-xs-12">
          <br><br>
          <h2>Мы предлагаем <mark>1,259</mark> вакансий прямо сейчас</h2>
          <h5 class="font-alt">Найдите работу мечты в считаные минуты</h5>
          <br><br><br>
          <form class="header-job-search">
            <div class="input-keyword">
              <input type="text" class="form-control" placeholder="Должность, навыки или компания">
            </div>

            <div class="input-location">
              <input type="text" class="form-control" placeholder="Город или индекс">
            </div>

            <div class="btn-search">
              <button class="btn btn-primary" type="submit">Найти вакансии</button>
              <a href="job-list-1.html">Расширенный поиск</a>
            </div>
          </form>
        </div>

      </div>
    </header>
    <!-- END Site header -->


    <!-- Main container -->
    <main>

      <!-- Facts -->
      <section class="bg-img bg-repeat no-overlay section-sm" style="background-image: url(assets/img/bg-pattern.png)">
        <div class="container">

          <div class="row">
            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="6890"></span>+</p>
              <h6>Вакансий</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="12000"></span>+</p>
              <h6>Посетителей</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="5100"></span>+</p>
              <h6>Резюме</h6>
            </div>

            <div class="counter col-md-3 col-sm-6">
              <p><span data-from="0" data-to="2010"></span>+</p>
              <h6>Компаний</h6>
            </div>
          </div>

        </div>
      </section>
      <!-- END Facts -->


      <!-- How it works -->
      <section>
        <div class="container">

          <div class="col-sm-12 col-md-6">
            <header class="section-header text-left">
              <span>Рабочий процесс</span>
              <h2>Как это работает</h2>
            </header>

            <p class="lead">Может работать онлайн с телефона!</p>
            <p>Быстро и удобно.</p>
            
            
            <br><br>
          </div>

          <div class="col-sm-12 col-md-6 hidden-xs hidden-sm">
            <br>
            <img class="center-block" src="assets/img/how-it-works.png" alt="how it works">
          </div>

        </div>
      </section>
      <!-- END How it works -->


      <!-- Categories -->
      <section class="bg-alt">
        <div class="container">
          <header class="section-header">
            <span>Категории</span>
            <h2>Популярные категории</h2>
            <p>Здесь находятся самые популярные категории</p>
          </header>

          <div class="category-grid">
            <a href="job-list-1.html">
              <i class="fa fa-laptop"></i>
              <h6>Технологии</h6>
              <p>Дизайнер, разработчик, IT-сервис, Front-end разработчик, управляющий проектами</p>
            </a>

            <a href="job-list-1.html">
              <i class="fa fa-line-chart"></i>
              <h6>Бухгалтерия</h6>
              <p>Финансы, налоговая, Payroll, бухгалтер, отдел кадров</p>
            </a>

            <a href="job-list-1.html">
              <i class="fa fa-medkit"></i>
              <h6>Медицина</h6>
              <p>Врач, мед. сестра, хирург, стоматолог, массажист</p>
            </a>

            <a href="job-list-1.html">
              <i class="fa fa-cutlery"></i>
              <h6>Еда</h6>
              <p>Повар, официант, бариста, кассир, мерчендайзер</p>
            </a>

            <a href="job-list-1.html">
              <i class="fa fa-newspaper-o"></i>
              <h6>Медиа</h6>
              <p>Журналист, редактор, репортёр, монтажёр, оператор</p>
            </a>

            <a href="job-list-1.html">
              <i class="fa fa-institution"></i>
              <h6>Управление</h6>
              <p>Секретарь, прокурор, отдел учёта, менеджер, биолог</p>
            </a> 
          </div>

        </div>
      </section>
      <!-- END Categories -->


      <!-- Newsletter -->
      <section class="bg-img text-center" style="background-image: url(assets/img/bg-facts.jpg)">
        <div class="container">
          <h2><strong>Подписаться</strong></h2>
          <h6 class="font-alt">Получайте лучшие еженедельные новые вакансии на вашу почту</h6>
          <br><br>
          <form class="form-subscribe" action="#">
            <div class="input-group">
              <input type="text" class="form-control input-lg" placeholder="Ваш e-mail адрес">
              <span class="input-group-btn">
                <button class="btn btn-success btn-lg" type="submit">Подписаться</button>
              </span>
            </div>
          </form>
        </div>
      </section>
      <!-- END Newsletter -->


    </main>
    <!-- END Main container -->


    <!-- Site footer -->
    <footer class="site-footer">

      <!-- Top section -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>О нас</h6>
            <p class="text-justify">Веб-сайт по трудоустройству - это веб-сайт, который специально занимается трудоустройством или созданием карьерой. Многие сайты по трудоустройству предназначены для того, чтобы работодатели могли публиковать требования к вакансиям для их заполнения. Они также широко известны как советы по трудоустройству. Другие сайты занятости предлагают обзоры работодателей, советы по карьере и поиску работы, а также описывают различные описания должностей или работодателей. Через веб-сайт вакансий потенциальный сотрудник может найти и заполнить заявление о приеме на работу.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Компания</h6>
            <ul class="footer-links">
              <li><a href="page-about.html">О нас</a></li>
              <li><a href="page-faq.html">Тех. поддержка</a></li>
              <li><a href="page-contact.html">Наши контакты</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Популярные вакансии</h6>
            <ul class="footer-links">
              <li><a href="job-list-1.html">Front-end разработчик</a></li>
              <li><a href="job-list-1.html">Android разработчик</a></li>
              <li><a href="job-list-1.html">iOS разработчик</a></li>
              <li><a href="job-list-1.html">Full stack разработчик</a></li>
              <li><a href="job-list-1.html">Проектный администратор</a></li>
            </ul>
          </div>
        </div>

        <hr>
      </div>
      <!-- END Top section -->

      <!-- Bottom section -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyrights &copy; 2021 All Rights Reserved by <a href="https://vk.com/studvesna_72">Студенческая весна | Тюмень</a>.</p>
          </div>
        </div>
      </div>
      <!-- END Bottom section -->

    </footer>
    <!-- END Site footer -->


    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->

    <!-- Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>