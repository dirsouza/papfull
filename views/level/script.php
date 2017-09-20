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
        <!-- iCheck -->
        <script src="../../src/plugins/iCheck/icheck.js"></script>
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
            $(document).ready(function() {                
                // DataTables
                $('#table-levels').DataTable({
                    'responsive': true,
                    'language': {
                        'url': "../../src/style/datatables/media/locale/Portuguese-Brasil.json"
                    }                    
                });

                // Validação
                $('#level-create').validate({
                    'rules': {
                        'level': "required"
                    },
                    'messages': {
                        'level': "<small><font color='red'>O nome do <b>Nível de Acesso</b> é obrigatório.</font></small>"
                    },
                    'errorElement': "em",
                    'highlight': function (element, errorClass, validClass) {
                        $(element).parents(".col-md-12").addClass("has-error").removeClass("has-success");
                    },
                    'unhighlight': function (element, errorClass, validClass) {
                        $(element).parents(".col-md-12").addClass("has-success").removeClass("has-error");
                    }
                });
                
                // Checkbox
                $('input[type="checkbox"].square-green').iCheck({
                    'checkboxClass': 'icheckbox_square-green'
                });
                
                $('input[type="checkbox"].minimal').iCheck({
                    'checkboxClass': 'icheckbox_minimal-blue'
                });
            });
        </script>
        <!-- ./Script -->
    </body>
</html>