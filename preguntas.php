<?php

$preguntas[1] = array(
							'categoria' => 'General',
							'preguntas' => array(
									1 => array (
										'pregunta' => '¿Qué servicios ofrece Cloud-DI', 
										'respuesta' => 'Ofrece Infraestructura como servicio (IaaS) mediante <i>OpenStack</i> - con el puedes crear máquinas virtuales en la nube -, '.
																	' alojamiento de archivos (similar a <i>Dropbox</i>), Sistemas de control de versiones ' .
																	'(<i>Git</i> y <i>Subversion</i>), Gestión de proyectos (<i>Redmine</i>), y plataformas de docencia on-line ' .
																	'(<i>Moodle</i>'),
									2 => array (
										'pregunta' => '¿Qué personas pueden tener acceso a estos servicios?', 
										'respuesta' => 'Miembros del Departamento de Informática, becarios o contratados de investigación asociados al ' .
																	'Departamento de Informática, así como estudiantes de asignaturas impartidas por profesorado del ' .
																	'Departamento de Informática'),
									3 => array (
										'pregunta' => '¿Desde dónde se puede tener acceso a estos servicios?', 
										'respuesta' => 'Desde la UAL o desde fuera a través de VPN. A través de VPN sólo se pueden acceder a servicios ' .
																	'por los puertos 80 (HTTP), 22 (SSH) y 3389 (RDP para Escritorio remoto de Windows)'),
									4 => array (
										'pregunta' => '¿Cómo informo de un problema en alguno de los servicios de Cloud-DI?', 
										'respuesta' => '<a href = "http://redmine.di.ual.es/projects/cloud-di/issues/new" target="_blank">Crea una petición</a> en el proyecto Cloud-DI '.
																	'en http://redmine.di.ual.es informando del error'),
									5 => array (
										'pregunta' => '¿Cómo se pueden ampliar las prestaciones o funcionalidades que ofrece Cloud-DI?', 
										'respuesta' => '<a href = "http://redmine.di.ual.es/projects/cloud-di/issues/new" target="_blank">Crea una petición</a> en el proyecto Cloud-DI '.
																	'en http://redmine.di.ual.es solicitando el nuevo servicio y el procedimiento para configurarlo'),
									6 => array (
										'pregunta' => '¿Cómo puedo aprender a usar los servicios de Cloud-DI?', 
										'respuesta' => 'En <a href = "http://moodle.di.ual.es" target="_blank">http://moodle.di.ual.es</a> encontrarás cursos on-line que te '.
																	'ayudarán a formarte en los servicios de Cloud-DI')
									)
							);


$preguntas[2] = array(
							'categoria' => 'LDAP-DI',
							'preguntas' => array(
									1 => array (
										'pregunta' => '¿Qué servicio ofrece LDAP-DI?', 
										'respuesta' => 'Ofrece autentificación a los servicios de almacenamiento de archivos (<i>ownCloud</i>), control de versiones ' .
																	'(<i>GitLab, Subversion</i>), gestión de proyectos (<i>Redmine</i>) y docencia online (<i>Moodle</i>).'. 
																	'<br/><b>No ofrece autentificación a edX ni a OpenStack</b>.'),
									2 => array (
										'pregunta' => '¿Cuál es mi nombre de usuario?', 
										'respuesta' => 'El de Campus Virtual'),
									3 => array (
										'pregunta' => '¿Cuál es mi contraseña inicial?', 
										'respuesta' => 'Habrás recibido un email informándote de tus credenciales de acceso'),
									4 => array (
										'pregunta' => '¿Cómo puedo restablecer mi contraseña?', 
										'respuesta' => 'En <a href = "http://ldap.di.ual.es" target="_blank">http://ldap.di.ual.es</a> puedes cambiar tu contraseña'),
									5 => array (
										'pregunta' => 'He perdido mi contraseña', 
										'respuesta' => 'Envía un email a <a href="mailto:diosdado@ual.es">diosdado@ual.es</a> solicitando que restablezcan tu contraseña'),
									6 => array (
										'pregunta' => '¿Caduca la contraseña?', 
										'respuesta' => 'De forma predeterminada no se exige cambiar la contraseña periódicamente, aunque por motivos ' .
																	'de seguridad se recomienda cambiarla con cierta frecuencia'),									
									7 => array (
										'pregunta' => '¿Cómo pueden registrarse nuevos miembros (p.e. alumnos de asignaturas que vayan a usar servicios ' .
																	'de Cloud-DI)?', 
										'respuesta' => '<a href = "http://redmine.di.ual.es/projects/cloud-di/issues/new" target="_blank">Crea una petición</a> en el proyecto ' .
																	'Cloud-DI solicitando el alta en LDAP-DI adjuntando un archivo de hoja de cálculo con las columnas siguientes: ' .
																	'apellidos, nombre, login, email')
									)
							);

