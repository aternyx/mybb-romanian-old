<?php
/**
 * MyBB 1.6 Romanian Language Pack
 * Copyright 2011 Kaeden, All Rights Reserved
 * 
 * $Id: config_attachment_types.lang.php 5297 2011-12-29 Kaeden $
 */

$l['attachment_types'] = "Tipuri Fișiere";
$l['attachment_types_desc'] = "Aici poți crea și administra tipuri de fișiere permise la atașarea mesajelor trimise.";
$l['add_new_attachment_type'] = "Adaugă Tip Nou";
$l['add_attachment_type'] = "Adaugă Tip Nou";
$l['add_attachment_type_desc'] = "Adăugarea unui nou tip va permite utilizatorilor să atașeze acest format de fișiere la mesajele trimise. Ai posibilitatea să specifici extensia, tipul MIME, mărimea maximă admisă și o mică pictogramă de identificare pentru fiecare tip.";
$l['edit_attachment_type'] = "Editează Tip";
$l['edit_attachment_type_desc'] = "Ai posibilitatea să specifici extensia, tipul MIME, mărimea maximă admisă și o mică pictogramă de identificare pentru fiecare tip.";

$l['extension'] = "Extensie";
$l['maximum_size'] = "Mărimea maximă";
$l['no_attachment_types'] = "Nu există specificat niciun tip pentru fișierele atașate în acest moment.";

$l['file_extension'] = "Extensie fișier";
$l['file_extension_desc'] = "Precizează extensia admisă a fișierului aici (NU include și punctul antecesor) (Exemplu: txt)";
$l['mime_type'] = "Tip MIME";
$l['mime_type_desc'] = "Specifică tipul MIME trimis de server la inițializarea descărcării acestui tip de fișiere (<a href=\"http://www.webmaster-toolkit.com/mime-types.shtml\">Listă de tipuri MIME</a>)";
$l['maximum_file_size'] = "Mărimea maximă admisă (Kilobaiți)";
$l['maximum_file_size_desc'] = "Mărimea maximă admisă pentru acest tip de fișiere în Kilobaiți (1 MB = 1024 KB)";
$l['limit_intro'] = "Te rugăm să te asiguri că mărimea admisă este sub cea mai mică dintre limitele PHP de mai jos:";
$l['limit_post_max_size'] = "Mărime Maximă Trimitere (max_post_size): {1}";
$l['limit_upload_max_filesize'] = "Mărime Maximă Încărcare (upload_max_file_size): {1}";
$l['attachment_icon'] = "Pictogramă identificare";
$l['attachment_icon_desc'] = "Dacă dorești să afișezi o mică pictogramă de identificare pentru acest tip de fișiere adaugă aici calea acesteia. Eticheta {theme} înlocuiește automat numele directorului de imagini al temei grafice curente aleasă de un utilizator, astfel că ai opțiunea să introduci seturi de pictograme specifice fiecărei teme grafice.";
$l['save_attachment_type'] = "Salvează Tip";

$l['error_invalid_attachment_type'] = "Ai selectat un tip de fișier invalid.";
$l['error_missing_mime_type'] = "Nu ai completat tipul MIME pentru acest tip.";
$l['error_missing_extension'] = "Nu ai completat extensia pentru acest tip.";

$l['success_attachment_type_created'] = "Tipul nou de fișier a fost adăugat.";
$l['success_attachment_type_updated'] = "Tipul de fișier a fost actualizat.";
$l['success_attachment_type_deleted'] = "Tipul de fișier a fost șters.";

$l['confirm_attachment_type_deletion'] = "Ești sigur că dorești să ștergi acest tip de fișiere?";

?>