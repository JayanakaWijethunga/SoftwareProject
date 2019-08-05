<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<head>
    <title>Login Here</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Key Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/mystyle.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->
	
	<!-- Google fonts -->
	<link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
	<!-- Google fonts -->

</head>
<!-- //Head -->
<!-- Body -->

<body>

<section class="main">
	<div class="layer">
		
		<div class="bottom-grid">
			<div class="logo">
				<h1> <a href="#"><span class="fa fa-sign-in"></span> Welcome to Payroll System</a></h1>
			</div>
			<div class="links">
				<ul class="links-unordered-list">
					<li class="active">
						<a href="#" class="">Login</a>
					</li>
					<li class="">
						<a href="#" class="">About Us</a>
					</li>
					<li class="">
						<a href="#" class="">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="content-w3ls">
			<div class="text-center icon">
				<span class="fa fa-user"></span>
			</div>
			<div class="content-bottom">
				<form action="{{ route('login') }}" method="post">
                @csrf
                        <div class="">
                        @if ($errors->first('email'))
                                        <span class="showerror align-center" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                        @endif
                        </div>
					<div class="field-group">
						<span class="fa fa-user" aria-hidden="true"></span>
						<div class="wthree-field">
                        <input name="email" id="email" class="form-control @error('email') is-invalid @enderror" type="text" value="{{ old('email') }}" placeholder="E-mail">
                        
                        </div>
					</div>
                        
                    @error('password')
                            <span class="showerror invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror

					<div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" autocomplete="current-password">

                       
						</div>
					</div>
					<div class="wthree-field">
						<button type="submit" class="btn">Sign in</button>
					</div>
					<ul class="list-login">
						<li class="switch-agileits">
							<label class="switch">
                            <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
								<span class="slider round"></span>
								Remember me
							</label>
						</li>
						<li>
							<a href="{{ route('password.request') }}" class="text-right">forgot password?</a>
						</li>
						<li class="clearfix"></li>
					</ul>
					
				</form>
			</div>
		</div>
		<div class="bottom-grid1">
			<div class="links">
				<ul class="links-unordered-list">
					<li class="">
						<a href="#" class="">About Us</a>
					</li>
					<li class="">
						<a href="#" class="">Privacy Policy</a>
					</li>
					<li class="">
						<a href="#" class="">Terms of Use</a>
					</li>
				</ul>
			</div>
			
		</div>
    </div>
</section>

</body>
<!-- //Body -->
</html>
