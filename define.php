<?php 

session_start();

	define( 'FACEBOOK_APP_ID', '1901153693451646' );
	define( 'FACEBOOK_APP_SECRET', '880224c79c3791704f6639da868e7945' );
	define( 'FACEBOOK_REDIRECT_URI', 'https://localhost/apifb/obtain_access_token.php' );
	define( 'ENDPOINT_BASE', 'https://graph.facebook.com/v7.0/' );    

	//acessToken
	$accessToken = 'EAAbBFtaPxX4BAMuRHpUwsDwrMNKqYvTSBQlWLWrS2MfctvkP5zgdTwYFdWzF9RsUS8kHdAAFZCkZBYRxEuEfNGBFkdkxT8ZCDe5MfEb3cvvntRIe93Uw95MK5fPioFQ1g3wZCOfGNWT0YSCEtit3x0rNsN4uGSZB85pLN7ZC0zTgZDZD';
	
	// page id
	$pageId = '100322171714946';

	// instagram business account id
	$instagramAccountId = '100322171714946';