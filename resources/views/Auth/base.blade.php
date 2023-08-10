<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/login/log.css') }}">
</head>

<body>
    <div class="box">
        <div class="form">


            @yield('form')
				<h2>Connexion</h2>
                @yield('hint')
				@if (Session::has('fail'))
                    <p style="text-align: center; color:red; margin-top:10px; padding-bottom: 9px; border-bottom:1px solid aqua">
                        {{Session::get('fail')}}
                    </p>
                @endif
				@csrf
				<div class="inputBox">
					<input type="text" name="uname" required>
					<span>Identifiant @yield('indication') </span>
					<i></i>
				</div>
				<div class="inputBox">
					<input type="password" name="pass" required>
					<span>Mot de passe</span>
					<i></i>
				</div>
				<div class="links">
					<a href=""></a>
					<a href="">Mot de passe oubli&eacute;</a>
				</div>
				<input type="submit" value="Connexion">
			</form>

        </div>
    </div>
</body>

</html>
