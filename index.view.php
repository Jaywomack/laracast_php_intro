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
  <h1>Task for the day</h1>

  <ul>
      <?php foreach ($task1 as $heading => $value): ?>
        <li>
          <strong><?= ucfirst($heading) ?>:  <?= $value ?></strong>
        </li>
      <?php endforeach; ?>
  </ul>

        <h2>Task inputted manually</h2>
  <ul>
        <li>
          <strong>Name: <?= $task1['title'] ?></strong>
        </li>
        <li>
          <strong>Due Date: <?= $task1['due'] ?></strong>
        </li>
        <li>
          <strong>Assigned To: <?= $task1['assigned_to'] ?></strong>
        </li>
        <li>
          <strong>Completed: <?= $task1['completed']
            ? 'Complete'
            : 'Incomplete' ?></strong>
        </li>
  </ul>


</body>
</html>