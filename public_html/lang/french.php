<?php
/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

// ------------------ NAVBAR -------------------
$lng['navbar']['home'] = 'Accueil';
$lng['navbar']['login'] = 'Ouvrir session';
$lng['navbar']['logout'] = 'Déconnexion';
$lng['navbar']['recent_ads'] = 'Annonces récentes';
$lng['navbar']['register'] = 'S\'inscrire';
$lng['navbar']['submit_ad'] = 'Insérer une annonce';
$lng['navbar']['editad'] = 'Éditer une annonce';
$lng['navbar']['my_account'] = 'Mon compte';
$lng['navbar']['administrator_panel'] = 'Login administrateur';
$lng['navbar']['contact'] = 'Contact';
$lng['navbar']['password_recovery'] = 'Mot de passe oublié';
$lng['navbar']['feature_listing'] = 'Annonces VIP';
$lng['navbar']['renew_listing'] = 'Actualiser la liste';

// ------------------ GENERAL -------------------
$lng['general']['submit'] = 'Confirmer';
$lng['general']['search'] = 'Chercher';
$lng['general']['contact'] = 'Contact';
$lng['general']['advanced_search'] = 'Recherche avancée';
$lng['general']['activeads'] = 'Annonces';
$lng['general']['activead'] = 'Annonce';
$lng['general']['subcats'] = 'sous-catégories';
$lng['general']['subcat'] = 'sous-catégorie';
$lng['general']['view_ads'] = 'Voir les annonces';
$lng['general']['back'] = 'Retour';
$lng['general']['goto'] = 'Aller à';
$lng['general']['page'] = 'Page';
$lng['general']['of'] = 'de';
$lng['general']['other'] = 'Autre';
$lng['general']['NA'] = 'non disponible';
$lng['general']['add'] = 'Ajouter';
$lng['general']['delete_all'] = 'Supprimer toutes les sélections';
$lng['general']['action'] = 'Action';
$lng['general']['edit'] = 'Éditer';
$lng['general']['delete'] = 'Supprimer';
$lng['general']['total'] = 'Total';
$lng['general']['min'] = 'Min';
$lng['general']['max'] = 'Max';
$lng['general']['free'] = 'GRATUIT';
$lng['general']['not_authorized'] = 'Vous n\'êtes pas autorisé à voir cette page!';
$lng['general']['access_restricted'] = 'Accés limité!';
$lng['general']['featured_ads'] = 'Annonces VIP';
$lng['general']['latest_ads'] = 'Dernières Annonces';
$lng['general']['quick_search'] = 'Recherche rapide';
$lng['general']['go'] = 'go';
$lng['general']['unlimited'] = 'Illimité';

// ---------------------- IMAGE CLASS ERRORS ---------------------

$lng['images']['errors']['file_exists_unwriteable'] = 'Un fichier portant le même nom existe déjà et ne peut être remplacé!';
$lng['images']['errors']['file_uploaded_too_big'] = 'Vous n\'êtes pas autorisé à transférer des fichiers plus grand que ::MAX_FILE_UPLOAD_SIZE::K !'; // please leave intact the tag ::MAX_FILE_UPLOAD_SIZE::
$lng['images']['errors']['file_dimmensions_too_big'] = 'La dimmention de l\'image ne respecte pas la grandeur autorisée! Svp télécharger un fichier avec un maximum de ::MAX_FILE_WIDTH::px de largeur et un maximum de ::MAX_FILE_HEIGHT::px pour la hauteur !';  // please leave intact the tags ::MAX_FILE_WIDTH:: and ::MAX_FILE_HEIGHT::
$lng['images']['errors']['file_not_uploaded'] = 'Le fichier n\'a pas pu être téléchargé!';
$lng['images']['errors']['no_file'] = 'Svp choisissez un fichier à télécharger!';
$lng['images']['errors']['no_folder'] = 'Le dossier n\'existe pas!';
$lng['images']['errors']['folder_not_writeable'] = 'Ce n\'est pas possible de transcrire le dossier!';
$lng['images']['errors']['file_type_not_accepted'] = 'Le fichier n\'est malheureusement pas compatible!';
$lng['images']['errors']['error'] = 'Erreur dans la transmission du fichier. L\'erreur est la suivante: ::ERROR::'; // svp laisse intacte ::ERROR:: tag
$lng['images']['errors']['no_thmb_folder'] = 'Le dossier Thumbnail n\'existe pas!';
$lng['images']['errors']['thmb_folder_not_writeable'] = 'Le dossier Thumbnail ne peut pas être transcris!';
$lng['images']['errors']['no_jpg_support'] = 'JPG n\'est pas compatible!';
$lng['images']['errors']['no_png_support'] = 'PNG n\'est pas compatible!';
$lng['images']['errors']['no_gif_support'] = 'GIF n\'est pas compatible!';
$lng['images']['errors']['jpg_create_error'] = 'Erreur dans la création JPG!';
$lng['images']['errors']['png_create_error'] = 'Erreur dans la création PNG!';
$lng['images']['errors']['gif_create_error'] = 'Erreur dans la création GIF!';


// -------------------------- LOGIN -----------------------
$lng['login']['login'] = 'Ouvrir session';
$lng['login']['logout'] = 'Déconnexion';
$lng['login']['username'] = 'Nom d\'usager';
$lng['login']['password'] = 'Mot de passe';
$lng['login']['forgot_pass'] = 'Mot de passe oublié?';
$lng['login']['click_here'] = ' Cliquer ici';

$lng['login']['errors']['password_missing'] = 'Veuillez indiquer votre mot de passe!';
$lng['login']['errors']['username_missing'] = 'Veuillez indiquer votre nom d\'usager!';
$lng['login']['errors']['username_invalid'] = 'Votre nom d\'usager est incorrect!';
$lng['login']['errors']['invalid_username_pass'] = 'Votre nom d\'usager ou votre mot de passe est incorrect!';

// -------------------------- LOGOUT -----------------------
$lng['logout']['logout'] = 'Déconnexion';
$lng['logout']['loggedout'] = 'Vous avez été déconnecté!';

// -------------------------- REGISTER -----------------------
$lng['users']['register'] = 'Créer un compte';
$lng['users']['repeat_password'] = 'Confirmation du mot de passe';
$lng['users']['how_did_you_heard'] = 'Comment avez-vous entendu parler de notre site';
$lng['users']['image_verification_info'] = 'Veuillez entrer le code figurant dans l\'image ci-dessous.<br> Les caractères possibles sont les lettres de a-h en Minuscule<br> et les numéros entre 0-9.';
$lng['users']['already_logged_in'] = 'Vous êtes déjà enregistré';
$lng['users']['select'] = 'Choisir';

$lng['users']['errors']['username_missing'] = 'Veuillez indiquer votre nom d\'usager!';
$lng['users']['errors']['invalid_username'] = 'Nom d\'usager incorrect!';
$lng['users']['errors']['username_exists'] = 'Le nom d\'usager existe déjà! Svp ouvrir une session si vous possédez déjà un compte!';
$lng['users']['errors']['email_missing'] = 'Veuillez indiquer l\'adresse e-mail!';
$lng['users']['errors']['invalid_email'] = 'Adresse e-mail incorrecte!';
$lng['users']['errors']['passwords_dont_match'] = 'Le mot de passe ne correspond pas!';
$lng['users']['errors']['email_exists'] = 'L\'adresse e-mail existe déjà! Svp ouvrir une session si vous possédez déjà un compte!';
$lng['users']['errors']['password_missing'] = 'Veuillez indiquer votre mot de passe!';
$lng['users']['errors']['password_not_match'] = 'Le mot de passe ne correspond pas!';
$lng['users']['errors']['invalid_validation_string'] = 'Le code de validation est incorrecte!';
$lng['users']['errors']['invalid_account_or_activation'] = 'Compte ou clé d\'activation incorrect! Svp contacter l\'administration!';
$lng['users']['errors']['account_already_active'] = 'Votre compte est déjà actif!';
$lng['users']['info']['activate_account'] = 'Un courrier a été envoyé à votre compte. Svp suivre les indications pour activer votre compte.';
$lng['users']['info']['welcome_user'] = 'Votre compte a été créé. Svp <a href="login.php">Connectez-vous</a> à votre compte!';
$lng['users']['info']['awaiting_admin_verification'] = 'Votre compte est en attente de validation par l\'administrateur. Vous serez averti par e-mail lorsque votre compte sera actif.';
$lng['users']['info']['account_info_updated'] = 'Les informations de votre compte ont été mises à jour!';
$lng['users']['info']['password_changed'] = 'Votre mot de passe a été changé!';
$lng['users']['info']['account_activated'] = 'Votre compte a été activé! Svp <a href="login.php">Connectez-vous</a> à votre compte.';



