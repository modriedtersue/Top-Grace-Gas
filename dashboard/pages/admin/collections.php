<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"> Sales Collection</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=".">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="?p=collections">Sales</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Collection</li>
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
                            	 <div class="col-lg-3 p-t-20">
									<select name="admin_id" id="admin_id" class="form-control">
										<option value=""> -- select Admin --</option>
										<?php
											$run1 = $this->run("SELECT * FROM `admin`");
											while ($row1 = $this->fetch($run1)) {
												?>
											<option value="<?php echo $row1['admin_id'] ?>"><?php echo $row1['username']; ?></option>
												<?php
											}
										?>
									</select>
                                </div>
                                <div class="col-lg-3 p-t-20">
                                    <div class="form-control-wrapper">
                                        <input type="text" id="date" name="date" class="floating-label mdl-textfield__input" placeholder="Date">
                                    </div>
                                </div>
                                <div class="col-lg-3 p-t-20">
                                    <div class="form-control-wrapper">
                                        <input type="text" id="date1" name="date1" class="floating-label mdl-textfield__input" placeholder="Date">
                                    </div>
                                </div>
                                <div class="col-lg-3 p-t-20">
                                    <button type="submit" name="btn_sort" class="btn btn-primary"> Submit</button>
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
                        <header>Sales Collection</header>
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
									<th> Admin </th>
									<th> From </th>
									<th> To </th>
									<th> Total KG </th>
									<th> Collection </th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                <?php

                                if (isset(($_POST['btn_sort']))){

                                			$date1 = $this->clean($_POST['date1']);

                                			$date = $this->clean($_POST['date']);
                                			$admin_id = $this->clean($_POST['admin_id']);

                                		$run = $this->run("SELECT *, SUM(`total_amount`) AS total_amunt, SUM(`kg`) AS total_kg FROM transactions WHERE `admin_id`='$admin_id' AND date_sort BETWEEN '$date' AND '$date1'");
                                while($row = $this->fetch($run)){
                                    ?>
                                    <tr>
                                    	  <td> <?php echo 'modried' ?></td>
                                        <td> <?php echo $date ?></td>
                                        <td> <?php echo $date1 ?> </td>
                                          <td> <?php echo $row['total_kg'] ?> </td>
                                        <td> <b><?php echo $this->format_money($row['total_amunt'],true); ?></b> </td>
                                    </tr>
                                    <?php
                                }	

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