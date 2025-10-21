<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Gaji dan Lembur Karyawan</title>
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
            width: 500px;
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

        .highlight {
            font-weight: bold;
            color: #0078D7;
        }

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
    <h2>Gaji dan Lembur Karyawan</h2>

    <?php
    // Data jam kerja mingguan (array)
    $jamKerja = [40, 35, 50, 45];

    // Tarif
    $tarifNormal = 20000;
    $tarifLembur = 25000;

    echo "<table>
            <tr>
                <th>No</th>
                <th>Jam Kerja</th>
                <th>Jam Lembur</th>
                <th>Gaji Normal (Rp)</th>
                <th>Gaji Lembur (Rp)</th>
                <th>Total Gaji (Rp)</th>
            </tr>";

    // Perulangan menghitung gaji
    for ($i = 0; $i < count($jamKerja); $i++) {
        $jam = $jamKerja[$i];
        $jamLembur = 0;
        $gajiLembur = 0;

        // Jika jam kerja lebih dari 40 → hitung lembur
        if ($jam > 40) {
            $jamLembur = $jam - 40;
            $jamNormal = 40;
        } else {
            $jamNormal = $jam;
        }

        // Hitung gaji normal dan lembur
        $gajiNormal = $jamNormal * $tarifNormal;
        $gajiLembur = $jamLembur * $tarifLembur;
        $totalGaji = $gajiNormal + $gajiLembur;

        echo "<tr>
                <td>" . ($i + 1) . "</td>
                <td>$jam</td>
                <td>$jamLembur</td>
                <td>" . number_format($gajiNormal, 0, ',', '.') . "</td>
                <td>" . number_format($gajiLembur, 0, ',', '.') . "</td>
                <td class='highlight'>" . number_format($totalGaji, 0, ',', '.') . "</td>
              </tr>";
    }

    echo "</table>";
    ?>


</div>

</body>
</html>