$preguntas[3] = array(
							'categoria' => 'OpenStack-DI',
							'preguntas' => array(
									1 => array (
										'pregunta' => '¿Qué servicio ofrece OpenStack-DI?', 
										'respuesta' => 'Infraestructura como servicio (IaaS). Podrás crear máquinas virtuales accesibles de forma remota. ' .
																	'Las máquinas virtuales (<i>instancias</i> OpenStack) son creadas a partir de <i>imágenes</i> o <i>instantáneas</i> ' .
																	'disponibles en OpenStack-DI'),
									2 => array (
										'pregunta' => '¿Cuál es mi nombre de usuario?', 
										'respuesta' => 'El de Campus Virtual'),
									3 => array (
										'pregunta' => '¿Cuál es mi contraseña inicial?', 
										'respuesta' => 'Habrás recibido un email informándote de tus credenciales de acceso'),
									4 => array (
										'pregunta' => '¿Cómo puedo restablecer mi contraseña?', 
										'respuesta' => 'En los ajustes de tu cuenta OpenStack-DI'),
									5 => array (
										'pregunta' => 'He perdido mi contraseña', 
										'respuesta' => 'Envía un email a <a href="mailto:diosdado@ual.es">diosdado@ual.es</a> solicitando que restablezcan tu contraseña'),									
									6 => array (
										'pregunta' => '¿Caduca la contraseña?', 
										'respuesta' => 'De forma predeterminada no se exige cambiar la contraseña periódicamente, aunque por motivos ' .
																	'de seguridad se recomienda cambiarla con cierta frecuencia'),		
									7 => array (
										'pregunta' => 'No puedo conectarme a OpenStack-DI con mis credenciales de LDAP-DI', 
										'respuesta' => 'OpenStack-DI tiene su propio sistema de autentificación, independiente de LDAP-DI. Sólo coincide el nombre de usuario'),
									8 => array (
										'pregunta' => '¿Cómo pueden registrarse nuevos miembros (p.e. alumnos de asignaturas que vayan a usar OpenStack-DI)?', 
										'respuesta' => '<a href = "http://redmine.di.ual.es/projects/cloud-di/issues/new" target="_blank">Crea una petición</a> en el proyecto ' .
																	'Cloud-DI solicitando el alta en OpenStack-DI adjuntando un archivo de hoja de cálculo con las columnas siguientes: ' .
																	'apellidos, nombre, login, email'),
									9 => array (
										'pregunta' => '¿Cómo puedo aprender a utilizar los servicios básicos de OpenStack-DI?', 
										'respuesta' => 'En <a href = "http://moodle.di.ual.es" target="_blank">http://moodle.di.ual.es</a> encontrarás cursos on-line que te '.
																	'ayudarán a formarte en OpenStack-DI'),		
									10 => array (
										'pregunta' => '¿Cuál es mi cuota en OpenStack-DI?', 
										'respuesta' => 'En función de qué tipo de usuario seas pertencerás a uno o más proyectos en OpenStack-DI. ' .
																	'En cada uno de ellos tendrás una cantidad de recursos disponibles (VCPUs, RAM, disco, IPs flotantes, ...). ' .
																	'Si necesitas aumentar tu cuota <a href = "http://redmine.di.ual.es/projects/cloud-di/issues/new" target="_blank">crea una ' .
																	'petición</a> en el proyecto Cloud-DI en http://redmine.di.ual.es solicitando de forma justificada la ' .
																	'ampliación de recursos.'),		
									11 => array (
										'pregunta' => '¿Que diferencia hay entre la IP fija y la IP flotante?', 
										'respuesta' => 'La IP fija es la IP que OpenStack ha reservado a una instancia en el momento de su creación. ' .
																	'Dicha IP fija está vinculada a la red privada en la que se haya creado la máquina virtual, y no ' .
																	'será accesible desde fuera de esa red. <br/>' .
																	'La IP flotante es una IP de la red externa, es decir, de la red de la UAL, lo que nos permitirá ' .
																	'conectarnos a ella desde cualquier parte de la UAL, o desde fuera mediante VPN.<br/>' .
																	'Si quieres que tu máquina virtual sea accesible desde la red de UAL o desde fuera mediante VPN, ' .
																	'tendrás que asociarle una IP flotante.<br/>' .
																	'Para más información, consulta en <a href = "http://moodle.di.ual.es" target="_blank">http://moodle.di.ual.es</a> el curso '.
																	'on-line de Introducción al uso de OpenStack'),		
									12 => array (
										'pregunta' => '¿Cómo puedo crear una instancia Windows?', 
										'respuesta' => 'Lanza una instancia seleccionando una imagen o snapshot disponible de Windows. Configura el puerto RDP (3389) para que ' .
																	'puedas acceder por escritorio remoto a ella.<br/>' .
																	'Para más información, consulta en <a href = "http://moodle.di.ual.es" target="_blank">http://moodle.di.ual.es</a> el curso '.
																	'on-line de Introducción al uso de OpenStack'),		
									13 => array (
										'pregunta' => '¿Cómo puedo crear una instancia Linux?', 
										'respuesta' => 'Asegúrate de haber subido a OpenStack-DI tu clave pública. A continuación, lanza una instancia seleccionando una imagen ' .
																	'o snapshot disponible de Linux. Configura el puerto SSH (22) para que puedas acceder a ella.<br/>' .
																	'Para más información, consulta en <a href = "http://moodle.di.ual.es" target="_blank">http://moodle.di.ual.es</a> el curso '.
																	'on-line de Introducción al uso de OpenStack'),		
									14 => array (
										'pregunta' => 'No puedo conectarme a una instancia de Windows', 
										'respuesta' => 'Revisa que la instancia tenga abierto el puerto de entrada RDP (3389), revisa el login y password y comprueba ' .
																	'que estés conectándote desde una red desde la que tengas acceso. Revisa su IP flotante si quieres acceder desde fuera ' .
																	'de la red privada en la que se creó'),		
									15 => array (
										'pregunta' => '¿Cómo puedo dar acceso a otra persona a una máquina virtual Linux creada por mi?', 
										'respuesta' => 'En OpenStack las instancias Linux se crean para acceder a ellas por emparejamiento de claves. Si quieres que ' .
																	'otra persona se pueda conectar a la máquina virtual emparejando su clave privada, pídele su clave pública y ' .
																	'añádela al archivo <tt>~.ssh/authorized_keys</tt>'),		
									16 => array (
										'pregunta' => '¿Cómo puedo compartir una máquina virtual Windows con otra persona?', 
										'respuesta' => 'Basta con proporcionarle la IP, nombre de usuario y password'),		
									17 => array (
										'pregunta' => '¿Cómo afecta el <i>flavour</i> de mi instancia a futuros <i>snapshots</i> ?', 
										'respuesta' => 'Al crear una imagen a partir de un <i>snapshot</i>, la nueva imagen tendrá que tener un <i>flavour</i> que tenga un disco ' .
																	'con al menos la misma capacidad que tenía la imagen original sobre la que se creó el <i>snapshot</i>.'),
									18 => array (
										'pregunta' => 'Mi instancia se está ejecutando y apenas puedo hacer nada con ella (Posible problema MTU) ?', 
										'respuesta' => 'Quizá tengas un problema de MTU y los paquetes que usa tu instancia son más grandes que el tamaño que usa la red sobre la que está creada. ' .
																		'Consulta <a href = "http://ualmtorres.github.io/howtos/CloudDIOcata/#truerecuperaci-n-de-snapshots-del-anterior-openstack-di" target  = "_blank">este enlace</a>.'),
									19 => array (
										'pregunta' => 'He creado un snapshot y otros usuarios no pueden verlo', 
										'respuesta' => 'Los snapshots o imágenes creadas son privadas. Sólo los usuarios con rol de administrador pueden hacerlas públicas. ' .
																		'Contacta con <a href="mailto:clouddi@ual.es?Subject=Activar imagen/snapshot como público">Cloud-DI Team</a> indicando el nombre del snapshot o imagen para que la activen como pública')
									)

							);

