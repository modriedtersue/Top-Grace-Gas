<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"> Add Admin  </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=".">Home</a>&nbsp;<i class="fa fa-angle-right"></i></li>
                    <li><a class="parent-item" href="?p=all_admin"> Admin </a>&nbsp;<i class="fa fa-angle-right"></i></li>
                    <li class="active"> Add Admin  </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header> Admin Details  </header>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form method="post" id="add_admin_form" class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Username <span class="required"> * </span></label>
                                    <div class="col-md-5">
                                        <input type="text" name="username" id="usernames"  placeholder="e.g John123" class="form-control input-height" />
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
                                    <label class="control-label col-md-3"> User Type <span class="required"> * </span></label>
                                    <div class="col-md-5">
                                        <select class="form-control input-height" name="user_type" id="user_type">
                                            <option value=""> --Select--
                                            <option value="admin"> Admin </option>
                                            <option value="super"> Super </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Address
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-5">
                                        <textarea name="address" id="address" placeholder="Admin Address" class="form-control-textarea" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" id="btn_add_admin" class="btn btn-success pull-left"> Add <i class="fa fa-user-plus"></i> </button>
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