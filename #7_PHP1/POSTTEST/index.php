<?php
# Tidak diperkenankan untuk mengubah array
$data = [
    [
        "nama" => "Haniif",
        "nim" => "712001",
        "matkul" => ["RPLBO" => "A", "DesEks" => "B", "PDAP" => "D"],
    ],
    [
        "nama" => "Christina",
        "nim" => "712002",
        "matkul" => ["PBL" => "D", "DEA" => "B"],
    ],
    [
        "nama" => "Richard",
        "nim" => "712003",
        "matkul" => ["ProgDesk" => "B"],
    ],
    [
        "nama" => "Kiki",
        "nim" => "712004",
        "matkul" => ["RPLBO" => "A", "PDAP" => "B", "ProgHyb" => "C"],
    ],
];
# Tidak diperkenankan untuk mengubah array
$predikat = [
    "A" => "Sangat Baik",
    "B" => "Baik",
    "C" => "Cukup",
    "D" => "Kurang",
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT PHP 1</title>
    <style>
        td {
            padding: 5px;
        }

        table, tr, td , th {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <!-- Isi kode Anda di sini -->
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Matkul</th>
                <th>Nilai</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $mhs) : ?>
                <?php $baris = count($mhs['matkul']); ?>
                <tr>
                    <td rowspan="<?= $baris ?>"><?= $mhs['nama'] ?></td>
                    <td rowspan="<?= $baris ?>"><?= $mhs['nim'] ?></td>
                    <?php $awal = true; ?>
                    <?php foreach ($mhs['matkul'] as $namaMatkul => $nilaiMatkul) : ?>
                        <?php if ($awal) : ?>
                            <td><?= $namaMatkul ?></td>
                            <td><?= $nilaiMatkul ?></td>
                            <td><?= $predikat[$nilaiMatkul] ?></td>
                            <?php $awal = false; ?>
                        <?php else : ?>
                <tr>
                    <td><?= $namaMatkul ?></td>
                    <td><?= $nilaiMatkul ?></td>
                    <td><?= $predikat[$nilaiMatkul] ?></td>
                </tr>
            <?php endif ?>
        <?php endforeach ?>
        </tr>
    <?php endforeach ?>
        </tbody>
    
    <tfoot>
        <?php foreach ($predikat as $k => $v) : ?>
            <tr>
                <td colspan="3">Jumlah Nilai <?= $k ?></td>
                <td colspan="2">
                    <?php
                    $jumlah = 0;
                    foreach ($data as $mhs) {
                        foreach ($mhs['matkul'] as $matkul => $nilai) {
                            if ($nilai == $k) {
                                $jumlah++;
                            }
                        }
                    }
                    echo $jumlah;
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tfoot>


    </table>
</body>

</html>