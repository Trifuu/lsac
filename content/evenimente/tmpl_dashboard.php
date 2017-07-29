<?php
defined('_IEXEC') or die('Acces restrictionat. Access Denied.');
?>
<div class="container-fluid standard-container container-page">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="input-group div_input">
            <input id='data_inainte' type="text" class="form-control" placeholder="DD.MM.YYYY">
            <span class="input-group-addon" style="padding:0px;">
                <button id='afiseaza_inainte' type="submit" class="btn btn-primary evenimente-afiseaza">Afiseaza</button>
            </span>
        </div>
        <div class="afiseza_evenimente">
            <p style="text-align: center;margin-top: 30px;">Introdu o data.</p>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="input-group div_input">
            <input id='data_dupa' type="text" class="form-control" placeholder="DD.MM.YYYY">
            <span class="input-group-addon" style="padding:0px;">
                <button id='afiseaza_dupa' type="submit" class="btn btn-primary evenimente-afiseaza">Afiseaza</button>
            </span>
        </div>
        <div class="afiseza_evenimente">
            <p style="text-align: center;margin-top: 30px;">Introdu o data.</p>
        </div>
    </div>
</div>