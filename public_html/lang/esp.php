<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Inicio';
$lng['navbar']['login'] = 'Ingresar';
$lng['navbar']['logout'] = 'Salir';
$lng['navbar']['recent_ads'] = 'Avisos Recientes';
$lng['navbar']['register'] = 'Registrarse';
$lng['navbar']['submit_ad'] = 'Publicar un Anuncio';
$lng['navbar']['editad'] = 'Editar';
$lng['navbar']['my_account'] = 'Mi Cuenta';
$lng['navbar']['administrator_panel'] = 'Panel Administrativo';
$lng['navbar']['contact'] = 'Contacto';
$lng['navbar']['password_recovery'] = 'Recuperar Contraseña';
$lng['navbar']['renew_listing'] = 'Renovar';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Enviar';
$lng['general']['search'] = 'Buscar';
$lng['general']['contact'] = 'Contacto';
$lng['general']['advanced_search'] = 'Búsqueda Avanzada';
$lng['general']['activeads'] = 'Activos';
$lng['general']['activead'] = 'Activo';
$lng['general']['subcats'] = 'subcategorías';
$lng['general']['subcat'] = 'subcategoría';
$lng['general']['view_ads'] = 'Ver';
$lng['general']['back'] = 'Volver';
$lng['general']['goto'] = 'Ir a';
$lng['general']['page'] = 'Página';
$lng['general']['of'] = 'de';
$lng['general']['other'] = 'Otra';
$lng['general']['NA'] = 'No aplicable';
$lng['general']['add'] = 'Agregar';
$lng['general']['delete_all'] = 'Borrar los seleccionados';
$lng['general']['action'] = 'Acción';
$lng['general']['edit'] = 'Editar';
$lng['general']['delete'] = 'Borrar';
$lng['general']['total'] = 'Total';
$lng['general']['min'] = 'Mín';
$lng['general']['max'] = 'Máx';
$lng['general']['free'] = 'GRATIS';
$lng['general']['not_authorized'] = '¡No estás autorizado para ver esta página!';
$lng['general']['access_restricted'] = '¡Tu acceso a esta página fue restringido!';
$lng['general']['featured_ads'] = 'Avisos Destacados';
$lng['general']['latest_ads'] = 'Avisos Recientes';
$lng['general']['quick_search'] = 'Búsqueda Rápida';
$lng['general']['go'] = 'Ir';
$lng['general']['unlimited'] = 'Ilimitado';

// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Ya existe una imagen con el mismo nombre y no puede ser sobreescrita. Debes borrar la anterior si deseas reemplazarla';
$lng['images']['errors']['file_uploaded_too_big'] = 'No puedes publicar una imagen de más de ::MAX_FILE_UPLOAD_SIZE:: Kb'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = '¡Las dimensiones de la imagen son muy grandes! Edita la imagen para que no tenga más de ::MAX_FILE_WIDTH::px de ancho por ::MAX_FILE_HEIGHT::px de alto';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = '¡La imagen no pudo ser cargada!';
$lng['images']['errors']['no_file'] = '¡Por favor selecciona una imagen para subir!';
$lng['images']['errors']['no_folder'] = '¡La carpeta no existe!';
$lng['images']['errors']['folder_not_writeable'] = '¡La carpeta seleccionada no tiene permisos de escritura!';
$lng['images']['errors']['file_type_not_accepted'] = 'El archivo que deseas cargar tiene un formato no permitido o no es una imagen';
$lng['images']['errors']['error'] = 'Ocurrió un error cargando la imagen. El error fue: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = '¡La carpeta de las miniaturas no existe!';
$lng['images']['errors']['thmb_folder_not_writeable'] = '¡La carpeta de las miniaturas no tiene permisos!';
$lng['images']['errors']['no_jpg_support'] = '¡No se permiten archivos con extensión JPG!';
$lng['images']['errors']['no_png_support'] = '¡No se permiten archivos con extensión PNG!';
$lng['images']['errors']['no_gif_support'] = '¡No se permiten archivos con extensión GIF!';
$lng['images']['errors']['jpg_create_error'] = '¡Error con la imagen JPG!';
$lng['images']['errors']['png_create_error'] = '¡Error con la imagen PNG!';
$lng['images']['errors']['gif_create_error'] = '¡Error con la imagen GIF!';


// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Iniciar Sesión';
$lng['login']['logout'] = 'Cerrar Sesión';
$lng['login']['username'] = 'Nombre de Usuario';
$lng['login']['password'] = 'Contraseña';
$lng['login']['forgot_pass'] = '&iquest;Olvidaste tu Contraseña?';
$lng['login']['click_here'] = 'Clic aquí';

$lng['login']['errors']['password_missing'] = '¡Por favor ingresa tu Contraseña!';
$lng['login']['errors']['username_missing'] = '¡Por favor ingresa tu Nombre de Usuario!';
$lng['login']['errors']['username_invalid'] = '¡El Nombre de Usuario es incorrecto!';
$lng['login']['errors']['invalid_username_pass'] = '¡Combinacion de Usuario y Contraseña no válida!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Cerrar Sesión';
$lng['logout']['loggedout'] = 'Sesión cerrada correctamente';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Registrarse';
$lng['users']['repeat_password'] = 'Repetir Contraseña';
$lng['users']['image_verification_info'] = 'Ingresa los detalles de la imagen que ves abajo.<br> Pueden ser letras y números.';
$lng['users']['already_logged_in'] = '¡Has Iniciado Sesión!';
$lng['users']['select'] = 'Seleccionar';


$lng['users']['errors']['username_missing'] = '¡Ingresa tu Nombre de Usuario!';
$lng['users']['errors']['invalid_username'] = '¡Nombre de Usuario incorrecto!';
$lng['users']['errors']['username_exists'] = '¡Ese Nombre de Usuario ya existe! Por favor inicia sesión si ya tienes una cuenta.';
$lng['users']['errors']['email_missing'] = '¡Ingresa tu dirección de correo electrónico!';
$lng['users']['errors']['invalid_email'] = '¡Dirección de correo electrónico incorrecta!';
$lng['users']['errors']['passwords_dont_match'] = '¡Las contraseñas no coinciden!';
$lng['users']['errors']['email_exists'] = '¡La dirección de correo electrónico ingresada ya existe en nuestra base de datos! Si no recuerdas tu contraseña haz clic en el enlace de recuperar clave.';
$lng['users']['errors']['password_missing'] = 'Ingresa tu Contraseña!';
$lng['users']['errors']['password_not_match'] = '¡Las contraseñas no coinciden!';
$lng['users']['errors']['invalid_validation_string'] = '¡Datos de validación incorrectos!';
$lng['users']['errors']['invalid_account_or_activation'] = '¡Error! Si no puedes acceder a tu cuenta, por favor revisa si ya la activaste o solicita una revisión en nuestro formulario de Contacto.';
$lng['users']['errors']['account_already_active'] = '¡Tu cuenta está activada!';

$lng['users']['info']['activate_account'] = 'Un email ha sido enviado a tu casilla de correo electrónico. Ábrelo y revisa la información para activar tu cuenta.';
$lng['users']['info']['welcome_user'] = 'Tu cuenta ha sido creada. ¡<a href="login.php">Ingresar</a>!';
$lng['users']['info']['account_info_updated'] = '¡La información ha sido actualizada!';
$lng['users']['info']['password_changed'] = '¡Tu contraseña ha sido cambiada!';
$lng['users']['info']['account_activated'] = 'Tu cuenta ha sido activada. ¡<a href="login.php">Ingresar</a>!';



// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Anuncio';
$lng['listings']['category'] = 'Categoría';
$lng['listings']['package'] = 'Plan';
$lng['listings']['price'] = 'Precio';
$lng['listings']['country'] = 'País';
$lng['listings']['state'] = 'Departamento';
$lng['listings']['city'] = 'Ciudad';
$lng['listings']['ad_description'] = 'Detalles breves';
$lng['listings']['title'] = 'Título del Anuncio';
$lng['listings']['description'] = 'Detalles';
$lng['listings']['image'] = 'Imagen';
$lng['listings']['words_left'] = 'Palabras restantes';
$lng['listings']['enter_photos'] = 'Ingresar Fotos';
$lng['listings']['choose_payment_method'] = 'Métodos de Pago';
$lng['listings']['ad_information'] = 'Información';
$lng['listings']['free'] = 'GRATIS';
$lng['listings']['select_package'] = 'Elige un Plan';
$lng['listings']['packages_details'] = 'Detalles';
$lng['listings']['other'] = 'Otro';
$lng['listings']['details'] = 'Detalles';
$lng['listings']['stock_no'] = 'Nº de inventario';
$lng['listings']['location'] = 'Ubicación';
$lng['listings']['contact_info'] = 'Información de Contacto';
$lng['listings']['email_seller'] = 'Contactar al Anunciante';
$lng['listings']['no_recent_ads'] = 'No hay avisos recientes';
$lng['listings']['no_ads'] = 'Sin anuncios en esta categoría';
$lng['listings']['added_on'] = 'Publicado el';
$lng['listings']['send_mail'] = 'Email enviado al Usuario';
$lng['listings']['details'] = 'Detalles';
$lng['listings']['user'] = 'Usuario';
$lng['listings']['price'] = 'Precio';
$lng['listings']['confirm_delete'] = '¿Estás seguro de que deseas eliminar el Anuncio?';
$lng['listings']['confirm_delete_all'] = '&iquest;Estás seguro de que deseas eliminar los Anuncios seleccionados?';
$lng['listings']['all'] = 'Todos los Anuncios';
$lng['listings']['active_listings'] = 'Anuncios Activos';
$lng['listings']['pending_listings'] = 'Anuncios en Proceso';
$lng['listings']['featured_listings'] = 'Anuncios Destacados';
$lng['listings']['pending_featured_listings'] = 'Anuncios Destacados en proceso';
$lng['listings']['expired_listings'] = 'Anuncios Expirados';
$lng['listings']['active'] = 'Activo';
$lng['listings']['inactive'] = 'Inactivo';
$lng['listings']['pending'] = 'En proceso';
$lng['listings']['featured'] = 'Destacado';
$lng['listings']['pending_featured'] = 'Características (P)';
$lng['listings']['expired'] = 'Expirados';
$lng['listings']['order_by_date'] = 'Ordenar por Fecha';
$lng['listings']['order_by_category'] = 'Ordenar por Categoría';
$lng['listings']['order_by_make'] = 'Ordenar por Fabricante';
$lng['listings']['order_by_price'] = 'Ordenar por Precio';
$lng['listings']['order_by_views'] = 'Ordenar por Visitas';
$lng['listings']['order_asc'] = 'De Menor a Mayor';
$lng['listings']['order_desc'] = 'De Mayor a Menor';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Visitas';
$lng['listings']['date'] = 'Fecha';
$lng['listings']['no_listings'] = 'Sin registros';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'No hay anuncios con esa ID';
$lng['listings']['mark_sold'] = 'Marcar como Vendido';
$lng['listings']['mark_unsold'] = 'Desmarcar como Vendido';
$lng['listings']['feature'] = 'Característica';
$lng['listings']['sold'] = 'Vendido';
$lng['listings']['expired_on'] = 'Expirado el';
$lng['listings']['renew'] = 'Renovar';
$lng['listings']['print_page'] = 'Imprimir';
$lng['listings']['recommend_this'] = 'Recomendar';
$lng['listings']['more_listings'] = 'Más registros de este anunciante';
$lng['listings']['all_listings_for'] = 'Todos los anuncios de';
$lng['listings']['free_category'] = 'Categoría Gratuita';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = '&iquest;Estás seguro de que deseas borrar la imagen?';


// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='¡Caracteres excedidos! Tienes hasta un máximo de ::MAX::.'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='¡Tu anuncio contiene palabras no permitidas! Por favor revisa su contenido.';
$lng['listings']['errors']['title_missing']='¡Ingresa el Título del anuncio!';
$lng['listings']['errors']['category_missing']='¡Ingresa una Categoría!';
$lng['listings']['errors']['invalid_category']='¡Categoría inválida! Revisa las disponibles o escríbenos solicitando su incorporación.';
$lng['listings']['errors']['package_missing']='¡Selecciona un Plan!';
$lng['listings']['errors']['invalid_package']='¡Plan inválido o no disponible!';
$lng['listings']['errors']['content_missing']='¡Ingresa información a tu anuncio!';
$lng['listings']['errors']['invalid_price']='¡Precio inválido!';
/*$lng['listings']['errors']['make_missing']='¡Selecciona un Fabricante!';
$lng['listings']['errors']['invalid_make']='¡Fabricante inválido! Revisa los disponibles o escríbenos solicitando su incorporación.';
$lng['listings']['errors']['model_missing']='¡Selecciona un modelo!';
$lng['listings']['errors']['invalid_model']='¡Modelo inválido! Revisa los disponibles o escríbenos solicitando su incorporación.';
$lng['listings']['errors']['invalid_country']='¡País inválido! Revisa los disponibles o escríbenos solicitando su incorporación.';
$lng['listings']['errors']['invalid_state']='¡Departamento inválido!';*/
$lng['listings']['errors']['user_missing']='¡Ingresa un Nombre de Usuario!';

// ------------------- ADVANCED SEARCH -----------------
$lng['adv_search']['make'] = 'Fabricante';
$lng['adv_search']['model'] = 'Modelo';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Mínimo';
$lng['quick_search']['price_high'] = 'Maximo';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Publicar un Anuncio';
$lng['useraccount']['browse_your_listings'] = 'Administrar tus Anuncios';
$lng['useraccount']['modify_account_info'] = 'Modificar tu Cuenta';
$lng['useraccount']['order_history'] = 'Historial de Pedidos';
$lng['useraccount']['total_listings'] = 'Anuncios Totales';
$lng['useraccount']['total_views'] = 'Total de Visitas';
$lng['useraccount']['active_listings'] = 'Anuncios Activos';
$lng['useraccount']['pending_listings'] = 'Anuncios en Proceso';
$lng['useraccount']['last_login'] = 'Último ingreso a tu cuenta';
$lng['useraccount']['last_login_ip'] = 'La IP desde donde ingresaste por última vez fue';
$lng['useraccount']['expired_listings'] = 'Anuncios Expirados';
$lng['useraccount']['statistics'] = 'Estadísticas';
$lng['useraccount']['welcome'] = 'Bienvenido';
$lng['useraccount']['contact_name'] = 'Nombre de Contacto';
$lng['useraccount']['email'] = 'Correo Electrónico';
$lng['useraccount']['address'] = 'Dirección';
$lng['useraccount']['phone'] = 'Teléfono';
$lng['useraccount']['mobile'] = 'Celular';
$lng['useraccount']['webpage'] = 'Sitio Web';
$lng['useraccount']['password'] = 'Contraseña';
$lng['useraccount']['repeat_password'] = 'Repetir Contraseña';
$lng['useraccount']['change_password'] = 'Cambiar Contraseña';

// ------------------- PAYPAL -----------------
$lng['paypal']['transaction_canceled'] = '¡La transacción con PayPal ha sido cancelada!';
$lng['paypal']['invalid_paypal_transaction'] = '¡Transacción con PayPal inválida!';

// ------------------- 2CO -----------------
$lng['to_checkout']['pay_with_2co'] = 'Pagar con 2Checkout!';
$lng['to_checkout']['invalid_2co_transaction'] = '¡Transacción con 2Checkout inválida!';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'a';
$lng['advanced_search']['price_min'] = 'Precio Mín';
$lng['advanced_search']['price_max'] = 'Precio Máx';
$lng['advanced_search']['word'] = 'Palabra';
$lng['advanced_search']['sort_by'] = 'Ordenar por';
$lng['advanced_search']['sort_by_price'] = 'Ordenar por Precio';
$lng['advanced_search']['sort_by_date'] = 'Ordenar por Fecha';
$lng['advanced_search']['sort_by_make'] = 'Ordenar por Fabricante';
$lng['advanced_search']['sort_descendant'] = 'Ordenar de Mayor a Menor';
$lng['advanced_search']['sort_ascendant'] = 'Ordenar de Menor a Mayor';
$lng['advanced_search']['only_ads_with_pic'] = 'Sólo Anuncios con Imágenes';
$lng['advanced_search']['no_results'] = '¡Tu solicitud no generó resultados!';
$lng['advanced_search']['multiple_ads_matching'] = '¡Hay ::NO_ADS:: anuncios que coinciden con tu solicitud!';
$lng['advanced_search']['single_ad_matching'] = '¡Hay un anuncio que coincide con tu solicitud!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Nombre';
$lng['contact']['subject'] = 'Asunto';
$lng['contact']['email'] = 'Correo Electrónico';
$lng['contact']['webpage'] = 'Sitio Web';
$lng['contact']['comments'] = 'Comentarios';
$lng['contact']['message_sent'] = '¡Tu mensaje ha sido enviado!';
$lng['contact']['sending_message_failed'] = 'Envio fallido, por favor intenta más tarde.';
$lng['contact']['mailto'] = 'Enviar Correo Electrónico a';