// ------------------ NEW AD -------------------
$lng['listings']['category'] = 'Catégorie';
$lng['listings']['package'] = 'Forfait';
$lng['listings']['price'] = 'Prix';
$lng['listings']['country'] = 'Pays';
$lng['listings']['state'] = 'Région';
$lng['listings']['city'] = 'Ville';
$lng['listings']['ad_description'] = 'Description de l\'annonce';
$lng['listings']['title'] = 'Titre';
$lng['listings']['description'] = 'Description';
$lng['listings']['image'] = 'Photo';
$lng['listings']['words_left'] = 'Caractères restants';
$lng['listings']['enter_photos'] = 'Entrer vos Photos';
$lng['listings']['choose_payment_method'] = 'Choisir le mode de paiement';
$lng['listings']['ad_information'] = 'Information de l\'annonce';
$lng['listings']['free'] = 'GRATUIT';
$lng['listings']['select_package'] = 'Sélectionner votre forfait';
$lng['listings']['packages_details'] = 'Détails du forfait';
$lng['listings']['select_country'] = 'Sélectionner votre pays';
$lng['listings']['select_state'] = 'Sélectionner la région';
$lng['listings']['other'] = 'Autre';
$lng['listings']['details'] = 'Détails';
$lng['listings']['stock_no'] = 'N° annonce';
$lng['listings']['location'] = 'Lieu';
$lng['listings']['contact_info'] = 'Info contact';
$lng['listings']['email_seller'] = 'E-mail annonceur';
$lng['listings']['no_recent_ads'] = 'Aucune annonce récente';
$lng['listings']['no_ads'] = 'Aucune annonce dans cette catégorie';
$lng['listings']['added_on'] = 'Enregistré le';
$lng['listings']['send_mail'] = 'Envoyer un e-mail à l\'annonceur';
$lng['listings']['details'] = 'Détails';
$lng['listings']['user'] = 'Nom d\'usager';
$lng['listings']['price'] = 'Prix';
$lng['listings']['confirm_delete'] = 'Êtes-vous sûr de vouloir supprimer l\'annonce?';
$lng['listings']['confirm_delete_all'] = 'Êtes-vous sûr de vouloir supprimer toutes les annonces?';
$lng['listings']['all'] = 'Toutes les annonces';
$lng['listings']['active_listings'] = 'Annonces actives';
$lng['listings']['pending_listings'] = 'Annonces en attente';
$lng['listings']['featured_listings'] = 'Annonces VIP';
$lng['listings']['pending_featured_listings'] = 'Annonces VIP en attente';
$lng['listings']['expired_listings'] = 'Annonces expirées';
$lng['listings']['active'] = 'Active';
$lng['listings']['inactive'] = 'Désactivée';
$lng['listings']['pending'] = 'En attente';
$lng['listings']['featured'] = 'VIP';
$lng['listings']['pending_featured'] = 'VIP (P)';
$lng['listings']['expired'] = 'Expiré';
$lng['listings']['order_by_date'] = 'trier par date';
$lng['listings']['order_by_category'] = 'trier par catégorie';
$lng['listings']['order_by_price'] = 'trier par prix';
$lng['listings']['order_by_views'] = 'trier par nombre de visiteurs';
$lng['listings']['order_asc'] = 'Croissant';
$lng['listings']['order_desc'] = 'Décroissant';
$lng['listings']['id'] = '#ID';
$lng['listings']['views'] = 'Visites';
$lng['listings']['date'] = 'Date';
$lng['listings']['no_listings'] = 'Actuellement, vous n\'avez aucune annonce.';
$lng['listings']['NA'] = 'pas disponible';
$lng['listings']['no_such_id'] = 'Il n\'existe pas d\'annonce avec cet ID';
$lng['listings']['mark_sold'] = 'Marquer comme vendu';
$lng['listings']['mark_unsold'] = 'Marquer non vendu';
$lng['listings']['feature'] = 'VIP';
$lng['listings']['sold'] = 'Vendu';
$lng['listings']['expired_on'] = 'Expiré le';
$lng['listings']['renew'] = 'Renouveler';
$lng['listings']['print_page'] = 'Imprimer la page';
$lng['listings']['recommend_this'] = 'Recommander';
$lng['listings']['more_listings'] = 'Consultez toutes les annonces';
$lng['listings']['all_listings_for'] = 'Toutes les annonces pour';
$lng['listings']['free_category'] = 'Catégorie GRATUITE';

// -------------------------- ADS PICTURES -------------------
$lng['pictures']['confirm_delete'] = 'Êtes-vous sûr de vouloir supprimer cette photo?';


// --------------------------- NEWAD ERRORS ----------------------------
$lng['listings']['errors']['words_quota_exceeded']='Le nombre maximum de caractères est dépassé! Vous pouvez écrire seulement ::MAX:: caractères'; // please leave intact the tag ::MAX::
$lng['listings']['errors']['badwords']='Votre annonce contient des mots interdit! Veuillez la modifier!';
$lng['listings']['errors']['title_missing']='Veuillez indiquer le titre de votre annonce!';
$lng['listings']['errors']['category_missing']='Veuillez choisir une catégorie!';
$lng['listings']['errors']['invalid_category']='Catégorie incorrect!';
$lng['listings']['errors']['package_missing']='Veuillez choisir un forfait!';
$lng['listings']['errors']['invalid_package']='Forfait incorrect!';
$lng['listings']['errors']['content_missing']='Veuillez indiquer la description de votre annonce!';
$lng['listings']['errors']['invalid_price']='Prix incorrect!';
$lng['listings']['errors']['invalid_country']='Pays incorrect!';
$lng['listings']['errors']['invalid_state']='Région incorrecte!';
$lng['listings']['errors']['user_missing']='Veuillez choisir un nom d\'usager pour l\'annonce!';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['price_low'] = 'Prix min.';
$lng['quick_search']['price_high'] = 'Prix max.';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['submit_ad'] = 'Nouvelle annonce';
$lng['useraccount']['browse_your_listings'] = 'Mes annonces';
$lng['useraccount']['modify_account_info'] = 'Profil';
$lng['useraccount']['order_history'] = 'Mes commandes';
$lng['useraccount']['total_listings'] = 'Nombre d\'annonces';
$lng['useraccount']['total_views'] = 'Total visiteurs';
$lng['useraccount']['active_listings'] = 'Annonces actives';
$lng['useraccount']['pending_listings'] = 'Annonces en attente';
$lng['useraccount']['last_login'] = 'Votre dernière connexion';
$lng['useraccount']['last_login_ip'] = 'Votre dernière IP de connexion';
$lng['useraccount']['expired_listings'] = 'Annonces expirées';
$lng['useraccount']['statistics'] = 'Mes statistiques';
$lng['useraccount']['welcome'] = 'Bienvenue';
$lng['useraccount']['contact_name'] = 'Nom de l\'utlisateur';
$lng['useraccount']['email'] = 'Adresse e-mail';
$lng['useraccount']['address'] = 'Adresse';
$lng['useraccount']['phone'] = 'Téléphone';
$lng['useraccount']['mobile'] = 'Cellulaire';
$lng['useraccount']['webpage'] = 'Site web';
$lng['useraccount']['show_name'] = 'Afficher votre nom d\'usager';
$lng['useraccount']['show_phone'] = 'Afficher le numéro de téléphone';
$lng['useraccount']['show_mobile'] = 'Afficher le numéro de Cellulaire';
$lng['useraccount']['password'] = 'Mot de passe';
$lng['useraccount']['repeat_password'] = 'Retaper le mot de passe';
$lng['useraccount']['change_password'] = 'Changer le mot de passe';

// ------------------- PAYPAL -----------------
$lng['paypal']['transaction_canceled'] = 'Votre transaction PayPal à été annulée!';
$lng['paypal']['invalid_paypal_transaction'] = 'Transaction PayPal incorrecte!';

