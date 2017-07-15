<?php
defined('_IEXEC') or die('Acces restrictionat. Access Denied.');

?>
<div class="container-fluid standard-container container-page">
    <table id="users" class="display" width="100%">
        <thead>
            <tr>
                <th>Nume</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Categorie</th>
            </tr>
        </thead>
    </table>
</div>
<script> var users=<?php echo get_users(true);?>;</script>