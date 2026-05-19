

## 58

## 3.1.3 Penyelesaian Metode Fuzzy Logic
Untuk  menentukan status  perkembangan  anak  usia  dini  yang  sebaiknya
dipilih dengan  menggunakan  metode Fuzzy  Logic. Di  awal  dengan  ditentukan
variabel-variabel input dan output yang akan digunakan, antara lain:
## 1. Variabel Input
a. Variabel Psikokognitif dengan  semesta  pembicaraan  mulai  dari  0
sampai dengan 100 (dalam satuan poin).
b. Variabel  Kognitif dengan semesta pembicaraan mulai dari 0 sampai
dengan 100 (dalam satuan poin).
c. Variabel Sosial Emosional dengan semesta pembicaraan mulai dari 0
sampai dengan 100 (dalam satuan poin).

## 2. Variabel Output
a. Variabel Berkembang dengan semesta pembicaraan mulai dari 0 sampai
dengan 100 (dalam satuan poin).
b. Variabel Perlu  Stimulasi dengan  semesta  pembicaraan  mulai  dari  0
sampai dengan 100 (dalam satuan poin).
## Rules:
Adapun rules yang digunakan pada penelitian ini ditentukan dengan penilaian pada
variabel input adalah sebagai berikut:
a. Kognitif


## 59

## Tabel 3.1 Variabel Kognitif
## Kognitif Nilai
## Tinggi ≥ 80 – ≤ 100
## Sedang = 60
## Rendah 0 – ≤ 40
Dengan kurva sebagai berikut:

## Gambar 3.3 Variabel Kognitif

b. Psikomotorik
## Tabel 3.2 Variabel Psikokognitif
## Psikomotorik Nilai
## Terampil ≥ 80 – ≤ 100
## Belum Terampil 0 – ≤ 40
Dengan kurva sebagai berikut:

## 60


## Gambar 3.4 Variabel Psikomotorik

c. Sosial Emosional
## Tabel 3.3 Variabel Sosial Emosional
## Sosial Emosional Nilai
## Sangat Baik ≥ 60 – ≤ 100
## Baik = 50
## Butuh Bimbingan 0 – ≤ 40
Dengan kurva sebagai berikut:

## Gambar 3.5 Variabel Sosial Emosional

## 61

Selanjutnya dilakukan proses perhitungan menggunakan metode fuzzy logic
dengan rules sebagai berikut:
## Tabel 3.4 Tabel Rules
## Kode Rules Keterangan
## [R1]
Jika kognitif rendah, psikomotorik belum terampil, dan sosial
emosional butuh bimbingan, maka perlu stimulasi.
## [R2]
Jika kognitif rendah, psikomotorik belum terampil, dan sosial
emosional baik, maka perlu stimulasi.
## [R3]
Jika  kognitif rendah, psikomotorik terampil,  dan  sosial
emosional butuh bimbingan, maka perlu stimulasi.
## [R4]
Jika kognitif sedang, psikomotorik belum terampil, dan sosial
emosional butuh bimbingan, maka perlu stimulasi.
## [R5]
Jika kognitif sedang, psikomotorik belum terampil, dan sosial
emosional baik, maka perlu stimulasi.
## [R6]
Jika kognitif rendah, psikomotorik terampil,  dan  sosial
emosional baik, maka perlu stimulasi.
## [R7]
Jika kognitif rendah, psikomotorik belum terampil, dan sosial
emosional sangat baik, maka perlu stimulasi.
## [R8]
Jika kognitif tinggi, psikomotorik belum terampil,  dan  sosial
emosional butuh bimbingan, maka perlu stimulasi.
## [R9]
Jika  kognitif tinggi, psikomotorik belum terampil,  dan  sosial
emosional baik, maka perlu stimulasi.
## [R10]
Jika  kognitif sedang, psikomotorik terampil,  dan  sosial
emosional butuh bimbingan, maka berkembang.
## [R11]
Jika  kognitif sedang, psikomotorik terampil,  dan  sosial
emosional baik, maka berkembang.
## [R12]
Jika kognitif tinggi, psikomotorik terampil, dan sosial emosional
butuh bimbingan, maka berkembang.
## [R13]
Jika kognitif sedang, psikomotorik belum terampil, dan sosial
emosional sangat baik, maka berkembang.

