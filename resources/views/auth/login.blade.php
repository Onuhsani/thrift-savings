<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Form</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post" action="{{ route('login') }}">
                    @csrf
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" id="email" placeholder="Email" required="">
					<input type="password" name="password" id="password" placeholder="Password" required="">
                  
                    <a style="color:white; margin-left:60px; float:center" class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Don\'t have an account?') }}
                    </a>

                    <button>
                        {{__('Login')}}
                    </button>
				</form>
			</div>

	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>