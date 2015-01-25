<!DOCTYPE html>
<html>
<head>
	<title>test JSON</title>
	<script src="../js/jquery-1.11.2.min.js"></script><!-- JQuery -->
	<script>
$(document).ready(function(){
  $("#type1").change(function(){
	$.getJSON("get_type2.php",{type1:$("#type1").val()},function(json){ 
		var type2 = $("#type2"); 
		$("option",type2).remove(); //清空原有的选项，也可使用 ds_id.empty(); 
		$.each(json,function(index,array){ 
			var option = "<option value='"+array['id']+"'>"+array['name']+"</option>"; 
			type2.append(option); 
			}); 
		}); 
	})
  });

</script>
</head>
<body>
<button>显示值</button>
<select class="form-control" id="type1">
				<option value=1>精选</option>
				<option value=2>开发工具</option>
				<option value=3>资源</option>
				<option value=-1>☆资源 - 福利</option>
			</select>
<select class="form-control" id="type2">

			</select>
</body>
</html>