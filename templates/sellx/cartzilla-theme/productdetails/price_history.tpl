{block name='productdetails-price-history'}
    {block name='productdetails-price-history-canvas'}
        <div class="chart-container" style="height: 300px;">
            <canvas id="priceHistoryChart"></canvas>
        </div>
    {/block}
    {block name='productdetails-price-history-script'}
        {inline_script}<script>
            var ctx = document.getElementById('priceHistoryChart').getContext('2d'),
                priceHistoryChart = null,
                chartDataTitle = "{lang key='priceFlow' section='productDetails' addslashes=true}";
                chartData = {
                labels:   [],
                datasets: [
                    {
                        label:            "{lang section='productDetails' key='PriceFlowTitle' printf=(string)$Einstellungen.preisverlauf.preisverlauf_anzahl_monate addslashes=true} " + "({JTL\Session\Frontend::getCurrency()->getName()})",
                        backgroundColor:  "rgba(254,105,106,0.2)",
                        borderColor:      "#fe696a",
                        fill:             true,
                        lineTension:      0.3,
                        pointRadius:      3,
                        pointHoverRadius: 6,
                        pointBackgroundColor: "#ffffff",
                        pointBorderColor: "#fe696a",
                        pointHoverBackgroundColor: "#fe696a",
                        data:             []
                    }
                ]
            };

            {foreach array_reverse($preisverlaufData) as $pv}
                chartData.labels.push('{$pv->date}');
                chartData.datasets[0].data.push('{$pv->fPreis}');
                chartDataCurrency = '{$pv->currency}';
                chartDataTooltip = "{lang key='price' addslashes=true}: ";
            {/foreach}
        </script>{/inline_script}
    {/block}
{/block}
