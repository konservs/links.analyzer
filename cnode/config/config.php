<?php
//Тип кеширования
define('CACHE_TYPE','files');
//Кеширование URLов к базе
define('DBCACHE_ENABLED','0');
//Режим отладки
define('DEBUG_MODE','1');
//Индексация сайта поисковыми системами
define('DEBUG_SITENOINDEX','0');
//Кеширование HTML блоков
define('DEBUG_PAGES_CACHE','1');
//Папка статических файлов
define('STATIC_PATH','D:\\WORK\\WWW\\vidido.ua\\htdocs\\static');
//Путь, где будут лежать файлы
define('FILES_PATH','');
//Минимальная длина пароля
define('USERS_PASSWORD_CHARSMIN',5);
//Максимальное количество сотрудников фирмы
define('FIRMS_MAX_EMPLOYEES',10);
//Разрешенные символы в заголовках (объявления)
define('TITLE_ALLOWABLE_CHARS','ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzАБВГҐДЕЁЄЖЗИЙЇКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯабвгґдеёєжзийїклмнопрстуфхцчшщъыьэюя0123456789\\\"\'№%:*()-+=/.,&#');
//Максимальное количество телефонов
define('USERS_PHONES_MAX',3);
//ID Google аналитики
define('GOOGLE_ANALYTICS_ID','');
//Хост MySQL
define('MYSQL_DB_HOST','vidido.ua');
//Имя пользователя
define('MYSQL_DB_USERNAME','vidido');
//Пароль
define('MYSQL_DB_PASSWORD','BrilliantAcce$$');
//База данных
define('MYSQL_DB_NAME','vidido');
//Отправитель (email)
define('EMAIL_SEND_EFROM','noreply@skates.com.ua');
//Отправитель (имя)
define('EMAIL_SEND_NFROM','Робот Від і дО');
//Тип отправки
define('EMAIL_SEND_TYPE','1');
//Email редактора газеты (действия "отправить в газету")
define('EMAIL_ADDRESS_NEWSPAPER','admin@vidido.ua');
//Email для жалоб
define('EMAIL_ADDRESS_COMPLAIN','admin@vidido.ua');
//Email формы обратной связи в справке
define('EMAIL_ADDRESS_HELP','admin@vidido.ua');
//Email администратора
define('EMAIL_ADDRESS_SUPPORT','admin@vidido.ua');
//Телефоны тех. поддержки
define('CONTACTS_PHONES_SUPPORT','(0372) 51-82-51; (0372) 520-111');
//Страница Facebook
define('CONTACTS_LINK_FACEBOOK','https://www.facebook.com/vididoua');
//Страница vk.com
define('CONTACTS_LINK_VKONTAKTE','https://vk.com/vidido_ua');
//Страница Google+
define('CONTACTS_LINK_GPLUS','https://plus.google.com/109378434743458608081');
//Страница Twitter
define('CONTACTS_LINK_TWITTER','');
//Id групи в facebook
define('SOCIAL_FB_ID','');
//Основной хост
define('BHOSTNAME','vidido.com');
//Хост статики
define('BHOSTNAME_STATIC','static.vidido.com');
//Хост медиа
define('BHOSTNAME_MEDIA','media.vidido.ua');
//Поддержка HTTPS для личного кабинета
define('SSL_ACCOUNT_ENABLED','0');
//Основной протокол сайта
define('SITE_MAIN_PROTO','http://');
//Ключ Google Maps API V3
define('GOOGLEAPI_MAPS_KEY','');
//Ключ Google Maps Static
define('GOOGLEAPI_MAPS_STATIC_KEY','');
//Ключ Google Maps API V3
define('GOOGLEAPI_YOUTUBE_KEY','');
//Логин шлюза TurboSMS
define('TURBOSMS_GATE_LOGIN','');
//Пароль шлюза TurboSMS
define('TURBOSMS_GATE_PASSWORD','');
//Подпись TurboSMS
define('TURBOSMS_GATE_SIGN','');
//Модерация комментариев
define('NEWS_COMMENTS_MODERATION','1');
//Папка для оригиналов
define('MEDIA_PATH_ORIGINAL','D:\\WORK\\WWW\\vidido.ua\\htdocs\\media\\original');
//Папка для миниатюр
define('MEDIA_PATH_RESIZED','D:\\WORK\\WWW\\vidido.ua\\htdocs\\media\\resized');
//URL медиа сервера
define('MEDIA_URL','http://media.vidido.ua');
//Допустимые размеры
define('MEDIA_TRUSTED_IMAGE_SIZES','w180,w210,w230,w240,w350,s100,s50,w100,w500,w50,w60,w70,w120,w150,w155,w160,w165,w600,w380,w75,w135,w300,s75,w40,w30,s100,w728,g');
//файл вотермарки
define('WATERMARK_PATH','D:\\WORK\\WWW\\vidido.ua\\htdocs\\media\\watermark.png');
//Позиция вотермарки
define('WATERMARK_POSITION','1');
//минимальная ширина картинки для наложения
define('WATERMARK_MINWIDTH',100);
//минимальная высота картинки для наложения
define('WATERMARK_MINHEIGHT',100);
//Title (RU)
define('COM_MAINPAGE_TITLE_RU','VIDIDO.UA - Объявления Украина. Бесплатные частные объявления в Украина. Доска бесплатных объявлений');
//Title (UA)
define('COM_MAINPAGE_TITLE_UA','VIDIDO.UA - Оголошення Україна. Безкоштовні приватні оголошення  Україна. Дошка безкоштовних оголошень');
//Meta Description (RU)
define('COM_MAINPAGE_METADESC_RU','Портал объявлений, на котором быстро продают и легко покупают! Доска объявлений c огромным выбором товаров и услуг. Бесплатные объявления с удобным поиском по областям и городам и простой регистрацией! Дать объявление в интернете можно бесплатно!');
//Meta Description (UA)
define('COM_MAINPAGE_METADESC_UA','Портал оголошень, на якому швидко продають і легко купують! Оголошення c величезним вибором товарів та послуг. Безкоштовні оголошення з зручним пошуком по областях і містах і простою реєстрацією! Дати оголошення в Інтернеті можна безкоштовно!');
//Meta Keywords (RU)
define('COM_MAINPAGE_METAKEYW_RU','');
//Meta Keywords (UA)
define('COM_MAINPAGE_METAKEYW_UA','');
//Цена рубрики "Авто"
define('TABLE_PRICE_AUTO','');
//Цена рубрики "Недвижимость"
define('TABLE_PRICE_DOM','');
//Бесплатные базовые публикации подтвержденным фирмам
define('WORK_FREEBASEPUB_CONFIRMED',3);
//Бесплатные базовые публикации неподтвержденным фирмам
define('WORK_FREEBASEPUB_NOTCONFIRMED',1);
//Рубрика раздела «Работа»
define('WORK_RUBRIC_ID','9');
//Рубрика авто
define('AUTO_RUBRIC_ID','1');
//Рубрика недвижимости
define('DOM_RUBRIC_ID','3');
//ADMIN_CONFIG_SYSTEMS_NEWS_HITS_DIVISOR
define('NEWS_HITS_DIVISOR',1);
//Делитель хитов объявлений
define('CLASSIFIED_HITS_DIVISOR',1);
//Делитель хитов фирм
define('FIRMS_FIRM_HITS_DIVISOR',1);
//Делитель просмотров новых авто
define('NEWAUTOS_HITS_DIVISOR',1);
//Цена фишки
define('CHIPS_PRICE',1);
//Папка из которой брать файлы
define('IMPORT_DIRECTORY_IMPORT','');
//Папка в которую ложить файлы при успехе
define('IMPORT_DIRECTORY_SUCCESS','');
//Папка в которую ложить файлы при неудаче
define('IMPORT_DIRECTORY_FAIL','');
//удалить поиски по прошествию, дней
define('CLASSIFIED_SEARCH_DELETE_DAYS',10);
//ID мерчанта
define('PAYMENT_PRIVAT24_MERCHANT_ID',0);
//Пароль мерчанта
define('PAYMENT_PRIVAT24_MERCHANT_PASS','');
//Валюта счёта мерчанта
define('PAYMENT_PRIVAT24_MERCHANT_CURRENCY','UAH');
//Разрешить использование тестовых мерчантов?
define('PAYMENT_PRIVAT24_MERCHANT_ISTEST','0');
//Публичный ключ
define('PAYMENT_LIQPAY_PUBLIC_KEY','');
//Приватный ключ
define('PAYMENT_LIQPAY_PRIVATE_KEY','');
//Валюта
define('PAYMENT_LIQPAY_CURRENCY','UAH');
//Тестовые аккаунт
define('PAYMENT_LIQPAY_ISTEST','0');
//Секретное слово
define('PAYMENT_24NONSTOP_SECRET','');
//Название сервиса
define('PAYMENT_24NONSTOP_NAME','');
