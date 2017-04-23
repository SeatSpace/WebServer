<?php
    $dbConn = new PDO('mysql:dbname=kkmonlee_seatspace;host=localhost;charset=utf8', 'kkmonlee_insert', 'seatspace');
    
    $dbConn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $id = ".$_GET["id"].";

    $stmt = $dbConn->prepare('SELECT * FROM Floor3 WHERE id = ?');
    $stmt->bind_param('s', $id);

    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " taken: " . $row["taken"]. " date: " . $row["time"]. "<br>";
    }
?>