$lng['contact']['error']['name_missing'] = '¡Ingresa tu Nombre!';
$lng['contact']['error']['subject_missing'] = '¡Ingresa el Asunto!';
$lng['contact']['error']['email_missing'] = '¡Ingresa tu Email!';
$lng['contact']['error']['invalid_email'] = '¡Email incorrecto!';
$lng['contact']['error']['comments_missing'] = '¡Ingresa tus Comentarios!';
$lng['contact']['error']['invalid_validation_number'] = '¡Número de validación incorrecto! Revisa que no existan espacios';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Dirección de Correo Electrónico';
$lng['password_recovery']['new_password'] = 'Nueva Contraseña';
$lng['password_recovery']['repeat_new_password'] = 'Repetir Nueva Contraseña';
$lng['password_recovery']['invalid_key'] = 'Número de activación inválido';

$lng['password_recovery']['email_missing'] = '¡Ingresa tu Email!';
$lng['password_recovery']['invalid_email'] = 'Email inválido';
$lng['password_recovery']['email_inexistent'] = 'No hay registros que coincidan con la dirección de Email ingresada. Por favor revisa el correo de tu inscripción.';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Valor';
$lng['packages']['words'] = 'Palabras';
$lng['packages']['days'] = 'Días';
$lng['packages']['pictures'] = 'Fotos';
$lng['packages']['picture'] = 'Foto';
$lng['packages']['available'] = 'Disponible';
$lng['packages']['featured'] = 'Destacado';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Procesador de Pagos';
$lng['order_history']['amount'] = 'Valor';
$lng['order_history']['completed'] = 'Finalizado';
$lng['order_history']['not_completed'] = 'Incompleto';
$lng['order_history']['ad_no'] = 'ID del Anuncio';
$lng['order_history']['date'] = 'Fecha';
$lng['order_history']['no_actions'] = 'Sin Registros';
$lng['order_history']['order_by_date'] = 'Ordenar por Fecha';
$lng['order_history']['order_by_amount'] = 'Ordenar por Valor';
$lng['order_history']['order_by_processor'] = 'Ordenar por Procesador de Pagos';
$lng['order_history']['description'] = 'Detalles';
$lng['order_history']['newad'] = 'Publicar Anuncio'; 
$lng['order_history']['renew'] = 'Renovar Anuncio'; 
$lng['order_history']['featured'] = 'Anuncio Destacado'; 


// ----------------------- FEATUREAD --------------------
$lng['featuread']['price'] = 'Precio según las características del anuncio';
$lng['featuread']['choose_payment_method'] = 'Escoger el método de pago';
$lng['featuread']['feature_your_ad'] = 'Características de tu anuncio';

// --------------------- RENEW --------------------
$lng['renew']['price'] = 'Precio';
$lng['renew']['choose_payment_method'] = 'Seleccionar Forma de Pago';
$lng['renew']['renew_your_ad'] = 'Renovar';

// --------------------- ORDER --------------------
$lng['order']['date'] = 'Ordenar por Fecha';
$lng['order']['price'] = 'Ordenar por Precio';
$lng['order']['title'] = 'Ordenar por Título';
$lng['order']['desc'] = 'De Mayor a Menor';
$lng['order']['asc'] = 'De Menor a Mayor';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Recomendar Anuncio';
$lng['recommend']['your_name'] = 'Tu Nombre';
$lng['recommend']['your_email'] = 'Tu Email';
$lng['recommend']['friend_name'] = 'Nombre de tu amigo';
$lng['recommend']['friend_email'] = 'Email de tu amigo';
$lng['recommend']['message'] = 'Mensaje';


$lng['recommend']['error']['your_name_missing'] = '¡Ingresa tu Nombre!';
$lng['recommend']['error']['your_email_missing'] = '¡Ingresa tu Email!';
$lng['recommend']['error']['friend_name_missing'] = '¡Ingresa el Nombre de tu amigo!';
$lng['recommend']['error']['friend_email_missing'] = '¡Ingresa el Email de tu amigo!';
$lng['recommend']['error']['invalid_email'] = '¡Email incorrecto!';

// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Anuncios';
$lng['stats']['general'] = 'Principal';

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Suscribirse';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Estado';
$lng['general']['favourites'] = 'Favoritos';
$lng['general']['as'] = 'como';
$lng['general']['view'] = 'Ver';
$lng['general']['none'] = 'Ninguno';
$lng['general']['yes'] = 'si';
$lng['general']['no'] = 'no';
$lng['general']['next'] = 'Próximo';
$lng['general']['finish'] = 'Finalizar';
$lng['general']['download'] = 'Descargar';
$lng['general']['remove'] = 'Remover';
$lng['general']['previous_page'] = '« Anterior';
$lng['general']['next_page'] = 'Siguiente »';
$lng['general']['items'] = 'items';
$lng['general']['active'] = 'Activo';
$lng['general']['inactive'] = 'Inactivo';
$lng['general']['expires'] = 'Expira el';
$lng['general']['available'] = 'Disponible';
$lng['general']['cancel'] = 'Cancelar';
$lng['general']['never'] = 'Nunca';
$lng['general']['asc'] = 'Ascendente';
$lng['general']['desc'] = 'Descendente';
$lng['general']['pending'] = 'Pendiente';
$lng['general']['upload'] = 'Subir';
$lng['general']['processing'] = 'Procesando, por favor, espere ... ';
$lng['general']['help'] = 'Ayuda';
$lng['general']['hide'] = 'Ocultar';
$lng['general']['link'] = 'Link';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['check_all'] = 'Marcar Todos';
$lng['general']['uncheck_all'] = 'Desmarcar Todos';
$lng['general']['all'] = 'Todos';


// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Página de Comercio';
$lng['users']['store_banner'] = 'Logo del Comercio';
$lng['users']['waiting_mail_activation'] = 'Esperando Email de activación';
$lng['users']['waiting_admin_activation'] = 'Esperando aprobación del administrador';
$lng['users']['no_such_id'] = 'Este usuario no existe.';

$lng['users']['info']['store_banner'] = 'Esta imagen será utilizada como logo de su comercio y aparecerá en la parte superior de su página.';

// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Denunciar';
$lng['listings']['report_reason'] = 'Informar Razón';
$lng['listings']['meta_info'] = 'Meta Información';
$lng['listings']['meta_keywords'] = 'Palabras Clave ';
$lng['listings']['meta_description'] = 'Meta descripción';
$lng['listings']['not_approved'] = 'No Aprobado';
$lng['listings']['approve'] = 'Aprobar';
$lng['listings']['choose_payment_method'] = 'Elegir método de pago';
$lng['listings']['choose_category'] = 'Elegir Categoría';
$lng['listings']['choose_plan'] = 'Elegir Plan';
$lng['listings']['enter_ad_details'] = 'Detalles del Anuncio';
$lng['listings']['ad_details'] = 'Detalles del Anuncio';
$lng['listings']['add_photos'] = 'Imágenes';
$lng['listings']['ad_photos'] = 'Imágenes del Anuncio';
$lng['listings']['edit_photos'] = 'Editar Imágenes';
$lng['listings']['extra_options'] = 'Opciones Adicionales';
$lng['listings']['review'] = 'Revisión del Anuncio';
$lng['listings']['finish'] = 'Finalizar';
$lng['listings']['next_step'] = 'Paso Siguiente &raquo;';
$lng['listings']['included'] = 'Incluído';
$lng['listings']['finalize'] = 'Finalizar';
$lng['listings']['zip'] = 'Código Postal';
$lng['listings']['add_to_favourites'] = 'Añadir a Favoritos';
$lng['listings']['confirm_add_to_fav'] = 'Advertencia: no haz iniciado sesión, por lo que la lista de Favoritos será temporal.';
$lng['listings']['add_to_fav_done'] = '¡El Anuncio fue añadido a la lista de Favoritos!';
$lng['listings']['confirm_delete_favourite'] = '&iquest;Estás seguro de que deseas borrar el Anuncio de los Favoritos?';
$lng['listings']['no_favourites'] = 'No se encontraron Favoritos';
$lng['listings']['extra_options'] = 'Opciones Adicionales';
$lng['listings']['highlited'] = 'Resaltado';
$lng['listings']['priority'] = 'Prioridad';
$lng['listings']['video'] = 'Vídeo Clasificados';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'En espera de vídeo';
$lng['listings']['video_code'] = 'Código del Vídeo';
$lng['listings']['total'] = 'Total';
$lng['listings']['approve_ad'] = '¡Aprobar y Publicar Anuncio!';
$lng['listings']['finalize_later'] = 'Finalizar más tarde';
$lng['listings']['click_to_upload'] = 'Haz clic en el icono de arriba para cargar tus imágenes';
$lng['listings']['files_uploaded'] = ' foto(s) cargadas de un total de ';
$lng['listings']['allowed'] = ' permitidas';
$lng['listings']['limit_reached'] = ' Límite máximo de imágenes alcanzado';
$lng['listings']['edit_options'] = 'Editar Opciones del Anuncio';
$lng['listings']['view_store'] = 'Ver Página de Comercio';
$lng['listings']['edit_ad_options'] = 'Editar Opciones del Anuncio';
$lng['listings']['no_extra_options_selected'] = '¡No hay opciones adicionales seleccionadas!';
$lng['listings']['highlited_listings'] = 'Anuncios Remarcados';
$lng['listings']['for_listing'] = 'de inclusión en la lista no ';
$lng['listings']['expires_on'] = 'Expira';
$lng['listings']['expired_on'] = 'Expirado';
$lng['listings']['pending_ad'] = 'Anuncios Pendientes';
$lng['listings']['pending_highlited'] = 'Anuncios Remarcados Pendientes';
$lng['listings']['pending_featured'] = 'Anuncios Destacados Pendientes';
$lng['listings']['pending_priority'] = 'En espera de Prioridad';
$lng['listings']['enter_coupon'] = 'Introduzca el Código de Descuento';
$lng['listings']['discount'] = 'Descuento';
$lng['listings']['select_plan'] = 'Seleccione el Plan';
$lng['listings']['pending_subscription'] = 'Pendientes de suscripción';
$lng['listings']['remove_favourite'] = 'Eliminar Favorito';
$lng['listings']['order_up'] = 'Orden subir';
$lng['listings']['order_down'] = 'Orden bajar';
$lng['listings']['errors']['invalid_youtube_video'] = '¡Video de YouTube no válido!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Suscribirse';
$lng['useraccount']['no_package'] = 'Sin plan de anuncios';
$lng['useraccount']['packages'] = 'Planes';
$lng['useraccount']['date_start'] = 'Fecha de inicio';
$lng['useraccount']['date_end'] = 'Fecha de finalización';
$lng['useraccount']['remaining_ads'] = 'Anuncios restantes';
$lng['useraccount']['account_type'] = 'Tipo de cuenta';
$lng['useraccount']['unfinished_listings'] = 'Anuncios inconclusos';
$lng['useraccount']['confirm_delete_subscription'] = '&iquest;Estás seguro de que deseas eliminar esta suscripción?';
$lng['useraccount']['buy_store'] = 'Comprar Página de Comercio';
$lng['useraccount']['bulk_uploads'] = 'Cargas Masivas';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Suscripción';
$lng['packages']['ads'] = 'Anuncios';
$lng['packages']['name'] = 'Nombre';
$lng['packages']['details'] = 'Detalles';
$lng['packages']['no_ads'] = 'Número de anuncios';
$lng['packages']['subscription_time'] = 'Tiempo de suscripción';
$lng['packages']['no_pictures'] = 'Imágenes permitidas';
$lng['packages']['no_words'] = 'Número de palabras';
$lng['packages']['ads_availability'] = 'Disponibilidad de los anuncios';
$lng['packages']['featured'] = 'Destacado';
$lng['packages']['highlited'] = 'Remarcado';
$lng['packages']['priority'] = 'Prioridad';
$lng['packages']['video'] = 'Vídeo Clasificados';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Suscripción';
$lng['order_history']['post_listing'] = 'Publicar Anuncio';
$lng['order_history']['renew_listing'] = 'Renovar Anuncio';
$lng['order_history']['feature_listing'] = 'Anuncio Destacado';
$lng['order_history']['subscribe_to_package'] = 'Suscribirse al Plan';
$lng['order_history']['complete_payment'] = 'Completar el Pago';
$lng['order_history']['complete_payment_for'] = 'Completar el Pago para';
$lng['order_history']['details'] = 'Detalles';
$lng['order_history']['subscription_no'] = 'Suscripción Nº';
$lng['order_history']['highlited'] = 'Remarcado del Anuncio';
$lng['order_history']['priority'] = 'Prioridad';
$lng['order_history']['video'] = 'Video Clasificados';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Por favor, seleccione un Plan';
$lng['buy_package']['error']['choose_processor'] = 'Por favor, seleccione el Método de Pago';
$lng['buy_package']['error']['invalid_processor'] = 'Procesador de pago no válido';
$lng['buy_package']['error']['invalid_package'] = 'Plan no válido';

// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Transacción con Paypal no válida';
$lng['2co']['invalid_transaction'] = 'Transacción con 2checkout no válida';
$lng['moneybookers']['invalid_transaction'] = 'Transacción con Moneybookers no válida';
$lng['authorize']['invalid_transaction'] = 'Transacción con Authorize.net no válida';
$lng['manual']['invalid_transaction'] = 'Transacción no válida';

$lng['paypal']['transaction_canceled'] = 'Operación con Paypal cancelada';
$lng['2co']['transaction_canceled'] = 'Operación con 2checkout cancelada';
$lng['moneybookers']['transaction_canceled'] = 'Operación con Moneybookers cancelada';
$lng['authorize']['transaction_canceled'] = 'Operación con Authorize.net cancelada';
$lng['manual']['transaction_canceled'] = 'Transacción cancelada';

$lng['payments']['transaction_already_processed'] = 'La operación ya ha sido procesada';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Aprobar Suscripción';
$lng['subscribe']['payment_method'] = 'Método de Pago';

// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Copia de correo electrónico: ';
$lng['bcc_mails']['from'] = 'De: ';
$lng['bcc_mails']['to'] = 'Para: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Estado de carga masiva: ';
$lng['ie']['successfully'] = 'Anuncios agregados exitosamente';
$lng['ie']['failed'] = 'error';
$lng['ie']['uploaded_listings'] = 'Lista de Anuncios cargados:';
$lng['ie']['errors']['upload_import_file'] = 'Por favor, suba el archivo desde donde importar';
$lng['ie']['errors']['incorrect_file_type'] = 'Extensión de archivo incorrecta. El tipo de archivo debe ser: ';
$lng['ie']['errors']['could_not_open_file'] = 'No se pudo abrir el archivo';
$lng['ie']['errors']['choose_categ'] = 'Por favor, elija una Categoría';
$lng['ie']['errors']['could_not_save_file'] = 'No se pudo descargar el archivo: ';
$lng['ie']['errors']['required_field_missing'] = 'Falta el campo obligatorio: ';


// -------------------------------------------------------------
// 
//		THE FOLLOWING PART IS NOT TRANSLATED!!!! 
//
// -------------------------------------------------------------


$lng['ie']['errors']['incorrect_data_count'] = 'Datos incorrectos para: ';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Buscar por area';
$lng['areasearch']['all_locations'] = 'Todas partes';
$lng['areasearch']['exact_location'] = 'Especificar';
$lng['areasearch']['around'] = 'Cerca';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Elegir Anunciante';

