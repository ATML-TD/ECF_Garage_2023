//Filter cars

$(document).ready(function () {
    

    filter_data();

    function filter_data() {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        $.ajax({
            url: "FilterCars.php",
            method: "POST",
            data: { action: action, minimum_price: minimum_price, maximum_price: maximum_price},
            success: function (data) {
                $('.filter_data').html(data);
                
            }
        });
    }


    $('.common_selector').click(function () {
        filter_data();
    });

    $('#price_range').slider({
        range: true,
        min: 1000,
        max: 65000,
        values: [1000, 65000],
        step: 500,
        stop: function (event, ui) {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });
});
