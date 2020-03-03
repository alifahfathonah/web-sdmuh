    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets2/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets2/js/sb-admin-2.min.js"></script>


    <script>
        $('.form-check-input').on('click', function() {
            const menuId = $(this).data('menu');
            const roleId = $(this).data('role');


            $.ajax({
                url: "<?= base_url('admin/changeaccess'); ?>",
                type: 'post',
                data: {
                    menuId: menuId,
                    roleId: roleId
                },
                success: function() {
                    document.location.href = "<? base_url('admin/roleaccess/'); ?>" + roleId;
                }
            });
        });
    </script>

    </body>

    </html>