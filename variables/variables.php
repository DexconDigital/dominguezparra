<?php

$nombre_inmobiliaria = "Inmobiliaria Alejandro Dominguez Parra - Bucaramanga";

//logo empresa
$logo_empresa = [
	$color =[
		"src" => "images/logo.png",
		"alt" => "Logo Inmobiliaria Alejandro Dominguez Parra"
	],
];

// boton pse
$pse = [
	"link" => "",
	"src" => "images/pse.jpg",
	"alt" => "Pagos PSE",
];

// redes sociales
$redes_sociales = [
	"facebook" => [
		"link" => "https://www.facebook.com/Inmobiliaria-Alejandro-Dominguez-Parra-SA-166656196750046/?fref=ts",
		"icono" => "fab fa-facebook-f",
		"imagen" => "images/facebook.png"
	],
	"twitter" => [
		"link" => "https://twitter.com/idominguezparra",
		"icono" => "fab fa-twitter",
		"imagen" => "images/twitter.png"
	],
	// "youtube" => [
		// "link" => "https://www.youtube.com/channel/UC4B9gfls2D86RVCJCT-ceFQ/videos?view=0&shelf_id=0&sort=dd",
		// "icono" => "fab fa-youtube",
		// "imagen" => "images/youtube.png"
	// ],
];

//datos de contacto 
$datos_contacto = [
	"principal" =>[
		"nombre_sede" => "Sede Principal",
		"direccion" => [
			"direccion" => "Edificio Cámara de Comercio Local 216 – Bucaramanga",
			"icono" => "fas fa-map-marker-alt",
		],
		"telefono_fijo" => [
			"link"=> "0376520909",
			"imprimir" => "+57 (7) 652 0909",
			"icono" => "fas fa-phone",
		],
		// "celular" => [
			// "link"=> "+573505781268",
			// "imprimir" => "350 578 1268",
			// "icono" => "fas fa-mobile-alt",
		// ],
		 "whatsapp" => [
			"link"=> "https://api.whatsapp.com/send?phone=573505781268&text=&source=&data=",
			"imprimir" => "350 578 1268",
			"icono" => "fab fa-whatsapp",
		],
		"correo" => "principal@dominguezparra.com.co",
		"horario" => [
			"horario" => "Lunes a Viernes de 8:00 a.m. 12:00 am – 2:00 p.m. 6:00 p.m. <br/> Sábados de 8:30 a.m. 12:30 p.m.",
			"icono" => "fas fa-calendar-alt",
		],
	],
	"cabecera" => [
		"nombre_sede" => "Cabecera",
		"direccion" => [
			"direccion" => "Cll 42 #29-82  – Bucaramanga",
			"icono" => "fas fa-map-marker-alt",
		],
		"telefono_fijo" => [
			"link"=> "0376321212",
			"imprimir" => "+57 (7) 632 1212",
			"icono" => "fas fa-phone",
		],
		// "celular" => [
			// "link"=> "+573505781268",
			// "imprimir" => "350 578 1268",
			// "icono" => "fas fa-mobile-alt",
		// ],
		"whatsapp" => [
			"link"=> "https://api.whatsapp.com/send?phone=573505781268&text=&source=&data=",
			"imprimir" => "350 578 1268",
			"icono" => "fab fa-whatsapp",
		],
		"correo" => "cabecera@dominguezparra.com.co",
		"horario" => [
			"horario" => "Lunes a Viernes de 8:30 a.m. 12:30 a.m. – 2:30 p.m. 6:30 p.m. <br/> Sábados de 8:30 a.m. 12:30 p.m.",
			"icono" => "fas fa-calendar-alt",
		],
	],
	"cañaveral" => [
		"nombre_sede" => "Cañaveral",
		"direccion" => [
			"direccion" => "C.C. Cañaveral L-166 – Bucaramanga",
			"icono" => "fas fa-map-marker-alt",
		],
		"telefono_fijo" => [
			"link"=> "0376784848",
			"imprimir" => "+57 (7) 678 4848",
			"icono" => "fas fa-phone",
		],
		// "celular" => [
			// "link"=> "+573505781268",
			// "imprimir" => "350 578 1268",
			// "icono" => "fas fa-mobile-alt",
		// ],
		"whatsapp" => [
			"link"=> "https://api.whatsapp.com/send?phone=573505781268&text=&source=&data=",
			"imprimir" => "350 578 1268",
			"icono" => "fab fa-whatsapp",
		],
		"correo" => "canaveral@dominguezparra.com",
		"horario" => [
			"horario" => "Lunes a Viernes de 8:30 a.m. 12:30 a.m. – 2:30 p.m. 6:30 p.m. <br/> Sábados de 8:30 a.m. 12:30 p.m.",
			"icono" => "fas fa-calendar-alt",
		],
	],
];	

