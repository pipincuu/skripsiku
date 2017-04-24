$(document).ready(function() {
    $("#my-table").DataTable();
    
    $('#my-table').DataTable( {
        "language": {
            "lengthMenu": "Menampilkan _MENU_ records",
            "zeroRecords": "Data Tidak Ditemukan!!",
            "info": "Menampilkan entry _RECORD_ dari _RECORDS_",
            "infoEmpty": "Tidak ada records",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "paginate": {
		        "first":      "Pertama",
		        "last":       "Terakhir",
		        "next":       "Selanjutnya",
		        "previous":   "Sebelumnya"
		    }
        }
    } );
    responsive: true;

});