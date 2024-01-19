<form action="./action/add_agenda.php" method="POST">
    <fieldset>
        <legend>form pencatatan agenda ks</legend>
        <fieldset>
            <legend>waktu</legend>
            <div id="input_tanggal">
                <label for="tanggal">Tanggal</label><br />
                <input type="date" id="tanggal" name="tanggal" />
            </div>
            <fieldset>
                <legend>pukul</legend>
                <div id="input_start">
                    <label for="start">Mulai</label><br />
                    <input type="time" id="start" name="start" />
                </div>
                <div id="input_pukul">
                    <label for="end">Selesai</label><br />
                    <input type="time" id="end" name="end" />
                </div>
            </fieldset>
        </fieldset>
        <fieldset>
            <legend>keterangan</legend>
            <div id="input_tempat">
                <label for="tempat">Tempat</label><br />
                <input type="text" id="tempat" name="tempat" placeholder="yogyakarta, taman nasional Gn. Merapi" />
            </div>
            <div id="input_acara">
                <label for="pukul">Acara</label><br />
                <textarea id="acara" name="acara" placeholder="contoh: diklat ruang publik lestari"></textarea>
            </div>
        </fieldset>
        <br />
        <button type="submit" name="action_add">kirim</button>
        <input type="reset" />
    </fieldset>
</form>