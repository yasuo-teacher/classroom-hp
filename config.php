<?php

/* =====================================================
▼ CONSTANT
===================================================== */

// LOCATION
define('LOCATION_FILE', "https://" . $_SERVER["HTTP_HOST"].str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace(DIRECTORY_SEPARATOR, '/', realpath(dirname(__FILE__)."/.."))).'/');

// デバイス振り分け
if(!$app) {
	// PC
}else {
	// SP
}


/* =====================================================
▼ SETTINGS
===================================================== */

// 共通
define('SITE_NAME'          , 'classroom vol.3');
define('SITE_KEYWORDS'      , 'classroom,やすお先生,programing,プログラミング,IT,エンジニア,アイドル,ライブ');
define('SITE_DESCRIPTION'   , 'classroom は ITでアイドル業界を盛り上げる為に行われているライブイベントです。');
define('COPYRIGHT'          , 'やすお先生');

// メタ変数
$meta = array(
	'page_name' => SITE_NAME,
	'keywords' => SITE_KEYWORDS,
	'description' => SITE_DESCRIPTION
);

// サイトURL
define('SITE_URL'           , 'https://classroom.yasuo-teacher.com/');

// 電話番号＆FAX
define('PHONE_NUMBER'       , '');

// メール
define('INQUIRY_FROM'       , 'info@yasuo-teacher.com');
define('INQUIRY_TO'         , 'info@yasuo-teacher.com');


/* =====================================================
▼ PAGE
===================================================== */

if($page == 'index') { $meta['page_name'] = SITE_NAME; } // トップページ

?>
