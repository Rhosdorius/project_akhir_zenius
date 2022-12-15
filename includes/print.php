<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include "connection.php"; ?>
    <div class="w-100">
        <table class="table table-hover">
            <thead class="text-center">
                <th>No</th>
                <th>Plane</th>
                <th>From</th>
                <th>To</th>
                <th>Price</th>
                <th>Time Departure</th>
                <th>Time Arrival</th>
            </thead>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM flights JOIN planes ON flights.planeId = planes.id JOIN departures ON flights.departureId = departures.id JOIN destinationes ON flights.destinationId = destinationes.id");
            $nomor = 1;
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <TBody class="text-center">
                    <TR>
                        <th><?php echo $nomor++; ?></th>
                        <th><?php echo $row['code'].' - '.  $row['type'];?></th>
                        <th><?php echo $row['regionDeparture']; ?></th>
                        <th><?php echo $row['regionDestination']; ?></th>
                        <th><?php echo $row['priceText']; ?></th>
                        <th><?php echo $row['timeDeparture']; ?></th>
                        <th><?php echo $row['timeArrived']; ?></th>
                    </TR>
                </TBody>
            <?php
            };
            ?>
        </table>
    </div>
</body>
</html>