// ------------------- end vers 5.0 -----------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Si';
$lng['general']['No'] = 'No';
$lng['general']['or'] = 'o';
$lng['general']['in'] = 'en';
$lng['general']['by'] = 'por';
$lng['general']['close_window'] = 'Cerrar';
$lng['general']['more_options'] = 'Más opciones &raquo;';
$lng['general']['less_options'] = '&laquo; Menos opciones';
$lng['general']['send'] = 'Enviar';
$lng['general']['save'] = 'Guardar';
$lng['general']['for'] = 'para';
$lng['general']['to'] = 'en';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Marcar como Alquilado';
$lng['listings']['mark_unrented'] = 'Desmarcar como Alquilado';
$lng['listings']['rented'] = 'Alquilado';
$lng['listings']['your_info'] = 'Tu información';
$lng['listings']['email'] = 'Tu Email';
$lng['listings']['name'] = 'Tu Nombre';
$lng['listings']['listing_deleted'] = '¡Tu anuncio fue borrado!';
$lng['listings']['post_without_login'] = 'Publicar Sin Registrarte';
$lng['listings']['waiting_activation'] = 'Esperando por Activación';
$lng['listings']['waiting_admin_approval'] = 'Esperando por aprobación del administrador';
$lng['listings']['dont_need_account'] = '¿No necesitas una cuenta? ¡Publica tu Anuncio GRATIS y sin necesidad de registrarte!';
$lng['listings']['post_your_ad'] = '¡Publicar Anuncio!';
$lng['listings']['posted'] = 'Publicado';
$lng['listings']['select_subscription'] = 'Seleccionar Suscripción';
$lng['listings']['choose_subscription'] = 'Elegir Suscripción';
$lng['listings']['inactive_listings'] = 'Anuncios Inactivos';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Refinar búsqueda';
$lng['search']['refine_by_keyword'] = 'Refinar por palabra clave';
$lng['search']['showing'] = 'Mostrar';
$lng['search']['more'] = 'Más ...';
$lng['search']['less'] = 'Menos ...';
$lng['search']['search_for'] = 'Buscar';
$lng['search']['save_your_search'] = 'Guardar búsqueda';
$lng['search']['save'] = 'Guardar';
$lng['search']['search_saved'] = '¡Búsqueda guardada!';
$lng['search']['must_login_to_save_search'] = '¡Debes ingresar a tu cuenta para guardar tu búsqueda!';
$lng['search']['view_search'] = 'Ver búsqueda';
$lng['search']['all_categories'] = 'Todas las categorías';
$lng['search']['more_than'] = 'más de';
$lng['search']['less_than'] = 'menos de';

$lng['search']['error']['cannot_save_empty_search'] = 'Tu búsqueda no contiene resultados, por lo tanto no se puede guardar.';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Búsquedas guardadas';
$lng['useraccount']['view_saved_searches'] = 'Ver búsquedas guardadas';
$lng['useraccount']['no_saved_searches'] = 'No hay búsquedas guardadas';
$lng['useraccount']['recurring'] = 'Recurrente';
$lng['useraccount']['date_renew'] = 'Renovación';
$lng['useraccount']['logged_in_as'] = 'Ingresaste como ';
$lng['useraccount']['subscriptions'] = 'Suscripciones';

$lng['users']['activate_account'] = 'Activar cuenta';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Agregar Suscripción';
$lng['subscriptions']['package'] = 'Suscripción';
$lng['subscriptions']['remaining_ads'] = 'Anuncios Restantes';
$lng['subscriptions']['recurring'] = 'Recurrente';
$lng['subscriptions']['date_start'] = 'Fecha de inicio';
$lng['subscriptions']['date_end'] = 'Fecha de finalización';
$lng['subscriptions']['date_renew'] = 'Renovación';
$lng['subscriptions']['confirm_delete'] = '&iquest;Estás seguro de que deseas borrar la suscripción?';
$lng['subscriptions']['no_subscriptions'] = 'Sin suscripciones';

// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = '¿Aún no te has Registrado?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Permitir pagos recurrentes para esta suscripción';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Faltan los siguientes campos requeridos: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Comprar Página de Comercio';


$lng['images']['errors']['max_photos'] = '¡Número máximo de imágenes!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Alerta por email';
$lng['alerts']['email_alerts'] = 'Alertas por email';
$lng['alerts']['no_alerts'] = 'No existen alertas';
$lng['alerts']['view_email_alerts'] = 'Ver alertas';
$lng['alerts']['send_email_alerts'] = 'Enviar alertas';
$lng['alerts']['immediately'] = 'Inmediatas';
$lng['alerts']['daily'] = 'Diarias';
$lng['alerts']['weekly'] = 'Semanales';
$lng['alerts']['your_email'] = ' Ingresar correo electrónico';
$lng['alerts']['create_alert'] = 'Crear alerta';
$lng['alerts']['email_alert_info'] = 'Recibe alertas en tu cuenta de Email';
$lng['alerts']['alert_added'] = '¡La alerta fue creada!';
$lng['alerts']['alert_added_activate'] = 'Pronto recibirás un email en <b>::EMAIL::</b>. Por favor haz clic en el link que recibiras en tu casilla de correo electrónico para activar tu alerta.'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Buscar en';
$lng['alerts']['keyword'] = 'palabra';
$lng['alerts']['frequency'] = 'Frecuencia';
$lng['alerts']['alert_activated'] = 'Alerta activada, recibirás notificaciones en tu email.';
$lng['alerts']['alert_unsubscribed'] = '¡La alerta fue borrada!';
$lng['alerts']['started_on'] = 'Iniciar en';
$lng['alerts']['no_terms_searched'] = '¡No se encontró ningún resultado!';
$lng['alerts']['no_listings'] = '¡No hay anuncios para esta alerta!';

$lng['alerts']['error']['email_required'] = '¡Ingresa una dirección de email para la alerta!';
$lng['alerts']['error']['invalid_email'] = '¡Cuenta de email no válida!';
$lng['alerts']['error']['invalid_frequency'] = '¡Duración no válida!';
$lng['alerts']['error']['login_required'] = 'Para activar tu alerta, haz clic <a href="::LINK::">aquí</a>.'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Por favor, selecciona al menos una palabra de búsqueda';
$lng['alerts']['error']['invalid_confirmation'] = '¡Confirmacion de alerta no válida!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Solicitud de desuscripción no válida';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Calcular préstamo';
$lng_loancalc['sale_price'] = 'Precio venta';
$lng_loancalc['down_payment'] = 'Pagos por';
$lng_loancalc['trade_in_value'] = 'Valor convenido';
$lng_loancalc['loan_amount'] = 'Cantidad';
$lng_loancalc['sales_tax'] = 'Impuesto';
$lng_loancalc['interest_rate'] = 'Tasa de interés';
$lng_loancalc['loan_term'] = 'Duración';
$lng_loancalc['months'] = 'meses';
$lng_loancalc['years'] = 'años';
$lng_loancalc['or'] = 'o';
$lng_loancalc['monthly_payment'] = 'Pago mensual';
$lng_loancalc['calculate'] = 'Calcular';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Comentarios';
$lng_comments['make_a_comment'] = 'Escribe tu comentario';
$lng_comments['login_to_post'] = 'Para publicar un comentario, haz clic <a href="::LOGIN_LINK::">aquí</a>.';

$lng_comments['name'] = 'Nombre';
$lng_comments['email'] = 'Email';
$lng_comments['website'] = 'Sitio Web';
$lng_comments['submit_comment'] = 'Publicar';

$lng_comments['error']['name_missing'] = '¡Ingresa tu nombre!';
$lng_comments['error']['content_missing'] = '¡Ingresa tu comentario!';
$lng_comments['error']['website_missing'] = '¡Ingresa tu página web!';
$lng_comments['error']['email_missing'] = '¡Ingresa tu email!';
$lng_comments['error']['listing_id_missing'] = '¡Comentario no válido!';

$lng_comments['error']['invalid_email'] = '¡Email no válido!';
$lng_comments['error']['invalid_website'] = '¡Sitio Web no válido!';
$lng_comments['errors']['badwords'] = 'Tu comentario contiene palabras prohibidas. Por favor corrígelo.';

$lng_comments['info']['comment_added'] = '¡Tu comentario fue agregado! Haz clic <a id="newad">aquí</a> si quieres publicar otro comentario.';
$lng_comments['info']['comment_pending'] = 'Comentario a la espera de aprobación.';

// ----------------- end comments module --------------------

