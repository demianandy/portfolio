<?php
    $database = mysqli_connect('localhost', 'root', '', 'portfolio');
    // $database = mysqli_connect('localhost:3306', 'a330435_1', 'kaplur1992', 'a330435_1');
    // $database->query("SET NAMES 'utf8'");
    // $database->query("SET CHARACTER SET 'utf8'");
    // $database->query("SET SESSION collation_connection = 'utf8_general_ci'");

    function get_articles($database) {
        $sql2 = "SELECT * FROM articles";
        $result2 = mysqli_query($database, $sql2);
        $articles = mysqli_fetch_all($result2, MYSQLI_ASSOC);
        return $articles;
    }

    function get_rewievs($database) {
        $sql3 = "SELECT * FROM rewievs";
        $result3 = mysqli_query($database, $sql3);
        $rewievs = mysqli_fetch_all($result3, MYSQLI_ASSOC);
        return $rewievs;
    }

    $articles = get_articles($database);
    $zaglavie = "Режим создания";

    $rewievs = get_rewievs($database);
    $zaglavie2 = "Режим создания";

    // ====================== НАЖАТИЕ КНОПКИ РЕДАКТИРОВАНИЕ ================================

    if (isset($_GET['red'])) {
        $sql = mysqli_query($database, "SELECT `id`, `article`, `head`, `link` FROM `articles` WHERE `id`={$_GET['red']}");
        $art = mysqli_fetch_array($sql);
        $zaglavie = "Режим редактирования";
    }
    
    if (isset($_GET['red2'])) {
        $sql = mysqli_query($database, "SELECT `id`, `rewiev`, `name` FROM `rewievs` WHERE `id`={$_GET['red2']}");
        $art2 = mysqli_fetch_array($sql);
        $zaglavie2 = "Режим редактирования";
        header('location: administrator#editer');
    }

    // ===================== НАЖАТИЕ КНОПКИ СОЗДАТЬ ==================================

    if (isset($_GET['add'])) {
        $zaglavie = "Режим создания";
    }

    if (isset($_GET['add2'])) {
        $zaglavie2 = "Режим создания";
    }

    // ======================= НАЖАТИЕ КНОПКИ СОХРАНИТЬ =============================

    if (isset($_POST["slogan"])) {
        if (isset($_GET['red'])) {
          $sql = mysqli_query($database, "UPDATE `articles` SET `article` = '{$_POST['words']}',`head` = '{$_POST['slogan']}', `link` = '{$_POST['silka']}' WHERE `id`={$_GET['red']}");
          header('location: '.$_SERVER['HTTP_REFERER']);
          exit;
        } else {
          $sql = mysqli_query($database, "INSERT INTO `articles` (`article`, `head`, `link`) VALUES ('{$_POST['words']}', '{$_POST['slogan']}', '{$_POST['silka']}')");
          header('location: '.$_SERVER['HTTP_REFERER']);
          exit;
        }
    }

    if (isset($_POST["save2"])) {
        if (isset($_GET['red2'])) {
          $sql = mysqli_query($database, "UPDATE `rewievs` SET `rewiev` = '{$_POST['otziv']}',`name` = '{$_POST['name']}' WHERE `id`={$_GET['red2']}");
          header('location: editer.php'.$_SERVER['HTTP_REFERER']);
          exit;
        } else {
          $sql = mysqli_query($database, "INSERT INTO `rewievs` (`rewiev`, `name`) VALUES ('{$_POST['otziv']}', '{$_POST['name']}')");
          header('location: '.$_SERVER['HTTP_REFERER']);
          exit();
        }
    }

    // =========================== НАЖАТИЕ КНОПКИ УДАЛИТЬ ===========================

    if (isset($_GET['del'])) {
        $sql = mysqli_query($database, "DELETE FROM `articles` WHERE `id` = {$_GET['del']}");
        header('location: edit.php'.$_SERVER['HTTP_REFERER']);
        exit;
    }

    if (isset($_GET['del2'])) {
        $sql = mysqli_query($database, "DELETE FROM `rewievs` WHERE `id` = {$_GET['del2']}");
        header('location: '.$_SERVER['HTTP_REFERER']);
        exit;
    }



?>