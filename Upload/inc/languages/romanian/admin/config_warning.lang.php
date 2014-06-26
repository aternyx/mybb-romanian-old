<?php
/**
 * MyBB 1.6 Romanian Language Pack
 * Copyright 2011 Kaeden, All Rights Reserved
 * 
 * $Id: config_warning.lang.php 5297 2011-12-29 Kaeden $
 */
 
$l['warning_system'] = "Sistem Avertismente";
$l['warning_types'] = "Tipuri Avertismente";
$l['warning_types_desc'] = "Aici poți administra o listă cu diferite tipuri de avertismente pe care Echipa Moderatoare le poate emite utilizatorilor.";
$l['add_warning_type'] = "Adaugă Tip Nou";
$l['add_warning_type_desc'] = "Aici poți adăuga un nou tip de avertisment predefinit. Tipurile de avertizare sunt selectabile când utilizatorii sunt avertizați și poți defini, de asemenea, numărul de puncte adăugat la Avertizările Cumulate, cât și perioada după care acestea expiră.";
$l['edit_warning_type'] = "Modifică Tip Avertisment";
$l['edit_warning_type_desc'] = "Aici poți modifica un tip predefinit de avertisment. Tipurile de avertizare sunt selectabile când utilizatorii sunt avertizați și poți defini, de asemenea, numărul de puncte adăugat la Avertizările Cumulate, cât și perioada după care acestea expiră.";
$l['warning_levels'] = "Avertizări Cumulate";
$l['warning_levels_desc'] = "Avertizările Cumulate definesc acțiunile care se impun când utilizatorul atinge limita maximă de avertizare admisă (procentajul maxim permis de puncte de avertizare). Poți suspenda utilizatorii sau privilegiile lor de publicare.";
$l['add_warning_level'] = "Adaugă Limită Maximă Nouă";
$l['add_warning_level_desc'] = "Aici poți defini o nouă limită maximă admisă. Limitele maxime reprezintă sancțiunile care vor fi impuse unui utilizator când acesta atinge un procentaj specific din limita de avertizare.";
$l['edit_warning_level'] = "Modifică Limită Maximă Admisă";
$l['edit_warning_level_desc'] = "Limitele maxime reprezintă sancțiunile care vor fi impuse unui utilizator când acesta atinge un procentaj specific din limita de avertizare.";

$l['percentage'] = "Procentaj";
$l['action_to_take'] = "Sancțiune impusă";
$l['move_banned_group'] = "Mută în Grupul ({3}) pentru {1} {2}";
$l['move_banned_group_permanent'] = "Mută în grupul utilizatorilor suspendați ({1}) permanent";
$l['suspend_posting'] = "Suspendă privilegiile de publicare pentru {1} {2}";
$l['suspend_posting_permanent'] = "Suspendă privilegiile de publicare permanent.";
$l['moderate_new_posts'] = "Mesajele trimise necesită aprobare pentru {1} {2}";
$l['moderate_new_posts_permanent'] = "Mesajele trimise necesită aprobare permanent.";
$l['no_warning_levels'] = "Nu există limite maxime admise configurate pentru forumul tău momentan.";

$l['warning_type'] = "Tip avertisment";
$l['points'] = "Puncte";
$l['expires_after'] = "Expiră după";
$l['no_warning_types'] = "Nu există tipuri de avertismente configurate pentru forumul tău momentan.";

$l['warning_points_percentage'] = "Procentaj din numărul maxim de puncte admis";
$l['warning_points_percentage_desc'] = "Te rugăm să introduci o valoare numerică cuprinsă între 1 și 100.";
$l['action_to_be_taken'] = "Sancțiune impusă";
$l['action_to_be_taken_desc'] = "Selectează ce sancțiune dorești să impui la atingerea limitei.";
$l['ban_user'] = "Suspendă utilizator";
$l['banned_group'] = "Grup de utilizatori suspendați:";
$l['ban_length'] = "Durată suspendare:";
$l['suspend_posting_privileges'] = "Suspendă privilegiile de publicare";
$l['suspension_length'] = "Durată suspendare:";
$l['moderate_posts'] = "Mesajele necesită aprobare";
$l['moderation_length'] = "Necesitatea aprobării:";
$l['save_warning_level'] = "Salvează";

$l['title'] = "Titlu";
$l['points_to_add'] = "Puncte Adăugate";
$l['points_to_add_desc'] = "Numărul de puncte adăugate la procentul de avertizare.";
$l['warning_expiry'] = "Dată Expirare";
$l['warning_expiry_desc'] = "După cât timp expiră avertismentul?";
$l['save_warning_type'] = "Salvează Tipul";

$l['expiration_hours'] = "Ore";
$l['expiration_days'] = "Zi(le)";
$l['expiration_weeks'] = "Săptămâni";
$l['expiration_months'] = "Luni";
$l['expiration_never'] = "Niciodată";
$l['expiration_permanent'] = "Permanent";

$l['error_invalid_warning_level'] = "Limita maximă precizată nu există.";
$l['error_invalid_warning_percentage'] = "Nu ai introdus un procentaj valid pentru acest tip. Valoarea trebuie să fie curpinsă între 1 și 100.";
$l['error_invalid_warning_type'] = "Tipul de avertisment precizat nu există.";
$l['error_missing_type_title'] = "Nu ai introdus un titlu pentru acest tip de avertisment.";
$l['error_missing_type_points'] = "Nu ai introdus un număr valid de puncte. Numărul trebuie să fie sub {1} și mai mare ca 0.";

$l['success_warning_level_created'] = "Limita maximă a fost adăugată.";
$l['success_warning_level_updated'] = "Limita maximă a fost actualizată.";
$l['success_warning_level_deleted'] = "Limita maximă a fost înlăturată.";
$l['success_warning_type_created'] = "Tipul de avertisment a fost creat.";
$l['success_warning_type_updated'] = "Tipul de avertisment a fost actualizat.";
$l['success_warning_type_deleted'] = "Tipul de avertisment selectat a fost șters.";

$l['confirm_warning_level_deletion'] = "Ești sigur că dorești să ștergi această limită?";
$l['confirm_warning_type_deletion'] = "Ești sigur că dorești să ștergi acest tip?";

?>