$preguntas[4] = array(
							'categoria' => 'ownCloud-DI',
							'preguntas' => array(
									1 => array (
										'pregunta' => '¿Qué servicio ofrece ownCloud-DI?', 
										'respuesta' => 'Alojamiento de archivos (similar a <i>Dropbox</i>)'),
									2 => array (
										'pregunta' => '¿Qué personas pueden tener acceso a ownCloud-DI?', 
										'respuesta' => 'Miembros del Departamento de Informática, becarios o contratados de investigación asociados al ' .
																	'Departamento de Informática. Los alumnos no tendrán cuenta en ownCloud-DI'),
									3 => array (
										'pregunta' => '¿Cuál es mi cuota en ownCloud-DI?',  
										'respuesta' => 'De forma predeterminada se tienen 20 GB de cuota de almacenamiento.</br> ' .
																	'Si necesitas aumentar tu cuota <a href = "http://redmine.di.ual.es/projects/cloud-di/issues/new" target="_blank">crea una ' .
																	'petición</a> en el proyecto Cloud-DI en http://redmine.di.ual.es solicitando de forma justificada la ' .
																	'ampliación de la cuota.'),
									4 => array (
										'pregunta' => '¿Cuáles son mis credenciales de acceso a ownCloud-DI?', 
										'respuesta' => 'Las credenciales que tienes almacenadas en LDAP-DI'),
									5 => array (
										'pregunta' => '¿Existe un cliente para mi ordenador, tablet o smartphone?', 
										'respuesta' => '<a href = "https://owncloud.org/install/#install-clients" target="_blank">Descarga tu cliente</a> para tu ordenador ' .
																	'Mac, Windows o Linux o para tu dispositivo táctil Android o iOS.</br>' .
																	'En <a href = "http://moodle.di.ual.es" target="_blank">http://moodle.di.ual.es</a> encontrarás el curso on-line sobre servicios ' .
																	'de Cloud-DI, donde hay una sección dedicada a instalación de clientes ownCloud'),
									6 => array (
										'pregunta' => '¿Puedo usar mi cuenta ownCloud-DI como una unidad WebDAV?', 
										'respuesta' => 'Sí, en <a href = "http://moodle.di.ual.es" target="_blank">http://moodle.di.ual.es</a> encontrarás el curso on-line sobre servicios ' .
																	'de Cloud-DI, donde hay una sección dedicada la configuración de WebDAV')
									)
							);

