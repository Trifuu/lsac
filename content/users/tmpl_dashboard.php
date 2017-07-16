<?php
defined('_IEXEC') or die('Acces restrictionat. Access Denied.');
?>
<div class="container-fluid standard-container container-page">
    <div class="row" style="margin-top: 40px">
        <div class="col-lg-12 ">
            <table id="users_table" class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Nume</th>
                        <th>Telefon</th>
                        <th>Email</th>
                        <th>Categorie</th>
                        <th>Actiuni</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $row) {
                        echo "<tr>";
                        echo '<td><input class="checkbox_users" type="checkbox" data-id="'. htmlspecialchars($row["id"], ENT_QUOTES) .'"></td>';
                        echo "<td data-order='" . $row["id"] . "'> " . htmlspecialchars($row["id"], ENT_QUOTES) . "</td>";
                        echo "<td>" . htmlspecialchars($row["nume"], ENT_QUOTES) . "</td>";
                        echo "<td>" . htmlspecialchars($row["tel"], ENT_QUOTES) . "</td>";
                        echo "<td>" . htmlspecialchars($row["email"], ENT_QUOTES) . "</td>";
                        echo "<td>" . htmlspecialchars($row["categorie"], ENT_QUOTES) . "</td>";
                        echo "<td><a data-id='" . htmlspecialchars($row["id"], ENT_QUOTES) . "' data-email='" . htmlspecialchars($row["nume"], ENT_QUOTES) . "' data-href='" . getUrl("users", "delete", false, ["id" => $row["id"]]) . "' class='btn btn-xs btn-danger link-del-user'><i class='fa fa-times' aria-hidden=\"true\"></i> Sterge</a> ";
                        echo "<a href='" . getUrl("users", "edit", false, ["id" => $row["id"]]) . "' class='btn btn-xs btn-primary'><i class='fa fa-pencil' aria-hidden=\"true\"></i> Modifica</a>";
                        echo "</td></tr>";
                    }
                    ?>                    
                </tbody>
            </table>
        </div>
    </div>
</div>