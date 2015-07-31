<?php
/**
 * Serbian language file
 *
 * @author Иван Петровић petrovicivan@ubuntusrbija.org
 */
$lang['menu']                  = 'Подешавања';
$lang['error']                 = 'Подешавања нису прихваћена јер постоји вредност са грешком, проверите измене које сте извршили и поновите слање.<br />Вредност(и) са грешком су приказане са црвеним оквиром.';
$lang['updated']               = 'Измене су сачуване.';
$lang['nochoice']              = '(не постоји други избор)';
$lang['locked']                = 'Датотека са подешавањима не може да се ажурира, ако вам то није намера проверите да ли су дозволе исправно постављене.';
$lang['_configuration_manager'] = 'Управљач подешавањима';
$lang['_header_dokuwiki']      = 'Подешавања Dokuwiki-ја';
$lang['_header_plugin']        = 'Подешавања за додатке';
$lang['_header_template']      = 'Подешавања за шаблоне';
$lang['_header_undefined']     = 'Неразврстана подешавања';
$lang['_basic']                = 'Основна подешавања';
$lang['_display']              = 'Подешавања приказа';
$lang['_authentication']       = 'Подешавања провере';
$lang['_anti_spam']            = 'Подешавања за борбу против спама';
$lang['_editing']              = 'Подешавања измена';
$lang['_links']                = 'Подешавања линковања';
$lang['_media']                = 'Подешавања медија';
$lang['_advanced']             = 'Напредна подешавања';
$lang['_network']              = 'Подешавања мреже';
$lang['_plugin_sufix']         = 'Подешавања за додатке';
$lang['_template_sufix']       = 'Подешавања за шаблоне';
$lang['_msg_setting_undefined'] = 'Нема метаподатака подешавања';
$lang['_msg_setting_no_class'] = 'Нема класе подешавања';
$lang['_msg_setting_no_default'] = 'Нема подразумеване вредности';
$lang['fmode']                 = 'Начин прављења датотека';
$lang['dmode']                 = 'Начин прављења фасцикла';
$lang['lang']                  = 'Језик';
$lang['basedir']               = 'Основна фасцикла';
$lang['baseurl']               = 'Основни УРЛ';
$lang['savedir']               = 'Фасцикла у којој ће се чувати подаци';
$lang['start']                 = 'Назив почетне странице';
$lang['title']                 = 'Назив викија';
$lang['template']              = 'Шаблон';
$lang['fullpath']              = 'Објави целу путању странице у заглављу на дну стране';
$lang['recent']                = 'Последње промене';
$lang['breadcrumbs']           = 'Број пређених корака (страница)';
$lang['youarehere']            = 'Хиерархијске кораке (странице)';
$lang['typography']            = 'Уради типографске замене';
$lang['htmlok']                = 'Дозволи угњежђени ХТМЛ';
$lang['phpok']                 = 'Дозволи угњежђени ПХП';
$lang['dformat']               = 'Облик датума (погледајте ПХПову <a href="http://www.php.net/strftime">strftime</a> функцију)';
$lang['signature']             = 'Потпис';
$lang['toptoclevel']           = 'Највиши ниво за садржај';
$lang['maxtoclevel']           = 'Максимални ниво за садржај';
$lang['maxseclevel']           = 'Максималан број секција које се мењају';
$lang['camelcase']             = 'Користи CamelCase за линкове';
$lang['deaccent']              = 'Чисти имена страница';
$lang['useheading']            = 'Преузми наслов првог нивоа за назив странице';
$lang['refcheck']              = 'Провери референце медијских датотека';
$lang['refshow']               = 'Број референци које се приказују за медијске датотеке';
$lang['allowdebug']            = 'Укључи дебаговање <b>искључи ако није потребно!</b>';
$lang['usewordblock']          = 'Блокирај спам на основу листе речи';
$lang['indexdelay']            = 'Одлагање индексирања (секунде)';
$lang['relnofollow']           = 'Користи rel="nofollow" за спољне линкове';
$lang['iexssprotect']          = 'Провера потенцијално малициозног кода у Јаваскрипт или ХТМЛ коду';
$lang['useacl']                = 'Користи листу права приступа';
$lang['autopasswd']            = 'Аутогенерисане лозинки';
$lang['authtype']              = 'Позадински систем аутентификације';
$lang['passcrypt']             = 'Метода енкрипције лозинки';
$lang['defaultgroup']          = 'Подразумевана група';
$lang['superuser']             = 'Суперкорисник - група, корисник или зарезом одвојена листа корисника корисник1,@група1,корисник2 са отвореним проступом свим страницама и функцијама без обзира на поставке Контроле приступа';
$lang['manager']               = 'Управник - група, корисник или зарезом одвојена листа корисника корисник1,@група1,корисник2 са отвореним проступом неким функцијама за управљање';
$lang['profileconfirm']        = 'Потврди промене у профилу куцањем лозинке';
$lang['disableactions']        = 'Искључи DokuWiki наредбе';
$lang['disableactions_check']  = 'Провера';
$lang['disableactions_subscription'] = 'Претплата';
$lang['disableactions_nssubscription'] = 'Претплата за именски простор';
$lang['disableactions_wikicode'] = 'Прикажи извор/Извези сирово';
$lang['disableactions_other']  = 'Остале наредбе (раздвојене зарезом)';
$lang['sneaky_index']          = 'По инсталацији DokuWiki ће у индексу приказати све именске просторе. Укључивањем ове опције именски простори у којима корисник нема право читања ће бити сакривени. Консеквенца је да ће и доступни подпростори бити сакривени. Ово доводи до неупотребљивости Права приступа у неким поставкама.';
$lang['auth_security_timeout'] = 'Временска пауза у аутентификацији (секунде)';
$lang['updatecheck']           = 'Провера надоградњи и сигурнпосних упозорења? Dokuwiki мора да контактира splitbrain.org ради добијања информација.';
$lang['userewrite']            = 'Направи леп УРЛ';
$lang['useslash']              = 'Користи косу црту у УРЛу за раздвајање именских простора ';
$lang['usedraft']              = 'Аутоматски сачувај скицу у току писања измена';
$lang['sepchar']               = 'Раздвајање речи у називу странице';
$lang['canonical']             = 'Користи правилне УРЛове';
$lang['autoplural']            = 'Провери облик множине у линковима';
$lang['compression']           = 'Метод компресије за attic датотеке';
$lang['cachetime']             = 'Максимално трајање оставе (сек)';
$lang['locktime']              = 'МАксимално трајање закључавања датотека (сек)';
$lang['fetchsize']             = 'Максимална величина (у бајтима) коју може да преузме fetch.php од споља';
$lang['notify']                = 'Пошаљи обавештења о променама на ову е-адресу';
$lang['registernotify']        = 'Пошаљи обавештење о новорегистрованим корисницима на ову е-адресу';
$lang['mailfrom']              = 'Е-адреса која се користи као пошиљаоц за аутоматске е-поруке';
$lang['gzip_output']           = 'Користи гзип шифрирање за иксХТМЛ';
$lang['gdlib']                 = 'ГД Либ верзија';
$lang['im_convert']            = 'Путања до алатке за коверзију ИмиџМеџик ';
$lang['jpg_quality']           = 'ЈПГ квалитет компресије (0-100)';
$lang['subscribers']           = 'Укључи могућност претплате за странице';
$lang['compress']              = 'Сажимај ЦСС и јаваскрипт';
$lang['hidepages']             = 'Сакриј подударне странице (на основу регуларних израза)';
$lang['send404']               = 'Пошаљи поруку "ХТТП 404/Страница не постоји" за непостојеће странице';
$lang['sitemap']               = 'Генериши Гугл мапу сајта (дан)';
$lang['broken_iua']            = 'Да ли је функција ignore_user_abort function не ради на вашем систему? Ово може проузроковати неиндексирање података за претрагу. ИИС+ПХП/ЦГИ је често ван функције. Погледајте <a href="http://bugs.splitbrain.org/?do=details&amp;task_id=852">баг 852</a> за више информација.';
$lang['xsendfile']             = 'Користи заглавље X-Sendfile да би веб сервер могао да испоручује статичке датотеке? Веб сервер треба да подржава ову функцију.';
$lang['xmlrpc']                = 'Укључи/искључи ИксМЛ-РПЦ прикључак';
$lang['renderer__core']        = '%s (dokuwiki језгро)';
$lang['renderer__plugin']      = '%s (додатак)';
$lang['rss_type']              = 'Врста ИксМЛ довода';
$lang['rss_linkto']            = 'ИксМЛ довод линкује на';
$lang['rss_content']           = 'Шта треба приказати у ИксМЛ доводу?';
$lang['rss_update']            = 'ИксМЛ';
$lang['recent_days']           = 'Колико последњих промена чувати (дани)';
$lang['rss_show_summary']      = 'ИксМЛ довод приказује збир у наслову';
$lang['target____wiki']        = 'Циљни прозор за интерне линкове';
$lang['target____interwiki']   = 'Циљни прозор за међувики линкове';
$lang['target____extern']      = 'Циљни прозор за спољне линкове';
$lang['target____media']       = 'Циљни прозор за медијске линкове';
$lang['target____windows']     = 'Циљни прозор за Виндоуз линкове';
$lang['proxy____host']         = 'Назив посредника';
$lang['proxy____port']         = 'Порт посредника';
$lang['proxy____user']         = 'Корисничко име на посреднику';
$lang['proxy____pass']         = 'Лозинка на посреднику';
$lang['proxy____ssl']          = 'Користи ССЛ за повезивање са посредником';
$lang['safemodehack']          = 'Укључи преправку за безбедни режим';
$lang['ftp____host']           = 'ФТП сервер за безбедни режим';
$lang['ftp____port']           = 'ФТП порт за безбедни режим';
$lang['ftp____user']           = 'ФТП корисничко име за безбедни режим';
$lang['ftp____pass']           = 'ФТП лозинка за безбедни режим';
$lang['ftp____root']           = 'ФТП основна фасцикла за безбедни режим';
$lang['typography_o_0']        = 'не';
$lang['typography_o_1']        = 'Само дупли наводници';
$lang['typography_o_2']        = 'Сви наводници (неће увек радити)';
$lang['userewrite_o_0']        = 'не';
$lang['userewrite_o_1']        = '.htaccess';
$lang['userewrite_o_2']        = 'DokuWiki интерно';
$lang['deaccent_o_0']          = 'искључено';
$lang['deaccent_o_1']          = 'уклони акценте';
$lang['deaccent_o_2']          = 'романизуј';
$lang['gdlib_o_0']             = 'ГД Либ није доступан';
$lang['gdlib_o_1']             = 'Верзија 1.*';
$lang['gdlib_o_2']             = 'Аутопроналажење';
$lang['rss_type_o_rss']        = 'РСС 0.91';
$lang['rss_type_o_rss1']       = 'РСС 1.0';
$lang['rss_type_o_rss2']       = 'РСС 2.0';
$lang['rss_type_o_atom']       = 'Атом 0.3';
$lang['rss_type_o_atom1']      = 'Атом 1.0';
$lang['rss_content_o_abstract'] = 'Издвојити';
$lang['rss_content_o_diff']    = 'Једностране разлике';
$lang['rss_content_o_htmldiff'] = 'ХТМЛ форматирана табела разлика';
$lang['rss_content_o_html']    = 'ХТМЛ садржај странице';
$lang['rss_linkto_o_diff']     = 'приказ разлика';
$lang['rss_linkto_o_page']     = 'исправљена страница';
$lang['rss_linkto_o_rev']      = 'листа исправки';
$lang['rss_linkto_o_current']  = 'тренутна страница';
$lang['compression_o_0']       = 'не';
$lang['compression_o_gz']      = 'gzip';
$lang['compression_o_bz2']     = 'bz2';
$lang['xsendfile_o_0']         = 'не';
$lang['xsendfile_o_1']         = 'Власничко lighttpd заглавље (пре верзије 1.5)';
$lang['xsendfile_o_2']         = 'Стандардно заглавље X-Sendfile';
$lang['xsendfile_o_3']         = 'Власничко заглавље Nginx X-Accel-Redirect';
