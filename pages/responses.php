<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>

<?= element( 'header' ); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fas fa-reply"></i> Responsive</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Responsive</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-file"></i>
                            </h3>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Middle Initial</th>
                                            <th>Gender</th>
                                            <th>STEM Track</th>
                                            <th>Year Graduated</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<script type="text/javascript">
    setTimeout(function () {
        $( "#alert" ).delay(2500).fadeOut(5000);
    }, );
</script>

<script>
    $(document).ready(function () {
        // Function to initialize the DataTable
        function initializeDataTable() {
            $('#example').DataTable({
                ajax: {
                    url: 'pages/script/responseAjax.php', // Replace with the endpoint URL to fetch data from the database
                    dataSrc: 'data' // Property name in the response object that contains the data array
                },
                columns: [
                    { data: 'no' },
                    { data: 'lname' },
                    { data: 'fname' },
                    { data: 'mname' },
                    { data: 'genderResponse' },
                    { data: 'stem_track' },
                    { data: 'year_grad' },
                ],
                // Customizing the DataTables appearance
                responsive: false, // Enable responsive design
                lengthChange: true, // Disable the ability to change the number of entries shown
                searching: true, // Enable search functionality
                ordering: true, // Enable column sorting
                paging: true, // Enable pagination
                buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example_wrapper');
        }

        // Initialize the DataTable
        initializeDataTable();

        // Function to refresh the DataTable
        function refreshDataTable() {
            $('#example').DataTable().ajax.reload(null, false); // Reload the table without resetting the current page
        }

        // Refresh the DataTable every 5 seconds (adjust the interval as needed)
        setInterval(refreshDataTable, 2000);
    });
</script>

<?= element( 'footer' ); ?>



