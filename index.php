<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>Aplikasi Leopard Gecko</title>
</head>

<body>

    <div class="menu">
        <div class="menu-left">
            <!-- <img src="" alt=""> -->
            <span>Aplikasi Leopard Gecko</span>
        </div>
        <div class="menu-middle">
            <ul>
                <a href="index.php">
                    <li>My Farm</li>
                </a>
                <a href="index.php?menu=leopard-gecko">
                    <li>Leopard Gecko</li>
                </a>
                <a href="index.php?menu=projek-breeding">
                    <li>Projek Breeding</li>
                </a>
                <a href="index.php?menu=telur-clutch">
                    <li>Telur Clutch</li>
                </a>
            </ul>
        </div>
        <div class="menu-right">
            <span>button</span>
            <!-- <button><img src="" alt=""></button> -->
            <!-- <div>
                <ul>
                    <a href="index.php?menu=profil">
                        <li>Profil</li>
                    </a>
                    <a href="index.php?menu=pengaturan">
                        <li>Pengaturan</li>
                    </a>
                    <a href="index.php?menu=bantuan">
                        <li>Bantuan</li>
                    </a>
                </ul>
            </div> -->
        </div>
    </div>

    <div class="content">
        <div>
            <h1>My Farm</h1>
        </div>
        <div class="myfarm-dashboard">
            <div class="myfarm-1">
                <h3>Leopard Gecko</h3>
                <div class="chart-sex">
                    <canvas id="myChart"></canvas>
                </div>
                <a href="">Lihat Semua Data Gecko</a>
            </div>
            <div class="myfarm-2">
                <h3>Projek Breeding</h3>
            </div>
            <div class="myfarm-3">
                <h3>Telur</h3>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

</body>

</html>