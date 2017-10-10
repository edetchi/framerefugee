<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $page_title; ?> | ドキンガン</title>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
  <header>
    <div class="nav-bar">
      <div class="nav-bar__logo">
        <a href="./"><img src="#" alt="<?= $site_name ?>"></a>
      </div>
      <ul class="nav-bar__menu">
        <?php if (!$login_flag): ?>
        <li class="nav-bar__login">ログイン</li>
        <li class="nav-bar__register">新規登録</li>
        <?php else: ?>
        <li class="nav-bar__mymenu">マイメニュー</li>
        <?php endif; ?>
        <?php if(!$is_detail_page): ?>
        <li class="nav-bar__filter">
          <span class="icon icon-filter">
        </li>
      <?php else: ?>
        <li class="nav-bar__back"></span>
          <span class="icon icon-undo"></span>
        </li>
      <?php endif; ?>
      </ul>
    </div><!--.nav-bar-->
    <div class="login-pop">
      <h2>ログイン</h2>
      <form class="login-pop__login-form" action="login.php" method="post">
        <div class="login-pop__email">
          <label for="roguin"><span class="attention"></span></label>
          <input type="text" name="user_loginid" id="roguin" size="30" value="ユーザー名→メールアドレスに変更したい">
        </div>
        <div class=login-pop__password>
          <label for="pasuwa-do"><span class="attention"></span></label>
          <input type="password" name="user_password" id="pasuwa-do" size="30" value="パスワード">
        </div>
        <div class="login-pop__btn">
          <input type="submit" name="send" value="ログイン">
        </div>
        <p class="login-pop__notice-password">パスワードを忘れた方は <a href="#  ">こちら</a></p>
        <p class="login-pop__notice-register">アカウントをお持ちでない方 <a href="#">新規登録</a></p>
      </form>
    </div><!--.login-pop-->
    <div class="register-pop">

    </div><!--.register-pop-->
    <div class="mymenu-pop">
      <ul>
        <li>
          <a href="mypage/favorites.php">
            <i class="fa fa-star-o" aria-hidden="true"></i>お気に入り
          </a>
        </li>
        <li>
          <a href="mypage/frame_list.php">
            <span class="icon icon-glasses"></span>フレーム管理
          </a>
        </li>
        <li>
          <a href="mypage/account.php">
            <span class="icon icon-setting1"></span>アカウント設定
          </a>
        </li>
        <li>
          <a href="mypage/logout.php">
            <i class="fa fa-sign-out" aria-hidden="true"></i>ログアウト
          </a>
        </li>
      </ul>
    </div><!--.mymenu-pop-->
  </header>