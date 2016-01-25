<?php



$stmt = $notification->readAll();





    echo "<table class='table table-hover table-responsive table-bordered'>";
    echo "<tr>";
    echo "<th>Imię</th>";
    echo "<th>Nazwisko</th>";
    echo "<th>Opis</th>";
    echo "<th>Cena</th>";
    echo "<th>Data utworzenia</th>";
    echo "<th>Data modyfikacji</th>";
    echo "<th>Akcja</th>";
    echo "</tr>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

        extract($row);

        echo "<tr>";
        echo "<td>{$name}</td>";
        echo "<td>{$lastname}</td>";
        echo "<td>{$description}</td>";
        echo "<td>{$price}</td>";
        echo "<td>{$created}</td>";
        echo "<td>{$modified}</td>";
        echo "<td>";
        echo "<a href='?page=new&id={$id_notification}' class='btn btn-default left-margin'>Edytuj</a>";
        echo "<a delete-id='{$id_notification}' class='btn btn-default delete-object'>Usuń</a>";
        echo "</td>";

        echo "</tr>";

    }

    echo "</table>";

