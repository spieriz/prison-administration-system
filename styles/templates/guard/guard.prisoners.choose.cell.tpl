<link rel="stylesheet" type="text/css" href="./styles/css/guard_choose.css">

<div id="outside_cell_container">
    <div id="content_cell" class="d-block my-4 h-25">
    <div id="main_container_cell" class="h-100">
        <div class="blur_bg h-100 col-lg-6 col-md-8 col-sm-10 col-12 m-auto"></div>
        <div class="table_container big_window h-100 col-lg-6 col-md-8 col-sm-10 col-12 m-auto">
            <table id="table_cells" class="w-100">
                <thead>
        <tr>
            <th>
                Numer celi
            </th>
            <th>
                Pojemność
            </th>
            <th>
                Osadzonych
            </th>
            <th>
                Wolnych miejsc
            </th>
            <th>
                Akcje
            </th>
        </tr>
        </thead>
                <tbody>
                {foreach $cells as $cell}
                    <tr>
                        <td>
                            {$cell.id}
                        </td>
                        <td>
                            {$cell.capacity}
                        </td>
                        <td>
                            {$cell.inmates}
                        </td>
                        <td>
                            {if $cell.free == 0}
                            <span class="prisoner_info" style="color: #ed3a26">{$cell.free}
                            {elseif $cell.capacity == $cell.free}
                            <span class="prisoner_info" style="color: #1eba5a">{$cell.free}
                            {else}
                            <span class="prisoner_info">{$cell.free}
                            {/if}
                            </span>
                        </td>
                        <td>
                            {if $cell.free == 0}
                            <span class="prisoner_info" style="color: #ed3a26">-
                            {else}
                            <form action="guard.php" method="post" class="d-inline-block">
                                <input type="hidden" name="page" value="guardPrisoners">
                                <input type="hidden" name="mode" value="changePrisonersCell">
                                <input type="hidden" name="prisoner_id" value="{$prisoner_id}">
                                <input type="hidden" name="cell_id" value="{$cell.id}">
                                <input type="submit" name="send" class="input_submit" value="Zmień celę">
                            </form>
                            {/if}
                        </td>
                    </tr>
                {/foreach}
        </tbody>
            </table>
        </div>
    </div>
</div>
</div>