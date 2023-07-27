<?php
// post_message.php

session_start();
include("functions.php");
check_session_id();

// データベースに接続
$pdo = connect_to_db();

// フォームから送信されたメッセージを取得
$message = $_POST['message'];
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username']; // ユーザー名を取得



// メッセージをデータベースに保存
$sql = "INSERT INTO chat_message (user_id, message) VALUES (:user_id, :message)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindValue(':message', $message, PDO::PARAM_STR);
$stmt->execute();

// チャットページにリダイレクト
header('Location: chat.php');
exit();
