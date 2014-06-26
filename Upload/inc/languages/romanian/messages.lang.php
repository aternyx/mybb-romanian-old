<?php
/**
 * MyBB 1.6 Romanian Language Pack
 * Copyright 2011 Kaeden, All Rights Reserved
 * 
 * $Id: messages.lang.php 5488 2011-12-24 Kaeden $
 */

$l['click_no_wait'] = "Apasă aici dacă nu dorești să mai aștepți.";
$l['redirect_return_forum'] = "<br /><br />Alternativ, <a href=\"{1}\">te poți întoarce la forum</a>.";
$l['redirect_emailsent'] = "Mesajul tău E-mail a fost trimis.";
$l['redirect_loggedin'] = "Te-ai autentificat cu succes.<br /> Vei fi redirecționat la pagina anterioară.";

$l['error_invalidpworusername'] = "Ai introdus o combinație eronată de nume utilizator/parolă. <br /><br /> Dacă ai uitat parola, <a href=\"member.php?action=lostpw\">obține una nouă</a>.";
$l['error_invalidpworusername1'] = "Ai introdus o combinație eronată de e-mail/parolă. <br /><br /> Dacă ai uitat parola, <a href=\"member.php?action=lostpw\">obține una nouă</a>.";
$l['error_invalidpworusername2'] = "Ai introdus o combinație eronată de nume utilizator/parolă sau e-mail/parolă. <br /><br /> Dacă ai uitat parola, <a href=\"member.php?action=lostpw\">obține una nouă</a>.";