// -------------
$lng['tb']['next'] = 'Siguiente &raquo;';
$lng['tb']['prev'] = '&laquo; Anterior';
$lng['tb']['close'] = 'Cerrar';
$lng['tb']['or_esc'] = 'o presionar ESC';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Mensajes';
$lng['messages']['confirm_delete_all'] = '¿Está seguro de que desea eliminar los mensajes seleccionados?';
$lng['messages']['listing'] = 'Anuncio';
$lng['messages']['no_messages'] = 'No hay mensajes';
$lng['general']['reply'] = 'Responder al mensaje';
$lng['messages']['message'] = 'Mensaje';
$lng['messages']['from'] = 'Desde';
$lng['messages']['to'] = 'A';
$lng['messages']['on'] = 'Fecha';
$lng['messages']['view_thread'] = 'Ver secuencia';
$lng['messages']['started_for_listing'] = 'Iniciado por anuncio';
$lng['messages']['view_complete_message'] = 'Ver mensaje completo aquí';
$lng['messages']['message_history'] = 'Historial de mensajes';
$lng['messages']['yourself'] = 'Usted';
$lng['messages']['report_spam'] = 'Reportar como Spam';
$lng['messages']['reported_as_spam'] = 'Reportado como Spam';
$lng['messages']['confirm_report_spam'] = '¿Estás seguro de que deseas reportar este mensaje como Spam?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'ID inválido';
$lng['listings']['show_map'] = 'Mostrar mapa';
$lng['listings']['hide_map'] = 'Ocultar mapa';
$lng['listings']['see_full_listing'] = 'Ver anuncio completo';
$lng['listings']['list'] = 'Lista';
$lng['listings']['gallery'] = 'Foto';
$lng['listings']['remove_fav_done'] = 'El anuncio fue eliminado de la lista de favoritos!';
$lng['search']['high_no_results'] = 'El número de resultados de tu búsqueda es muy alta. Los resultados mencionados se limitan a los más relevantes de los resultados. Por favor, refina tu búsqueda aún más con el fin de disminuir el número de resultados y obtener resultados más pertinentes!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = '¡Este email no está permitido!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'No tienes permitido el uso de esta suscripción nunca más, el número máximo de uso ha sido alcanzado';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Elige la ubicación';
$lng['location']['choose'] = 'Elige';
$lng['location']['change'] = 'Cambiar';
$lng['location']['all_locations'] = 'Todas las ubicaciones';
// ----------------- end version 7.05 ----------------


// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = '';
$lng ['location'] ['save_location'] = 'Guardar ubicación ';
$lng ['credits'] ['credits'] = 'Créditos';
$lng ['credits'] ['credit'] = 'crédito';
$lng ['credits'] ['pending_credits'] = 'créditos pendientes';
$lng ['credits'] ['current_credits'] = 'créditos actual';
$lng ['credits'] ['one_credit_equals'] = 'Un crédito equivale a';
$lng ['credits'] ['credits_amount'] = 'cantidad de créditos ';
$lng ['credits'] ['buy_extra_credits'] = 'Compra créditos adicionales';
$lng ['credits'] ['credits_package'] = 'paquete de créditos';
$lng ['credits'] ['select_package'] = 'Elige paquete de créditos';
$lng ['credits'] ['choose_package'] = 'Elija el paquete ';
$lng ['credits'] ['you_currently_have'] = 'Usted tiene actualmente ';
$lng ['credits'] ['you_currently_have_no_credits'] = 'Actualmente no tienes créditos';
$lng ['credits'] ['pay_using_credits'] = 'Pagar con créditos';
$lng ['credits'] ['not_enough_credits'] = 'No suficientes créditos para el pago';
$lng ['credits'] ['scredits'] = 'créditos';
$lng ['credits'] ['scredit'] = 'crédito';



$lng ['order_history'] ['credits_purchase'] = 'Compra de créditos ';
$lng ['order_history'] ['invalid_order'] = 'Pedido no válido';

// ------------------- end version 7.06 ------------------

$lng['listings']['wait_while_redirected'] = 'Por favor espere, usted está siendo redirigido!';

// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'Por favor, <a href="::LOGIN_LINK::">ingresa</a> para que puedas ver la información de contacto!';
$lng['listing']['no_contact_information'] = 'No hay información de contacto disponible.';


$lng['navbar']['register_as'] = 'Registrarse como';
$lng['listings']['all_ads'] = 'Todos los anuncios';
$lng['listings']['refine'] = 'Refinar';
$lng['listings']['results'] = 'resultados';
$lng['listings']['photos'] = 'fotos';
$lng['listings']['user_details'] = 'Ver  detalles de usuario';
$lng['listings']['back_to_details'] = 'Volver a detalles del anuncio';

$lng['listings']['post_free_ad'] = 'Publicar Anuncio GRATIS';

$lng['users']['username_available'] = 'El nombre de usuario está disponible!';
$lng['users']['username_not_available'] = 'Nombre de usuario no está disponible!';

$lng['general']['not_found'] = 'La página solicitada no se ha encontrado!';
$lng['general']['full_version'] = 'La versión completa';
$lng['general']['mobile_version'] = 'Versión móvil';
$lng['failed'] = 'Fallido';
$lng['remember_me'] = 'Recordarme';

$lng['less_than_a_minute'] = 'un minuto antes';
$lng['minute'] = 'minuto';
$lng['minutes'] = 'minutos';
$lng['hour'] = 'hora';
$lng['hours'] = 'horas';
$lng['yesterday'] = 'Ayer';
$lng['day'] = 'día';
$lng['days'] = 'días';
$lng['ago_postfix'] = '';
$lng['ago_prefix'] = 'Hace ';

// ------------------- end version 7.08 ------------------

// ------------------- version 8.01 ------------------

$lng['today'] = 'Hoy';
$lng['messages']['confirm_delete'] = '¿Seguro que quieres borrar este mensaje?';
$lng['listings']['change_category'] = 'Cambiar categoría';
$lng['listings']['change_plan'] = 'Seleccione un plan diferente';
$lng['listings']['choose_active_subscription'] = 'Elige desde tus suscripciones activas';


$lng['useraccount']['request_removal'] = 'Solicitar eliminación de la cuenta';
$lng['useraccount']['request_removal_now'] = 'Solicitar eliminación de la cuenta ahora!';
$lng['useraccount']['removal_verification_sent'] = 'Usted recibirá un correo electrónico con un enlace de verificación. Por favor, haz clic en el enlace para confirmar la solicitud de eliminación!';

$lng['contact']['message_waits_admin_aproval'] = 'Su mensaje será entregado una vez aprobado por el administrador!';

$lng['general']['accept'] = 'Aceptar';
$lng['general']['decline'] = 'Declinar';

$lng['general']['tax'] = 'Inpuesto';
$lng['general']['total_with_tax'] = 'Total con impuestos';

$lng['navbar']['rss'] = 'RSS';

$lng['general']['in_category'] = 'En categoría';

$lng['users']['user_info'] = 'Información del Usuario';
$lng['users']['store_info'] = 'Información de Página de Comercio';
$lng['users']['user_listings'] = 'Todos los Anuncios';

$lng['login']['errors']['invalid_email_pass'] = 'Correo electrónico o contraseña no válidos!';
$lng['general']['or'] = 'o';
$lng['newad']['choose_a_new_plan'] = 'Elegir un Nuevo Plan';

$lng['listings']['no_extra_options_available'] = 'No hay opciones adicionales disponibles!';

$lng['listings']['map'] = 'Mapa';

$lng['users']['affiliate'] = 'Afiliado';
$lng['users']['affiliate_id'] = 'Id afiliado';
$lng['users']['affiliate_link'] = 'Enlace de afiliado';
$lng['users']['affiliate_paypal_email'] = 'Cuenta PayPal de afiliado';
$lng['users']['info']['affiliate_paypal_email'] = 'Usted recibirá aquí el dinero ganado con su cuenta de afiliado';
$lng['users']['errors']['affiliate_paypal_email'] = 'Introduzca su cuenta de PayPal! Usted recibirá aquí el dinero ganado con su cuenta de afiliado';

$lng['listings']['result'] = 'resultado';

$lng['confirm_delete'] = '¿Está seguro que desea eliminar el elemento seleccionado?';
$lng['confirm_delete_all'] = '¿Está seguro que desea eliminar los elementos seleccionados?';

