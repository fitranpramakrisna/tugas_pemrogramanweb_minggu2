<?php
    //deklarasi array multidimensi
    $dataPemain = [
        ["Cristiano Messi", "180", "Striker"],
        ["Bejo Leonardo","167", "Midfielder"],
        ["Alfa Midi", "190", "Defender"],
    ];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>PROJEK UTS</title>
    <style>
        
        h1 {
           
            text-align: center; 
            margin:30px;
        }

        table {
            box-shadow: 0px 1px 5px rgba(0,0,0,1);
        }
    </style>
  </head>
  
  <body >
  
  <div class="container">
  <table class="table">
  <h1 >TABEL DATA PEMAIN COACH BAMBANG</h1>
  <thead class="thead-dark"">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Tinggi Badan</th>
      <th scope="col">Posisi</th>
    </tr>
  </thead>
  <tbody>  
  
    <?php for ($i = 0; $i<3; $i++) { ?> 
        <tr> <!---dibawah adalah perulangan untuk baris--->
        <th scope="row"><?php echo $i+1 ?></th>
            <?php for ($j=0;$j<3; $j++) { ?>  

            <!---dibawah adalah perulangan untuk kolo--->
            <td><?php echo $dataPemain[$i][$j];?></td>
            <?php }?>
        </tr>
    <?php }?>
    
  </tbody>
</table>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>