// ------------------- 2CO -----------------
$lng['to_checkout']['pay_with_2co'] = 'Payez avec 2Checkout!';
$lng['to_checkout']['invalid_2co_transaction'] = 'Transaction 2Checkout invalide!';

// ------------------- Advanced Search -----------------
$lng['advanced_search']['to'] = 'à';
$lng['advanced_search']['price_min'] = 'Prix min.';
$lng['advanced_search']['price_max'] = 'Prix max.';
$lng['advanced_search']['word'] = 'Recherche';
$lng['advanced_search']['sort_by'] = 'Trier par';
$lng['advanced_search']['sort_by_price'] = 'Trier par prix';
$lng['advanced_search']['sort_by_date'] = 'Trier par date';
$lng['advanced_search']['sort_descendant'] = 'Tri décroissant';
$lng['advanced_search']['sort_ascendant'] = 'Tri croissant';
$lng['advanced_search']['only_ads_with_pic'] = 'Seulement les annonces avec photos';
$lng['advanced_search']['no_results'] = 'aucune annonce correspond à votre recherche!';
$lng['advanced_search']['multiple_ads_matching'] = 'Il y a ::NO_ADS:: annonces qui correspondent à votre recherche!';
$lng['advanced_search']['single_ad_matching'] = 'Il y a une annonce qui correspond à votre recherche!';

// ------------------- CONTACT -----------------
$lng['contact']['name'] = 'Nom';
$lng['contact']['subject'] = 'Sujet';
$lng['contact']['email'] = 'Adresse e-mail';
$lng['contact']['webpage'] = 'Site Web';
$lng['contact']['comments'] = 'Commentaires';
$lng['contact']['message_sent'] = 'Votre message a été envoyé!';
$lng['contact']['sending_message_failed'] = 'Message non envoyé';
$lng['contact']['mailto'] = 'Envoyer à';

$lng['contact']['error']['name_missing'] = 'Veuillez indiquer votre nom!';
$lng['contact']['error']['subject_missing'] = 'Veuillez indiquer le sujet de votre e-mail!';
$lng['contact']['error']['email_missing'] = 'Veuillez saisir une adresse électronique.';
$lng['contact']['error']['invalid_email'] = 'Veuillez saisir une adresse électronique valide.';
$lng['contact']['error']['comments_missing'] = 'Veuillez indiquer votre commentaire!';
$lng['contact']['error']['invalid_validation_number'] = 'Numéro de validation incorrect!';

// -------------------------- PASSWORD RECOVERY -------------------
$lng['password_recovery']['email'] = 'Adresse e-mail';
$lng['password_recovery']['new_password'] = 'Nouveau mot de passe';
$lng['password_recovery']['repeat_new_password'] = 'Confirmation du mot de passe';
$lng['password_recovery']['invalid_key'] = 'Code incorrecte';

$lng['password_recovery']['email_missing'] = 'Veuillez saisir une adresse électronique.';
$lng['password_recovery']['invalid_email'] = 'Veuillez saisir une adresse électronique valide.';
$lng['password_recovery']['email_inexistent'] = 'Il n\'y a pas de nom d\'usager enregistré avec ce e-mail';

// ------------------- PACKAGES -----------------
$lng['packages']['amount'] = 'Montant';
$lng['packages']['words'] = 'Mots';
$lng['packages']['days'] = 'Jours';
$lng['packages']['pictures'] = 'Photos';
$lng['packages']['picture'] = 'Photo';
$lng['packages']['available'] = 'Disponible';
$lng['packages']['featured'] = 'Annonces VIP';

// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['processor'] = 'Méthode de paiement';
$lng['order_history']['amount'] = 'Montant';
$lng['order_history']['completed'] = 'Payé';
$lng['order_history']['not_completed'] = 'Non payé';
$lng['order_history']['ad_no'] = 'Annonce ID';
$lng['order_history']['date'] = 'Date';
$lng['order_history']['no_actions'] = 'Aucun paiement sur la liste';
$lng['order_history']['order_by_date'] = 'Trier par date';
$lng['order_history']['order_by_amount'] = 'Trier par montant';
$lng['order_history']['order_by_processor'] = 'Trier par méthode de paiement';

// ----------------------- FEATUREAD --------------------
$lng['featuread']['price'] = 'Prix pour l\'annonce VIP';
$lng['featuread']['choose_payment_method'] = 'Choisir la méthode de paiement';
$lng['featuread']['feature_your_ad'] = 'Ajouter une annonce VIP';

// --------------------- RENEW --------------------
$lng['renew']['price'] = 'Prix pour renouveler votre annonce';
$lng['renew']['choose_payment_method'] = 'Choisir le mode de paiement';
$lng['renew']['renew_your_ad'] = 'Renouveler votre annonce';

// --------------------- ORDER --------------------
$lng['order']['date'] = 'Trier par date';
$lng['order']['price'] = 'Trier par prix';
$lng['order']['title'] = 'Trier par titre';
$lng['order']['desc'] = 'Décroissant';
$lng['order']['asc'] = 'Croissant';

// --------------------- RECOMMEND --------------------
$lng['recommend']['recommend_ad'] = 'Recommander cette annonce';
$lng['recommend']['your_name'] = 'Votre nom';
$lng['recommend']['your_email'] = 'Votre adresse e-mail';
$lng['recommend']['friend_name'] = 'Nom de votre ami(e)';
$lng['recommend']['friend_email'] = 'Adresse e-mail de votre ami(e)';
$lng['recommend']['message'] = 'Message àvotre ami(e)';


$lng['recommend']['error']['your_name_missing'] = 'Veuillez indiquer votre nom!';
$lng['recommend']['error']['your_email_missing'] = 'Veuillez indiquer votre e-mail!';
$lng['recommend']['error']['friend_name_missing'] = 'Veuillez indiquer le nom de votre ami(e)!';
$lng['recommend']['error']['friend_email_missing'] = 'Veuillez indiquer l\'e-mail de votre ami(e)!';
$lng['recommend']['error']['invalid_email'] = 'Veuillez saisir une adresse électronique valide.';

// ---------------------- STATS ----------------------
$lng['stats']['listings'] = 'Mes annonces';
$lng['stats']['general'] = 'Statistiques';

// ------------------ NAVBAR -------------------
$lng['navbar']['subscribe'] = 'S\'abonner';

// ------------------ GENERAL -------------------
$lng['general']['status'] = 'Statut';
$lng['general']['favourites'] = 'Favoris';
$lng['general']['as'] = 'comme';
$lng['general']['view'] = 'Visite';
$lng['general']['none'] = 'Aucun';
$lng['general']['yes'] = 'oui';
$lng['general']['no'] = 'non';
$lng['general']['next'] = 'Suivant';
$lng['general']['finish'] = 'Confirmer';
$lng['general']['download'] = 'Télécharger';
$lng['general']['remove'] = 'Supprimer';
$lng['general']['previous_page'] = '« Précédent';
$lng['general']['next_page'] = 'Suivant »';
$lng['general']['items'] = 'articles';
$lng['general']['active'] = 'Actif';
$lng['general']['inactive'] = 'Inactif';
$lng['general']['expires'] = 'Expire le';
$lng['general']['available'] = 'Disponible';
$lng['general']['cancel'] = 'Annuler';
$lng['general']['never'] = 'Jamais';
$lng['general']['asc'] = 'Croissant';
$lng['general']['desc'] = 'Décroissant';
$lng['general']['pending'] = 'En attente';
$lng['general']['upload'] = 'Envoyer';
$lng['general']['processing'] = 'En cours, veuillez patienter ';
$lng['general']['help'] = 'Aide';
$lng['general']['hide'] = 'Masquer';
$lng['general']['link'] = 'Lien';
$lng['general']['moneybookers'] = 'Moneybookers';
$lng['general']['authorize'] = 'Authorize.net';
$lng['general']['check_all'] = 'Tout activer';
$lng['general']['uncheck_all'] = 'Tout désactiver';
$lng['general']['all'] = 'Tout';


