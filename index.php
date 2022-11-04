<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Taxi Drivers</title>
    <style>
    table,
    th,
    td {
        border: 2px solid #bbb;
        padding: 10px;
    }

    td {
        height: 40px;
        width: 80px;
        text-align: center;
        vertical-align: middle;
    }
    </style>
</head>

<body>
    <table>
        <caption>
            <h1>
                Drivers Table
            </h1>
            <caption>
            <tr>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Driver Name</th>
                <th>Date</th>
            </tr>
            <?php
      $file = fopen("./file.txt", "r") or die("Error while opening the file..!!");
      $data = fread($file, filesize("./file.txt"));
      $json = json_decode($data, true);
      foreach ($json as $object) {
      ?>
        <tr>
            <td><?= $object['lat'] ?></td>
            <td><?= $object['lon'] ?></td>
            <td><?= $object['driver_name'] ?></td>
            <td><?= $object['date'] ?></td>
        </tr>
        <?php
      }
  ?>
    </table>
</body>

</html>