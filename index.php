<?php

 require_once "./hotels.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

    <title>Document</title>
</head>
<body>
    <div class="container">

        <table class="table">
          <thead>
            <tr >
              <th class="col-2">Name</th>
              <th class="col-3">description</th>
              <th class="col-2">parking</th>
              <th class="col-2">vote</th>
              <th class="col-3">distance to center</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($hotels as $hotel): ?>
                
                <tr>

                    <th> <?= $hotel["name"] ?></th>
                    <td><?= $hotel["description"] ?></td>
                    <td><?= $hotel['parking'] ? "Yes" : "No"; ?></td>
                    <td><?= $hotel["vote"] ?></td>
                    <td><?= $hotel["distance_to_center"] . "" . "km" ?></td>

                </tr>
            <?php endforeach;  ?>
            
          </tbody>
        </table>
    </div>
    

   
</body>
</html>