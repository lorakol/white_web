<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/
// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Página Inicial';
$lng['navbar']['login'] = 'Entrar';
$lng['navbar']['logout'] = 'Sair';
$lng['navbar']['recent_ads'] = 'Anuncios Recentes';
$lng['navbar']['register'] = 'Registar';
$lng['navbar']['submit_ad'] = 'Anunciar Grátis';
$lng['navbar']['editad'] = 'Editar Anuncio';
$lng['navbar']['my_account'] = 'Minha Conta';
$lng['navbar']['administrator_panel'] = 'Painel de Controlo';
$lng['navbar']['contact'] = 'Contato';
$lng['navbar']['password_recovery'] = 'Recuperar Palavra-Chave';
$lng['navbar']['renew_listing'] = 'Renovar Anúncio';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Enviar';
$lng['general']['search'] = 'Pesquisar';
$lng['general']['contact'] = 'Contato';
$lng['general']['advanced_search'] = 'Pesquisa Avançada';
$lng['general']['activeads'] = 'anuncios';
$lng['general']['activead'] = 'anuncio';
$lng['general']['subcats'] = 'subcategorias';
$lng['general']['subcat'] = 'subcategoria';
$lng['general']['view_ads'] = 'Ver Anuncios';
$lng['general']['back'] = '« Anterior';
$lng['general']['goto'] = 'Ir Para';
$lng['general']['page'] = 'Pagina';
$lng['general']['of'] = 'de';
$lng['general']['other'] = 'Outro';
$lng['general']['NA'] = 'N/D';
$lng['general']['add'] = 'Adicionar';
$lng['general']['delete_all'] = 'Apagar Selecionados';
$lng['general']['action'] = 'Ação';
$lng['general']['edit'] = 'Editar';
$lng['general']['delete'] = 'Apagar';
$lng['general']['total'] = 'Total';
$lng['general']['min'] = 'Min';
$lng['general']['max'] = 'Max';
$lng['general']['free'] = 'GRATIS';
$lng['general']['not_authorized'] = 'Não está autorizado a ver esta página!';
$lng['general']['access_restricted'] = 'O seu acesso a esta pagina foi limitado';
$lng['general']['featured_ads'] = 'Anuncios destaques';
$lng['general']['latest_ads'] = 'Anuncios Recentes';
$lng['general']['quick_search'] = 'Busca Rapida';
$lng['general']['go'] = 'Ir';
$lng['general']['unlimited'] = 'Sem Limite';


// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Já existen um ficheiro com o mesmo nome e não pode ser escrito por cima!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Não lhe é permitido carregar ficheiros maiores que ::MAX_FILE_UPLOAD_SIZE::K !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'A dimensão da Imagem é demasiado grande! Carregue um ficheiro com o máximo de ::MAX_FILE_WIDTH::px de largura e maximo de ::MAX_FILE_HEIGHT::px de altura !';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'O ficheiro não pode ser carregado!';
$lng['images']['errors']['no_file'] = 'Escolha um ficheiro para carregar!';
$lng['images']['errors']['no_folder'] = 'Pasta de Carregamento inexistente!';
$lng['images']['errors']['folder_not_writeable'] = 'Pasta de Carregamento não é de escrita!';
$lng['images']['errors']['file_type_not_accepted'] = 'O tipo do Ficheiro carregado não é válido ou não é permitido!';
$lng['images']['errors']['error'] = 'Ocorreu um erro a carregar o ficheiro. O erro foi: ::ERROR::'; // please leave intact ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Pasta de Carregamento de Miniaturas inexistente!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Pasta de Carregamento de Miniaturas sem permissão de escrita!';
$lng['images']['errors']['no_jpg_support'] = 'JPG não permitido!';
$lng['images']['errors']['no_png_support'] = 'PNG não permitido!';
$lng['images']['errors']['no_gif_support'] = 'GIF não permitido!';
$lng['images']['errors']['jpg_create_error'] = 'Erro a Criar imagem JPG a partir da Origem!';
$lng['images']['errors']['png_create_error'] = 'Erro a Criar imagem PNG a partir da Origem!';
$lng['images']['errors']['gif_create_error'] = 'Erro a Criar imagem GIF a partir da Origem!';

// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Entrar';
$lng['login']['logout'] = 'Sair';
$lng['login']['username'] = 'Nome de Utilizador';
$lng['login']['password'] = 'Palavra-Chave';
$lng['login']['forgot_pass'] = 'Esqueceu a sua Palavra Chave?';
$lng['login']['click_here'] = 'Clique Aqui';

$lng['login']['errors']['password_missing'] = 'Introduza a sua Palavra-Chave!';
$lng['login']['errors']['username_missing'] = 'Introduza o seu Nome de Utilizador!';
$lng['login']['errors']['username_invalid'] = 'O Nome de Utilizador é invalido!';
$lng['login']['errors']['invalid_username_pass'] = 'Nome de Utilizador ou Palavra-Chave Invalidos!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Sair';
$lng['logout']['loggedout'] = 'Acabou de Sair do Sistema!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Registo';
$lng['users']['repeat_password'] = 'Repetir Palavra-Chave';
$lng['users']['image_verification_info'] = 'Introduza a sequência visível na caixa abaixo.<br /> Letras maiúsculas de A a H <br /> e números de 0 a 9.';
$lng['users']['already_logged_in'] = 'Já se encontra no Sistema!';
$lng['users']['select'] = 'Selecione';

$lng['users']['info']['activate_account'] = 'Um email foi enviado para o seu endereço. Siga as instruções de forma a activar a sua conta.';
$lng['users']['info']['welcome_user'] = 'A sua conta foi criada. Por favor <a href="login.php">Entre</a> na sua Conta!';
$lng['users']['info']['awaiting_admin_verification'] = 'A sua conta encontra-se pendente e aguarda verificação, será notificado por email aquando da ativação.';
$lng['users']['info']['account_info_updated'] = 'A informação da sua conta foi Alterada!';
$lng['users']['info']['password_changed'] = 'A sua Palavra-Chave foi Alterada!';
$lng['users']['info']['account_activated'] = 'A sua Conta foi ativada! Por favor <a href="login.php">Entre</a> na sua Conta.';

$lng['users']['errors']['username_missing'] = 'Introduza Nome de Utilizador!';
$lng['users']['errors']['invalid_username'] = 'Nome de Utilizador Inválido!';
$lng['users']['errors']['username_exists'] = 'Nome de Utilizador já existe! Por Favor entre no caso de já possuir uma conta!';
$lng['users']['errors']['email_missing'] = 'Introduza endereço de email!';
$lng['users']['errors']['invalid_email'] = 'Endereço de email invalido!';
$lng['users']['errors']['passwords_dont_match'] = 'Palavra_chave não coincide!';
$lng['users']['errors']['email_exists'] = 'O Endereço de email já se encontra em Uso! Por Favor entre no caso de já possuir uma conta!';
$lng['users']['errors']['password_missing'] = 'Introduza Palavra-Chave!';
$lng['users']['errors']['invalid_validation_string'] = 'Sequência de Validação Incorrecta!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Conta Invalida ou Chave de Ativação Invalida! É Favor contatar o administrador!';
$lng['users']['errors']['account_already_active'] = 'A sua conta já se encontra ativa!';


