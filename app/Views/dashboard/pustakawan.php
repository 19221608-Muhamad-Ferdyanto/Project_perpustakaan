<div>
    <h4>Selamat datang Pustakawan <?=$pengguna['nama_lengkap'] ?? ''?> - 
    <?php if( ($pengguna['tingkat'] ?? '') == 'PUS'){
            echo "pustakawan";

        }else{
            echo "Administrator";
        } ?></h4>
    
    <ol>
        <h3>Menu Aplikasi</h3>
        <li><a href="<?=base_url('Penerbit')?>">Data Penerbit</a></li>
        <li><a href="<?=base_url('Kategori')?>">Data Kategori</a></li>
        <li><a href="<?=base_url('Anggota')?>">Data Anggota</a></li>
        <li><a href="<?=base_url('Buku')?>">Data Buku</a></li> 
        <li><a href="<?=base_url('Koleksibuku')?>">Data Koleksi Buku</a></li>
        <li><a href="<?=base_url('pengguna')?>">Data Pengguna</a></li>
        <li><a href="<?=base_url('peminjaman')?>">Data Peminjaman</a></li>
        <br>
        <button><a href="<?=base_url('logout')?>">Log Out</a></button>

        
    </ol>
</div>