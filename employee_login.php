<?php
session_start();
include('functions.php');
check_session_id();

$pdo = connect_to_db();

$sql = 'SELECT * FROM todo_table ORDER BY deadline ASC';

$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["deadline"]}</td>
      <td>{$record["todo"]}</td>
      <td><a href='todo_edit.php?id={$record["id"]}'>edit</a></td>
      <td><a href='todo_delete.php?id={$record["id"]}'>delete</a></td>
    </tr>
  ";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css"> <!-- 外部スタイルシートの読み込み -->
  <title>User Selection</title>


  <style>
    .container {
      text-align: center;
      margin-top: 100px;
    }

    .button-container {
      margin-top: 50px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .button {
  display: block;
  width: 200px; /* 幅を指定 */
  margin-bottom: 10px;
  padding: 10px 20px;
  font-size: 18px;
  text-decoration: none;
  color: #fff;
  background-color: #888888;
  border-radius: 5px;
  transition: background-color 0.3s;
    }

    .button:hover {
      background-color: #555555;
    }
  </style>


</head>

<body>
  <div class="container">
    <h1>必要な項目を選択して下さい。</h1>
    <div class="button-container">
       <a href="goal_setting.php" class="button">目標設定をする</a>
      <a href="eva_sheet.php" class="button">自己評価をする</a>
       <a href="evaluation_check.php" class="button">評価を確認する</a>
      <a href="survey.php" class="button">サーベイに回答する</a>
       <a href="qa.php" class="button">Q&A</a>
    </div>
  </div>
</body>

</html>
