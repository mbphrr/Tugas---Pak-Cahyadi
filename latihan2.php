<head>
    <title>Menampilkan data</title>
</head>
<body>
<div style="padding-top:13%">
 <table border="1" cellpadding="17" cellspacing="0" align="center" class="db_music">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Playlist</th>
            <th>Judul Playlist</th>
            <th>Pembuat Playlist</th>              
        </tr>
    </thead>
    <?php
require "latihan.php";
    $no = 1;
    $query = mysqli_query($koneksi, 'SELECT * FROM daftarplaylist_1');
    while ($data = mysqli_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $data['id_playlist'] ?></td>
            <td><?php echo $data['judul_playlist'] ?></td>
            <td><?php echo $data['pembuat_playlist'] ?></td>
        </tr>
    <?php } ?>
 </table>
</div>
</body>
</html>