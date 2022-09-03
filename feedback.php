<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container pt-5">
		<div class="row bg-light">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<form action="feedinsert.php" method="POST">
					<div class="container-sm pt-5">
						<div class=" p-5">
							<h4 class="text-center">feedback</h4>
							<br>
							<div class="row">
								<div class="form-group">
								  <textarea class="form-control" id="comment" rows="3" name="comment" placeholder="Enter comment....."></textarea>

								</div>
							</div><br>
							
							<div class="">
								<button type="submit" class="btn btn-primary " name="submit">submit</button>
							</div><br>
							
						</div>
					</div>
				</form>
			</div>	
			<div class="col-sm-4"></div>		
		</div>
	</div>

</body>
</html>