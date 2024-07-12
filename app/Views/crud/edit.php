<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<main>
    <div class="title">
        <h1>Edit Data Mahasiswa</h1>
    </div>
    <div class="from">
        <form action="/crud/editan" method="POST">
            <div class="input">
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" value="<?= $edit['nim']; ?>">
            </div>
            <div class="input">
                <label for="nim">Nim baru</label>
                <input type="text" name="newNim" id="nim">
            </div>
            <div class="input">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="<?= $edit['nama']; ?>">
            </div>
            <div class="input">
                <label for="nama">Nama baru</label>
                <input type="text" name="newNama" id="nama">
            </div>
            <div class="input">
                <label for="prodi">Prodi</label>
                <input type="text" name="prodi" id="prodi" value="<?= $edit['prodi']; ?>">
            </div>
            <div class="input">
                <label for="prodi">Prodi baru</label>
                <input type="text" name="newProdi" id="prodi">
            </div>
            <div class="input">
                <label for="univ">Universitas</label>
                <input type="text" name="univ" id="univ" value="<?= $edit['universitas']; ?>">
            </div>
            <div class="input">
                <label for="univ">Universitas baru</label>
                <input type="text" name="newUniversitas" id="univ">
            </div>
            <div class="input">
                <label for="nomor_handphone">Nomor Handphone</label>
                <input type="text" name="nomor_handphone" id="nomor_handphone" value="<?= $edit['nomor_handphone']; ?>">
            </div>
            <div class="input">
                <label for="nomor_handphone">Nomor Handphone baru</label>
                <input type="text" name="newNomor_handphone" id="nomor_handphone">
            </div>
            <div class="button">
                <button type="submit" value="Submit">Submit</button>
            </div>
        </form>
    </div>
</main>
<?= $this->endSection(); ?>