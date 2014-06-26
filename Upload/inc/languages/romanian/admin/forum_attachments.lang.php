<?php
/**
 * MyBB 1.6 Romanian Language Pack
 * Copyright 2011 Kaeden, All Rights Reserved
 *
 * $Id: forum_attachments.lang.php 5297 2011-12-29 Kaeden $
 */

// Tabs
$l['attachments'] = "Fișiere atașate";
$l['stats'] = "Statistici";
$l['find_attachments'] = "Găsește Fișiere Atașate";
$l['find_attachments_desc'] = "Folosind sistemul de căutare pentru fișierele atașate poți descoperi fișiere specifice încărcate de utilizatorii forumului tău. Începe prin completarea câtorva termeni de căutare mai jos. Toate câmpurile sunt opționale și nu vor fi luate în considerație la căutare decât în cazul în care sunt completate.";
$l['find_orphans'] = "Găsește Fișiere Împrăștiate";
$l['find_orphans_desc'] = "Fișierele împrăștiate sunt acelea care pentru un motiv sau altul lipsesc din baza de date sau din sistemul de fișiere. Acest utilitar te va asista în localizarea și înlăturarea acestora.";
$l['attachment_stats'] = "Statistici Fișiere Atașate";
$l['attachment_stats_desc'] = "Dedesubt sunt câteva statistici generale pentru fișierele atașate în acest moment.";

// Errors
$l['error_nothing_selected'] = "Te rugăm să selectezi cel puțin un fișier atașat pentru ștergere.";
$l['error_no_attachments'] = "Momentan nu există fișiere atașate pe forumul tău. Odată ce va fi atașat unul, vei putea accesa această secțiune.";
$l['error_not_all_removed'] = "Doar anumite fișiere împrăștiate au putut fi șterse; o parte din ele nu au putut fi înlăturate din directorul de încărcări local.";
$l['error_invalid_username'] = "Numele de utilizator completat nu este valid.";
$l['error_invalid_forums'] = "Cel puțin unul dintre forumurile selectate nu este valid.";
$l['error_no_results'] = "Nu au fost găsite fișiere pentru criteriile specificate.";
$l['error_not_found'] = "Fișierul nu a putut fi localizat în directorul de încărcări.";
$l['error_not_attached'] = "Fișierul a fost încărcat cu peste 24 de ore în urmă dar nu a fost atașat unui mesaj.";
$l['error_does_not_exist'] = "Subiectul de discuție sau mesajul acestui fișier nu mai există.";

// Success
$l['success_deleted'] = "Fișierele atașate selectate au fost șterse.";
$l['success_orphan_deleted'] = "Fișierele împrăștiate au fost șterse.";
$l['success_no_orphans'] = "Nu există fișiere împrăștiate pe forumul tău.";

// Confirm
$l['confirm_delete'] = "Ești sigur că dorești să ștergi fișierele selectate?";

// == Pages
// = Stats
$l['general_stats'] = "Statistici Generale";
$l['stats_attachment_stats'] = "Fișiere Atașate - Statistici";
$l['num_uploaded'] = "<strong>Număr Fișiere Atașate</strong>";
$l['space_used'] = "<strong>Spațiu Utilizat</strong>";
$l['bandwidth_used'] = "<strong>Consum Lățime Bandă Estimat</strong>";
$l['average_size'] = "<strong>Mărime Medie Fișier Atașat</strong>";
$l['size'] = "Mărime";
$l['posted_by'] = "Încărcat de";
$l['thread'] = "Subiect";
$l['downloads'] = "Descărcări";
$l['date_uploaded'] = "Data Încărcării";
$l['popular_attachments'] = "Clasamentul celor mai populare 5 fișiere atașate";
$l['largest_attachments'] = "Clasamentul celor mai mari 5 fișiere atașate";
$l['users_diskspace'] = "Primele 5 Poziții pentru utilizatorii cu cel mai mult spațiu ocupat";
$l['username'] = "Nume utilizator";
$l['total_size'] = "Mărime totală";

// = Orphans
$l['orphan_results'] = "Căutare Fișiere Împrăștiate - Rezultate";
$l['orphan_attachments_search'] = "Căutare Fișiere Împrăștiate";
$l['reason_orphaned'] = "Problema descrisă";
$l['reason_not_in_table'] = "Nu există în tabela de fișiere";
$l['reason_file_missing'] = "Fișier atașat lipsă";
$l['reason_thread_deleted'] = "Subiectul a fost șters";
$l['reason_post_never_made'] = "Mesajul a fost șters";
$l['unknown'] = "Nescunoscută";
$l['results'] = "Rezultate";
$l['step1'] = "Pasul 1";
$l['step2'] = "Pasul 2";
$l['step1of2'] = "Pasul 1 din 2 - Scanare Sistem Fișiere";
$l['step2of2'] = "Pasul 2 din 2 - Scanare Bază Date";
$l['step1of2_line1'] = "Te rugăm să aștepți, sistemul de fișiere este momentan scanat pentru găsirea fișierelor împrăștiate.";
$l['step2of2_line1'] = "Te rugăm să aștepți, baza de date este momentan scanată pentru găsirea fișierelor împrăștiate.";
$l['step_line2'] = "Vei fi redirecționat automat la următorul pas odată ce acest proces este încheiat.";

// = Attachments / Index
$l['index_find_attachments'] = "Fișiere Atașate - Găsire";
$l['find_where'] = "Găsește unde...";
$l['name_contains'] = "Numele fișierului conține";
$l['name_contains_desc'] = "Pentru a căuta specific după un anumit șir, completează  *.[extensie fișier]. Exemplu: *.zip.";
$l['type_contains'] = "Tipul fișierului conține";
$l['forum_is'] = "Forumul căutat";
$l['username_is'] = "Numele de utilizator este";
$l['more_than'] = "Mai mare de";
$l['greater_than'] = "Mai mare ca";
$l['is_exactly'] = "Este exact";
$l['less_than'] = "Mai puțin de";
$l['date_posted_is'] = "Dată publicare";
$l['days_ago'] = "zile în urmă";
$l['file_size_is'] = "Mărime fișier";
$l['kb'] = "KB";
$l['download_count_is'] = "Număr descărcări";
$l['display_options'] = "Opțiuni afișare";
$l['filename'] = "Nume Fișier";
$l['filesize'] = "Mărime Fișier";
$l['download_count'] = "Număr Descărcări";
$l['post_username'] = "Nume Utilizator";
$l['asc'] = "Ascendent";
$l['desc'] = "Descendent";
$l['sort_results_by'] = "Sortează rezultatele după";
$l['results_per_page'] = "Rezultate pe pagină";
$l['in'] = "";

// Buttons
$l['button_delete_orphans'] = "Șterge fișierele împrăștiate selectate";
$l['button_delete_attachments'] = "Șterge fișierele atașate împrăștiate";
$l['button_find_attachments'] = "Găsește fișiere atașate";

?>