$l['error_incompletefields'] = "Se pare că ai lăsat unul sau mai multe câmpuri obligatorii necompletate. Te rugăm să revii asupra lor și să le completezi corespunzător."; 
$l['error_alreadyuploaded'] = "Acest mesaj conține deja un fișier atașat cu acest nume. Te rugăm să redenumești fișierul și șă îl încarci din nou. Alternativ, poți folosi opțiunea \"Actualizare Fișiere Atașate\".";
$l['error_alreadyuploaded_perm'] = "Acest mesaj conține deja un fișier atașat cu acest nume. Te rugăm fie să înlături fișierul curent, fie să redenumești local fișierul apoi să îl încarci din nou.";
$l['error_nomessage'] = "Ne pare rău, însă nu ai introdus un mesaj valid. Te rugăm să te întorci și să completezi unul.";
$l['error_invalidemail'] = "Nu ai completat o adresă de E-mail validă.";
$l['error_nomember'] = "Utilizatorul specificat fie nu există, fie nu este valid.";
$l['error_maxposts'] = "Ne pare rău, însă ai depășit limita de mesaje pe care le poți trimite zilnic.  Te rugăm să astepți până mâine sau să contactezi un Administrator.<br /><br />Numărul maxim de mesaje pe care îl poți trimite zilnic este {1}";
$l['error_nohostname'] = "Nu a putut fi găsită nicio gazdă/niciun ISP pentru Adresa IP furnizată.";
$l['error_invalidthread'] = "Subiectul de discuție specificat nu există.";
$l['error_invalidpost'] = "Răspunsul precizat nu există.";
$l['error_invalidannouncement'] = "Anunțul specificat nu există.";
$l['error_invalidattachment'] = "Fișierul atașat specificat nu există";
$l['error_invalidforum'] = "Forum nevalid";
$l['error_closedinvalidforum'] = "Nu poți trimite mesaje în acest forum pentru că fie este închis, fie este un forum de redirecționare, fie este o categorie.";
$l['error_attachtype'] = "Tipul de fișier atașat nu este permis. Te rugăm să înlături fișierul sau să alegi un alt tip de fișier.";
$l['error_attachsize'] = "Fișierul atașat este prea mare. Mărimea maximă admisă pentru acest tip de fișier: {1} KB.";
$l['error_uploadsize'] = "Mărimea fișierului încărcat este prea mare.";
$l['error_uploadfailed'] = "Încărcarea fișierului a eșuat. Te rugăm să alegi un fișier valid apoi să reîncerci. ";
$l['error_uploadfailed_detail'] = "Detaliile erorii: ";
$l['error_uploadfailed_php1'] = "Mesaj PHP: Fișierul încărcat a depășit directiva upload_max_filesize din php.ini. Te rugăm să contactezi Administratorul pentru a remedia această eroare.";
$l['error_uploadfailed_php2'] = "Documentul încărcat depășește limita de mărime admisă.";
$l['error_uploadfailed_php3'] = "Documentul a fost parțial încărcat.";
$l['error_uploadfailed_php4'] = "Nu a fost încărcat niciun fișier.";
$l['error_uploadfailed_php6'] = "Mesaj PHP: Lipsește un director temporar.  Te rugăm să contactezi Administratorul pentru a remedia această eroare.";
$l['error_uploadfailed_php7'] = "Mesaj PHP: Scrierea fișierului pe disc a eșuat. Te rugăm să contactezi Administratorul pentru a remedia această eroare.";
$l['error_uploadfailed_phpx'] = "PHP a returnat codul de eroare: {1}. Te rugăm să contactezi Administratorul pentru a remedia această eroare.";
$l['error_uploadfailed_nothingtomove'] = "Un document invalid a fost specificat, prin urmare fișierul încărcat nu a putut fi mutat la destinție.";
$l['error_uploadfailed_movefailed'] = "A fost o problemă cu mutarea la destinație a documentului.";
$l['error_uploadfailed_lost'] = "Fișierul atașat nu a fost găsit pe server.";
$l['error_emailmismatch'] = "Adresele de E-mail completate nu corespund. Te rugăm să reîncerci.";
$l['error_nopassword'] = "Nu ai introdus o parolă validă.";
$l['error_usernametaken'] = "Numele de utilizator ales este deja înregistrat. Dacă ai deja un cont înregistrat, te poți <a href=\"member.php?action=login\">autentifica</a>.";
$l['error_nousername'] = "Nu ai introdus un nume de utilizator.";
$l['error_invalidusername'] = "Numele de utilizator introdus pare să fie incorect.";
$l['error_invalidpassword'] = "Parola introdusă este incorectă. Dacă ți-ai uitat parola, click <a href=\"member.php?action=lostpw\">aici</a>. Altfel, reîncearcă.";
$l['error_postflooding'] = "Ne pare rău, însă nu putem să îți procesăm mesajul. Administratorul a specificat că poți trimite un mesaj odată la {1} secunde.";
$l['error_nopermission_guest_1'] = "Fie nu ești autentificat, fie nu ai permisiunea de a vedea această pagină. Această notificare poate fi cauzată de unul dintre următoarele motive:";
$l['error_nopermission_guest_2'] = "Nu ești autentificat sau înregistrat. Te rugăm să utilizezi formularul inferior situat pentru a intra în cont.";
$l['error_nopermission_guest_3'] = "Nu ai permisiunea de a accesa această pagină. Încerci să accesezi pagini administrative sau resurse pentru care nu ești autorizat? Verifică în regulamentul forumului dacă ai dreptul să execuți această acțiune.";
$l['error_nopermission_guest_4'] = "Este posibil ca acest cont să fi fost suspendat de către un administrator, fie încă trebuie să fie activat.";
$l['error_nopermission_guest_5'] = "Ai accesat această pagină în mod direct, fără să folosești formularele sau legăturile disponibile.";
$l['login'] = "Autentificare";
$l['need_reg'] = "Cont nou?";
$l['forgot_password'] = "Ai uitat parola?";
$l['error_nopermission_user_1'] = "Nu ai permisiunea să accesezi această pagină. Această notificare poate fi cauzată de unul dintre următoarele motive:";
$l['error_nopermission_user_ajax'] = "Nu ai permisiunea să accesezi această pagină.";
$l['error_nopermission_user_2'] = "Contul tău a fost suspendat, fie accesul tău la această resursă a fost blocat.";
$l['error_nopermission_user_3'] = "Nu ai permisiunea de a accesa această pagină. Încerci să accesezi pagini administrative sau resurse pentru care nu ești autorizat? Verifică în regulamentul forumului dacă ai dreptul să execuți această acțiune.";
$l['error_nopermission_user_4'] = "Contul tău încă așteaptă să fie activat sau validat.";
$l['error_nopermission_user_5'] = "Ai accesat această pagină în mod direct, fără să folosești formularele sau legăturile disponibile.";
$l['error_nopermission_user_resendactivation'] = "Retrimite codul de activare";
$l['error_nopermission_user_username'] = "Momentan ești autentificat drept: '{1}'";
$l['logged_in_user'] = "Utilizator autentificat";
$l['error_too_many_images'] = "Prea multe imagini.";
$l['error_too_many_images2'] = "Ne pare rău, însă nu putem procesa mesajul tău întrucât conține prea multe imagini. Te rugăm să mai reduci din numărul acestora și să reîncerci.";
$l['error_too_many_images3'] = "<b>Notă:</b> Numărul maxim de imagini admise într-un mesaj este";
$l['error_attach_file'] = "Eroare la atașarea fișierului";
$l['please_correct_errors'] = "Te rugăm să remediezi următoarele erori înainte de a continua:";
$l['error_reachedattachquota'] = "Ne pare rău, însă nu mai poți încărca acest document întrucât ai atins limita maximă admisă: {1}";
$l['error_invaliduser'] = "Utilizatorul specificat este invalid sau nu există.";
$l['error_invalidaction'] = "Acțiune invalidă";
$l['error_messagelength'] = "Ne pare rău, însă mesajul tău este prea lung și nu poate fi trimis. Te rugăm să îi micșorezi dimensiunile.";
$l['error_message_too_short'] = "Ne pare rău, însă mesajul tău a fost prea scurt.";
$l['failed_login_wait'] = "Ai eșuat să te autentifici în numărul maxim de încercări permis. Acum trebuie să aștepți {1}h {2}m {3}s înainte de a reîncerca.";
$l['failed_login_again'] = "<br />Mai ai încă <strong>{1}</strong> încercări de autentificare rămase.";
$l['error_max_emails_day'] = "Nu mai poți utiliza fie opțiunea 'Trimite subiectul unui prieten', fie 'Trimite E-mail' pentru că deja ai atins limita de {1} mesaje trimise pentru 24 de ore.";
		
