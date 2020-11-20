<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"> Collections</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=".">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="?p=collections">Collections</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Collection List</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-head">
                        <header>Select Date From & To </header>
                    </div>
                    <div class="card-body ">
                        <form method="post" action="?p=collections">
                            <div class="row">
                                <div class="col-lg-4 p-t-20">
                                    <div class="form-control-wrapper">
                                        <input type="text" id="date" name="date" class="floating-label mdl-textfield__input" placeholder="Date">
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div class="form-control-wrapper">
                                        <input type="text" id="date1" name="date1" class="floating-label mdl-textfield__input" placeholder="Date">
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <button type="submit" class="btn btn-primary"> Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-topline-red">
                    <div class="card-head">
                        <header>Collection Table s</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down"
                               href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="table-scrollable">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Username </th>
                                    <th> balance </th>
                                    <th> Username <?php echo date('y-m-d') ?>  </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $run = $this->run("SELECT * FROM transactions WHERE date_sort BETWEEN '2020-11-01' AND '2020-11-05'");
                                while($row = $this->fetch($run)){
                                    ?>
                                    <tr>
                                        <td> 1 </td>
                                        <td> <?php echo date('Y') ?> </td>
                                        <td> Otto </td>
                                        <td> makr124 </td>
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