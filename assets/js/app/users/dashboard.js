$(document).ready(function() {
   
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