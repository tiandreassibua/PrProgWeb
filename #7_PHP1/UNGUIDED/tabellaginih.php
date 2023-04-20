<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel lagi nih</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        table,
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px 20px;
        }

        table {
            margin: 50px auto;
        }

        tfoot tr th:nth-child(odd) {
            text-align: left;
        }
    </style>
</head>

<body>
    <?php
    $karyawan[0]['nik'] = '16E001';
    $karyawan[0]['nama'] = 'Danny Sebastian';
    $karyawan[0]['jenis_kelamin'] = 'L';
    $karyawan[0]['alamat'] = 'Yogyakarta';
    $karyawan[0]['hobi'] = array('Belajar', 'Bermain', "Berlari");
    $karyawan[0]['gaji'] = "1300000";
    $karyawan[1]['nik'] = '20E002';
    $karyawan[1]['nama'] = 'Agata Filiana';
    $karyawan[1]['jenis_kelamin'] = 'P';
    $karyawan[1]['alamat'] = 'Sleman';
    $karyawan[1]['hobi'] = array('Belajar', 'Bekerja');
    $karyawan[1]['gaji'] = "1200000";

    $karyawan[2]['nik'] = '20E003';
    $karyawan[2]['nama'] = 'Maria Nila A';
    $karyawan[2]['jenis_kelamin'] = 'P';
    $karyawan[2]['alamat'] = 'Desa Pelosok';
    $karyawan[2]['hobi'] = array('Bekerja', 'Bercocok tanam');
    $karyawan[2]['gaji'] = "1300000";
    $karyawan[3]['nik'] = '20E004';
    $karyawan[3]['nama'] = 'Rizky';
    $karyawan[3]['jenis_kelamin'] = 'L';
    $karyawan[3]['alamat'] = 'Banyuwangi';
    $karyawan[3]['hobi'] = array('Bekerja');
    $karyawan[3]['gaji'] = "1700000";
    ?>

    <table>
        <thead>
            <tr>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Hobi</th>
                <th>Gaji</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < 4; $i++) {
            ?>
                <tr>
                    <td><?= $karyawan[$i]["nik"] ?></td>
                    <td><?= $karyawan[$i]["nama"] ?></td>
                    <td><?= $karyawan[$i]["jenis_kelamin"] == "L" ? "Laki-laki" : "Perempuan"; ?></td>
                    <td><?= $karyawan[$i]["alamat"] ?></td>
                    <td>
                        <ul>
                            <?php
                            $j = 0;
                            $hobi = $karyawan[$i]["hobi"];
                            while ($j < count($hobi)) {
                                echo "<li>" . $hobi[$j] . "</li>";
                                $j++;
                            }
                            ?>
                        </ul>
                    </td>
                    <td>Rp<?= number_format((int)$karyawan[$i]["gaji"]) ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="5">Rata-rata</th>
                <th>
                    Rp<?= number_format(
                            ((int)$karyawan[0]["gaji"] +
                                (int)$karyawan[1]["gaji"] +
                                (int)$karyawan[2]["gaji"] +
                                (int)$karyawan[3]["gaji"]) / 4
                        ); ?>
                </th>
            </tr>
            <tr>
                <th colspan="5">Max</th>
                <th>
                    Rp<?= number_format(
                            max(
                                (int)$karyawan[0]["gaji"],
                                (int)$karyawan[1]["gaji"],
                                (int)$karyawan[2]["gaji"],
                                (int)$karyawan[3]["gaji"],
                            )
                        ); ?>
                </th>
            </tr>
            <tr>
                <th colspan="5">Min</th>
                <th>
                    Rp<?= number_format(
                            min(
                                (int)$karyawan[0]["gaji"],
                                (int)$karyawan[1]["gaji"],
                                (int)$karyawan[2]["gaji"],
                                (int)$karyawan[3]["gaji"],
                            )
                        );  ?>
                </th>
            </tr>
        </tfoot>
    </table>
</body>

</html>