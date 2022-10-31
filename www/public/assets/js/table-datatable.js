$(function() {
	"use strict";

    // $(document).ready(function() {
    //     $('#selectclient').DataTable();
    //   } );


      $(document).ready(function() {
        var table = $('#selectclienttable').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
            },
            lengthChange: false,
            buttons: [ 'Copier', 'Excel', 'pdf', 'Imprimer']
        } );
     
        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );


});