//logos aliados
$logos_aliados = [
	0 => "images/libertador.png",
	1 => "images/caja_social.png",
	2 => "images/fenalco.png",
	3 => "images/fianzacredito.png",
	4 => "images/lonja_santander.png",
];

//formularios aseguradoras
$formularios_aseguradoras = [
	0 => [
		'nombre' => 'El Libertador',
		'imagen' => 'images/libertador.png',
		'ruta' => 'http://www.ellibertador.co/wps/portal/el-libertador/home'
	],
	1 => [
		'nombre' => 'Banco Caja Social',
		'imagen' => 'images/caja_social.png',
		'ruta' => ''
	],
	2 => [
		'nombre' => 'Fenalco',
		'imagen' => 'images/fenalco.png',
		'ruta' => ''
	],
	3 => [
		'nombre' => 'Fianzacredito',
		'imagan' => 'images/fianzacredito.png',
		'ruta' => ''
	],
	4 => [
		'nombre' => 'Lonja Santander',
		'imagan' => 'images/lonja_santander.png',
		'ruta' => ''
	],
];

//imagenes slide home
$imagenes_slide_principal = [
	0 =>[
		'imagen' => 'images/slide_1.jpg',
		'alt' => 'Imagen carrusel principal'
	],
	1 => [
		'imagen' => 'images/slide_2.jpg',
		'alt' =>'Imagen carrusel principal'
	],
	2 => [
		'imagen' => 'images/slide_3.jpg',
		'alt' =>'Imagen carrusel principal'
	],
];

