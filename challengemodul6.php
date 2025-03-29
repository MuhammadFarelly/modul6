<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        .even {
            background-color:rgb(251, 251, 251);
        }
        .odd {
            background-color:rgb(137, 137, 137);
        }
    </style>
</head>
<body>
    <h1>Galeri Hewan</h1>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Jumlah Kaki</th>
            <th>Cari di Google</th>
        </tr>
        <?php
        $data = array(
            array('nama' => 'Angsa', 'kaki' => 2),
            array('nama' => 'Ayam', 'kaki' => 2),
            array('nama' => 'Bebek', 'kaki' => 2),
            array('nama' => 'Domba', 'kaki' => 4),
            array('nama' => 'Kalkun', 'kaki' => 2),
            array('nama' => 'Kambing', 'kaki' => 4),
            array('nama' => 'Kelinci', 'kaki' => 4),
            array('nama' => 'Kerbau', 'kaki' => 4),
            array('nama' => 'Kuda', 'kaki' => 4),
            array('nama' => 'Sapi', 'kaki' => 4)
        );

        usort($data, function($a, $b) {
            return strcmp($a['nama'], $b['nama']);
        });

        $i = 1;
        foreach ($data as $index => $item) {
            $class = ($index % 2 == 0) ? "even" : "odd";
            echo "<tr class='$class'>";
            echo "<td>$i</td>";
            echo "<td>{$item['nama']}</td>";
            echo "<td><img src='img/{$item['nama']}.jpg' width='50' height='50'></td>";
            echo "<td>{$item['kaki']}</td>";
            echo "<td><a href='https://www.google.com/search?tbm=isch&q={$item['nama']}' target='_blank'>Cari</a></td>";
            echo "</tr>";
            $i++;
        }
        ?>

    </table>
</body>
</html>