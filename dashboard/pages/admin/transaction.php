<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Transactions</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=".">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="?p=transactions">Transactions</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">List</li>
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
                                            <div class="table-scrollable">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                                       id="exportTable">
                                                    <thead>
                                                    <tr>
                                                        <th> # </th>
                                                        <th> Customer ID </th>
                                                        <th> Kg </th>
                                                        <th> Price </th>
                                                        <th> Total Amount </th>
                                                        <th> Time</th>
                                                        <th> Date </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $no = 1;
                                                    $run = $this->run("SELECT * FROM `transactions`");
                                                    while ($row = $this->fetch($run)){
                                                        ?>
                                                        <tr class="odd gradeX">
                                                            <td> <?php  echo $no++; ?></td>
                                                            <td> <?php echo $row['tran_customer_id'] ?></td>
                                                            <td> <?php echo $row['kg']  ?></td>
                                                            <td> <?php echo $this->format_money($row['price'],true) ?></td>
                                                            <td> <?php  echo $this->format_money($row['total_amount'],true) ?></td>
                                                            <td> <?php  echo $this->time_ago($row['time']); ?></td>
                                                            <td> <?php echo $row['date'];  ?></td>
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