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
    <ul>
      <?php foreach ($tasks as $task): ?>
        <li>
        <?php if ($task->completed): ?>
          <strike><?= $task->description ?></strike>
        <?php else: ?>
          <?= $task->description ?>
        <?php endif; ?>
        </li>
      <?php endforeach; ?>
    
    </ul>
</body>
</html>
