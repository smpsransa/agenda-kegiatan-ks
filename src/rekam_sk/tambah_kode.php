<a href="../">kembali</a>
<a href="view_code.php">ketersediaan kode</a>
<form action="action/add_code.php" method="POST">
    <fieldset>
        <legend>form standarisasi kode SK</legend>
        <div id="input_code">
                <label for="code">Kode</label><br />
                <input type="text" id="code" name="code" placeholder="420" />
            </div>
            <div id="input_name">
                <label for="name">Nama</label><br />
                <textarea type="text" id="name" name="name" placeholder="PENDIDIKAN"></textarea>
            </div>
            <div id="input_description">
                <label for="description">Deskripsi</label><br />
                <textarea type="text" id="description" name="description" placeholder="informasi mengenai kode sk"></textarea>
            </div>
            <div id="input_more">
                <label for="more">Tambahan</label><br />
                <textarea type="text" id="more" name="more" placeholder="informasi tambahan mengenai sk (opsional)"></textarea>
            </div>
        <br />
        <button type="submit" name="action_add_code">buat kode sk</button>
    </fieldset>
</form>