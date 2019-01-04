$(function() {
    $(".table_container").niceScroll({
        cursorcolor:	"rgba(25, 44, 69, 0.5)",
        cursorwidth:	"4px",
        cursorborder: 	"1px solid rgba(0, 0, 0, 0.5)",
        cursorborderradius: "4px"
    });
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
                    form: 'employee_add',
                    name: getInputName(i),
                    type: getInputType(i),
                    class: getInputClass(i)
                });

                if (i === 0){
                    // if <td> is cell with ID -> create form
                    $($input).attr('disabled', 'disabled');

                    let $form = $("<form>", {
                        name: 'employee_add',
                        action: '#',
                        method: 'post'
                    });
                    $(tableData[i]).replaceWith($form);
                    $form.append($input);
                } else {
                    $(tableData[i]).replaceWith($input);
                }
            }

            // create new TD into place of the last one
            let $td = $("<td>");

            // create input
            let $input = $("<input>", {
                val: 'Zmień',
                form: 'employee_add',
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
            return 'input_text input_id text-center';
        case 6:
            return 'input_submit';
        default:
            return 'input_text text-center';
    }
}