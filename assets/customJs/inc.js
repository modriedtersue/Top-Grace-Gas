$("#admin_update_form").validate({
    // Specify validation rules
    rules: {
        username: "required",
        id: "required",
        name: "required",
        phone: "required",
        address: "required",
        status: "required",
        user_type: "required",
        //email: ""
    },
    // Specify validation error messages
    messages: {
        username: "Field Required",
        id: "Field Required",
        name: "Field Required",
        phone: "Field Required",
        address: "Field Required",
        status: "Field Required",
        user_type: "Field Required",
        // email: "Field Required"
    },
    submitHandler: func_update_admin,
});
function func_update_admin(){
    var data = $("#admin_update_form").serialize();
    var btn = $("#btn_update_admin");
    AjaxSendData("inc/inc_update.php?update=update_admin",data,btn," Submitting Data ...").done(function(response){
        if (response){
            Msg("<i class='fa fa-check-circle-o'></i>&nbsp;Successful Updated","alert-success text-center",1,"#msg",5000);
            setTimeout(function(){
                window.location="?p=all_admin";
            },5000)
        }else{
            Msg("<i class='fa fa-warning'></i>&nbsp;Unsuccessful Updated","alert-danger text-center",1,"#msg",5000);
            $(btn).prop('disabled', false);
            $(btn).html('Add <i class="fa fa-user-plus"></i>');
        }
    });
}

$("#add_admin_form").validate({
    // Specify validation rules
    rules: {
        username: "required",
        name: "required",
        phone: "required",
        address: "required",
        user_type: "required",
        //email: ""
    },
    // Specify validation error messages
    messages: {
        username: "Field Required",
        name: "Field Required",
        phone: "Field Required",
        address: "Field Required",
        user_type: "Field Required",
        // email: "Field Required"


    },
    submitHandler: func_add_admin,
});
function func_add_admin(){
    var data = $("#add_admin_form").serialize();
    var btn = $("#btn_add_admin");
    AjaxSendData("inc/inc_insert.php?insert=add_admin",data,btn," Submitting Data ...").done(function(response){
        if (response){
            swal("Added!", "Successfully added.", "success");
            setTimeout(function(){
                window.location="?p=all_admin";
            },5000)
        }else{
            swal("Cancelled", "Unsuccessfully added:)", "error");
            $(btn).prop('disabled', false);
            $(btn).html('Add <i class="fa fa-user-plus"></i>');
        }
    });
}
$("#update_kg_price").validate({
    // Specify validation rules
    rules: {
        price: "required",
    },
    // Specify validation error messages
    messages: {
        price: "Field Required",

    },
    submitHandler: func_update_kg_price,
});
function func_update_kg_price(){
    var data = $("#update_kg_price").serialize();
    var btn = $("#btn_kg_price");
    AjaxSendData("inc/inc_update.php?update=update_kg_price",data,btn," Updating Data ...").done(function(response){
        if (response){
            swal("Updated!", "Successful !!", "success");
            setTimeout(function(){
                window.location="?p=admin_settings";
            },5000)
        }else{
            swal("Unsuccessful!", "Updated!!!", "error");

            setTimeout(function(){
                window.location="?p=admin_settings";
            },5000)
        }
    });
}
$("#update_concession_amount").validate({
    // Specify validation rules
    rules: {
        amount: "required",
    },
    // Specify validation error messages
    messages: {
        amount: "Field Required",

    },
    submitHandler: func_update_concession_amount,
});
function func_update_concession_amount(){
    var data = $("#update_concession_amount").serialize();
    var btn = $("#btn_con_amount");
    AjaxSendData("inc/inc_update.php?update=update_concession_amount",data,btn," Updating Data ...").done(function(response){
        if (response){
            swal("Updated", "Successful!!!", "success");
            setTimeout(function(){
                window.location="?p=admin_settings";
            },5000)
        }else{
            swal("Unsuccessful!", "Updated!!!", "error");

            setTimeout(function(){
                window.location="?p=admin_settings";
            },5000)
        }
    });
}


