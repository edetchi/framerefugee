<?php
/*-----------------------------------------------------------------------------
    データベースへの接続
-----------------------------------------------------------------------------*/
//MySQL

try {
	$pdo = new PDO($dsn, $db_user, $db_pass);
	//エラーモード設定
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//プリペアドステートメント用意
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	//デバッグ用
	//print "接続完了<br>";
} catch (PDOException $e) {
	//エラー発生時処理停止してエラー表示
	die("エラー: " . $e->getMessage());
}

//SQLite
/*
try {
    $pdo = new SQLite3('..sqlite//dokingan.sqlite3');
    if (!$pdo) {
      die('接続失敗です。'.$sqliteerror);
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
*/
?>