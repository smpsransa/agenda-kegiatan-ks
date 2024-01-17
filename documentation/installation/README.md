# Installation
> ini adalah halaman yang menampilkan tahap cara instalasi atau pemasangan aplikasi dalam sebuah server, ilmu yang digunakan dikenal dengan sebutan `sysadmin`


## cara install di xampp
1. windows\
   a. masuk folder
      ```
      C:\XAMPP\htdocs
      ```
   b. klon repository ini
      ```sh
      git clone https://github.com/smpsransa/agenda-kegiatan-ks.git
      ```
   c. jalankan xampp (apache2 dan mysql)

2. linux\
   a. masuk folder `/opt/lampp/htdocs`
      ```sh
      cd /opt/lampp/htdocs
      ```
   b. klon repository ini
      ```sh
      git clone https://github.com/smpsransa/agenda-kegiatan-ks.git
      ```
   c. jalankan xampp
      ```sh
      sudo /opt/lampp/xampp startapache
      sudo /opt/lampp/xampp startmysql
      ```
## cara install di cpanel
1. buka cpanel\
   ![cpanel](./screenshot/1.%20cpanel.jpg)

2. buka bilah domain\
   ![domain](./screenshot/2.%20domain.png)

3. buat sub-domain\
   ![tambah](./screenshot/3.%20tambah%20domain.png)

4. contoh hasil\
   ![hasil](./screenshot/4.%20contoh%20hasil.jpg)

5. buka file manager atau akses melalui ftp\
   ![file manager](./screenshot/5.%20menuju%20file%20manager.png)

6. hasil\
   ![file manager](./screenshot/6.%20hasil.jpg)
   
7. masuk database\
   ![file manager](./screenshot/7.%20database.png)

8. buat database\
   ![file manager](./screenshot/8.%20db%20create.jpg)
   
10. restore kegiatan_ks.sql ke database melalui phpmyadmin
11. selesai