<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="{$page_description|default:"Opis domyślny"}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
	

    <title>{$page_title|default:"Tytuł domyślny"}</title>

	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="{$conf->app_url}/css/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{$conf->app_url}/css/layouts/marketing.css">

    <link rel="stylesheet" href="{$conf->app_url}/css/styles.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

	<script src="{$conf->app_root}/js/jquery.min.js"></script>
	<script src="{$conf->app_root}/js/softscroll.js"></script>
</head>
<body class="sb-nav-fixed">

{block name=content} Domyślna treść zawartości .... {/block}
   
{block name=footer} Domyślna treść stopki .... {/block}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{$conf->app_url}/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>
