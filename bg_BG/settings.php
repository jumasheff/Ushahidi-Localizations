<?php defined('SYSPATH') OR die('No direct access allowed.');
// DO NOT EDIT
// This file is automatically generated from the matching PO file
// Updates should be made through Transifex
// I18n generated at: 2012-09-05 12:05+0000
// PO revision date:  2012-08-19 22:42+0000
$lang = array(
	'allow_comments' => array(
		'between' => 'Полето за позволение на коментарите не съдържа валидна стойност.',
		'required' => 'Полето за позволение на коментарите е задължително.',
	) ,
	'allow_feed' => array(
		'between' => 'Полето за включване на абонамент не съдържа валидна стойност.',
		'required' => 'Полето за включване на абонамент е задължително.',
	) ,
	'allow_reports' => array(
		'between' => 'Полето за позволение на сигнали не съдържа валидна стойност.',
		'required' => 'Полето за позволение на сигнали е задължително.',
	) ,
	'allow_stat_sharing' => array(
		'between' => 'Полето за споделяне на статистика не съдържа валидна стойност.',
		'required' => 'Полето за споделяне на статистика е задължително.',
	) ,
	'api' => array(
		'default_record_limit' => 'Брой на записите, които да се вземат при едно API запитване',
		'maximum_record_limit' => 'Максимален брой на записите, които да се вземат при едно API запитване',
		'maximum_requests_per_ip_address' => 'Максимален брой на API запитвания към един IP адрес',
	) ,
	'api_akismet' => array(
		'alpha_numeric' => 'Полето Akismet е задължително.',
		'length' => 'Полето Akismet не съдържа валидна стойност.',
	) ,
	'cache_pages' => array(
		'between' => 'Полето за кеширане на страниците е задължително.',
		'required' => 'Полето за кеширане на страниците не съдържа валидна стойност.',
	) ,
	'cache_pages_lifetime' => array(
		'in_array' => 'Полето за продължителността на кеша не съдържа валидна стойност.',
		'required' => 'Полето за продължителността на кеша е задължително',
	) ,
	'cleanurl' => array(
		'clean_url_disabled' => 'Изглежда сървъра ви не е конфигуриран да работи с изчистени адреси. ще трябва да промените настройките на сървъра си преди да включите изчистените адреси. Вижте как във <a href="http://forums.ushahidi.com/topic/server-configuration-for-apache-mod-rewrite" target="_blank">форума</a>',
		'clean_url_enabled' => 'Тази опция ще позволи Ushahidi да бъде достъпен през изчистени адреси. Това означава без "index.php" в адреса.',
		'enable_clean_url' => 'Включи изчистени адреси',
		'title' => 'Изчистени адреси',
	) ,
	'clickatell_api' => array(
		'length' => 'Номера за API-то на Clickatell трябва да съдържа не повече от 20 символа.',
		'required' => 'Номера за API-то на Clickatell е задължителен.',
	) ,
	'clickatell_password' => array(
		'length' => 'Полето с паролата на Clickatell трябва да е между 5 и 20 символа.',
		'required' => 'Полето с паролата на Clickatell е задължително.',
	) ,
	'clickatell_username' => array(
		'length' => 'Полето с потребителското име на Clickatell трябва да е максимално 50 символа.',
		'required' => 'Полето с потребителското име на Clickatell е задължително.',
	) ,
	'configure_map' => 'Настройки на картата',
	'default_location' => 'Местоположение по подразбиране',
	'default_map_all' => array(
		'alpha_numeric' => 'Полето за цвят не съдържа валидна стойност.',
		'length' => 'Полето за цвят трябва да е не повече от 6 символа.',
		'required' => 'Полето за цвят е задължително.',
	) ,
	'default_map_view' => 'Изглед на картата по подразбиране',
	'default_zoom_level' => 'Ниво на увеличение по подразбиране',
	'download_city_list' => 'Вземи имената на градовете от картата',
	'email_host' => array(
		'length' => 'Порта на mail сървъра е твърде дълъг',
		'numeric' => 'Порта на mail сървъра трябва да съдържа само цифри',
	) ,
	'email_password' => array(
		'length' => 'Полето за парола на мейла трябва да е между 5 и 50 символа.',
		'required' => 'Полето за парола на мейла е задължително.',
	) ,
	'email_port' => array(
		'length' => 'Порта на mail сървъра е твърде дълъг',
		'numeric' => 'Порта на mail сървъра трябва да съдържа само цифри',
	) ,
	'email_servertype' => array(
		'length' => 'Типа на mail сървъра е с грешна дължина.',
		'required' => 'Типа на mail сървъра е задължителен',
	) ,
	'email_username' => array(
		'length' => 'Полето с потребителското име на mail сървъра трябва да е не повече от 50 символа.',
		'required' => 'Полето с потребителското име на mail сървъра е задължително.',
	) ,
	'google_analytics' => array(
		'length' => 'Полето за Google Analytics трябва да съдържа валидно Web Property ID във формата UA-XXXXX-XX.',
	) ,
	'items_per_page' => array(
		'between' => 'Полето за брой записи на страница (сайта) не съдържа валидна стойност.',
		'required' => 'Полето за брой записи на страница (сайта) е задължително.',
	) ,
	'items_per_page_admin' => array(
		'between' => 'Полето за брой записи на страница (администрация) не съдържа валидна стойност.',
		'required' => 'Полето за брой записи на страница (администрация) е задължително.',
	) ,
	'map' => array(
		'default_location' => 'Настройването на доставчика на карта е лесен процес. Изберете доставчик, получете API ключ от техния сайт и го въведете тук',
		'zoom' => 'Ниво на увеличение',
	) ,
	'map_provider' => array(
		'choose' => 'Изберете доставчик за карта',
		'enter_api' => 'Въведете нов API ключ',
		'get_api' => 'Получете API ключ',
		'info' => 'Настройването на доставчика на карта е лесен процес. Изберете доставчик, получете API ключ от техния сайт и го въведете тук',
		'name' => 'Доставчик на карта',
	) ,
	'map_settings' => 'Настройки на картата',
	'multiple_countries' => 'Тази инсталация на Ushahidi важи ли за няколко държави',
	'select_default_location' => 'Моля изберете държава по подразбиране',
	'set_location' => 'Натиснете и преместете картата, за да изберете точното си местоположение',
	'site' => array(
		'allow_clustering' => 'Групирай сигнали на картата',
		'allow_comments' => 'Позволете на потребителите да коментират сигналите',
		'allow_feed' => 'Включете RSS абонамент в сайта',
		'allow_reports' => 'Позволете на потребители да пускат сигнали',
		'api_akismet' => 'Ключ за Akismet',
		'cache_pages' => 'Кеширай страниците',
		'cache_pages_lifetime' => 'Продължителност на кешираните страници',
		'copyright_statement' => 'Съобщение за правата върху сайта',
		'default_category_colors' => 'Цвят по подразбиране за всички категории',
		'display_contact_page' => 'Покажи страницата за контакт',
		'display_howtohelp_page' => 'Покажи страницата "Как да помогнем"',
		'email_alerts' => 'Email за сигнали',
		'email_notice' => '<span>За да получавате сигнали по мейл, моля настройте email акаунта си.</span>',
		'email_site' => 'Email адрес на сайта',
		'google_analytics_example' => 'Web Property ID - формат: UA-XXXXX-XX',
		'items_per_page' => 'Записи на страница - сайт',
		'items_per_page_admin' => 'Записи на страница - администрация',
		'kismet_notice' => 'Предотвратете спам с коментари с <a href="http://akismet.com/" target="_blank">Akismet</a> на Automattic. <BR />Може да получите безплатен API ключ като се регистрирате <a href="http://en.wordpress.com/api-keys/" target="_blank">WordPress.com потребителски акаунт</a>',
		'laconica_configuration' => 'Laconica достъп',
		'laconica_site' => 'Laconica сайт ',
		'language' => 'Език на сайта',
		'message' => 'Съобщение на сайта',
		'name' => 'Име на сайта',
		'share_site_stats' => 'Позволи статистиката (държи се на сървъра на Ushahidi)',
		'tagline' => 'Бележка на сайта',
		'title' => 'Настройки на сайта',
		'twitter_configuration' => 'Twitter думи за търсене',
		'twitter_hashtags' => 'Тагове разделени със запетайка ',
	) ,
	'site_email' => array(
		'email' => 'Email адресът не изглежда да е правилен',
		'length' => 'Полето за email адрес трябва да съдържа между 4 и 100 символа',
	) ,
	'site_name' => array(
		'length' => 'Полето за име на сайта трябва да е между 4 и 50 символа.',
		'required' => 'Полето за име на сайта е задължително.',
	) ,
	'site_tagline' => array(
		'length' => 'Полето за бележката на сайта трябва да съдържа между 3 и 100 символа.',
		'required' => 'Полето за бележката на сайта е задължителна.',
	) ,
	'sms' => array(
		'clickatell_api' => 'Вашият Clickatell API номер',
		'clickatell_check_balance' => 'Проверете вашия Clickatell Credit баланс',
		'clickatell_load_balance' => 'Зареди баланса',
		'clickatell_password' => 'Вашата Clickatell парола',
		'clickatell_text_1' => 'Запишете се за услугите на Clickatell като <a href="https://www.clickatell.com/central/user/client/step1.php?prod_id=2" target="_blank">натиснете тук</a>',
		'clickatell_text_2' => 'Въведете вашата информация за достъп до Clickatell тук',
		'clickatell_username' => 'Вашето Clickatell потребителско име',
		'flsms_description' => 'FrontlineSMS е софтуер с отворен код, който превръща лаптоп или мобилен телефон в централен комуникационен хъб. Когато го инсталирате, програмата ще позволи на потребители да получават и изпращат sms–и на големи групи от хора с мобилни телефони. Натиснете сивата кутия, за да поискате програмата от FrontlineSMS.com',
		'flsms_download' => 'Свалете Frontline SMS и го инсталирайте на вашият компютър',
		'flsms_instructions' => 'Съобщенията получите в FrontlineSMS хъб могат да се синхронизират с Ushahidi. Подробни инструкции как да направите синхронизацията могат да се намерят <strong><a href="http://wiki.ushahididev.com/doku.php?id=how_to_use_ushahidi_alpha#how_to_setup_frontlinesms_to_sync_with_ushahidi" target="_blank">тук</a></strong>. Нужен ви е адресът и ключът по-долу за да синхронизирате с FrontlineSMS',
		'flsms_key' => 'Вашият Ushahidi Sync ключ',
		'flsms_link' => 'FrontlineSMS HTTP Post линк',
		'flsms_synchronize' => 'Синхронизация с Ushahidi',
		'flsms_text_1' => 'Въведете телефонен номер или номера, които да се свържат към Frontline SMS в полето/полетата тук',
		'flsms_text_2' => 'Въведете номер(а) без + или тирета в полетата',
		'option_1' => 'Option 1: Използвайте Frontline SMS',
		'option_2' => 'Option 2: Използвайте Global SMS Gateway',
		'title' => 'Настройки на SMS',
	) ,
	'sms_no1' => array(
		'length' => 'Телефон 1 не изглежда да е валиден',
		'numeric' => 'Телефон 1 трябва да съдържа само цифри',
	) ,
	'sms_no2' => array(
		'length' => 'Телефон 2 е твърде дълъг',
		'numeric' => 'Телефон 2 трябва да съдържа само цифри',
	) ,
	'sms_no3' => array(
		'length' => 'Телефон 3 е твърде дълъг',
		'numeric' => 'Телефон 3 трябва да съдържа само цифри',
	) ,
);
