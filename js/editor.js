 


function editText(element) {

    // alert("OK");
    if (userRole !== 'Admin') return;

    if (element.querySelector('.ql-editor')) {
        return;
    }

    const currentText = element.innerText;

    const existingModal = document.getElementById('editorModal');
    if (existingModal) {
        existingModal.remove();
    }

    const rect = element.getBoundingClientRect();
    const top = rect.top + window.scrollY;
    const left = rect.left + window.scrollX;
    
    const modal = document.createElement('div');
    modal.classList.add('modal', 'fade');
    modal.id = 'editorModal';
    modal.setAttribute('tabindex', '-1');
    modal.setAttribute('role', 'dialog');
    modal.setAttribute('aria-labelledby', 'editorModalLabel');
    modal.setAttribute('aria-hidden', 'true');

    modal.innerHTML = `
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editorModalLabel">Edit Text</h5>
            </div>
            <div class="modal-body">
                <div id="editor-container" style="width: 100%;"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="saveButton"><i class="fa fa-save"></i> Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="cancelButton"><i class="fa fa-times"></i> Cancel</button>
            </div>
        </div>
    </div>
    `;

    document.body.appendChild(modal);

    const modalElement = document.getElementById('editorModal');
    modalElement.style.position = 'absolute';
    modalElement.style.top = `${top}px`;
    modalElement.style.left = `${left}px`;
    modalElement.style.zIndex = 9999;

    const quill = new Quill('#editor-container', {
        theme: 'snow',
        modules: {
            toolbar: [
                ['bold', 'italic', 'underline', 'strike'],
                [{ 'header': 1 }, { 'header': 2 } , { 'header': 3 }],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                ['link', 'image', 'video'],
                ['blockquote', 'code-block'],
                [{ 'align': [] }],
                [{ 'color': [] }, { 'background': [] }],
                ['clean']
            ]
        }
    });

    quill.root.innerHTML = currentText;
    quill.root.style.fontFamily = 'Arial, sans-serif';
    quill.root.style.fontSize = '16px';
    quill.root.style.padding = '10px';
    quill.root.style.backgroundColor = '#ffffff';
    quill.root.style.borderRadius = '8px';

    setTimeout(() => {
        quill.setSelection(0, quill.getLength());
    }, 100);

    $('#editorModal').modal('show');

    const modalBackdrop = document.querySelector('.modal-backdrop');
    if (modalBackdrop) {
        modalBackdrop.style.backgroundColor = 'transparent';
    }

    const modalContent = modal.querySelector('.modal-content');
    modalContent.style.backgroundColor = '#ffffff';

    const toolbar = document.querySelector('.ql-toolbar');
    if (toolbar) {
        toolbar.style.backgroundColor = 'transparent';
        toolbar.style.padding = '5px';
        toolbar.style.margin = '0';
        toolbar.style.border = 'none';
    }

    const toolbarButtons = toolbar.querySelectorAll('.ql-formats button');
    toolbarButtons.forEach(button => {
        button.style.fontSize = '14px';
        button.style.padding = '5px';
        button.style.margin = '0 3px';
    });

    const saveButton = document.getElementById('saveButton');
    const cancelButton = document.getElementById('cancelButton');

    saveButton.style.fontSize = '14px';
    saveButton.style.padding = '5px 10px';
    cancelButton.style.fontSize = '14px';
    cancelButton.style.padding = '5px 10px';

    saveButton.onclick = function () {
        const updatedText = quill.root.innerHTML;
        element.innerHTML = updatedText;
        const classid = element.closest('.item') ?? element.closest('.items') ?? element.closest('.txtmedio') ?? element.closest('.itemsBlog');
        const id = classid.querySelector('input[name="id"]').value;
        const type = element.getAttribute('name') === 'titel' ? 'titel' : 'text';
        updateDatabase(type, updatedText, id, 'updateColumnValues');
        $('#editorModal').modal('hide');
    };

    cancelButton.onclick = function () {
        element.innerHTML = currentText;
        $('#editorModal').modal('hide');
    };
}


function editText2(element) {

    if (userRole !== 'Admin') return;

    if (element.querySelector('textarea')) {
        return;
    }

    const currentText = element.innerText;
    const textarea = document.createElement('textarea');
    textarea.value = currentText;

    textarea.style.width = `${element.offsetWidth}px`;
    textarea.style.height = `${element.offsetHeight}px`;
    textarea.style.resize = 'none';

    textarea.onblur = function () {
        const updatedText = textarea.value;
        element.innerText = updatedText;
        const classid = element.closest('.item') ?? element.closest('.items') ?? element.closest('.txtmedio') ?? element.closest('.itemsBlog');

        const id = classid.querySelector('input[name="id"]').value;

        const type = element.getAttribute('name') === 'titel' ? 'titel' : 'text';

       // if(updatedText === '') return;

        updateDatabase(type, updatedText, id, 'updateColumnValues');


    };

    element.innerHTML = '';
    element.appendChild(textarea);
    textarea.focus();
}