$preguntas[5] = array(
							'categoria' => 'Redmine-DI',
							'preguntas' => array(
									1 => array (
										'pregunta' => '¿Qué servicio ofrece Redmine-DI?', 
										'respuesta' => 'Gestión de proyectos, gestión de tickets (<i>issues</i>)'),
									2 => array (
										'pregunta' => '¿Qué personas pueden tener acceso a Redmine-DI?', 
										'respuesta' => 'Todas las personas que estén registradas en LDAP-DI'),
									3 => array (
										'pregunta' => '¿Cuáles son mis credenciales de acceso a Redmine-DI?', 
										'respuesta' => 'Las credenciales que tienes almacenadas en LDAP-DI'),
									4 => array (
										'pregunta' => '¿Por qué no puedo crear proyectos en Redmine-DI?', 
										'respuesta' => 'De forma predeterminada, no puedes crear proyectos en Redmine-DI. Tendrás que ' .
																	'<a href = "http://redmine.di.ual.es/projects/cloud-di/issues/new" target="_blank">crear una petición</a> en ' .
																	'el proyecto Cloud-DI en http://redmine.di.ual.es solicitando el rol de Creador de proyecto</br>'.
																	'En <a href = "http://moodle.di.ual.es" target="_blank">http://moodle.di.ual.es</a> encontrarás el curso on-line sobre servicios ' .
																	'de Cloud-DI, donde hay una sección dedicada a la creación de proyectos en Redmine')
									)
							);

