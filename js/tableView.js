$('.id').hide();
 

$(document).ready(function () {
    if ($('#CliTgn').length) {
        $('#CliTgn').DataTable();
        $('#CliTgn tbody').on('change', '.user-select', function () {
            if ($(this).is(':checked')) {
                $(this).closest('tr').addClass('selected');
            } else {
                $(this).closest('tr').removeClass('selected');
            }
        });

        $('#select-all').on('change', function () {
            let isChecked = $(this).is(':checked');
            $('.user-select').prop('checked', isChecked).change();
        });

        
    } else {
        console.error("Table element not found.");
    }
});
 



$('.btn-edit').click(function () {
    const Id = this.getAttribute('data-id');
    const view = this.getAttribute('data-view');
    if (!Id || !view) {
        console.error('Missing data-id or data-view attribute.');
        return;
    }

    const job = 'getItemById';

    console.log("ID:", Id, "view:", view, "job:", job);
    var newInput = `<input type="hidden" id="idTemporal" name="id" value="${Id}">`;
    $("#job").val('updateColumnValues');
    $('#job').after(newInput);
    $.ajax({
        url: '../model/DataManagerController.php',
        type: 'POST',
        data: {
            id: Id,
            job: job,
            view: view
        },
        success: function (response) {
            try {
                console.log(response);
                const viewData = JSON.parse(response);
                console.log(viewData);
                for (const key in viewData) {
                    if (viewData.hasOwnProperty(key)) {
                        const value = viewData[key];
                        console.log(`Key: ${key}, Value: ${value}`);

                        if(key === "titel")
                        {
  

                            const editorElement_titel = document.querySelector('#quillEditorContainer_titel .ql-editor');
                            if (editorElement_titel) {
                                // console.log('المحتوى الحالي للمحرر:', editorElement_titel.innerHTML);
                                editorElement_titel.innerHTML = value;
                                $("#titel").val(value);

                            }
                                        
                       
                                    
                        }
                         else  if(key === 'text'){
                           
                            const editorElement_text = document.querySelector('#quillEditorContainer_text .ql-editor');
                            if (editorElement_text) {
                                // console.log('المحتوى الحالي للمحرر:', editorElement_text.innerHTML);
                                editorElement_text.innerHTML = value;
                                $("#text").val(value);

                            }
                                        
                
                         }
                        else if(key !== 'image' && key !== "user_password" && key !== "room_password")
                            $("#" + key).val(value);

                        else if(key === 'image')
                        {
                            $("#imagePreview2").attr("src", value);

                        }

                         
                    }
                }
            } catch (error) {
                console.error('Error parsing JSON response:', error);
            }
        },
        error: function (xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });
});


const CliTgn = document.getElementById('CliTgn');
if (CliTgn) {
    const table = $('#CliTgn').DataTable({
        select: true
    });
}

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
