/**
 * 提交form表单操作
 */
$("#form-button-submit").click(function(){
    var data = $("#idata-form").serializeArray();
    postData = {};
    $(data).each(function(){
       postData[this.name] = this.value;
    });
    $.post(posturl,postData , function(data){
    	if(data.status==0) {
                    $("#msgAlert .modal-title").html('错误提示');
                    $("#msgAlert .modal-body").html(data.message);
                    $("#msgAlert").modal();
                }
                if(data.status==1) {
                    $("#msgAlert .modal-title").html('信息提示');
                    $("#msgAlert .modal-body").html(data.message);
                    $("#msgAlert").modal();
                    location.reload();
                    
                } 
    }, "json");
    
});