$preguntas[6] = array(
							'categoria' => 'Moodle-DI',
							'preguntas' => array(
									1 => array (
										'pregunta' => '¿Qué servicio ofrece Moodle-DI?', 
										'respuesta' => 'Soporte para docencia online'),
									2 => array (
										'pregunta' => '¿Qué personas pueden tener acceso a Moodle-DI?', 
										'respuesta' => 'El acceso será libre para todos los cursos públicos. Para el acceso a cursos privados, y creación de cursos será necesario estar registrado en LDAP-DI'),
									3 => array (
										'pregunta' => '¿Cuáles son mis credenciales de acceso a Moodle-DI?', 
										'respuesta' => 'Las credenciales que tienes almacenadas en LDAP-DI')
									)
							);

/*
$preguntas[6] = array(
							'categoria' => 'edX-DI',
							'preguntas' => array(
									1 => array (
										'pregunta' => '¿Qué servicio ofrece edX-DI?', 
										'respuesta' => 'Es una plataforma de soporte para docencia online que proporciona una excelente experiencia de uso'),
									2 => array (
										'pregunta' => '¿Qué personas pueden tener acceso a edX-DI?', 
										'respuesta' => 'Como es una plaforma para MOOCs, el acceso es libre. Cualquier persona comn acceso a la red de la UAL se puede registrar en edX-DI'),
									3 => array (
										'pregunta' => '¿Cómo me registro en edX-DI?', 
										'respuesta' => 'Creando una cuenta de usuario facilitando un email válido y una contraseña. edX-DI te enviará un email con un enlace de ' .
																	'activación de la cuenta de usuario'),
									4 => array (
										'pregunta' => 'No puedo conectarme a edX-DI con mis credenciales de LDAP-DI', 
										'respuesta' => 'edX-DI tiene su propio sistema de autentificación, independiente de LDAP-DI')
									)
							);
*/

$preguntas[7] = array(
							'categoria' => 'Máquinas virtuales Windows',
							'preguntas' => array(
									1 => array (
										'pregunta' => '¿Cuál es mi usuario y mi contraseña?', 
										'respuesta' => 'Contacta con <a href="mailto:clouddi@ual.es?Subject=Usuario y contraseña de MV Windows">Cloud-DI Team</a>'),
									2 => array (
										'pregunta' => '¿Por qué no puedo conectarme?', 
										'respuesta' => 'Además de revisar tu usuario y contraseña, recuerda que en los grupos de seguridad tienes que tener abierto el puerto 3389 para la comunicación RDP'),
									3 => array (
										'pregunta' => '¿Qué cliente uso para conectarme?', 
										'respuesta' => 'Microsoft ofrece Remote Desktop Client. Google te ayudará a encontrarlo'),
									4 => array (
										'pregunta' => 'Mi licencia ha caducado. ¿Qué hago?', 
										'respuesta' => 'Puedes introducir una clave de producto de tu cuenta de <a href = "http://msdn.ual.es" target = "_blank">MSDN</a> (Microsoft Imagine UAL) o rearmar la licencia por otros seis meses. El rearmar sólo se puede hacer una vez. Consulta <a href = "https://social.technet.microsoft.com/wiki/contents/articles/32122.windows-server-extend-expired-evaluation-period.aspx" target = "_blank">este enlace oficial</a> para más información sobre la operación de rearmar.')
									)
							);

