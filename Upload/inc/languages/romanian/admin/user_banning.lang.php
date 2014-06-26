<?php
/**
 * MyBB 1.6 Romanian Language Pack
 * Copyright 2011 Kaeden, All Rights Reserved
 * 
 * $Id: user_banning.lang.php 5297 2011-12-29 Kaeden $
 */

// Tabs
$l['banning'] = "Restricționare";
$l['banned_accounts'] = "Suspendare Conturi";
$l['banned_accounts_desc'] = "Aici poți administra restricționarea accesului de la forum pentru anumite conturi.";
$l['ban_a_user'] = "Supendă Cont";
$l['ban_a_user_desc'] = "Aici poți suspenda un cont.";
$l['edit_ban'] = "Modifică suspendare";
$l['edit_ban_desc'] = "Aici poți modifca motivul si durata suspendării.";
$l['banned_ips'] = "Restricționare Adrese IP";
$l['disallowed_usernames'] = "Restricționare Nume Utilizator";
$l['disallowed_email_addresses'] = "Restricționare Adrese E-mail";

// Errors
$l['error_invalid_ban'] = "Suspendarea aleasă pentru modificare nu este validă.";
$l['error_invalid_username'] = "Numele de utilizator este nu este valid.";
$l['error_no_perm_to_ban'] = "Nu ai permisiunea să suspenzi acest utilizator.";
$l['error_already_banned'] = "Acest utilizator aparține deja unui grup suspendat și nu poate fi adăugat unuia cu aceleași proprietăți.";
$l['error_ban_self'] = "Nu te poți autosuspenda.";
$l['error_no_reason'] = "Nu ai motivat suspendarea acestui cont.";

// Success
$l['success_ban_lifted'] = "Suspendarea selectată a fost anulată.";
$l['success_banned'] = "Contul specificat a fost suspendat.";
$l['success_ban_updated'] = "Suspendarea specificată a fost actualizată.";
$l['success_pruned'] = "Toate subiectele de discuție și mesajele trimise de utilizator au fost șterse.";

// Confirm
$l['confirm_lift_ban'] = "Ești sigur că dorești să anulezi această suspendare?";
$l['confirm_prune'] = "Ești sigur că dorești să elimini toate mesajele acestui utilizator?";

//== Pages
//= Add / Edit
$l['ban_username'] = "Nume utilizator <em>*</em>";
$l['autocomplete_enabled'] = "Completarea sugerată este activată pentru acest câmp.";
$l['ban_reason'] = "Motiv";
$l['ban_group'] = "Grup Suspendat <em>*</em>";
$l['ban_group_desc'] = "Pentru a suspenda acest cont, utilizatorul trebuie mutat într-un grup cu acces restricționat.";
$l['ban_time'] = "Durată <em>*</em>";

//= Index
$l['user'] = "Nume utilizator";
$l['moderation'] = "Opțiuni Moderare";
$l['ban_lifts_on'] = "Suspendarea expiră la";
$l['time_left'] = "Timp rămas";
$l['permenantly'] = "permanentă";
$l['na'] = "N/A";
$l['for'] = "pentru";
$l['bannedby_x_on_x'] = "<strong>{1}</strong><br /><small>Suspendat de {2} pe data de {3} {4}</small>";
$l['lift'] = "Anulează";
$l['no_banned_users'] = "Nu există utilizatori suspendați momentan.";
$l['prune_threads_and_posts'] = "Curăță subiecte și răspunsuri";

// Buttons
$l['ban_user'] = "Suspendă contul";
$l['update_ban'] = "Actualizează suspendarea";

?>