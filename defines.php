<?php
	session_start();

	define( 'FACEBOOK_APP_ID', '1087403611315059' );
	define( 'FACEBOOK_APP_SECRET', 'f022852eab1b95d99cf5f21cf5f75205' );
	define( 'FACEBOOK_REDIRECT_URI', 'C:\Users\abrah\instagram_scraper\obtaining_access_token.php' );
	define( 'ENDPOINT_BASE', 'https://graph.facebook.com/v5.0/' );

	// accessToken
	$accessToken = 'YOUR-ACCESS-TOKEN-HERE';

	// page id
	$pageId = 'YOUR-PAGE-ID';

	// instagram business account id
	$instagramAccountId = 'YOUR-INSTAGRAM-ACCOUNT-ID';