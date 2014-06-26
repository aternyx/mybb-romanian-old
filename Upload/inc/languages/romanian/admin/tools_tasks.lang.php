<?php
/**
 * MyBB 1.6 Romanian Language Pack
 * Copyright 2011 Kaeden, All Rights Reserved
 * 
 * $Id: tools_tasks.lang.php 5404 2014-05-01 Kaeden $
 */

$l['task_manager'] = "Manager Automatizări";
$l['add_new_task'] = "Adaugă Automatizare Nouă";
$l['add_new_task_desc'] = "Aici poți programa o nouă automatizare pentru forumul tău.";
$l['edit_task'] = "Modifică Automatizare";
$l['edit_task_desc'] = "Dedesubt poți modifica diferite setări pentru automatizarea selectată.";
$l['task_logs'] = "Jurnal Automatizări";
$l['view_task_logs'] = "Vezi Jurnal Automatizări";
$l['view_task_logs_desc'] = "Când o automatizare rulează și însemnările în jurnal sunt activate, toate rezultatele si posibilele erori vor fi consemnate dedesubt. Însemnările mai vechi de 30 de zile sunt automat șterse.";
$l['scheduled_tasks'] = "Automatizări Programate";
$l['scheduled_tasks_desc'] = "Aici poți administra automatizările forumului tău. Pentru a rula o automatizare, apasă pictograma de lângă numele acesteia.";

$l['title'] = "Titlu";
$l['short_description'] = "Scurtă Descriere";
$l['task_file'] = "Fișier Automatizare";
$l['task_file_desc'] = "Selectează fișierul pe care această automatizare trebuie să îl ruleze.";
$l['time_minutes'] = "Timp: Minute";
$l['time_minutes_desc'] = "Adaugă o listă cu elementele separate de virgulă pentru minutele (0-59) în care această automatizare ar trebui să ruleze. Completează cu '*' dacă această automatizare ar trebui să ruleze la fiecare minut.";
$l['time_hours'] = "Timp: Ore";
$l['time_hours_desc'] = "Adaugă o listă cu elementele separate de virgulă pentru orele (0-23) în care această automatizare ar trebui să ruleze. Completează cu '*' dacă această automatizare ar trebui să ruleze la fiecare oră.";
$l['time_days_of_month'] = "Timp: Zilele Lunii";
$l['time_days_of_month_desc'] = "Adaugă o listă cu elementele separate de virgulă pentru zilele lunii (1-31) în care această automatizare ar trebui să ruleze. Completează cu '*' dacă această automatizare ar trebui să ruleze în fiecare lună.";
$l['every_weekday'] = "În fiecare zi";
$l['sunday'] = "Duminică";
$l['monday'] = "Luni";
$l['tuesday'] = "Marți";
$l['wednesday'] = "Miercuri";
$l['thursday'] = "Joi";
$l['friday'] = "Vineri";
$l['saturday'] = "Sâmbătă";
$l['time_weekdays'] = "Timp: Zilele săptămânii";
$l['time_weekdays_desc'] = "Selectează în ce zile din săptămână ar trebui să ruleze această automatizare. Apăsând CTRL poți selecta mai multe zile. Selectează 'În fiecare zi' dacă dorești ca automatizarea să ruleze fie zilnic, fie în fiecare zi selectată anterior.";
$l['every_month'] = "În fiecare lună";
$l['time_months'] = "Timp: Luni";
$l['time_months_desc'] = "Selectează în ce lună ar trebui să ruleze această automatizare. Apăsând CTRL poți selecta mai multe luni. Selectează 'În fiecare lună' dacă dorești ca automatizarea să ruleze fie lunar, fie în fiecare lună selectată anterior.";
$l['enabled'] = "Automatizare activă?";
$l['enable_logging'] = "Adaugă însemnări la Jurnal?";
$l['save_task'] = "Salvează Automatizare";
$l['task'] = "Automatizare";
$l['date'] = "Dată";
$l['data'] = "Detalii";
$l['no_task_logs'] = "Momentan nu există însemnări în jurnal pentru niciuna dintre automatizări.";
$l['next_run'] = "Următoarea rulare";
$l['run_task_now'] = "Rulează această automatizare acum";
$l['run_task'] = "Rulează Automatizare";
$l['disable_task'] = "Dezactivează Automatizare";
$l['enable_task'] = "Activează Automatizare";
$l['delete_task'] = "Șterge Automatizare";
$l['alt_enabled'] = "Activată";
$l['alt_disabled'] = "Dezactivată";

$l['error_invalid_task'] = "Automatizarea specificată  nu există.";
$l['error_missing_title'] = "Nu ai completat un titlu pentru această automatizare.";
$l['error_missing_description'] = "Nu ai completat o descriere pentru această automatizare.";
$l['error_invalid_task_file'] = "Fișierul selctat pentru automatizare nu există.";
$l['error_invalid_minute'] = "Minutul selectat este nevalid.";
$l['error_invalid_hour'] = "Ora selectată este nevalidă.";
$l['error_invalid_day'] = "Ziua selectată este nevalidă.";
$l['error_invalid_weekday'] = "Ziua săptămânii selectată este nevalidă.";
$l['error_invalid_month'] = "Ziua selectată este nevalidă.";

$l['success_task_created'] = "Automatizarea a fost adăugată.";
$l['success_task_updated'] = "Automatizarea selectată a fost actualizată.";
$l['success_task_deleted'] = "Automatizarea selectată a fost ștearsă.";
$l['success_task_enabled'] = "Automatizarea selectată a fost activată.";
$l['success_task_disabled'] = "Automatizarea selectată a fost dezactivată.";
$l['success_task_run'] = "Automatizarea selectată a rulat.";

$l['confirm_task_deletion'] = "Ești sigur că dorești să ștergi automatizarea selectată?";
$l['confirm_task_enable'] = "<strong>Atenție:</strong> Ești pe cale să activezi o automatizare care ar trebui rulată doar via CRON (Verifică <a href=\"http://wiki.mybb.com/\" target=\"_blank\">MyBB Wiki</a> pentru informații suplimentare). Continui?";
$l['no_tasks'] = "Nu există nicio automatizare configurată momentan.";
?>