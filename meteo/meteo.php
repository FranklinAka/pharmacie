<?php
$title = 'Météo';
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'element' . DIRECTORY_SEPARATOR . 'header.php';
require 'openweather.php';
?>

<link type="text/css" rel="stylesheet" href="/horaire/style.css">

<body>
    <h1 class="container text-center py-5">Météo</h1>
    <table class="table table-striped" id="forecast-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Temps</th>
                <th>Température (°C)</th>
                <th>Météo</th>
            </tr>
        </thead>
        <tbody id="forecast-data"></tbody>
    </table>
</body>

<script>
    var forecastData = <?php echo json_encode($forecastData); ?>;

    var tbody = document.getElementById("forecast-data");

    var today = new Date();
    var todayString = today.toDateString();

    for (var i = 0; i < forecastData.length; i++) {
        var forecast = forecastData[i];
        var date = new Date(forecast['dt'] * 1000);
        var dateString = date.toDateString();
        if (dateString === todayString) {
            var temperature = forecast['main']['temp'];
            var icon = forecast['weather'][0]['icon'];
            var description = forecast['weather'][0]['description'];
            var row = `<tr>
                        <td>${date.toDateString()}</td>
                        <td>${date.toLocaleTimeString()}</td>
                        <td>${temperature}</td>
                        <td>${description}<tr>
                    </tr>`;
            tbody.innerHTML += row;
        }
    }

    // Apply custom styles to table
    var table = document.getElementById("forecast-table");
    table.style.width = "100%";
    table.style.borderCollapse = "collapse";
    table.style.textAlign = "center";
    var th = table.getElementsByTagName("th");
    for (var i = 0; i < th.length; i++) {
        th[i].style.border = "1px solid gray";
        th[i].style.padding = "8px";
    }
</script>
<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'element' . DIRECTORY_SEPARATOR . 'footer.php';
?>