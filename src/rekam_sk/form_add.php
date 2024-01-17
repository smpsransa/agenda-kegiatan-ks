<form action="action/add_activity.php" method="POST">
    <fieldset>
        <legend>form penulisan Surat Keluar</legend>
        <fieldset>
            <legend>waktu</legend>
            <div id="input_tanggal">
                <label for="tanggal">Tanggal</label><br />
                <input type="date" id="tanggal" name="tanggal" />
            </div>
            <div id="input_pukul">
                <label for="pukul">Pukul</label><br />
                <input type="time" id="pukul" name="pukul" />
            </div>
        </fieldset>
        <fieldset>
            <legend>keterangan</legend>
            <div id="input_tempat">
                <label for="tempat">Tempat</label><br />
                <input type="text" id="tempat" name="tempat" placeholder="yogyakarta, taman nasional Gn. Merapi" />
            </div>
            <div id="input_acara">
                <label for="pukul">Acara</label><br />
                <textarea type="text" id="acara" name="acara" placeholder="contoh: diklat ruang publik lestari"></textarea>
            </div>
        </fieldset>
        <br />
        <button type="submit" name="action_add">kirim</button>
    </fieldset>
</form>