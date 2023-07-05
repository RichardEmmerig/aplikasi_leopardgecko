<div>
    <h1>My Farm</h1>
</div>
<div class="myfarm-dashboard">
    <div class="myfarm-content">
        <h3>Leopard Gecko</h3>
        <div class="chart-sex">
            <canvas id="myChart"></canvas>
        </div>
        <a href="">Lihat Semua Data Gecko</a>
    </div>
    <div class="myfarm-content">
        <h3>Projek Breeding</h3>
        <div class="data-breeding">
            <div class="breeding-header">
                <span>Indukan</span>
                <span>Telur</span>
            </div>
            <div>
                <span>M x F</span>
                <span>&#10003</span>
            </div>
            <div>
                <span>M x F</span>
                <span>&#10003</span>
            </div>
            <div>
                <span>M x F</span>
                <span>&#10005;</span>
            </div>
        </div>
        <a href="">Lihat Semua Data Breeding</a>
    </div>
    <div class="myfarm-content">
        <h3>Telur</h3>
        <div class="data-telur">
            <div class="telur-header">
                <span>Clutch</span>
                <span>Indukan</span>
            </div>
            <div>
                <span>C1 - 2 telur</span>
                <span>M x F</span>
            </div>
            <div>
                <span>C2 - 2 telur</span>
                <span>M x F</span>
            </div>
            <div>
                <span>C5 - 1 telur</span>
                <span>M x F</span>
            </div>
        </div>
        <a href="">Lihat Semua Data Telur</a>
    </div>
</div>

<script>
    // Data
    const data = {
        labels: ['Male', 'Female'],
        datasets: [{
            data: [15, 28],
            backgroundColor: ['blue', 'pink']
        }]
    };

    // Options
    const options = {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Gender Distribution'
            }
        }
    };

    // Create the pie chart
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: options
    });
</script>