// ------------------ NEW AD -------------------
$lng['listings']['listing'] = 'Anuncio';
$lng['listings']['category'] = 'Seleccione uma categoria';
$lng['listings']['package'] = 'Plano';
$lng['listings']['price'] = 'Preço';
$lng['listings']['ad_description'] = 'Detalhes';
$lng['listings']['title'] = 'Titulo';
$lng['listings']['description'] = 'Descrição';
$lng['listings']['image'] = 'Foto';
$lng['listings']['words_left'] = 'Palavras Restantes';
$lng['listings']['enter_photos'] = 'Adicionar Fotos';
$lng['listings']['ad_information'] = 'Introduza Informação';
$lng['listings']['free'] = 'GRÁTIS';
$lng['listings']['details'] = 'Detalhes';
$lng['listings']['stock_no'] = 'Num Stock';
$lng['listings']['location'] = 'Localização';
$lng['listings']['contact_info'] = 'Contato';
$lng['listings']['email_seller'] = 'Entre em contato com o vendedor';
$lng['listings']['no_recent_ads'] = 'Sem Anuncios Recentes';
$lng['listings']['no_ads'] = 'Sem Anúncios para esta Categoria';
$lng['listings']['added_on'] = 'Adicionado';
$lng['listings']['send_mail'] = 'Envia Mail para Utilizador';
$lng['listings']['details'] = 'Detalhes';
$lng['listings']['user'] = 'Utilizador';
$lng['listings']['price'] = 'Preço';
$lng['listings']['confirm_delete'] = 'De certeza que deseja apagar o Anuncio?';
$lng['listings']['confirm_delete_all'] = 'De certeza que deseja apagar todos os Anuncios?';
$lng['listings']['all'] = 'Todos Anuncios';
$lng['listings']['active_listings'] = 'Anuncios Ativos';
$lng['listings']['pending_listings'] = 'Anuncios Pendentes';
$lng['listings']['featured_listings'] = 'Anuncios Destaques';
$lng['listings']['expired_listings'] = 'Anuncios Caducados';
$lng['listings']['active'] = 'Ativo';
$lng['listings']['inactive'] = 'Inativo';
$lng['listings']['pending'] = 'Pendente';
$lng['listings']['featured'] = 'Destaque';
$lng['listings']['expired'] = 'Caducado';
$lng['listings']['order_by_date'] = 'Ordem Data';
$lng['listings']['order_by_category'] = 'Ordem Categoria';
$lng['listings']['order_by_make'] = 'Ordem Marca';
$lng['listings']['order_by_price'] = 'Ordem Preço';
$lng['listings']['order_by_views'] = 'Ordem Votos';
$lng['listings']['order_asc'] = 'Ascendente';
$lng['listings']['order_desc'] = 'Descendente';
$lng['listings']['id'] = '#Ident';
$lng['listings']['views'] = 'Votos';
$lng['listings']['date'] = 'Data';
$lng['listings']['no_listings'] = 'Sem Anuncios';
$lng['listings']['NA'] = 'N/A';
$lng['listings']['no_such_id'] = 'Não existe essa identificação';
$lng['listings']['mark_sold'] = 'Marcar Vendido';
$lng['listings']['mark_unsold'] = 'Marcar À Venda';
$lng['listings']['feature'] = 'Destaque';
$lng['listings']['sold'] = 'Vendido';
$lng['listings']['expired_on'] = 'Caducado em';
$lng['listings']['renew'] = 'Renovar';
$lng['listings']['print_page'] = 'Imprimir esta Página';
$lng['listings']['recommend_this'] = 'Recomendar';
$lng['listings']['more_listings'] = 'Mais Anuncios deste Utilizador';
$lng['listings']['all_listings_for'] = 'Todos Anuncios para';
$lng['listings']['free_category'] = 'Categoria GRATIS';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Tem certeza que quer apagar imagem?';

// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Numero de palavra excedido! Pode escrever o máximo de ::MAX:: palavras'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='O anuncio contem palavras impróprias, é favor revê-lo!';
$lng['listings']['errors']['title_missing']='Introduza um Titulo para o Anúncio!';
$lng['listings']['errors']['category_missing']='Escolha uma Categoria!';
$lng['listings']['errors']['invalid_category']='Categoria Inválida!';
$lng['listings']['errors']['package_missing']='Escolha um Plano!';
$lng['listings']['errors']['invalid_package']='Plano Inválido!';
$lng['listings']['errors']['content_missing']='Introduza um conteúdo para o Anúncio!';
$lng['listings']['errors']['invalid_price']='Preço Inválido!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Preço Min.';
$lng['quick_search']['price_high'] = 'Preço Max.';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Anunciar';
$lng['useraccount']['browse_your_listings'] = 'Anúncios';
$lng['useraccount']['modify_account_info'] = 'Dados Pessoais';
$lng['useraccount']['order_history'] = 'Movimentos';
$lng['useraccount']['total_listings'] = 'Todos os Anúncios';
$lng['useraccount']['total_views'] = 'Total';
$lng['useraccount']['active_listings'] = 'Anúncios Ativos';
$lng['useraccount']['pending_listings'] = 'Anúncios Pendentes';
$lng['useraccount']['last_login'] = 'Ultima Entrada';
$lng['useraccount']['last_login_ip'] = 'IP na Ultima Entrada';
$lng['useraccount']['expired_listings'] = 'Anúncios Expirados';
$lng['useraccount']['statistics'] = 'Estatistica';
$lng['useraccount']['welcome'] = 'Bem Vindo';
$lng['useraccount']['contact_name'] = 'Nome de Contato';
$lng['useraccount']['email'] = 'E-mail';
$lng['useraccount']['password'] = 'Palavra-Chave';
$lng['useraccount']['repeat_password'] = 'Repetir Palavra-Chave';
$lng['useraccount']['change_password'] = 'Alterar Palavra-Chave';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'para';
$lng['advanced_search']['price_min'] = 'Preço Min';
$lng['advanced_search']['price_max'] = 'Preço Max';
$lng['advanced_search']['word'] = 'Palavra';
$lng['advanced_search']['sort_by'] = 'Ordenar por';
$lng['advanced_search']['sort_by_price'] = 'Ord Preço';
$lng['advanced_search']['sort_by_date'] = 'Ord Data';
$lng['advanced_search']['sort_by_make'] = 'Ord Marca';
$lng['advanced_search']['sort_descendant'] = 'Ord Descendente';
$lng['advanced_search']['sort_ascendant'] = 'Ord Ascendente';
$lng['advanced_search']['only_ads_with_pic'] = 'Anúncios com Imagens';
$lng['advanced_search']['no_results'] = 'Não foram encontrados Anúncios para esses Critérios!';
$lng['advanced_search']['multiple_ads_matching'] = 'Existem ::NO_ADS:: Anúncios nessa Busca!'; // Please leave ::NO_ADS:: tag intact
$lng['advanced_search']['single_ad_matching'] = 'Existe um Anúncio nessa Busca!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Nome';
$lng['contact']['subject'] = 'Assunto';
$lng['contact']['email'] = 'Email';
$lng['contact']['webpage'] = 'Website';
$lng['contact']['comments'] = 'Comentários';
$lng['contact']['message_sent'] = 'A sua Mensagem foi enviada!';
$lng['contact']['sending_message_failed'] = 'Falhou a Entrega da Mensagem!';
$lng['contact']['mailto'] = 'Mail Para';

