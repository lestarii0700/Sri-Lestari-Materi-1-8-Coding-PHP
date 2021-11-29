
<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Materi Pengulangan Foreach untuk Array(Materi 8)</h1>

    <?php 

    $hewan = ['kelinci','kucing','sapi','domba'];

    for ($i=0; $i < count($hewan) - 1; $i++)
    {
      echo "-----------------";
      echo $hewan[$i];
      echo "----------------- <br>";
    }

      foreach($hewan as $h){
        echo "-----------------";
        echo $h;
        echo "----------------- <br>";
    }
    ?>
  </body>
</html>