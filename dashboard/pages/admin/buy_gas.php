<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Gas List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=".">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="?p=buy_gas">Gas</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active"> List </li>
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
                                        <div class="card-body ">
                                            <div class="table-scrollable">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                       id="exportTable">
                                                    <thead>
                                                    <tr>
                                                        <th> # </th>
                                                        <th> Customer ID </th>
                                                        <th> Name </th>
                                                        <th> Plan </th>
                                                        <th> Transaction </th>
                                                        <th> Buy </th>
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
                                                            <td> <?php echo $this->plan_status($row['customer_plan_id']);  ?></td>
                                                            <td>
                                                                <a href="?p=view_user_transaction&customer_serial_number=<?php echo $row['customer_serial_number'];  ?>&id=<?php echo $row['customer_id'];?>" class="btn btn-success btn-xs" onclick="func_buy_gas_modal(<?php echo $row['customer_id'];?>)">
                                                                  View Transaction
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-danger btn-xs" onclick="func_buy_gas_modal(<?php echo $row['customer_id'];?>)">
                                                                    Buy Gas
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

<div class="modal fade" id="buy_gas_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="transaction_buy_gas" method="post" class="form-horizontal">
                <div class="modal-body" id="form_data">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal content for class edit  -->