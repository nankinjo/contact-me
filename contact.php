<?php
  session_start();
  $mode = 'input';
  if (isset($_POST['back']) && $_POST['back']) {
    // handle back action
  } else if (isset($_POST['confirm']) && $_POST['confirm']) {
    $_SESSION['name']    = $_POST['name'];
    $_SESSION['email']   = $_POST['email'];
    $_SESSION['message'] = $_POST['message'];
    $mode = 'confirm';
  } else if (isset($_POST['send']) && $_POST['send']) {
    $mode = 'send';
  } else {
    $_SESSION['name']    = "";
    $_SESSION['email']   = "";
    $_SESSION['message'] = "";
  }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Contact Me!!</title>
  <meta name="description" content="Daigo's Portfolio">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php if ($mode == 'input') { ?>
    <form id="contact" action="./contact.php" method="post">
      <div class="container">
        <div class="head">
          <h1>ご意見フォーム</h1>
	</div>
	<input type="text" placeholder="お名前" name="name"    value="<?php echo $_SESSION['name'] ?>" required><br>
          <input type="email" placeholder="Email" name="email" value="<?php echo $_SESSION['email'] ?>" required><br>
          <textarea placeholder="ご意見" name="message" required><?php echo $_SESSION['message'] ?></textarea><br>
          <input class="bottun" type="submit" name="confirm" value="確定">
      </div>
    </form>
  <?php } else if ($mode == 'confirm') { ?>
    <form action="./contact.php" method="post">
      <div class="container">
        <?php echo htmlspecialchars($_SESSION['name'], ENT_QUOTES, 'UTF-8'); ?><br>
        <?php echo htmlspecialchars($_SESSION['email'], ENT_QUOTES, 'UTF-8'); ?><br>
	<?php echo htmlspecialchars($_SESSION['message'], ENT_QUOTES, 'UTF-8'); ?><br>
        <input class="bottun" type="submit" name="back" value="戻る"><br>
        <input class="bottun" type="submit" name="send" value="送信">
      </div>
    </form>
  <?php } ?>
</body>
</html>
