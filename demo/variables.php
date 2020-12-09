<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php

    $name = "Avdol";
    $Name = "Bertholdt";
    $Number = 100;

    $numberList = array(267, 235, 465, '123', '<h1>Hello</h1>', 6465);
    print_r($numberList);

    $names = array("first_name" => 'Juan');
    print_r($names);

    echo $names['first_name'];
   ?>

</body>
</html>
