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
<!-- List out the names of the names array -->
    <h2>Family members:</h2>
    <ul>
      <?php foreach ($names as $name) {
        echo "<li>$name</li>";
      } ?>
    </ul>

<!-- Create a list of the keys and values in the person associative array -->
      <ul>
      <?php foreach ($person as $x => $x_value) {
        echo "<li><strong>$x: </strong>$x_value</li>";
      } ?>
      </ul>
<!-- Create a list of the keys and values in the task associative array -->
      <ul>
        <?php foreach ($task as $t => $t_value) {
          if ($t == 'completed') {
            echo "<li><strong>$t: </strong>&#10003;</li>";
          } else {
            echo "<li><strong>$t: </strong>$t_value</li>";
          }
        } ?>
      </ul>

</body>
</html>
