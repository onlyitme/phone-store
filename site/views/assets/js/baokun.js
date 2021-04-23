function  modeldetail(idDT) {
    if($('.modal.product-quickview').length){
        $('.modal.product-quickview').modal('show');
    }
}
// function send_comment() {
//     var noidungBL = $('#comment').val();
//     var idDT = $('#idDT').val();
//
//      $.ajax({
//         type: "POST",
//         url: "?act=comment&what=send",
//         data: NoiDungBL ,
//         success: function(html){
//
//         }
//     });
// }