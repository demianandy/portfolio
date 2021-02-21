<?php
    $database = mysqli_connect('localhost', 'root', '', 'portfolio');
    // $database = mysqli_connect('localhost:3306', 'a356626_portfel', 'kaplur1992', 'a356626_portfel');
    // $database->query("SET NAMES 'utf8'");
    // $database->query("SET CHARACTER SET 'utf8'");
    // $database->query("SET SESSION collation_connection = 'utf8_general_ci'");
    
    function get_rewievs($database) {
        $sql = "SELECT * FROM rewievs";
        $result = mysqli_query($database, $sql);
        $rewievs = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $rewievs;
    }

    function get_articles($database) {
        $sql2 = "SELECT * FROM articles";
        $result2 = mysqli_query($database, $sql2);
        $articles = mysqli_fetch_all($result2, MYSQLI_ASSOC);
        return $articles;
    }

    $rewievs = get_rewievs($database);
    $i = 0;
    foreach ($rewievs as $items):
        $i++;
    endforeach;

    if (isset($_POST["message"])) {
        $sql = mysqli_query($database, "INSERT INTO `rewievs` (`name`, `rewiev`) VALUES ('{$_POST['nom']}', '{$_POST['message']}')");
        header('location: rewievs.php'.$_SERVER['HTTP_REFERER']);
        exit();
    }

      if(!empty($_POST['avtor']) and !empty($_POST['email']) 
      and !empty($_POST['call'])){
         $name = trim(strip_tags($_POST['avtor']));
         $email = trim(strip_tags($_POST['email']));
         $message = trim(strip_tags($_POST['call']));

         $headers  = "Content-type: text/html; charset=utf-8 \r\n";
         $headers .= "From: =?utf-8?b?".base64_encode('Вам письмо')."?= <iAfrica.ru>\r\n";
     
         mail('demianandy@gmail.com', 'Письмо с сайта Портфолио', 
         'Вам написал: '.$name.'<br />Почта отправителя: '.$email.'<br />
         Сообщение: '.$message, $headers); 
         header('location: footer.php'.$_SERVER['HTTP_REFERER']);
        exit;

      } 
       
?>