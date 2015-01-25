function getVal(){ 
	$.getJSON("get_type2.php",{type1:$("#type1").val()},function(json){ 
		var type2 = $("#type2"); 
		$("option",type2).remove(); //清空原有的选项，也可使用 ds_id.empty(); 
		$.each(json,function(index,array){ 
			var option = "<option value='"+array['id']+"'>"+array['name']+"</option>"; 
			type2.append(option); 
		}); 
	}); 
}
$(document).ready(function(){ 
	getVal(); 
	$("#type1").change(function(){
		getVal(); 
	}); 
	$("#tuijianyu").hide();
	$("input[name='is_recommend']").change(function() { 
		if($("input[name='is_recommend']:checked").val()==1){
			$("#tuijianyu").show();
		}else{
			$("#tuijianyu").hide();
		}
	}); 
	$("#addType2").click(function(){
		$.post("add_type2.php",
		{
			type1:$("#choose_type1").val(),
			name:$("#type2Name").val()
		},function(data,status){
			alert("添加成功\n请刷新页面以显示新类型");
		});
	});
}); 
