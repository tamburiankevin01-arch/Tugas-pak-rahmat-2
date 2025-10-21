<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Kehadiran Karyawan</title>
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

        .hadir {
            color: green;
            font-weight: bold;
        }

        .izin {
            color: red;
            font-weight: bold;
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
    <h2>Daftar Kehadiran Karyawan</h2>

    <?php
    // Daftar nama karyawan
    $karyawan = ["Andi", "Budi", "Citra", "Dodi", "Eka"];

    echo "<table>
            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>Status Kehadiran</th>
            </tr>";

    // Perulangan for untuk menampilkan data
    for ($i = 0; $i < count($karyawan); $i++) {
        $no = $i + 1;

        // Percabangan menentukan status
        if ($no % 2 == 0) {
            $status = "<span class='hadir'>Hadir</span>";
        } else {
            $status = "<span class='izin'>Izin</span>";
        }

        echo "<tr>
                <td>$no</td>
                <td>{$karyawan[$i]}</td>
                <td>$status</td>
              </tr>";
    }

    echo "</table>";
    ?>


</div>

</body>
</html>