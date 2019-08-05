<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Employee Records</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/customemprec.css">
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
        </head>
        <body class='whole all'>
        
        
        <div class="pos-1">
        <center><h4 class='mains'>Employee List</h4></center>
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                

                <div class="card-body">
                    <table  class='mytable' id='myTable'>
                    <thead>
                    <tr>
                <th>Username</th>
                <th>E-mail</th>
                <th>Edit</th>
                <th>Delete</th>

                
                
            </tr>
                    </thead>
                    <tbody>
					@foreach($data as $emp)

					<tr>

					<td >{{$emp->username}}</td>
					<td>{{$emp->email}}</td>
                    
                    <td>
                    <form action="/emp-profile/{{ $emp->user_id }}" method='get' >
                    
                    
                    
                    
                    <button type='submit' class="btn btn-primary">
                    <span class="glyphicon glyphicon-remove"></span>Edit Profile
                    </button>
                    </form>
                    </td>


                    <td>
                    
                    
                    <form action="/deleteadmin/{{ $emp->user_id }}" method='post' >
                    
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    
                    
                    <button type='submit' class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove"></span> Delete
                    </button>
                    </form>

                    

                    </td>

                    
                    </tr>
					@endforeach
					</tbody>

                    </table>

                </div>
                </div>
				<br/><br/>
                <a href="{{route('emp.registerform')}}" class="btn btn-success">Add New Employee</a>
                <a href="{{route('user.home')}}" class="btn btn-primary">Back</a>
                        
				</div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );



</script>

<style>
h4 {
	margin: 1em 0 0.5em 0;
	color: #343434;
	font-weight: normal;
	font-family: 'Ultra', sans-serif;   
	font-size: 36px;
	line-height: 42px;
	text-transform: uppercase;
	text-shadow: 0 2px white, 0 3px #777;
}
.all{
    background: #ADA996;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
</style>
</html>
