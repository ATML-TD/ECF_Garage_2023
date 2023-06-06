<?php
include('includes/Config.php');
include('FilterCars.php');
?>

<!DOCTYPE html>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <h3>Prix</h3>
                <input type="hidden" id="hidden_minimum_price" value="0" />
                <input type="hidden" id="hidden_maximum_price" value="6000" />
                <p id="price_show">10euros-6000euros</p>
                <div id="price_range"></div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row filter_data"></div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        filter_data();

        function filter_data() {
            $('.filter_data').html('<div id="loading" style=""></div>');
            let action = 'fetch_data';
            let minimum_price = $('#hidden_minimum_price').val();
            let maximum_price = $('#hidden_maximum_price').val();
            $.ajax({
                url: "FilterCars.php",
                method: "POST",
                data: {
                    action: action,
                    minimum_price: minimum_price,
                    maximum_price: maximum_price
                },
                success: function(data) {
                    $('.filter_data').html(data);
                }
            });
        }

        
        $('.common_selector').click(function() {
            filter_data();
        })

        $('#price_range').slider({
            range: true,
            min: 10,
            max: 6000,
            values: [10, 6000],
            step: 10,
            stop: function(event, ui) {
                $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                $('#hidden_minimum_price').val(ui.values[0]);
                $('#hidden_maximum_price').val(ui.values[1]);
                filter_data();
            }
        });

    });
</script>