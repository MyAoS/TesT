/**
 * Created by a.verilhac on 20/05/2015.
 */

$(function () {

    $.material.init();
    $('[data-toggle="tooltip"]').tooltip();
    $('.datetimepicker').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', lang : 'fr', weekStart : 1, cancelText : 'ANNULER' });
    $.datepicker.regional['fr'] = {
        closeText: 'Fermer',
        prevText: '&#x3c;Préc',
        nextText: 'Suiv&#x3e;',
        currentText: 'Courant',
        monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
            'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        monthNamesShort: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Jun',
            'Jul', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
        dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
        dayNamesShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
        dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
        weekHeader: 'Sem',
        //dateFormat: 'dd/mm/yy',
        dateFormat: 'dd/mm/yy HH:MM:ss',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['fr']);
    $(".date_picker").datepicker().attr("readonly", "readonly");
    $("#gallery").unitegallery();
    tinymce.init({
        selector: ".tinymce",
        theme: "modern",
        skin: 'light',
        toolbar: [
            "undo redo | forecolor backcolor | bold italic | link image | alignleft aligncenter alignright | code fullscreen"
        ],
        menubar: false,
        statusbar: false,
        plugins: ["paste", "textcolor", "image", "code","fullscreen"],
        paste_auto_cleanup_on_paste: true,
        paste_preprocess: function (pl, o) {
            o.content = strip_tags(o.content, '');
        }
    });

    /*$('img').okzoom({
     width: 200,
     height: 200,
     round: true,
     background: "#fff",
     backgroundRepeat: "repeat",
     shadow: "0 0 5px #000",
     border: "1px solid black"
     });*/

    setSortable();

    $("#toggle_filter").click(function () {
        if ($("#form_filter").css('display') == 'none') {
            $("#form_filter").show();
            $("#toggle_filter").html('Masquer les filtres');
        } else {
            $("#form_filter").hide();
            $("#toggle_filter").html('Afficher les filtres');
        }
    });

    if ($(".menuParent")) {
        getSubMenu();
    }

    if ($(".catChilds")) {
        getSubCatProduct();
    }

    if ($('.files')) {
        prepareNewFileForm();
    }
});

function isEmpty(el) {
    return !$.trim(el.html())
}

function getSubMenu() {
    $(".menuParent").each(function (index) {
        if (isEmpty($('#menuChilds-' + $(this).attr("data-id")))) {
            $.ajax({
                type: "GET",
                url: $(this).attr("data-url"),
                success: function (data) {
                    $('#menuChilds-' + data.id).html(data.render);
                    getSubMenu();
                }
            });
        }
    });
}

function getSubCatProduct() {
    $(".catChilds").each(function (index) {
        if (isEmpty($(this))) {
            var container = $(this);
            $.ajax({
                type: "GET",
                url: $(this).attr("data-url"),
                success: function (data) {
                    container.html(data.render);
                    setSortable();
                    getSubCatProduct();
                }
            });
        }
    });
}

function prepareNewFileForm(result) {
    var collectionHolder = $('ul.files');
    collectionHolder.find('li.formFile').each(function () {
        addFileFormDeleteLink($(this));
    });

    if (result) {
        $.each(result, function (key, value) {
            var id = addFileForm(collectionHolder, value);
            $(collectionHolder.children()[id]).find('[type=hidden]').val(value);
            var img = $(collectionHolder.children()[id]).find('.formFilePicture');
            img.attr('src', key);
        });
    }
}

function addFileForm(collectionHolder, $newLinkLi) {
    var id = collectionHolder.children().length;
    var prototype = collectionHolder.attr('data-prototype');
    var newForm = prototype.replace(/__name__/g, id);
    console.log(newForm);
    var $newFormLi = $('<li class="formFile"></li>').append(newForm);
    collectionHolder.append($newFormLi);
    addFileFormDeleteLink($newFormLi);
    return id;
}

function addFileFormDeleteLink($fileFormLi) {
    var $removeFormA = $('<div class="form-group"><div class="col-lg-2"></div><div class="col-lg-10"><a class="deleteFile btn btn-danger" href="#"><i class="fa fa-trash-o"></i> Supprimer ce fichier</a></div></div>');
    if ($fileFormLi.find('.deleteFile').length < 1) {
        $fileFormLi.append($removeFormA);
    }
    $removeFormA.on('click', function (e) {
        e.preventDefault();
        $fileFormLi.remove();
    });
}


function strip_tags(str, allowed_tags) {

    var key = '', allowed = false;
    var matches = [];
    var allowed_array = [];
    var allowed_tag = '';
    var i = 0;
    var k = '';
    var html = '';
    var replacer = function (search, replace, str) {
        return str.split(search).join(replace);
    };

    if (allowed_tags) {
        allowed_array = allowed_tags.match(/([a-zA-Z0-9]+)/gi);
    }
    str += '';

    matches = str.match(/(<\/?[\S][^>]*>)/gi);
    for (key in matches) {
        if (isNaN(key)) {
            continue;
        }
        html = matches[key].toString();
        allowed = false;
        for (k in allowed_array) {            // Init
            allowed_tag = allowed_array[k];
            i = -1;

            if (i != 0) {
                i = html.toLowerCase().indexOf('<' + allowed_tag + '>');
            }
            if (i != 0) {
                i = html.toLowerCase().indexOf('<' + allowed_tag + ' ');
            }
            if (i != 0) {
                i = html.toLowerCase().indexOf('</' + allowed_tag);
            }

            if (i == 0) {
                allowed = true;
                break;
            }
        }
        if (!allowed) {
            str = replacer(html, "", str);
        }
    }
    return str;
}


function setSortable() {
    $("table.sortable").rowSorter({
        handler: "td.sorter",
        onDrop: function (tbody, row, index, oldIndex) {
            $.each($(tbody).find("tr"), function (key, value) {
                $.ajax({
                    type: "GET",
                    url: $(value).attr("data-url") + '?value=' + key
                });
            });
        }
    });

}