$lng['contact']['error']['name_missing'] = 'Introduza o seu nome!';
$lng['contact']['error']['subject_missing'] = 'Introduza um assunto!';
$lng['contact']['error']['email_missing'] = 'Introduza o seu email!';
$lng['contact']['error']['invalid_email'] = 'Email Inválido!';
$lng['contact']['error']['comments_missing'] = 'Introduza Mensagem / Comentário!';
$lng['contact']['error']['invalid_validation_number'] = 'Numero de Validação Incorrecto!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Endereço de Email';
$lng['password_recovery']['new_password'] = 'Nova Palavra-Chave';
$lng['password_recovery']['repeat_new_password'] = 'Repetir Palavra-Chave';
$lng['password_recovery']['invalid_key'] = 'Chave Invalida';

$lng['password_recovery']['email_missing'] = 'Introduza Endereço de E-mail!';
$lng['password_recovery']['invalid_email'] = 'Endereço de E-mail Inválido';
$lng['password_recovery']['email_inexistent'] = 'Não existe nenhum Utilizador registado com este E-mail';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Quant';
$lng['packages']['words'] = 'Palavras';
$lng['packages']['days'] = 'Dias';
$lng['packages']['pictures'] = 'Imagens';
$lng['packages']['picture'] = 'Imagem';
$lng['packages']['available'] = 'Disponivel';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Processador';
$lng['order_history']['amount'] = 'Valor';
$lng['order_history']['completed'] = 'Concluído';
$lng['order_history']['not_completed'] = 'Incompleto';
$lng['order_history']['ad_no'] = 'Ident Anuncio';
$lng['order_history']['date'] = 'Data';
$lng['order_history']['no_actions'] = 'Sem Registo Encomendas';
$lng['order_history']['order_by_date'] = 'Ordenar por Data';
$lng['order_history']['order_by_amount'] = 'Ordenar por Valor';
$lng['order_history']['order_by_processor'] = 'Ordenar por Processador';
$lng['order_history']['description'] = 'Descrição';
$lng['order_history']['newad'] = 'Novo'; 
$lng['order_history']['renew'] = 'Renovar'; 
$lng['order_history']['featured'] = 'Anuncio'; 
 
// --------------------- ORDER --------------------
$lng['order']['date'] = 'Ordem - Data';
$lng['order']['price'] = 'Ordem - Preço';
$lng['order']['title'] = 'Ordem - Nome';
$lng['order']['desc'] = 'Descendente';
$lng['order']['asc'] = 'Ascendente';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Enviar a amigo';
$lng['recommend']['your_name'] = 'Seu Nome';
$lng['recommend']['your_email'] = 'Seu Email';
$lng['recommend']['friend_name'] = 'Nome do Amigo';
$lng['recommend']['friend_email'] = 'Email do Amigo';
$lng['recommend']['message'] = 'Menssagem para o amigo';


$lng['recommend']['error']['your_name_missing'] = 'Preencha com o seu nome!';
$lng['recommend']['error']['your_email_missing'] = 'Preencha com o seu email!';
$lng['recommend']['error']['friend_name_missing'] = 'Preencha com o nome do amigo!';
$lng['recommend']['error']['friend_email_missing'] = 'Preencha com o Email do amigo!';
$lng['recommend']['error']['invalid_email'] = 'Endereço de email invalido!';

// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Anúncios';
$lng['stats']['general'] = 'Geral';

// ----------------------------------------------
//
//  		added to vers. 5.0
//
// ----------------------------------------------

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'Subscrever';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Estado';
$lng['general']['favourites'] = 'Favoritos';
$lng['general']['as'] = 'como';
$lng['general']['view'] = 'Ver';
$lng['general']['none'] = 'Nenhum';
$lng['general']['yes'] = 'sim';
$lng['general']['no'] = 'não';
$lng['general']['next'] = 'Seguinte';
$lng['general']['finish'] = 'Terminar';
$lng['general']['download'] = 'Download';
$lng['general']['remove'] = 'Remover';
$lng['general']['previous_page'] = '« Anterior';
$lng['general']['next_page'] = 'Seguinte »';
$lng['general']['items'] = 'items';
$lng['general']['active'] = 'Ativo';
$lng['general']['inactive'] = 'Inativo';
$lng['general']['expires'] = 'Termina em';
$lng['general']['available'] = 'Disponivel';
$lng['general']['cancel'] = 'Cancela';
$lng['general']['never'] = 'Nunca';
$lng['general']['asc'] = 'Ascendente';
$lng['general']['desc'] = 'Descendente';
$lng['general']['pending'] = 'Pendente';
$lng['general']['upload'] = 'Carregar';
$lng['general']['processing'] = 'A processar, aguarde por favor ... ';
$lng['general']['help'] = 'Ajuda';
$lng['general']['hide'] = 'Esconde';
$lng['general']['link'] = 'Ligação';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['errors']['demo'] = 'Esta é uma versão DEMO limitada. Não lhe é permitido alterar certos parametros!';
$lng['general']['check_all'] = 'Marcar Todos';
$lng['general']['uncheck_all'] = 'Desmarcar Todos';
$lng['general']['all'] = 'All';

// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Stand';
$lng['users']['store_banner'] = 'Banner do Stand';
$lng['users']['waiting_mail_activation'] = 'Aguarda Aprovação por email';
$lng['users']['waiting_admin_activation'] = 'Aguarda Aprovação Administrativa';

$lng['users']['info']['store_banner'] = 'Esta Imagem será usada como Logótipo da sua Loja.';


// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Denuncia Anúncio';
$lng['listings']['report_reason'] = 'Motivo da Denúncia';
$lng['listings']['meta_info'] = 'Meta Informação';
$lng['listings']['meta_keywords'] = 'Meta Palavras';
$lng['listings']['meta_description'] = 'Meta Descrição';
$lng['listings']['not_approved'] = 'Não Aprovado';
$lng['listings']['approve'] = 'Aprovar';
$lng['listings']['choose_payment_method'] = 'Escolha método pagamento';

