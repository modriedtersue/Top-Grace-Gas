<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Admin List</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=".">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="?p=all_admin">Admin</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Admin List</li>
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
                                            <header>All Admins</header>
                                        </div>
                                        <div class="card-body ">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-6">
                                                    <div class="btn-group">
                                                        <a href="?p=all_admins" id="addRow" class="btn btn-info">
                                                            Add New Admin <i class="fa fa-plus-circle"></i>
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
                                                        <th> Username </th>
                                                        <th> Name </th>
                                                        <th> Email </th>
                                                        <th> Phone </th>
                                                        <th> Address</th>
                                                        <th> User Type </th>
                                                        <th> Action </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $no = 1;
                                                    $run = $this->run("SELECT * FROM `admin` ");
                                                    while ($row = $this->fetch($run)){
                                                        ?>
                                                        <tr class="odd gradeX">
                                                            <td> <?php  echo $no++; ?></td>
                                                            <td> <?php echo $row['username'] ?></td>
                                                            <td> <?php echo $row['name']  ?></td>
                                                            <td> <?php echo $row['email'] ?></td>
                                                            <td> <?php  echo $row['phone'] ?></td>
                                                            <td> <?php  echo $row['address'] ?></td>
                                                            <td> <?php  echo $row['user_type'] ?></td>
                                                            <td> <?php //ss echo  $this->plan_status($row['customer_plan_id']);  ?></td>
                                                            <td>
                                                                <button class="btn btn-success btn-xs" onclick="func_admin_modal(<?php echo $row['admin_id'];?>)">
                                                                    <i class="fa fa-pencil "></i>
                                                                </button>
                                                                <button class="btn btn-danger btn-xs" id="btn_delete_admin_<?php echo $row['admin_id'];?>" onclick="func_delete_admin_(<?php echo $row['admin_id'];?>);">
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

<div class="modal fade" id="admin_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalCenterTitle">Admin Update Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="admin_update_form" method="post" class="form-horizontal">
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