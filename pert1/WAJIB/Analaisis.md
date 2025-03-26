# CODE :
-> `nginx.conf`

server {
    listen 80;
    server_name localhost;

    
        root /usr/share/nginx/html;
        index index.html index.htm;

        location / {
            try_files $uri $uri/ =404;
    }
}

# UPDATE 
 location /latihan {

        alias /usr/share/nginx/latihan/;
        index index.html index.htm home.html;
        try_files $uri $uri.html $uri/ =404;
    }

-> `analisis update :`
- menambahkan untuk folder latihan kedalam nginx
# analisis : 
- Konfigurasi ini menetapkan Nginx sebagai web server yang berjalan di port 80 dan melayani permintaan dari localhost. Direktori utama untuk file web adalah */usr/share/nginx/html/*, dengan index.html atau index.htm
- kalau location /, untuk servermencoba menampilkan file yang diminta.

<br>

# CODE :
-> `.env`

COMPOSE_PROJECT_NAME=esgul
REPOSITORY_NAME=pemweb
<br>
IMAGE_TAG=latest

# analisis 

- *compose_project_name* itu adalah nama project docker yang ingin di buat 
-  *repository_name* untuk menyimpan image docker
-  *image_tag* untuk menentukan tag versi image yaitu 'latest'


<br>

# CODE :
-> `docker-compose.yml`

version: '3'

services:

  web:
   image: nginx:latest
   ports:
   - 80:80
   volumes:
   - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf
   - ./src/:/usr/share/nginx/html

# UPDATE 
 - -./latihan:/usr/share/nginx/latihan

`analisis update :`
menambahkan di docker compose yml, harus di samakan dengan yang di nginx nya agar lokasinya terbaca.
 

# analisis 
- *version '3'* : menentukan versi dockernya 
- *services* : mendefinisikan layanan yang mau ingin di jalankan 
- *web* : nama layanana web server yang menggunakan nginx
- *image* : menggunakan nginx versi terbaru 
- *ports* : portnya adalah 80:80 

<br>

# html 
- <a> (tag A) : buat tautan/ link
- (tag H)
- (tag image) : untuk gambar
- (index html) : 
- (div html) : untuk mengelompokan elemen 
- (tag ul) : untuk membuat daftar tidak berurutan, dimana setiap item ditandai dengan simbol
- (tag li) : dipakai didalam tag ul untuk menentukan setiap item yang terdaftar 
- (tag form) : mengelompokan elemen-elemen terkait dalam form 



 # Docker compose 
 -> `Apa itu Docker Compose `
 -  docker compose adalah sebuah alat yang memungkinkan Anda dalam menjalankan aplikasi multi-kontainer environments yang didasarkan pada definisi yang disusun pada file YAML.
 -> `kenapa harus menggunakan `
 -  agar mudah kedepannya, karena si docker ini nih gampang untuk di config, Mempermudah konfigurasi dan deployment aplikasi ,Fleksibel dalam penggunaan, termasuk untuk menjalankan database.
-> `kapan menggunakan docker`
 - terutama jika ingin mengelola banyak layanan dengan efisien.
->`kelebihan`
 - Mengelola banyak container dalam satu perintah (docker-compose up dan docker-compose down)
 - Konfigurasi dalam satu file docker-compose.yml, sehingga lebih rapi dan mudah dipahami.
->`kekurangan`
- aplikasi berat 
  
# nginx 
-> `apa itu nginx`
-Nginx adalah webserver dengan lisensi open-source yang memiliki multi fungsi sebagai proxy IMAP/POP3. Web server Nginx terkenal karena stabil, memiliki tingkat performansi tinggi dan minim mengonsumsi sumber daya.

-> `kekurangan`
- kompatibilitas, performanya di windows tidak sebaik platfrom lain
- Dukungan Komunitas masih belum lengkap 
- jumlah modules dan add-ons juga tidak terlalu kompliy 

->`Kelebihan`
- pengguna resource lebih efisien 
- multifungsi 
- performa yang unggul 

# analisa latihan 

`index.html`
- kode index html ini menggunakan 
- <html>
- <head>
- <body>
- deklarasi menggunakan <!DOCTYPE html>

-> SELAMAT DATANG DI WEBSITE , judul ini menggunakan elemen `h1` dimana sebagai heading utama pada website yang saya buat 
-> selebihnya saya menggunakan elemen `<p>` dimana sebagai paragraf
-> website tidak menggunakan css

`profile.html`
-> kode index html ini menggunakan :
- <html>
- <head>
- <body>
- deklarasi menggunakan <!DOCTYPE html>
  
-> <!DOCTYPE html> → Menentukan bahwa ini adalah dokumen HTML5
`bagian head`
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

`bagian body`
<body>
    <div class="home">
        <h1>HALLO!!</h1>
        <p>Nama Saya Adytia Kusuma Putra </p>
        <p>saya suka bermain musik</p>
        <p>fakultas ilmu komputer </p>
        <p>saya adalah spiderman</p>
    </div>

- <h1> digunakan untuk judul utama 
- <p> digunakan untuk menampilkan paragraf informasi tentang dirimu.

`bagian menampilkan gambar`
<div class="container">
    <h1>Ini saya</h1>
    <img src="../assets/Saya.jpg" width="200px" alt="Sample Image" class="sample-image">
</div>
- <h1>Ini saya</h1> → Menjelaskan bahwa bagian ini menampilkan foto diri.
- <img> digunakan untuk menampilkan gambar dengan ukuran 200px.
- Atribut alt="Sample Image" membantu aksesibilitas dan SEO.
- 

