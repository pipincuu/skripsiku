<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="<?= base_url('mdb/js/jquery-3.1.1.min.js') ?>"></script>

<!-- Tooltips -->
<script type="text/javascript" src="<?= base_url('mdb/js/tether.min.js') ?>"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= base_url('mdb/js/bootstrap.js') ?>"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url('mdb/js/mdb.js') ?>"></script>

<script>
    // SideNav init
    $(".button-collapse").sideNav();
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);

    var option = {
        responsive: true,
    };
</script>

<script>
    new WOW().init();
</script>
