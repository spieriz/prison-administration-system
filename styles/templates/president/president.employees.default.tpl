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

<div id="content" class="d-block my-5 h-50">
    <div id="main_container" class="h-100">
        <div class="blur_bg col-lg-8 col-md-10 col-sm-12 col-12 m-auto"></div>
        <div class="table_container big_window h-100 col-lg-8 col-md-10 col-sm-12 col-12 m-auto">
            <table class="w-100">
                <thead>
                    <tr>
                        <th>
                            Imię i nazwisko
                        </th>
                        <th>
                            Pesel
                        </th>
                        <th>
                            Adres
                        </th>
                        <th>
                            Rola
                        </th>
                        <th>
                            Pensja
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
                            Maciej Adamczewski
                        </td>
                        <td>
                            94531245205
                        </td>
                        <td>
                            Barycka 12/3, 42-750 Opole
                        </td>
                        <td>
                            Strażnik
                        </td>
                        <td>
                            4250,24zł
                        </td>
                        <td>
                            [X], [M]
                        </td>
                    </tr>
                {/for}
                </tbody>
            </table>
        </div>
    </div>
</div>

<footer class="d-table">
    <span class="w-100 text-center d-table-cell">Created by Paweł Ledwig, 2019</span>
</footer>
</body>
<script>
    $(function() {
        $(".table_container").niceScroll({
            cursorcolor:	"rgba(25, 44, 69, 0.5)",
            cursorwidth:	"4px",
            cursorborder: 	"1px solid rgba(0, 0, 0, 0.5)",
            cursorborderradius: "4px"
        });
    });
</script>
</html>