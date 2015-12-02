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
<script>
    /*
    * Data table jquery Reference to location.php */
    $(document).ready(function() {
    /*Student Data table  locationList.php*/
       var studentTable = $('#dataTableSchool').DataTable({
           responsive: true,
           lengthChange: true,
           /*Button style and config*/
          /* buttons: [
               {
                   extend: 'excel',
                   text: '<i class="fa fa-file-excel-o"></i>',
                   className: 'btn btn-circle btn-info'
               },
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
           ]*/
        });
        /*Senior Data table   locationList.php*/
        var seniorTable = $('#dataTableSenior').DataTable({
            responsive: true,
            lengthChange: true,
            /*Button style and config*/
           /* buttons: [
                {
                    extend: 'excel',
                    text: '<i class="fa fa-file-excel-o"></i>',
                    className: 'btn btn-circle btn-info'
                },
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
            ]*/
        });
        //student patient patientList.php
        $('#dataTableStdPatient').DataTable({
            responsive: true,
            lengthChange: true,
        });
        //senior patient patientList.php
        $('#dataTableSerPatient').DataTable({
            responsive: true,
            lengthChange: true,
        });

        /*User data table @ userManager.php*/
        $('#dataTableUserList').DataTable({
            responsive: true,
            lengthChange: true,
        });

        /*Added functionality to Data tables*/
        /* export report button to Student list data table Reference to location.php */
       /* studentTable.buttons().container()
        .appendTo( '#pnlSchool .col-sm-6:eq(0)' );*/
        /*
        *export report buttons to Senior table Reference to location.php*/
        /*seniorTable.buttons().container()
            .appendTo('#pnlSenior .col-sm-6:eq(0)');*/
    });


    /*
     * session date input increment generator
     * @ editLocation.php, addNewLocation.php*/
    $("#btnAddSession").click(function () {
        $("#container").append($(".newSession").html());
    });

    /*Auto complete @registerNewPatient.php & @editPatient.php for students*/
    $(document).ready(function(){
        $("#txtStdLocation").autocomplete({
            source:('../../Local/Classes/getAutocompleteSchools.php'),
            minLength:1,
        });
    });


    /*Auto complete @registerNewPatient.php & @editPatient.php for seniors*/
    $(document).ready(function(){
        $("#txtSerLocation").autocomplete({
            source:('../../Local/Classes/getAutocompleteSeniors.php'),
            minLength:1,
        });
    });

    /*Date picker @registerNewPatient.php & @editPatient.php for both*/
    $(function() {
       var datePicker =  $(".txtBirthDate" ).datepicker(
            {
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd',
                //can not be able to select future date
                maxDate: new Date()
            });
    });


</script>
<!--Javascript-->

</body>

</html>
