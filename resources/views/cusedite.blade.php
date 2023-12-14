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
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('welcome')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
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


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" style="background-color:coral">
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
                    <h1 class="h3 mb-4 text-gray-800">Edit Customers</h1>

                    <div class="container">
                       
                    
                    <div class="row ">
                      <div class="col-lg-7 mx-auto">
                        <div class="card mt-2 mx-auto p-4 bg-light">
                            <div class="card-body bg-light">
                         @foreach ($customer as $item)

                    <form action=" {{route('Cusupdate', ['id' => $item->id] ) }}" method="POST" id="contact-form" role="form">
                                        @endforeach
    
                                        @csrf  
                
                            <div class = "container">
                               
                            
                            <div class="controls">
                
                                <div class="row">
                                    
                                               
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Customer Name *</label>
                                            @foreach($customer as $item)
                                            <input id="form_name" value="{{$item->Cus_name}}"  type="text" name="cusname" class="form-control" placeholder="" value="" required="required" data-error="Firstname is required.">
                                            @endforeach

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Customer Email *</label>
                                            @foreach($customer as $item)
                                            <input id="form_name" value="{{$item->Cus_email}}"  type="text" name="cusemail" class="form-control" placeholder="" value="" required="required" data-error="Firstname is required.">
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Customer No*</label>
                                            @foreach($customer as $item)
                                            <input id="form_name" value="{{$item->Cus_tel}}"  type="text" name="csutel" class="form-control" placeholder="" value="" required="required" data-error="Firstname is required.">
                                            @endforeach

                                        </div>
                                    </div>


                                </div>

                                
                                    
                                 
                                </div>
                                <div class="row">
                                  
                                    <div class="col-md-12">

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

        
    <!-- Bootstrap core JavaScript-->
    <script src="{{$cssfile}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{$cssfile}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/{{$cssfile}}vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{$cssfile}}/js/sb-admin-2.min.js"></script>
    <script type="{{$cssfile}}/text/javascript">
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