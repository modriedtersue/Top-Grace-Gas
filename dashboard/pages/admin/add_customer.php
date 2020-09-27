<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"> Add Customer  </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=".">Home</a>&nbsp;<i class="fa fa-angle-right"></i></li>
                    <li><a class="parent-item" href="?p=customer_all"> Customer </a>&nbsp;<i class="fa fa-angle-right"></i></li>
                    <li class="active"> Add Customer  </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header> Customer Details  </header>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form method="post" id="form_add_customer" class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Customer ID <span class="required"> * </span></label>
                                    <div class="col-md-5">
                                        <input type="text" name="customer_id" id="customer_id" readonly value="<?php echo $this->gen_customer_id(); ?>" class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">FullName <span class="required"> * </span></label>
                                    <div class="col-md-5">
                                        <input type="text" name="name" id="name"  placeholder="e.g John" class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Phone Number<span class="required"> * </span></label>
                                    <div class="col-md-5">
                                        <input type="number" name="phone" id="phone"  placeholder="090XXXXX98" class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Email (optional)<span class="required"> * </span></label>
                                    <div class="col-md-5">
                                        <input type="text" name="email" id="email"  placeholder="john@gmail.com " class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Gender <span class="required"> * </span></label>
                                    <div class="col-md-5">
                                        <select class="form-control input-height" name="gender" id="gender">
                                            <option value=""> --Select--
                                            <option value="Male"> Male </option>
                                            <option value="Female"> Female </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Address
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <textarea name="address" id="address" placeholder="Customer Address" class="form-control-textarea" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Plan
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <select class="form-control input-height" name="plan" id="plan">
                                            <option value=""> --Select-- </option>
                                            <?php
                                            $run_plan = $this->run("SELECT * FROM `plans` WHERE `plan_status`='1'");
                                            while ($row_plan = $this->fetch($run_plan)){
                                                ?>
                                                <option value="<?php echo $row_plan['plan_id'] ?>"> <?php echo $row_plan['plan'] ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" id="btn_add_customer" class="btn btn-success pull-left"> Add <i class="fa fa-user-plus"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->