

<?php

/**
  * List all users with a link to edit
  */

try {
  require "config.php";
  require "common.php";

  $connection = new PDO($dsn, $username, $password, $options);

  $sql = "SELECT * FROM users";

  $statement = $connection->prepare($sql);
  $statement->execute();

  $result = $statement->fetchAll();
} catch(PDOException $error) {
  echo $sql . "<br>" . $error->getMessage();
}
?>
<?php require "templates/header.php"; ?>

<h2>内容を更新する</h2>

<style>
  th, td {
    border: 1px solid;
    font-size: 20px;
  }
</style>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>利用者</th>
      <th>車椅子タイプ</th>
      <th>メーカー</th>
      <th>フロア</th>
      <th>チェアセンサー</th>
      <th>登録日</th>
      <th>更新</th>
    </tr>
  </thead>
  
  <tbody>
    <?php foreach ($result as $row) : ?>

      <tr>
        <td><?php echo escape($row["id"]); ?></td>
        <td><?php echo escape($row["firstname"]); ?></td>
        <td><?php echo escape($row["lastname"]); ?></td>
        <td><?php echo escape($row["email"]); ?></td>
        <td><?php echo escape($row["age"]); ?></td>
        <td><?php echo escape($row["location"]); ?></td>
        <td><?php echo escape($row["date"]); ?></td>
        <td><a href="update-single.php?id=<?php echo escape($row["id"]); ?>"><b>更新する</b></a></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
</table><br>


<a href="index.php" style="font-size:25px; display:inline-block; vertical-align:top; margin-top:20px;">メインページに戻る</a>
<?php require "templates/footer.php"; ?>