import './bootstrap.js';
import '../scss/app.scss';
import Swal from 'sweetalert2'
import 'datatables.net-bs5'
import 'tinymce/tinymce';
import 'tinymce/skins/ui/oxide/skin.min.css';
import 'tinymce/icons/default/icons';
import 'tinymce/themes/silver/theme';
import 'tinymce/models/dom/model';

import.meta.glob([
    '../images/**'
])

window.Swal = Swal;
import _ from "lodash";
import tinymce from "tinymce";

window.Swal.mixin({
    focusCancel: false,
    focusConfirm: false,
    focusDeny: false
})

window.ajaxDefaultErrorCallback = function (result, returnResponse = false) {
    if (result.responseJSON) {
        let message = [];

        if (result.responseJSON.errors) {
            $.each(result.responseJSON.errors, function (key, item) {
                $.each(item, function (key2, m) {
                    message.push(m);
                });
            });
        } else if (result.responseJSON.message) {
            message.push(result.responseJSON.message);
        }

        if (message.length > 0) {

            if (returnResponse)
                return message.join("<br />");

            Swal.fire("", message.join("<br />"), 'error').then(() => {
            });
        }
    }

    return '';
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    },
    beforeSend: function () {
    },
    complete: function () {
    },
    error: window.ajaxDefaultErrorCallback
});

$.extend(true, $.fn.dataTable.defaults, {
    language: {
        url: '/plugins/datatables/tr.json',
    },
    drawCallback: function () {
        if (document.querySelector('.btn-delete')) {
            document.querySelectorAll('.btn-delete').forEach(function (btn, i) {
                btn.addEventListener('click', async function () {
                    let thisEl = this;
                    let id = parseInt(thisEl.getAttribute('data-id')) || 0;
                    let url = thisEl.getAttribute('data-url');

                    if (id <= 0 || url.length <= 0)
                        return false;
                    let datatable = document.querySelector('.table-datatable');
                    window.Swal.fire({
                        title: "Silmek istediğine emin misin?",
                        icon: "question",
                        showCancelButton: true,
                        cancelButtonText: "Hayır",
                        confirmButtonText: "Evet",
                        focusConfirm: true,
                    }).then(async (result) => {
                        if (result.isConfirmed) {
                            await axios.post(url, {
                                _method: 'DELETE',
                            })
                            if (datatable) {
                                $.fn.dataTable.Api('.table-datatable').ajax.reload();
                            }
                        }
                    });
                });
            });
        }
    }
});

window.dropzoneAddedFilesEventHandler = function () {
    document.querySelector('form button[type="submit"]').setAttribute('disabled', 'disabled');
}
window.dropzoneQueueCompleteEventHandler = function () {
    document.querySelector('form button[type="submit"]').removeAttribute('disabled');
}
tinymce.init({
    selector: 'textarea#description',
    skin: false,
    content_css: false,
    menubar: false,
    toolbar: "h1 h2 h3 h4 h5 bold italic blockquote | link | table | removeformat | code | media",
});

//dropzone
window.dropzoneAddedFilesEventHandler = function () {
    document.querySelector('form button[type="submit"]').setAttribute('disabled', 'disabled');
}
window.dropzoneQueueCompleteEventHandler = function () {
    document.querySelector('form button[type="submit"]').removeAttribute('disabled');
}