$lng['listings']['choose_category'] = 'Escolha Categoria';
$lng['listings']['choose_plan'] = 'Escolha Plano';
$lng['listings']['enter_ad_details'] = 'Adicione Detalhes';
$lng['listings']['ad_details'] = 'Detalhes';
$lng['listings']['add_photos'] = 'Adiciona Fotos';
$lng['listings']['ad_photos'] = 'Fotos';
$lng['listings']['edit_photos'] = 'Editar Fotos';
$lng['listings']['extra_options'] = 'Extras';
$lng['listings']['review'] = 'Rever';
$lng['listings']['finish'] = 'Terminar';
$lng['listings']['next_step'] = 'Passo Seguinte';
$lng['listings']['included'] = 'Incluido';
$lng['listings']['finalize'] = 'Finalize';
$lng['listings']['zip'] = 'Zip';
$lng['listings']['add_to_favourites'] = 'Adicionar aos favoritos';
$lng['listings']['confirm_add_to_fav'] = 'AVISO! Não está no Sistema! A lista será Temporária!';
$lng['listings']['add_to_fav_done'] = 'O Anuncio foi adicionado à lista dos Favoritos!';
$lng['listings']['confirm_delete_favourite'] = 'Tem a certeza que deseja eliminar na Lista?';
$lng['listings']['no_favourites'] = 'Sem Anuncios Favoritos';
$lng['listings']['extra_options'] = 'Extras';
$lng['listings']['highlited'] = 'Realçado';
$lng['listings']['priority'] = 'Prioridade';
$lng['listings']['video'] = 'Anuncios Video';
$lng['listings']['short_video'] = 'Video';
$lng['listings']['pending_video'] = 'Pendentes Video';
$lng['listings']['video_code'] = 'Codigo Video';
$lng['listings']['total'] = 'Total';
$lng['listings']['approve_ad'] = 'Aprovar';
$lng['listings']['finalize_later'] = 'Finalizar mais Tarde';
$lng['listings']['click_to_upload'] = 'Clique para carregar';
$lng['listings']['files_uploaded'] = ' Fotos Carregadas de um total de ';
$lng['listings']['allowed'] = ' fotos permitidas!';
$lng['listings']['limit_reached'] = ' Atingido Limite Permitido!';
$lng['listings']['edit_options'] = 'Editar Opções';
$lng['listings']['view_store'] = 'Ver Loja';
$lng['listings']['edit_ad_options'] = 'Editar Opções';
$lng['listings']['no_extra_options_selected'] = 'Sem Extras Seleccionados!';
$lng['listings']['highlited_listings'] = 'Anuncios Realçados';
$lng['listings']['for_listing'] = 'para anuncios nº ';
$lng['listings']['expires_on'] = 'Termina';
$lng['listings']['expired_on'] = 'Caducado';
$lng['listings']['pending_ad'] = 'Pendentes';
$lng['listings']['pending_highlited'] = 'Realçados Pendentes';
$lng['listings']['pending_featured'] = 'Destaques Pendentes';
$lng['listings']['pending_priority'] = 'Prioritários Pendentes';
$lng['listings']['enter_coupon'] = 'Introd Código Desconto';
$lng['listings']['discount'] = 'Desconto';
$lng['listings']['select_plan'] = 'Selecione Plano';
$lng['listings']['pending_subscription'] = 'Subscrição Pendente';
$lng['listings']['remove_favourite'] = 'Remover Favorito';

$lng['listings']['order_up'] = 'Ordem para cima';
$lng['listings']['order_down'] = 'Ordem para baixo';

$lng['listings']['errors']['invalid_youtube_video'] = 'Video Youtube Inválido!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'Subscrever';
$lng['useraccount']['no_package'] = 'Sem Planos';
$lng['useraccount']['packages'] = 'Planos';
$lng['useraccount']['date_start'] = 'Data Inicio';
$lng['useraccount']['date_end'] = 'Data Fim';
$lng['useraccount']['remaining_ads'] = 'Anuncios Restantes';
$lng['useraccount']['account_type'] = 'Tipo de Conta';
$lng['useraccount']['unfinished_listings'] = 'Anuncios por Terminar';
$lng['useraccount']['confirm_delete_subscription'] = 'Deseja mesmo remover esta Subscrição?';
$lng['useraccount']['buy_store'] = 'Comprar Loja';
$lng['useraccount']['bulk_uploads'] = 'Carregamentos em Massa';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Subscrição';
$lng['packages']['ads'] = 'Anuncios';
$lng['packages']['name'] = 'Nome';
$lng['packages']['details'] = 'Detalhes';
$lng['packages']['no_ads'] = 'Numero de Anuncios';
$lng['packages']['subscription_time'] = 'Tempo de Subscrição';
$lng['packages']['no_pictures'] = 'Imagens permitidas';
$lng['packages']['no_words'] = 'Numero de Palavras';
$lng['packages']['ads_availability'] = 'Disponibilidade Anuncios';
$lng['packages']['featured'] = 'Destaques';
$lng['packages']['highlited'] = 'Realçados';
$lng['packages']['priority'] = 'Prioritários';
$lng['packages']['video'] = 'Anuncios Video';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Subscrição';
$lng['order_history']['post_listing'] = 'Colocar Anúncio';
$lng['order_history']['renew_listing'] = 'Renovar Anúncio';
$lng['order_history']['feature_listing'] = 'Criar Anúncio';
$lng['order_history']['subscribe_to_package'] = 'Subscrever Plano';
$lng['order_history']['complete_payment'] = 'Completar Pagamento';
$lng['order_history']['complete_payment_for'] = 'Completar Pagamento Para';
$lng['order_history']['details'] = 'Detalhes';
$lng['order_history']['subscription_no'] = 'Subscrição Nº';
$lng['order_history']['highlited'] = 'Realçar';
$lng['order_history']['priority'] = 'Prioritátio';
$lng['order_history']['video'] = 'Anúncios Video';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Escolha 1 Plano Por Favor!';
$lng['buy_package']['error']['choose_processor'] = 'Escolha tipo de pagamento!';
$lng['buy_package']['error']['invalid_processor'] = 'Processador de Pagamento Inválido!';
$lng['buy_package']['error']['invalid_package'] = 'Plano Invalido!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Transação Paypal Inválida!';
$lng['2co']['invalid_transaction'] = 'Transação 2 CheckOut Inválida!';
$lng['moneybookers']['invalid_transaction'] = 'Transação MoneyBookers Inválida!';
$lng['authorize']['invalid_transaction'] = 'Transação Authorize.net Inválida!';
$lng['manual']['invalid_transaction'] = 'Transação Inválida!';

$lng['paypal']['transaction_canceled'] = 'Transação Paypal Cancelada!';
$lng['2co']['transaction_canceled'] = 'Transação 2CheckOut Inválida!';
$lng['moneybookers']['transaction_canceled'] = 'Transação Moneybookers cancelada!';
$lng['authorize']['transaction_canceled'] = 'Transação Authorize.net Inválida!';
$lng['manual']['transaction_canceled'] = 'Transação Inválida!';

$lng['payments']['transaction_already_processed'] = 'A transação Já Foi Processada!!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Aprovar Subscrição';
$lng['subscribe']['payment_method'] = 'Metodo de pagamento';

// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Copiar email: ';
$lng['bcc_mails']['from'] = 'de: ';
$lng['bcc_mails']['to'] = 'Para: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Estado envio em Massa: ';
$lng['ie']['successfully'] = 'Anúncio Acrescentado com Sucesso';
$lng['ie']['failed'] = 'falhado';
$lng['ie']['uploaded_listings'] = 'Lista de Carregamentos:';
$lng['ie']['errors']['upload_import_file'] = 'Carregue de Origem para Importar!';
$lng['ie']['errors']['incorrect_file_type'] = 'Tipo de Ficheiro Incorrecto! O tipo de ficheiro deverá ser: ';
$lng['ie']['errors']['could_not_open_file'] = 'Não foi possivel abrir ficheiro!';
$lng['ie']['errors']['choose_categ'] = 'Escolha uma Categoria!';
$lng['ie']['errors']['could_not_save_file'] = 'Não foi possivel transferir o ficheiro: ';
$lng['ie']['errors']['required_field_missing'] = 'Faltam Campos Exigidos: ';

