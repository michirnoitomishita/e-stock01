<?php
// データベースに接続する関数を読み込む
include("functions.php");

// ユーザーのログイン状態をチェックする関数を読み込む
session_start();
check_session_id();

// データベースに接続
$pdo = connect_to_db();

// チャットメッセージを取得
// $sql = "SELECT * FROM chat_message ORDER BY created_at ASC";
$sql = "SELECT chat_message.*, users_table.username FROM chat_message 
        JOIN users_table ON chat_message.user_id = users_table.id 
        ORDER BY chat_message.created_at ASC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css"> <!-- style.cssを読み込む -->
  <title>CHAT</title>
</head>

<body>
  <h1>CHAT</h1>

  <!-- チャットメッセージを表示 -->
  <div>
    <?php foreach ($messages as $message) : ?>
      <?php if (!empty($message['message'])) : ?>
        <p><?php echo htmlspecialchars($message['username'], ENT_QUOTES) . ' : ' . htmlspecialchars($message['message'], ENT_QUOTES); ?></p>
      <?php endif; ?>
    <?php endforeach; ?>
  </div>

  <!-- 戻るボタン -->
  <button onclick="location.href='index_login.php'">戻る</button>

  <!-- チャットメッセージの送信フォーム -->
  <form action="post_message.php" method="POST">
    <input type="text" name="message">
    <input type="submit" value="送信">
  </form>
</body>

</html>