// -------------------------- REGISTER -----------------------
$lng['users']['store'] = 'Page du Vendeur';
$lng['users']['store_banner'] = 'Bannière pour votre page';
$lng['users']['waiting_mail_activation'] = 'En attente pour l\'envoi du e-mail';
$lng['users']['waiting_admin_activation'] = 'En attente de l\'approbation admin';
$lng['users']['no_such_id'] = 'Ce nom d\'usager n\'existe pas';

$lng['users']['info']['store_banner'] = 'Cette photo/bannière sera utlisée pour votre page commerciale.';

// ------------------ NEW AD -------------------
$lng['listings']['report_ad'] = 'Signaler un abus';
$lng['listings']['report_reason'] = 'La raison de votre plainte';
$lng['listings']['meta_info'] = 'Méta Information';
$lng['listings']['meta_keywords'] = 'Méta Mots-clés';
$lng['listings']['meta_description'] = 'Méta Description';
$lng['listings']['not_approved'] = 'Expiré';
$lng['listings']['approve'] = 'Renouveler';
$lng['listings']['choose_payment_method'] = 'Choisissez le mode de paiement';

$lng['listings']['choose_category'] = 'Choisissez la catégorie';
$lng['listings']['choose_plan'] = 'Choisir le forfait';
$lng['listings']['enter_ad_details'] = 'Inscrire les détails';
$lng['listings']['ad_details'] = 'Détails de l\'annonce';
$lng['listings']['add_photos'] = 'Ajouter les photos';
$lng['listings']['ad_photos'] = 'Photos';
$lng['listings']['edit_photos'] = 'Modifier les photos';
$lng['listings']['extra_options'] = 'Options supplémentaires';
$lng['listings']['review'] = 'Vérifier l\'annonce';
$lng['listings']['finish'] = 'Quitter';
$lng['listings']['next_step'] = 'Étape suivante';
$lng['listings']['included'] = 'Inclus';
$lng['listings']['finalize'] = 'Accepter';
$lng['listings']['zip'] = 'Code postal';
$lng['listings']['add_to_favourites'] = 'Ajouter aux favoris';
$lng['listings']['confirm_add_to_fav'] = 'Attention! Vous n\'êtes pas connecté! La liste de vos favoris n\'est que temporairement enregistrée!';
$lng['listings']['add_to_fav_done'] = 'Cette annonce a été ajoutée aux favoris!';
$lng['listings']['confirm_delete_favourite'] = 'Êtes-vous sûr de vouloir supprimer cette annonce de la liste de vos favoris?';
$lng['listings']['no_favourites'] = 'Aucune annonces dans la liste des favoris';
$lng['listings']['extra_options'] = 'Options supplémentaires';
$lng['listings']['highlited'] = 'Mis en évidence';
$lng['listings']['priority'] = 'Priorité';
$lng['listings']['video'] = 'Vidéo';
$lng['listings']['short_video'] = 'Vidéo';
$lng['listings']['pending_video'] = 'Video en attente';
$lng['listings']['video_code'] = 'Code vidéo';
$lng['listings']['total'] = 'Total';
$lng['listings']['approve_ad'] = 'Accepter';
$lng['listings']['finalize_later'] = 'Accepter ultérieurement';
$lng['listings']['click_to_upload'] = 'Cliquez pour télécharger';
$lng['listings']['files_uploaded'] = ' Photo(s) de téléchargées sur un total de ';
$lng['listings']['allowed'] = ' photos permises!';
$lng['listings']['limit_reached'] = ' Limite maximale de photos est atteinte!';
$lng['listings']['edit_options'] = 'Modifier les options';
$lng['listings']['view_store'] = 'Voir la Page du Vendeur';
$lng['listings']['edit_ad_options'] = 'Modifier les options de l\'annonce';
$lng['listings']['no_extra_options_selected'] = 'Aucune options suplémentaires choisies!';
$lng['listings']['highlited_listings'] = 'Liste des annonces mises en évidence';
$lng['listings']['for_listing'] = 'pour l\'inscription ne pas ';
$lng['listings']['expires_on'] = 'Expire le';
$lng['listings']['expired_on'] = 'a expiré le';
$lng['listings']['pending_ad'] = 'En attente';
$lng['listings']['pending_highlited'] = 'En Attente Rehaussé';
$lng['listings']['pending_featured'] = 'En Attente VIP';
$lng['listings']['pending_priority'] = 'En Attente Prioritaire';
$lng['listings']['enter_coupon'] = 'Entrer un code promotionnel';
$lng['listings']['discount'] = 'Rabais';
$lng['listings']['select_plan'] = 'Choisir l\' abonnement';
$lng['listings']['pending_subscription'] = 'Abonnement en attente';
$lng['listings']['remove_favourite'] = 'Supprimer favori';

$lng['listings']['order_up'] = 'Tri Ascendant';
$lng['listings']['order_down'] = 'Tri Descendant';

$lng['listings']['errors']['invalid_youtube_video'] = 'Le lien video youtube n\'est pas valide!';

// ------------------- USERACCOUNT -----------------
$lng['useraccount']['buy_package'] = 'S\'abonner';
$lng['useraccount']['no_package'] = 'Pas de forfait';
$lng['useraccount']['packages'] = 'Forfaits';
$lng['useraccount']['date_start'] = 'Commence le';
$lng['useraccount']['date_end'] = 'Se termine le';
$lng['useraccount']['remaining_ads'] = 'Annonces restantes';
$lng['useraccount']['account_type'] = 'Type de compte';
$lng['useraccount']['unfinished_listings'] = 'Données incomplètes';
$lng['useraccount']['confirm_delete_subscription'] = 'Êtes-vous sûr de vouloir supprimer cet abonnement?';
$lng['useraccount']['buy_store'] = 'Acheter une page commerciale';
$lng['useraccount']['bulk_uploads'] = 'Importer les annonces';


// ------------------- PACKAGES -----------------
$lng['packages']['subscription'] = 'Abonnement';
$lng['packages']['ads'] = 'Annonces';
$lng['packages']['name'] = 'Nom';
$lng['packages']['details'] = 'Détails';
$lng['packages']['no_ads'] = 'Nombre d\'annonces';
$lng['packages']['subscription_time'] = 'Durée de l\'abonnement';
$lng['packages']['no_pictures'] = 'Nombre de photos';
$lng['packages']['no_words'] = 'Nombre de mots';
$lng['packages']['ads_availability'] = 'Annonces disponibles';
$lng['packages']['featured'] = 'Fonction';
$lng['packages']['highlited'] = 'En évidence';
$lng['packages']['priority'] = 'Prioritaire';
$lng['packages']['video'] = 'Annonce avec vidéo';


// ----------------------- ORDER HISTORY --------------------
$lng['order_history']['subscription'] = 'Abonnement';
$lng['order_history']['post_listing'] = 'Entrer les données';
$lng['order_history']['renew_listing'] = 'Changer les données';
$lng['order_history']['feature_listing'] = 'Mettre en relief';
$lng['order_history']['subscribe_to_package'] = 'Forfait abonnement';
$lng['order_history']['complete_payment'] = 'Paiement total';
$lng['order_history']['complete_payment_for'] = 'Paiement total pour';
$lng['order_history']['details'] = 'Détails';
$lng['order_history']['subscription_no'] = 'Pas d\'abonnement';
$lng['order_history']['highlited'] = 'Annonce en relief';
$lng['order_history']['priority'] = 'Prioritaire';
$lng['order_history']['video'] = 'Annonce avec vidéo';


// ---------------------- BUY PACKAGE ----------------------
$lng['buy_package']['error']['choose_package'] = 'Svp choisissez un forfait abonnement!';
$lng['buy_package']['error']['choose_processor'] = 'Svp choisissez le type de paiement!';
$lng['buy_package']['error']['invalid_processor'] = 'Le traitement du paiement n\'est pas possible!';
$lng['buy_package']['error']['invalid_package'] = 'Forfait abonnement non valide!';


// -------------------- PAYMENTS ------------------

$lng['paypal']['invalid_transaction'] = 'Transaction paypal non valide!';
$lng['2co']['invalid_transaction'] = 'Transaction 2Checkout non valide!';
$lng['moneybookers']['invalid_transaction'] = 'Transaction moneybookers non valide!';
$lng['authorize']['invalid_transaction'] = 'Transaction Authorize.net non valide!';
$lng['manual']['invalid_transaction'] = 'Transaction non valide!';