$lng['general']['show'] = 'Mostrar';
$lng['general']['on_a_page'] = 'en una página';
$lng['general']['return'] = 'Retorno';

$lng['login']['register_for_free'] = 'Registrarse Gratis!';
$lng['general']['sent'] = 'Enviado';
$lng['general']['received'] = 'Recibido';
$lng['messages']['spam'] = 'Spam';

$lng['newad']['not_logged_in'] = 'Usted no ha iniciado sesión!';
$lng['newad']['or_post_without_account'] = 'o continuar la publicación sin una cuenta!';

$lng_comments['scomments'] = 'comentarios';
$lng_comments['scomment'] = 'comentario';
$lng['general']['on'] = 'sobre';

$lng['affiliates']['last_payment'] = 'Último pago';
$lng['affiliates']['last_payment_date'] = 'Fecha de último pago';
$lng['affiliates']['next_payment_date'] = 'Fecha de próximo pago';
$lng['affiliates']['total_due'] = 'Total a pagar';
$lng['affiliates']['total_payments'] = 'Los pagos totales recibidos';
$lng['affiliates']['revenue_history'] = 'Historial de ingresos';
$lng['affiliates']['payments_history'] = 'Historial de pagos';
$lng['affiliates']['pending_payment'] = 'Pagos pendientes';
$lng['affiliates']['released'] = 'Liberado';
$lng['affiliates']['not_released'] = 'Sin liberar';
$lng['affiliates']['paid'] = 'Pagado';
$lng['affiliates']['not_paid'] = 'Sin Pagar';

$lng['general']['no_items'] = 'No hay elementos';
$lng['useraccount']['amount_start'] = 'Valor a partir de';
$lng['useraccount']['amount_end'] = 'Valor hasta';
$lng['not_allowed_to_post_ads'] = 'No está permitido publicar anuncios con esta cuenta!';

// ------------------- end version 8.01 ------------------

/* ------------------- version 8.4 ----------------------- */

$lng['listings']['info']['listing_pending_edited'] = 'Los cambios que realice se mantendrá pendiente hasta que sean examinados por un administrador!';

$lng['useraccount']['auction'] = 'Subasta';
$lng['useraccount']['add_auction'] = 'Añadir subasta';
$lng['useraccount']['remove_auction'] = 'Eliminar subasta';
$lng['useraccount']['auction_start_price'] = 'Precio de salida';
$lng['useraccount']['starts_at'] = 'Empieza a';
$lng['useraccount']['no_bids'] = 'Núm. ofertas';
$lng['useraccount']['max_bid'] = 'Oferta máxima';
$lng['useraccount']['enable'] = 'Enable';
$lng['useraccount']['disable'] = 'Inhabilitar';
$lng['useraccount']['error']['auction_start_price'] = 'Por favor, introduzca precio de salida de la subasta!';
$lng['useraccount']['info']['auction_added'] = 'La subasta se ha añadido correctamente!';
$lng['useraccount']['confirm_delete'] = 'Confirmar acción de eliminación?';
$lng['useraccount']['place_bid'] = 'Haga su oferta!';
$lng['useraccount']['login_to_bid'] = 'Ingrese para hacer su oferta!';
$lng['useraccount']['bid'] = 'Oferta';
$lng['useraccount']['message_to_seller'] = 'Mensaje al vendedor';
$lng['useraccount']['error']['enter_bid'] = 'Por favor, introduzca su oferta!';
$lng['useraccount']['error']['incorrect_bid'] = 'Oferta no válida!';
$lng['useraccount']['error']['bid_smaller_than_starting_price'] = 'Su oferta es menor que el precio de partida!';
$lng['useraccount']['bid_placed'] = 'Su oferta fue colocado!';
$lng['useraccount']['placed_on'] = 'Añadido en';
$lng['useraccount']['no_bids_for_auction'] = 'No hay ofertas para esta subasta!';

/* ------------------- end version 8.4 ----------------------- */

// ---------------  8.5 --------------------
$lng['general']['click_to_view'] = 'Clickee para ver';
$lng['advanced_search']['clear_search'] = 'Borrar búsqueda';
$lng['listings']['currency'] = 'Moneda';
$lng['listings']['show_phone'] = 'Mostrar teléfono';
$lng['listings']['make_public'] = 'Hacer público';

$lng['advanced_search']['only_ads_with_auction'] = 'Sólo anuncios con subastas';
$lng['security']['failed_login_attempts'] = 'Intentos de acceso fallidos repetidos';

// --------------- end  8.5 --------------------

// ---------------  8.7 --------------------
$lng['users']['info']['sms_verification'] = 'Tu cuenta está inactiva. Recibirás pronto un mensaje SMS que contiene un código de verificación. Ingrese el código en el cuadro de abajo para activar su cuenta.';
$lng['users']['verification_code'] = 'Código de verificación';
$lng['users']['waiting_sms_activation'] = 'Esperando la activación por SMS';
$lng['listings']['info']['sms_verification'] = '¡Su anuncio está actualmente inactivo! Recibirá pronto un mensaje SMS que contiene un código de verificación. Introduzca el código en el cuadro de abajo para activar su anuncio.';
$lng['listings']['activate_listing'] = 'Activar anuncio';
$lng['listings']['errors']['sms_invalid_activation'] = 'Clave de activación no válida!';
$lng['listings']['info']['listing_pending'] = 'Su anuncio está pendiente y está esperando la verificación del administrador.';
$lng['listings']['info']['listing_activated'] = 'Su anuncio está activado!';
$lng['listings']['errors']['listing_already_active'] = 'Su anuncio ya está activo!';
$lng['listings']['errors']['invalid_phone'] = '¡Numero de telefono inválido!';


// ---------------  8.7 --------------------

// ---------------  8.10 --------------------
$lng['newad']['available_for'] = 'Disponible para';
$lng['newad']['available_until_expires'] = 'Disponible hasta que expire el anuncio';
$lng['newad']['view_info'] = 'Ver información';
$lng['users']['errors']['phone_not_permitted'] = '¡Este número de teléfono no está permitido!';
$lng['invoice']['invoice'] = 'Factura';
$lng['invoice']['invoice_no'] = 'Sin factura';
$lng['invoice']['bill_to'] = 'Cliente';
$lng['invoice']['qty'] = 'Cantidad';
$lng['invoice']['unit_price'] = 'Precio unitario';
$lng['invoice']['subtotal'] = 'Subtotal';
$lng['invoice']['sale_tax'] = 'Impuesto';
$lng['invoice']['new_listing'] = 'Nuevo Anuncio';
$lng['invoice']['renew_listing'] = 'Renovación del anuncio';
$lng['invoice']['featured_eo'] = 'Opción adicional Destacado para el anuncio';
$lng['invoice']['highlited_eo'] = 'Opción adicional Remarcado para el anuncio';
$lng['invoice']['priority_eo'] = 'Opción adicional Prioridad para el anuncio';
$lng['invoice']['video_eo'] = 'Opción adicional Video Clasificados para el anuncio';
$lng['invoice']['new_credits_pkg'] = 'Compra de Plan de Créditos';
$lng['invoice']['store'] = 'Compra de Página de Comercio';
$lng['invoice']['new_subscription'] = 'Compra de Suscripción';
$lng['invoice']['renew_subscription'] = 'Renovación de la suscripción';
$lng['weeks'] = 'Semanas';
$lng['week'] = 'Semana';
$lng['months'] = 'Meses';
$lng['month'] = 'Mes';
// --------------- end 8.10 --------------------

// --------------- 9.1 --------------------
$lng['listings']['show_whatsapp'] = 'Mostrar WhatsApp';
$lng['general']['to_top'] = 'Ve arriba';
$lng['quick_search']['location'] = 'Código postal o ubicación';
$lng['listings']['see_all'] = 'Ver todos los anuncios &raquo;';
$lng['listings']['ads'] = 'Anuncios';
$lng['listings']['user_since'] = 'Usuario desde';
$lng['listings']['contact_details'] = 'Detalles de contacto';
$lng['listings']['favourite'] = 'Favorito';
$lng['listings']['manage_ad'] = 'Administrar su anuncio';
$lng['useraccount']['show_bids'] = 'Mostrar ofertas';
$lng['listings']['report_abusive'] = 'Reportar';
$lng['listings']['enable_auction'] = 'Habilitar subasta';
$lng['invoice']['download'] = 'Descargar factura';


