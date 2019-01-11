<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <style media="screen">
    form{
      font-size: 20px;
      background-color: black;
      color: white;
      width: 330px;
      height: 200px;
      padding-left: 30px;
      margin-left: 37%;
      margin-top: 15%;
    }
    .pad{
      margin-left: 72px;
    }
button{
  background-color: blue;
  border-color: blue;
}
button:hover {
  background-color: #4CAF50;
  border-color: #4CAF50;
  color: white;}
  </style>

<img src="loo.png" alt="" style="width: 400px;">
    <div class="kotak">
    <form class="title" action="login.php" method="post">

      <p>
        <center> <h1>Login</h1></p></center>
      <p>
      <label  for="nis"> nis </label>
      <input class="pad" type="text" name="nis" class="form-input">
    </p>
    <p>
      <label for="password">  password </label>
      &emsp;<input type="password" name="password" class="form-input">
    </p>
    <p>
 <button class="btn" type="submit" name="btnSimpan" style="margin-left: 100px;">Simpan</button>
    </p>

    </form>
    <center>
    <?php

    if (isset($_GET["error"])) {
      if ($_GET["error"] == "wrong") {
        echo '<h3>nis dan password salah!</h3>';
      }
    } ?>
</center>
  </div>

  </body>
</html>
