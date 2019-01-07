{include file="main.header.tpl"}
    <link rel="stylesheet" type="text/css" href="./styles/css/president.css">
</head>

<body class="h-100">

<header>
    <div class="header_container" class="d-block">
        <div class="w-100 text-center d-table">
            <h1 class="d-table-cell">SYSTEM ADMINISTRACJI WIĘZIENIEM</h1>
        </div>
        <div class="text-center logged_in_header">
            <span>Jesteś zalogowany jako: Paweł Ledwig.</span>
            <span>Wyloguj</span>
        </div>
    </div>
</header>

<div id="content">
    <div class="president_menu h-100 w-100 d-table align-middle small_window_buttons">
        <div class="d-table-cell w-100 align-middle">
            <form class="d-inline" action="#" method="post">
                <input type="submit" value="Więźniowie" class="small_window president_menu_option d-inline-block col-xl-2 col-lg-3 col-md-3 col-sm-3 mx-xl-5 mx-lg-3 mx-md-2 mx-sm-1">
            </form>
            <form class="d-inline" action="president.php" method="post">
                <input type="submit" value="Pracownicy" class="small_window president_menu_option d-inline-block col-xl-2 col-lg-3 col-md-3 col-sm-3 mx-xl-5 mx-lg-3 mx-md-2 mx-sm-1">
                <input type="hidden" name="page" value="presidentEmployees">
            </form>
            <form class="d-inline" action="#" method="post">
                <input type="submit" value="Statystyki" class="small_window president_menu_option d-inline-block col-xl-2 col-lg-3 col-md-3 col-sm-3 mx-xl-5 mx-lg-3 mx-md-2 mx-sm-1">
            </form>
        </div>
    </div>
</div>

<footer class="d-table">
    <span class="w-100 text-center d-table-cell">Created by Paweł Ledwig, 2019</span>
</footer>
</body>
</html>