
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<form style="padding:10%;" >
<label for="state">Select State</label>
 <select id="select_stat" value="drop" onchange="showUser()" >
  <option value="Maharastra">Maharastra</option>
  <option value="M.P.">M.P.</option>
  <option value="Andhra Pradesh">Andhra Pradesh</option>
  <option value="Bihar">Bihar</option>
  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
  <option value="Andhra Pradesh">Andhra Pradesh</option>
 </select> 
<br/>
<label for="city">Select City</label>
 <select id="city">
<option value="<?php ?>"></option>
</select> 
<br/>
<label for="state">Product Name</label>
 <select id="product_id" value="drop" onchange="dataDisplay()" >
  <option value="Apple">apple</option>
  <option value="Apollo">Apollo</option>
  <option value="brother">brother</option>
  <option value="Dell">Dell</option>
  <option value="HP">HP</option>
  <option value="Sony">Sony</option>
 </select> 
<br/>
<div id="subproduct">
<h3> </h3>
</div>
</form>
</html>
<script type="text/javascript">
function showUser(){
var state= $("#select_stat").val();
$.ajax({
        url:"city.php",
		type:"post",
		data:{"state":state},
		success: function(response){
			
			$('#city') .find('option')
						.remove()
						.end()
						.append(response);
		}

});
}


function dataDisplay(){
	var product=$("#product_id").val();
	
	$.ajax({
		url:"product.php",
		type:"post",
		data:{"product":product},
		success: function(data){
			
			var a=$("#subproduct").find('h3');
			$(a).empty().append(data);
	 	
	           	
		}
	})
}

</script>
