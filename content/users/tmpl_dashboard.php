<?php
defined('_IEXEC') or die('Acces restrictionat. Access Denied.');

?>
<div class="container-fluid standard-container container-page">
    <table id="users" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
    </table>
</div>
<script> var users=<?php echo get_users(true);?>;</script>



<!--
<thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Categorie</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($users as $row){
                    echo '<tr><td>'.$row["nume"].'</td>';
                    echo '<td>'.$row["email"].'</td>';
                    echo '<td>'.$row["tel"].'</td>';
                    echo '<td>'.$row["categorie"].'</td></tr>';
                }
            ?>
        </tbody>-->