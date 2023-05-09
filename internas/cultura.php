<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atractivos Turisticos</title>
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
<header class="cabeceraPrincipal" id="inicio">
	<section class="logo">
		<img src="../images/logotipo.png" title="Logotipo de Atractivos turisticos">
	</section>
	<section class="buscador">
		<input type="text" placeholder="Buscar...">
	</section>
</header>
<nav class="menuPrincipal">
	<a href="../index.html">Inicio</a>
	<a href="../index.html#atractivos">Atractivos</a>
	<a href="">Gastronomía</a>
	<a href="">Cultura</a>
	<a href="../index.html#hoteles">Hoteles</a>
	<a href="../index.html#contactos">Contactos</a>
</nav>

<section class="contenedor">
	<div class="espacio"></div>
	<h2 class="titulosH2" id="atractivos">FORMULARIO DE REGISTRO</h2>
	<form action="validar.php" method="post" class="formulario">
		<div class="box2">
			<div class="grupoForm">
				<label for="nombres">Nombres</label>
				<input type="text" name="nombre" id="nombres" placeholder="Ingrese sus nombres completos" required>
			</div>
			<div class="grupoForm">
				<label for="apellidos">Apellidos</label>
				<input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos completos">
			</div>
			<div class="grupoForm">
				<label for="correo">Correo</label>
				<input type="email" name="correo" id="correo" placeholder="Ingrese su correoelectronico">
			</div>
			<div class="grupoForm">
				<label for="fecha">Fecha de Nacimiento</label>
				<input type="date" name="fecha" id="fecha" placeholder="Ingrese su fecha de nacimeinto">
			</div>
		</div>
		<div class="box2">
			<div class="grupoForm">
				<label for="pais">País</label>
				<select name="pais" id="pais">
				  <option value="1">Ecuador</option>
				  <option value="2">Perú</option>
				  <option value="3">Colombia</option>
				  <option value="4">Argentina</option>
				</select>
			</div>
			<div class="grupoForm">
				<label for="estadoCivil">Estado Civil</label>
				<input type="radio" id="divorciado" name="estadoCivil" value="divorciado"><label for="divorciado">Divorciado</label>
				<input type="radio" id="soltero" name="estadoCivil" value="Soltero"><label for="soltero">Soltero</label>
				<input type="radio" id="casado" name="estadoCivil" value="Casado"><label for="casado">Casado</label><br>
			</div>
			<div class="grupoForm">
				<label for="correo">Areas de interés</label>
				<section class="horizontal">
					<input type="checkbox" id="hoteles" name="hoteles" value="hoteles">
					<label for="hoteles"> Hoteles</label>
					<input type="checkbox" id="gastronomia" name="gastronomia" value="gastronomia">
					<label for="gastronomia"> Gastronomía</label>
					<input type="checkbox" id="medioAmbiente" name="medioAmbiente" value="medioAmbiente">
					<label for="medioAmbiente"> Medio Ambiente</label>
				</section>
			</div>
			<div class="grupoForm">
				<label for="dni">Céduña / DNI</label>
				<input type="number" name="dni" id="dni" >
			</div>
			<div class="grupoForm">
				<button class="boton1" type="submit">Guardar</button>
			</div>
		</div>
	</form>
	
</section>
<div class="espacio"></div>

<footer class="piePagina" id="contactos">
	<section> 
		<img src="../images/logotipo2.png">
		<p>Derechos Reservados 2023</p>
	</section>
	<section>
		<ul>
			<li><a href="#inicio">Inicio</a></li>
			<li><a href="#atractivos">Atractivos</a></li>
			<li><a href="">Gastronomía</a></li>
			<li><a href="">Cultura</a></li>
			<li><a href="#hoteles">Hoteles</a></li>
			<li><a href="#contactos">Contactos</a></li>
		</ul>
	</section>
	<section>
		<p>992348067<br>
			0991623447<br>
			mailto:info@sabirm.com<br>
			Loja - Ecuador</p>
	</section>
</footer>
</body>
</html>