$preguntas[8] = array(
							'categoria' => 'Máquinas virtuales XUbuntu',
							'preguntas' => array(
									1 => array (
										'pregunta' => '¿En qué consisten las máquinas virtuales XUbuntu?', 
										'respuesta' => 'Son máquinas virtuales Ubuntu con el entorno de escritorio Xfce instalado'),
									2 => array (
										'pregunta' => '¿Qué cliente utilizo para conectarme?', 
										'respuesta' => 'Se recomienda usar X2Go. En clientes Mac también hay que instalar XQuartz'),
									3 => array (
										'pregunta' => '¿Cómo defino una conexión en X2Go?', 
										'respuesta' => '<ul>
																		<li>Nombre para la sesión: nombre que desees dar a tu conexión</li>
																		<li>Host: IP flotante devuelta por OpenStack-DI</li>
																		<li>Usuario: ubuntu</li>
																		<li>Puerto SSH: 22</li>
																		<li>Claves RSA/DSA: Nombre absoluto (incluyendo path) del archivo de clave privada correspondiente a clave púlica utilizada para crear la instancia XUbuntu (p.e. /home/hommer/.ssh/id_rsa en sistemas Linux o /Users/hommer/.ssh/id_rsa en sistemas Mac</li>
																		<li>Tipo de sesion: XFCE</li>
																		</ul> '),
									4 => array (
										'pregunta' => '¿Por qué no puedo conectarme a la máquina virtual con X2Go?', 
										'respuesta' => 'Además de revisar tu clave privada, usuario, puerto y tipo de sesión, recuerda que en los grupos de seguridad del proyecto de OpenStack en el que está la máquina virtual tiene que tener abierto el puerto 22 para la comunicación SSH'),
									5 => array (
										'pregunta' => '¿Tiene algún software presintalado?', 
										'respuesta' => 'Git, JDK 1.8, Sublime Text, Terminator y Midnight commander'),
									6 => array (
										'pregunta' => '¿Por qué no me funciona el tabulador para completar comandos en la terminal?', 
										'respuesta' => '<ul>
																		<li>Edita el archivo <pre>.config/xfce4/xfconf/xfce-perchannel-xml/xfce4-keyboard-shortcuts.xml</pre></li>
																		<li>Busca <pre>roperty name="&lt;Super&gt;Tab" type="string" value="switch_window_key"/></pre></li>
																		<li>Sustituye el fragmento de código anterior por <pre>roperty name=”&lt;Super&gt;Tab” type=”empty”/></pre></li>
																		</ul>
																	 '),
									7 => array (
										'pregunta' => '¿Qué usuario utilizo para conectarme?', 
										'respuesta' => 'ubuntu.<br><b>IMPORTANTE: REVISA SI OTROS USUARIOS TIENEN ACCESO A TU MAQUINA VIRTUAL. CONSULTA QUE HACER AL USAR LA MAQUINA VIRTUAL POR PRIMERA VEZ</b>' ),
									8 => array (
										'pregunta' => '¿Debo hacer alguna operación inicial al usar mi máquina virtual XUbuntu por primera vez?', 
										'respuesta' => 'La imagen utilizada para crear tu instancia proviene de un snapshot realizado a una máquina virtual existente. La clave pública del usuario que creó el snapshot sigue estando en tu máquina virtual.
																		<ul>
																			<li>Elimina las claves públicas correspondientes a usuarios a los que no quieres permitir la conexión a tu máquina virtual editando los archivos:
																			<pre>/home/user/ubuntu/.ssh/authorized_keys
/home/user/clouduser/.ssh/authorized_keys
																			</pre>
																			</li>
																			<li>Cambia el password de clouduser <pre>passwd clouduser</pre></li>

																		</ul>
																		')

									)
							);
?>