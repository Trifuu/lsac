<?php
defined('_IEXEC') or die('Acces restrictionat. Access Denied.');
?>
<div class="container-fluid standard-container container-page">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <h3>Afișează evenimentele înainte de data:</h3>
        <div class="input-group" style="width:200px;">
            <input id='data_inainte' type="text" class="form-control" placeholder="DD.MM.YYYY">
            <span class="input-group-addon" style="padding:0px;">
                <button id='afiseaza_inainte' type="submit" class="btn btn-primary evenimente-afiseaza">Afiseaza</button>
            </span>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <h3>Afișează evenimentele după data:</h3>
        <div class="input-group" style="width:200px;">
            <input id='data_dupa' type="text" class="form-control" placeholder="DD.MM.YYYY">
            <span class="input-group-addon" style="padding:0px;">
                <button id='afiseaza_dupa' type="submit" class="btn btn-primary evenimente-afiseaza">Afiseaza</button>
            </span>
        </div>
    </div>
</div>