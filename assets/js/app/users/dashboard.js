$(document).ready(function() {
    $('#users').on( 'click', 'tbody td:not(:first-child)', function (e) {
        editor.inline( this, {
            buttons: { label: '&gt;', fn: function () { this.submit(); } }
        } );
    } );
    $('#users').DataTable( {
        data: users,
        columns: [
            { title: "Nume" },
            { title: "Email" },
            { title: "Telefon" },
            { title: "Categorie" }
        ]
    } );
} );