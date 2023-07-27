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
      <legend>E-Knowledgeログイン画面</legend>
      <div>
        username: <input type="text" name="username">
      </div>
      <div>
        password: <input type="text" name="password">
      </div>

      <div>
        <button>MY TODOリストLogin</button>
      </div>
      <a href="todo_register.php">or register</a>
    </fieldset>
    <div>
      <div>
        <button>アドバイスCHATLogin</button>
      </div>
      <a href="todo_register.php">or register</a>
      </fieldset>
      <div>
        <button>自己分析リストLogin</button>
      </div>
      <a href="todo_register.php">or register</a>
      </fieldset>
  </form>

</body>

</html>