<a href="<?=base_url('/Anggota/formdataanggota')?>">Tambah data</a>
<table border="1">
    <thead>
        <tr>
            <td>Email</td>
            <td>Nama Lengkap</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Action</td>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($data_anggota as $baris):?>
            <tr>
                <td><?=$baris['email']?></td>
                <td><?=$baris['nama_lengkap']?></td>
                <td><?=$baris['jeniskelamin']?></td>
                <td><?=$baris['alamat']?></td>
                <td><a href="<?=base_url('Anggota/edit/') . $baris['id'] ?>">edit</a></td>
                <td>
                    <form onsubmit="return confirm('Yakin mau di hapus???')" method="post" action="<?=base_url('Anggota/delete')?>">
                        <input type="hidden" name="id" value="<?=$baris['id']?>">
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>