$lng['paypal']['transaction_canceled'] = 'Transaction paypal annulée!';
$lng['2co']['transaction_canceled'] = 'Transaction 2Checkout annulée!';
$lng['moneybookers']['transaction_canceled'] = 'Transaction moneybookers annulée!';
$lng['authorize']['transaction_canceled'] = 'Transaction Authorize.net annulée!';
$lng['manual']['transaction_canceled'] = 'Transaction annulée!';

$lng['payments']['transaction_already_processed'] = 'La transaction a déjà été traitée!';

// -------------------- SUBSCRIBE ------------------
$lng['subscribe']['approve'] = 'Approuver l\'abonnement';
$lng['subscribe']['payment_method'] = 'Méthode de paiement';

// ------------------------- BCC MAILS ----------------
$lng['bcc_mails']['subject'] = 'Copie e-mail: ';
$lng['bcc_mails']['from'] = 'De la part de: ';
$lng['bcc_mails']['to'] = 'À: ';

// -------------------- bulk uploads
$lng['ie']['bulk_upload_status'] = 'Importation des données: ';
$lng['ie']['successfully'] = 'a été ajouté avec succès';
$lng['ie']['failed'] = 'Erreur';
$lng['ie']['uploaded_listings'] = 'Télécharger la liste des annonces:';
$lng['ie']['errors']['upload_import_file'] = 'Veuillez télécharger le fichier à importer de!';
$lng['ie']['errors']['incorrect_file_type'] = 'Type de fichier incorrect! Le type de fichier doit être: ';
$lng['ie']['errors']['could_not_open_file'] = 'Ne peut pas ouvrir le fichier!';
$lng['ie']['errors']['choose_categ'] = 'Choisissez svp une catégorie!';
$lng['ie']['errors']['could_not_save_file'] = 'Le fichier n\'a pas pu être téléchargé: ';
$lng['ie']['errors']['required_field_missing'] = 'Champ requis manquant: ';
$lng['ie']['errors']['incorrect_data_count'] = 'Incorrect data elements count for row no: ';

// ------------------ area search -----------------
$lng['areasearch']['areasearch'] = 'Zone de recherche';
$lng['areasearch']['all_locations'] = 'Tous les lieux';
$lng['areasearch']['exact_location'] = 'Lieu précis';
$lng['areasearch']['around'] = 'autour de';

// ------------------- QUICK SEARCH -----------------
$lng['quick_search']['dealer'] = 'Choisir le vendeur';


// ------------------- end vers 5.0 -----------------

// -------------------------------------------------------------
// 
//		THE FOLLOWING PART IS NOT TRANSLATED!!!! 
//
// -------------------------------------------------------------

// ------------------- vers 6.0 -----------------

// ------------------ GENERAL -------------------------
$lng['general']['Yes'] = 'Oui';
$lng['general']['No'] = 'Non';
$lng['general']['or'] = 'ou';
$lng['general']['in'] = 'dans';
$lng['general']['by'] = 'par';
$lng['general']['close_window'] = 'Fermer la fenêtre';
$lng['general']['more_options'] = 'plus d\'options »';
$lng['general']['less_options'] = '« moins d\'options';
$lng['general']['send'] = 'Envoyer';
$lng['general']['save'] = 'Enregistrer';
$lng['general']['for'] = 'pour';
$lng['general']['to'] = 'à';

// ------------------ LISTINGS -------------------------
$lng['listings']['mark_rented'] = 'Marquer comme loué';
$lng['listings']['mark_unrented'] = 'Marquer non loué';
$lng['listings']['rented'] = 'Loué';
$lng['listings']['your_info'] = 'Vos informations';
$lng['listings']['email'] = 'Votre Adresse Email';
$lng['listings']['name'] = 'Votre Nom';
$lng['listings']['listing_deleted'] = 'Votre annonce a été supprimée!';
$lng['listings']['post_without_login'] = 'Publier une annonce sans compte';
$lng['listings']['waiting_activation'] = 'Attente d\'activation';
$lng['listings']['waiting_admin_approval'] = 'En attente d\'approbation par l\'administration';
$lng['listings']['dont_need_account'] = 'Vous n\'avez pas besoin d\'un compte? Inscriver une annonce sans être connecté';
$lng['listings']['post_your_ad'] = 'Publier une annonce';
$lng['listings']['posted'] = 'publié';
$lng['listings']['select_subscription'] = 'Sélectionnez Abonnement';
$lng['listings']['choose_subscription'] = 'Choisissez un Abonnement';
$lng['listings']['inactive_listings'] = 'Annonces innactive';


// -------------------- search -------------------
$lng['search']['refine_search'] = 'Affiner la recherche';
$lng['search']['refine_by_keyword'] = 'Affiner par mots-clés';
$lng['search']['showing'] = 'Liste';
$lng['search']['more'] = 'Montrer plus';
$lng['search']['less'] = 'Moins ...';
$lng['search']['search_for'] = 'Recherche pour';
$lng['search']['save_your_search'] = 'Sauvegarder votre recherche';
$lng['search']['save'] = 'Sauvegarder';
$lng['search']['search_saved'] = 'Votre recherche a été sauvegardée!';
$lng['search']['must_login_to_save_search'] = 'Vous devez vous connecter à votre compte pour enregistrer votre recherche!';
$lng['search']['view_search'] = 'Voir la recherche';
$lng['search']['all_categories'] = 'Toutes catégories';
$lng['search']['more_than'] = 'plus de';
$lng['search']['less_than'] = 'moins de';

$lng['search']['error']['cannot_save_empty_search'] = 'Votre recherche ne peut pas être sauvé, car elle ne comporte aucune condition!';

// -------------------- useraccount -------------------
$lng['useraccount']['saved_searches'] = 'Recherche sauvegardée';
$lng['useraccount']['view_saved_searches'] = 'Voir la recherche sauvegardée';
$lng['useraccount']['no_saved_searches'] = 'Vous n\'avez aucune recherche sauvegardée.';
$lng['useraccount']['recurring'] = 'Récurrent';
$lng['useraccount']['date_renew'] = 'Date de renouvellement';
$lng['useraccount']['logged_in_as'] = 'Vous êtes connecté en tant que ';
$lng['useraccount']['subscriptions'] = 'Abonnements';

$lng['users']['activate_account'] = 'Activer le compte';

// -------------------- subscriptions -------------------
$lng['subscriptions']['add'] = 'Ajouter un Abonnement';
$lng['subscriptions']['package'] = 'Abonnement';
$lng['subscriptions']['remaining_ads'] = 'Annonces restantes';
$lng['subscriptions']['recurring'] = 'Récurrent';
$lng['subscriptions']['date_start'] = 'Commence le';
$lng['subscriptions']['date_end'] = 'Se termine le';
$lng['subscriptions']['date_renew'] = 'Date de Renouvellement';
$lng['subscriptions']['confirm_delete'] = 'Êtes-vous sûr de vouloir supprimer l\'abonnement?';
$lng['subscriptions']['no_subscriptions'] = 'Pas d\'abonnement';

// ------------------ LOGIN -------------------------
$lng['login']['dont_have_account'] ='Créez votre propre compte en seulement 2 minutes!';


// ------------------ SUBSCRIBE -------------------------
$lng['subscribe']['recurring'] = 'Activer les paiements récurrents pour cet abonnement';


// ------------------ IMPORT-EXPORT -------------------------
$lng['ie']['errors']['following_fields_missing'] = 'Les champs obligatoires sont manquantes: ';


// ------------------ ORDER HISTORY -------------------------
$lng['order_history']['buy_store'] = 'Acheter une page commerciale';


$lng['images']['errors']['max_photos'] = 'Photos maximum téléchargés!';

