<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodi</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Angkatan</th>

        </tr>
        <?php
        $no = 1;
        foreach ($Angkatan as $row) : ?>
            <tr>
                <th><?= $no++ ?></th>
                <th><?= $row['Tahun']; ?></th>

            </tr>

        <?php endforeach ?>

    </table>
</body>

</html>