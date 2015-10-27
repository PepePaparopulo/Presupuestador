<h2>Costo estimado</h2>
<fieldset> 
	<?php
	$costoTotal = 0;
	function calculoCosto($precio,$precioCalculado){
		$costo = $precio;
		$costoAux = $precioCalculado;
		$costo = $costo + $costoAux;
		
		return $costo;
	}
	if(isset($_GET["negocio"])){
		foreach ($_GET['negocio'] as $negocio) {
			switch ($negocio) {
								case 'Empresa':
									$costoTotal = calculoCosto(10,$costoTotal);
									break;
								case 'Industria':
									$costoTotal = calculoCosto(10,$costoTotal);
									break;
								case 'Emprendimiento':
									$costoTotal = calculoCosto(10,$costoTotal);
									break;	
								default:
									$costoTotal = calculoCosto(0,$costoTotal);
									break;
			}				
		}
	}		
	if(isset($_GET["servicio"])){
		foreach ($_GET['servicio'] as $servicio) {
			switch ($servicio) {
								case 'Pagina basica':
									$costoTotal = calculoCosto(20,$costoTotal);
									break;
								case 'Web completa':
									$costoTotal = calculoCosto(20,$costoTotal);
									break;
								case 'Aplicacion movil':
									$costoTotal = calculoCosto(20,$costoTotal);
									break;	
								case 'Sistema':
									$costoTotal = calculoCosto(20,$costoTotal);
									break;
								case 'Actualizaciones de sistema':
									$costoTotal = calculoCosto(20,$costoTotal);
									break;
								case 'e-commerce':
										$costoTotal = calculoCosto(20,$costoTotal);
									break;								
								default:
									$costoTotal = calculoCosto(0,$costoTotal);									
									break;
			}				
		}
	}		
	if(isset($_GET["reqDes"])){
		foreach ($_GET['reqDes'] as $requerimientosDesarrollo) {
			switch ($requerimientosDesarrollo) {
								case 'Diseño de identidad':
									$costoTotal = calculoCosto(30,$costoTotal);
										break;
								case 'Generar contenido':
									$costoTotal = calculoCosto(30,$costoTotal);
										break;
								case 'Estudio de usabilidad - UX':
									$costoTotal = calculoCosto(30,$costoTotal);
										break;
								case 'Tecnologia especifica':
									$costoTotal = calculoCosto(30,$costoTotal);
										break;
								case 'Seguridad':
									$costoTotal = calculoCosto(30,$costoTotal);
										break;
								default:
									$costoTotal = calculoCosto(0,$costoTotal);									
										break;
			}				
		}
	}
	if(isset($_GET["reqWeb"])){
		foreach ($_GET['reqWeb'] as $requerimientosWeb) {
			switch ($requerimientosWeb) {
								case 'Auto administrable':
									$costoTotal = calculoCosto(40,$costoTotal);
									break;
								case 'Mas de un idioma':
									$costoTotal = calculoCosto(40,$costoTotal);
									break;
								case 'Integracion en redes sociales':
									$costoTotal = calculoCosto(40,$costoTotal);
									break;	
								case 'Logueo para usuarios':
									$costoTotal = calculoCosto(40,$costoTotal);
									break;								
								default:
									$costoTotal = calculoCosto(0,$costoTotal);									
									break;
			}				
		}
	}		
	if(isset($_GET["cantUsr"])){
		foreach ($_GET['cantUsr'] as $cantidadUsuarios) {
			switch ($cantidadUsuarios) {
								case 'Baja(menor a 10 diarios)':
									$costoTotal = calculoCosto(50,$costoTotal);
									break;
								case 'Media(50 diarios)':
									$costoTotal = calculoCosto(50,$costoTotal);
									break;
								case 'Alta(100 diarios)':
									$costoTotal = calculoCosto(50,$costoTotal);
									break;	
								case 'Muy alta(mas de 100 diarios)':
									$costoTotal = calculoCosto(50,$costoTotal);
									break;								
								default:
									$costoTotal = calculoCosto(0,$costoTotal);									
									break;
			}				
		}
	}		
	if(isset($_GET["pago"])){
		foreach ($_GET['pago'] as $Pago) {
			switch ($Pago) {
								case 'Pago unico':
									$costoTotal = $costoTotal * 0.85;
									break;
								case 'Pago en cuotas':
									$costoTotal = $costoTotal * 1.35;
									break;
								case 'Monto fijo mensual':
									$costoTotal = $costoTotal;
									break;
								case 'Presupuesto a medida':
									$costoTotal = $costoTotal;
									break;
								default:
									$costoTotal = $costoTotal;									
									break;
			}				
		}

	}	
	echo $costoTotal;			
	?>
</fieldset>