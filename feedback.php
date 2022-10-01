<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-3.6.1.js"></script>
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
								  <textarea class="form-control" id="comment" rows="3" name="comment" placeholder="Enter comment....." required></textarea>

								</div>
							</div><br>
							
							<div class="">
								<button type="submit" class="btn btn-primary " name="submit" data-toggle="modal"data-bs-target="#staticBackdrop">submit</button>
							</div><br>
							
						</div>
					</div>
				</form>
			</div>	
			<div class="col-sm-4"></div>		
		</div>
	</div>

	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h1 class="text-center fw-semibold ">Thank you..!!</h1><br>
					<p>"Thank you for putting in the give feedback during this busy time.</p>
					
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function(){
			<?php if (isset($_GET['msg'])): ?>
				$('#staticBackdrop').modal('show');
			<?php endif ?>
			$(document).on('click', '.btn-close', function(event) {
				//alert();
				window.location.replace("home.php");
			});
		});
	</script>

</body>
</html>