$lng['register']['group'] = 'Tipo de cuenta';
$lng['register']['change_group'] = 'Cambiar tipo de cuenta';
$lng['register']['select_group'] = 'Seleccionar grupo';

$lng['search']['private'] = 'Propietarios privados';
$lng['search']['professional'] = 'Profesionales';
$lng['search']['save_your_search2'] = '¿Desea guardar su búsqueda?';
$lng['search']['save_search'] = 'Guardar búsqueda';
$lng['search']['refine_your_search'] = 'Filtrar la búsqueda';
$lng['search']['hide_refine'] = 'Ocultar filtros';

$lng['listings']['view_all_featured'] = 'Ver todos destacados >>';
$lng['listings']['view_all_latest'] = 'Ver todos reciente >>';
$lng['listings']['view_all_auctions'] = 'View todas las subastas >>';
$lng['listings']['auctions'] = 'Subastas';
$lng['listings']['view_ads_from'] = 'Ver anuncios de';
$lng['location']['change_location'] = 'Cambiar la ubicación';

// --------------- end 9.1 --------------------

// --------------- 9.2 --------------------
$lng['listings']['show_email'] = 'Mostrar correo electrónico';
$lng['listings']['error']['photo_mandatory'] = 'Por favor cargue al menos una foto con su anuncio!';
// --------------- end 9.2 --------------------

// --------------- 9.3 --------------------
$lng['listings']['call'] = 'Llamar';
$lng['listings']['sms'] = 'SMS';
$lng['contact']['phone'] = 'Teléfono';
$lng['contact']['error']['phone_or_email_missing'] = 'Por favor ingrese su dirección de correo electrónico o número de teléfono!';
$lng['general']['at'] = 'a';
$lng['general']['distance_from'] = 'de distancia de';
// --------------- end 9.3 --------------------

// --------------- 9.4 --------------------
$lng['contact']['error']['comments_forbidden_words'] = 'El mensaje contiene lenguaje prohibido, revísalo!';
// --------------- end 9.4 --------------------

// --------------- 9.5 --------------------
$lng['ie']['added'] = 'Agregado';
$lng['users']['repeat'] = 'Repetir';
$lng['users']['errors']['emails_dont_match'] = 'Las direcciones de correo electrónico no coinciden!';
$lng['listings']['pending_bump'] = 'Posicionamiento Pendiente';
$lng['login']['username_or_email'] = 'Nombre de usuario o correo electrónico';
// --------------- end 9.5 --------------------

// --------------- 9.6 --------------------
$lng['listings']['click_to_chat'] = 'Haz clic para chatear';
$lng['invoice']['price_includes_vat'] = 'El precio total incluye';
$lng['invoice']['vat'] = 'Impuestos';
$lng['general']['play'] = 'Play';
$lng['second'] = 'segundo';
$lng['seconds'] = 'segundos';
$lng['general']['you_must_wait'] = 'Tu debes esperar ';
$lng['general']['before_posting'] = ' antes de publicar un nuevo anuncio!';
$lng['listings']['select_category'] = '-- Seleccionar una categoría --';


$lng['login']['errors']['account_not_activated'] = 'Su cuenta no fue activada. Utilice la URL de activación que recibió en su cuenta de correo electrónico.';
$lng['login']['errors']['banned_account'] = 'Tu cuenta fue prohibida!';
$lng['login']['errors']['suspended_account'] = 'Tu cuenta fue suspendida hasta';

$lng['general']['back_to_site'] = 'Volver al sitio';
// --------------- end 9.6 --------------------

/// --------------- 9.7 --------------------
$lng['order_history']['urgent'] = 'Hacer Anuncio Urgente';
$lng['order_history']['url'] = 'Enlace de Página Web';
$lng['listings']['pending_urgent'] = 'Urgente pendiente';
$lng['listings']['pending_url'] = 'Enlace del sitio web pendiente';
$lng['listings']['error']['invalid_url'] = 'Enlace de sitio web no válido';
$lng['listings']['urgent'] = 'Urgente';
$lng['listings']['url'] = 'Enlace de Página Web';
$lng['listings']['site_url'] = 'Ingrese el enlace de su sitio web';
$lng['listings']['priorities_listings'] = 'Anuncios Priorizados';
$lng['listings']['urgent_listings'] = 'Anuncios Urgentes';
$lng['listings']['video_listings'] = 'Anuncios de Videos';
$lng['listings']['url_listings'] = 'Anuncios con enlaces a Sitios Web';
$lng['listings']['view_example'] = 'Ver ejemplo';
// --------------- end 9.7 --------------------

// --------------- 9.8 --------------------
$lng['packages']['html_editor'] = 'Editor HTML';
$lng['iyzico']['invalid_transaction'] = 'Transacción de pago fallida!';
$lng['users']['errors']['account_already_activated'] = 'La cuenta ya ha sido activada y está esperando la verificación del administrador.!';
$lng['now'] = 'Ahora';
$lng['listings']['updated'] = 'Actualizado';
$lng['listings']['auto_repost'] = 'Auto Republicación';
$lng['contact']['contact_via_email'] = 'Email';
// --------------- end 9.8 --------------------

// --------------- 9.9 --------------------
$lng['users']['info']['slug'] = 'You can edit the Dealer Page URL part which differentiate your Dealer Page from others.';
$lng['users']['slug'] = 'Dealer Page URL Slug';
$lng['users']['errors']['slug_already_used'] = 'This slug is already used, please choose a different one!';
$lng['users']['store_url'] = 'Dealer Page URL';
$lng['users']['slug_available'] = 'Slug is available!';
$lng['general']['settings'] = 'Settings';
$lng['payments']['invalid_transaction'] = 'Invalid transaction!';
$lng['listings']['requires_admin_verification'] = 'Requires admin verification';
$lng['listings']['waiting_for_admin_verification'] = 'Waiting for admin verification';
$lng['users']['info']['your_account_has_admin_verification_fields'] = 'Your account information contains data which need administrator verification!';

$lng['listings']['edit_image_title'] = 'Edit image title';
$lng['listings']['crop'] = 'Crop image';
$lng['listings']['rotate_left'] = 'Rotate image left';
$lng['listings']['rotate_right'] = 'Rotate image right';
$lng['listings']['login_to_bid'] = 'Please <a href="::LOGIN_LINK::">sign in</a> to bid';

$lng_comments['edit_comment'] = 'Edit Comment';
$lng['listings']['select_subcategory'] = '-- Select a subcategory --';
$lng['listings']['crop_image'] = 'Crop image';
$lng['messages']['mark_as_read'] = 'Mark as read';
$lng['messages']['mark_as_not_read'] = 'Mark as not read';


$lng['useraccount']['2fa'] = 'Two Factor Authentication';
$lng['useraccount']['enable_2fa'] = 'Enable Two Factor Authentication';
$lng['useraccount']['2fa_secret'] = 'Two Factor Authentication secret key';
$lng['useraccount']['info']['qr_code'] = 'Use this QR code in order to setup the app for Two Factor Authentication ( for example Google Authenticator mobile app )';
$lng['useraccount']['settings_saved'] = 'Your settings were saved!';
$lng['general']['regenerate'] = 'Regenerate';

$lng['login']['2step_verification'] = '2nd Step verification (One Time Password)';
$lng['login']['enter_otp'] = 'One Time Password:';
$lng['login']['enter_otp_sms'] = 'An OTP was just sent to you a moment ago.';
$lng['login']['your_otp_sms'] = "Your OTP is: ";
$lng['login']['error']['invalid_code'] = "Invalid code!";
$lng['login']['error']['2fa_unknown_error'] = 'There was an error in the login process, please try again!';
$lng['listings']['errors']['invalid_url'] = 'Invalid URL!';
$lng['newad']['contact_options'] = 'Contact options';
$lng['newad']['contact_via_email'] = 'Enable contact via Email';
$lng['listings']['disable_email_contact'] = 'Disable Email contact';
$lng['listings']['enable_email_contact'] = 'Enable Email contact';
$lng['listings']['email_contact_on'] = 'Email contact ON';
$lng['listings']['email_contact_off'] = 'Email contact OFF';
$lng['listings']['s_priority'] = 'priority';

// --------------- end 9.9 --------------------



?>