$lng['ie']['errors']['incorrect_data_count'] = 'Elementos de dados incorretos contar para a linha número: ';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Área de pesquisa';
$lng['areasearch']['all_locations'] = 'Todos os locais';
$lng['areasearch']['exact_location'] = 'A localização exata';
$lng['areasearch']['around'] = 'ao redor';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Escolha Stand';

// ------------------- end vers 5.0 -----------------


// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Sim';
$lng['general']['No'] = 'Não';
$lng['general']['or'] = 'ou';
$lng['general']['in'] = 'em';
$lng['general']['by'] = 'por';
$lng['general']['close_window'] = 'Fechar Janela';
$lng['general']['more_options'] = 'mais opções »';
$lng['general']['less_options'] = '« menos opções';
$lng['general']['send'] = 'Enviar';
$lng['general']['save'] = 'Salvar';
$lng['general']['for'] = 'para';
$lng['general']['to'] = 'para';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Marcar como alugado';
$lng['listings']['mark_unrented'] = 'Desmarcar como alugado';
$lng['listings']['rented'] = 'Alugado';
$lng['listings']['your_info'] = 'Suas informações';
$lng['listings']['email'] = 'Sua conta de email';
$lng['listings']['name'] = 'Seu Nome';
$lng['listings']['listing_deleted'] = 'Seu anúncio foi apagado!';
$lng['listings']['post_without_login'] = 'Anúncie sem fazer o login';
$lng['listings']['waiting_activation'] = 'Esperando ativação';
$lng['listings']['waiting_admin_approval'] = 'Aguardando a aprovação do administrador';
$lng['listings']['dont_need_account'] = 'Não prescisa de uma conta? Publique o seu anúncio, sem entrar!';
$lng['listings']['post_your_ad'] = 'Publique o seu anúncio!';
$lng['listings']['posted'] = 'Enviado';
$lng['listings']['select_subscription'] = 'Selecione Assinatura';
$lng['listings']['choose_subscription'] = 'Escolha Assinatura';
$lng['listings']['inactive_listings'] = 'Anúncios desativados';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Refinar Pesquisa';
$lng['search']['refine_by_keyword'] = 'Filtrar por palavra-chave/keyword';
$lng['search']['showing'] = 'Mostrando';
$lng['search']['more'] = 'Mais ...';
$lng['search']['less'] = 'Menos ...';
$lng['search']['search_for'] = 'Pesquisar';
$lng['search']['save_your_search'] = 'Salve sua busca';
$lng['search']['save'] = 'Salvar';
$lng['search']['search_saved'] = 'Sua busca foi salva!';
$lng['search']['must_login_to_save_search'] = 'Você deve entrar na sua conta para salvar a sua pesquisa!';
$lng['search']['view_search'] = 'Exibir pesquisa';
$lng['search']['all_categories'] = 'Todas as categorias';
$lng['search']['more_than'] = 'mais do que';
$lng['search']['less_than'] = 'menos que';

$lng['search']['error']['cannot_save_empty_search'] = 'Sua busca não contém qualquer dos termos de modo que não podem ser salvos!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Pesquisas Salvas';
$lng['useraccount']['view_saved_searches'] = 'Ver Buscas salvas';
$lng['useraccount']['no_saved_searches'] = 'Sem Buscas salvas';
$lng['useraccount']['recurring'] = 'Recorrentes';
$lng['useraccount']['date_renew'] = 'Data renovada';
$lng['useraccount']['logged_in_as'] = '';
$lng['useraccount']['subscriptions'] = 'Inscrições';

$lng['users']['activate_account'] = 'Ativar Conta';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Adicionar inscrição';
$lng['subscriptions']['package'] = 'Assinatura';
$lng['subscriptions']['remaining_ads'] = 'Anúncios Restante';
$lng['subscriptions']['recurring'] = 'Recorrentes';
$lng['subscriptions']['date_start'] = 'Data de Início';
$lng['subscriptions']['date_end'] = 'Data Término';
$lng['subscriptions']['date_renew'] = 'Data de renovação';
$lng['subscriptions']['confirm_delete'] = 'Tem certeza de que deseja apagar a assinatura?';
$lng['subscriptions']['no_subscriptions'] = 'Sem Inscrições';

// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] = 'Não tem uma conta ainda?';

// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Permitir pagamentos recorrentes para essa assinatura';

// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Os seguintes campos obrigatórios estão em falta: ';

// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Comprar Página Do Stand';


$lng['images']['errors']['max_photos'] = 'Máximo de fotos enviadas!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'E-mail alerta';
$lng['alerts']['email_alerts'] = 'Alertas por E-mail';
$lng['alerts']['no_alerts'] = 'Sem alertas por E-mail';
$lng['alerts']['view_email_alerts'] = 'Ver o seu E-mail de avisos';
$lng['alerts']['send_email_alerts'] = 'Enviar E-mail avisos';
$lng['alerts']['immediately'] = 'Imediatamente';
$lng['alerts']['daily'] = 'Diariamente';
$lng['alerts']['weekly'] = 'Semanal';
$lng['alerts']['your_email'] = 'seu endereço de email';
$lng['alerts']['create_alert'] = 'Criar Alerta';
$lng['alerts']['email_alert_info'] = 'Receber E-mails de alertas quando novos anúncios aparecerem nesta pesquisa.';
$lng['alerts']['alert_added'] = 'Seu alerta foi criado!';
$lng['alerts']['alert_added_activate'] = 'Você receberá um e-mail em breve em <b>::EMAIL::</b>. Clique no link do e-mail para ativar o alerta de e-mail!'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Procurar em';
$lng['alerts']['keyword'] = 'palavra-chave/keyword';
$lng['alerts']['frequency'] = 'Frequência de Alerta';
$lng['alerts']['alert_activated'] = 'Seu alerta foi ativado! Você vai começar a receber e-mails para o seu alerta.';
$lng['alerts']['alert_unsubscribed'] = 'Seu alerta foi apagado!';
$lng['alerts']['started_on'] = 'Iniciado em';
$lng['alerts']['no_terms_searched'] = 'Não há condições estabelecidas para esta pesquisa!';
$lng['alerts']['no_listings'] = 'Sem referências para este alerta!';

$lng['alerts']['error']['email_required'] = 'Por favor, indique um endereço de e-mail para o seu alerta!';
$lng['alerts']['error']['invalid_email'] = 'Endereço de e-mail inválido alerta!';
$lng['alerts']['error']['invalid_frequency'] = 'Frequência de alerta inválido!';
$lng['alerts']['error']['login_required'] = 'Por Favor <a href="::LINK::">efetue log-in</a> para poder registrar um alerta!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Escolha pelo menos uma chave de pesquisa, exceto categoria!';
$lng['alerts']['error']['invalid_confirmation'] = 'Alerta de confirmação inválido!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Requerimento de cancelamento de assinatura inválido!';


// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Calculadora de Empréstimo';
$lng_loancalc['sale_price'] = 'Preço de venda';
$lng_loancalc['down_payment'] = 'Adiantamento/Entrada';
$lng_loancalc['trade_in_value'] = 'Valor do objeto de entrada';
$lng_loancalc['loan_amount'] = 'Montante do empréstimo';
$lng_loancalc['sales_tax'] = 'Taxa de vendas';
$lng_loancalc['interest_rate'] = 'Taxa de juro';
$lng_loancalc['loan_term'] = 'Termo de empréstimo';
$lng_loancalc['months'] = 'meses';
$lng_loancalc['years'] = 'anos';
$lng_loancalc['or'] = 'ou';
$lng_loancalc['monthly_payment'] = 'Mensalidade';
$lng_loancalc['calculate'] = 'Calcular';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Comentários';
$lng_comments['make_a_comment'] = 'Faça um comentário';
$lng_comments['login_to_post'] = 'Por Favor <a href="::LOGIN_LINK::">entre</a> e assim você poderá postar um comentário.';

$lng_comments['name'] = 'Nome';
$lng_comments['email'] = 'Email';
$lng_comments['website'] = 'Website';
$lng_comments['submit_comment'] = 'Deixar Comentário';

$lng_comments['error']['name_missing'] = 'Por favor, escreva o seu nome!';
$lng_comments['error']['content_missing'] = 'Por favor, deixe um comentário!';
$lng_comments['error']['website_missing'] = 'Por favor, escreva seu site!';
$lng_comments['error']['email_missing'] = 'Por favor, digite seu e-mail!';
$lng_comments['error']['listing_id_missing'] = 'Entrada comentário inválido!';

$lng_comments['error']['invalid_email'] = 'E-mail inválido!';
$lng_comments['error']['invalid_website'] = 'Website inválido!';
$lng_comments['errors']['badwords'] = 'O seu comentário contém palavras proibidas! Edite a sua mensagem!';

$lng_comments['info']['comment_added'] = 'Seu comentário foi adicionado! Clique <a id="newad">aqui</a> se você deseja adicionar outro comentário.';
$lng_comments['info']['comment_pending'] = 'Seu comentário está pendente e à espera de verificação do administrador.';

// ----------------- end comments module --------------------

// -------------
$lng['tb']['next'] = 'Seguinte &raquo;';
$lng['tb']['prev'] = '&laquo; Anterior';
$lng['tb']['close'] = 'Fechar';
$lng['tb']['or_esc'] = 'ou ESC';

// ------------------- end vers 6.0 -----------------	

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Mensagens';
$lng['messages']['confirm_delete_all'] = 'Tem certeza que quer apagar as mensagens selecionadas?';
$lng['messages']['listing'] = 'Anuncio';
$lng['messages']['no_messages'] = 'Não há mensagens';
$lng['general']['reply'] = 'Responder à mensagem';
$lng['messages']['message'] = 'Mensagem';
$lng['messages']['from'] = 'De';
$lng['messages']['to'] = 'Para';
$lng['messages']['on'] = 'Data';
$lng['messages']['view_thread'] = 'Veja tópico';
$lng['messages']['started_for_listing'] = 'Iniciado por anúncio';
$lng['messages']['view_complete_message'] = 'Ver mensagem completa aqui';
$lng['messages']['message_history'] = 'Mensagem história';
$lng['messages']['yourself'] = 'Você';
$lng['messages']['report_spam'] = 'Denunciar spam';
$lng['messages']['reported_as_spam'] = 'Denunciado como spam';
$lng['messages']['confirm_report_spam'] = 'Tem certeza que quer denunciar esta mensagem  como spam?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'ID é inválido';
$lng['listings']['show_map'] = 'Mostrar o mapa';
$lng['listings']['hide_map'] = 'Ocultar Mapa';
$lng['listings']['see_full_listing'] = 'Veja o anúncio completo';
$lng['listings']['list'] = 'Lista';
$lng['listings']['gallery'] = 'Fotos';
$lng['listings']['remove_fav_done'] = 'O anúncio foi removido da lista de favoritos!';
$lng['search']['high_no_results'] = 'O número de resultados de sua pesquisa  é muito  alta.  Os resultados listados estão limitadas  às mais relevantes dos seus resultados. Refine sua busca ainda mais, a fim de diminuir o número de resultados e obter resultados mais relevantes!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Este endereço de e-mail não é permitido!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Você não tem permissão para usar esta assinatura mais, o número máximo de uso é atingido!';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Escolha a localização';
$lng['location']['choose'] = 'Escolha';
$lng['location']['change'] = 'Mude';
$lng['location']['all_locations'] = 'Todas as localizações';
// ----------------- end version 7.05 ----------------


// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Categoria';
$lng['location']['save_location'] = 'Guardar localização';

$lng['credits']['credits'] = 'Créditos';
$lng['credits']['credit'] = 'Crédito';
$lng['credits']['pending_credits'] = 'Créditos pendentes';
$lng['credits']['current_credits'] = 'Créditos atuais';
$lng['credits']['one_credit_equals'] = 'Um crédito equivale a';
$lng['credits']['credits_amount'] = 'Quantidade de créditos';
$lng['credits']['buy_extra_credits'] = 'Comprar créditos extra';
$lng['credits']['credits_package'] = 'Pacote de créditos';
$lng['credits']['select_package'] = 'Selecione pacote de créditos';
$lng['credits']['choose_package'] = 'Escolha pacote';
$lng['credits']['you_currently_have'] = 'Você tem atualmente ';
$lng['credits']['you_currently_have_no_credits'] = 'Neste momento não tem créditos ';
$lng['credits']['pay_using_credits'] = 'Pagar usando créditos';
$lng['credits']['not_enough_credits'] = 'Nem créditos suficientes para o pagamento!';
$lng['credits']['scredits'] = 'Créditos';
$lng['credits']['scredit'] = 'Crédito';



$lng['order_history']['credits_purchase'] = 'Comprar créditos';
$lng['order_history']['invalid_order'] = 'Ordem inválida!';

// ------------------- end version 7.06 ------------------

$lng['listings']['wait_while_redirected'] = 'Por favor aguarde...';

// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'Por favor <a href="::LOGIN_LINK::">Entre</a> para ver as informações de contato!!';
$lng['listing']['no_contact_information'] = 'Não há informação de contato disponível.';


$lng['navbar']['register_as'] = 'Registre-se como';
$lng['listings']['all_ads'] = 'Todos os anúncios';
$lng['listings']['refine'] = 'Refinar';
$lng['listings']['results'] = 'resultados';
$lng['listings']['photos'] = 'fotos';
$lng['listings']['user_details'] = 'Ver detalhes de utilizador';
$lng['listings']['back_to_details'] = 'Voltar aos detalhes do anúncio';

$lng['listings']['post_free_ad'] = 'Publicar um anúncio grátis';

$lng['users']['username_available'] = 'O nome de usuário está disponível!';
$lng['users']['username_not_available'] = 'Nome de usuário não está disponível!';

$lng['general']['not_found'] = 'A página solicitada não foi encontrada!';
$lng['general']['full_version'] = 'A versão completa';
$lng['general']['mobile_version'] = 'Versão móvel';
$lng['failed'] = 'Falha';
$lng['remember_me'] = 'Lembre-me';

