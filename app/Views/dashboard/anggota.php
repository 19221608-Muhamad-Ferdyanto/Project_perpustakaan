<div>
    <h4>Selamat datang Anggota Perpustakaan <?=$anggota['nama_lengkap'] ?? ''?> - 
    

    <ol>
        <h3>Menu Aplikasi</h3>
        
        <li><a href="<?=base_url('bukuanggota')?>">Data Buku</a></li>
        <li><a href="<?=base_url('peminjamananggota')?>">Data Peminjaman</a></li>
        <br>
        <button><a href="<?=base_url('logout')?>">Log Out</a></button>

        
    </ol>
</div>