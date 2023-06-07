<?php
include('includes/Config.php');
include('FilterCars.php');
?>

<!DOCTYPE html>

<div class="container">
    <div class="row">
        <div class="col-md-3 mb-5">
            <h3>Prix en euros</h3>
            <input type="hidden" id="hidden_minimum_price" value="0" />
            <input type="hidden" id="hidden_maximum_price" value="6000" />
            <p id="price_show">10-6000</p>
            <div id="price_range"></div>
        </div>
        <div class="col-md-3">
            <h3>Kilométrage</h3>
            <input type="hidden" id="hidden_minimum_km" value="1000" />
            <input type="hidden" id="hidden_maximum_km" value="60000" />
            <p id="km_show">1000-60000</p>
            <div id="km_range"></div>
        </div>
        <div class="col-md-3">
            <h3>Années</h3>
            <input type="hidden" id="hidden_minimum_year" value="2000" />
            <input type="hidden" id="hidden_maximum_year" value="2023" />
            <p id="year_show">2000-2023</p>
            <div id="year_range"></div>
        </div>
        <div class="d-flex col-md-12 justify-content-around ">
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
            let minimum_km = $('#hidden_minimum_km').val();
            let maximum_km = $('#hidden_maximum_km').val();
            let minimum_year = $('#hidden_minimum_year').val();
            let maximum_year = $('#hidden_maximum_year').val();
            $.ajax({
                url: "FilterCars.php",
                method: "POST",
                data: {
                    action: action,
                    minimum_price: minimum_price,
                    maximum_price: maximum_price,
                    minimum_km: minimum_km,
                    maximum_km: maximum_km,
                    minimum_year: minimum_year,
                    maximum_year: maximum_year
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

        $('#km_range').slider({
            range: true,
            min: 10,
            max: 6000,
            values: [10, 6000],
            step: 10,
            stop: function(event, ui) {
                $('#km_show').html(ui.values[0] + ' - ' + ui.values[1]);
                $('#hidden_minimum_km').val(ui.values[0]);
                $('#hidden_maximum_km').val(ui.values[1]);
                filter_data();
            }
        });

        $('#year_range').slider({
            range: true,
            min: 2000,
            max: 2023,
            values: [2000, 2023],
            step: 1,
            stop: function(event, ui) {
                $('#year_show').html(ui.values[0] + ' - ' + ui.values[1]);
                $('#hidden_minimum_year').val(ui.values[0]);
                $('#hidden_maximum_year').val(ui.values[1]);
                filter_data();
            }
        });

    });
</script>