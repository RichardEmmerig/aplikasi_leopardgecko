<?php
if (isset($_GET["data-gecko"])) {
    
} else {
?>
    <div>
        <button>Tambah Gecko</button>
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
    $('#data-leopard-gecko').DataTable();
</script>