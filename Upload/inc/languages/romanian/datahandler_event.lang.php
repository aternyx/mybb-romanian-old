<?php
/**
 * MyBB 1.6 Romanian Language Pack
 * Copyright 2011 Kaeden, All Rights Reserved
 *
 * $Id: datahandler_event.lang.php 5297 2011-12-24 Kaeden $
 */

$l['eventdata_missing_name'] = 'Numele acestui eveniment lipsește. Te rugăm să completezi numele acestuia.';
$l['eventdata_missing_description'] = 'Descrierea acestui eveniment lipsește. Te rugăm să completezi descrierea acestuia.';

$l['eventdata_invalid_start_date'] = 'Data de început introdusă pentru eveniment este nevalidă. Trebuie să te asiguri că ai specificat ziua, luna și anul. De asemenea, ziua aleasă trebuie să fie cuprinsă în luna selectată.';
$l['eventdata_invalid_start_year'] = "Evenimentele pot fi planificate doar cu 5 ani în avans. Te rugăm să alegi o dată de început rezonabilă din listă.";
$l['eventdata_invalid_start_month'] = 'Luna de început aleasă nu este validă. Te rugăm să alegi o lună validă.';

$l['eventdata_invalid_end_date'] = 'Data de încheiere introdusă pentru eveniment este nevalidă. Trebuie să te asiguri că ai specificat ziua, luna și anul. De asemenea, ziua aleasă trebuie să fie cuprinsă în luna selectată.';
$l['eventdata_invalid_end_year'] = "Evenimentele pot fi planificate doar cu 5 ani în avans. Te rugăm să alegi o dată de încheiere rezonabilă din listă.";
$l['eventdata_invalid_end_month'] = 'Luna de încheiere aleasă nu este validă. Te rugăm să alegi o lună validă.';
$l['eventdata_invalid_end_day'] = 'Ziua de încheiere aleasă nu este validă. Probabil, ziua selectată depășește numărul de zile din această lună.';

$l['eventdata_cant_specify_one_time'] = "Trebuie specificate atât o dată de început, cât și una de încheiere.";
$l['eventdata_start_time_invalid'] = "Data de început precizată nu este validă. Exemple corecte: 12am, 12:01am, 00:01.";
$l['eventdata_end_time_invalid'] = "Data de încheiere precizată nu este validă. Exemple corecte: 12am, 12:01am, 00:01.";
$l['eventdata_invalid_timezone'] = "Fusul orar selectat pentru eveniment nu este valid.";
$l['eventdata_end_in_past'] = "Data sau ora de încheiere pentru eveniment precede data sau ora de început.";

$l['eventdata_only_ranged_events_repeat'] = "Doar evenimentele planificate (cu dată de început si dată de încheiere) se pot repeta.";
$l['eventdata_invalid_repeat_day_interval'] = "Ai introdus un interval de repetare nevalid pentru zile.";
$l['eventdata_invalid_repeat_week_interval'] = "Ai introdus un interval de repetare nevalid pentru săptămâni.";
$l['eventdata_invalid_repeat_weekly_days'] = "Nu ai selectat nicio zi din săptămână în care acest eveniment se poate repeta.";
$l['eventdata_invalid_repeat_month_interval'] = "Ai introdus un interval de repetare nevalid pentru luni.";
$l['eventdata_invalid_repeat_year_interval'] = "Ai introdus un interval de repetare nevalid pentru ani.";
$l['eventdata_event_wont_occur'] = "Utilizând date/ore de început și de sfârșit împreună cu setările de recurență, acest eveniment nu se va putea repeta.";

$l['eventdata_no_permission_private_event'] = "Nu ai permisiunea să publici evenimente private.";
?>