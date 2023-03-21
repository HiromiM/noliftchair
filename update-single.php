<link rel="stylesheet" href="css/style.css" />
<style>
  body {
    background-color:#CEF9DC;
  }
</style> 
<?php
/**
  * Use an HTML form to edit an entry in the
  * users table.
  *
  */
require "config.php";
require "common.php";
if (isset($_POST['submit'])) {
  try {
    $connection = new PDO($dsn, $username, $password, $options);
    $user =[
      "id"        => $_POST['id'],
      "firstname" => $_POST['firstname'],
      "lastname"  => $_POST['lastname'],
      "email"     => $_POST['email'],
      "age"       => $_POST['age'],
      "location"  => $_POST['location'],
      "date"      => $_POST['date']
    ];

    $sql = "UPDATE users
            SET id = :id,
              firstname = :firstname,
              lastname = :lastname,
              email = :email,
              age = :age,
              location = :location,
              date = :date
            WHERE id = :id";

  $statement = $connection->prepare($sql);
  $statement->execute($user);
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
}

if (isset($_GET['id'])) {
  try {
    $connection = new PDO($dsn, $username, $password, $options);
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = :id";
    $statement = $connection->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $user = $statement->fetch(PDO::FETCH_ASSOC);
  } catch(PDOException $error) {
      echo $sql . "<br>" . $error->getMessage();
  }
} else {
    echo "確認してください！";
    exit;
}
?>

<?php require "templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) : ?>
  <?php echo escape($_POST['firstname']); ?> 様の更新が完了しました！
<?php endif; ?>

<h2>登録変更</h2>

<form method="post">
    <?php foreach ($user as $key => $value) : ?>
      <label for="<?php echo $key; ?>"><?php echo ucfirst($key); ?></label>

    <input type="text" name="<?php echo $key; ?>" id="<?php echo $key; ?>" value="<?php echo escape($value); ?>" <?php echo ($key === 'id' ? 'readonly' : null); ?>>
    <?php endforeach; ?><br>
    <input type="submit" name="submit" value="更新する">
</form>
<a href="update.php" style="font-size:20px; display:inline-block; vertical-align:top; margin-top:20px;">更新ページに戻る</a><br>
<a href="index.php" style="font-size:20px; display:inline-block; vertical-align:top; margin-top:20px;">メインページに戻る</a>

<?php require "templates/footer.php"; ?>