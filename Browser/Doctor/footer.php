<?php
/**
 * Created by PhpStorm.
 * User: Dushyant
 * Date: 2015-07-25
 * Time: 11:48 PM
 */
?>
<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<!-- jquery ui-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/flick/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../Local/Resources/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../../Local/Resources/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="../../Local/Resources/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<!--DataTable Button support Js-->
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.0.3/js/buttons.bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.0.3/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.0.3/js/buttons.print.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../../Local/dist/js/sb-admin-2.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        /*Data table  dashboard.php*/
        $('#dataTable').DataTable({
            responsive: true,
            lengthChange: true
        });
        /*printDatatable*/
      var printTable = $('#printDataTable').DataTable({
            responsive: true,
            lengthChange: false,
            /*Button style and config*/
             buttons: [
                 {
                 extend: 'pdf',
                 text: '<i class="fa fa-file-pdf-o"></i>',
                 className: 'btn btn-circle btn-info'
                 },
                 {
                 extend: 'print',
                 text: '<i class="fa  fa-print"></i>',
                 className: 'btn btn-circle btn-info'
                 }
             ]
        });
        printTable.buttons().container()
            .appendTo( '#pnlList .col-sm-6:eq(0)' );
    });
</script>
</body>

</html>