$l['emailsubject_lostpw'] = "Parolă Schimbată pe {1}";
$l['emailsubject_passwordreset'] = "Parolă nouă pe {1}";
$l['emailsubject_subscription'] = "Răspuns nou la {1}";
$l['emailsubject_randompassword'] = "Parola ta pentru {1}";
$l['emailsubject_activateaccount'] = "Activarea Contului pe {1}";
$l['emailsubject_forumsubscription'] = "Subiect nou în {1}";
$l['emailsubject_reportpost'] = "Mesaj semnalat pe {1}";
$l['emailsubject_reachedpmquota'] = "Limita mesajelor private atinsă pe {1}";
$l['emailsubject_changeemail'] = "Schimbare E-mail pe {1}";
$l['emailsubject_newpm'] = "Mesaj Privat necitit pe {1}";
$l['emailsubject_sendtofriend'] = "Pagină de web interesantă pe {1}";
$l['emailbit_viewthread'] = "... (vizitează subiectul pentru a citi mai mult..)";

$l['email_lostpw'] = "{1},

Pentru a completa procesul de resetare al parolei pe {2}, va trebui să accesezi urmatoarea adresă cu navigatorul tău de internet.

{3}/member.php?action=resetpassword&uid={4}&code={5}

Dacă adresa de mai sus nu funcționează, mergi la

{3}/member.php?action=resetpassword

Va trebui să furnizezi următoarele date:
Nume utilizator: {1}
Cod Activare: {5}

Mulțumim,
Echipa Moderatoare de pe {2}";

$l['email_lostpw1'] = "{1},

Pentru a completa procesul de resetare al parolei pe {2}, va trebui să accesezi urmatoarea adresă cu navigatorul tău de internet.

{3}/member.php?action=resetpassword&uid={4}&code={5}

Dacă adresa de mai sus nu funcționează, mergi la

{3}/member.php?action=resetpassword

Va trebui să furnizezi următoarele date:
Adresa e-mail
Cod Activare: {5}

Mulțumim,
Echipa Moderatoare de pe {2}";
$l['email_lostpw2'] = "{1},

Pentru a completa procesul de resetare al parolei pe {2}, va trebui să accesezi urmatoarea adresă cu navigatorul tău de internet.