// -------------------- alerts -------------------
$lng['alerts']['email_alert'] = 'Notifications E-mail';
$lng['alerts']['email_alerts'] = 'Notifications E-mail';
$lng['alerts']['no_alerts'] = 'Vous n\'avez aucune notification.';
$lng['alerts']['view_email_alerts'] = 'Voir vos notifications';
$lng['alerts']['send_email_alerts'] = 'Envoyer une alerte E-mail';
$lng['alerts']['immediately'] = 'Immédiatement';
$lng['alerts']['daily'] = 'Chaque jours';
$lng['alerts']['weekly'] = 'Chaque semaines';
$lng['alerts']['your_email'] = 'Votre adresse E-mail';
$lng['alerts']['create_alert'] = 'Créer l\'alerte';
$lng['alerts']['email_alert_info'] = 'Recevoir des alertes par E-mail lorsque de nouvelles annonces apparaissent pour cette recherche.';
$lng['alerts']['alert_added'] = 'Votre alerte a été créé!';
$lng['alerts']['alert_added_activate'] = 'Vous recevrez un E-mail a <b>::EMAIL::</b>. Cliquer sur le lien du E-mail pour activer votre alerte E-mail!'; // DO not delete ::EMAIL:: string !
$lng['alerts']['search_in'] = 'Recherche dans';
$lng['alerts']['keyword'] = 'mot-clé';
$lng['alerts']['frequency'] = 'Fréquence des alertes';
$lng['alerts']['alert_activated'] = 'Votre alerte a été activé! Vous allez maintenant commencer à recevoir des E-mail de votre alerte.';
$lng['alerts']['alert_unsubscribed'] = 'Votre alerte a été effacé!';
$lng['alerts']['started_on'] = 'Démaré le';
$lng['alerts']['no_terms_searched'] = 'Il n\'y a pas de condition de déterminé pour cette recherche!';
$lng['alerts']['no_listings'] = 'Pas d\'annonces pour cette alerte!';

$lng['alerts']['error']['email_required'] = 'Entrer une adresse E-mail pour votre alerte!';
$lng['alerts']['error']['invalid_email'] = 'Adresse E-mail non valide pour l\'alerte!';
$lng['alerts']['error']['invalid_frequency'] = 'Fréquence invalide pour l\'alerte';
$lng['alerts']['error']['login_required'] = 'Connectez-vous <a href="::LINK::"></a> pour enregistrer un message d\'alerte!'; // DO not delete ::LINK:: string !
$lng['alerts']['error']['ask_adv_key'] = 'Choisir au moins une recherche, excluant la catégorie!';
$lng['alerts']['error']['invalid_confirmation'] = 'Invalide confirmation d\'alerte!';
$lng['alerts']['error']['invalid_unsubscribe_request'] = 'Demande invalide pour vous désinscrire!';

// ---------------- loancalculator module -------------------

$lng_loancalc['loancalc'] = 'Calculateur de prêt';
$lng_loancalc['sale_price'] = 'Prix de vente';
$lng_loancalc['down_payment'] = 'Acompte';
$lng_loancalc['trade_in_value'] = 'Valeur de l\'échange';
$lng_loancalc['loan_amount'] = 'Montant du prêt';
$lng_loancalc['sales_tax'] = 'Taxe de ventes';
$lng_loancalc['interest_rate'] = 'Taux d\'intérêt';
$lng_loancalc['loan_term'] = 'Durée du prêt';
$lng_loancalc['months'] = 'mois';
$lng_loancalc['years'] = 'années';
$lng_loancalc['or'] = 'ou';
$lng_loancalc['monthly_payment'] = 'Paiement mensuel';
$lng_loancalc['calculate'] = 'Calculer';

// ---------------- end loancalculator module -------------------


// ----------------- comments module --------------------

$lng_comments['comments'] = 'Commentaires';
$lng_comments['make_a_comment'] = 'Écrire un commentaire';
$lng_comments['login_to_post'] ='<a href="::LOGIN_LINK::">Connectez-vous</a> si vous voulez écrire un commentaire.';

$lng_comments['name'] = 'Nom';
$lng_comments['email'] = 'Email';
$lng_comments['website'] = 'Site Web';
$lng_comments['submit_comment'] = 'Enregister le commentaire';

$lng_comments['error']['name_missing'] = 'Entrer votre nom!';
$lng_comments['error']['content_missing'] = 'Écriver un commentaire!';
$lng_comments['error']['website_missing'] = 'Entrer le Site Web!';
$lng_comments['error']['email_missing'] = 'Écriver votre Email!';
$lng_comments['error']['listing_id_missing'] = 'Votre commentaire n\'est pas valide!';

$lng_comments['error']['invalid_email'] = 'Email invalide!';
$lng_comments['error']['invalid_website'] = 'Site Web invalide!';
$lng_comments['errors']['badwords'] = 'Votre commentaire contient des mots interdits! Modifier votre message!';

$lng_comments['info']['comment_added'] = 'Votre commentaire a été ajouté! <a id="newad"> Cliquez ici </a> si vous voulez ajouter un autre commentaire.';
$lng_comments['info']['comment_pending'] = 'Votre commentaire est en attente de vérification par l\'administration.';

// ----------------- end comments module --------------------

// -------------
$lng['tb']['next'] = 'Suivant »';
$lng['tb']['prev'] = '« Précédent';
$lng['tb']['close'] = 'Fermer';
$lng['tb']['or_esc'] = 'ou la touche ESC';

// ------------------- end vers 6.0 -----------------

// ------------------- vers 7.0 -----------------

// ------------------- messages -----------------

$lng['useraccount']['messages'] = 'Messages';
$lng['messages']['confirm_delete'] = 'Êtes-vous sûr de vouloir supprimer ce message?';
$lng['messages']['confirm_delete_all'] = 'Êtes-vous sûr de vouloir supprimer les messages sélectionnés?';
$lng['messages']['listing'] = 'Annonce';
$lng['messages']['no_messages'] = 'Pas de messages';
$lng['general']['reply'] = 'Répondre au message';
$lng['messages']['message'] = 'Message';
$lng['messages']['from'] = 'De';
$lng['messages']['to'] = 'Pour';
$lng['messages']['on'] = 'Date';
$lng['messages']['view_thread'] = 'Affichier toute la discussion';
$lng['messages']['started_for_listing'] = 'Titre de l\'annonce';
$lng['messages']['view_complete_message'] = 'Afficher le message complet';
$lng['messages']['message_history'] = 'Historique des messages';
$lng['messages']['yourself'] = 'Toi';
$lng['messages']['report_spam'] = 'Signaler comme spam';
$lng['messages']['reported_as_spam'] = 'Signalé comme spam';
$lng['messages']['confirm_report_spam'] = 'Etes-vous sûr de vouloir signaler ce message comme spam?';

// ------------------- listings -----------------

$lng['listings']['invalid'] = 'Annonce id invalide';
$lng['listings']['show_map'] = 'Afficher la carte';
$lng['listings']['hide_map'] = 'Masquer la carte';
$lng['listings']['see_full_listing'] = 'Voir l\'annonce complète';
$lng['listings']['list'] = 'Liste';
$lng['listings']['gallery'] = 'Photos';
$lng['listings']['remove_fav_done'] = 'L\'annonce a été retirée de la liste de  favoris!';
$lng['search']['high_no_results'] = 'Le nombre de résultats pour votre recherche est très élevé. Les résultats indiqués sont limitées  à la plus pertinente de vos résultats. S\'il vous plaît affiner votre recherche afin de diminuer le nombre de résultats et d\'obtenir  des résultats plus pertinents!';

// ------------------- users -----------------

$lng['users']['errors']['email_not_permitted'] = 'Cette adresse email n\'est pas autorisé!';

// ------------------- listing plans -----------------

$lng['subscriptions']['max_usage_reached'] = 'Vous n\'êtes pas autorisé à utiliser cet abonnement  plus, le nombre maximal d\'utilisation  est atteint!';

// ------------------- end vers 7.0 -----------------

// ------------------- version 7.05 ------------------

$lng['location']['choose_location'] = 'Choisir l\'emplacement';
$lng['location']['choose'] = 'Choisir';
$lng['location']['change'] = 'Changer';
$lng['location']['all_locations'] = 'All locations';
// ----------------- end version 7.05 ----------------


// ------------------- version 7.06 ------------------

$lng['alerts']['category'] = ' Catégorie';
$lng['location']['save_location'] = 'Enregistrer le lieu';

