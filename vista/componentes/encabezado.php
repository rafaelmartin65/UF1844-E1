<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title>Cabecera fija</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script defer src="principal.js"></script>
	<script>
		// -----------------------------------------------
		// Evento selección menu
		// -----------------------------------------------
		document.addEventListener("DOMContentLoaded", function() {
			// Obtener todos los elementos de enlace del menú
			var links = document.querySelectorAll(".nav-link");

			// Iterar sobre cada enlace
			links.forEach(function(link) {
				// Agregar un evento de clic a cada enlace
				link.addEventListener("click", function(event) {
					// Evitar el comportamiento predeterminado de los enlaces
					event.preventDefault();

					// Quitar la clase 'active' de todos los enlaces
					links.forEach(function(item) {
						item.classList.remove("active");
					});

					// Agregar la clase 'active' al enlace actual
					this.classList.add("active");
				});
			});
		});
	</script>
	<link rel="stylesheet" href="./css/styles.css">
</head>

<body>

	<div class="container">
		<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
			<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
				<svg class="bi me-2" width="40" height="32">
					<use xlink:href="#bootstrap"></use>
				</svg>
				<span class="fs-4"><img src="./logos/zalandologo.png" alt="" width="200"></span>
			</a>

			<ul class="nav nav-pills">
				<li class="nav-item"><a href="#" id="home" class="nav-link active" aria-current="page">Home</a></li>
				<li class="nav-item"><a href="#" id="ropa" class="nav-link">Ropa</a></li>
				<li class="nav-item"><a href="#" id="zapatos" class="nav-link">Zapatos</a></li>
				<li class="nav-item"><a href="#" id="deporte" class="nav-link">Deporte</a></li>
				<li class="nav-item"><a href="#" id="complementos" class="nav-link">Complementos</a></li>
			</ul>
		</header>
	</div>
	<nav class="navbar navbar-light bg-light">
		<div class="container-fluid">
			<!-- <a class="navbar-brand"><img src="./logos/zalandologo.png" alt="" width="200"></a> -->
			<form action="" id="filtro" method="post">
				<h5>Buscar Producto</h5>
				<select name="familias" id="familias"></select>
			</form>
			<!-- <form class="d-flex">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				
				<button class="btn btn-outline-success" type="submit">Search</button>
			</form> -->
		</div>
	</nav>

	<div class="container-fluid bg-custom-orange">
		<div class="row justify-content-center">
			<div class="col-6">
				<h2 class="text-center">Listado de Productos</h2>
			</div>
		</div>
	</div>

	<!-- <header class="container-fluid text-bg-primary">

		<div class="row">
			<div class="col">

			</div>
			<div class="col-12">

				<p class="fs-6">Productos</p>
			</div>
			<nav class="col-3">
				<ul class="list-group list-group-horizontal">
					<li class="list-group-item"><a id="vinculo_index" href="../index.php">Inicio</a></li>
					<li class="list-group-item"><a href="#">Acerca de</a></li>
					<li class="list-group-item"><a href="#">Contacto</a></li>
				</ul>
			</nav>
		</div>
	</header> -->
</body>

</html>