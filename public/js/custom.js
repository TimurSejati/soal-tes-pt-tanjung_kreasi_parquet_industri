$(document).ready(function () {
    $("#kodeBarang").change(function () {
        const val = $(this).val();

        $.ajax({
            url: "ajaxGetBarang",
            type: "GET",
            data: {
                val,
            },
            success: function (data) {
                $("#namaBarang").val(data.success);
            },
        });
    });

    $("#typeMut").change(function () {
        const val = $(this).val();

        $.ajax({
            url: "ajaxGetKodeMutasi",
            type: "GET",
            data: {
                val,
            },
            success: function (data) {
                $("#kodeMutasi").val(data.success);
            },
        });
    });

    $(".countLog").keyup(function () {
        var diameter = $("#diameter").val();
        var panjang = $("#panjang").val();
        var pcs = $("#pcs").val();

        var total =
            (parseInt(diameter) *
                parseInt(diameter) *
                parseInt(panjang) *
                0.7854 *
                parseInt(pcs)) /
            1000000;

        if (!isNaN(total)) {
            $("#volume").val(total.toFixed(2));
        }
    });

    $(".countLumber").keyup(function () {
        var tebal = $("#tebal").val();
        var lebar = $("#lebar").val();
        var panjang = $("#panjang").val();
        var pcs = $("#pcs").val();

        var total = (tebal * lebar * panjang * pcs) / 1000000;

        if (!isNaN(total)) {
            $("#volume2").val(total.toFixed(2));
        }
    });
});