$lng['credits']['credits'] = 'Crédits';
$lng['credits']['credit'] = 'Crédit';
$lng['credits']['pending_credits'] = 'Crédit en attente';
$lng['credits']['current_credits'] = 'Crédit actuel';
$lng['credits']['one_credit_equals'] = 'Un crédit équivaut à';
$lng['credits']['credits_amount'] = 'Valeur du crédit';
$lng['credits']['buy_extra_credits'] = 'Acheter du crédit supplémentaire';
$lng['credits']['credits_package'] = 'Forfait';
$lng['credits']['select_package'] = 'Sélectionner le forfait';
$lng['credits']['choose_package'] = 'Choisissez forfait';
$lng['credits']['you_currently_have'] = 'Vous avez actuellement ';
$lng['credits']['you_currently_have_no_credits'] = 'Vous n\'avez actuellement aucun crédit ';
$lng['credits']['pay_using_credits'] = 'Payer avec votre crédit';
$lng['credits']['not_enough_credits'] = 'Pas assez de crédit pour ce paiement!';
$lng['credits']['scredits'] = 'crédits';
$lng['credits']['scredit'] = 'crédit';



$lng['order_history']['credits_purchase'] = 'Crédits acheter';
$lng['order_history']['invalid_order'] = 'Commande non valide!';

// ------------------- end version 7.06 ------------------

$lng['listings']['wait_while_redirected'] = 'S\'il vous plaît patienter pendant le temps de vous d\'être redirigé!';

// ------------------- version 7.08 ------------------
$lng['listing']['login_to_view_contact'] = 'S\'il vous plaît <a href="::LOGIN_LINK::">connectez-vous</a> afin d\'afficher les informations du contact!';
$lng['listing']['no_contact_information'] = 'Aucune information de disponible.';


$lng['navbar']['register_as'] = 'Inscrivez-vous comme';
$lng['listings']['all_ads'] = 'Toutes les annonces';
$lng['listings']['refine'] = 'Affiner';
$lng['listings']['results'] = 'Résultats';
$lng['listings']['photos'] = 'photos';
$lng['listings']['user_details'] = 'Voir détails de l\'utilisateur';
$lng['listings']['back_to_details'] = 'Retour àl\'annonce';

$lng['listings']['post_free_ad'] = 'Publier une annonce';

$lng['users']['username_available'] = 'Le nom d\'utilisateur est disponible!';
$lng['users']['username_not_available'] = 'Nom d\'utilisateur n\'est pas disponibles!';

$lng['general']['not_found'] = 'La page demandée n\'a pas été trouvé!';
$lng['general']['full_version'] = 'Full version';
$lng['general']['mobile_version'] = 'Mobile version';
$lng['failed'] = 'Manqué';
$lng['remember_me'] = 'Se souvenir de moi';

$lng['less_than_a_minute'] = 'I y a moins d\'une minute';
$lng['minute'] = 'minute';
$lng['minutes'] = 'minutes';
$lng['hour'] = 'heure';
$lng['hours'] = 'heures';
$lng['yesterday'] = 'hier';
$lng['day'] = 'jour';
$lng['days'] = 'jours';
$lng['ago_postfix'] = ' il y a';
$lng['ago_prefix'] = '';

// ------------------- end version 7.08 ------------------ 

// ------------------- version 8.01 ------------------

$lng['today'] = 'Aujourd\'hui';
$lng['messages']['confirm_delete'] = 'Etes-vous sûr de vouloir supprimer ce message?';
$lng['listings']['change_category'] = 'Changer de catégorie';
$lng['listings']['change_plan'] = 'Sélectionner un autre plan';
$lng['listings']['choose_active_subscription'] = 'Choisissez parmi vos abonnements actifs';


$lng['useraccount']['request_removal'] = 'Supprimer mon compte';
$lng['useraccount']['request_removal_now'] = 'Envoyer une demande de suppression de compte';
$lng['useraccount']['removal_verification_sent'] = 'Vous recevrez un email contenant un lien de validation. S\'il vous plaît cliquer sur le lien pour confirmer la demande de suppression!';

$lng['contact']['message_waits_admin_aproval'] = 'Votre message sera délivré une fois approuvé par l\'administrateur!';

$lng['general']['accept'] = 'Accepter';
$lng['general']['decline'] = 'Décliner';

$lng['general']['tax'] = 'Taxe';
$lng['general']['total_with_tax'] = 'Totale avec les taxes';

$lng['navbar']['rss'] = 'RSS';

$lng['general']['in_category'] = 'dans la catégorie';

$lng['users']['user_info'] = 'Informations pour l\'usager';
$lng['users']['store_info'] = 'Informations sur le vendeur';
$lng['users']['user_listings'] = 'Toutes les annonces';

$lng['login']['errors']['invalid_email_pass'] = 'E-mail ou mot de passe invalide!';
$lng['general']['or'] = 'ou';
$lng['newad']['choose_a_new_plan'] = 'Choisissez un nouveau plan';

$lng['listings']['no_extra_options_available'] = 'Il n\'y a pas d\'options supplémentaires disponibles!';

$lng['listings']['map'] = 'Carte';

$lng['users']['affiliate'] = 'Affiliation';
$lng['users']['affiliate_id'] = 'Id d\'affiliation';
$lng['users']['affiliate_link'] = 'Lien d\'affiliation';
$lng['users']['affiliate_paypal_email'] = 'E-mail PayPal';
$lng['users']['info']['affiliate_paypal_email'] = 'Vous recevrez ici l\'argent gagné avec votre compte d\'affiliation';
$lng['users']['errors']['affiliate_paypal_email'] = 'S\'il vous plaît, entrez votre compte PayPal! Vous recevrez ici l\'argent gagné avec votre compte affiliation';

$lng['listings']['result'] = 'résultat';

$lng['confirm_delete'] = 'Etes-vous sûr de vouloir supprimer l\'élément sélectionné?';
$lng['confirm_delete_all'] = 'Etes-vous sûr de vouloir supprimer les éléments sélectionnés?';

$lng['general']['show'] = 'Liste';
$lng['general']['on_a_page'] = 'sur une page';
$lng['general']['return'] = 'Retour';

$lng['login']['register_for_free'] = 'Enregistrez-vous gratuitement!';
$lng['general']['sent'] = 'Expédié';
$lng['general']['received'] = 'Reçu';
$lng['messages']['spam'] = 'Spam';

$lng['newad']['not_logged_in'] = 'Vous avez un compte cliquez sur le bouton';
$lng['newad']['or_post_without_account'] = 'ou continuer en passant une annonce sans compte!';

$lng_comments['scomments'] = 'commentaires';
$lng_comments['scomment'] = 'commentaire';
$lng['general']['on'] = 'sur';

$lng['affiliates']['last_payment'] = 'Dernier paiement';
$lng['affiliates']['last_payment_date'] = 'Dernière date de paiement';
$lng['affiliates']['next_payment_date'] = 'Prochaine date de paiement';
$lng['affiliates']['total_due'] = 'Total des créances';
$lng['affiliates']['total_payments'] = 'Le total des paiements reçus';
$lng['affiliates']['revenue_history'] = 'Historique des revenus';
$lng['affiliates']['payments_history'] = 'Historique des paiements';
$lng['affiliates']['pending_payment'] = 'En attendant le paiement';
$lng['affiliates']['released'] = 'Libéré';
$lng['affiliates']['not_released'] = 'Non libéré';
$lng['affiliates']['paid'] = 'Payé';
$lng['affiliates']['not_paid'] = 'Non payé';

$lng['general']['no_items'] = 'Aucun élément';
$lng['useraccount']['amount_start'] = 'Montant de la';
$lng['useraccount']['amount_end'] = 'Montant à';
$lng['not_allowed_to_post_ads'] = 'Vous n\'êtes pas autorisé à publier une annonce à ce compte!';

// ------------------- end version 8.01 ------------------

/* ------------------- version 8.4 ----------------------- */

$lng['listings']['info']['listing_pending_edited'] = 'Les modifications que vous avez apporté reste en attente jusqu\'à ce qu\'il soit examiné par un l\'administrateur!';

