
<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
    <h1> Associative Array lanjutan(Materi 7) </h1>
  <?php
    $data = array("nama" =>"LESTARI",
                  "umur" =>21,
                  "status" =>"Mahasiswa UWG Malang"
    );

     $data2 = array("Suami" =>"belum ada",
                  "Laptop" =>"p"
    );
    print_r( array_merge($data, $data2));

  ?>
  </body>
</html> 