/** END FUNCTIONS FOR DELETE ITEMS  **/

function func_delete_customer_(id) {
    var id = parseInt(id);
    var btn = $("#btn_delete_customer_" + id);
    swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary record!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function (isConfirm) {
            if (isConfirm == true) {
                AjaxSendData("inc/inc_delete.php?delete=delete_customer", {id: id}, btn, " Deleting... ").done(function (response) {
                    if (response == 1) {
                        swal("Deleted!", "Your imaginary record has been deleted.", "success");
                        setTimeout(function () {
                            location.reload();
                        }, 5000);
                    } else {
                        swal("Cancelled", "Your imaginary record unable to delete:)", "error");
                        setTimeout(function () {
                            location.reload();
                        }, 5000);
                    }
                });
            } else {
                swal("Cancelled", "Your imaginary record is safe :)", "error");
            }
        });
}
function func_delete_admin_(id) {
    var id = parseInt(id);
    var btn = $("#btn_delete_admin_" + id);
    swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary record!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel plx!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function (isConfirm) {
            if (isConfirm == true) {
                AjaxSendData("inc/inc_delete.php?delete=delete_admin", {id: id}, btn, " Deleting... ").done(function (response) {
                    if (response == 1) {
                        swal("Deleted!", "Your imaginary record has been deleted.", "success");
                        setTimeout(function () {
                            location.reload();
                        }, 5000);
                    } else {
                        swal("Cancelled", "Your imaginary record unable to delete:)", "error");
                        setTimeout(function () {
                            location.reload();
                        }, 5000);
                    }
                });
            } else {
                swal("Cancelled", "Your imaginary record is safe :)", "error");
            }
        });
}

$("#change_change_form").validate({
    // Specify validation rules
    rules: {
        old: "required",
        new: "required",
        confirm: "required"
    },
    // Specify validation error messages
    messages: {
        old: "Field Required",
        new: "Field Required",
        confirm: "Field Required"
    },
    submitHandler: fun_add_subject_form,
});
function fun_add_subject_form(){
    var data = $("#change_change_form").serialize();
    var btn = $("#btn_change_password");
    AjaxSendData("inc/inc_update.php?update=change_password",data,btn," Validating Data ...").done(function(response) {
        if (response == 1) {
            swal("Successfully!", "You have successfully changed password!!!", "success");
            setTimeout(function () {
                location.reload();
                //window.location="?p=subject_all";
            }, 5000);
        } else if (response == 2) {
            swal("Mismatch!", "Old password mismatch!!!", "error");
            setTimeout(function () {
                location.reload();
                //window.location="?p=subject_all";
            }, 5000);
        } else if (response == 3){
            swal("Mismatch!", "New password Mismatch!!!", "error");
            setTimeout(function () {
                location.reload();
                //window.location="?p=subject_all";
            }, 5000);
        }else{
            swal("Cancelled", "Unsuccessfully:)", "error");
            $(btn).prop('disabled', false);
            $(btn).html('Submit <i class="fa fa-arrow-circle-right"></i>');
        }
    });
}

