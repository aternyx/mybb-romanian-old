<?php
/**
 * MyBB 1.6 Romanian Language Pack
 * Copyright 2011 Kaeden, All Rights Reserved
 * 
 * $Id: tools_cache.lang.php 5297 2011-12-29 Kaeden $
 */

$l['cache'] = "Cache:";
$l['cache_manager'] = "Manager Cache";
$l['cache_manager_description'] = "Aici poți administra seturile de date cache folosite ca o metodă pentru eficientizarea MyBB. Reconstruirea unui set cache va prelua toate datele necesare pentru a-l crea și resincroniza. Reîncărcarea unui set cache va reîncărca setul de date selectat în utilitarul cache preferat (disc, eaccelerator, memcache, etc.). Această ultimă opțiune este utilă la migrarea de la baza de date sau sistemul de fișiere către xcache, eaccelerator sau oricare alt utilitar cache.";
$l['rebuild_cache'] = "Reconstruire Cache";
$l['reload_cache'] = "Reîncărcare Cache";

$l['error_cannot_rebuild'] = "Acest set cache nu poate fi reconstruit.";
$l['error_empty_cache'] = "Acest set cache este gol.";
$l['error_incorrect_cache'] = "Set cache incorect specificat.";
$l['error_no_cache_specified'] = "Nu ai specificat un set cache pentru vizualizare.";

$l['success_cache_rebuilt'] = "Setul cache a fost reconstruit cu succes.";
$l['success_cache_reloaded'] = "Setul cache a fost reîncărcat cu succes.";

?>