function orakuploader(id, siteurl, path, title, accept, maxupload, attach) {
    const d = new Date();
    let year = d.getFullYear();
    $("#" + id).orakuploader({
        orakuploader_path: siteurl + "public/assets/orakuploader/",

        orakuploader_main_path: siteurl + "public/img/" + year + "/" + path,
        orakuploader_thumbnail_path: siteurl + "public/img/" + year + "/" + path + "/thumb",

        orakuploader_add_image: siteurl + "public/assets/orakuploader/images/add.png",
        orakuploader_add_label: title,
        orakuploader_resize_to: 1920,
        orakuploader_thumbnail_size: 450,
        orakuploader_hide_on_exceed: true,
        orakuploader_attach_images: attach,
        orakuploader_field_name: "" + id + "",
        orakuploader_maximum_uploads: maxupload,
        orakuploader_siteurl: siteurl,
        orakuploader_max_exceeded: function () {
            alert(
                maxupload +
                " Adet resim yükleyebilirsiniz. Lütfen öncelikle yüklü resmi siliniz."
            );
        },
        orakuploader_auto_start: true,
        orakuploader_accept_types: "" + accept + "",
        orakuploader_failed_upload: function (args) {
            alert(args.errors[0]);
        },

        orakuploader_use_sortable: true,
        orakuploader_use_dragndrop: true,
    });
}

function keywordstag(input, tags) {
    var inpt = document.querySelector("#" + input);
    new Tagify(inpt, {
        whitelist: tags,
        maxTags: 20,
        dropdown: {
            maxItems: 30, // <- mixumum allowed rendered suggestions
            classname: "tagify__inline__suggestions", // <- custom classname for this dropdown, so it could be targeted
            enabled: 0, // <- show suggestions on focus
            closeOnSelect: false, // <- do not hide the suggestions dropdown once an item has been selected
        },
    });
}

function tinymceset() {
    if ($(".tynmcearea").length > 0) {
        tinymce.init({
            selector: ".tynmcearea",
            menubar: true,
            theme: "silver",
            toolbar_mode: "wrap",
            language: "tr",
            fontsize_formats: "13px 14px 15px 16px 17px 18px 19px 20px 21px 22px 23px 24px 36px 40px 50px 60px 70px 72px",
            plugins: "print preview paste importcss searchreplace autolink directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons responsivefilemanager",
            toolbar: "undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl responsivefilemanager | tools",
            toolbar_sticky: false,
            image_advtab: true,
            importcss_append: true,
            height: 400,
            min_height: 300,
            theme_advanced_resizing: true,
            theme_advanced_resizing_use_cookie: false,
            image_caption: true,
            quickbars_selection_toolbar: "bold italic | quicklink h2 h3 blockquote quickimage quicktable",
            noneditable_noneditable_class: "mceNonEditable",
            contextmenu: "link  table",
            templates: [{
                title: "Blog Yazısı",
                description: " Blog Şablonu",
                content: 'Top Content Area<br><br><div class="col-md-12"> <img src="image.png" class="img-thumbnail responsive"> </div><br>Content Area<br><br><div class="row d-flex"><div class="col-md-3"><img src="assets/img/Rectangle_bi.png" class="img-thumbnail responsive"><br> </div><div class="col-md-9">Middle Content Area</div><br><br> Bottom Content Area  </div>',
            },],
            style_formats: [{
                title: "Responsive Görsel",
                block: "img",
                classes: "img-thumbnail responsive",
                attributes: {
                    src: "images.png",
                },
            },],
            setup: function (editor) {
                editor.on("Change Keyup", function () {
                    editor.save();
                    //tinyMCE.triggerSave()   <-- also tried
                });
            },
        });
    }
}

function froalaEditor() {
    new FroalaEditor("textarea", {
        charCounterCount: true,
        codeBeautifierOptions: {
            end_with_newline: true,
            indent_inner_html: true,
            extra_liners: "['p', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'blockquote', 'pre', 'ul', 'ol', 'table', 'dl']",
            brace_style: "expand",
            indent_char: " ",
            indent_size: 4,
            wrap_line_length: 0,
        },

        language: "tr",
        dragInline: true,
        attribution: true,
        editorClass: "imerwrapper",

        fontSize: "9 10 12 15 18 22 26 30 34 38 42 46 50 54 58 62 76 128".split(
            " "
        ),
        heightMin: 300,
        heightMax: 800,
        htmlAllowedTags: "a audio b bdi bdo blockquote br cite code dfn div em h1 h2 h3 h4 h5 h6 hr i img li mark ol p pre s small span strike strong sub sup table tbody td tfoot th thead time tr u ul var video wbr".split(
            " "
        ),
        placeholderText: "Bir şeyler yazabilirsiniz...",
        videoResponsive: true,
        paragraphFormat: {
            N: "Normal",
            H2: "Heading 1",
            H3: "Heading 2",
            H4: "Heading 3",
            H5: "Heading 4",
            SPAN: "Span",
        },
    });
}

function sortable(url) {
    $("#rowtable tbody").sortable({
        update: function (event, ui) {
            $(this)
                .children()
                .each(function (index) {
                    let sira = index + 1;
                    let first = $(this).find("td").first().text();
                    let data = [{
                        name: "id",
                        value: first,
                    },
                    {
                        name: "sira",
                        value: sira,
                    },
                    ];
                    console.log(data);
                    $.ajax({
                        url: url,
                        type: "post",
                        data: data,
                        success: function (response) {
                            console.log(response);
                        },
                    });
                });
        },
    });
}

function areamaxlength(id) {
    $("#" + id).maxlength({
        warningClass: "badge badge-primary",
        limitReachedClass: "badge badge-success",
    });
}

function tagify(id) {
    var input1 = document.querySelector("#" + id);
    new Tagify(input1);
}

function datatable(order, type) {
    $(".table").DataTable({
        paging: true,
        responsive: true,
        displayLength: 10,
        order: [
            [order, type]
        ],
    });
}

function draggablechecks() {
    var containers = document.querySelectorAll(".draggable-zone");
    if (containers.length == 1) {
        var swappable = new Sortable.default(containers, {
            draggable: ".draggable",
            handle: ".draggable .draggable-handle",
            mirror: {
                //appendTo: selector,
                appendTo: "body",
                constrainDimensions: true
            }
        });
    }

}

function duplicateRow(siteurl, id, tableName) {
    $.ajax({
        url: "" + siteurl + "yonetim/functions/duplicateRow/" + id + "/" + tableName,
        type: "GET",
        success: function (response) {
            if (response == "true") {
                location.reload();
            } else {
                Swal.fire({
                    text: "Bir hata oluştu!",
                    icon: "error"
                });
            }
        },
    });
}
$(document).ready(() => {
    tinymceset();
    draggablechecks();
    // froalaEditor();
});