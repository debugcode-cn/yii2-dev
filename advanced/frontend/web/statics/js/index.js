(function(){
	
	$("#fk").on('click',function(){
		$.ajax({
			url:'/form/index',
			type:"post",
			data:{
				name:"wlz",
				id:"4114811",
				csrf_frontend:$("#at").val()
			},
			sync:true,
			success:function(data){
				console.log(data);
			},
			error:function(xhr){
				console.log(xhr);
			}
		});
	});
	
	
})(jQuery);