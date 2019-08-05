<!DOCTYPE html>
<html lang="en">
<head>
    @foreach($data1 as $emp)
	<title>{{$emp->first_name}} Profile</title>
	<meta charset="UTF-8">
	<meta name="description" content="Civic - CV Resume">
	<meta name="keywords" content="resume, civic, onepage, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon   
	<link href="../img/favicon.ico" rel="shortcut icon"/>--> 

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/flaticon.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.css"/>
	<link rel="stylesheet" href="../css/magnific-popup.css"/>
	<link rel="stylesheet" href="../css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section start -->
	<header class="header-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4">
					<div class="site-logo">
						<h2><a href="#">Employee Information</a></h2>
						<p>Basic/Official/Financial</p>
					</div>
				</div>
				<div class="col-md-8 text-md-right header-buttons">
					<a href="{{route('admin.records')}}" class="site-btn">BACK</a>
					<a href="#" class="site-btn">LOGOUT</a>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Hero section start -->
	<section class="hero-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-lg-6">
							
                            
                            <div class="hero-text">
								<h2>{{$emp->first_name}} {{$emp->last_name}}</h2>
								
							</div>
							<div class="hero-info">
								<h2>General Information</h2>
								<ul>
									<li><span>SSN : </span>{{$emp->ssn}}</li>
									<li><span>Name : </span>{{$emp->first_name}} {{$emp->last_name}}</li>
									<li><span>Date of Birth : </span>{{$emp->dob}}</li>
									<li><span>Address : </span>{{$emp->address_line_1}},{{$emp->address_line_2}}</li>
                                    <li><span>Phone Number : </span>{{$emp->phoneNumber}}</li>
								</ul>
                                <br/>
                                <div>
								<form action="/admin-basic-edit/{{ $emp->id }}" method='get'>
                                <button type='submit' class="btn btn-success btn-block"><span class="fa fa-edit"></span> Edit Basic Info </button>
                                </form>
								</div>
                                @endforeach
							</div>
                            <br><br>
                            <div class="hero-info">
                            @foreach($data2 as $emp2)
								<h2>Official information</h2>
								<ul>
									<li><span>Current Branch : </span>{{$emp2->obranch}}</li>
									<li><span>Department : </span>{{$emp2->dept}}</li>
									<li><span>Designation : </span>{{$emp2->des}}</li>
									
								</ul>
                                <br/>
                                <div>
								<form action="/admin-office-edit/{{ $emp2->id }}" method='get'>
                                <button type='submit' class="btn btn-success btn-block"><span class="fa fa-edit"></span> Edit Official Info </button>
                                </form>
								</div>
                                @endforeach
							</div>

						</div>
						<div class="col-lg-6">
							<figure class="hero-image">
								<img src="../img/hero.jpg" alt="5">
							</figure>

                            <div class="hero-info">
                            @foreach($data3 as $emp3)
								<h2>Financial Information</h2>
								<ul>
									<li><span>Fixed Allowances : </span>{{$emp3->fixed_allowances}}</li>
									<li><span>Fixed Deductions : </span>{{$emp3->fixed_deductions}}</li>
									<li><span>Bank             : </span>{{$emp3->bank}}</li>
									<li><span>Branch           : </span>{{$emp3->bbranch}}</li>
                                    <li><span>Account Number   : </span>{{$emp3->acc}}</li>
								</ul>
                                <br/>
                                <div>
								<form action="/admin-finance-edit/{{ $emp3->id }}" method='get'>
                                <button type='submit' class="btn btn-success btn-block"><span class="fa fa-edit"></span> Edit Financial Info </button>
                                </form>
								</div>
                                @endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	

	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-2.1.4.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/magnific-popup.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/main.js"></script>
</body>
</html>