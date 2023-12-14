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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/invoice.css" rel="stylesheet" >

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

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - Messages -->
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="/img/undraw_profile.svg">
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
                 {{-- <a href="javascript:;" onclick="exportToXLSX()" class="btn btn-sm btn-white m-b-10 p-l-5"><i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> Print</a> --}}

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Invoice Page</h1>
<div class="invoicebody" id="invoicebody">
    <div class="container">
        <div class="col-md-12">
           <div class="invoice">
              <!-- begin invoice-company -->
              <div class="invoice-company text-inverse f-w-600">
                 <span class="pull-right hidden-print">
                 </span>
              </div>
              <!-- end invoice-company -->
              <!-- begin invoice-header -->                <div class="container-fluid" id="printableArea">

              <div class="invoice-header">
                 <div class="invoice-from">
                    <small>Description</small>
                    <address class="m-t-5 m-b-5">
                        @foreach($job as $jobs)
                       <strong class="text-inverse"> Declaration No:{{$jobs->bayan_no}}</strong><br>
                       Port Name:{{$jobs->port_name }}<br>
                    Declaratiob Type:  {{$jobs->bayan_type}}<br>
                      B-L No:  {{$jobs->bayan_type}}<br>
                    </address>
                 </div>
                 <div class="invoice-to">
                    <small>to</small>
                    <address class="m-t-5 m-b-5">
                       <strong class="text-inverse">Customer Name:  {{$jobs->Cus_name}}</strong><br>

                       @endforeach
                       
                     
                      No of Container: {{$cont}}<br>
                     
                    </address>
                 </div>
                 <div class="invoice-date">
                    <small>Invoice / {{date('M')}}</small>
                    <div class="date text-inverse m-t-5">{{date('Y/M/D')}}</div>
                    <div class="invoice-detail">
                       #0000123DSS<br>
                       Services Product
                    </div>
                 </div>
              </div>
              <!-- end invoice-header -->
              <!-- begin invoice-content -->
              <div class="invoice-content">
                 <!-- begin table-responsive -->
                 <div class="table-responsive">
                    <table class="table table-invoice">
                       <thead>
                          <tr>
                             <th> DESCRIPTION</th>
                             <th class="text-center" width="10%">Quan</th>
                             <th class="text-center" width="10%">Price</th>
                             <th class="text-right" width="20%">TOTAL</th>
                          </tr>
                       </thead>
                       <tbody>
                        
                        @foreach ($pay as $payes)
                            
                        <tr>
                             <td>
                                <span class="text-inverse">Port Chrages </span><br>
                             </td>
                             <td class="text-center">{{$payes->port_qu}}</td>
                             <td class="text-center">SR{{$payes->port_ch}}</td>
                             <td class="text-right">SR {{$payes->port_ch*$payes->port_qu}}</td>
                          </tr>


                          <tr>
                            <td>
                               <span class="text-inverse">Terminal  Chrages </span><br>
                            </td>
                            <td class="text-center">{{$payes->ter_qu}}</td>
                            <td class="text-center">SR{{$payes->ter_ch}}</td>
                            <td class="text-right">SR {{$payes->ter_qu*$payes->ter_ch}}</td>
                         </tr>


                         <tr>
                            <td>
                               <span class="text-inverse">Transportation </span><br>
                            </td>
                            <td class="text-center">{{$payes->trans_qu}}</td>
                            <td class="text-center">SR{{$payes->trans_ch}}</td>
                            <td class="text-right">SR {{$payes->trans_ch*$payes->trans_qu}}</td>
                         </tr>

                         <tr>
                            <td>
                               <span class="text-inverse">D/O  Chrages </span><br>
                            </td>
                            <td class="text-center">{{$payes->do_qu}}</td>
                            <td class="text-center">SR{{$payes->do_ch}}</td>
                            <td class="text-right">SR {{$payes->do_qu*$payes->do_ch}}</td>
                         </tr>

                         <tr>
                            <td>
                               <span class="text-inverse">Extention Chrages </span><br>
                            </td>
                            <td class="text-center">{{$payes->exten_qu}}</td>
                            <td class="text-center">SR{{$payes->exten_ch}}</td>
                            <td class="text-right">SR {{$payes->exten_qu*$payes->exten_ch}}</td>
                         </tr>

                         <tr>
                            <td>
                               <span class="text-inverse">Inspection Chrages </span><br>
                            </td>
                            <td class="text-center">{{$payes->duty_qu}}</td>
                            <td class="text-center">SR{{$payes->duty_ch}}</td>
                            <td class="text-right">SR {{$payes->duty_ch*$payes->duty_qu}}</td>
                         </tr>

                         <tr>
                            <td>
                               <span class="text-inverse">Detention Chrages </span><br>
                            </td>
                            <td class="text-center">{{$payes->detention_qu}}</td>
                            <td class="text-center">SR{{$payes->detention_ch}}</td>
                            <td class="text-right">SR {{$payes->detention_ch*$payes->detention_qu}}</td>
                         </tr>

                         <tr>
                            <td>
                               <span class="text-inverse">Bad Storage Chrages </span><br>
                            </td>
                            <td class="text-center">{{$payes->bad_qu}}</td>
                            <td class="text-center">SR{{$payes->bad_ch}}</td>
                            <td class="text-right">SR {{$payes->bad_qu*$payes->bad_ch}}</td>
                         </tr>

                         <tr>
                            <td>
                               <span class="text-inverse">Other Chrages </span><br>
                            </td>
                            <td class="text-center">{{$payes->oth_qu}}</td>
                            <td class="text-center">SR{{$payes->oth_ch}}</td>
                            <td class="text-right">SR {{$payes->oth_ch*$payes->oth_qu}}</td>
                         </tr>


                                                  @endforeach

                       </tbody>
                    </table>
                 </div>
                 <!-- end table-responsive -->
                 <!-- begin invoice-price -->
                 <div class="invoice-price">
                    <div class="invoice-price-left">
                       <div class="invoice-price-row">
                          <div class="sub-price">
                             <small>SUBTOTAL</small>
                             @foreach ($pay as $payes)

                             <span class="text-inverse">SR {{$payes->total }}</span>
                            </div>
                          <div class="sub-price">
                             <i class="fa fa-plus text-muted"></i>
                          </div>
                          <div class="sub-price">
                             <small>VAT (15%)</small>
                             <span class="text-inverse">{{$payes->total * 0.15}}</span>
                            </div>
                       </div>
                    </div>
                    <div class="invoice-price-right">
                       <small>TOTAL</small> <span class="f-w-600">{{$payes->total * 0.15+$payes->total}}</span>
                    </div>
                 </div>
                 @endforeach

                 <!-- end invoice-price -->
              </div>
              <!-- end invoice-content -->
              <!-- begin invoice-note -->
              
              <!-- end invoice-note -->
              <!-- begin invoice-footer -->
            
              <!-- end invoice-footer -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.3/jspdf.umd.min.js"></script>


