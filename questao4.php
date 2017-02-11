<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>API REST</title>
        	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        	<script>
			$(document).ready(function(){
			
				$.ajax({
					type:'get',		
					dataType: 'json',	
					url: 'http://webforall.live/api/relatorio.php',
					success: function (result, jqXHR) {										
									  									  
									  if (result==1){
											
											 $("#resultado").html("<span style='color:#fff;'><strong>ERRO NO SERVIDOR</strong></span>");
											
									  }else{
											
											 $("#resultado").html(result);
									  }
									   
						 
									},
									error: function (jqXHR, status) {
										
										$("#resultado").html("<span style='color:#fff;'><strong>ERRO NO SERVIDOR</strong></span>");
									},
				});
			});
			
			function incluirNova(){
				
				$.ajax({
					type:'get',		
					dataType: 'json',	
					url: 'http://webforall.live/api/frmNova.php',
					success: function (result, jqXHR) {
																			  
									  if (result==1){
											
											 $("#resultado").html("<span style='color:#fff;'><strong>ERRO NO SERVIDOR</strong></span>");
											
									  }else{
											
											 $("#resultado").html(result);
									  }
									   
						 
									},
									error: function (jqXHR, status) {
										
										$("#resultado").html("<span style='color:#fff;'><strong>ERRO NO SERVIDOR</strong></span>");
									},
				});
			}	
			
			function editaTarefa(id){
				
				$.ajax({
					type:'get',		
					dataType: 'json',	
					url: 'http://webforall.live/api/editaTarefa.php?id='+id,
					success: function (result, jqXHR) {
									  
									  if (result==1){
											
											 $("#resultado").html("<span style='color:#fff;'><strong>ERRO NO SERVIDOR</strong></span>");
											
									  }else{
											
											 $("#resultado").html(result);
									  }
									   
						 
									},
									error: function (jqXHR, status) {
										
										$("#resultado").html("<span style='color:#fff;'><strong>ERRO NO SERVIDOR</strong></span>");
									},
				});
			}	
			
			
			function gravaNova(titulo,descricao,prioridade){
		
				$.ajax({
					type:'get',		
					dataType: 'json',	
					url: 'http://webforall.live/api/gravaNovo.php?titulo='+titulo+'&descricao='+descricao+'&prioridade='+prioridade,
					success: function (result, jqXHR) {},
					error: function (jqXHR, status) {},
				});location.reload();
			}	
	
			function deletaTarefa(id){
		
				$.ajax({
					type:'get',		
					dataType: 'json',	
					url: 'http://webforall.live/api/deletaTarefa.php?id='+id,
					success: function (result, jqXHR) {},
					error: function (jqXHR, status) {},
				});location.reload();
			}	
	
			function gravaEdicao(id,titulo,descricao,prioridade){
		
				$.ajax({
					type:'get',		
					dataType: 'json',	
					url: 'http://webforall.live/api/gravaEdicao.php?id='+id+'&titulo='+titulo+'&descricao='+descricao+'&prioridade='+prioridade,
					success: function (result, jqXHR) {},
					error: function (jqXHR, status) {},
				});location.reload();
			}	
	
			</script>
	</head>
	<body>
	<div style='background-color:#F9F9F9; border:1px solid #BDBDBD;padding:12px;font-family:tahoma;'>
		<div id="resultado"></div>
		
	</div>
	</body>
</html>