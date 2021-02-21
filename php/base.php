<?php
        $database = mysqli_connect('localhost', 'root', '', 'portfolio');
        // $database = mysqli_connect('localhost:3306', 'a330435_1', 'kaplur1992', 'a330435_1');
        $database->query("SET NAMES 'utf8'");
        $database->query("SET CHARACTER SET 'utf8'");
        $database->query("SET SESSION collation_connection = 'utf8_general_ci'");
        function get_rewievs($database) {
            $sql = "SELECT * FROM rewievs";
            $result = mysqli_query($database, $sql);
            $rewievs = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $rewievs;
    }

    $rewievs = get_rewievs($database);

    $i = 0;
    foreach ($rewievs as $items):
        $i++;
    endforeach;

    echo $i;
?>

