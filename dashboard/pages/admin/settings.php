<!-- start page content -->
<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title"> Administrator  </div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href=".">Home</a>&nbsp;<i class="fa fa-angle-right"></i></li>
                    <li><a class="parent-item" href="?p=admin_settings"> Administrator </a>&nbsp;<i class="fa fa-angle-right"></i></li>
                    <li class="active"> Settings </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card card-box">
                    <div class="card-head">
                        <header> Administrator Settings  </header>
                    </div>
                    <div class="card-body" id="bar-parent">
                        <form method="post" id="update_kg_price" class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3"> Set KG Price <span class="required"> * </span></label>
                                    <div class="col-md-5">
                                        <input type="number" name="price" id="price"  value="<?php echo $this->select("set_kg_price","kg_id",1,"price") ?>" class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" id="btn_kg_price" class="btn btn-success pull-left"> Update </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form method="post" id="update_concession_amount" class="form-horizontal">
                            <div class="form-body">
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Concession Amount <span class="required"> * </span></label>
                                    <div class="col-md-5">
                                        <input type="number" name="amount" id="amount"  value="<?php echo $this->select("set_concession","concession_id",1,"amount") ?>" class="form-control input-height" />
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-9">
                                            <button type="submit" id="btn_con_amount" class="btn btn-success pull-left"> Update </button>
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