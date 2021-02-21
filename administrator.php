<?   if(($_POST['named']='Дмитрий') and ($_POST['passworded']='12345')){

    include ('php/databaseedit.php');
    include ('php/edit.php');
    // header('location: administrator.php]);

} else {
    echo "Для входа на эту страницу необходимо ввести имя/пароль.";
}
?>