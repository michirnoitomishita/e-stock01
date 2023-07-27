<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todoリストログイン画面</title>
  <link rel="stylesheet" href="style.css"> <!-- style.cssを読み込む -->
</head>

<body>
  <form action="todo_login_act.php" method="POST">
    <fieldset>
      <legend>E-Stockログイン画面</legend>
      <div>
        username: <input type="text" name="username">
      </div>
      <div>
        password: <input type="text" name="password">
      </div>

      <div>
        <button type="submit">MY TODOリストLogin</button>
      </div>
    </fieldset>
  </form>

  <form action="chat.php" method="POST"> <!-- chat.phpに移動するようにする -->
    <fieldset>

      <div>
        <button type="submit">アドバイスCHATLogin</button>
      </div>
    </fieldset>
  </form>

  <form action="todo_login_act.php" method="POST">
    <fieldset>
      <div>
        <button type="submit">写真ストック集</button>
      </div>
    </fieldset>
  </form>

</body>

</html>