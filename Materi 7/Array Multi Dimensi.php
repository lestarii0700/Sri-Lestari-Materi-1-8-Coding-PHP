
<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <h1> Array Multi Dimensi(Materi 7) </h1>
  <?php
    $data = array(
      array("karyawan", "30", "rajin banget"),
      array("co", "30", "rajin"),
      array("manager", "30", "males banget"),
    );

    print_r($data);

    $data[2][0] ="perusahaan";
    echo $data[2][0];


  ?>
  </body>
</html> 