## 62

## [R14]
Jika  kognitif tinggi, psikomotorik belum terampil,  dan  sosial
emosional sangat baik, maka berkembang.
## [R15]
Jika kognitif rendah, psikomotorik belum terampil, dan sosial
emosional sangat baik, maka berkembang.
## [R16]
Jika  kognitif sedang, psikomotorik terampil,  dan  sosial
emosional sangat baik, maka berkembang.
## [R17]
Jika kognitif tinggi, psikomotorik terampil, dan sosial emosional
baik, maka berkembang.
## [R18]
Jika kognitif tinggi, psikomotorik terampil, dan sosial emosional
sangat baik, maka berkembang.
Selanjutnya, dilakukan proses perhitungan, sebagai berikut:
## 1. Fuzzifikasi
a. Variabel Kognitif
Input kognitif bernilai 72 berada pada irisan himpunan sedang dan tinggi.
## 휇푟푒푛푑푎ℎ(푥)={
## 60 − 푥
## 0;
## 60 − 40
## 1
## ;
## ;
## (
## 푥≥60
## 40≤푥≤60
## 푥≤40
## )

## 휇푠푒푑푎푛푔
## (
## 푥
## )
## =
## {
## 푥 − 40
## 60 − 40
## 80 − 푥
## 80 − 60
## ;
## (
## 푥≤40 표푟 푥≥80
## 40≤푥≤60
## 60≤푥≤80
## )

## 휇푡푖푛푔푔푖
## (
## 푥
## )
## ={
## 푥 − 60
## 0
## 80 − 60
## 1
## ;
## ;
## (
## 푥≤60
## 60≤푥≤80
## 푥≥80
## )


μrendah (72) = 0
μsedang (72) = (80 – 72)/(80 – 60) = 8/20 = 0,4
μtinggi (72) = (72 – 60)/(80 – 60) = 12/20 = 0,6



## 63

b. Variabel Psikomotorik
Input psikomotorik bernilai 50 berada pada irisan himpunan belum terampil dan
terampil.
## 휇푏푒푙푢푚 푡푒푟푎푚푝푖푙(푥)={
## 80 − 푥
## 0;
## 80 − 40
## 1
## ;
## ;
## (
## 푥≥80
## 40≤푥≤80
## 푥≤40
## )

## 휇푡푒푟푎푚푝푖푙(푥)={
## 푥 − 40
## 0;
## 80 − 40
## 1
## ;
## ;
## (
## 푥≤80
## 40≤푥≤80
## 푥≥80
## )


μbelum terampil (50) = (80 – 50)/(80 – 40) = 30/40 = 0,75
μterampil (50) = (50 – 40)/(80 – 40) = 10/40 = 0,25

c. Variabel Sosial Emosional
Input sosial emosional bernilai 58 berada pada irisan himpunan baik dan sangat
baik.
## 휇푏푢푡푢ℎ 푏푖푚푏푖푛푔푎푛(푥)={
## 50 − 푥
## 0;
## 50 − 40
## 1
## ;
## ;
## (
## 푥≥50
## 40≤푥≤50
## 푥≤40
## )

## 휇푏푎푖푘
## (
## 푥
## )
## =
## {
## 푥 − 40
## 50 − 40
## 60 − 푥
## 60 − 50
## ;
## (
## 푥≤40 표푟 푥≥60
## 40≤푥≤50
## 50≤푥≤60
## )

## 휇푠푎푛푔푎푡 푏푎푖푘
## (
## 푥
## )
## ={
## 푥 − 50
## 0;
## 60 − 50
## 1
## ;
## ;
## (
## 푥≤50
## 50≤푥≤60
## 푥≥60
## )


μbutuh bimbingan (58) = 0
μbaik (58) = (60 – 58)/(60 – 50) = 2/10 = 0,2
μsangat baik (58) = (58 – 50)/(60 – 50) = 8/10 = 0,8

## 64

d. Variabel Output
## 휇푝푒푟푙푢 푠푡푖푚푢푙푎푠푖(푥)={
## 70 − 푧
## 0;
## 70 − 50
## 1
## ;
## ;
## (
## 푧≥70
## 50≤푧≤70
## 푧≤50
## )

