
<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Materi Pengulangan For dan Array(Materi 8)</h1>

    <?php 

    $hewan = ['kelinci','kucing','sapi','domba'];

    for ($i=0; $i < count($hewan); $i++)
    {
      echo "-----------------";
      echo $hewan[$i];
      echo "----------------- <br>";
    }
    ?>
  </body>
</html>