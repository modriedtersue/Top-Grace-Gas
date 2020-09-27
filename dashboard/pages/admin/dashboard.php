<div class="page-content">
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title">Dashboard</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="">Home</a>&nbsp;<i class="fa fa-angle-right"></i></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </div>

    <?php

    if($_SESSION['login_user_type'] == 'super'){
        ?>

        <!-- start widget -->
        <div class="state-overview">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel purple">
                        <div class="symbol">
                            <i class="fa fa-users usr-clr"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="23"><?php echo $this->RowCount("SELECT * FROM `customers`"); ?></p>
                            <p>CUSTOMERS</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel deepPink-bgcolor">
                        <div class="symbol">
                            <i class="fa fa-dollar"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="48"> <?php echo $this-> concession_pay_status_all(); ?></p>
                            <p>PAID</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel orange">
                        <div class="symbol">
                            <i class="fa fa-dollar"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="14"><?php echo $this-> concession_outstanding_status_all(); ?></p>
                            <p>OUTSTANDING</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel blue-bgcolor">
                        <div class="symbol">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="3421"> <span></span><?php echo $this->transaction_total_all(); ?></p>
                            <p>TRANSACTIONS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end widget -->
        <!-- start new student list -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-topline-red">
                    <div class="card-head">
                        <header> New Customer List </header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="table-wrap">
                            <div class="table-scrollable">
                                <table class="table table-striped table-hover" id="support_table">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Customer ID</th>
                                        <th>Name </th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Plan</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    $run = $this->run("SELECT * FROM `customers` WHERE `customer_status`='1'");
                                    while ($row = $this->fetch($run)){
                                        ?>
                                        <tr class="odd gradeX">
                                            <td> <?php  echo $no++; ?></td>
                                            <td> <?php echo $row['customer_serial_number'] ?></td>
                                            <td> <?php echo $row['customer_name']  ?></td>
                                            <td> <?php  echo $row['customer_number'] ?></td>
                                            <td> <?php  echo $row['customer_number'] ?></td>
                                            <td> <?php echo $this->plan_status($row['customer_plan_id']);  ?></td>
                                            <td> <?php  echo $row['customer_date'] ?></td>

                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end new student list -->
        <?php
    }else if ($_SESSION['login_user_type'] == 'admin'){
        ?>


        <!-- start widget -->
        <div class="state-overview">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel purple">
                        <div class="symbol">
                            <i class="fa fa-users usr-clr"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="23"><?php echo $this->RowCount("SELECT * FROM `customers`"); ?></p>
                            <p>CUSTOMERS</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel deepPink-bgcolor">
                        <div class="symbol">
                            <i class="fa fa-dollar"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="48"> <?php echo $this-> concession_pay_status(); ?></p>
                            <p>PAID</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel orange">
                        <div class="symbol">
                            <i class="fa fa-dollar"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="14"><?php echo $this-> concession_outstanding_status(); ?></p>
                            <p>OUTSTANDING</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel blue-bgcolor">
                        <div class="symbol">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="3421"> <span></span><?php echo $this->transaction_total(); ?></p>
                            <p>TRANSACTIONS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end widget -->
        <!-- start new student list -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-topline-red">
                    <div class="card-head">
                        <header> New Customer List </header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="table-wrap">
                            <div class="table-scrollable">
                                <table class="table table-striped table-hover" id="support_table">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Customer ID</th>
                                        <th>Name </th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Plan</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1;
                                    $run = $this->run("SELECT * FROM `customers` WHERE `customer_status`='1'");
                                    while ($row = $this->fetch($run)){
                                        ?>
                                        <tr class="odd gradeX">
                                            <td> <?php  echo $no++; ?></td>
                                            <td> <?php echo $row['customer_serial_number'] ?></td>
                                            <td> <?php echo $row['customer_name']  ?></td>
                                            <td> <?php  echo $row['customer_number'] ?></td>
                                            <td> <?php  echo $row['customer_number'] ?></td>
                                            <td> <?php echo $this->plan_status($row['customer_plan_id']);  ?></td>
                                            <td> <?php  echo $row['customer_date'] ?></td>

                                        </tr>
                                        <?php
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end new student list -->
    <?php
    }

    ?>

</div>
