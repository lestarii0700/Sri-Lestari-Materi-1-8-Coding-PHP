<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; ?> 
  </body>
</html>

<html>
  <head>
    <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

    <?php
    echo "<h1>Dasar PHP : HTML dan PHP(materi 4)</h1>";
    echo  "Halo <br>";
    echo  "Member";
    ?>
semuanya!
  
  </body>
</html>

<html>
  <head>
    <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

    <?php
    echo "<h1>Dasar PHP : Komentar dan Variabel(materi 4)</h1>";
    echo  "Halo <br>";
    echo  "Member";
    ?>
semuanya!
  
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   
   <?php
    $nama  = "Lestari Coding";
    $nama2 = 'PHP Pemula - Tipe Data Dan String(Materi 4)';

     echo "<h1>$nama2</h1>";
    echo "Selamat datang di Lestari koding"; 
   ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Lestari Coding";
    $nama2 = 'PHP Pemula - Tipe Data Integer dan float(Materi 4)';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di $nama <br>"; 

    $angka  =1000;
    $angka2 =100.123;

    echo $angka + $angka2;
   ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Lestari Coding";
    $nama2 = ' PHP Pemula - Metode Matematika(Materi 5)';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2.64;

    echo "angka hari ini adalah ". min($angka3, $angka, $angka2)
   ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Lestari Coding";
    $nama2 = ' PHP Pemula - Operator Matematika(Materi 5)';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2;

    $angka *= $angka2;

    echo $angka;
   ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

   <?php
    $nama  = "Lestari Coding";
    $nama2 = ' PHP Pemula: Metode Penanganan String(Materi 5)';

    echo "<h1>$nama2</h1>";
    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2.64;

    echo "angka hari ini adalah ". min($angka3, $angka, $angka2)
   ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

  <?php
  $nama = "Belajar Dasar Dasar PHP";
  $_123 = " PHP Pemula: Metode String(Materi 5)";

  echo "<h1>$_123</h1>";
  echo "Halo ". $nama."<br>";
  echo "Member";
  ?>
  </body><html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>

  <html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
    <h1> PHP Pemula - Perkenalan Array(Materi 6)</h1>

  <?php
   
    $kotak  =array('kelinci', 'kucing', 'kuda');
    $nama   =['Lestari', 'Widiya', 'sri'];

    
    print_r(  $kotak);
    echo $nama[0]

  ?>
  </body>
</html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Associative Array(Materi 6) </h1>

    <?php 

   
    $data = ['nama' => 'LESTARI',
             'umur'=>21,
             'sifat'=>'HUMORIS'];

    $data ['nama'] = " SRI LESTARI";
    echo"Nama adalah".$data ['nama'];
      
      
    ?>
  </body>
</html>

<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
    <h1> PHP Pemula -Metode Array(Materi 6)</h1>

  <?php
    $angka  =[5, 10, 2, 1, 6];
    $kotak  =array('kelinci', 'kucing', 'kuda');
    $nama   =['LESTARI', 'Widiya', 'Sri'];

    sort($angka);
    print_r( $angka);
     

  ?>
  </body>
</html>

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

<html>
  <head>
    <meta charset="utf=8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Materi Pengulangan For Looping(Materi 8)</h1>

    <?php 

    for ($i=0; $i<5; $i++)
    {
      echo "-----------------";
      echo "LESTARI Belajar Koding $i";
      echo "----------------- <br>";
    }
    ?>
  </body>
</html>

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

<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>

      <h1> Materi Pengulangan While dan Do While(Materi 8)</h1>

    <?php 
   $hewan = ['kelinci','kucing','sapi','domba','burung'];
   
   $i = 5;

   do{
     echo '------';
     echo $hewan[$i]. "<br>";
     $i++;
   }while( $i < count($hewan));
    
  ?>
  </body>
</html>