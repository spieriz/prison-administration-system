{include file="main.header.tpl"}
    <link rel="stylesheet" type="text/css" href="./styles/css/login.css">
</head>

<body class="h-100">
<header>
    <div id="header_name" class="h-100 w-100 text-center d-table">
        <h1 class="d-table-cell align-middle">SYSTEM ADMINISTRACJI WIĘZIENIEM</h1>
    </div>
</header>

<div id="content">
    <div id="main_container">
        <div class="blur_bg col-xl-4 col-lg-6 col-md-8 col-sm-10 m-auto"></div>
        <div id="login_window" class="big_window col-xl-4 col-lg-6 col-md-8 col-sm-10 d-inline-block text-center">
            <form id="login_form" name="login" action="index.php" method="post">
                <h3>PANEL LOGOWANIA</h3>
                <input type="text" name="username" class="col-lg-7 col-md-8 col-sm-10 col-10 input_text" placeholder="Nazwa użytkownika" autocomplete="off">
                <input type="password" name="password" class="col-lg-7 col-md-8 col-sm-10 col-10 input_text" placeholder="Hasło" autocomplete="off">
                <input type="submit" class="col-lg-7 col-md-8 col-sm-10 col-10 input_submit" value="Zaloguj się">
                <input type="hidden" name="user" value="president">
            </form>
        </div>
    </div>
</div>

<footer class="d-table">
    <span class="w-100 text-center d-table-cell">Created by Paweł Ledwig, 2019</span>
</footer>
</body>
</html>