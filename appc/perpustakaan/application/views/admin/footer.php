<!-- Footer -->

</div>

</div>

<!-- Vendor JS -->
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/jquery/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/tether/js/tether.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/detectmobilebrowser/detectmobilebrowser.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/jscrollpane/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/jscrollpane/mwheelIntent.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/jscrollpane/jquery.jscrollpane.min.js">
</script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/waves/waves.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/flot/jquery.flot.stack.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/flot/jquery.flot.time.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/switchery/dist/switchery.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/DataTables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/DataTables/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/DataTables/Responsive/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/DataTables/Responsive/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/DataTables/Buttons/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/DataTables/Buttons/js/buttons.bootstrap4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/DataTables/JSZip/jszip.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/DataTables/pdfmake/build/pdfmake.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/DataTables/pdfmake/build/vfs_fonts.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/DataTables/Buttons/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/DataTables/Buttons/js/buttons.print.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/DataTables/Buttons/js/buttons.colVis.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/TinyColor/tinycolor.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/sparkline/jquery.sparkline.min.js">
</script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/raphael/raphael.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/morris/morris.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/clockpicker/dist/jquery-clockpicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js">
</script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/vendor/dropify/dist/js/dropify.min.js"></script>

<!-- Neptune JS -->
<script type="text/javascript" src="<?php echo base_url('public'); ?>/js/forms-upload.js"></script>


<script>
    $(document).ready(function() {
        // updating the view with notifications using ajax
        function load_unseen_notification(view = '') {
            $.ajax({
                url: "<?php echo base_url('peminjaman/peminjaman_notif'); ?>",
                method: "POST",
                data: {
                    view: view
                },
                dataType: "json",
                success: function(data) {
                    $('.count').html(data.notification);
                    if (data.unseen_notification > 0) {
                        // badge
                        $('.count').html(data.unseen_notification);
                        // bunyi
                        // var snd = new Audio('<?php echo base_url('public/sound/notif2.mp3'); ?>');
                        // snd.play();
                    } else {
                        $('.count').html("");
                    }
                }
            });
        }
        load_unseen_notification();

        function load_pasien_mendaftar(view = '') {
            $.ajax({
                url: "<?php echo base_url('pengembalian/pengembalian_notif'); ?>",
                method: "POST",
                data: {
                    view: view
                },
                dataType: "json",
                success: function(data) {
                    $('.count_kembali').html(data.notification);
                    if (data.unseen_notification > 0) {
                        // badge
                        $('.count_kembali').html(data.unseen_notification);
                    } else {
                        $('.count_kembali').html("");
                    }
                }
            });
        }
        load_pasien_mendaftar();

        // load new notifications
        $(document).on('click', '.badge-danger', function() {
            $('.badge-danger').html('');
            load_unseen_notification('yes');
        });

        setInterval(function() {
            load_unseen_notification();;
            load_pasien_mendaftar();
        }, 5000);
    });
</script>

<!-- Neptune JS -->
<script type="text/javascript" src="<?php echo base_url(); ?>public/css/select2.min.js">
</script>
<script>
    $(function() {
        'use strict'

        $('.select2').select2({

            searchInputPlaceholder: 'Search options'
        });

    });
</script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/js/tables-datatable.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/js/demo.js"></script>
<script type="text/javascript" src="<?php echo base_url('public'); ?>/js/index3.js"></script>


</body>

</html>