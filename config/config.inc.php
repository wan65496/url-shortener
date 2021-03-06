<?php

/* Custom */
define('TOKEN_MIN_LENGTH', 5);
define('TOKEN_MAX_LENGTH', 15);
define('URL_MIN_LENGTH', 1);
define('URL_MAX_LENGTH', 500);

/* Mysql */
/* It is not recommended to use `root` in production environment */
define('DB_HOST', 'us-mysql');
define('DB_PORT', 3306);
define('DB_NAME', 'urlshortener');
define('DB_USER', 'root');
define('DB_PASSWORD', '123456');
define('DB_SHOW_ERROR', false);

/* Redis */
/* Make sure that your Redis only listens to Intranet */
define('REDIS_SCHEME', 'tcp');
define('REDIS_HOST', 'us-redis');
define('REDIS_PORT', 6379);
define('REDIS_SHOW_ERROR', false);

/* Cache */
define('ENABLE_CACHE', true);
define('CACHE_TIMEOUT', 300);
define('CACHE_PREFIX', 'cache');

/* Query Logger */
define('ENABLE_LOG_QUERY', true);

/* Site */
define('BASE_URL', 'http://127.0.0.1'); //make absolute url for SEO and avoid hijack, no '/' at the end
define('WEB_ROOT', __DIR__);
define('FEEDBACK_EMAIL', 'support@newnius.com');

/* Auth */
define('AUTH_CODE_TIMEOUT', 300); // 5 min
define('AUTH_TOKEN_TIMEOUT', 604800); // 7 day

/* Session */
define('ENABLE_MULTIPLE_LOGIN', true);
define('BIND_SESSION_WITH_IP', false);
define('SESSION_TIME_OUT', 1800);// 30 minutes 30*60=1800
define('ENABLE_COOKIE', true);

/* Rate Limit */
define('ENABLE_RATE_LIMIT', false);
define('RATE_LIMIT_PREFIX', 'rl');

/* Email */
define('ENABLE_EMAIL_ANTISPAM', true);
//define('MAXIMUM_EMAIL_PER_IP', 8);
define('MAXIMUM_EMAIL_PER_EMAIL', 5);//last 24 hours
define('SENDGRID_API_KEY', '');
define('EMAIL_FROM', 'service@example.com');

/* OAuth */
define('OAUTH_SITE', 'https://quickauth.newnius.com');
define('OAUTH_CLIENT_ID', 'XgaII6NxeE08LtKB');
define('OAUTH_CLIENT_SECRET', 'L9hdi4dQToM0GsDLtcYYQ3k4ZDEjuGVOtPS3nOVKlo6cxLcVjH9TqvmTBiHAgLp2');


header("content-type:text/html; charset=utf-8");

date_default_timezone_set('Asia/Shanghai');