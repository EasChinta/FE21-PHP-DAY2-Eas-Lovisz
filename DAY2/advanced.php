<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link href="styles1.css" rel="stylesheet">

  <title>Advanced</title>
</head>

<body>
  <?php
  echo '<div class="container">
<ul class="nav justify-content-start menu">
<li class="nav-item">
  <a class="nav-link active animate__animated animate__backInLeft animate__delay-2s	" aria-current="page" href="classwork.php">Classwork</a>
</li>
<li class="nav-item active animate__animated animate__backInDown animate__delay-2s	">
  <a class="nav-link" href="advanced.php">Advanced</a>
</li>
<li class="nav-item active animate__animated animate__backInDown animate__delay-2s	">
  <a class="nav-link" href="exercise6.php">Exercise 6</a>
</li>
</ul>
</div>';
  ?>





  <?php
  function convert($F)
  {
    $C = floor(($F - 32) * 5 / 9);
    echo "<h1>" . $C . " Celcius</h1>";
    return $C;
  }

  


  // if ($weather <= 5)
  //   echo "<h1>Very Cold</h1>";
  // elseif ($weather <= 10)
  //   echo "<h1>Cold</h1>";
  // elseif ($weather <= 15)
  //   echo "<h1>Pleasant</h1>";
  // elseif ($weather <= 20)
  //   echo "<h1>Warm</h1>";
  // elseif ($weather >= 21)
  //   echo "<h1>Hot</h1>";
  // else
  //   echo "<h1>something went wrong!</h1>";

  $weather = convert(35);


  switch ($weather) {
    case $weather <= 5:
         echo "<h1 style='background: blue;'>🥶Very Cold🥶</h1>";
        break;
    case $weather <= 10:
         echo "<h1 style='background: lightblue;'>❄️Cold❄️</h1>";
        break;
    case $weather <= 15:
         echo "<h1 style='background: yellow;'>😌Pleasant😌</h1>";
        break;
    case $weather <= 20:
         echo "<h1 style='background: orange;'>🌡️Warm🌡️</h1>";
        break;
    case $weather >= 21:
         echo "<h1 style='background: red;'>🌞Hot🌞</h1>";
        break;
    default:
        echo  "If you seeing this message, something went wrong :)";
  }

  ?>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>