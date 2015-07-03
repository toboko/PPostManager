<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/dropzone.css">
	<!-- Latest compiled and minified jQuery -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<!-- Zoomwall -->
	<script type="text/javascript" src="./js/zoomwall.js"></script>
	<!-- Dropzone - Upload -->
	<script type="text/javascript" src="./js/dropzone.js"></script>
	<!-- Ajax function -->
	<script type="text/javascript" src="./js/jfunction.js"></script>
	<!-- Effects -->
	<script type="text/javascript" src="./js/effect.js"></script>
</head>
<body onload="tableUpdate()">
	<div class="row">
		<!-- Left Column -->
		<div class="col-xs-4">
			<!-- Action -->
			<div class="list-group">
				<a href="#Create" id="postCreate" class="list-group-item active">Create New Post</a>
				<a href="#Modify" id="postModify" class="list-group-item ">Modify</a>
				<a href="#Delete" id="postRemove" class="list-group-item ">Delete</a>
			</div>
			<!-- Images -->
			<div class="list-group">
				<a href="#Image" id="ph_image" class="list-group-item list-group-item-info" data-toggle="modal" data-target=".bs-example-modal-lg">Images</a>
			</div>	
			<!-- Upload -->
			<form action="./php/upload.php" class="dropzone"></form>
			<!-- Log -->
			<div id="success"></div>
			<!-- Old Posts -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-8">
							<h3 class="panel-title">Posts</h3>
						</div>
						<div class="col-md-4">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Select Table <span class="caret"></span>
								</button>
								<ul id="tableView" class="dropdown-menu"></ul>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div id="postView" class="list-group"></div>
				</div>
			</div>
		</div>
		<!-- Manage -->
		<div class="col-xs-8" id="manage">
			<input type="hidden" id="idPost" name="idPost" value="">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Manage your posts</h3>
				</div>
				<div class="panel-body">
					<input id="titleInsert" type="text" class="form-control" placeholder="Title">
					<textarea 
						id="postInsert" 
						class="form-control"
						placeholder="Post"
						draggable="false"></textarea>
				</div>
			</div>
		</div>
		<!-- Preview -->
		<div class="col-xs-8" id="preview">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Preview</h3>
				</div>
				<div id="postShow" class="panel-body"></div>
			</div>
		</div>
	</div>
	<!-- Images Preview -->
	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg">
			<div id="zoomwall" class="modal-content zoomwall"></div>
		</div>
	</div>
</body>
</html>

