<?php
$project_name='Simple <br> Project'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
</head>
<body>
  <h1>Welcome to <b>{!! $project_name !!}</b></h1>
  <p>Welcome to home of this Project!</p>
  <hr>
  <p><b>Name: </b>{{$name}}</p>
  <p><b>Gender: </b>{{$gender}}</p>
  <?php print_r($colors)?>
  @foreach ($colors as $color)
      <p>{{$color}}</p>
  @endforeach

</body>
</html>