## 휇푏푒푟푘푒푚푏푎푛푔(푥)={
## 푧 − 50
## 0;
## 70 − 50
## 1
## ;
## ;
## (
## 푧≤50
## 50≤푧≤70
## 푧≥70
## )


## 2. Inferensi
## Aturan (rules):
[R1] Jika kognitif rendah, psikomotorik belum terampil, dan sosial emosional
butuh bimbingan, maka perlu stimulasi.
α-predikat
## 1
= μrendah (X) ∩ μbelum terampil (X) ∩ μbutuh bimbingan (X)
= min (μrendah (72); μbelum terampil (50); μbutuh bimbingan
## (58))
= min (0; 0,75; 0)
## = 0

[R2] Jika kognitif rendah, psikomotorik belum terampil, dan sosial emosional
baik, maka perlu stimulasi.
α-predikat
## 1
= μrendah (X) ∩ μbelum terampil (X) ∩ μbaik(X)
= min (μrendah (72); μbelum terampil (50); μbaik (58))
= min (0; 0,75; 0,2)
## = 0

[R3] Jika kognitif rendah, psikomotorik terampil, dan sosial emosional butuh
bimbingan, maka perlu stimulasi.

## 65

α-predikat
## 1
= μrendah (X) ∩ μterampil (X) ∩ μbutuh bimbingan (X)
= min (μrendah (72); μterampil (50); μbutuh bimbingan (58))
= min (0; 0,25; 0)
## = 0

[R4] Jika kognitif sedang, psikomotorik belum terampil, dan sosial emosional
butuh bimbingan, maka perlu stimulasi.
α-predikat
## 1
= μsedang (X) ∩ μbelum terampil (X) ∩ μbutuh bimbingan (X)
= min (μsedang (72); μsedang berproses (50); μbutuh bimbingan
## (58))
= min (0,4; 0,75; 0)
## = 0

[R5] Jika kognitif sedang, psikomotorik belum terampil, dan sosial emosional
baik, maka perlu stimulasi.
α-predikat
## 1
= μsedang (X) ∩ μbelum terampil (X) ∩ μbaik (X)
= min (μsedang (72); μ μbelum terampil (50); μbaik (58))
= min (0,4; 0,75; 0,2)
## = 0,2

[R6] Jika  kognitif rendah, psikomotorik terampil,  dan  sosial  emosional baik,
maka perlu stimulasi.
α-predikat
## 1
= μrendah (X) ∩ μterampil (X) ∩ μbaik (X)
= min (μrendah (72); μterampil (50); μbaik (58))
= min (0; 0,25; 0,2)
## = 0


## 66

[R7] Jika kognitif rendah, psikomotorik belum terampil, dan sosial emosional
sangat baik, maka perlu stimulasi.
α-predikat
## 1
= μrendah (X) ∩ μ μbelum terampil (X) ∩ μsangat baik (X)
= min (μrendah (72); μ μbelum terampil (50); μsangat baik (58))
= min (0; 0,75; 0,8)
## = 0

[R8] Jika  kognitif tinggi, psikomotorik belum terampil,  dan  sosial  emosional
butuh bimbingan, maka perlu stimulasi.
α-predikat
## 1
= μtinggi (X) ∩ μ μbelum terampil (X) ∩ μbutuh bimbingan (X)
= min (μtinggi (72); μ μbelum terampil (50); μbutuh bimbingan
## (58))
= min (0,6; 0,75; 0)
## = 0

[R9] Jika kognitif tinggi, psikomotorik belum terampil, dan sosial emosional baik,
maka perlu stimulasi.
α-predikat
## 1
= μtinggi (X) ∩ μs μbelum terampil (X) ∩ μbaik (X)
= min (μtinggi (72); μbelum terampil (50); μaik (58))
= min (0,6; 0,75; 0,2)
## = 0,2

[R10] Jika kognitif sedang, psikomotorik terampil, dan sosial emosional butuh
bimbingan, maka berkembang.
α-predikat
## 1
= μsedang (X) ∩ μterampil (X) ∩ μbutuh bimbingan (X)
= min (μsedang (72); μterampil (50); μbutuh bimbingan (58))
= min (0,4; 0,25; 0)

## 67

## = 0

[R11] Jika kognitif sedang, psikomotorik terampil, dan sosial emosional baik,
maka berkembang.
α-predikat
## 1
= μsedang (X) ∩ μterampil (X) ∩ μbaik (X)
= min (μsedang (72); μterampil (50); μbaik (58))
= min (0,4; 0,25; 0,2)
## = 0,2

[R12] Jika kognitif tinggi, psikomotorik terampil, dan sosial emosional butuh
bimbingan, maka berkembang.
α-predikat
## 1
= μtinggi (X) ∩ μterampil (X) ∩ μbutuh bimbingan (X)
= min (μtinggi (72); μterampil (50); μbutuh bimbingan (58))
= min (0,6; 0,25; 0)
## = 0

[R13] Jika kognitif sedang, psikomotorik belum terampil, dan sosial emosional
sangat baik, maka berkembang.
α-predikat
## 1
= μsedang (X) ∩ μbelum terampil (X) ∩ μsangat baik (X)
= min (μsedang (72); μbelum terampil (50); μsangat baik (58))
= min (0,4; 0,75; 0,8)
## = 0,4

[R14] Jika kognitif tinggi, psikomotorik belum terampil, dan sosial emosional
sangat baik, maka berkembang.
α-predikat
## 1
= μtinggi(X) ∩ μbelum terampil (X) ∩ μsangat baik (X)
= min (μtinggi (72); μbelum terampil (50); μsangat baik (58))

## 68

= min (0,6; 0,75; 0,8)
## = 0,6

[R15] Jika kognitif rendah, psikomotorik belum terampil, dan sosial emosional
sangat baik, maka berkembang.
α-predikat
## 1
= μrendah (X) ∩ μbelum terampil X) ∩ μsangat baik (X)
= min (μrendah (74); μbelum terampil (50); μsangat baik (58))
= min (0; 0,75; 0,8)
## = 0

[R16] Jika kognitif sedang, psikomotorik terampil, dan sosial emosional sangat
baik, maka berkembang.
α-predikat
## 1
= μsedang (X) ∩ μterampil (X) ∩ μsangat baik (X)
= min (μsedang (72); μterampil (50); μsangat baik (58))
= min (0,4; 0,25; 0,8)
## = 0,25

[R17] Jika kognitif tinggi, psikomotorik terampil, dan sosial emosional baik, maka
berkembang.
α-predikat
## 1
= μtinggi (X) ∩ μterampil (X) ∩ μbaik (X)
= min (μtinggi (72); μterampil (50); μbaik (58))
= min (0,6; 0,25; 0,2)
## = 0,2

[R18] Jika kognitif tinggi, psikomotorik terampil, dan sosial emosional sangat
baik, maka berkembang.
α-predikat
## 1
= μtinggi (X) ∩ μterampil (X) ∩ μbaik (X)

## 69

= min (μtinggi (72); μterampil (50); μbaik (58))
= min (0,6; 0,25; 0,2)
## = 0,2

Setelah pengaplikasian fungsi implikasi MIN, didapatkan 8 nilai linguistik keluaran
yaitu:
[R5] perlu stimulasi (0,2), [R9] perlu stimulasi (0,2), [R11] berkembang (0,2),
[R13] berkembang (0,4), [R14] berkembang (0,6), [R16] berkembang (0,25),
[R17] berkembang (0,2), [R18] berkembang (0,2).
Selanjutnya, dilakukan komposisi aturan menggunakan fungsi maximum (MAX)
dari nilai-nilai linguistic tersebut:
“Perlu  Stimulasi (0,2)”  U  “Perlu  Stimulasi  (0,2)” U  “Berkembang  (0,2)”  U
“Berkembang  (0,2)” U  “Berkembang  (0,2)” U  “Berkembang  (0,25)” U
“Berkembang  (0,4)”  U  “Berkembang  (0,6)”.  Dengan  demikian,  diperoleh  dua
pernyataan untuk keluaran sistem pilih rules yang memiliki derajat keanggotaan
terbesar untuk setiap variabel linguistik, yaitu:








## Gambar 3.6 Kurva Max Perlu Stimulasi

## 70







## Gambar 3.7 Kurva Max Berkembang
Gabungkan grafik keanggotaan yang tertinggi dari setiap variabel linguistik, untuk
menghitung nilai z, tentukan terlebih dahulu titik perpotongan t
## 1
dan t
## 2
## :
## 푁푖푙푎푖 푡
## 1
## =
## 푡
## 1
## − 50
## 70 − 50
## =0,2
## = (0,2 ∗ 20)+50 =54
## 푁푖푙푎푖 푡
## 2
## =
## 푡
## 2
## − 50
## 70 − 50
## =0,6
## = (0,6 ∗ 20)+50 =62
Dengan kurva sebagai berikut:






## Gambar 3.8 Kurva Gabungan Max

## 71

Berikut  merupakan  fungsi  himpunan fuzzy yang  baru  berdasarkan  hasil  kurva
penggabungan:
## 휇(푧)={
## 푧−50
## 0,2;
## 70 − 50
## 0,6;
## ;
## (
## 푧≤54
## 54≤푧≤62
## 푧≥62
## )

Titik potong t
## 1
dan t
## 2
akan membagi kurva menjadi 3 daerah yaitu D
## 1
## , D
## 2
, dan D
## 3
dengan luas masing-masing A
## 1
## , A
## 2
, dan A
## 3
, serta momen M
## 1
## , M
## 2
, dan M
## 3.










## Gambar 3.9 Kurva Inferensi
## 3. Defuzzifikasi
## 푧
## ∗
## =
## ∫
## 휇(푧)푧 푑푧
## ∫
## 휇(푧)푧 푑푧


a. Menghitung Momen (M)
## 푀1=∫0,2푧 푑푧
## 54
## 0
## =[0,2∗
## 1
## 2
## 푧
## 2
## ]
## 0
## 54

## =0,1×(54)
## 2
## =0,1×2916=291,6

## 72

## 푀2=∫
## 푧−50
## 70 − 50
## 62
## 54
## 푧 푑푧
## =
## 2816
## 15
## =187,73
## 푀3=∫0,6푧 푑푧
## 70
## 62
## =[0,6∗
## 1
## 2
## 푧
## 2
## ]
## 62
## 70

## =
## 1584
## 5
## =316,8

b. Menghitung Luas (A)
## 퐴1=∫0,2 푑푧
## 54
## 0
## =
## [
## 0,2 푧
## ]
## 0
## 54
## =0,2 (54)=10,8
## 퐴2=∫
## 푧−50
## 70−50
## 62
## 54
## 푑푧=∫
## 푧−50
## 20
## 62
## 54
## 푑푧
## =
## 1
## 20
## [
## 1
## 2
## 푧
## 2
## −50
## 푧
## ]
## 54
## 62
## =
## 1
## 20
## =3,2
## 퐴3=∫0,6 푑푧
## 70
## 62
## =
## [
## 0,6 푧
## ]
## 62
## 70

## =0,6 (70)−0,6 (62)=42−37,2=
## 24
## 5
## =4,8

c. Menghitung z dengan Metode Centroid:
## 푧
## ∗
## =
## 푀
## 1
## +푀
## 2
## +푀
## 3
## 푀
## 1
## +푀
## 3
## +푀
## 3
## =
## 291,6+187,73+316,8
## 10,8+3,2+4,8

## =
## 796,13
## 18,8

## =42,35


## 73







## Gambar 3.10 Kurva Output
Maka dapat disimpulkan bahwa dari hasil perhitungan manual, jika rules
menunjukkan kognitif sedang, psikomotorik belum terampil, dan sosial emosional
baik maka perlu stimulasi karena nilai 42,35 berada pada kurva output <50, untuk
menunjukkan bahwa anak berkembang jika hasil menunjukkan angka <70.

## 3.2 Perancangan Basis Data
Perancangan basis  data  adalah  langkah  yang  teratur  untuk  menentukan
bagaimana  data  akan  disusun  secara  konseptual,  logis,  dan  fisik,  agar  bisa
mendukung  kebutuhan  informasi  dan  kegiatan  operasional  suatu  sistem  atau
perusahaan.
3.2.1 Entity Relationship Diagram (ERD)
Entity Relationship Diagram (ERD) digunakan untuk merancang tabel yang
akan dibuat beserta hubungan atau relasinya. Untuk lebih jelasnya bisa dilihat pada
gambar dibawah ini: