$(document).on("click", ".open-changeDeviceName", function () {
	 var id = $(this).data('id');
     var name = $(this).data('name');
     $(".modal-body #deviceid").val(id);
     $(".modal-body #devicename").val(name);
});