/** END FUNCTIONS FOR ADDING FORMS  **/
$("#form_add_customer").validate({
    // Specify validation rules
    rules: {
        customer_id: "required",
        name: "required",
        phone: "required",
        address: "required",
        gender: "required",
        plan: "required",
       //email: ""
    },
    // Specify validation error messages
    messages: {
        customer_id: "Field Required",
        name: "Field Required",
        phone: "Field Required",
        address: "Field Required",
        gender: "Field Required",
        plan: "Field Required",
       // email: "Field Required"


    },
    submitHandler: fun_add_session_form,
});
function fun_add_session_form(){
    var data = $("#form_add_customer").serialize();
    var btn = $("#btn_add_customer");
    AjaxSendData("inc/inc_insert.php?insert=add_customer",data,btn," Submitting Data ...").done(function(response){
        if (response){
            swal("Added!", "Successfully added.", "success");
            setTimeout(function(){
                window.location="?p=customer_all";
            },5000)
        }else{
            swal("Cancelled", "Unsuccessfully added:)", "error");
            $(btn).prop('disabled', false);
            $(btn).html('Add <i class="fa fa-user-plus"></i>');
        }
    });
}
$("#transaction_buy_gas").validate({
    // Specify validation rules
    rules: {
        id: "required",
        customer_id: "required",
        name: "required",
        price: "required",
        kg: "required",
        total: "required",
        plan: "required",
        //email: ""
    },
    // Specify validation error messages
    messages: {
        id: "Field Required",
        customer_id: "Field Required",
        name: "Field Required",
        price: "Field Required",
        kg: "Field Required",
        total: "Field Required",
        plan: "Field Required",
        // email: "Field Required"


    },
    submitHandler: func_transaction_buy_gas,
});
function func_transaction_buy_gas(){
    var data = $("#transaction_buy_gas").serialize();
    var btn = $("#btn_buy_gas");
    AjaxSendData("inc/inc_insert.php?insert=transaction_buy_gas",data,btn," Submitting Data ...").done(function(response){
        if (response){
            Msg("<i class='fa fa-check-circle-o'></i>&nbsp;Successfully","alert-success text-center",1,"#msg",5000);
            setTimeout(function(){
                window.location="?p=transactions";
            },5000)
        }else{
            Msg("<i class='fa fa-trash'></i>&nbsp; Unsuccessfully","alert-danger text-center",1,"#msg",5000);
            $(btn).prop('disabled', false);
            $(btn).html('Add <i class="fa fa-user-plus"></i>');
        }
    });
}
// end session validation here
$("#customer_update_form").validate({
    // Specify validation rules
    rules: {
        customer_id: "required",
        id: "required",
        name: "required",
        phone: "required",
        address: "required",
        gender: "required",
        plan: "required",
        //email: ""
    },
    // Specify validation error messages
    messages: {
        customer_id: "Field Required",
        id: "Field Required",
        name: "Field Required",
        phone: "Field Required",
        address: "Field Required",
        gender: "Field Required",
        plan: "Field Required",
        // email: "Field Required"


    },
    submitHandler: func_update_customer,
});
function func_update_customer(){
    var data = $("#customer_update_form").serialize();
    var btn = $("#btn_update_customer");
    AjaxSendData("inc/inc_update.php?update=update_customer",data,btn," Submitting Data ...").done(function(response){
        if (response){
            Msg("<i class='fa fa-check-circle-o'></i>&nbsp;Successfully Updated","alert-success text-center",1,"#msg",5000);
            setTimeout(function(){
                window.location="?p=customer_all";
            },5000)
        }else{
            Msg("<i class='fa fa-warning'></i>&nbsp;Unsuccessfully Updated","alert-danger text-center",1,"#msg",5000);
            $(btn).prop('disabled', false);
            $(btn).html('Add <i class="fa fa-user-plus"></i>');
        }
    });
}

function func_customer_modal(table_id) {
    var id = table_id;
    if(id != '')
    {
        $.ajax({
            url:"inc/inc_update.php?update=customer_modal",
            method:"POST",
            data:{id:id},
            success:function(data){
                $('.modal-body').html(data);
                $('#customer_modal').modal('show');
            }
        });
    }
}
function func_admin_modal(table_id) {
    var id = table_id;
    if(id != '')
    {
        $.ajax({
            url:"inc/inc_update.php?update=admin_modal",
            method:"POST",
            data:{id:id},
            success:function(data){
                $('.modal-body').html(data);
                $('#admin_modal').modal('show');
            }
        });
    }
}
function func_buy_gas_modal(table_id) {
    var id = table_id;
    if(id != '')
    {
        $.ajax({
            url:"inc/inc_update.php?update=buy_gas_modal",
            method:"POST",
            data:{id:id},
            success:function(data){
                $('.modal-body').html(data);
                $('#buy_gas_modal').modal('show');
            }
        });
    }
}

function get_total() {

    var amount = 500
    document.getElementById('total').innerHTML = amount;

}