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
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../../src/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Bootstrap DatePicker -->
        <script src="../../src/style/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="../../src/style/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js"></script>
        <!-- InputMask -->
        <script src="../../src/plugins/input-mask/jquery.inputmask.js"></script>
        <script src="../../src/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
        <script src="../../src/plugins/input-mask/jquery.inputmask.extensions.js"></script>
        <script src="../../src/plugins/input-mask/jquery.inputmask.numeric.extensions.js"></script>
        <!-- Kartik-V - File-Input -->
        <script src="../../src/style/kartik-v/file-input/js/fileinput.min.js"></script>
        <script src="../../src/style/kartik-v/file-input/js/locales/pt-BR.js"></script>
        <script src="../../src/style/kartik-v/file-input/themes/explorer/theme.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../src/style/template-style/js/adminlte.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../../src/style/template-style/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../src/style/template-style/js/demo.js"></script>
        <script src="../../views/company/script.js"></script>
        <script>
            var url = " <?php
                            if ($company['logo'] !== NULL) {
                                echo '../../src/img/logoCompany/' . $company['logo'];
                            } else {
                                echo '../../src/img/imgPAPFull_default.png';
                            }
                        ?>";
        </script>
    </body>
</html>