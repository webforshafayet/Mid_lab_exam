<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>content  Details</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <center>
    <h1>content Details</h1>
    <a href="/home/contentlist"> Back</a>


			<table>
                <tr>
					<td colspan="2">
						<img src="{{asset('/upload')}}/{{$user['image']}}" width="100px" height="100px"> </td>
				</tr>
				<tr>
					<td>content: </td>
					<td>{{$user['productname']}}</td>
				</tr>
				<tr>
					<td>Catagory</td>
					<td>{{ $user['catagory']}}</td>
				</tr>

                <tr>
					<td>details</td>
					<td>{{ $user['details'] }}</td>
				</tr>
				<tr>
					<td>status</td>
					<td>{{ $user['status'] }}</td>
				</tr>
			</table>
        </center>
</body>
</html>
