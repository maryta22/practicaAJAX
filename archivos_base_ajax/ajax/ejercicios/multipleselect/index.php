<html>	
	<head>
		<script type="text/javascript">
			function showselect(str){
				var xmlhttp; 
				if (str=="")
				  {
				  document.getElementById("txtHint").innerHTML="";
				  return;
				  }
				if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					 {
					 document.getElementById("cliente").innerHTML=xmlhttp.responseText;
					 }
				  }
			  	xmlhttp.open("GET","db.php?c="+str,true);
				xmlhttp.send();
			}
		</script>
	</head>
	<body>
		<form action="">
			<select name="customers" onchange="showselect(this.value)">
				<?php include "populartipos.php" ?>
			</select>
		</form>
		<div id="cliente">
			<select name="2">
			</select>
		</div>
	</body>
</html>
