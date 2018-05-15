<html>
<head>
    <title>SQL SELECT Statement</title>
</head>
<body>
<table align="center" border="1">
<?php
    $cnx = new mysqli('localhost', 'jonard', 'Bolante.9171996', 'JonardDBZ');
    if ($cnx->connect_error)
        die('Connection failed: ' . $cnx->connect_error);
    $query = 'SELECT * FROM book';
    $cursor = $cnx->query($query);
    echo '<tr>';
    echo '<td>' . 'States' .'</td><td>'. 'Cities' .'</td><td>'. 'Weather' .'</td><td>'. 'Temperature' .'</td><td>'. 'Humidity' .'</td><td>'. 'Pressure' .'</td>';
    echo '</tr>';
    while ($row = $cursor->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['state'] . '</td><td>' . $row['city'] . '</td><td align="right">' . $row['weather'] .'<td>'. $row['temperature'] .'<td>'. $row['humidity'] .'<td>'. $row['pressure'] .'</td>';
        echo '</tr>';
    }
    $cnx->close();
?>
</table>
</body>
</html>
