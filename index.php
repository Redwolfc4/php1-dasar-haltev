<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP dasar 1</title>
</head>

<body>
    <h1>Belajar Php Dasar 1</h1>
    <?php
    // ini satu section php
    /**
     * ini baris komentar 1
     * ini baris komentar 2
     */
    echo "<h2>Hello Semuanya 👋</h2> <br>";
    echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
Nisi ut aliquip ex ea commodo consequat.
Duis aute irure dolor in reprehenderit in voluptate velit esse.
Cillum dolore eu fugiat nulla pariatur.
Excepteur sint occaecat cupidatat non proident.
Sunt in culpa qui officia deserunt mollit anim id est laborum.
Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>";


    //  Section Aritmatika
    echo 10 + 10;
    echo '<br>';
    echo 20 - 10;
    echo '<br>';
    echo 3 * 10;
    echo '<br>';
    echo 10 / 2;
    echo '<br>';
    echo 12 % 5;
    echo '<br>';
    // end section aritmatika

    // string, float, dan  integer
    echo "ini merupakan string";
    echo var_dump("ini merupakan string");
    echo '<br>';
    echo 10.5;
    echo var_dump(10.5);
    echo '<br>';
    echo 10;
    echo var_dump(10);
    echo '<br>';
    // end string, float, dan integer


    //  variabel
    $angka = 10;
    $kata = "ini merupakan kata";
    $decimal = 9.5;
    echo $angka;
    echo '<br>';
    echo $kata;
    echo '<br>';
    echo $decimal;
    echo '<br>';
    // end variable


    // peranan variabel
    $yearOfBirth = 2010;
    $yearNow = date('Y');
    $hasilUmur = $yearNow - $yearOfBirth;
    echo "<p>Tahun Kelahiran Dodi adalah {$yearOfBirth}</p>";
    echo "<p>Tahun sekarang Dodi adalah {$yearNow}</p>";
    echo "<p>Umur Dodi adalah {$hasilUmur} tahun</p>";
    // end peranan variabel

    // overriding variabel (penimpaan data)
    $yearNow = date('Y');
    echo "<p>{$yearNow}</p>";
    $yearNow = 2010; //overrirde(timpa)
    echo "<p>{$yearNow}</p>";
    // end ovberriding variabel


    // add variabel to variabel
    $angka1 = 10;
    $angka1 = $angka1 + 20;
    echo "<p>{$angka1}</p>";
    // end add variabel to variabel


    // operasi singakt penambahan self variabel
    $angka1 = 10;
    $angka1 += 20; //penjumalahan
    echo "<p>{$angka1}</p>";
    $angka1 -= 5; //pengurangan
    echo "<p>{$angka1}</p>";
    $angka1 *= 4; //perkalian
    echo "<p>{$angka1}</p>";
    $angka1 /= 2; //pembagian
    echo "<p>{$angka1}</p>";
    $angka1 %= 3; //modulus
    echo "<p>{$angka1}</p>";
    // end operasi singakt penambahan self variabel

    // contant variable
    define('NAMA', 'Dodi');
    echo NAMA;
    // end contant variable


    // increment dan decrement
    $angka = 10;
    echo "<p>" . $angka++ . "</p>";
    echo "<p>{$angka}</p>";
    $angka = 16;
    echo "<p>" . $angka-- . "</p>";
    echo "<p>{$angka}</p>";

    $angka  = 18;
    echo "<p>" . ++$angka . "</p>";
    $angka  = 30;
    echo "<p>" . --$angka . "</p>";
    // end increment dan decrement


    // concatenation String
    $namaDepan = "Otong";
    $namaBelakang = "Surotong";

    echo "<h3>" . $namaDepan . " " . $namaBelakang . "</h3>";
    // end concatenation String

    // statement if
    $angka = 40;

    if ($angka == 10) {
        echo "<p>{$angka} sama dengan 30</p>";
    } else if ($angka > 30) {
        echo "<p>{$angka} lebih besar dari 30</p>";
    } else {
        echo "<p>{$angka} lebih kecil dari 30</p>";
    }

    // end statement if


    // logika perbandingan
    echo "<h2>" . var_dump(10 == 10) . "</h2>";
    echo "<h2>" . var_dump(10 == 20) . "</h2>";
    echo "<h2>" . var_dump(10 != 20) . "</h2>";
    echo "<h2>" . var_dump(10 != 10) . "</h2>";
    echo "<h2>" . var_dump(10 <= 10) . "</h2>";
    echo "<h2>" . var_dump(10 <= 5) . "</h2>";
    echo "<h2>" . var_dump(10 <= 20) . "</h2>";
    echo "<h2>" . var_dump(10 >= 20) . "</h2>";
    echo "<h2>" . var_dump(10 >= 10) . "</h2>";
    echo "<h2>" . var_dump(10 >= 5) . "</h2>";
    echo "<h2>" . var_dump(10 > 5) . "</h2>";
    echo "<h2>" . var_dump(10 > 20) . "</h2>";
    echo "<h2>" . var_dump(10 < 5) . "</h2>";
    echo "<h2>" . var_dump(10 < 20) . "</h2>";
    // end logika perbandingan


    // gabungkan kondisi && ||
    $angka = 2;
    if ($angka % 5 == 0 && $angka % 3 == 0) {
        echo "<h1>FizzBuzz</h1>";
    } elseif ($angka % 5 == 0 || $angka % 2 == 0) {
        echo "<h1>Fizz</h1>";
    } elseif ($angka % 3 == 0) {
        echo "<h1>Buzz</h1>";
    } else {
        echo "<h1>{$angka}</h1>";
    }

    // end gabungkan kondisi 


    // statement kebalikannya
    $angka1 = 10;
    $angka2 = 20;

    if (!($angka1 == $angka2)) {
        echo "<p>{$angka1} dan {$angka2}</p>";
    } else {
        echo "nilai Default";
    }
    // end statement kebalikan


    // switch case
    $kata = "tidak ada pilihan";
    switch ($kata) {
        case "ON":
            echo "<p>ON</p>";
            break;
        case "OFF":
            echo "<p>OFF</p>";
            break;
        default:
            echo "<p>Default</p>";
            break;
    }
    // end switch case

    // array
    $rakBuku = [
        'Golang Pemprograman',
        "javascript peprograman",
        "PHP pemrograman"
    ];
    $keranjangBuah = array("apel", "jeruk", "mangga", $rakBuku);
    $arrayGab = $keranjangBuah + $rakBuku;

    print_r($keranjangBuah);
    print_r($rakBuku);
    print_r($arrayGab);


    echo "<h2>" . $rakBuku[0] . "</h2>";
    echo "<h2>" . $rakBuku[1] . "</h2>";
    echo "<h2>" . $rakBuku[2] . "</h2>";

    $rakBuku[1] = "Ruby Pemprograman"; //edit buku

    echo "<h2>" . $rakBuku[0] . "</h2>";
    echo "<h2>" . $rakBuku[1] . "</h2>";
    echo "<h2>" . $rakBuku[2] . "</h2>";

    // array_splice($rakBuku, 1, 1); //hapus buku
    // unset($rakBuku[1]);
    array_splice($rakBuku, 1, 2);

    print_r($rakBuku);
    echo "<br>";
    // end of array
    ?>
</body>

</html>