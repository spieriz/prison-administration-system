{include file="main.header.tpl"}
    <link rel="stylesheet" type="text/css" href="./styles/css/guard.css">
    <link rel="stylesheet" type="text/css" href="./styles/css/selectric.css">
    <link rel="stylesheet" type="text/css" href="./styles/css/selectric_over.css">
</head>

<body class="h-100">

<header>
    <div class="header_container" class="d-block">
        <div class="w-100 text-center d-table">
            <h1 class="d-table-cell">SYSTEM ADMINISTRACJI WIĘZIENIEM</h1>
        </div>
        <div class="text-center logged_in_header">
            <span>Jesteś zalogowany jako: Paweł Ledwig.</span>
            <a href="index.php" class="logout_href">Wyloguj</a>
        </div>
    </div>
</header>

<div id="page_title" class="d-block w-100 text-center">
    <h2>Lista pracowników</h2>
</div>

<div id="content" class="d-block my-4 h-50">
    <div id="main_container" class="h-100">
        <div class="blur_bg col-lg-8 col-md-10 col-sm-12 col-12 m-auto"></div>
        <div class="table_container big_window h-100 col-lg-8 col-md-10 col-sm-12 col-12 m-auto">
            <table id="table_prisoners" class="w-100">
                <thead>
                    <tr>
                        <th>
                            Numer więźnia
                        </th>
                        <th>
                            Imię i nazwisko
                        </th>
                        <th>
                            Adres
                        </th>
                        <th>
                            Numer celi
                        </th>
                        <th>
                            Izolowany
                        </th>
                        <th>
                            Akcje
                        </th>
                    </tr>
                </thead>
                <tbody>
                {for $i = 0; $i < 30; $i++}
                    <tr>
                        <td>
                            <span class="prisoner_info">{($i + 15) * ($i + 1)}</span>
                        </td>
                        <td>
                            <span class="prisoner_info">Maciej Adamczewski</span>
                        </td>
                        <td>
                            <span class="prisoner_info">Barycka 12/3, 42-750 Opole</span>
                        </td>
                        <td>
                            <span class="prisoner_info">{round($i / 3 + 3) * 2}</span>
                        </td>
                        <td>
                            {if $i % 4 != 0}
                                <span class="prisoner_info">Nie
                            {else}
                                <span class="prisoner_info" style="color: #edd139">Tak
                            {/if}
                                </span>
                        </td>
                        <td>
                            <form action="guard.php" method="post" class="d-inline-block">
                                <input type="hidden" name="page" value="guardChooseCell">
                                <input type="hidden" name="prisoner_id" value="{$i}">
                                <input type="submit" name="send" class="input_submit" value="Zmień celę">
                            </form>
                        </td>
                    </tr>
                {/for}
                <tr>
                    <td>
                        <form id="prisoner_add" action="guard.php" method="post">+</form>
                        <input form="prisoner_add" type="hidden" name="page" value="guardprisoners">
                    </td>
                    <td>
                        <input form="prisoner_add" name="name_surname" type="text" class="input_text text-center" placeholder="Imię i nazwisko">
                    </td>
                    <td>
                        <input form="prisoner_add" name="address" type="text" class="input_text text-center" placeholder="Adres">
                    </td>
                    <td>
                        <input form="prisoner_add" name="salary" type="text" class="input_text text-center" placeholder="Izolowany">
                    </td>
                    <td>
                        <input form="prisoner_add" name="salary" type="text" class="input_text text-center" placeholder="Numer celi">
                    </td>
                    <td>
                        <input form="prisoner_add" name="send" type="submit" class="input_submit" value="Dodaj">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="return_container" class="my-2">
        <a href="guard.php"><span>Powrót</span></a>
    </div>
</div>

<footer class="d-table">
    <span class="w-100 text-center d-table-cell">Created by Paweł Ledwig, 2019</span>
</footer>
</body>
<script type="text/javascript" src="./scripts/guard.prisoners.js"></script>
<script type="text/javascript" src="./scripts/jquery.selectric.min.js"></script>
</html>