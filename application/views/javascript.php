<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="<?= base_url('mdb/js/jquery-3.1.1.min.js') ?>"></script>

<script type="text/javascript" src="<?= base_url('mdb/angular/angular.js') ?>"></script>

<!-- Tooltips -->
<script type="text/javascript" src="<?= base_url('mdb/js/tether.min.js') ?>"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= base_url('mdb/js/bootstrap.js') ?>"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url('mdb/js/mdb.js') ?>"></script>

<script type="text/javascript" src="<?= base_url('mdb/js/moment.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('mdb/js/daterangepicker.js') ?>"></script>

<script src="<?= base_url('mdb/js/apps.js') ?>" charset="utf-8"></script>

<script>
    // SideNav init
    $(".button-collapse").sideNav();
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);

    var option = {
        responsive: true,
    };
</script>

<script type="text/javascript">
$('.rotate-btn').on('click', function () {
	var cardId = $(this).attr('data-card');
	$('#' + cardId).toggleClass('flipped');
});

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})

// Material Select Initialization
 $(document).ready(function() {
    $('.mdb-select').material_select();

    var table = $('#datatable').DataTable({
  "dom": '<"toolbar">frtip'
});
$("div.toolbar").html('<input id="date_range" type="text" placeholder="Urutkan berdasarkan tanggal">');
//END of the data table

// Date range script - Start of the sscript
$("#date_range").daterangepicker({
  autoUpdateInput: false,
  locale: {
    "cancelLabel": "Clear",
  }
});

$("#date_range").on('apply.daterangepicker', function(ev, picker) {
  $(this).val(picker.startDate.format('YYYY-MM-DD') + ' to ' + picker.endDate.format('YYYY-MM-DD'));
  table.draw();
});

$("#date_range").on('cancel.daterangepicker', function(ev, picker) {
  $(this).val('');
  table.draw();
});
// Date range script - END of the script

$.fn.dataTableExt.afnFiltering.push(
  function( oSettings, aData, iDataIndex ) {

    var grab_daterange = $("#date_range").val();
    var give_results_daterange = grab_daterange.split(" to ");
    var filterstart = give_results_daterange[0];
    var filterend = give_results_daterange[1];
    var iStartDateCol = 4; //using column 2 in this instance
    var iEndDateCol = 4;
    var tabledatestart = aData[iStartDateCol];
    var tabledateend= aData[iEndDateCol];

    if ( !filterstart && !filterend )
    {
      return true;
    }
    else if ((moment(filterstart).isSame(tabledatestart) || moment(filterstart).isBefore(tabledatestart)) && filterend === "")
    {
      return true;
    }
    else if ((moment(filterstart).isSame(tabledatestart) || moment(filterstart).isAfter(tabledatestart)) && filterstart === "")
    {
      return true;
    }
    else if ((moment(filterstart).isSame(tabledatestart) || moment(filterstart).isBefore(tabledatestart)) && (moment(filterend).isSame(tabledateend) || moment(filterend).isAfter(tabledateend)))
    {
      return true;
    }
    return false;
  }
);
  });
</script>

<script>
    new WOW().init();
</script>
