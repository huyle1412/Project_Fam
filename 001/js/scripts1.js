// Filter by Price //
$(function () {
    $("#slider-range1").slider({
        range: true,
        min: 0,
        max: 28000,
        values: [0, 28000],
        slide: function (event, ui) {
            $("#amount1").val(ui.values[ 0 ] + "                                 " + ui.values[ 1 ]);
        }
    });
    $("#amount1").val($("#slider-range1").slider("values", 0) +
            "                                 " + $("#slider-range1").slider("values", 1));
});
    