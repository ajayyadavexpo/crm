<!DOCTYPE html>
<html>
<head>
  <title></title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/css/custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="home.php">CRM</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item"  title="Dashboard">
          <a class="nav-link" href="home.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-item" >
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#plan" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Plans</span>
          </a>
          <ul class="sidenav-second-level collapse" id="plan">
            <li>
              <a href="plan_add.php">Add Plan</a>
            </li>
            <li>
              <a href="plan_view.php">View Plan</a>
            </li>
            <li>
              <a href="plan_edit.php">Edit Plan</a>
            </li>
            <li>
              <a href="plan_delete.php">Delete Plan</a>
            </li>

          </ul>
        </li>

        <li class="nav-item" >
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Employees</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="employee.php">Add Employee</a>
            </li>
            <li>
              <a href="viewemp.php">View Employee</a>
            </li>
            <li>
              <a href="editemp.php">Edit Employee</a>
            </li>
            <li>
              <a href="deleteemp.php">Delete Employee</a>
            </li>

          </ul>
        </li>

        
        <li class="nav-item" >
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-users"></i>
            <span class="nav-link-text">Customers</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="add_customer.php">Add Customer </a>
            </li>
            <li>
              <a href="view_customer.php">View Customer </a>
            </li>
            <li>
              <a href="edit_customer.php">Edit Customer </a>
            </li>
            <li>
              <a href="expairy_dates.php">Expairy Date </a>
            </li>
            <li>
              <a href="delete_customer.php">Delete Customer </a>
            </li>
          </ul>
        </li>
        <li class="nav-item" >
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Complaints</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="add_complaint.php">Add Complaint</a>
            </li>
            <li>
              <a href="solve_complaint.php">Solve Complaint</a>
            </li>
            <li>
              <a href="view_complaint.php">View Complaint</a>
            </li>

          </ul>
        </li>

      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
    <div class="content-wrapper">