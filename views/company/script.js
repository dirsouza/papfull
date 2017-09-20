$(function () {
    // Validação
    $('#company').validate({
        'rules': {
            'sname': "required",
            'fname': "required",
            'cnpj': "required",
            'dtopening': "required",
            'zipcode': "required",
            'address': "required",
            'district': "required",
            'city': "required",
            'state': "required",
            'channel': "required",
            'uf': "required",
            'sapcustomer': "required",
            'sapcontract': "required",
            'provider': "required",
            'stc': "required",
            'dtcontract': "required"
        },
        'messages': {
            'sname': "<small><font color='red'>A Razão Social é obrigatória.</font></small>",
            'fname': "<small><font color='red'>O Nome Fantasia é obrigatório.</font></small>",
            'cnpj': "<small><font color='red'>O CNPJ é obrigatório.</font></small>",
            'dtopening': "<small><font color='red'>A Data é obrigatória.</font></small>",
            'zipcode': "<small><font color='red'>O CEP é obrigatório.</font></small>",
            'address': "<small><font color='red'>O Logradouro é obrigatório.</font></small>",
            'district': "<small><font color='red'>O Bairro é obrigatório.</font></small>",
            'city': "<small><font color='red'>A Cidade é obrigatória.</font></small>",
            'state': "<small><font color='red'>O Estado é obrigatório.</font></small>",
            'channel': "<small><font color='red'>O Canal é obrigatório.</font></small>",
            'uf': "<small><font color='red'>A UF é obrigatória.</font></small>",
            'sapcustomer': "<small><font color='red'>O Cliente SAP é obrigatório.</font></small>",
            'sapcontract': "<small><font color='red'>O SAP Contrato é obrigatório.</font></small>",
            'provider': "<small><font color='red'>O Fornecedor é obrigatório.</font></small>",
            'stc': "<small><font color='red'>O STC é obrigatório.</font></small>",
            'dtcontract': "<small><font color='red'>A Data é obrigatória.</font></small>"
        },
        'errorElement': "em",
        'highlight': function (element) {
            $(element).parents(".col-sm-1").addClass("has-error").removeClass("has-success");
            $(element).parents(".col-sm-2").addClass("has-error").removeClass("has-success");
            $(element).parents(".col-sm-3").addClass("has-error").removeClass("has-success");
            $(element).parents(".col-sm-4").addClass("has-error").removeClass("has-success");
            $(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
            $(element).parents(".col-sm-6").addClass("has-error").removeClass("has-success");
            $(element).parents(".col-sm-7").addClass("has-error").removeClass("has-success");
            $(element).parents(".col-sm-8").addClass("has-error").removeClass("has-success");
            $(element).parents(".col-sm-9").addClass("has-error").removeClass("has-success");
            $(element).parents(".col-sm-10").addClass("has-error").removeClass("has-success");
            $(element).parents(".col-sm-11").addClass("has-error").removeClass("has-success");
            $(element).parents(".col-sm-12").addClass("has-error").removeClass("has-success");
        },
        'unhighlight': function (element) {
            $(element).parents(".col-sm-1").addClass("has-success").removeClass("has-error");
            $(element).parents(".col-sm-2").addClass("has-success").removeClass("has-error");
            $(element).parents(".col-sm-3").addClass("has-success").removeClass("has-error");
            $(element).parents(".col-sm-4").addClass("has-success").removeClass("has-error");
            $(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
            $(element).parents(".col-sm-6").addClass("has-success").removeClass("has-error");
            $(element).parents(".col-sm-7").addClass("has-success").removeClass("has-error");
            $(element).parents(".col-sm-8").addClass("has-success").removeClass("has-error");
            $(element).parents(".col-sm-9").addClass("has-success").removeClass("has-error");
            $(element).parents(".col-sm-10").addClass("has-success").removeClass("has-error");
            $(element).parents(".col-sm-11").addClass("has-success").removeClass("has-error");
            $(element).parents(".col-sm-12").addClass("has-success").removeClass("has-error");
        }
    });

    //Date picker
    $('.date-picker').datepicker({
        'format': 'dd/mm/yyyy',
        'language': 'pt-BR',
        'weekStart': 0,
        'todayHighlight': true,
        'todayBtn': 'linked',
        'autoclose': true,
        'orientation': "bottom left"
    });

    //Mask
    $('.date-picker').inputmask('dd/mm/yyyy');
    $('#zipcode').inputmask('99999-999');
    $('#cnpj').inputmask('99.999.999/9999-99');
    $('#cnpjConsult').inputmask('99.999.999/9999-99');
    $('.numeric-text').inputmask('decimal', {rightAlignNumerics: false});

    //Pegar CNPJ
    $('#cnpj').keyup(function () {
        localStorage.setItem('cnpj', this.value);
        $('#cnpjConsult').val(localStorage.getItem('cnpj'));
    });
    localStorage.removeItem('cnpj');

    //File-input
    $("#fileinput").fileinput({
        initialPreview: url,
        initialPreviewAsData: true,
        overwriteInitial: true,
        language: "pt-BR",
        previewFileType: "image",
        browseClass: "btn btn-success",
        showCaption: true,
        showRemove: true,
        showUpload: false,
        browseLabel: "",
        browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
        removeClass: "btn btn-danger",
        removeLabel: "",
        removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
        allowedFileExtensions: ["jpg", "png", "jpeg", "bmp"]
    });
});