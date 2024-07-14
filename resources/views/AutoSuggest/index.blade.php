<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
	<div class="container text-center">
		<h1>Stack Tips</h1>
		<h1>Laravel Auto Suggest Search</h1>
		<input type="text" id="searchInput" class="form-control">		
	</div>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>
<script type="text/javascript">
	$(function() {
		$("#searchInput").autocomplete({
			source:function(request,response){
				$.getJSON("search",{
					query: request.term
				},function(data){
					response($.map(data,function(item){
						return {
							value: item.name
						}
						}))
				}
				)
			}
		});
	});
</script>
</body>
</html>