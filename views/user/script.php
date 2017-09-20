        <!-- jQuery 3 -->
        <script src="../../src/style/jquery/dist/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="../../src/style/jquery-ui/jquery-ui.min.js"></script>
        <!-- jQuery Validation -->
        <script src="../../src/style/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="../../src/style/jquery-validation/dist/localization/messages_pt_BR.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="../../src/style/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- DataTables Bootstrap 3 -->
        <script src="../../src/style/datatables/media/js/jquery.dataTables.js"></script>
        <script src="../../src/style/datatables/media/js/dataTables.bootstrap.min.js"></script>
        <script src="../../src/style/datatables/extensions/Responsive/js/dataTables.responsive.js"></script>
        <script src="../../src/style/datatables/extensions/Responsive/js/responsive.bootstrap.js"></script>
        <!-- InputMask -->
        <script src="../../src/plugins/input-mask/jquery.inputmask.js"></script>
        <script src="../../src/plugins/input-mask/jquery.inputmask.extensions.js"></script>
        <!-- Select2 -->
        <script src="../../src/style/select2/dist/js/select2.full.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../../src/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../src/style/template-style/js/adminlte.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../../src/style/template-style/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../src/style/template-style/js/demo.js"></script>
        
        <!-- Script -->
        <script>
            $(document).ready(function () {                
                // DataTables
                $('#table-users').DataTable({
                    'responsive': true,
                    'language': {
                        'url': "../../src/style/datatables/media/locale/Portuguese-Brasil.json"
                    }                    
                });

                // Validação
                $('#user-create').validate({
                    rules: {
                        'person': "required",
                        'email': {
                            'required': true,
                            'email': true
                        },
                        'login': {
                            'required': true,
                            'minlength': 2
                        },
                        'pass': {
                            'required': true,
                            'rangelength': [5, 10]
                        },
                        'pass_conf': {
                            'required': true,
                            'rangelength': [5, 10],
                            'equalTo': "#pass"
                        },
                        'idlevel': "required"
                    },
                    messages: {
                        'person': "<small><font color='red'>O Nome é obrigatório.</font></small>",
                        'email': "<small><font color='red'>O E-mail é obrigatório.</font></small>",
                        'login': {
                            'required': "<small><font color='red'>O Usuário é obrigatório.</font></small>",
                            'minlength': "<small><font color='red'>Mínimo de 2 caracteres.</font></small>"
                        },
                        'pass': {
                            'required': "<small><font color='red'>A Senha é obrigatória.</font></small>",
                            'rangelength': "<small><font color='red'>Mínimo de 5 e máximo de 10 caracteres.</font></small>"
                        },
                        'pass_conf': {
                            'required': "<small><font color='red'>A Confirmação da Senha é obrigatória.</font></small>",
                            'rangelength': "<small><font color='red'>Mínimo de 5 e máximo de 10 caracteres.</font></small>",
                            'equalTo': "<small><font color='red'>As senhas não são iguais.</font></small>"
                        },
                        'idlevel': "<small><font color='red'>Nível de acesso é obrigatório.</font></small>"
                    },
                    errorElement: "em",
                    highlight: function (element, errorClass, validClass) {
                        $(element).parents(".col-md-3").addClass("has-error").removeClass("has-success");
                        $(element).parents(".col-md-4").addClass("has-error").removeClass("has-success");
                        $(element).parents(".col-md-6").addClass("has-error").removeClass("has-success");
                    },
                    unhighlight: function (element, errorClass, validClass) {
                        $(element).parents(".col-md-3").addClass("has-success").removeClass("has-error");
                        $(element).parents(".col-md-4").addClass("has-success").removeClass("has-error");
                        $(element).parents(".col-md-6").addClass("has-success").removeClass("has-error");
                    }
                });
                
                // Máscaras
                $('#phone').inputmask("(99) 9999-9999");
                $('#cell').inputmask("(99) 99999-9999");
                
                // Select2
                $.fn.select2.defaults.set('amdLanguageBase', 'select2/i18n/');
                $('.select').select2({
                    'language': "pt-BR",
                    'placeholder': "Nível de Acesso"
                });
            });
        </script>
    <!-- ./Script -->
    </body>
</html>