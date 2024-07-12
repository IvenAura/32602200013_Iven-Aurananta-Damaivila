<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="box-name">
        <img src="/assets/css/image/user.png" alt="">
        <div class="nama">Iven Aurananta Damaivila</div>
        <div class="skills">Web Developer</div>
    </div>
    <div class="box-detail">
        <h2>Tentang Saya</h2>
        <p>Lorem ipsum dolor sit amet consectetur,
            adipisicing elit. Consequuntur rerum, nesciunt
            nulla numquam nostrum ab debitis earum expedita
            fugit deserunt quis quasi. Quibusdam inventore
            suscipit quasi culpa, excepturi eius beatae.</p>
        <div class="detail-profile">
            <h2>Detail Profile</h2>
            <div class="form-detail">
                <table border="0">
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>Iven Aurananta Damaivila</td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>19</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>Mahasiswa</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="medsos">
            <h2>Hubungi saya</h2>
            <i class="fa-brands fa-Linkedin fa-lg"></i>
            <i class="fa-brands fa-Instagram fa-lg"></i>
            <i class="fa-brands fa-Facebook fa-lg"></i>
            <i class="fa-brands fa-square-Whatsapp fa-lg"></i>
        </div>
    </div>
</div>
<?= $this->endSection() ?>