<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengolahan Zakat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/landing_style.css">
    <script src="{{asset('js/landing_script.js')}}"></script>


</head>
<style>
    #more {
        display: none;
    }

    ul.navbar-menu li {
        margin-left: 10px;
        margin-right: 10px;
    }

    ul.navbar-menu li {
        margin-left: 10px;
        margin-right: 10px;
    }

    .error-block {
        font-size: smaller;
        color: #ff5555;

    }
</style>

<body>
    <ul class="navbar">
        <li>
            <h2>Permata zakat</h2>
        </li>
    </ul>
    <ul class="navbar-menu" style="justify-content: flex-end; text-align: center;
       padding: 14px 16px;">
        <li class="dropdown" style="padding-left:15px; padding-right: 15px;">
            <a href="#" class="dropbtn" style="text-decoration: none; color: white;" onclick="">List</a> 
            <div class="dropdown-content">
                <a href="#Pengertian">Apa sih zakat itu?</a>
                <a href="#Manfaat">Manfaat berzakat apa?</a>
                <a href="#Kisah">Sebuah kisah nyata</a>
                <a href="#Macam">Macam zakat</a>
                <a href="#Alasan">Alasan mengapa memilih berzakat di sini</a>
                <a href="#Donasi">Berzakat disini</a>
                <a href="#Patner">Patner kami</a>
                
            </div>
        </li>
        <li><a href="https://sitpermata.id/" style="text-decoration: none; color: white;">Tentang</a></li>
        <li><a href="./login" style="text-decoration: none; color: white;">Login</a></li>
    </ul>
    <section class="first-container">

        <div class="Read-more" id="firs">
            <h1 id="Pengertian">Apa sih zakat itu?</h1>
            <p>Zakat adalah bagian tertentu dari harta yang wajib dikeluarkan oleh setiap muslim apabila telah mencapai syarat yang ditetapkan.
                <span class="sebelum">...</span><span class="more" style="display: none;">
                    Sebagai salah satu rukun Islam, Zakat ditunaikan untuk diberikan kepada golongan yang berhak menerimanya.
            </p>

            <p><button onclick="readMore('firs')" class="sesudah">Baca lainnya</button></p>
        </div>

        <img src="./assets/Zakat.svg" alt="Zakat">
    </section>

    <section class="twice-container">

        <div class="Read-more" id="twin">
            <h1 id="Manfaat">Manfaat berzakat apa? </h1>
            <p>Berzakat memiliki banyak manfaat yaitu memperoleh ketenangan jiwa, menghapus dendam/pandangan buruk, menyempurnakan iman,
                <span class="sebelum">...</span><span class="more" style="display: none;">
                    menghapus dosa, mendekatkan diri ke Allah. Semoga Allah alirkan kebaikan dan keberkahan bagi sahabat. Aamiin.
            </p>

            <p><button onclick="readMore('twin')" class="sesudah">Baca lainnya</button></p>
        </div>



        <img src="./assets/berbagi-zakat.svg" alt="berbagi Zakat">
    </section>

    <section class="center-container" id="tempat">
        <div id="kotak">
            <div class="Read-more" id="cent">
                <h1 id="Kisah"> Sebuah kisah nyata </h1>
                <p id="isi">Panti asuhan Al-Anwar telah terselamatkan dari kesusahan ekonomi selama pandemi karena zakat
                    <span class="sebelum">...</span><span class="more" style="display: none;">
                        yang berasal dari nasabah kami, total zakat yang di serahkan sebesar 265 juta rupiah dan beberapa sembako.
                </p>
                <p id="tanggal-center">Okt 10 2022</p>
                <p><button onclick="readMore('cent')" class="sesudah">Baca lainnya</button></p>
            </div>

        </div>
        <img src="./assets/zakat-penghasilan.svg" alt="orang1">
    </section>

    <section class="content-container" id="Macam">
        <div class="content1">
            <div class="content1-body">
                <div class="Read-more" id="fila">
                    <h4>Zakat Penghasilan</h4>
                    <p>Zakat penghasilan adalah zakat yang berasal dari penghasilan pezakat sebesar 2,5% secara langsung yang diperuntukan
                        <span class="sebelum">...</span><span class="more" style="display: none;">
                            untuk Fakir, Miskin, Amil, Gharimin, Fisabilillah, dan Ibnus Sabil
                    </p>
                    <p><button onclick="readMore('fila')" class="sesudah">Baca lainnya</button></p>
                </div>
            </div>
            <div class="content1-floot">


            </div>
        </div>

        <div class="content2">
            <div class="content2-body" id="2">
                <div class="Read-more" id="ila">
                    <h4>Zakat Emas</h4>
                    <p>Zakat Emas adalah zakat yang berasal dari emas, perak dan logam mulia lainnya yang disimpan selama setahun milik pezakat dan zakatnya diperuntukan
                        <span class="sebelum">...</span><span class="more" style="display: none;">
                            untuk Fakir, Miskin, Amil, Gharimin, Fisabilillah, dan Ibnus Sabil
                    </p>
                    <p><button onclick="readMore('ila')" class="sesudah">Baca lainnya</button></p>
                </div>
            </div>
            <div class="content2-floot">


            </div>
        </div>
        <div class="content3">
            <div class="content3-body" id="3">
                <div class="Read-more" id="ia">
                    <h4>Zakat Tabungan</h4>
                    <p>Zakat Tabungan adalah zakat dari tabungan yang dikenakan saat jumlah saldo akhir telah mencapai haul dan diperuntukan
                        <span class="sebelum">...</span><span class="more" style="display: none;">
                            untuk Fakir, Miskin, Amil, Gharimin, Fisabilillah, dan Ibnus Sabil
                    </p>
                    <p><button onclick="readMore('ia')" class="sesudah">Baca lainnya</button></p>
                </div>
            </div>
            <div class="content3-floot">


            </div>
        </div>
    </section>
    <section class="alasan-container">
        <div>
            <div>
                <h2 id="Alasan">Mengapa Memilih Berzakat/bersedekah Di Permata Zakat?</h2>
                <p></p>
                <ol>
                    <li>Ada 10 cabang milik Permata Zakat yang membantu pembagian dan ikut berkontribusi membiayai ribuan santri dari institusi terkait dengan yayasan Permata dan institusi asing disekitarnya.</li>
                    <li>Ada 7 Rekening bank atas nama Permata Zakat untuk memudahkan dan meringankan biaya transfer.</li>
                    <li>Rekening Zakat dan Wakaf terpisah untuk memudahkan manajemen administrasi sesuai akad.</li>
                    <li>Didoakan oleh Ratusan anak-anak penghafal Al-Qur'an.</li>
                    <li>Berkontribusi dalam mengembangkan pendidikan Islam.</li>
                    <li>Sedekah juga digunakan untuk membangun pendidikan Qur'an GRATIS namun BERKUALITAS.</li>
                    <li>Donatur akan mendapatkan laporan perkembangan Permata Zakat setiap bulan atau setiap minggunya.</li>
                    <li>Setiap jumat admin akan mengirimkan reminder untuk mengingatkan para donatur untuk bersedekah atau menitipkan doa kepada anak-anak penghafal Qur'an.</li>
                </ol>
            </div>
        </div>
    </section>

    <section class="first-container" id="Donasi" nama="Donasi">
        <!-- START FORM -->

        <form action="{{ url('/store-whitout-login') }}" method='post' enctype="multipart/form-data">
            @csrf
            <div class="fist">
                <h1>Mari Zakat</h1>
            </div>

            <div style="" class="fist">


                <div class="">
                    <label for="nama" class="">Nama</label>
                    <div class="">
                        <input type="text" class="" name='nama' id="nama">
                        {!! $errors->first('nama', '<div class="error-block">:message *</div>') !!}
                    </div>
                </div>
                <div class="">
                    <label for="alamat" class="">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="" name='alamat' id="alamat">
                        {!! $errors->first('alamat', '<div class="error-block">:message *</div>') !!}
                    </div>
                </div>
                <div class="">
                    <label for="noTelp" class="">No.Telp</label>
                    <div class="col-sm-10">
                        <input type="number" class="" name='noTelp' id="noTelp">
                        {!! $errors->first('noTelp', '<div class="error-block">:message *</div>') !!}
                    </div>
                </div>
                <div class="">
                    <label for="jenisKelamin" class="">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <!-- <input type="text" class="" name='jenisKelamin' id="jenisKelamin"> -->
                        <select class="form-select form-select-sm" name="jenisKelamin" aria-label="Default select example">
                        <option value="" selected>Pilih Jenis Kelamin</option>
                        <option value="L">Laki- laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                        {!! $errors->first('jenisKelamin', '<div class="error-block">:message *</div>') !!}
                    </div>
                </div>
                <div class="">
                    <label for="jumlah" class="">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" class="" name='jumlah' id="jumlah">
                        {!! $errors->first('jumlah', '<div class="error-block">:message *</div>') !!}
                    </div>
                </div>
                <div class="">
                    <label for="img" class="">Bukti</label>
                    <div class="col-sm-10">
                        <input type="file" class="" name='img' id="image">
                        {!! $errors->first('img', '<div class="error-block">:message *</div>') !!}
                    </div>
                </div>
                <div class="" style="margin-top:2rem;">
                    <label for="simpan" class=""></label>
                    <div class="col-sm-10"><button type="submit" class="" name="submit">SIMPAN</button></div>
                </div>
            </div>
        </form>
        <!-- AKHIR FORM -->


    </section>

    <section>


    </section>

    <section class=" patner-container" id="Patner">
        <h3>Patner kami</h3>

    </section>
    <section class="Pembayaran-container">

        <div class="content4">
            <div class="content4-body">
                <img src="./assets/bank-muamala.svg" alt="Patner">
                <p>Nomer Rekening</p>
                <img src="./assets/bni-syariah.svg" alt="Patner">
                <p>Nomer Rekening</p>
                <img src="./assets/bri-syariah.svg" alt="Patner">
                <p>Nomer Rekening</p>
                <img src="./assets/mandiri-syariah.svg" alt="Patner">
                <p>Nomer Rekening</p>
            </div>

        </div>

        <div class="content5">
            <div class="content5-body">
                <img src="./assets/bni.svg" alt="Patner">
                <p>Nomer Rekening</p>
                <img src="./assets/bri.svg" alt="Patner">
                <p>Nomer Rekening</p>
                <img src="./assets/bca.svg" alt="Patner">
                <p>Nomer Rekening</p>
                <img src="./assets/mandiri-e.svg" alt="Patner">
                <p>Nomer Rekening</p>
            </div>

        </div>
        <div class="content6">
            <div class="content6-body">
                <h3>Qrcode E-walet</h3>
                <p>Bisa Digunakan Untuk Go-pay, OVO, Link Aja, Dana, Shopee Pay</p>
                <p>Dapat Menempatkan QR-Code</p>
                <p>Alamat_: Jalan.*******</p>
                <p>No Telp: 081**********</p>
                <p>Email__: ***@gmail.com</p>
            </div>

        </div>
    </section>

    <section class="end">
        <hr>
        <div>Copyright &copy; 2023 by MyProject</div>
    </section>

</body>

</html>