$lng['less_than_a_minute'] = 'menos de um minuto atrás';
$lng['minute'] = 'minuto';
$lng['minutes'] = 'minutos';
$lng['hour'] = 'hora';
$lng['hours'] = 'horas';
$lng['yesterday'] = 'Ontem';
$lng['day'] = 'dia';
$lng['days'] = 'dias';
$lng['ago_postfix'] = ' atrás';
$lng['ago_prefix'] = '';

// ------------------- end version 7.08 ------------------

// ------------------- version 8.01 ------------------

$lng['today'] = 'Today';
$lng['messages']['confirm_delete'] = 'Are you sure you want to delete this message?';
$lng['listings']['change_category'] = 'Change category';
$lng['listings']['change_plan'] = 'Select a different plan';
$lng['listings']['choose_active_subscription'] = 'Choose from your active subscriptions';


$lng['useraccount']['request_removal'] = 'Request account removal';
$lng['useraccount']['request_removal_now'] = 'Request removal now!';
$lng['useraccount']['removal_verification_sent'] = 'You will receive an email containing a verification link. Please click the link in order to confirm the removal request!';

$lng['contact']['message_waits_admin_aproval'] = 'Your message will be delivered once approved by administrator!';

$lng['general']['accept'] = 'Accept';
$lng['general']['decline'] = 'Decline';

$lng['general']['tax'] = 'Tax';
$lng['general']['total_with_tax'] = 'Total with tax';

$lng['navbar']['rss'] = 'RSS';

$lng['general']['in_category'] = 'In category';

$lng['users']['user_info'] = 'User information';
$lng['users']['store_info'] = 'Store information';
$lng['users']['user_listings'] = 'All listings';

$lng['login']['errors']['invalid_email_pass'] = 'Invalid email or password!';
$lng['general']['or'] = 'or';
$lng['newad']['choose_a_new_plan'] = 'Choose a new plan';

$lng['listings']['no_extra_options_available'] = 'There are no extra options available!';

$lng['listings']['map'] = 'Map';

$lng['users']['affiliate'] = 'Affiliate';
$lng['users']['affiliate_id'] = 'Affiliate id';
$lng['users']['affiliate_link'] = 'Affiliate link';
$lng['users']['affiliate_paypal_email'] = 'Affiliate PayPal account';
$lng['users']['info']['affiliate_paypal_email'] = 'You will receive here the money earned with your affiliate account';
$lng['users']['errors']['affiliate_paypal_email'] = 'Please enter your PayPal account! You will receive here the money earned with your affiliate account';

$lng['listings']['result'] = 'result';

$lng['confirm_delete'] = 'Are you sure you want to delete the selected item?';
$lng['confirm_delete_all'] = 'Are you sure you want to delete the selected items?';

$lng['general']['show'] = 'Show';
$lng['general']['on_a_page'] = 'on a page';
$lng['general']['return'] = 'Return';

$lng['login']['register_for_free'] = 'Register for free!';
$lng['general']['sent'] = 'Sent';
$lng['general']['received'] = 'Received';
$lng['messages']['spam'] = 'Spam';

$lng['newad']['not_logged_in'] = 'You are not logged in!';
$lng['newad']['or_post_without_account'] = 'or continue posting without an account!';

$lng_comments['scomments'] = 'comments';
$lng_comments['scomment'] = 'comment';
$lng['general']['on'] = 'on';

$lng['affiliates']['last_payment'] = 'Last payment';
$lng['affiliates']['last_payment_date'] = 'Last payment date';
$lng['affiliates']['next_payment_date'] = 'Next payment date';
$lng['affiliates']['total_due'] = 'Total due';
$lng['affiliates']['total_payments'] = 'Total payments received';
$lng['affiliates']['revenue_history'] = 'Revenue history';
$lng['affiliates']['payments_history'] = 'Payments history';
$lng['affiliates']['pending_payment'] = 'Pending payment';
$lng['affiliates']['released'] = 'Released';
$lng['affiliates']['not_released'] = 'Not released';
$lng['affiliates']['paid'] = 'Paid';
$lng['affiliates']['not_paid'] = 'Not paid';

$lng['general']['no_items'] = 'No items';
$lng['useraccount']['amount_start'] = 'Amount from';
$lng['useraccount']['amount_end'] = 'Amount to';
$lng['not_allowed_to_post_ads'] = 'You are not allowed to post ads with this account!';

// ------------------- end version 8.01 ------------------

/* ------------------- version 8.4 ----------------------- */

$lng['listings']['info']['listing_pending_edited'] = 'The changes you make will remain pending until being reviewed by an administrator!';

$lng['useraccount']['auction'] = 'Auction';
$lng['useraccount']['add_auction'] = 'Add Auction';
$lng['useraccount']['remove_auction'] = 'Remove Auction';
$lng['useraccount']['auction_start_price'] = 'Start price';
$lng['useraccount']['starts_at'] = 'Starts at';
$lng['useraccount']['no_bids'] = 'No bids';
$lng['useraccount']['max_bid'] = 'Max bid';
$lng['useraccount']['enable'] = 'Enable';
$lng['useraccount']['disable'] = 'Disable';
$lng['useraccount']['error']['auction_start_price'] = 'Please enter auction starting price!';
$lng['useraccount']['info']['auction_added'] = 'The auction was successfully added!';
$lng['useraccount']['confirm_delete'] = 'Confirm delete action?';
$lng['useraccount']['place_bid'] = 'Place your bid!';
$lng['useraccount']['login_to_bid'] = 'Please login to place your bid!';
$lng['useraccount']['bid'] = 'Bid';
$lng['useraccount']['message_to_seller'] = 'Message to seller';
$lng['useraccount']['error']['enter_bid'] = 'Please enter your bid!';
$lng['useraccount']['error']['incorrect_bid'] = 'Invalid bid!';
$lng['useraccount']['error']['bid_smaller_than_starting_price'] = 'Your bid is smaller than starting price!';
$lng['useraccount']['bid_placed'] = 'Your bid was placed!';
$lng['useraccount']['placed_on'] = 'Placed on';
$lng['useraccount']['no_bids_for_auction'] = 'There are no bids for this auction!';

/* ------------------- end version 8.4 ----------------------- */

// ---------------  8.5 --------------------
$lng['general']['click_to_view'] = 'Click to view';
$lng['advanced_search']['clear_search'] = 'Clear search';
$lng['listings']['currency'] = 'Currency';
$lng['listings']['show_phone'] = 'Show phone';
$lng['listings']['make_public'] = 'Make public';

$lng['advanced_search']['only_ads_with_auction'] = 'Only Ads With Auctions';
$lng['security']['failed_login_attempts'] = 'Repeated failed login attempts';

// --------------- end  8.5 --------------------

// ---------------  8.7 --------------------
$lng['users']['info']['sms_verification'] = 'Your account is currently inactive! You will soon receive an SMS message containing a verification code. Enter the code in the box below to activate your account.';
$lng['users']['verification_code'] = 'Verification code';
$lng['users']['waiting_sms_activation'] = 'Waiting for SMS activation';
$lng['listings']['info']['sms_verification'] = 'Your listing is currently inactive! You will soon receive an SMS message containing a verification code. Enter the code in the box below to activate your listing.';
$lng['listings']['activate_listing'] = 'Activate listing';
$lng['listings']['errors']['sms_invalid_activation'] = 'Invalid activation key!';
$lng['listings']['info']['listing_pending'] = 'Your listing is pending and waiting for administrator verification.';
$lng['listings']['info']['listing_activated'] = 'Your listing is activated!';
$lng['listings']['errors']['listing_already_active'] = 'Your listing is already active!';
$lng['listings']['errors']['invalid_phone'] = 'Invalid phone number!';


