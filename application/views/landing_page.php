    <div class="lp-page" id="lp-1">
        <div id="lp-1-container">
            <h1>Selamat Datang di Website<br>Bank Soal dan Materi ITERA</h1>
            <h3>Dapatkan soal dan materi program studimu agar bisa menjadi referensi ketika ujian nanti</h3>
            <div id="start">Mulai cari referensimu</div>
        </div>
        <img src="<?php echo base_url('assets/img/lp_lampu.png') ?>" alt="Welcome"><!-- Diisi dengan gambar lampu pijar -->
    </div>
    <div class="form-container popup" id="formPopup">
        <form class="input-form" id="formContainer" method="POST" action="<?php echo base_url(); ?>">
            <h1>Masukkan Enrollment Key</h1>
            <input type="text" name="enrolment_form" id="enrolment-form">
            <input type="submit" name="submit" value="Masuk">
            <input type="button" id="cancelPopup" value="Batal">
        </form>
    </div>

    <script src="<?php echo base_url('assets/js/landing-page.js')?>"></script>
</body>
</html>