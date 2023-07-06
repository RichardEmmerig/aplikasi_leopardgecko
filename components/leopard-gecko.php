<?php
if (isset($_GET["data-gecko"])) {
} else {
?>
    <div>
        <a href="index.php?menu=tambahleopardgecko">Tambah Gecko</a>
    </div>

    <div class="custom-filters">
        <label for="gender-filter">Gender:</label>
        <select id="gender-filter" class="custom-filter">
            <option value="">All</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="class-filter">Class:</label>
        <select id="class-filter" class="custom-filter">
            <option value="">All</option>
            <option value="Tremper">Tremper</option>
            <option value="Bell">Bell</option>
            <option value="AFT">AFT</option>
        </select>

        <label for="price-range-filter">Price Range:</label>
        <select id="price-range-filter" class="custom-filter">
            <option value="">All</option>
            <option value="0-100">$0 - $100</option>
            <option value="100-500">$100 - $500</option>
            <option value="500-1000">$500 - $1000</option>
        </select>
    </div>

    <table id="data-leopard-gecko">
        <thead>
            <tr>
                <th>No</th>
                <th>Picture</th>
                <th>Kode</th>
                <th>Morph</th>
                <th>Class</th>
                <th>Dam</th>
                <th>Sire</th>
                <th>Sex</th>
                <th>D.O.B</th>
                <th>Generasi</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr onclick="viewDetails(1)">
                <td>1</td>
                <td>
                    <div class="image-frame">
                        <img src="assets/images/geckos/1.jpg" alt="">
                    </div>
                </td>
                <td>A01</td>
                <td>Enigma Eclipse</td>
                <td>Tremper</td>
                <td>data DAM</td>
                <td>data SIRE</td>
                <td>Female</td>
                <td>data DOB</td>
                <td>F1</td>
                <td>Rp.200.000</td>
            </tr>
            <tr onclick="viewDetails(2)">
                <td>2</td>
                <td>
                    <div class="image-frame">
                        <img src="assets/images/geckos/2.jpg" alt="">
                    </div>
                </td>
                <td>A02</td>
                <td>Mack Snow</td>
                <td>Tremper</td>
                <td>data DAM</td>
                <td>data SIRE</td>
                <td>Male</td>
                <td>data DOB</td>
                <td>F1</td>
                <td>Rp.250.000</td>
            </tr>
            <tr onclick="viewDetails(3)">
                <td>3</td>
                <td>
                    <div class="image-frame">
                        <img src="assets/images/geckos/3.jpg" alt="">
                    </div>
                </td>
                <td>A03</td>
                <td>Super Snow</td>
                <td>Tremper</td>
                <td>data DAM</td>
                <td>data SIRE</td>
                <td>Female</td>
                <td>data DOB</td>
                <td>F1</td>
                <td>Rp.300.000</td>
            </tr>
            <tr onclick="viewDetails(4)">
                <td>4</td>
                <td>
                    <div class="image-frame">
                        <img src="assets/images/geckos/4.jpg" alt="">
                    </div>
                </td>
                <td>A04</td>
                <td>Tangerine</td>
                <td>Tremper</td>
                <td>data DAM</td>
                <td>data SIRE</td>
                <td>Male</td>
                <td>data DOB</td>
                <td>F1</td>
                <td>Rp.200.000</td>
            </tr>
        </tbody>
    </table>
<?php
}
?>
<script>
    function viewDetails(geckoId) {
        var menu = 'leopard-gecko';
        var url = 'index.php?menu=' + menu + '&data-gecko=' + geckoId;
        console.log(url);
        window.location.href = url;
    }

    // SETUP DATATABLE HERE =================================
    $.fn.dataTable.ext.search.push(
        function(settings, data, dataIndex) {
            var genderFilter = $('#gender-filter').val();
            var classFilter = $('#class-filter').val();
            var priceRangeFilter = $('#price-range-filter').val();

            var gender = data[7]; // Assuming gender is in the 4th column
            var animalClass = data[3]; // Assuming class is in the 5th column
            var price = parseFloat(data[10].replace(/[^0-9.-]/g, '')); // Assuming price is in the 6th column

            // Filter by gender
            if (genderFilter && gender !== genderFilter) {
                return false;
            }

            // Filter by class
            if (classFilter && animalClass !== classFilter) {
                return false;
            }

            // Filter by price range
            if (priceRangeFilter) {
                var range = priceRangeFilter.split('-');
                var minPrice = parseFloat(range[0]);
                var maxPrice = parseFloat(range[1]);
                if (price < minPrice || price > maxPrice) {
                    return false;
                }
            }

            return true;
        }
    );

    var dataleopardgecko = $('#data-leopard-gecko').DataTable({
        pageLength: 5,
        lengthMenu: [5, 10, 25, 50, 100],
    });

    // Move custom filter elements
    $('.custom-filters').insertBefore('#data-leopard-gecko');

    // Trigger table redraw on filter change
    $('.custom-filter').on('change', function() {
        dataleopardgecko.draw();
    });
</script>