{3}/member.php?action=resetpassword&uid={4}&code={5}

Dacă adresa de mai sus nu funcționează, mergi la

{3}/member.php?action=resetpassword

Va trebui să furnizezi următoarele date:
Nume utilizator: {1} sau Adresa e-mail
Cod Activare: {5}

Mulțumim,
Echipa Moderatoare de pe {2}";


$l['email_reportpost'] = "{1} de pe {2} a semnalat acest mesaj:

{3}
{4}/{5}

Motivul exprimat de utilizator pentru raportare:
{7}

Acest mesaj a fost transmis tuturor moderatorilor forumului, fie administratorilor sau super moderatorilor dacă nu există moderatori.

Te rugăm să verifici acest mesaj cât mai curând cu putință.";

$l['email_passwordreset'] = "{1},

Parola ta pe {2} a fost schimbată.

Noua parolă: {3}

Vei avea nevoie de această parolă pentru a te putea autentifica. Este recomandabil să o schimbi folosind Panoul Utilizatorului.

Mulțumim,
Echipa Moderatoare de pe {2}";

$l['email_randompassword'] = "{1},

Mulțumim pentru înregistrarea pe {2}. Dedesubt se regăsesc numele tău de utilizator și o parolă generată automat. Pentru a te autentifica pe {2}, ai nevoie de aceste date.

Nume utilizator: {3}
Parolă: {4}

Este recomandabil ca odată autentificat, să schimbi această parolă din Panoul Utilizatorului, opțiunea Schimbă Parola.

Mulțumim,
Echipa Moderatoare de pe {2}";

$l['email_randompassword1'] = "{1},

Mulțumim pentru înregistrarea pe {2}. Dedesubt se regăsesc numele tău de utilizator și o parolă generată automat. Pentru a te autentifica pe {2}, ai nevoie de aceste date.

Adresa e-mail
Parolă: {4}

Este recomandabil ca odată autentificat, să schimbi această parolă din Panoul Utilizatorului, opțiunea Schimbă Parola.

Mulțumim,
Echipa Moderatoare de pe {2}";

$l['email_randompassword2'] = "{1},

Mulțumim pentru înregistrarea pe {2}. Dedesubt se regăsesc numele tău de utilizator și o parolă generată automat. Pentru a te autentifica pe {2}, ai nevoie de aceste date.

Nume utilizator: {3} sau Adresa e-mail
Parolă: {4}

Este recomandabil ca odată autentificat, să schimbi această parolă din Panoul Utilizatorului, opțiunea Schimbă Parola.

Mulțumim,
Echipa Moderatoare de pe {2}";

$l['email_sendtofriend'] = "Salut,

{1} de pe {2} s-a gândit că ai putea fi interesat să verifici următoarea pagină:

{3}

{1} a inclus și acest mesaj:
------------------------------------------
{4}
------------------------------------------

Mulțumim,
Echipa Moderatoare de pe {2}
";

$l['email_forumsubscription'] = "{1},

{2} tocmai a deschis un nou subiect de discuție în {3}. Acesta este un forum la care te-ai abonat pe data de {4}.

Titlul subiectului de discuție este {5}

Iată un fragment din acest mesaj:
--
{6}
--

Pentru a vedea subiectul, mergi la următoarea adresă:
{7}/{8}

Este posibil să existe mai multe subiecte noi și replici în afară de acesta, însă nu vei mai fi notificat până nu vei vizita din nou forumul.

Mulțumim,
Echipa Moderatoare de pe {4}

------------------------------------------
Informații de dezabonare:

Dacă nu dorești să mai fi notificat cu privire la activitatea în acest forum, vizitează următoarea adresă:
{7}/usercp2.php?action=removesubscription&type=forum&fid={9}&my_post_key={10}

------------------------------------------";

$l['email_activateaccount'] = "{1},

Pentru a încheia procesul de înregistrare de pe {2}, va trebui să mergi la următoarea adresă.

{3}/member.php?action=activate&uid={4}&code={5}

Dacă legătura de mai sus nu funcționează, folosește

{3}/member.php?action=activate

Vei avea nevoie de urmatoarele date:
Nume utilizator: {1}
Cod Activare: {5}