//textos quienes somos
$texto_quienes_somos = [
	"nosotros" => [
		"titulo" => "Nosotros",//en negrita
		"parrafos" => [
			0 => "Nuestra compañía fundada en 1930, siendo la de mayor tradición en la Ciudad continua como organización líder por sus modernos procesos  y agilidad en la consecución de calificados arrendatarios, ofreciendo servicios de calidad.",
			1 => "<span class='viñetas'>»</span>	Un grupo humano comprometido para atenderle con la mayor calidad y profesionalismo.",
			2 => "<span class='viñetas'>»</span>	Tres oficinas distribuidas estratégicamente en el área metropolitana para brindar atención integral y conseguir su mejor opción de vivienda.",
		],	
	],
	"mision" => [
		"titulo" => "Misión",//en negrita
		"parrafo" => "Somos una Empresa de tradición familiar que ofrece servicios inmobiliarios, brindando confianza a las personas y organizaciones de área metropolitana de Bucaramanga, destacándonos por nuestra eficiencia, solidez y reconocimiento en el sector.",
	],
	"vision" => [
		"titulo" => "Visión",//en negrita
		"parrafo" => "En los próximos 5 años nuestra Empresa familiar consolidara su liderazgo, incrementando su participación en el mercado con la apertura de nuevas sedes, la creación de alianzas estratégicas y la modernización de nuestros estándares de servicios, mediante el fortalecimiento tecnológico, la implementación y mantenimiento de un sistema de gestión de calidad, sustentado en un talento humano comprometido con las necesidades de nuestros clientes.",
	],
	"reconocimientos" => [
		"titulo" => "Reconocimientos",//en negrita
		"parrafos" => [
			0 => "Nuestra dedicación y profesionalismo, así como la vocación de servicio a la comunidad, nos han hecho acreedores a valiosos reconocimientos que nos honran y son un estimulo para continuar en nuestra labor. Entre estas distinciones se destacan:", 
			1 => "<span class='viñetas'>»</span> Botón 50 años de servicios profesionales (Federación Colombiana de Lonjas de Propiedad Raiz).", 
			2 => "<span class='viñetas'>»</span> Inmobiliaria del Año Medalla Socio Fundador (Lonja de Propiedad Raiz de Santander).",
			3 => "<span class='viñetas'>»</span> Mención Especial Cámara de Comercio",
			4 => "<span class='viñetas'>»</span> Orden al Mérito Comercial 'Grado de Oro' Aquileo Parra (Fenalco Santander).",
			5 => "<span class='viñetas'>»</span> Orden al Mérito del Subsidio Familiar 'Grado de Oro' (Comfenalco Santander).",
			6 => "<span class='viñetas'>»</span> Orden Ciudadano Meritorio categoria Gran Cruz Gobernación de Santander.",
			7 => "<span class='viñetas'>»</span> Orden Ciudad de Bucaramanga al Merito Empresarial, Industrial y Comercial (Consejo de Bucaramanga).",
			8 => "<span class='viñetas'>»</span> Orden de la Democracia Grado Cruz gran Oficial (Camara de Representantes)",
		],
	],
];


// imaganes varias
$imagenes = [
	"servicios" => [
		'imagen' => 'images/banner_servicios.jpg',
		'alt' => 'Imagen'
	],
	"nosotros" => [
		'imagen' => 'images/banner_nosotros.jpg',
		'alt' => 'Imagen'
	],
	"inmuebles" => [
		'imagen' => 'images/banner_inmuebles.jpg',
		'alt' => 'Imagen'
	],
	"detalle" => [
		'imagen' => 'images/banner_detalle_inmueble.jpg',
		'alt' => 'Imagen'
	],
	// "blog" => [
		// 'imagen' => 'images/banner_blog.png',
		// 'alt' => 'Imagen'
	// ],
	"contacto" => [
		'imagen' => 'images/banner_contacto.jpg',
		'alt' => 'Imagen'
	],
];

//iconos servicios
$iconos_servicios = [
	"arrendamientos" => "fas fa-sign",
	"ventas" => "fas fa-tags",
	"avaluos" => "fas fa-balance-scale",
	"asesoria" => "fas fa-handshake",
	"propiedad" => "fas fa-building",
	// "mantenimiento" => "",
];
	
