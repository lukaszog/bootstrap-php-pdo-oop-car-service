<?php


if($_GET['id'] or $_POST['send'] == 2)
{

    $edit=true;
    $button = "Edytuj";

    $notification->id_notification  = $_GET['id'];
    $notification->readOne();
    $send=2;


}else{
    $edit=false;
    $button =  "Dodaj";
    $send = 1;
}


if(($edit == false) && ($_POST['send'] == 1)){


    $notification->name = $_POST['name'];
    $notification->price = $_POST['price'];
    $notification->lastname = $_POST['lastname'];
    $notification->description = $_POST['description'];

    if($notification->create()){
        echo "<div class=\"alert alert-success alert-dismissable\">";
        echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
        echo "Usterka została dodana";
        echo "</div>";
    }

    else{
        echo "<div class=\"alert alert-danger alert-dismissable\">";
        echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
        echo "Błąd podczas dodawania usterki do systemu";
        echo "</div>";
    }
}

if($_POST['send'] == 2 && $edit)
{
    $notification->name = $_POST['name'];
    $notification->price = $_POST['price'];
    $notification->lastname = $_POST['lastname'];
    $notification->description = $_POST['description'];


    if($notification->update()){
        echo "<div class=\"alert alert-success alert-dismissable\">";
        echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
        echo "Usterka została poprawiona";
        echo "</div>";
    }

    else{
        echo "<div class=\"alert alert-danger alert-dismissable\">";
        echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
        echo "Błąd podczas poprawy usterki";
        echo "</div>";
    }
}
?>

<!-- HTML formularz -->
<form action='?page=new&id=<?=$_GET['id'];?>' method='post'>

    <table class='table table-hover table-responsive table-bordered'>

        <tr>
            <td>Imię</td>
            <td><input type='text' value="<? if($edit){ echo $notification->name; }?>" name='name' class='form-control' /></td>
        </tr>

        <tr>
            <td>Nazwisko </td>
            <td><input type='text' value="<? if($edit){ echo $notification->lastname; }?>" name='lastname' class='form-control' /></td>
        </tr>

        <tr>
            <td>Cena</td>
            <td><input type='text' value="<? if($edit){ echo $notification->price; }?>" name='price' class='form-control' /></td>
        </tr>

        <tr>
            <td>Opis</td>
            <td><textarea name='description' class='form-control'><? if($edit){ echo $notification->description; }?> </textarea></td>
        </tr>
        <input type="hidden" name="send" value="<?=$send;?>"/>
        <tr>
            <td></td>
            <td>
                <button type="submit" class="btn btn-primary"><?=$button;?></button>
            </td>
        </tr>

    </table>
</form>