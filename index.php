<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script src="./js/jquery-2.1.4.min.js"></script>
	<script src="./js/jfunction.js"></script>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body onload="postView();tableUpdate();">
	<div class="row">
		<!-- Left Column -->
		<div class="col-xs-4">
			<!-- Action -->
			<div class="list-group">
				<a href="#" class="list-group-item active" onclick="postCreate();">Create New Post</a>
				<a href="#" class="list-group-item " onclick="postModify();">Modify</a>
				<a href="#" class="list-group-item " onclick="postRemove();">Delete</a>
			</div>
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
								Select Table<span class="caret"></span>
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
					<textarea id="postInsert" class="form-control"  placeholder="Post" onkeyup="parseContent(this.value)"></textarea>
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
</div>
</body>
</html>

