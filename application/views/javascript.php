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

<script>
    new WOW().init();
</script>
