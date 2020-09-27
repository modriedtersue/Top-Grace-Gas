<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Customers List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=".">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="?p=customer_all">Customer</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Customer List</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tabbable-line">
                    <div class="tab-content">
                        <div class="tab-pane active fontawesome-demo" id="tab1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-box">
                                        <div class="card-head">
                                            <header>All Customers</header>
                                        </div>
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="btn-group">
                                                        <a href="?p=customer_add" id="addRow" class="btn btn-info">
                                                            Add New Customer <i class="fa fa-plus-circle"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-scrollable">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                       id="exportTable">
                                                    <thead>
                                                    <tr>
                                                        <th> # </th>
                                                        <th> Customer ID </th>
                                                        <th> Name </th>
                                                        <th> Gender </th>
                                                        <th> Phone </th>
                                                        <th> Address</th>
                                                        <th> Plan </th>
                                                        <th> Action </th>
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
                                                            <td> <?php echo $row['customer_gender'] ?></td>
                                                            <td> <?php  echo $row['customer_number'] ?></td>
                                                            <td> <?php  echo $row['customer_address'] ?></td>
                                                            <td> <?php echo $this->plan_status($row['customer_plan_id']);  ?></td>
                                                            <td>
                                                                <?php  echo $this->status($row['customer_status']);?>
                                                                <button class="btn btn-success btn-xs" onclick="func_customer_modal(<?php echo $row['customer_id'];?>)">
                                                                    <i class="fa fa-pencil "></i>
                                                                </button>
                                                                <button class="btn btn-danger btn-xs" id="btn_delete_customer_<?php echo $row['customer_id'];?>" onclick="func_delete_customer_(<?php echo $row['customer_id'];?>);">
                                                                    <i class="fa fa-trash-o "></i>
                                                                </button>
                                                            </td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->


<!-- modal content for class edit -->

<div class="modal fade" id="customer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalCenterTitle">Customer Update Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="customer_update_form" method="post" class="form-horizontal">
                <div class="modal-body" id="form_data">
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal content for class edit  -->