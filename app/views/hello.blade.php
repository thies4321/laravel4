<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div>
		<h1>Table</h1>
                
                
                    <table style="width:80%; margin-left: 10%;">
                        <thead>
                        <td>id</td>
                        <td>name</td>
                        <td>surname</td>
                        <td>M/V</td>
                        </thead>
                        @foreach ($results as $result)
                        <tr> 
                          <td>{{$result->id}}</td>
                          <td>{{$result->name}}</td> 
                          <td>{{$result->surname}}</td>
                          <td>{{$result->sex}}</td>
                        </tr>
                        @endforeach
                      </table>
                 
	</div>
</body>
</html>
