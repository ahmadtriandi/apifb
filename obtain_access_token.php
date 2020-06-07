<?php
include 'define.php';

//load graph-sdk files
require_once __DIR__ . '/vendor/autoload.php';

//facebook cradential array
$creds = array(
    'app_id' => FACEBOOK_APP_ID,
    'app_secret' => FACEBOOK_APP_SECRET,
    'default_graph_version' => 'v7.0',
    
);

// create facebook object
$facebook = new Facebook\Facebook( $creds );

// helper
$helper = $facebook->getRedirectLoginHelper();

// oauth object
$oAuth2Client = $facebook->getOAuth2Client();

if ( isset( $_GET['code'] ) ) { // get access token
    try {
        $accessToken = $helper->getAccessToken();
    } catch ( Facebook\Exceptions\FacebookResponseException $e ) { // graph error
        echo 'Graph returned an error ' . $e->getMessage;
    } catch ( Facebook\Exceptions\FacebookSDKException $e ) { // validation error
        echo 'Facebook SDK returned an error ' . $e->getMessage;
    }

    
    echo '<h1>Long Lived Access Token</h1>';
    print_r( $accessToken );
} else { // display login url
    $permissions = ['public_profile', 'instagram_basic', 'pages_show_list','instagram_manage_insights','instagram_manage_comments','pages_manage_metadata'];
    $loginUrl = $helper->getLoginUrl(FACEBOOK_REDIRECT_URI, $permissions );

    echo '<a href="' . $loginUrl . '">
        Login With Facebook
    </a>';
} 