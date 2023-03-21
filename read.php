

<?php

/**
  * Function to query information based on
  * a parameter: in this case, location.
  *
  */

if (isset($_POST['submit'])) {
  try {
    require "config.php";
    require "common.php";

    $connection = new PDO($dsn, $username, $password, $options);

    $sql = "SELECT *
    FROM users
    WHERE location = :location";

    $location = $_POST['location'];

    $statement = $connection->prepare($sql);
    $statement->bindParam(':location', $location, PDO::PARAM_STR);
    $statement->execute();

    $result = $statement->fetchAll();
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }
}
?>
<?php require "templates/header.php"; ?>

<?php
if (isset($_POST['submit'])) {
  if ($result && $statement->rowCount() > 0) { ?>
    <h2>検索結果一覧</h2>

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
</tr>
      </thead>
      <tbody>
  <?php foreach ($result as $row) { ?>
    
    <tr>
<td><?php echo escape($row["id"]); ?></td>
<td><?php echo escape($row["firstname"]); ?></td>
<td><?php echo escape($row["lastname"]); ?></td>
<td><?php echo escape($row["email"]); ?></td>
<td><?php echo escape($row["age"]); ?></td>
<td><?php echo escape($row["location"]); ?></td>
<td><?php echo escape($row["date"]); ?> </td>
</tr>

<?php } ?>
      </tbody>
  </table>
  <?php } else { ?>
    > No results found for <?php echo escape($_POST['location']); ?>.
  <?php }
} ?>


<form method="post">
 <h3><label for="location" style="font-size:25px;">チェアセンサー</label>
 <select name='location'style="font-size:25px; display:inline-block; vertical-align:top; margin-bottom: 20px; margin-left: 10px;"><br>
<option value='あり'>あり</option>
<option value='なし'>なし</option><br>
  </select>
  <input type="submit" name="submit" value="検索結果を見る" style="font-size:18px; display:inline-block; vertical-align:top; margin-bottom: 20px; margin-left: 10px;"></h3>
</form>



<a href="index.php" style="font-size:25px; display:inline-block; vertical-align:top; margin-top:20px;">メインページに戻る</a>

<?php require "templates/footer.php"; ?>