<?php

echo $_GET['name'];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>フォーム</title>
</head>

<body>

  <form method="GET" action="input.php"></form>
  名前：
  <input type="text" name="name" placeholder="山田一郎">

  <input type="submit" value="送信">
</body>

</html>