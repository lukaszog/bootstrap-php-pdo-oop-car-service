<?php
error_reporting(0);
include_once 'header.php';
include_once 'config/database.php';
include_once 'class/notification.php';

@$page = $_GET['page'];

$database = new Database(); //wywoluje polaczenie do bazy danych
$db = $database->getConnection(); //zapisuje polaczenie
$notification = new Notification($db);

switch($page)
{
    case 'new':

        include_once 'create_notification.php';
        break;

    default:

        include_once 'list.php';
        break;

}

?>
<script>
    $(document).on('click', '.delete-object', function(){

        var id = $(this).attr('delete-id');
        var q = confirm("Jestes pewien?");

        if (q == true){

            $.post('delete_notification.php', {
                object_id: id
            }, function(data){
                location.reload();
            }).fail(function() {
                alert('Unable to delete.');
            });

        }

        return false;
    });
</script>
<?

include_once 'footer.php';
?>