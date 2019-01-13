$(function() {
    $('.role_select_add').selectric({
        customClass: {
            prefix: 'selectric_over'
        }
    });
});

$(function(){
    $('.role_select_add').selectric().on('change', function() {
        $('#select_role_add option').removeAttr('selected');
        $('#select_role_add option[value=' + ($(this).val()) + ']').attr('selected', 'selected');
    });
});

$(function() {
    $('.role_select_modify').selectric();
});

function modifyEmployeeData(id){
    $('#table_employees tbody tr').each(function(){
        let tableLastTd = $(this).find('td').last();
        let tableData = $(this).find('td > span');

        if (tableData.length > 0 && parseInt(tableData[0].innerHTML) === id){
            // found proper 'tr' with employee data

            for (let i = 0; i < tableData.length; i++){
                // for each 'td' replace span to input

                // create input
                let $input = $("<input>", {
                    val: tableData[i].innerHTML,
                    form: 'employee_modify_' + id,
                    name: getInputName(i),
                    type: getInputType(i),
                    class: getInputClass(i)
                });

                if (i === 0){
                    // if <td> is cell with ID -> create form
                    $($input).attr('disabled', 'disabled');

                    let $form = $("<form>", {
                        id: 'employee_modify_' + id,
                        action: 'javascript:showPopup(false, "Błędne dane pracownika.");',
                        method: 'post'
                    });

                    let $input_page = $("<input>", {
                        val: 'presidentEmployees',
                        form: 'employee_modify_' + id,
                        name: 'page',
                        type: 'hidden'
                    });

                    $(tableData[i]).replaceWith($form);
                    $form.append($input);
                    $form.append($input_page);
                } else if (i === 4){
                    let $select = $("<select>", {
                            form: 'employee_modify_' + id,
                            class: 'role_select_modify',
                        });

                    let $option_1 = $("<option>", {
                            val: 'guard',
                            class: 'text-center'
                        });
                    $option_1.append('Strażnik');

                    let $option_2 = $("<option>", {
                        val: 'duty_officer',
                        class: 'text-center'
                    });
                    $option_2.append('Dyżurny');

                    $select.append($option_1);
                    $select.append($option_2);

                    $(tableData[i]).replaceWith($select);
                    $('.role_select_modify').selectric();
                } else {
                    $(tableData[i]).replaceWith($input);
                }
            }

            // create new TD into place of the last one
            let $td = $("<td>");

            // create input
            let $input = $("<input>", {
                val: 'Zapisz',
                form: 'employee_modify_' + id,
                name: 'send',
                type: 'submit',
                class: 'input_submit'
            });

            $td.append($input);

            // replace last <td> content
            $(tableLastTd).replaceWith($td);

        }
    });
}

function getInputName(i){
    let array_of_names = ['id', 'name_surname', 'pesel', 'address', 'role', 'salary', 'send'];
    return array_of_names[i];
}

function getInputType(i){
    return i === 6 ? 'submit' : 'text';
}

function getInputClass(i){
    switch (i){
        case 0:
            return 'input_id text-center';
        case 6:
            return 'input_submit';
        default:
            return 'input_text text-center';
    }
}