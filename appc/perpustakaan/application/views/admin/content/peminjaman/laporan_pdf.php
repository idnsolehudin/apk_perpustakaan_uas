<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="<?php echo base_url(); ?>public/assets/img/brand/favicon.png" type="image/png">
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 5px;
            padding-bottom: 5px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>

    <table id="customers">
        <tr>
            <th style="width: 1px;">#</th>
            <th>Jenis Barang</th>
            <th>Harga Sewa</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
        </tr>
        <?php $i = 1;
        foreach ($inventaris as $key) { ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $key['jenis_barang'] ?></td>
                <td><?= getRupiah($key['harga_sewa']) ?></td>
                <td> <?= $key['jumlah'] ?></td>
                <td><?= $key['keterangan'] ?></td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>