Struktur Dokumen
1. (fldr) assets	-> untuk naro css js web ini dan teman2nya
2. (fldr) req		-> requirement -> untuk naro semua file2 PENTING dan KRUSIAL seperti tag html open, tag head, tag close body dan close html
3. (fldr) section 	-> ini template yang sudah terpisah2, cara pakenya adalah, kamu liat bagian web mana yang kamu mau, cara liatnya adalah dengan akses template-main (localhost/project/tnsfix/template-main). Setelah itu source code tiap bagian bisa diambil di sections
4. (fldr) template-main -> ini adalah templat aslinya
5. (fldr) [nama page] 	-> digunakan agar maintenance SECTION dalam setiap page lebi mudah dan rapi.
6. (fl) [nama page].php	-> digunakan untuk menampung (container) source code setiap page (jika ada 5 page, maka hanya 5 file php disini)
----------------------------------------------------------------------------------------------------
Cara Mengerjakan
1. Menentukan page yang ingin dibangun, buat file containernya (Nomor 6)
2. Masukan file php kedalam file nav (req/nav) (karena file nav akan diinclude kedalam page yang ada di folder utama, maka tidak perlu memasukan ('../')
3. Melihat di template-main ('localhost/project/tnsfix/template-main') dan pilih bagian yang hendak dirangkai
4. Mencari bagian tersebut dalam folder sections dan memasukan codingan ke page file yang sedang dibangun
5. Melakukan perubahan seperti ukuran (col-lg-3 col-lg-3 => col-lg-5 col-lg-1) jika dibutuhkan
6. Menginclude semua file yang terdapat dalam folder req agar css, js, image, dan hal lain bisa diload
----------------------------------------------------------------------------------------------------
Peringatan - Mungkin membantu
Karena awalnya perpisahan web ini menggunakan CI, maka akan ditemukan codingan seperti <?php echo base_url();?>. Codingan tersebut dapat dihilangkan atau menggunakan '../' apabila dibutuhkan
