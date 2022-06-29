<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom styles for this template-->
    <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/sb-admin-2.min.css">
    <link rel="stylesheet" href="css/inmost.css">
    <link rel="stylesheet" type="text/css" href="css/datatables.css">
    <script type="text/javascript" charset="utf8" src="js/datatables.js"></script>

</head>

<body id="page-top" >
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <x-sidebar/>   
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column min-vh-100">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <x-header/> 
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Job Orderand Process Module Management Systems</h1>
                    </div>
                    <!-- Data Table -->
                    <div class="row">
                        <div class="col-9">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Planning Job Details</h6>
                                    <!-- <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form>
                                        <div class="form-group row ">
                                            <label for="inputjoborderno" class="col-sm-2 col-form-label">Job Order No</label>
                                            <div class="col-sm-5">
                                            <input type="text" class="form-control" id="inputjoborderno" placeholder="Job Order No">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSapNo" class="col-sm-2 col-form-label">SAP No</label>
                                            <div class="col-sm-5">
                                            <input type="text" class="form-control" id="inputSapNo" placeholder="SAP No">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPicName" class="col-sm-2 col-form-label">PIC Name</label>
                                            <div class="col-sm-5">
                                            <input type="text" class="form-control" id="inputPicName" placeholder="PIC Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputStation" class="col-sm-2 col-form-label">Station</label>
                                            <div class="col-sm-5">
                                            <input type="text" class="form-control" id="inputStation" placeholder="Station">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPlanningDate" class="col-sm-2 col-form-label">Planning Date</label>
                                            <div class="col-sm-5">
                                            <input type="Date" class="form-control" id="inputPlanningDate" placeholder="Planning Date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPlanningTime" class="col-sm-2 col-form-label">Planning Time</label>
                                            <div class="col-sm-5">
                                            <input type="time" class="form-control" id="inputPlanningTime" placeholder="Planning Time">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExecutionDate" class="col-sm-2 col-form-label">Execution Date</label>
                                            <div class="col-sm-5">
                                            <input type="Date" class="form-control" id="inputExecutionDate" placeholder="Execution Date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExecutionTime" class="col-sm-2 col-form-label">Execution Time</label>
                                            <div class="col-sm-5">
                                            <input type="time" class="form-control" id="inputExecutionTime" placeholder="Execution Time">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputRemark" class="col-sm-2 col-form-label">Remark</label>
                                            <div class="col-sm-5">
                                            <textarea class="form-control" id="inputRemark" placeholder="Remark"></textarea>
                                            </div>
                                        </div>

                                        <!-- submit button -->
                                        <div class="form-group row text-center">
                                            <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                            </div>
                                        </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <x-footer/>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Datatable Pagination -->
    <script>
    $(document).ready(function () {
        $('#example').DataTable({
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, 'All'],
            ],
        });
    });
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    
</body>

</html>