<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            @include('layouts.url')


            <!-- Nav Item - Pages Collapse Menu -->
            

            <!-- Nav Item - Utilities Collapse Menu -->
            

            <!-- Divider -->
            <
            <!-- Nav Item - Charts -->
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                 

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        
                        <!-- Nav Item - Messages -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add New Job</h1>

                    <div class="container">
                       
                    
                    <div class="row ">
                      <div class="col-lg-7 mx-auto">
                        <div class="card mt-2 mx-auto p-4 bg-light">
                            <div class="card-body bg-light">
                       
                            <div class = "container">
                                <form action="{{ route('insjob') }}" method="POST" id="contact-form" role="form">
                
                                    @csrf                
                            
                
                            <div class="controls">
                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_need">Customer Name*</label>
                                            <select id="form_need" name="Cus_name" class="form-control" required="required" data-error="Please specify your need.">
                                                <option value="" selected disabled>--Please Select --</option>
                                                @foreach ($custom as $customer)
                                                <option value="{{ $customer->Cus_name }}">{{ $customer->Cus_name }}</option>
                                                @endforeach

                                            </select>
                       
                                        </div>
                                    </div>
                                          
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Draft No *</label>
                                            <input id="form_name" value="{{$draftString}}" disabled type="text" name="draft" class="form-control" placeholder="" value="" required="required" data-error="Firstname is required.">
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Bayan No *</label>
                                            <input id="form_name" type="text" name="bayan_no" class="form-control" required="required" data-error="Firstname is required.">
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Weghit of Goods *</label>
                                            <input id="form_name" type="text" name="whight" class="form-control"  required="required" data-error="Firstname is required.">
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Name of Port *</label>
                                            <input id="form_name" type="text" name="port_name" class="form-control"  required="required" data-error="Firstname is required.">
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_need">Type Of Bayan * *</label>
                                            <select id="form_need" name="bayan_type" class="form-control" required="required" data-error="Please specify your need.">
                                                <option value="" selected disabled>--Please Select --</option>
                                                <option value="Import" >Import</option>
                                                <option value="Export">Export</option>
                                            </select>
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Date of Print *</label>
                                            <input id="form_name" type="date" name="bayan_date" class="form-control" placeholder="." required="required" data-error="Firstname is required.">
                                            
                                        </div>
                                    </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_name">Bayan Status *</label>
                                                <select id="form_need" name="bayan_status" class="form-control" required="required" data-error="Please specify your need.">
                                                    <option value="" selected disabled>--Please Select --</option>
                                                    <option value="new">New</option>
                                                    <option value="Inspection">Inspection</option>
                                                    <option value="Finshed">Finshed</option>
    
                                                </select>
                           
                                            </div>
                                        </div>
                                    
                                              
                                  

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">COO *</label>
                                            <input id="form_name" type="text" name="bayan_coo" class="form-control" placeholder="." required="required" data-error="Firstname is required.">
                                            
                                        </div>
                                    </div>

                                    

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Arival Date *</label>
                                            <input id="form_name" type="date" name="bayan_arival" class="form-control" placeholder="." required="required" data-error="Firstname is required.">
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">D/O Status *</label>
                                            <input id="form_name" type="text" name="bayan_do" class="form-control" placeholder="." required="required" data-error="Firstname is required.">
                                            
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Free Days Expiry *</label>
                                            <input id="form_lastname" type="date" name="bayan_expire" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">B-L No *</label>
                                            <input id="form_lastname" type="text" name="bayan_bl" class="form-control" placeholder="Please enter B-l" required="required" data-error="Lastname is required.">
                                                                            </div>
                                    </div>
                                   
                                </div>

                                
                                <div class="row" id="inputContainer">
                                    
                                 
                                </div>
                                <div class="row">
                                  
                                    <div class="col-md-12">
                                        <button type="button" class="btn btn-success btn-send  pt-2 btn-block" onclick="addInputField()">Add Container </button>

                                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block">

                                    
                                </div>
                          
                                </div>
                                @include('sweetalert::alert')

                
                        </div>
                         </form>
                        </div>
                            </div>
                
                
                    </div>
                        <!-- /.8 -->
                
                    </div>
                    <!-- /.row-->
                
                </div>
                </div>
                



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script type="text/javascript">
        let inputCount = 0; // Initial input count

        function addInputField() {
            inputCount++; // Increment the input count
            const inputContainer = document.getElementById('inputContainer');
            const newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.placeholder = 'Container No ' + inputCount;
            newInput.className = 'row  form-group  form-control  '; // Add the 'form-control' class
            newInput.name = 'con_no[]';
            inputContainer.appendChild(newInput);
            
           
        }
    </script>
</body>

</html>