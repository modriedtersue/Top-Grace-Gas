function func_class_active(id,status) {
    var id = parseInt(id);
    var btn = $("#toggle_id_" + id);
    // checking if the class status is inactive
    if(status == 1){
        swal({
                title: "Are you sure?",
                text: "Do you want to turn class inactive!!!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Inactive!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function (isConfirm) {
                if (isConfirm == true) {
                    AjaxSendData("inc/inc_toggle.php?toggle=class_active_inactive", {id:id,status:status},btn, "Processing").done(function (response) {
                        if (response == 1) {
                            swal("Inactive!", "Class has been turn inactive", "success");
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
    }else if(status == 0){
        swal({
                title: "Are you sure?",
                text: "Do you want to turn class Active!!!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-success",
                confirmButtonText: "Yes, Active!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function (isConfirm) {
                if (isConfirm == true) {
                    AjaxSendData("inc/inc_toggle.php?toggle=class_active_inactive", {id:id,status:status},btn, "Processing").done(function (response) {
                        if (response == 1) {
                            swal("Inactive!", "Class has been turn inactive", "success");
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
    //

}
function func_session_active_inactive(id,status) {
    var id = parseInt(id);
    var btn = $("#toggle_id_" + id);
    // checking if the class status is inactive
    if(status == 1){
        swal({
                title: "Are you sure?",
                text: "Do you want to turn class inactive!!!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, Inactive!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function (isConfirm) {
                if (isConfirm == true) {
                    AjaxSendData("inc/inc_toggle.php?toggle=session_active_inactive", {id:id,status:status},btn, "Processing").done(function (response) {
                        if (response == 1) {
                            swal("Inactive!", "inactive", "success");
                            setTimeout(function () {
                                location.reload();
                            }, 5000);
                        } else {
                            swal("Cancelled", "Your imaginary record unable", "error");
                            setTimeout(function () {
                                location.reload();
                            }, 5000);
                        }
                    });
                } else {
                    swal("Cancelled", "Your imaginary record is safe :)", "error");
                }
            });
    }else if(status == 0){
        swal({
                title: "Are you sure?",
                text: "Do you want to turn class Active!!!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-success",
                confirmButtonText: "Yes, Active!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function (isConfirm) {
                if (isConfirm == true) {
                    AjaxSendData("inc/inc_toggle.php?toggle=session_active_inactive", {id:id,status:status},btn, "Processing").done(function (response) {
                        if (response == 1) {
                            swal("Inactive!", "Class has been turn inactive", "success");
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
    //

}