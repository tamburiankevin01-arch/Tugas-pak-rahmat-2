<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Karyawan</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: #f3f6fb;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: white;
            padding: 25px 35px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            width: 450px;
        }

        h2 {
            text-align: center;
            color: #0078D7;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #0078D7;
            color: white;
        }

        .A { color: green; font-weight: bold; }
        .B { color: blue; font-weight: bold; }
        .C { color: orange; font-weight: bold; }
        .D { color: red; font-weight: bold; }

        .footer {
            text-align: center;
            color: gray;
            font-size: 0.85em;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Daftar Nilai dan Kategori Huruf</h2>

    <?php
    // Data nilai karyawan
    $nilai = [60, 85, 70, 90, 50];

    echo "<table>
            <tr>
                <th>No</th>
                <th>Nilai</th>
                <th>Huruf</th>
                <th>Keterangan</th>
            </tr>";

    // Perulangan menampilkan nilai dan kategori
    for ($i = 0; $i < count($nilai); $i++) {
        $n = $nilai[$i];

        // Percabangan if-else bersarang
        if ($n >= 85) {
            $huruf = "A";
            $ket = "Sangat Baik";
        } elseif ($n >= 70) {
            $huruf = "B";
            $ket = "Baik";
        } elseif ($n >= 60) {
            $huruf = "C";
            $ket = "Cukup";
        } else {
            $huruf = "D";
            $ket = "Kurang";
        }

        echo "<tr>
                <td>" . ($i + 1) . "</td>
                <td>$n</td>
                <td class='$huruf'>$huruf</td>
                <td>$ket</td>
              </tr>";
    }

    echo "</table>";
    ?>

</div>

</body>
</html>