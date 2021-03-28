<!DOCTYPE html>
<html>
<head>
<title>@yield('titulo')</title>


<link href="{{asset('/jquery-ui/jquery-ui.css')}}" rel="stylesheet">
<link href="jquery-ui.css" rel="stylesheet">
<!-- for-mobile-apps -->
<link href="https://unpkg.com/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="{{asset('css/pignose.layerslider.css')}}" rel="stylesheet" type="text/css" media="all" />

<script src="https://kit.fontawesome.com/b6905ef55a.js" crossorigin="anonymous"></script>
<!-- //pignose css -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<!-- //js -->
<!-- cart -->
    <script src="{{asset('js/simpleCart.min.js')}}"></script>
<!-- cart -->
<!-- for bootstrap working -->
    <script type="text/javascript" src="{{asset('js/bootstrap-3.1.1.min.js')}}"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
</head>
<body>
<!-- header -->
<div class="header">
    <div class="container">
        <ul>
            <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Ahorra tiempo y ve por lo seguro</li>
            <li><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Crea tu lista</li>
            <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@smartshop.com</a></li>
        </ul>
    </div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
    <div class="container">
        <div class="col-md-3 header-left">
            <h1><a href="index.html"><img src="{{asset('images/logo3.jpg')}}"></a></h1>
        </div>
        <div class="col-md-6 header-middle">
            <form action="/busqueda" method="GET">
                <div class="search">
                    <input name="query" type="search" value="Buscar"  id="search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Buscar';}" required="">
                </div>
              {{--   <div class="section_room">
                    <select id="country" onchange="change_country(this.value)" class="frm-field required">
                        <option value="null">All categories</option>
                        <option value="null">Electronics</option>
                        <option value="AX">kids Wear</option>
                        <option value="AX">Men's Wear</option>
                        <option value="AX">Women's Wear</option>
                        <option value="AX">Watches</option>
                    </select>
                </div> --}}
                <div class="sear-sub">
                    <input type="submit" value=" ">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="col-md-3 header-right footer-bottom">

        </div>


        <div class="clearfix"></div>
    </div>
</div>
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item me"><a class="menu__link" href="/">Inicio <span class="sr-only">(current)</span></a></li>

					<li class=" menu__item"><a class="menu__link" href="/departamentos">Departamentos</a></li>
					<li class=" menu__item"><a class="menu__link" href="/sucursales">Sucursales</a></li>
					<li class=" menu__item"><a class="menu__link" href="/mi-lista">Mi lista</a></li>
                    <li class=" menu__item"><a class="menu__link" href="/nosotros">Nosotros</a></li>
                    <li class= " menu__item"><a  class="menu__link" href="/dashboard">Perfil</a>
                        <ul class="submenu">
                             <li>

                                <a href="/login">Login</a>

                            </li>
                            <li><a href="/register">registro</a></li>
                        </ul>
                    </li>

				  </ul>
				</div>
			  </div>
			</nav>
		</div>
		<div class="top_nav_right">
			<div class="cart box_1">
						<a href="checkout.html">
							<h3> <div class="total">
							{{-- 	<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i> --}}
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> productos)</div>

							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Mi lista</a></p>

			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

{{-- contenido --}}
<div class="relleno">
    @yield('contenido')
</div>



<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><img src="{{asset('images/logo3.jpg')}}" alt=" " /></a></h2>
          <p>Conosotros conseguiras grandes ahorros en la despensa que hagas, suscribete a la lista de usuarios preferidos para obtener ofertas exclusivas de tus tiendas favoritas.</p>
		</div>
		<div class="col-md-9 footer-right">
			<div class="col-sm-6 newsleft">
				<h3>Suscribete a nuestras ofertas!</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form>
					<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Enviar">
				</form>
			</div>
			<div class="clearfix"></div>
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Información</h4>
					<ul>
						<li><a href="/">Inicio</a></li>
						<li><a href="/departamentos">Departamentos</a></li>
						<li><a href="/sucursales">Sucursales</a></li>
						<li><a href="/mi-lista">Mi lista</a></li>
						<li><a href="/nosotros">Nosotros</a></li>
                        <li><a href="/login">Inicio de sesión</a></li>
                        <li><a href="/register">Registro</a></li>
					</ul>
				</div>

				<div class="col-md-4 sign-gd-two">
					<h4>Contacto</h4>
					<ul>

						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@smartshop.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Teléfono: 999 812 3124</li>
					</ul>
				</div>
	{{-- 			<div class="col-md-4 sign-gd flickr-post">
					<h4>Flickr Posts</h4>
					<ul>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
						<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
					</ul>
				</div> --}}
				<div class="clearfix"></div>
			</div>
		</div>
        <div class="clearfix"></div>
        <p class="copy-right">©Todos los derechos reservados a Smartshop | Desarrollado por <a href="#">Carivelo</a> |<a href=""> Aviso de privacidad</a></p>
      </div>
</div>
<!-- //footer -->
<!-- login -->
		{{-- 	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>

										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div> --}}
<!-- //login -->

<script src="{{asset('/jquery-3.6.0.js')}}"></script>
<script src="{{asset('/jquery-iu/jquery-ui.js')}}"></script>
{{-- <script src="external/jquery/jquery.js"></script> --}}

<script>

    var cursos = ['html','css','bootstrap'];

    $('#search').autocomplete({
        source: cursos;
    });
</script>
</body>
</html>
