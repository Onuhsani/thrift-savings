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
				<form method="post" action="{{ route('register') }}">
                    @csrf

                    @if($errors->any())

                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>

                    @endforeach

                    @endif
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="name" id="name" placeholder="Name" required="">
          <input type="text" name="username" id="username" placeholder="Username" required="">
					<input type="email" name="email" id="email" placeholder="Email" required="">
					<input type="password" name="password" id="password" placeholder="Password" required="">
                    
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password" required="">
					
                    <a style="color:white; margin-left:60px; float:center" class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                    </a>

                    <button>
                        {{__('Register')}}
                    </button>
				</form>
			</div>

	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>