<style>
    .invoicebody{
    margin-top:20px;
    background:#fafafa;
}

.invoice {
    background: #fff;
    padding: 20px
}

.invoice-company {
    font-size: 20px
}

.invoice-header {
    margin: 0 -20px;
    background: #f0f3f4;
    padding: 20px
}

.invoice-date,
.invoice-from,
.invoice-to {
    display: table-cell;
    width: 1%
}

.invoice-from,
.invoice-to {
    padding-right: 20px
}

.invoice-date .date,
.invoice-from strong,
.invoice-to strong {
    font-size: 16px;
    font-weight: 600
}

.invoice-date {
    text-align: right;
    padding-left: 20px
}

.invoice-price {
    background: #f0f3f4;
    display: table;
    width: 100%
}

.invoice-price .invoice-price-left,
.invoice-price .invoice-price-right {
    display: table-cell;
    padding: 20px;
    font-size: 20px;
    font-weight: 600;
    width: 75%;
    position: relative;
    vertical-align: middle
}

.invoice-price .invoice-price-left .sub-price {
    display: table-cell;
    vertical-align: middle;
    padding: 0 20px
}

.invoice-price small {
    font-size: 12px;
    font-weight: 400;
    display: block
}

.invoice-price .invoice-price-row {
    display: table;
    float: left
}

.invoice-price .invoice-price-right {
    width: 25%;
    background: #2d353c;
    color: #fff;
    font-size: 28px;
    text-align: right;
    vertical-align: bottom;
    font-weight: 300
}

.invoice-price .invoice-price-right small {
    display: block;
    opacity: .6;
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 12px
}

.invoice-footer {
    border-top: 1px solid #ddd;
    padding-top: 10px;
    font-size: 10px
}

.invoice-note {
    color: #999;
    margin-top: 80px;
    font-size: 85%
}

.invoice>div:not(.invoice-footer) {
    margin-bottom: 20px
}

.btn.btn-white, .btn.btn-white.disabled, .btn.btn-white.disabled:focus, .btn.btn-white.disabled:hover, .btn.btn-white[disabled], .btn.btn-white[disabled]:focus, .btn.btn-white[disabled]:hover {
    color: #2d353c;
    background: #fff;
    border-color: #d9dfe3;
}
</style>    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

<script>
  function exportToXLSX() {
            var data = [
                ['DESCRIPTION', 'Quan','Price','TOTAL'],
                ['John Doe', 30],
                ['Jane Doe', 25],
                ['Richard Roe', 40]
            ];

            var ws = XLSX.utils.aoa_to_sheet(data);
            var wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');
            var wbout = XLSX.write(wb, { bookType: 'xlsx', type: 'binary' });

            function s2ab(s) {
                var buf = new ArrayBuffer(s.length);
                var view = new Uint8Array(buf);
                for (var i = 0; i < s.length; i++) view[i] = s.charCodeAt(i) & 0xFF;
                return buf;
            }

            var blob = new Blob([s2ab(wbout)], { type: 'application/octet-stream' });
            var url = URL.createObjectURL(blob);

            var a = document.createElement('a');
            a.href = url;
            a.download = 'example.xlsx';
            a.click();
            window.URL.revokeObjectURL(url);
        }
</script>
</body>

</html>