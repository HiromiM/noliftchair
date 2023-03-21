<?php

/**
  * Use an HTML form to create a new entry in the
  * users table.
  *
  */


if (isset($_POST['submit'])) {
  require "config.php";
  require "common.php";

  try {
    $connection = new PDO($dsn, $username, $password, $options);

    $new_user = array(
      "firstname" => $_POST['firstname'],
      "lastname"  => $_POST['lastname'],
      "email"     => $_POST['email'],
      "age"       => $_POST['age'],
      "location"  => $_POST['location']
    );

    $sql = sprintf(
"INSERT INTO %s (%s) values (%s)",
"users",
implode(", ", array_keys($new_user)),
":" . implode(", :", array_keys($new_user))
    );

    $statement = $connection->prepare($sql);
    $statement->execute($new_user);
  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }

}
?>

<?php require "templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
  ★ <?php echo $_POST['firstname']; ?> 様が登録されました！
<?php } ?>

<style>
  .title-1 {
    font-size: 30px;
    font-weight: bold;
  }

  .box-1, .box-2, .box-3, .box-4, {
    margin-bottom: 20px;
  }
</style>

<div class="title-1">
<p>利用者を登録する<p>
</div>

<div class="box-1">
<form method="post">
  <label for="firstname" style=" font-size:25px; font-weight:bold;
  display:inline-block; vertical-align:top;">利用者</label>
  <input type="text" name="firstname" id="firstname"
   style="font-size:25px; display:inline-block; vertical-align:top; margin-bottom: 20px; margin-left: 110px;"><br>
   </div>


  <label for="lastname" style=" font-size:25px; font-weight:bold; ">車椅子タイプ</label>
  <form method='POST' action='/test'>
  <select name='lastname'style="font-size:25px; display:inline-block; vertical-align:top; margin-bottom: 20px; margin-left: 35px;">

<option value='普通'>普通</option>
<option value='ティルト'>ティルト</option>
<option value='リクライニング'>リクライニング</option>
<option value='ソファ・リクライニング'>ソファ・リクライニング</option>
</select></br>
</div>

  
<div class="box-2">
  <label for="email" style=" font-size:25px; font-weight:bold;">メーカー</label>

  <input type="text" name="email" id="email"
   style="font-size:25px; display:inline-block; vertical-align:top; margin-bottom: 20px; margin-left: 85px;"><br>
   </div>


   <div class="box-3">
<form method="post">
  <label for="age" style="font-size:25px; font-weight:bold;">フロア</label>

   <select name='age'style="font-size:25px; display:inline-block; vertical-align:top; margin-bottom: 20px; margin-left: 110px;">
  <option value='1'>1F</option>
  <option value='2'>2F</option>
  <option value='3'>3F</option>
  </select></br>
  </div>


  <div class="box-4">
<form method="post">
  <label for="location" style=" font-size:25px; font-weight:bold; ">チェアセンサー</label>

  <select name='location'style="font-size:25px; display:inline-block; vertical-align:top; margin-bottom: 20px; margin-left: 10px;"><br>
  <option value='あり'>あり</option>
  <option value='なし'>なし</option><br>
  </select></br>
</div>


  <input type="submit" name="submit" value="登録する"style="font-size:25px; display:inline-block; vertical-align:top; margin-top:20px;"><br>
</form></br>


<a href="index.php" style="font-size:25px; display:inline-block; vertical-align:top; margin-top:20px;">メインページに戻る</a>

<?php require "templates/footer.php"; ?>

