<?php
if (!isset($_SESSION)) session_start();
include ("../include/UrlParam2PhpVar.inc.php");
$param=Array();
// Fichier de param�trage de l'apparence et de la gestion du chat
// Les noms de zones sont en anglais afin de faciliter la compr�hension des non-francophones.
if ($lg == "fr"){
   $mess_gen_envoi = "Envoyer";
   $quit_chat = "Quitter le Chat";
   $param["title"]="Chat de Formagri";
   $param["quit"]="Quitter";
   $param["couleur"]="Choisissez votre couleur";
   $param["text_form_user"]="Votre pseudo ";
   $param["text_form_submit"]="Se connecter";
   $param["text_form_connecting"]="Connexion en cours";
   $param["text_form_max"]="Le chat est plein !";
   $param["text_form_bad_pwd"]="Un utilisateur enregistr� poss�de d�j� ce pseudo !";
   $param["text_form_user_in"]="Ce pseudo est d�j� pris par un participant !";
   $param["text_form_success"]="Connexion r�ussie avec le pseudo : ";
   $param["text_error_connect"]="<B>Erreur de connexion</B>";
   $param["text_nobody"]="Actuellement, personne n'est connect�";
   $param["text_one_people"]="<B>Actuellement, une personne est connect�e</B>";
   $param["text_more"]="<B>Actuellement, (nb) personnes sont connect�es</B>";
   $param["text_connection_ok"]="Connexion r�ussie avec le pseudo";
   $param["text_connecting"]="<BR>Connexion en cours...";
   $param["text_your_msg"]="Message ";
   $param["text_server"]="Serveur : ";
   $param["text_user"]="Pseudo : ";
   $param["text_quit"]="Quitter";
   $param["text_connected"]="Connect� &nbsp;";
   $param["text_register"]="habitu�";
   $param["text_invite"]="Invit�";
   $param["text_nb_connect"]="connect�s";
   $param["text_sure_quit"]="Bonjour !\\nEtes-vous s�r de vouloir quitter le chat ?";
   $param["text_disconnect"]="<center><Font color='#333333'><BIG><B>Vous �tes maintenant d�connect� du Chat Formagri<BR>Dans 3 secondes, cette fen�tre se fermera toute seule.<BR><BR> Veuillez patienter....</B></BIG></FONT></CENTER>";
   $param["text_fatal_disconnect"]="Vous avez �t� d�connect� du Chat plus de 30 secondes!\\nMerci de vous identifier de nouveau...";
   $param["text_intro"]= "<CENTER><FONT COLOR='#006699' SIZE='3'><B>Bienvenue sur le Chat de Formagri</B></FONT><BR></CENTER>";
   $param["status_default"]="Chat Formagri";
   $param["status_send"]="Message en cours d'envoi...";
   $param["status_connect"]="Connexion au serveur de chat...";
   $param["status_receive"]="V�rification de nouveaux messages...";
   $param["status_wait"]="Message en cours d'envoi.\\nMerci de patienter.";
   $param["no_one"]="Personne sur le chat";
   $param["voir_msg"]="Voir tous les messages";
   $param["join_us"]="nous a rejoint";
   $param["quit_us"] = "nous a quitt�";
}elseif ($lg == "ru"){
   $mess_gen_envoi = "���������";
   $quit_chat = "����� �� ����";
   $param["title"]="��� Formagri";
   $param["quit"]="�����";
   $param["couleur"]="�������� ��� ����";
   $param["text_form_user"]="��� ��������� ";
   $param["text_form_submit"]="������������";
   $param["text_form_connecting"]="����������";
   $param["text_form_max"]="��� ���������� !";
   $param["text_form_bad_pwd"]="������ ��������� ��� �������������� ������������������ ������������� !";
   $param["text_form_user_in"]="������ ��������� ��� ������������ ���������� !";
   $param["text_form_success"]="�������� ���������� � ����������� : ";
   $param["text_error_connect"]="<B>������ ���������� </B>";
   $param["text_nobody"]="� ��������� ����� ����� �� ��������� ";
   $param["text_one_people"]="<B> � ��������� ����� ���� �������� ��������� </B>";
   $param["text_more"]="<B> � ��������� ����� (nb) �������(�) </B>";
   $param["text_connection_ok"]="�������� ���������� � ����������� ";
   $param["text_connecting"]="<BR>����������...";
   $param["text_your_msg"]="��������� : ";
   $param["text_server"]="������ : ";
   $param["text_user"]="��������� : ";
   $param["text_quit"]="�����";
   $param["text_connected"]="���������";
   $param["text_register"]="�����������";
   $param["text_invite"]="������������";
   $param["text_nb_connect"]="������������";
   $param["text_sure_quit"]="������ ���� !\\n�� �������, ��� ������ �������� ��� ?";
   $param["text_disconnect"]="<center><Font color='#333333'><BIG><B>�� ����������� �� ���� Formagri<BR> ����� 3 ���. ������ ���� ����� �������.<BR><BR> ��������� ����������....</B></BIG></FONT></CENTER>";
   $param["text_fatal_disconnect"]="�� ���� ����������� �� ���� � ������� �����, ��� 30 ���. !\\n�����������������, ����������, �����...";
   $param["text_intro"]="<CENTER><FONT COLOR=BLUE><BIG><U><B>����� ���������� � ��� Formagri</B></U></BIG></FONT><BR></CENTER>";
   $param["status_default"]="��� Formagri";
   $param["status_send"]="��������� ������������...";
   $param["status_connect"]="���������� � �������� ����...";
   $param["status_receive"]="�������� ����� ���������...";
   $param["status_wait"]="��������� ������������.\\n���������, ����������.";
   $param["no_one"]="������ � ����";
   $param["voir_msg"]="�������� ���� ���������";
   $param["join_us"]="������������� � ���";
   $param["quit_us"] = "������������ �� ���";
}elseif ($lg == "en"){
   $mess_gen_envoi = "Send";
   $quit_chat = "Quit Chat";
   $param["title"]="Formagri Chat";
   $param["quit"]="Leave Chat";
   $param["couleur"]="Choose your colour";
   $param["text_form_user"]="Your name ";
   $param["text_form_submit"]="Connect";
   $param["text_form_connecting"]="Connection in progress";
   $param["text_form_max"]="The chat is full !";
   $param["text_form_bad_pwd"]="A registered user already has this name !";
   $param["text_form_user_in"]="This name is already used by another participant !";
   $param["text_form_success"]="Good connection with the name : ";
   $param["text_error_connect"]="<B>Connection mistake</B>";
   $param["text_nobody"]="Currently no one is connected";
   $param["text_one_people"]="<B>Currently, someone is connected</B>";
   $param["text_more"]="<B>Currently, (nb) persons are connected</B>";
   $param["text_connection_ok"]="Good connection with the name";
   $param["text_connecting"]="<BR>Connection in progress...";
   $param["text_your_msg"]="Message ";
   $param["text_server"]="Server : ";
   $param["text_user"]="Name : ";
   $param["text_quit"]="Leave";
   $param["text_connected"]="Connected";
   $param["text_register"]="regular user";
   $param["text_invite"]="";
   $param["text_nb_connect"]="connected";
   $param["text_sure_quit"]="Hello (user) !\\n are you sure you want to leave the chat ?";
   $param["text_disconnect"]="<center><Font color='#333333'><BIG><B>Now you are disconnected from Formagri chat <BR>In 3 seconds, this window will close itself.<BR><BR> please wait....</B></BIG></FONT></CENTER>";
   $param["text_fatal_disconnect"]="YOU HAVE BEEN DISCONNECTED FROM THE CHAT DURING MORE THAN 30 SECONDS!\\nThank you for identifying again...";
   $param["text_intro"]="<CENTER><FONT COLOR=BLUE><BIG><U><B>Welcome to Formagri chat</B></U></BIG></FONT><BR></CENTER>";
   $param["status_default"]="Formagri Chat";
   $param["status_send"]="Message currently being sent...";
   $param["status_connect"]="Connection to the chat server...";
   $param["status_receive"]="Checking new messages...";
   $param["status_wait"]="Message currently being sent..\\nThank you for waiting.";
   $param["no_one"]="Anyone chatting";
   $param["voir_msg"]="View all messages";
   $param["join_us"]="is with us now";
   $param["quit_us"] = "is gone";
}
$param["chat_style_hour"]="font-family:verdana,arial;font-size:12px;font-weight:bold;color:green";
$param["chat_form_height"]=200;//295
$param["chat_form_width"]=360;//560;
$param["chat_form_top"]=35;//140;
$param["chat_form_left"]=20;
$param["chat_form_border_color"]="#298CA0";
$param["chat_bg_color"]="#F4F4F4";//"#F2EBDC";
$param["chat_width"]=300; //500;
$param["chat_nb_msg"]=10;//18;
$param["chat_msg_max_size"]=255;
$param["chat_msg_nb_colors"]=7;
$param["chat_msg_color1"]="black";
$param["chat_msg_color2"]="blue";
$param["chat_msg_color3"]="green";
$param["chat_msg_color4"]="lime";
$param["chat_msg_color5"]="red";
$param["chat_msg_color6"]="orange";
$param["chat_msg_color7"]="marroon";
// Param�trage technique ///////////
$param["chat_maxi_connect"]=40;                // Nombre maxi de chatteurs simultan�s
$param["delai_admin"]=10;
$param["delai_connect"]=30;
$param["msg_maxi"]=15;
$param["chat_timer"]=8;                        // D�lai de connexion au serveur de chat (Refresh)
// Plus ces d�lais sont courts, plus l'impression de "temps r�el" sera grande.
// Des d�lais plus courts risquent de surcharger le serveur.
// Il faut trouver un compromis entre confort et charge serveur.
$param["table_msg"]="p4_msg";
$param["table_user"]="p4_user";
$param["table_admin"]="p4_admin";
$param["table_salle"]="p4_salle";
$param[""]="";
?>