<!DOCTYPE html>
<html lang="en" xmlns:v-bind="http://www.w3.org/1999/xhtml">
<head>
  <title>ERROR</title>
</head>

<body>
  <h1>ERROR :</h1>
  
  <?php if ( isset($msg) ) { ?>
  <h2><?= $msg ?></h2>
  <?php } ?>

  <?php if ( isset($msg2) ) { ?>
  <h2><?= $msg2 ?></h2>
  <?php } ?>

  <?php if ( isset($msg3) ) { ?>
  <h2><?= $msg3 ?></h2>
  <?php } ?>

</body>

</html>
