<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Fashion</title>

  <meta name="description" content="Fashion - интернет-магазин">
  <meta name="keywords" content="Fashion, интернет-магазин, одежда, аксессуары">

  <meta name="theme-color" content="#393939">

  <link rel="preload" href="/img/intro/coats-2018.jpg" as="image">
  <link rel="preload" href="/fonts/opensans-400-normal.woff2" as="font">
  <link rel="preload" href="/fonts/roboto-400-normal.woff2" as="font">
  <link rel="preload" href="/fonts/roboto-700-normal.woff2" as="font">

  <link rel="icon" href="/img/favicon.png">
  <link rel="stylesheet" href="/css/style.min.css">

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="/js/scripts.js" defer=""></script>
  <script src="/js/sort.js" defer=""></script>
</head>
<body>
<header class="page-header">
  <a class="page-header__logo" href="#">
    <img src="/img/logo.svg" alt="Fashion">
  </a>
  <nav class="page-header__menu">
    <ul class="main-menu main-menu--header">
    <?foreach ($mainMenuList as $key => $value)
        {?>
          <li>
            <a class="main-menu__item <?=($url==$value)?'active':''?>" href="<?=$value?>"><?=$key?></a>
          </li>
        <?}?>
    </ul>
  </nav>
</header>
<?php include 'application/views/'.$content_view; ?>
<footer class="page-footer">
  <div class="container">
    <a class="page-footer__logo" href="#">
      <img src="img/logo--footer.svg" alt="Fashion">
    </a>
    <nav class="page-footer__menu">
      <ul class="main-menu main-menu--footer">
        <?foreach ($mainMenuList as $key => $value)
        {?>
          <li>
            <a class="main-menu__item <?=($url==$value)?'active':''?>" href="<?=$value?>"><?=$key?></a>
          </li>
        <?}?>
      </ul>
    </nav>
    <address class="page-footer__copyright">
      © Все права защищены
    </address>
  </div>
</footer>
</body>
</html>

