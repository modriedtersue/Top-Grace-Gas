<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"> Change password </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=".">Home</a>&nbsp;<i class="fa fa-angle-right"></i></li>
                    <li><a class="parent-item" href="?p=admin_settings"> Password </a>&nbsp;<i class="fa fa-angle-right"></i></li>
                    <li class="active">Change </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Password Form </header>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form method="post" id="change_change_form" class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Old Password <span class="required"> * </span></label>
                                    <div class="col-md-5">
                                        <input type="password" name="old" id="old"  class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">New Password <span class="required"> * </span></label>
                                    <div class="col-md-5">
                                        <input type="password" name="new" id="new"  class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Confirm Password <span class="required"> * </span></label>
                                    <div class="col-md-5">
                                        <input type="password" name="confirm" id="confirm"  class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" id="btn_change_password" class="btn btn-success pull-left"> Submit <i class="fa fa-arrow-circle-right"></i> </button>
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