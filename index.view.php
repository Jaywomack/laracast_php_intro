<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    header{
      background: grey;
      padding: 2em;
      text-align: center;
    }
    ul, li{
      list-style-type: none;
    }
  </style>
</head>
<body>
  <header>
    <?php foreach($person as $key => $feature):?>
      <li><strong><?=$key;?></strong> <?= $feature;?></li>
    <?php endforeach; ?>
</header>



</body>
</html>