<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP dasar Season 2</title>
</head>

<body>
    <?php

    // array asssociative
    $rak = [
        "pemprograman" => [
            "php" => "belajar php",
            "java" => "belajar java",
            "c++" => "belajar c++"
        ],
        "nama_peminjam" => [
            'ayu' => 'php',
            'budi' => 'java',
            'cici' => 'c++'
        ],
    ];

    print_r($rak);
    echo "<br>";
    print_r($rak['pemprograman']);
    echo "<br>";
    echo $rak['pemprograman']['php'];
    echo "<br>";

    // end array assosiative

    // for loop
    $data = [
        'Golang',
        "Ruby",
        "Python",
        "Javascript"
    ];

    for ($i = 0; $i < count($data); $i++) {
        echo $data[$i];
        echo ', ';
    }
    echo "<br>";
    // end for loop

    // while loop

    $data = [
        [
            'nama' => 'ayu',
            'umur' => 20,
            'MK' => 'java',
            'Kelas' => 'TI'
        ],
        [
            'nama' => 'budi',
            'umur' => 30,
            'MK' => 'javaScript',
            'Kelas' => 'IF'
        ],
        [
            'nama' => 'cici',
            'umur' => 15,
            'MK' => 'PHP',
            'Kelas' => 'EL'
        ],
    ];

    $i = 0;
    $kondisi = true;
    echo '<table border="1" style="border-collapse: collapse;">' .
        '<tr>' .
        '<th>Nama</th>' .
        '<th>Umur</th>' .
        '<th>Mata kuliah</th>' .
        '<th>Kelas</th>' .
        '</tr>';
    while ($kondisi) {
        echo  '<tr>' .
            '<td>' . $data[$i]['nama'] . '</td>' .
            '<td>' . $data[$i]['umur'] . '</td>' .
            '<td>' . $data[$i]['MK'] . '</td>' .
            '<td>' . $data[$i]['Kelas'] . '</td>' .
            '</tr>';
        $i++;
        if ($i == count($data)) {
            $kondisi = false;
        }
    }
    echo '</table>';
    // end while


    // break & continue
    $i = 0;

    while (true) {
        $i++;

        if ($i % 2 == 1) {
            continue;
        }

        echo "ini nilai ke - {$i} <br>";
        if ($i == 10 || $i == 11) {
            break;
        }
    }

    echo "<br>";

    // end break & continue

    // foreach
    $datas = ['Nila', 'Rudi', "Dian"];
    foreach ($datas as $value) {
        echo "ini {$value} <br>";
    }

    $keluarga = [
        [
            'nama' => 'Roni',
            'status' => "KK",
        ],
        [
            'nama' => "Wanti",
            'status' => "I",
        ],
        [
            'nama' => "Bobi",
            'status' => "A",
        ],
        [
            'nama' => "Susanti",
            'status' => "A",
        ],
    ];

    foreach ($keluarga as $key => $anggota) {
        $key++;
        echo "Anggota Ke - {$key} <br>";
        foreach ($anggota as $key => $value) {
            echo "{$key} : {$value} <br>";
        }
    }

    // endforeach

    // function
    function sayHello(?string $nama, ?int $umur)
    {
        if ($nama == null || $umur == null) {
            return "Halo, data belum lengkap nih gan!";
        }

        return $nama . " " . $umur;
    }

    echo sayHello(null, 20);
    echo '<br>';
    // sayHello('cici', 'belajar');
    echo sayHello('Otong Sutong', 15);
    echo '<br>';

    ?>


</body>

</html>