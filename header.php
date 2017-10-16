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
  <link href="https://fonts.googleapis.com/earlyaccess/mplus1p.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
  <header>
    <div class="nav-bar">
      <div class="nav-bar__logo">
        <a class="nav-bar__logo-link" href="./"><!--<img src="images/10.jpg" alt="<?= $site_name ?>">--><i class="fa fa-home nav-bar__logo-icon" aria-hidden="true"></i></a>
      </div>
      <ul class="nav-bar__menu">
        <?php if (!$login_flag): ?>
        <li class="nav-bar__login"><a class="nav-bar__login-link modal-login__trigger" data-modal="modal-login">ログイン</a></li>
        <li class="nav-bar__register"><a class="modal-register__trigger" data-modal="modal-register">新規登録</a></li>
        <?php else: ?>
        <li class="nav-bar__mymenu"><a class="nav-bar__mymenu-link modal-mymenu__trigger" data-modal="modal-mymenu"><i class="fa fa-user nav-bar__mymenu-icon" aria-hidden="true"></i>マイメニュー</a></li>
        <?php endif; ?>
        <?php if(!$is_detail_page): ?>
        <li class="nav-bar__filter">
          <a class="nav-bar__filter-link" href="#"><!--<span class="icon icon-filter">--><i class="fa fa-filter nav-bar__filter-icon" aria-hidden="true"></i></a>
        </li>
      <?php else: ?>
        <li class="nav-bar__back"></span>
          <a class="nav-bar__back-link" href="./"><!--<span class="icon icon-undo"></span>--><i class="fa fa-arrow-left nav-bar__back-icon" aria-hidden="true"></i>
</a>
        </li>
      <?php endif; ?>
      </ul>
    </div><!--.nav-bar-->
    <div class="modal-login">
      <h2 class="modal-login__title">ログイン</h2>
      <form action="mypage/login.php" method="post">
        <div>
          <label for="roguin"><span class="attention"></span></label>
          <input type="text" name="user_loginid" class="modal-login__email-input" id="roguin" size="30" value="ユーザー名→メールアドレスに変更したい">
        </div>
        <div>
          <label for="pasuwa-do"><span class="attention"></span></label>
          <input type="password" name="user_password" class="modal-login__password-input" id="pasuwa-do" size="30" value="パスワード">
        </div>
        <div>
          <input type="submit" name="send" class="modal-login__btn-input" value="ログイン">
        </div>
        <p class="modal-login__notice-password">パスワードを忘れた方は <a class="modal-login__notice-password-link" href="#  ">こちら</a></p>
        <p class="modal-login__notice-register">アカウントをお持ちでない方 <a class="modal-login__notice-register-link" href="#">新規登録</a></p>
      </form>
    </div><!--.modal-login-->
    <div class="modal-register">
      <h2 class="modal-register__title">アカウントの作成</h2>
      <p class="modal-register__notice">すでにアカウントをお持ちの方は <a class="modal-register__notice-link" href="#  ">こちら</a></p>
    </div><!--.modal-register-->
    <div class="modal-mymenu">
      <ul class="modal-mymenu__layout">
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
    </div><!--.modal-mymenu-->
  </header>