<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matlib Library</title>
</head>
<body>
 

  <form action="index.php" method ='get'>
  <label for = 'color'>Color</label>  
  <input type ='text' name='color' />

  <label for = 'pluralNoun'>PluralNoun</label>  
  <input type ='text' name='pluralNoun' />

  <label for = 'Celebrity'>Celebrity Name</label>  
  <input type ='text' name='celebrity' />

  <button type="submit">Submit</button>
  </form>
  <br>
     <?php
      $color = $_GET['color'] ?? 'Black';
      $pluralNoun = $_GET['pluralNoun'] ?? 'cars';
      $celebrity = $_GET['celebrity'] ?? 'sasa';
       echo "Roses are $color <br>";
       echo "$pluralNoun are blue <br>" ;
       echo "I love $celebrity <br>";
     ?>

</body>
</html>