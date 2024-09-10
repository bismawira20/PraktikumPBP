<html>

<head>
    <title>Hello World</title>
    <!-- 
        Nama : Bisma Wira Adi Wicaksono
        NIM : 24060122140120
        Tanggal Pengerjaan : 08/09/2024
     -->
</head>

<body>
<?php

function hitung_rata($array) {
    $total = 0;
    for ($i = 0; $i < sizeof($array); $i++) {
        $total += $array[$i];
    }
    return $total / sizeof($array);
}

function print_mhs($array_mhs) {
    echo "<table border='1'>
            <tr>
                <th>Nama</th>
                <th>Nilai 1</th>
                <th>Nilai 2</th>
                <th>Nilai 3</th>
                <th>Rata2</th>
            </tr>";
    
    
    foreach ($array_mhs as $nama => $nilai) {
        $rata2 = hitung_rata($nilai);
        
        $nilaiHtml = '';
        foreach ($nilai as $n) {
            $nilaiHtml .= "
                <td>$n</td>
            ";
        }

        echo "<tr>
        <td>$nama</td>
        
        $nilaiHtml
        <td>$rata2</td>
        </tr>";
    }
    echo '</table>';
}



$array_mhs = array(
    'Abdul' => array(89, 90, 54),
    'Budi' => array(78, 60, 64),
    'Nina' => array(67, 56, 84),
    'Budi' => array(87, 69, 50),
    'Budi' => array(98, 65, 74)
    );
print_mhs($array_mhs);

?>
    <h2>Bisma Wira Adi Wicaksono - 24060122140120</h2>
</body>

</html>