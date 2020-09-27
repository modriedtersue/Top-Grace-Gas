function Msg(msg,color,dismiss,element,time) {
    if (dismiss == 1) {
        var show = "<div class='row'><div class='col-lg-12'><div class='alert " + color + " alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>" + msg + "</div></div></div>";
    } else if(dismiss == 0) {
        var show = "<div class='row'><div class='col-lg-12'><div class='alert " + color + "'>" + msg + "</div></div></div>";
    }
    setTimeout(function() {
        $(element).html("");
    },time);
    $(element).html(show);
}
function  AjaxSendData(url,data,btn,msg){
	return $.ajax({
            url:url,
            type:"POST",
            data:data,
            beforeSend:function(){
                $(btn).html('<i class="fa fa-spinner fa-spin"></i> &nbsp ' +msg);
                $(btn).prop('disabled', true);
            }, 
        });
    }
function sweetAlertMsg(title,text,type,confirmButtonClass,cancelButtonText,confirmButtonText) {
    return swal({
        title: title,
        text: text,
        type: type,
        showCancelButton: true,
        confirmButtonClass: confirmButtonClass,
        confirmButtonText: confirmButtonText,
        cancelButtonText: cancelButtonText,
        closeOnConfirm: false,
        closeOnCancel: false
    });
}
	