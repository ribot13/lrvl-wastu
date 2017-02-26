var jenisproduk = function () {
    var handleEvents = function () {
        $('.delete').live('submit', function (e) {
            return confirm("Apakah anda yakin ingin menghapus data ini?");
        });
    };

    return {
        init: function () {
            handleEvents();
        },
        initDT: function () {
            var table = $('.dt-tbl').DataTable({
                responsive: true,
            });
            var buttons = new $.fn.dataTable.Buttons(table, {
                buttons: ['copy', 'excel', 'pdf'],
            }).container().appendTo($('#tbl-buttons'));
        }
    }
}();