$lng['useraccount']['auction'] = 'Enchères';
$lng['useraccount']['add_auction'] = 'Basculer l\'annonce en mode enchère';
$lng['useraccount']['remove_auction'] = 'Supprimer votre offre';
$lng['useraccount']['auction_start_price'] = 'Offre à partir de ';
$lng['useraccount']['starts_at'] = 'à partir de ';
$lng['useraccount']['no_bids'] = 'Aucune offre';
$lng['useraccount']['max_bid'] = 'l\'enchére actuelle est de';
$lng['useraccount']['enable'] = 'Activer';
$lng['useraccount']['disable'] = 'Désactiver';
$lng['useraccount']['error']['auction_start_price'] = 'Entrez une offre à partire de!';
$lng['useraccount']['info']['auction_added'] = 'Votre offre a été ajoutée avec succès !';
$lng['useraccount']['confirm_delete'] = 'Voulez vous supprimer votre offre?';
$lng['useraccount']['place_bid'] = 'Placez une offre!';
$lng['useraccount']['login_to_bid'] = 'il faut etre connecter à votre compte pour mettre une offre!';
$lng['useraccount']['bid'] = 'Votre Offre';
$lng['useraccount']['message_to_seller'] = 'Message au vendeur';
$lng['useraccount']['error']['enter_bid'] = 'Aucune enchère n\'a été faite.';
$lng['useraccount']['error']['incorrect_bid'] = 'Offre non valable !';
$lng['useraccount']['error']['bid_smaller_than_starting_price'] = 'Votre offre est plus petite que le prix de départ!';
$lng['useraccount']['bid_placed'] = 'Votre offre a été placée!';
$lng['useraccount']['placed_on'] = 'placé sur';
$lng['useraccount']['no_bids_for_auction'] = 'Aucune offre n\'a été placée.';

/* ------------------- end version 8.4 ----------------------- */

// ---------------  8.5 --------------------
$lng['general']['click_to_view'] = 'Cliquez pour voir';
$lng['advanced_search']['clear_search'] = 'Effacer la recherche';
$lng['listings']['currency'] = 'Monnaie';
$lng['listings']['show_phone'] = 'Voir les numéro';
$lng['listings']['make_public'] = 'Rendre publique';

$lng['advanced_search']['only_ads_with_auction'] = 'Seulement les annonces avec des ventes aux enchères';
$lng['security']['failed_login_attempts'] = 'Répétées tentatives de connexion';

// --------------- end  8.5 --------------------

// --------------- 8.7 --------------------
$lng['users']['info']['sms_verification'] = 'Votre compte est actuellement inactif! Vous recevrez bientôt un message SMS contenant un code de validation. Entrez le code dans la case ci-dessous pour activer votre compte.';
$lng['users']['verification_code'] = 'Code de vérification';
$lng['users']['waiting_sms_activation'] = 'En attente d\'activation SMS';
$lng['listings']['info']['sms_verification'] = 'Votre annonce est actuellement inactif! Vous recevrez bientôt un message SMS contenant un code de validation. Entrez le code ci-dessous pour activer votre annonce.';
$lng['listings']['activate_listing'] = 'Activer l\'annonce';
$lng['listings']['errors']['sms_invalid_activation'] = 'Clé d\'activation non valide!';
$lng['listings']['info']['listing_pending'] = 'Votre inscription est en attente de validation par l\'administrateur.';
$lng['listings']['info']['listing_activated'] = 'Votre annonce est activée!';
$lng['listings']['errors']['listing_already_active'] = 'Votre annonce est déjà active!';
$lng['listings']['errors']['invalid_phone'] = 'Numéro de téléphone invalide!';


// --------------- 8.7 --------------------

// --------------- 8.10 --------------------
$lng['newad']['available_for'] = 'Disponible pour';
$lng['newad']['available_until_expires'] = 'Disponible jusqu\'à date d\'échéance';
$lng['newad']['view_info'] = 'Voir l\'info';
$lng['users']['errors']['phone_not_permitted'] = 'Ce numéro de téléphone n\'est pas autorisé!';
$lng['invoice']['invoice'] = 'Facture';
$lng['invoice']['invoice_no'] = 'Facture numéro';
$lng['invoice']['bill_to'] = 'Bill to';
$lng['invoice']['qty'] = 'Quantité';
$lng['invoice']['unit_price'] = 'Prix unité';
$lng['invoice']['subtotal'] = 'Sous total';
$lng['invoice']['sale_tax'] = 'TVA';
$lng['invoice']['new_listing'] = 'Nouvelle annonce';
$lng['invoice']['renew_listing'] = 'Renouvellement annonce';
$lng['invoice']['featured_eo'] = 'Option supplémentaire, ANNONCE VIP';
$lng['invoice']['highlited_eo'] = 'Option supplémentaire, ANNONCE SURBRILLANCE';
$lng['invoice']['priority_eo'] = 'Option supplémentaire, ANNONCE TÊTE DE LISTE';
$lng['invoice']['video_eo'] = 'Option supplémentaire, ANNONCE AVEC VIDEO';
$lng['invoice']['new_credits_pkg'] = 'Achat de forfait crédits';
$lng['invoice']['store'] = 'Achat d\'une page marchand';
$lng['invoice']['new_subscription'] = 'Achate de forfait d\'annonce';
$lng['invoice']['renew_subscription'] = 'Renouvellement de forfait d\'annonce';
$lng['weeks'] = 'Semaines';
$lng['week'] = 'Semaine';
$lng['months'] = 'Mois';
$lng['month'] = 'Mois';
// --------------- end 8.10 --------------------

// --------------- 9.1 --------------------
$lng['listings']['show_whatsapp'] = 'Afficher WhatsApp';
$lng['general']['to_top'] = 'Haut de page';
$lng['quick_search']['location'] = 'Code postal ou lieu';
$lng['listings']['see_all'] = 'Voir toutes les annonces »';
$lng['listings']['ads'] = 'annonces';
$lng['listings']['user_since'] = 'Utilisateur depuis';
$lng['listings']['contact_details'] = 'Détails du contact';
$lng['listings']['favourite'] = 'Favori';
$lng['listings']['manage_ad'] = 'Gérer votre annonce';
$lng['useraccount']['show_bids'] = 'Afficher les offres';
$lng['listings']['report_abusive'] = 'Signaler l\'annonce';
$lng['listings']['enable_auction'] = 'Activer l\'enchère';
$lng['invoice']['download'] = 'Télécharger la facture';


$lng['register']['group'] = 'Type de compte';
$lng['register']['change_group'] = 'Changer le type de compte';
$lng['register']['select_group'] = 'Sélectionnez un groupe';

$lng['search']['private'] = 'Particuliers';
$lng['search']['professional'] = 'Professionnels';
$lng['search']['save_your_search2'] = 'Voulez-vous enregistrer votre recherche?';
$lng['search']['save_search'] = 'Enregistrer la recherche';
$lng['search']['refine_your_search'] = 'Affiner la recherche';
$lng['search']['hide_refine'] = 'Cacher affiner';

$lng['listings']['view_all_featured'] = 'Aficher toutes les annonces VIP >>';
$lng['listings']['view_all_latest'] = 'Aficher toutes les annonces récents >>';
$lng['listings']['view_all_auctions'] = 'Aficher toutes les enchères >>';
$lng['listings']['auctions'] = 'Enchères';
$lng['listings']['view_ads_from'] = 'Voir les annonces de';
$lng['location']['change_location'] = 'Changer de lieu';

// --------------- end 9.1 --------------------

// --------------- 9.2 --------------------
$lng['listings']['show_email'] = 'Aficher l\'adresse e-mail';
$lng['listings']['error']['photo_mandatory'] = 'S\'il vous plaît télécharger au moins une image avec votre annonce!';
// --------------- end 9.2 --------------------

// --------------- 9.3 --------------------
$lng['listings']['call'] = 'Appeler';
$lng['listings']['sms'] = 'SMS';
$lng['contact']['phone'] = 'Numéro de téléphone';
$lng['contact']['error']['phone_or_email_missing'] = 'S\'il vous plaît entrez votre adresse e-mail ou numéro de téléphone!';
$lng['general']['at'] = 'à';
$lng['general']['distance_from'] = 'distance de';
// --------------- end 9.3 --------------------

// --------------- 9.4 --------------------
$lng['contact']['error']['comments_forbidden_words'] = 'Le message contient la langue interdite, s\'il vous plaît examiner!';
// --------------- end 9.4 --------------------

// --------------- 9.5 --------------------
$lng['ie']['added'] = 'ajoutée';
$lng['users']['repeat'] = 'Répéter';
$lng['users']['errors']['emails_dont_match'] = 'Les adresses e-mail ne correspondent pas!';
$lng['listings']['pending_bump'] = 'Pending bump';
$lng['login']['username_or_email'] = 'Nom d\'utilisateur ou email';
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