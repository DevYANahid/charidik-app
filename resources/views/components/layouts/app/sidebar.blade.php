<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern,  html5, responsive">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Charidik Admin</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.jpg">

    <link rel="stylesheet" href="adminassets/css/bootstrap.min.css">

    <link rel="stylesheet" href="adminassets/css/animate.css">

    <link rel="stylesheet" href="adminassets/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="adminassets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="adminassets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="adminassets/css/style.css">
</head>

<body>





    <div class="main-wrapper">
        <div class="header">

            <div class="header-left active">
                <a href="index.html" class="logo">
                    <img src="adminassets/img/logo.png" alt="">
                </a>
                <a href="index.html" class="logo-small">
                    <img src="adminassets/img/logo-small.png" alt="">
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <ul class="nav user-menu">


                <li class="nav-item dropdown has-arrow flag-nav">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="javascript:void(0);"
                        role="button">
                        <img src="adminassets/img/flags/us1.png" alt="" height="20">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="adminassets/img/flags/us.png" alt="" height="16"> English
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="adminassets/img/flags/fr.png" alt="" height="16"> French
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="adminassets/img/flags/es.png" alt="" height="16"> Spanish
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <img src="adminassets/img/flags/de.png" alt="" height="16"> German
                        </a>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img"><img src="adminassets/img/profiles/avator1.jpg" alt="">
                            <span class="status online"></span></span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img src="adminassets/img/profiles/avator1.jpg" alt="">
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>John Doe</h6>
                                    <h5>Admin</h5>
                                </div>
                            </div>
                            <hr class="m-0">
                            <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My
                                Profile</a>
                            <a class="dropdown-item" href="generalsettings.html"><i class="me-2"
                                    data-feather="settings"></i>Settings</a>
                            <hr class="m-0">
                            <a class="dropdown-item logout pb-0" href="signin.html"><img
                                    src="adminassets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
                        </div>
                    </div>
                </li>
            </ul>

        </div>



        {{-- header end --}}


        {{-- sidebar start --}}

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="active">
                            <a href="index.html"><img src="adminassets/img/icons/dashboard.svg" alt="img"><span>
                                    Dashboard</span> </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="adminassets/img/icons/product.svg" alt="img"><span>
                                    Hero Section</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="productlist.html">Hero section List</a></li>
                                <li><a href="addproduct.html">Add Hero item</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="adminassets/img/icons/sales1.svg" alt="img"><span>
                                    Sales</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="pos.html">POS</a></li>
                                <li><a href="pos.html">New Sales</a></li>
                                <li><a href="salesreturnlists.html">Sales Return List</a></li>
                                <li><a href="createsalesreturns.html">New Sales Return</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="adminassets/img/icons/purchase1.svg"
                                    alt="img"><span> Video Link</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="purchaselist.html">Video List</a></li>
                                <li><a href="addpurchase.html">Add video Link</a></li>
                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="adminassets/img/icons/expense1.svg" alt="img"><span>
                                    Category Post</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="expenselist.html">Category List</a></li>
                                <li><a href="createexpense.html">Add Post Category</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="adminassets/img/icons/transfer1.svg"
                                    alt="img"><span> Manage Contact </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="transferlist.html">Contact List</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="adminassets/img/icons/users1.svg"
                                    alt="img"><span>About Page</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="customerlist.html">Customer List</a></li>
                                <li><a href="addcustomer.html">Add Customer </a></li>
                                <li><a href="supplierlist.html">Supplier List</a></li>
                                <li><a href="addsupplier.html">Add Supplier </a></li>
                                <li><a href="userlist.html">User List</a></li>
                                <li><a href="adduser.html">Add User</a></li>
                                <li><a href="storelist.html">Store List</a></li>
                                <li><a href="addstore.html">Add Store</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="adminassets/img/icons/places.svg" alt="img"><span>
                                    Manage Blog Page</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="newcountry.html">New Blogs</a></li>
                                <li><a href="countrieslist.html">Blog list</a></li>
                                <li><a href="newstate.html">Add Blog </a></li>
                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="adminassets/img/icons/users1.svg" alt="img"><span>
                                    Users</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="newuser.html">New User </a></li>
                                <li><a href="userlists.html">Users List</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><img src="adminassets/img/icons/settings.svg" alt="img"><span>
                                    Settings</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="generalsettings.html">General Settings</a></li>
                                <li><a href="emailsettings.html">Hero Section</a></li>
                                <li><a href="paymentsettings.html">Footer Settings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- sidebar end --}}

        <div class="page-wrapper">
            <div class="content">
                <div class="row">

                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count">
                            <div class="dash-counts">
                                <h4>222</h4>
                                <h5>All Post</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das1">
                            <div class="dash-counts">
                                <h4>766</h4>
                                <h5>Website Traffic</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="user-check"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das2">
                            <div class="dash-counts">
                                <h4>433</h4>
                                <h5>Post Traffic</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="file-text"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 d-flex">
                        <div class="dash-count das3">
                            <div class="dash-counts">
                                <h4>105</h4>
                                <h5>Sales Invoice</h5>
                            </div>
                            <div class="dash-imgs">
                                <i data-feather="file"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7 col-sm-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Post & Video</h5>
                                <div class="graph-sets">
                                    <ul>
                                        <li>
                                            <span>Video</span>
                                        </li>
                                        <li>
                                            <span>Post</span>
                                        </li>
                                    </ul>
                                    <div class="dropdown">
                                        <button class="btn btn-white btn-sm dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            2022 <img src="adminassets/img/icons/dropdown.svg" alt="img" class="ms-2">
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="sales_charts"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">Recently Added Post</h4>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                        class="dropset">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a href="productlist.html" class="dropdown-item">post List</a>
                                        </li>
                                        <li>
                                            <a href="addproduct.html" class="dropdown-item">post Add</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive dataview">
                                    <table class="table datatable ">
                                        <thead>
                                            <tr>
                                                <th>Sno</th>
                                                <th>Post</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="productimgname">
                                                    <a href="productlist.html" class="product-img">
                                                        <img src="adminassets/img/product/product22.jpg" alt="product">
                                                    </a>
                                                    <a href="productlist.html">Apple Earpods</a>
                                                </td>
                                                <td>$891.2</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td class="productimgname">
                                                    <a href="productlist.html" class="product-img">
                                                        <img src="adminassets/img/product/product23.jpg" alt="product">
                                                    </a>
                                                    <a href="productlist.html">iPhone 11</a>
                                                </td>
                                                <td>$668.51</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td class="productimgname">
                                                    <a href="productlist.html" class="product-img">
                                                        <img src="adminassets/img/product/product24.jpg" alt="product">
                                                    </a>
                                                    <a href="productlist.html">samsung</a>
                                                </td>
                                                <td>$522.29</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td class="productimgname">
                                                    <a href="productlist.html" class="product-img">
                                                        <img src="adminassets/img/product/product6.jpg" alt="product">
                                                    </a>
                                                    <a href="productlist.html">Macbook Pro</a>
                                                </td>
                                                <td>$291.01</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-0">
                    <div class="card-body">
                        <h4 class="card-title">Expired Post</h4>
                        <div class="table-responsive dataview">
                            <table class="table datatable ">
                                <thead>
                                    <tr>
                                        <th>SNo</th>
                                        <th>post Code</th>
                                        <th>post Name</th>
                                        <th>Brand Name</th>
                                        <th>Category Name</th>
                                        <th>Expiry Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="javascript:void(0);">IT0001</a></td>
                                        <td class="productimgname">
                                            <a class="product-img" href="productlist.html">
                                                <img src="adminassets/img/product/product2.jpg" alt="product">
                                            </a>
                                            <a href="productlist.html">Orange</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>Fruits</td>
                                        <td>12-12-2022</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><a href="javascript:void(0);">IT0002</a></td>
                                        <td class="productimgname">
                                            <a class="product-img" href="productlist.html">
                                                <img src="adminassets/img/product/product3.jpg" alt="product">
                                            </a>
                                            <a href="productlist.html">Pineapple</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>Fruits</td>
                                        <td>25-11-2022</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><a href="javascript:void(0);">IT0003</a></td>
                                        <td class="productimgname">
                                            <a class="product-img" href="productlist.html">
                                                <img src="adminassets/img/product/product4.jpg" alt="product">
                                            </a>
                                            <a href="productlist.html">Stawberry</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>Fruits</td>
                                        <td>19-11-2022</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><a href="javascript:void(0);">IT0004</a></td>
                                        <td class="productimgname">
                                            <a class="product-img" href="productlist.html">
                                                <img src="adminassets/img/product/product5.jpg" alt="product">
                                            </a>
                                            <a href="productlist.html">Avocat</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>Fruits</td>
                                        <td>20-11-2022</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="adminassets/js/jquery-3.6.0.min.js"></script>

    <script src="adminassets/js/feather.min.js"></script>

    <script src="adminassets/js/jquery.slimscroll.min.js"></script>

    <script src="adminassets/js/jquery.dataTables.min.js"></script>
    <script src="adminassets/js/dataTables.bootstrap4.min.js"></script>

    <script src="adminassets/js/bootstrap.bundle.min.js"></script>

    <script src="adminassets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="adminassets/plugins/apexchart/chart-data.js"></script>

    <script src="adminassets/js/script.js"></script>
</body>

</html>