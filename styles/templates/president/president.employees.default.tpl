{include file="main.header.tpl"}
    <link rel="stylesheet" type="text/css" href="./styles/css/president.css">
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
            <span>Wyloguj</span>
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
            <table id="table_employees" class="w-100">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
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
                            <span class="employee_info">{$i}</span>
                        </td>
                        <td>
                            <span class="employee_info">Maciej Adamczewski</span>
                        </td>
                        <td>
                            <span class="employee_info">94531245205</span>
                        </td>
                        <td>
                            <span class="employee_info">Barycka 12/3, 42-750 Opole</span>
                        </td>
                        <td>
                            <span class="employee_info">Strażnik</span>
                        </td>
                        <td>
                            <span class="employee_info">4250,24zł</span>
                        </td>
                        <td>
                            <form action="javascript:modifyEmployeeData({$i});" method="post" class="d-inline-block">
                                <input type="image" src="./styles/images/icons/edit.png" width="12px" alt="Edytuj dane pracownika">
                            </form>
                            <form action="president.php" method="post" class="d-inline-block" style="margin-left: 16px;">
                                <input type="hidden" name="employee_id" value="{$i}">
                                <input type="image" src="./styles/images/icons/delete.png" width="12px" alt="Zwolnij pracownika">
                            </form>
                        </td>
                    </tr>
                {/for}
                <tr>
                    <td>
                        <form id="employee_add" action="president.php" method="post">+</form>
                        <input form="employee_add" type="hidden" name="page" value="presidentEmployees">
                    </td>
                    <td>
                        <input form="employee_add" name="name_surname" type="text" class="input_text text-center" placeholder="Imię i nazwisko">
                    </td>
                    <td>
                        <input form="employee_add" name="pesel" type="text" class="input_text text-center" placeholder="Pesel">
                    </td>
                    <td>
                        <input form="employee_add" name="address" type="text" class="input_text text-center" placeholder="Adres">
                    </td>
                    <td>
                        <select form="employee_add" class="role_select_add" name="uni">
                            <option value="guard" selected="selected" class="text-center">Strażnik</option>
                            <option value="duty_officer" class="text-center">Dyżurny</option>
                        </select>
                    </td>
                    <td>
                        <input form="employee_add" name="salary" type="text" class="input_text text-center" placeholder="Pensja">
                    </td>
                    <td>
                        <input form="employee_add" name="send" type="submit" class="input_submit" value="Dodaj">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="return_container" class="my-2">
        <a href="president.php"><span>Powrót</span></a>
    </div>
</div>

<footer class="d-table">
    <span class="w-100 text-center d-table-cell">Created by Paweł Ledwig, 2019</span>
</footer>
</body>
<script type="text/javascript" src="./scripts/president.employees.js"></script>
<script type="text/javascript" src="./scripts/jquery.selectric.min.js"></script>
</html>