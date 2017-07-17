<?php
defined('_IEXEC') or die('Acces restrictionat. Access Denied.');
?>
<div class="container-fluid standard-container container-page" style="margin-top:-17px;">
    <div class="row" style="margin-top: 44px">    
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
                    <tr class="add_line">
                        <td></td><td></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><button id="buton_add" type="button" class="btn btn-success btn-xs"><i class='fa fa-times' aria-hidden="true"></i> Salveaza</button></td>
                    </tr>
                    <?php
                    foreach ($users as $row) {
                        echo "<tr>";
                        echo '<td><input class="checkbox_users" type="checkbox" data-id="'. htmlspecialchars($row["id"], ENT_QUOTES) .'"></td>';
                        echo "<td data-order='" . $row["id"] . "'> " . htmlspecialchars($row["id"], ENT_QUOTES) . "</td>";
                        echo "<td class=\"modifica\">" . htmlspecialchars($row["nume"], ENT_QUOTES) . "</td>";
                        echo "<td class=\"modifica\">" . htmlspecialchars($row["tel"], ENT_QUOTES) . "</td>";
                        echo "<td class=\"modifica\">" . htmlspecialchars($row["email"], ENT_QUOTES) . "</td>";
                        echo "<td class=\"modifica\">" . htmlspecialchars($row["categorie"], ENT_QUOTES) . "</td>";
                        echo "<td><a data-id='" . htmlspecialchars($row["id"], ENT_QUOTES) . "' data-email='" . htmlspecialchars($row["nume"], ENT_QUOTES) . "' class='btn btn-xs btn-danger del-user'><i class='fa fa-times' aria-hidden=\"true\"></i> Sterge</a> ";
                        echo "<a class='btn btn-xs btn-primary modifica-user'><i class='fa fa-pencil' aria-hidden=\"true\"></i> Modifica</a>";
                        echo "</td></tr>";
                    }
                    ?>                    
                </tbody>
            </table>
        </div>
    </div>
</div>