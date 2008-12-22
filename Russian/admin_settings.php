<?php

$lang_admin_settings = array(

'Settings updated'				=>	'Настройки обновлены.',

// Setup section
'Setup personal'				=>	'Персональные настройки вашего форума',
'Setup personal legend'			=>	'Инсталляция PunBB',
'Board description label'		=>	'Описание форума',
'Board title label'				=>	'Название форума',
'Default style label'			=>	'Стиль по умолчанию',
'Setup local'					=>	'Настройки локализации для форума',
'Setup local legend'			=>	'Настройки локализации',
'Default timezone label'		=>	'Часовой пояс',
'Adjust for DST'				=>	'Привести к DST',
'DST label'						=>	'Использовать «летнее время» (сдвиг на 1 час вперёд относительно времени, принятого в данном часовом поясе).',
'Default language label'		=>	'Основной язык',
'Default language help'			=>	'(Если вы удалите языковой пакет, вы должны обновить данную настройку)',
'Time format label'				=>	'Формат времени',
'Date format label'				=>	'Формат даты',
'Current format'				=>	'[ Текущий формат: %s ] %s',
'External format help'			=>	'<a class="exthelp" href="http://www.php.net/manual/en/function.date.php">Узнать подробнее</a> о функции.',
'Setup timeouts'				=>	'Временные задержки перенаправления и действий',
'Setup timeouts legend'			=>	'Временные задержки',
'Visit timeout label'			=>	'Таймаут посещения',
'Visit timeout help'			=>	'Количество секунд до обновления даты последнего посещения',
'Online timeout label'			=>	'Таймаут активности',
'Online timeout help'			=>	'Количество секунд до изменения статуса нахождения пользователя на форуме',
'Redirect time label'			=>	'Ожидание переадресации',
'Redirect time help'			=>	'Если установить 0 секунд, страница переадресации не будет выводиться (не рекомендуется)',
'Setup pagination'				=>	'Настройки отображения количества тем, сообщений по умолчанию',
'Setup pagination legend'		=>	'Настройки отображения',
'Topics per page label'			=>	'На странице тем',
'Posts per page label'			=>	'На странице сообщений',
'Topic review label'			=>	'На странице ответа',
'Topic review help'				=>	'Новые первыми. 0 — отключить.',
'Setup reports'					=>	'Метод получения уведомлений об изменениях в сообщениях и темах',
'Setup reports legend'			=>	'Настройка уведомления',
'Reporting method'				=>	'Метод уведомления',
'Report internal label'			=>	'По внутренней системе уведомлений.',
'Report both label'				=>	'По внутренней системе уведомлений и используя e-mail по списку рассылки.',
'Report email label'			=>	'Используя e-mail по списку рассылки.',
'Setup URL'						=>	'URL схема (<abbr title="Search Engine Friendly">SEF</abbr> URLs) для страниц ваших досок',
'Setup URL legend'				=>	'URL схема',
'URL scheme info'				=>	'<strong>ВНИМАНИЕ!</strong> Если вы выберите схему, отличную от базовой, вы должны скопировать/загрузить файл .htaccess из каталога «extras» в корень форума. Сервер, на котором установлен форум, должен быть сконфигурирован с поддержкой mod_rewrite и должен разрешать использование файлов .htaccess. Если вы используете Web-сервер, отличный от Apache, пожалуйста обратитесь к документации данного сервера.',
'URL scheme label'				=>	'URL схема',
'URL scheme help'				=>	'Изменяйте настройки в том случае, если вы понимаете смысл приведенной выше информации.',
'Setup links'					=>	'Добавление своих ссылок в главное меню',
'Setup links info'				=>	'Форма ввода HTML-кода гиперссылок. В главное меню может быть добавлено любое количество пунктов. Формат записи добавления новых пунктов такой: X = &lt;a href="URL"&gt;ССЫЛКА&lt;/a&gt; где X — позиция, на которую ссылка будет помещена (например 0 вставит новый пункт в самом начале, а 2 вставит новый пункт после пункта «Пользователи»). Каждый новый пункт пишется с новой строки.',
'Setup links legend'			=>	'Элементы меню',
'Enter links label'				=>	'Введите ваши ссылки',
'Error no board title'			=>	'Вы должны ввести название форума.',
'Error timeout value'			=>	'Значение параметра «Таймаут активности» должно быть меньше значения параметра «Таймаут посещения».',


// Features section
'Features general'				=>	'Основные настройки функционала  PunBB',
'Features general legend'		=>	'Настройки функционала',
'Searching'						=>	'Поиск',
'Search all label'				=>	'Разрешить пользователям поиск по всем форумам одновременно. Отключите функцию   если сервер сильно загружен.',
'User ranks'					=>	'Ранги',
'User ranks label'				=>	'Включить пользовательские ранги, основанные на количестве сообщений.',
'Censor words'					=>	'Цензура',
'Censor words label'			=>	'Включить функцию запрета нежелательных слов.',
'Quick jump'					=>	'Быстрый переход',
'Quick jump label'				=>	'Включить быстрый переход (прыжки по форуму) с выпадающим меню.',
'Show version'					=>	'Показывать версию',
'Show version label'			=>	'Показывать версию PunBB внизу страницы форума.',
'Online list'					=>	'Лист активности',
'Users online label'			=>	'Отображать  список гостей и пользователей, находящихся на форуме.',
'Features posting'				=>	'Настройки функций в сообщениях и темах',
'Features posting legend'		=>	'Функции постинга',
'Quick post'					=>	'Быстрый ответ',
'Quick post label'				=>	'Добавить форму быстрого ответа.',
'Subscriptions'					=>	'Подписка',
'Subscriptions label'			=>	'Разрешить пользователям подписываться в темах (получать уведомления о новых ответах по e-mail).',
'Guest posting'					=>	'Сообщения от гостей',
'Guest posting label'			=>	'Гости должны указать e-mail адрес при отправке сообщений.',
'User has posted'				=>	'Участие пользователя',
'User has posted label'			=>	'Отображать точку перед индикатором состояния темы, если пользователь отвечал в ней ранее. Отключите функцию если нагрузка на сервера высока.',
'Topic views'					=>	'Просмотр тем',
'Topic views label'				=>	'Отображать количество просмотров тем. Отключите функцию если существует высокая загруженность сервера на активном форуме.',
'User post count'				=>	'Количество сообщений пользователя',
'User post count label'			=>	'Отображать количество сообщений пользователя в сообщениях, профиле и списке пользователей.',
'User info'						=>	'Информация пользователя',
'User info label'				=>	'Отображать место нахождения пользователя, дату регистрации, количество сообщений, e-mail и URL в сообщениях.',
'Features posts'				=>	'Обработка содержания тем и сообщений',
'Features posts legend'			=>	'Обработка содержания тем и сообщений',
'Post content group'			=>	'Опции сообщения',
'Allow BBCode label'			=>	'Разрешить BB-коды в сообщениях (рекомендуется).',
'Allow img label'				=>	'Разрешить BB-тег [img]  в сообщениях.',
'Smilies in posts label'		=>	'Конвертировать текстовые смайлы в сообщениях в графические.',
'Make clickable links label'	=>	'Преобразовывать URL-адреса в гиперссылки в сообщениях.',
'Allow capitals group'			=>	'Заглавные буквы',
'All caps message label'		=>	'Разрешить все заглавные буквы в сообщениях.',
'All caps subject label'		=>	'Разрешить все заглавные буквы в заголовках.',
'Indent size label'				=>	'Отступ в теге [code]',
'Indent size help'				=>	'Величина отступа строки блока текста. Если установить 8, будт использован обычный отступ',
'Quote depth label'				=>	'Вложение тега [quote]',
'Quote depth help'				=>	'Максимальное количество включения тега [quote] внутрь других тегов [quote]. Содержимое вложенных тегов цитирования, порядок вложения которых больше указанного значения, будет отброшено',
'Features sigs'					=>	'Подпись пользователя и ее содержание',
'Features sigs legend'			=>	'Свойства подписи',
'Allow signatures'				=>	'Разрешить подписи',
'Allow signatures label'		=>	'Разрешать пользователям присоединять подписи к сообщениям.',
'Signature content group'		=>	'Содержимое подписи',
'BBCode in sigs label'			=>	'Разрешить BBC-коды в подписях.',
'Img in sigs label'				=>	'Разрешить тег BB-кода [img] в подписях (не рекомендуется).',
'All caps sigs label'			=>	'Разрешить подписи, состоящие из заглавных букв.',
'Smilies in sigs label'			=>	'Конвертировать текстовые смайлы в графические в подписях.',
'Max sig length label'			=>	'Максимум символов',
'Max sig lines label'			=>	'Максисмум строк',
'Features Avatars'				=>	'Аватары пользователей (параметры загрузки и размера)',
'Features Avatars legend'		=>	'Настройки аватара пользователя',
'Allow avatars'					=>	'Разрешить аватары',
'Allow avatars label'			=>	'Разрешить пользователям загружать  аватары для отображения в сообщениях.',
'Avatar directory label'		=>	'Каталог для загрузки',
'Avatar directory help'			=>	'Относительно корневого каталога форума PunBB. PHP должен иметь права записи на этот каталог.',
'Avatar Max width label'		=>	'Ширина аватара',
'Avatar Max width help'			=>	'Максимальная ширина в пискселях (рекомендовано значение: 60).',
'Avatar Max height label'		=>	'Выстота аватара',
'Avatar Max height help'		=>	'Максимальная высота в пискселях (рекомендовано значение: 60).',
'Avatar Max size label'			=>	'Размер аватара',
'Avatar Max size help'			=>	'Максимальный размер в байтах (рекомендовано значение: 10,240).',
'Features update'				=>	'Автоматическая проверка обновлений',
'Features update info'			=>	'PunBB может периодически проверять наличие важных обновлений. Они могут быть предназначены для обновления версии форума или установки расширений,  исправляющих ошибки и уязвимости. Когда обновления будут доступны, администратор форума получит уведомление.',
'Features update disabled info'	=>	'Невозможно автоматически проверить обновления. Для поддержки данной функции, среда PHP, в которой запущен PunBB, должна поддерживать <a href="http://www.php.net/manual/en/ref.curl.php">cURL расширение</a>, <a href="http://www.php.net/manual/en/function.fsockopen.php">функции fsockopen() </a>, сконфигурирована с использованием<a href="http://www.php.net/manual/en/ref.filesystem.php#ini.allow-url-fopen">allow_url_fopen</a>.',
'Features update legend'		=>	'Автаматическое обновление',
'Update check'					=>	'Проверить обновления',
'Update check label'			=>	'Включить автоматическую проверку обновлений.',
'Check for versions'			=>	'Проверка новых версий',
'Auto check for versions'		=>	'Включить проверку новых версий расширений.',
'Features gzip'					=>	'Сжимать исходящие данные используя gzip',
'Features gzip legend'			=>	'Сжатие данных',
'Features gzip info'			=>	'Если включено, PunBB будет передавать сжатые данные вашему браузеру. Это сократит нагрузку на полосу пропускания данных, но увеличит нагрузку на процессор (CPU). Эта функция обращается к PHP, сконфигурированного с использованием zlib (--with-zlib). Замечание: Если вы уже используете один из Apache модулей  mod_gzip или  mod_deflate, установленных для сжатия PHP сценариев, вы должны отключить данную функцию.',
'Enable gzip'					=>	'Сжатие gzip',
'Enable gzip label'				=>	'Включить сжатие исходящих данных используя gzip.',

// Announcements section
'Announcements head'			=>	'Отображать объявление на страницах вашего форума',
'Announcements legend'			=>	'Объявление',
'Enable announcement'			=>	'Включить объявление',
'Enable announcement label'		=>	'Выводить сообщение объявления.',
'Announcement heading label'	=>	'Заголовок объявления',
'Announcement message label'	=>	'Содержание сообщения',
'Announcement message help'		=>	'Вы можете использовать HTML в вашем объявлении. Текст объявления обрабатывается иначе чем сообщения.',
'Announcement message default'	=>	'<p>Введите сюда содержание объявления.</p>',

// Registration section
'Registration new'				=>	'Новые регистрации',
'New reg info'					=>	'Вы можете использовать проверку всех новых регистраций. Когда проверка регистраций включена, пользователь получает по средствам e-mail сообщения ссылку активации. После он может воспользоваться ею для авторизации. Функция используется при восстановлении утерянного пароля. Если пользователь захочет изменить e-mail адрес после регистрации, то ему также придётся отдельно подтвердить это, перейдя по ссылке активации в письме. Это эффективный путь ограничения пустых регистраций и способ стимулировать пользователей для указания в профиле реального e-mail адреса.',
'Registration new legend'		=>	'Новые регистрации',
'Allow new reg'					=>	'Новые регистрации',
'Allow new reg label'			=>	'Разрешить новые регистрации. Отключать только в особых случаях.',
'Verify reg'					=>	'Проверка регистрации',
'Verify reg label'				=>	'Подтверждать регистрации по e-mail.',
'Reg e-mail group'				=>	'E-mail адрес егистрации',
'Allow banned label'			=>	'Разрешить регистрацию с e-mail адресом, который находится в чёрном списке (заблокирован).',
'Allow dupe label'				=>	'Разрешить регистрацию с e-mail адресом, который уже принадлежит другому пользователю.',
'Report new reg'				=>	'Оповщение по e-mail',
'Report new reg label'			=>	'Оповещать пользователей из списка рассылки о регистрации новых пользователей.',
'E-mail setting group'			=>	'Базовые настройки e-mail',
'Display e-mail label'			=>	'Показывать e-mail адрес другим пользователям.',
'Allow form e-mail label'		=>	'Скрывать e-mail адрес, но разрешить отправлять e-mail сообщения через форум.',
'Disallow form e-mail label'	=>	'Скрывать e-mail адрес и запретить отправлять e-mail сообщения через форум.',
'Registration rules'			=>	'Правила форума (использование и оформление правил форума)',
'Registration rules info'		=>	'Вы можете обязать пользователей принимать правила форума при регистрации (напишите их в текстовом поле ниже). Правила всегда будут доступны для просмотра по ссылке из главного меню на каждой странице форума.',
'Registration rules legend'		=>	'Правила форума',
'Require rules'					=>	'Соглашение с правилами',
'Require rules label'			=>	'Обязать пользователей принимать правила форума перед процедурой регистрации.',
'Compose rules label'			=>	'Оформить правила',
'Compose rules help'			=>	'Вы можете использовать HTML в этом блоке. Оставьте пустым, чтобы не использовать правила',
'Rules default'					=>	'Введите сюда ваши правила.',

// Email section
'E-mail addresses'				=>	'E-mail адрес форума и список рассылки',
'E-mail addresses legend'		=>	'E-mail адреса',
'Admin e-mail'					=>	'E-mail администратора',
'Webmaster e-mail label'		=>	'E-mail вебмастера',
'Webmaster e-mail help'			=>	'Адрес отправителя, который будет использован форумом для рассылки',
'Mailing list label'			=>	'Список рассылки',
'Mailing list help'				=>	'Разделяйте адреса получателей сигналов и/или уведомлений о новых регистрациях запятой',
'E-mail server'					=>	'Настройки почтового сервера для отправки писем от форума',
'E-mail server legend'			=>	'E-mail сервер',
'E-mail server info'			=>	'В большинстве случаев PunBB без проблем отправляет e-mail сообщения, используя внутренний почтовый сервис, в этом случае вы можете пропустить эти настройки. Так же PunBB может быть сконфигурирован для использования внешнего почтового сервера. Введите адрес внешнего сервера и, если требуется, укажите номер порта SMTP сервера, если ваш SMTP сервер не может работать через стандартный 25 порт (например: mail.example.com:3580).',
'SMTP address label'			=>	'Адрес SMTP сервера',
'SMTP address help'				=>	'Для внешних серверов. Оставьте пустым, чтобы использовать внутреннюю почтовую службу',
'SMTP username label'			=>	'Имя пользователя SMTP-сервера',
'SMTP username help'			=>	'Не требуется большинству SMTP-серверов',
'SMTP password label'			=>	'SMTP пароль',
'SMTP password help'			=>	'Не требуется большинству SMTP-серверов',
'SMTP SSL'						=>	'Включить SSL для SMTP',
'SMTP SSL label'				=>	'Шифровать Ваше SMTP соединение, используя SSL. Выбирайте, только если уверены, что ваша версия PHP поддерживает SSL и Ваш SMTP сервер требует этого.',
'Error invalid admin e-mail'	=>	'E-mail адрес администратора, который вы ввели содержит ошибку.',
'Error invalid web e-mail'		=>	'E-mail адрес вебмастера, который вы ввели содержит ошибку.',

// Maintenance section
'Maintenance head'				=>	'Установка режима профилактики и оформление сообщения о применении данного режима',
'Maintenance mode info'			=>	'<strong>Важно!</strong> Форум будет доступен только Администраторам. Данный режим следует использовать, если нужно закрыть форум для проведения каких-либо настроек.',
'Maintenance mode warn'			=>	'<strong>Внимание!</strong> НЕ ВЫХОДИТЕ, когда форум находится в режиме профилактики. Вы не сможете войти снова!',
'Maintenance legend'			=>	'Профилактика',
'Maintenance mode'				=>	'Режим профилактики',
'Maintenance mode label'		=>	'Установить на форуме режим профилактики.',
'Maintenance message label'		=>	'Сообщение о режиме профилактики',
'Maintenance message help'		=>	'Сообщение, которое будет показано, когда форум перейдет в режим профилактики. Если вы не составите свой вариант, будет показано сообщение по умолчанию. Для написания сообщения можно использовать HTML-код',
'Maintenance message default'	=>	'Форум временно переведен в режим профилактики. Пожалуйста, попробуйте зайти снова через несколько минут.<br /><br />Администрация',

);
