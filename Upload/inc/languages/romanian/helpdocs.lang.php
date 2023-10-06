<?php
/**
 * MyBB 1.8 Romanian Language Pack
 * Copyright 2023 mgXzyy; All Rights Reserved
 * 
 * $Id: helpdocs.lang.php 5297 2011-12-24 Kaeden $
 */

 // Pentru a folosi traducerea de mai jos, renunță la caracterele pentru comentariu /* */
 
 /*
// Help Document 1
$l['d1_name'] = "Înregistrarea utilizatorului";
$l['d1_desc'] = "Privilegiile utilizatorului înregistrat.";
$l['d1_document'] = "Unele secțiuni ale acestui forum pot fi folosite doar dacă ești înregistrat și autentificat. Înregistrarea este gratuită și durează doar câteva minute.
<br /><br />Ești încurajat să te înregistrzi; odată înregistrat vei putea să trimiți mesaje, să îți setezi propriile preferințe și să administrezi profilul tău individual.
<br /><br />În general, opțiunile care necesită înregistrarea sunt abonamentele, schimbarea temelor vizuale ale forumului, accesul la Carnetul de Notițe și trimiterea de mesaje tip E-mail altor membri înregistrați.";

// Help Document 2
$l['d2_name'] = "Actualizarea Profilului";
$l['d2_desc'] = "Modificarea datelor curente.";
$l['d2_document'] = "La un moment dat, pe parcursul utilizării acestui forum, s-ar putea să decizi că anumite informații, cum ar fi datele de contact pentru sistemele de mesagerie instantă, parola sau adresa de E-mail setată contului trebuie actualizate. Oricare dintre acestea pot fi schimbate din Panoul de Control al Utilizatorului. Pentru a avea acces la acest panou, click-dreapta pe opțiunea din partea dreaptă-sus situată pe aproape oricare pagină - \"Panou Utilizator\". De aici, alege \"Modificare Profil\" pentru a schimba oricare dintre preferințe. Pentru ca aceste schimbări să aibă efect va trebui să apeși butonul de confirmare al formularului din subsolul paginii.";

// Help Document 3
$l['d3_name'] = "Utilizarea cookies pe platforma MyBB";
$l['d3_desc'] = "MyBB folosește cookies pentru a salva anumite date legate de contul tău.";
$l['d3_document'] = "MyBB se folosește de cookies pentru a salva datele tale de autentificare, în cazul în care ești un utilizator înregistrat sau data ultimei tale vizite, în cazul în care ești doar un vizitator.
<br /><br />Cookies reprezintă mici fișiere de tip text stocate pe calculatorul (terminalul) de la care accesezi platforma; cookies setate de acest site pot fi folosite doar de acest forum si nu reprezintă nicio amenințare la adresa siguranței tale.
<br /><br />De asemenea, acestea urmăresc și rețin subiectele de discuție pe care le-ai citit, cât și data la care au fost citite ultima oară.
<br /><br />Pentru a înlătura toate cookies setate de acest forum, apasă <a href=\"misc.php?action=clearcookies&amp;key={1}\">aici</a>.";

// Help Document 4
$l['d4_name'] = "Autentificarea și Ieșirea din Cont";
$l['d4_desc'] = "Cum să te autentifici și cum să părăsești sesiunea de lucru.";
$l['d4_document'] = "Când te autentifici, forumul setează automat pe terminalul tău un fișier de tip cookie pentru a putea naviga forumul fără a fi  nevoit să intri în cont la fiecare reîncărcare de pagină. La ieșirea din cont (părăsirea sesiunii de lucru), acest fișier este șters pentru ca nimeni să nu poată utiliza forumul cu identitatea ta.
<br /><br />Pentru autentificare, apasă pe opțiunea Autentificare din partea de sus a paginii. La Ieșirea din cont, opțiunea de părăsire a sesiunii de lucru se află în aceeași zonă. Dacă nu poți folosi această facilitate, curățarea tuturor fișierelor cookie de pe terminalul tău are același efect.";

// Help Document 5
$l['d5_name'] = "Lansarea unui nou subiect de discuție";
$l['d5_desc'] = "Publicarea unui subiect de discuție în forum.";
$l['d5_document'] = "Când răsfoiești un forum al cărui tematică te interesează și dorești să lansezi o nouă discuție, folosește opțiunea \"Subiect Nou\" din partea dreaptă, situată atât la începutul cât și la sfârșitul listei de subiecte. Nu întotdeauna vei putea trimite mesaje în oricare forum, fie pentru că acel forum este rezervat pentru echipa moderatoare sau alte grupuri privilegiate, fie pentru că forumul respectiv se constituie într-o arhivă de subiecte.";

// Help Document 6
$l['d6_name'] = "Trimiterea unui răspuns";
$l['d6_desc'] = "Trimiterea unui răspuns într-un subiect de discuție.";
$l['d6_document'] = "Pe parcursul navigării forumului, vei întâlni subiecte de discuție pe marginea cărora vei dori să dezbați alături de ceilalți utilizatori. Pentru a trimite un răspuns, folosește opțiunea \"Răspuns Nou\" din partea superioară sau inferioară dreaptă. Te rugăm să iei în considerație că administratorul forumului este posibil să seteze permisiuni specifice pentru trimiterea de mesaje intr-un forum, așa că nu va fi întotdeauna posibil să lași o replică.
<br /><br />De asemenea, moderatorii forumului pot închide anumite subiecte, aceasta însemnând că utilizatorii nu vor mai putea adăuga mesaje noi. Acestea pot fi redeschise doar de Moderatori sau Administratori.";

// Help Document 7
$l['d7_name'] = "MyCode";
$l['d7_desc'] = "Instrucțiuni despre MyCode pentru formatarea conținutului trimis.";
$l['d7_document'] = "Poți utiliza MyCode, o versiune simplificată a codului HTML, în mesajele tale pentru a crea anumite efecte.
<p><br />[b]Acesta este un text îngroșat.[/b]<br />&nbsp;&nbsp;&nbsp;<b>Acesta este un text îngroșat.</b>
<p>[i]Acesta este un text înclinat.[/i]<br />&nbsp;&nbsp;&nbsp;<i>Acesta este un text înclinat.</i>
<p>[u]Acesta este un text subliniat.[/u]<br />&nbsp;&nbsp;&nbsp;<u>Acesta este un text subliniat.</u>
<p>[s]Acesta este un text tăiat.[/s]<br />&nbsp;&nbsp;&nbsp;<strike>Acesta este un text tăiat.</strike>
<p><br />[url]http://www.exemplu.com/[/url]<br />&nbsp;&nbsp;&nbsp;<a href=\"http://www.example.com/\">http://www.examplu.com/</a>
<p>[url=http://www.exemplu.com/]Exemplu.com[/url]<br />&nbsp;&nbsp;&nbsp;<a href=\"http://www.exemplu.com/\">Exemplu.com</a>
<p>[email]exemplu@exemplu.com[/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:exemplu@example.com\">exemplu@exemplu.com</a>
<p>[email=exemplu@exemplu.com]Trimite-mi un E-mail![/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:exemplu@exemplu.com\">Trimite-mi un E-mail!</a>
<p>[email=exemplu@exemplu.com?subject=spam]E-mail cu subiect[/email]<br />&nbsp;&nbsp;&nbsp;<a href=\"mailto:exemplu@exemplu.com?subject=spam\">E-mail cu subiect.</a>
<p><br />[quote]Textul citat apare aici[/quote]<br />&nbsp;&nbsp;&nbsp;<quote>Textul citat apare aici</quote>
<p>[code]Cod de programare[/code]<br />&nbsp;&nbsp;&nbsp;<code>Cod de programare</code>
<p><br />[img]http://www.php.net/images/php.gif[/img]<br />&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\">
<p>[img=50x50]http://www.php.net/images/php.gif[/img]<br />&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\" width=\"50\" height=\"50\">
<p><br />[color=red]Text roșu[/color]<br />&nbsp;&nbsp;&nbsp;<font color=\"red\">Text roșu</font>
<p>[size=3]Text mărimea 3[/size]<br />&nbsp;&nbsp;&nbsp;<font size=\"3\">Text mărimea 3</font>
<p>[font=Tahoma]Acest font este Tahoma[/font]<br />&nbsp;&nbsp;&nbsp;<font face=\"Tahoma\">Acest font este Tahoma</font>
<p><br />[align=center]Text centrat[/align]<div align=\"center\">Text centrat</div>
<p>[align=right]Text aliniat la dreapta[/align]<div align=\"right\">Text aliniat la dreapta</div>
<p><br />[list]<br />[*]Punctul #1<br />[*]Punctul #2<br />[*]Punctul #3<br />[/list]<br /><ul><li>Punctul #1</li><li>Punctul #2</li><li>Punctul #3</li>
</ul>
<p>Poți sorta o listă numeric folosind [list=1] sau alfabetic folosind [list=a].</p>";
*/
?>