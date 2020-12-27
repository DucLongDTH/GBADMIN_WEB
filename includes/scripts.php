    <!-- Bootstrap core JavaScript-->
    <script src="/js/jquery-3.5.1.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <!-- Page level custom scripts -->
    <script src="js/sweetalert.min.js"></script>
    <script></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "language": {
                    "lengthMenu": 'Hiển Thị <br>' +
                        '<select  style="width: 150px" > ' +
                        '<option value="5">5</option>' +
                        '<option value="10">10</option>' +
                        '<option value="-1">All</option>' +
                        '</select>',
                    "zeroRecords": "Nothing found",
                    "info": "Trang _PAGE_ của _PAGES_ Trang",
                    "infoEmpty": "Không tìm thấy",
                    "infoFiltered": "",
                    "paginate": {
                        "previous": "prev      ",
                        "next": "            next"
                    },
                    "search": "Tìm Kiếm:"
                }
            });
        });
    </script>