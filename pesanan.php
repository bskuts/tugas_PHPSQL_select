<div class="row justify-content-between">
    <div class="col-10"><b>Pesanan</b></div>
    <div class="col-2 d-flex justify-content-end align-items-end">
        <button btn btn-dark btn-sm>add</button>
    </div>
</div>
<hr>
<table class="table table-sm border border-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col" width="5%">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tanggal</th>
            <th scope="col" width="15%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $stmt = "SELECT * FROM Detail_pesanan
        JOIN Pesanan ON Pesanan.Id_pesanan = Detail_pesanan.Id_pesanan 
        JOIN Produk ON Produk.Id_produk = Detail_pesanan.Id_produk 
        JOIN Kategori ON Kategori.Id_kategori = Produk.Id_kategori
        ";
        $datas = mysqli_query($conn, $stmt);
        while ($data = mysqli_fetch_array($datas)) {
        ?>
        
            <tr>
                <th scope="row"><?= $data['Id_produk'] ?></th>
                <td><?= $data['Nama_produk'] ?></td>
                <td><?= $data['Nama_kategori'] ?></td>
                <td><?= $data['Harga'] ?></td>
                <td><?= $data['Jumlah'] ?></td>
                <td><?= $data['Tanggal_pesan'] ?></td>
                <td>
                    <button class="btn btn-dark btn-sm">Edit</button>
                    <button class="btn btn-dark btn-sm">Delete</button>
                </td>
            </tr>
        <?php } ?>
  </tbody>
</table>