<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width,initial-scale=1">
	    <title>success</title>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- google font -->
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	    <style>
			body{
				margin:0;
				padding:0;
				height:100vh;
				width:100vw;
				overflow-x:hidden;
				background-image: linear-gradient(to top, rgba(0, 30, 75, 0), rgba(0, 0, 0, 0.7)), url("https://images.pexels.com/photos/230976/pexels-photo-230976.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
				/* background:url("https://images.pexels.com/photos/230976/pexels-photo-230976.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940") no-repeat; */
				background-size:cover;
				background-position:center;
			}
			.navbar a{
				font-size:2em;
				font-weight:400;
				font-family: 'Lobster', cursive;
				letter-spacing:3px;
				color:#fff;
			}
	    	h1{
	    		color:#fff;
	    	}
	    	.record_add{
	    		border: 1px solid #ccc;
	    		margin-top: 50px;
	    		border-radius: 5px;
	    	}
            .record_add .btn{
                padding:10px 30px;
                margin-bottom:10px;
                float:right;
            }
	    </style>
    </head>
    <body>
		<!-- navbar -->
		<nav class="navbar">
			<a class="navbar-brand" href="../index.php">FlightInfo.</a>
		</nav>
		<!-- success message -->
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-sm-offset-1 col-sm-10 record_add">
    				<h1>Record Added</h1>
    				<div class="alert alert-success">Record added successfully!
    				</div>
                    <form action="../index.php">
                        <button class="btn btn-primary btn-lg" type="submit">Back</button>
                    </form>
    			</div>
    		</div>
    	</div>
    </body>
</html>



























<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Record submitted</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>
    <div class="row">
        <div class="container">
            <h2>record submitted</h2>
        </div>
    </div>
    
</body>
</html> -->