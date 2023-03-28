<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
    <title>ログイン</title>
</head>

<body>
<style>
  body {
    background-color:#CEF9DC;
  }

  .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 70%;
  }

  
</style>
    <header>
       <h1><nav class="navbar navbar-default" style="text-align:center">六甲の館 No-Lift Chair アプリ</nav></h1>
       <img src="https://rokko-yakata.jp/img/slide3.jpg" class="center">   

    </header>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!-- <a class="navbar-brand" href="index.php">データ登録</a> -->
                </div>
            </div>
        </nav>
    </header>
    <!-- lLOGINogin_act.php は認証処理用のPHPです。 -->


    <form name="form1" action="login_act.php" method="post" style="font-size:25px; display:inline-block; vertical-align:top; margin-top:20px;">
        ログインID <input type="text" name="lid" style="font-size:25px; display:inline-block; vertical-align:top;" /><br>
        パスワード <input type="password" name="lpw" style="font-size:25px; display:inline-block; vertical-align:top;"/><br>
        <input type="submit" value="ログイン"style="font-size:25px; display:inline-block; vertical-align:top; margin-top:20px;" />
    </form>


</body>

</html>
