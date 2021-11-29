
<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Materi Pengulangan Foreach untuk Array Asosiatif(Materi 8)</h1>

    <?php 

   
    $data = ['nama' => 'LESTARI',
             'umur'=>21,
             'sifat'=>'HUMORIS'];

      foreach($data as $key => $value){
        echo $value ."<br>"; 
      }
      
    ?>
  </body>
</html>