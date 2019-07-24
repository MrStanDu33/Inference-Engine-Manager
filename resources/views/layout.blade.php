<!--
  _____        __
 |_   _|      / _|
   | |  _ __ | |_ ___ _ __ ___ _ __   ___ ___
   | | | '_ \|  _/ _ \ '__/ _ \ '_ \ / __/ _ \
  _| |_| | | | ||  __/ | |  __/ | | | (_|  __/
 |_____|_| |_|_| \___|_|  \___|_| |_|\___\___|
  ______             _
 |  ____|           (_)
 | |__   _ __   __ _ _ _ __   ___
 |  __| | '_ \ / _` | | '_ \ / _ \
 | |____| | | | (_| | | | | |  __/
 |______|_| |_|\__, |_|_| |_|\___|
                __/ |
               |___/
  __  __
 |  \/  |
 | \  / | __ _ _ __   __ _  __ _  ___ _ __
 | |\/| |/ _` | '_ \ / _` |/ _` |/ _ \ '__|
 | |  | | (_| | | | | (_| | (_| |  __/ |
 |_|  |_|\__,_|_| |_|\__,_|\__, |\___|_|
                            __/ |
                           |___/

https://github.com/mrstandu33/Inference-Engine-Manager
-->

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Inference Engine Manager</title>
		<meta charset="utf-8">

		<meta name="description" content="{{env("APP_DESCRIPTION")}}">
		<meta name="keywords" content="{{env("APP_KEYWORDS")}}">
		<meta name="ICBM" content="{{env("GEO_GPS")}}">
		<meta name="theme-color" content="{{env("APP_COLOR")}}"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<meta property="og:locale" content="{{env("OG_LOCALE")}}">
		<meta property="og:title" content="{{env("OG_NAME")}}">
		<meta property="og:type" content="website">
		<meta property="og:url" content="{{env("OG_URL")}}">
		<meta property="og:site_name" content="{{env("OG_NAME")}}">
		<meta property="og:description" content="{{env("OG_DESCRIPTION")}}">
		<meta property="og:image" content="{{env("OG_IMAGE")}}">

		<meta name="google-site-verification" content="{{env("GOOGLE_SITE_VERIFICATION")}}" />
		<meta name="robots" content="index,follow">

		<meta name="geo.region" content="{{env("GEO_REGION")}}">
		<meta name="geo.placename" content="{{env("GEO_CITY")}}">
		<meta name="geo.position" content="{{env("GEO_GPS")}}">

		<meta name="twitter:card" content="{{env("TWITTER_CARD")}}">
		<meta name="twitter:site" content="{{env("TWITTER_SITE")}}">
		<meta name="twitter:creator" content="{{env("TWITTER_CREATOR")}}">
		<meta name="twitter:title" content="{{env("TWITTER_TITLE")}}">
		<meta name="twitter:description" content="{{env("TWITTER_DESCRIPTION")}}">
		<meta name="twitter:image" content="{{env("TWITTER_IMAGE")}}">

		<link rel="alternate" hreflang="fr" href="{{env("APP_URL")}}" />
		<link rel="shortcut icon" href="{{env("APP_FAVICON")}}"/>

		<!-- starting insertion of HEADER_CODES -->
		@foreach (explode(",", env("HEADER_CODES")) as $code)
			<!-- inserting {{$code}} -->
			{!! env($code) !!}
			<!-- inserted {{$code}} -->
		@endforeach
		<!-- ending insertion of HEADER_CODES -->
	</head>
	<body class="relative brandColorTertiary">
		@yield ("content")
	</body>
</html>