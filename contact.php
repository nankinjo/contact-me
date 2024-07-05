<?php
  $mode = 'input';
  if( isset($_POST=['back']) && ($_POST=['back'] ){
  } else if( isset($_POST=['confirm']) && ($_POST=['confirm']){
    $mode = 'confirm';
  } else if( isset($_POST=['send']) && ($_POST=['send']{
    $mode = 'send';
  }
?>  

<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="utf-8">
    <meta name=”viewport” content=”width=device-width,initial-scale=1″>
    <title>contact me!!</title>
    <meta name="description" content="daigo's portforio">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">

  </head>

<body>
  <?php if( $mode == 'input' ){ ?>
   <form action="./contact.php" method="post">
     <div class="head">
       <h1>ご意見フォーム<h1>
     </div>
     <input type="text" placeholder="お名前" name="name" required><br>
     <input type="email" placeholder="Email" name="email" required><br>
     <textarea placeholder="ご意見" name="message" required></textarea><br>
     <input type="submit" name="confirm" value="確定">
   </form>

  <?php } else if( $mode == 'confirm' ){ ?>
   <form action="./contact.php" method="post">
     <?php echo $_POST[name] ?><br>
     <?php echo $_POST[email] ?><br>
     <?php echo $_POST[message] ?><br>
     <input type="submit" name="back" value="戻る">
     <input type="submit" name="confirm" value="送信">
　 </form>
  <?php } else { ?>
  <?php } ?>
</body>

