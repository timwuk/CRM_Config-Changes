<?php
return [
    'cacheTimestamp' => 1526548186,
    'database' => [
        'driver' => 'pdo_mysql',
        'host' => 'localhost',
        'port' => '',
        'charset' => 'utf8mb4',
        'dbname' => 'layershiftcrm',
        'user' => 'SpiderM0nkey89',
        'password' => 'Germany1972!'
    ],
	'readableDateFormatDisabled' => true,
    'useCache' => false,
    'recordsPerPage' => 20,
    'recordsPerPageSmall' => 5,
    'applicationName' => 'LayershiftCRM',
    'version' => '5.1.2',
    'timeZone' => 'Europe/London',
    'dateFormat' => 'DD/MM/YYYY',
    'timeFormat' => 'hh:mm a',
    'weekStart' => 1,
    'thousandSeparator' => ',',
    'decimalMark' => '.',
    'exportDelimiter' => ';',
    'currencyList' => [
        0 => 'GBP'
    ],
    'defaultCurrency' => 'GBP',
    'baseCurrency' => 'GBP',
    'currencyRates' => [
        
    ],
    'outboundEmailIsShared' => true,
    'outboundEmailFromName' => 'LayershiftCRM',
    'outboundEmailFromAddress' => 'sales@layershift.com',
    'smtpServer' => 'smtp.mailgun.org',
    'smtpPort' => '25',
    'smtpAuth' => true,
    'smtpSecurity' => '',
    'smtpUsername' => 'postmaster@sugar.layershift.com',
    'smtpPassword' => 'f5e590f27b925f5120ecaf2f78895159-4497bd1d-3541bd2a',
    'languageList' => [
        0 => 'en_GB',
        1 => 'en_US',
        2 => 'es_MX',
        3 => 'cs_CZ',
        4 => 'da_DK',
        5 => 'de_DE',
        6 => 'es_ES',
        7 => 'fr_FR',
        8 => 'id_ID',
        9 => 'it_IT',
        10 => 'lt_LT',
        11 => 'nb_NO',
        12 => 'nl_NL',
        13 => 'tr_TR',
        14 => 'sr_RS',
        15 => 'ro_RO',
        16 => 'ru_RU',
        17 => 'pl_PL',
        18 => 'pt_BR',
        19 => 'uk_UA',
        20 => 'vi_VN',
        21 => 'zh_CN'
    ],
    'language' => 'en_US',
    'logger' => [
        'path' => 'data/logs/espo.log',
        'level' => 'WARNING',
        'rotation' => true,
        'maxFileNumber' => 30
    ],
    'authenticationMethod' => 'Espo',
    'globalSearchEntityList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Lead',
        3 => 'Opportunity'
    ],
    'tabList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Lead',
        3 => 'Opportunity',
        4 => 'Email',
        5 => 'Calendar',
        6 => 'Call',
        7 => 'Task',
        8 => '_delimiter_',
        9 => 'Document',
        10 => 'Campaign',
        11 => 'KnowledgeBaseArticle',
        12 => 'Stream',
        13 => 'User',
        14 => 'Quote',
        15 => 'Product',
        16 => 'Report',
        17 => 'Sub'
    ],
    'quickCreateList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Lead',
        3 => 'Opportunity',
        4 => 'Meeting',
        5 => 'Call',
        6 => 'Task',
        7 => 'Case',
        8 => 'Email'
    ],
    'exportDisabled' => false,
    'adminNotifications' => true,
    'adminNotificationsNewVersion' => true,
    'adminNotificationsCronIsNotConfigured' => true,
    'assignmentEmailNotifications' => false,
    'assignmentEmailNotificationsEntityList' => [
        0 => 'Lead',
        1 => 'Opportunity',
        2 => 'Task',
        3 => 'Case'
    ],
    'assignmentNotificationsEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Task',
        3 => 'Email',
        4 => 'BpmnUserTask'
    ],
    'portalStreamEmailNotifications' => true,
    'streamEmailNotificationsEntityList' => [
        0 => 'Case'
    ],
    'streamEmailNotificationsTypeList' => [
        0 => 'Post',
        1 => 'Status',
        2 => 'EmailReceived'
    ],
    'emailMessageMaxSize' => 10,
    'notificationsCheckInterval' => 10,
    'disabledCountQueryEntityList' => [
        0 => 'Email'
    ],
    'maxEmailAccountCount' => 2,
    'followCreatedEntities' => false,
    'b2cMode' => false,
    'restrictedMode' => false,
    'theme' => 'Hazyblue',
    'massEmailMaxPerHourCount' => 100,
    'personalEmailMaxPortionSize' => 10,
    'inboundEmailMaxPortionSize' => 20,
    'authTokenLifetime' => 0,
    'authTokenMaxIdleTime' => 120,
    'userNameRegularExpression' => '[^a-z0-9\\-@_\\.\\s]',
    'addressFormat' => 1,
    'displayListViewRecordCount' => true,
    'dashboardLayout' => [
        0 => (object) [
            'name' => 'My Espo',
            'layout' => [
                0 => (object) [
                    'id' => 'default-activities',
                    'name' => 'Activities',
                    'x' => 2,
                    'y' => 2,
                    'width' => 2,
                    'height' => 4
                ],
                1 => (object) [
                    'id' => 'default-stream',
                    'name' => 'Stream',
                    'x' => 0,
                    'y' => 0,
                    'width' => 2,
                    'height' => 4
                ]
            ]
        ]
    ],
    'calendarEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Task'
    ],
    'activitiesEntityList' => [
        0 => 'Meeting',
        1 => 'Call'
    ],
    'historyEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Email'
    ],
    'lastViewedCount' => 20,
    'cleanupJobPeriod' => '1 month',
    'cleanupActionHistoryPeriod' => '15 days',
    'cleanupAuthTokenPeriod' => '1 month',
    'currencyFormat' => 2,
    'currencyDecimalPlaces' => 2,
    'aclStrictMode' => false,
    'aclAllowDeleteCreated' => false,
    'inlineAttachmentUploadMaxSize' => 20,
    'textFilterUseContainsForVarchar' => false,
    'isInstalled' => true,
    'siteUrl' => 'https://crm.layershift.com:443',
    'passwordSalt' => '676d08e163c3fa25',
    'cryptKey' => 'd229433cb34691bfd3bb44d26fb95262',
    'defaultPermissions' => [
        'user' => 10000,
        'group' => 1003
    ],
    'adminPanelIframeUrl' => 'https://s.espocrm.com/?advanced-pack=94bea0a5a1e8f310892c6083fa6e8b7f',
    'companyLogoId' => '5af59e493f02c9ed7',
    'companyLogoName' => 'Capturew.PNG',
    'userThemesDisabled' => true,
    'avatarsDisabled' => false,
    'dashletsOptions' => (object) [
        
    ],
    'latestVersion' => '5.1.2'
];
?>