//textos servicios
$texto_servicios = [
	"arrendamientos" => [
		"titulo" => "Arrendamientos",
		"parrafos" => [
		0 => "Nuestro Departamento de Arrendamientos ofrece importantes ventajes que permitirán a nuestro clientes disfrutar de una completa tranquilidad y seguridad.",
		1 => "<span class='viñetas'>»</span> Le cancelamos su renta, pague o no el arrendatario hasta que se produzca la entrega del inmueble, aún en el caso del proceso de restitución, el cual adelantamos por nuestra cuenta.",
		2 => "<span class='viñetas'>»</span> Atendemos el pago de sus cuotas de amortización en las corporaciones o entidades de crédito.",
		3 => "<span class='viñetas'>»</span> Cancelamos sus impuestos prediales, de valorización y servicios públicos mientras el inmueble se halle desocupado.",
		4 => "<span class='viñetas'>»</span> Entregamos y recibimos sus inmubles previo inventario detallado.",
		5 => "<span class='viñetas'>»</span> Cuidamos que a sus inmuebles se les hagan las reparaciones locativas necesarias, previa su autorización.",
		6 => "<span class='viñetas'>»</span> Le aseguramos los pagos de servicios públicos y cuotas de administración, en la cuantía que nos indique.",
		7 => "<span class='viñetas'>»</span> Publicitamos sus inmuebles para arrendarlos a la menor brevedad.",
		8 => "<span class='viñetas'>»</span> Estudiamos la situación legal de su inmueble para mejorar su rentabilidad.",
		9 => "<span class='viñetas'>»</span> Gestionamos y atendemos su crédito con el respaldo de su renta.",
		10 => "<span class='viñetas'>»</span> Seleccionamos sus Arrendatarios, previo estudio de sus antecedentes, solvencia moral y económica.",
		11 => "<span class='viñetas'>»</span> Suscribimos el correspondiente contrato de arrendamiento con sujeción a las normas legales.",
		],
	],
	"ventas" =>[
		"titulo" => "Ventas",
		"parrafos" => [
		0 => "Contamos con un equipo de Asesores de Ventas, siempre atentos a complacer sus requerimientos que le permita adquirir un inmueble que satisfaga sus necesidades.",
		1 => "<span class='viñetas'>»</span> Personalmente lo asesoramos en la adquisisción o venta de su inmueble, mediante visitas que realizamos en su compañía.",
		2 => "<span class='viñetas'>»</span> Realizamos el estudio de títulos que le garanticen la legalidad de la negociación.",
		3 => "<span class='viñetas'>»</span> Elaboramos la promesa de compra-venta y su respectiva minuta.",
		4 => "<span class='viñetas'>»</span> Efectuamos el pago de impuestos.",
		5 => "<span class='viñetas'>»</span> Gestionamos los correspondientes Paz y Salvos.",
		6 => "<span class='viñetas'>»</span> Lo asesoramos y gestionamos sus créditos ante las Corporaciones o Entidades Bancarias.",
		7 => "<span class='viñetas'>»</span> Con diligencia agilisamos la firma de la correspondiente escritura de compra-venta.",
		8 => "<span class='viñetas'>»</span> Estudiamos la situación legal de su inmueble para mejorar su rentabilidad.",
		9 => "<span class='viñetas'>»</span> Publicitamos su Inmueble con Efectividad.",
		],
	],
	"propiedad" =>[
		"titulo" => "Propiedad Horizontal",
		"parrafos" => "Nuestra amplia trayectoria profesional sobre esta materia, nos permite ofrecer un manejo eficiente de la copropiedad y sus usuarios, con estricta sujeción a las normas legales que la regulan."
	],	
	"avaluos" =>[
		"titulo" => "Avalúos",
		"parrafos" => [
		0 => "¿ Le gustaria saber el valor real de su Inmueble ?",
		1 => "Si quiere Vender o Rentar un inmueble, lo primero y más importante que necesita saber es su valor comercial.",
		2 => "Practicamos el avalúo de sus inmuebles con técnica, y profesionalismo.",
		],
	],
	"asesoria" =>[
		"titulo" => "Asesoría Jurídica, consultoría administrativa y contable en el campo inmobiliario",
		"parrafo" => "En la INMOBILIARIA ALEJANDRO DOMINGUEZ PARRA S.A contamos con un excelente Equipo Profesional de Asesores y Consultores Jurídicos especializados en Derecho Inmobiliario y Comercial que le garantizan una correcta interpretación de las normas legales.",
		],
	// "mantenimiento" =>[
		// "titulo" => "Mantenimiento",
		// "parrafos" => [
			// 0 => "Invierte en el extranjero sin salir de Colombia, Esta dinámica ha venido tomando mucha fuerza en ciudades de la Florida como Orlando que cuentan con diversos atractivos para los compradores. De hecho, en 2018 Colombia apareció en el primer lugar de la lista internacional de búsquedas de casas en la Florida. Según las mismas estadísticas, la adquisición de propiedades residenciales en el sur de la Florida alcanzó 15.400 unidades en 2017, reflejando un aumento de 40% en comparación con el año anterior.",
		
		// ],
	// ],
];
?>