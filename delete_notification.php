<?php
if($_POST){

    include_once 'config/database.php';
    include_once 'class/notification.php';

    $database = new Database();
    $db = $database->getConnection();

    $notification = new Notification($db);

    $notification->id_notification = $_POST['object_id'];

     if($notification->delete()){
        echo "Usterka usunieta.";
    }

    else{
        echo "Nie mozna usunac";

    }
}
?>