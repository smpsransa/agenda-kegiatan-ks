# Tutorial

## Langkah-langkah
1. menyiapkan alat dan bahan
   ```
   >> cara instan cukup menggunakan xampp
   >> karena sudah terdapat apache2 => sebagai web server
   >> dan sudah terdapat mysql => sebagai rdbms (database)
   ```
2. membuat database beserta tabel data dan relasinya (jika diperlukan)
   * membuat database\
      ![cara membuat database](./screenshot/1.%20cara%20membuat%20database.png)
      1. buka halaman `localhost/phpmyadmin` di browser
      2. klik `new` pada bilah kiri
      3. tulis `nama database` pada kolom input
      4. pilih jenis dukungan format karakter (encoding) sebagai `utf8mb4_general_ci`
      5. klik `create`

      
   * mulai membuat tabel\
     ![cara membuat tabel](./screenshot/2.%20cara%20membuat%20tabel.png)
     1. tentukan `nama tabel` dan masukan pada kolom input
     2. tentukan jumlah kolom dalam tabel
     3. klik `create`
    
   * membuat kolom untuk tabel `agenda`
     * tabel
       | urut         | kolom 1        | kolom 2              | kolom 3              | kolom 4             | kolom 5                 |
       | -------      | -------        | -------              | -------              | -------             | -------                 |
       | nama         | id             | tanggal              | pukul                | tempat              | acara                   |
       | jenis data   | VARCHAR(36)    | DATE                 | TIME                 | TEXT                | TEXT                    |
       | default      | NONE           | CURRENT_TIMESTAMP    | CURRENT_TIMESTAMP    | NONE                | NONE                    |
       | keterangan   | menyimpan uuid | menyimpan tanggal    | menyimpan jam        | menyimpat tempat    | menyimpan ket. kegiatan |
      * format
       ![hasil tabel agenda](./screenshot/3.%20format%20tabel.jpg)
     * hasil
      ![hasil tabel agenda](./screenshot/4.%20hasil%20tabel.jpg)
     * contoh perintah versi `SQL` untuk `membuat tabel beserta kolomnya`
       ```sql
       CREATE TABLE `kegiatan_ks`.`agenda` (`id` VARCHAR(36) NOT NULL , `tanggal` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , `pukul` TIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `tempat` TEXT NOT NULL , `acara` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
       ```

3. membuat struktur program
   ```
   <!-- basic -->
   * index.php           => halaman utama
   * activities.php      => untuk menampilkan tabel kegiatan
   * form_add.php        => untuk form post kegiatan
   * form_edit.php       => untuk form edit kegiatan
   * connection.php      => untuk menyimpan konfigurasi database
   * .env                => untuk menyimpan variable kedalam mesin
   * action              => folder untuk menyimpan aksi yang akan digunakan oleh form

   <!-- tambahan (opsional) -->
   * util                => folder untuk menyimpan utilitas atau program bantuan
   * util/uuid_generator => program bantuan untuk men-generate uuid yang akan digunakan sebagai id
   * util/post_alert     => program bantuan untuk menampilkan informasi jika perintah aksi berhasil dijalankan
   ```