Mulțumim,
Echipa Moderatoare de pe {2}";

$l['email_activateaccount1'] = "{1},

Pentru a încheia procesul de înregistrare de pe {2}, va trebui să mergi la următoarea adresă.

{3}/member.php?action=activate&uid={4}&code={5}

Dacă legătura de mai sus nu funcționează, folosește

{3}/member.php?action=activate

Vei avea nevoie de urmatoarele date:
Adresa e-mail
Cod Activare: {5}

Mulțumim,
Echipa Moderatoare de pe {2}";

$l['email_activateaccount2'] = "{1},

Pentru a încheia procesul de înregistrare de pe {2}, va trebui să mergi la următoarea adresă.

{3}/member.php?action=activate&uid={4}&code={5}

Dacă legătura de mai sus nu funcționează, folosește

{3}/member.php?action=activate

Vei avea nevoie de urmatoarele date:
Nume utilizator: {1} sau Adresa e-mail
Cod Activare: {5}

Mulțumim,
Echipa Moderatoare de pe {2}";

$l['email_subscription'] = "{1},

{2} tocmai a răspuns într-unul dintre subiectele la care ești abonat pe {3}. Titlul acestui subiect este {4}.

Iată un fragment din acest mesaj:
------------------------------------------
{5}
------------------------------------------

Pentru a vedea subiectul, accesează următoarea adresă:
{6}/{7}

Este posibil să existe mai multe subiecte noi și replici în afară de aceasta, însă nu vei mai fi notificat până nu vei vizita din nou forumul.

Mulțumim,
Echipa Moderatoare de pe {3}

------------------------------------------
Informații de dezabonare:

Dacă nu dorești să mai fi notificat cu privire la activitatea în acest subiect, vizitează următoarea adresă:
{6}/usercp2.php?action=removesubscription&tid={8}&key={9}&my_post_key={10}

------------------------------------------";
$l['email_reachedpmquota'] = "{1},

Acesta este un mesaj automat de notificare de pe {2} care te informează că mesageria ta a atins limita maximă de mesaje admise.

Unul sau mai mulți utilizatori au încercat să te contacteze fără succes din acest motiv.

Te rugăm să ștergi mesajele inutile pe care nu trebuie să uiți să le cureți și din 'Coș'.

Mulțumim,
Echipa Moderatoare de pe {2}
{3}";
$l['email_changeemail'] = "{1},

Am primit o cerere pe {2} pentru a schimba adresa ta de E-mail (detalii mai jos).

Vechea Adresă de E-mail: {3}
Noua   Adresă de E-mail: {4}

Dacă aceste schimbări sunt corecte, te rugăm să le confirmi pe {2} navigând la următoarea adresă.

{5}/member.php?action=activate&uid={8}&code={6}

Dacă adresa de mai sus nu funcționează, folosește

{5}/member.php?action=activate

Vei avea nevoie de următoarele date:
Nume utilizator: {7}
Cod Activare: {6}

Dacă nu vei accesa această adresă, E-mailul tău nu va fi modificat.

Mulțumim,
Echipa Moderatoare de pe {2}
{5}";

$l['email_newpm'] = "{1},
		
Ai primit un nou mesaj privat pe {3} de la {2}. Pentru a citi acest mesaj, urmează adresa de mai jos:

{4}/private.php

Te rugăm să reții că  nu vei mai fi notificat de existența altor mesaje noi până nu vizitezi {3}.

Poți dezactiva aceste notificări din Panoul de Utilizator:

{4}/usercp.php?action=options

Mulțumim,
Echipa Moderatoare de pe {3}
{4}";

$l['email_emailuser'] = "{1},

{2} de pe {3} ți-a trimis următorul mesaj:
------------------------------------------
{5}
------------------------------------------

Mulțumim,
Echipa Moderatoare de pe {3}
{4}

------------------------------------------
Nu dorești să mai fi contactat prin E-mail de ceilalți utilizatori?

Te rugăm să vizitezi Panoul de Control al Utilizatorului și să activezi opțiunea 'Ascunde-mi adresa E-mail față de ceilalți utilizatori':
{4}/usercp.php?action=options

------------------------------------------";
?>