function editText2(element) {

    if (userRole !== 'Admin') return;

    if (element.querySelector('textarea')) {
        return;
    }

    const currentText = element.innerText;
    const textarea = document.createElement('textarea');
    textarea.value = currentText;

    textarea.style.width = `${element.offsetWidth}px`;
    textarea.style.height = `${element.offsetHeight}px`;
    textarea.style.resize = 'none';

    textarea.onblur = function () {
        const updatedText = textarea.value;
        element.innerText = updatedText;
        const classid = element.closest('.item') ?? element.closest('.items') ?? element.closest('.txtmedio') ?? element.closest('.itemsBlog');

        const id = classid.querySelector('input[name="id"]').value;

        const type = element.getAttribute('name') === 'titel' ? 'titel' : 'text';

       // if(updatedText === '') return;

        updateDatabase(type, updatedText, id, 'updateColumnValues');


    };

    element.innerHTML = '';
    element.appendChild(textarea);
    textarea.focus();
}


function convertIconToImage(iconElement, id) {

    if (userRole !== 'Admin') return;

    if (!iconElement) {
        console.error('Invalid icon element');
        return;
    }

    if (typeof html2canvas !== 'undefined') {
        html2canvas(iconElement, {
            backgroundColor: null // يجعل الخلفية شفافة
        }).then(function (canvas) {
            const imgData = canvas.toDataURL("image/png");
            const file = dataURLtoFile(imgData, 'icon.png');
            updateDatabase('image', file, id, 'updateColumnValues');
        }).catch(function (error) {
            console.error('Error converting icon to image:', error);
        });
    } else {
        console.error('html2canvas is not loaded');
    }
}


function dataURLtoFile(dataUrl, filename) {

    if (userRole !== 'Admin') return;

    const arr = dataUrl.split(','),
        mime = arr[0].match(/:(.*?);/)[1],
        bstr = atob(arr[1]),
        n = bstr.length,
        u8arr = new Uint8Array(n);

    let nCopy = n; 
    while (nCopy--) {
        u8arr[nCopy] = bstr.charCodeAt(nCopy);
    }

    return new File([u8arr], filename, {
        type: mime
    });
}




function editImage(element) {

    if (userRole !== 'Admin') return;

    const fileInput = document.createElement('input');
    fileInput.type = 'file';
    fileInput.accept = 'image/*';
    fileInput.onchange = function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                element.src = e.target.result;
                const classid = element.closest('.item') ?? element.closest('.items') ?? element.closest('.itemsBlog');

                const id = classid.querySelector('input[name="id"]').value;

                updateDatabase('image', file, id, 'updateColumnValues');
            };
            reader.readAsDataURL(file);
        }
    };
    fileInput.click();
}


function editIconClass(element) {

    if (userRole !== 'Admin') return;

    let parentItem = element.parentElement;
    while (parentItem && !parentItem.classList.contains('item')) {
        parentItem = parentItem.parentElement;
    }

    if (!parentItem) {
        console.error("Unable to find parent .item element.");
        return;
    }

    if (element.tagName === 'INPUT') {
        return;
    }

    const currentClass = element.className;

    const input = document.createElement('input');
    input.type = 'text';
    input.value = currentClass;
    input.style.width = '200px';

    element.replaceWith(input);
    input.focus();

    input.onblur = function () {
        const newClass = input.value.trim();
        const newIcon = document.createElement('i');
        newIcon.className = newClass;

        input.replaceWith(newIcon);

        newIcon.addEventListener('dblclick', function () {
            editIconClass(newIcon);
        });

        const id = parentItem.querySelector('input[name="id"]').value;

        if(newClass === '') return;

        updateDatabase('titel', newClass, id, 'updateColumnValues');

        convertIconToImage(newIcon, id);

    };

    input.onkeydown = function (event) {
        if (event.key === 'Enter') {
            input.blur();
        }
    };
}


function updateDatabase(type, data, id, job) {

    if (userRole !== 'Admin') return;

    const formData = new FormData();

    if (type === 'text' || type === 'titel') {
        formData.append(type, data);
    } else if (type === 'image') {
        formData.append('image', data);
        formData.append('imageChanged', 'true');
    }

    formData.append('id', id);
    formData.append('job', job);
    formData.append('view', 'cards_'+language);

    fetch('../model/DataManagerController.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            console.log('Update result:', result);
        })
        .catch(error => {
            console.error('Error updating database:', error);
        });
}

function confirmDelete() {
    return confirm("Are you sure you want to delete this record?");
}