// ---------------  8.7 --------------------

// ---------------  8.10 --------------------
$lng['newad']['available_for'] = 'Available for';
$lng['newad']['available_until_expires'] = 'Available until the listing expires';
$lng['newad']['view_info'] = 'View info';
$lng['users']['errors']['phone_not_permitted'] = 'This phone number is not permitted!';
$lng['invoice']['invoice'] = 'Invoice';
$lng['invoice']['invoice_no'] = 'Invoice no';
$lng['invoice']['bill_to'] = 'Bill to';
$lng['invoice']['qty'] = 'Qty';
$lng['invoice']['unit_price'] = 'Unit price';
$lng['invoice']['subtotal'] = 'Subtotal';
$lng['invoice']['sale_tax'] = 'Sale tax';
$lng['invoice']['new_listing'] = 'New listing';
$lng['invoice']['renew_listing'] = 'Listing renewal';
$lng['invoice']['featured_eo'] = 'Featured extra option for listing';
$lng['invoice']['highlited_eo'] = 'Highlited extra option for listing';
$lng['invoice']['priority_eo'] = 'Priority extra option for listing';
$lng['invoice']['video_eo'] = 'Video extra option for listing';
$lng['invoice']['new_credits_pkg'] = 'New credits plan purchase';
$lng['invoice']['store'] = 'Dealer page purchase';
$lng['invoice']['new_subscription'] = 'New subscription purchase';
$lng['invoice']['renew_subscription'] = 'Subscription renewal';
$lng['weeks'] = 'Weeks';
$lng['week'] = 'Week';
$lng['months'] = 'Months';
$lng['month'] = 'Month';
// --------------- end 8.10 --------------------

// --------------- 9.1 --------------------
$lng['listings']['show_whatsapp'] = 'Show WhatsApp';
$lng['general']['to_top'] = 'Go to top';
$lng['quick_search']['location'] = 'Postcode or location';
$lng['listings']['see_all'] = 'See all ads &raquo;';
$lng['listings']['ads'] = 'ads';
$lng['listings']['user_since'] = 'User since';
$lng['listings']['contact_details'] = 'Contact details';
$lng['listings']['favourite'] = 'Favorite';
$lng['listings']['manage_ad'] = 'Manage your ad';
$lng['useraccount']['show_bids'] = 'Show bids';
$lng['listings']['report_abusive'] = 'Report abusive ad';
$lng['listings']['enable_auction'] = 'Enable auction';
$lng['invoice']['download'] = 'Download invoice';


$lng['register']['group'] = 'Account type';
$lng['register']['change_group'] = 'Change account type';
$lng['register']['select_group'] = 'Select group';

$lng['search']['private'] = 'Private owners';
$lng['search']['professional'] = 'Professionals';
$lng['search']['save_your_search2'] = 'Would you like to save your search?';
$lng['search']['save_search'] = 'Save search';
$lng['search']['refine_your_search'] = 'Refine your search';
$lng['search']['hide_refine'] = 'Hide refine';

$lng['listings']['view_all_featured'] = 'View all featured >>';
$lng['listings']['view_all_latest'] = 'View all recent >>';
$lng['listings']['view_all_auctions'] = 'View all auctions >>';
$lng['listings']['auctions'] = 'Auctions';
$lng['listings']['view_ads_from'] = 'View ads from';
$lng['location']['change_location'] = 'Change_location';

// --------------- end 9.1 --------------------

// --------------- 9.2 --------------------
$lng['listings']['show_email'] = 'Show email';
$lng['listings']['error']['photo_mandatory'] = 'Please upload at least one picture with your ad!';
// --------------- end 9.2 --------------------

// --------------- 9.3 --------------------
$lng['listings']['call'] = 'Call';
$lng['listings']['sms'] = 'SMS';
$lng['contact']['phone'] = 'Phone';
$lng['contact']['error']['phone_or_email_missing'] = 'Please enter your email address or your phone number!';
$lng['general']['at'] = 'at';
$lng['general']['distance_from'] = 'distance from';
// --------------- end 9.3 --------------------

// --------------- 9.4 --------------------
$lng['contact']['error']['comments_forbidden_words'] = 'The message contains forbidden language, please review it!';
// --------------- end 9.4 --------------------

// --------------- 9.5 --------------------
$lng['ie']['added'] = 'added';
$lng['users']['repeat'] = 'Repeat';
$lng['users']['errors']['emails_dont_match'] = 'Email addresses don\'t match!';
$lng['listings']['pending_bump'] = 'Pending bump';
$lng['login']['username_or_email'] = 'Username or Email';
// --------------- end 9.5 --------------------

// --------------- 9.6 --------------------
$lng['listings']['click_to_chat'] = 'Click to chat';
$lng['invoice']['price_includes_vat'] = 'The total price includes';
$lng['invoice']['vat'] = 'VAT';
$lng['general']['play'] = 'Play';
$lng['second'] = 'second';
$lng['seconds'] = 'seconds';
$lng['general']['you_must_wait'] = 'You must wait ';
$lng['general']['before_posting'] = ' before posting a new listing!';
$lng['listings']['select_category'] = '-- Select a category --';


$lng['login']['errors']['account_not_activated'] = 'Your account was not activated. Please use the activation URL you received in your email account.';
$lng['login']['errors']['banned_account'] = 'Your account was banned!';
$lng['login']['errors']['suspended_account'] = 'Your account was suspended until ';

$lng['general']['back_to_site'] = 'Back to site';
// --------------- end 9.6 --------------------

// --------------- 9.7 --------------------
$lng['order_history']['urgent'] = 'Make ad Urgent';
$lng['order_history']['url'] = 'Website Link';
$lng['listings']['pending_urgent'] = 'Pending Urgent';
$lng['listings']['pending_url'] = 'Pending Website Link';
$lng['listings']['error']['invalid_url'] = 'Invalid Website Link';
$lng['listings']['urgent'] = 'Urgent';
$lng['listings']['url'] = 'Website Link';
$lng['listings']['site_url'] = 'Enter your Website Link';
$lng['listings']['priorities_listings'] = 'Prioritized Listings';
$lng['listings']['urgent_listings'] = 'Urgent Listings';
$lng['listings']['video_listings'] = 'Video Listings';
$lng['listings']['url_listings'] = 'Website Link Listings';
$lng['listings']['view_example'] = 'View example';
// --------------- end 9.7 --------------------

// --------------- 9.8 --------------------
$lng['packages']['html_editor'] = 'HTML editor';
$lng['iyzico']['invalid_transaction'] = 'Failed payment transaction!';
$lng['users']['errors']['account_already_activated'] = 'The account has already been activated and is waiting for administrator verification!';
$lng['now'] = 'Now';
$lng['listings']['updated'] = 'Updated';
$lng['listings']['auto_repost'] = 'Auto Repost';
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
