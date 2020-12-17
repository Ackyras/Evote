<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('cari')}}" method="POST">
        @csrf
        <label for="">
            Masukkan nama depan:
            <input type="text" name="nama" required>
        </label>
        <label for="">
            Masukkan nim:
            <input type="text" name="nim" required>
        </label>
        <label for="">
            Pilih angkatan
            <select name="angkatan" id="">
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
            </select>
        </label>
        <label for="">
            <select name="prodi" id="">
                <option value="Arsitektur">Arsitektur</option>
                <option value="Arsitektur Lanskap">Arsitektur Lanskap</option>
                <option value="Biologi">Biologi</option>
                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                <option value="Farmasi">Farmasi</option>
                <option value="Fisika">Fisika</option>
                <option value="Kimia">Kimia</option>
                <option value="Matematika">Matematika</option>
                <option value="Perencanaan Wilayah dan Kota">Perencanaan Wilayah dan Kota</option>
                <option value="Rekayasa Kehutanan">Teknik Kimia</option>
                <option value="Sains Aktuaria">Sains Aktuaria</option>
                <option value="Sains Atmosfir dan Keplanetan">Sains Atmosfir dan Keplanetan</option>
                <option value="Sains Data">Sains Data</option>
                <option value="Sains Lingkungan Kelautan">Teknik Kimia</option>
                <option value="Teknik Biomedis">Teknik Biomedis</option>
                <option value="Teknik Biosistem">Teknik Biosistem</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
                <option value="Teknik Fisika">Teknik Fisika</option>
                <option value="Teknik Geofisika">Teknik Geofisika</option>
                <option value="Teknik Geologi">Teknik Geologi</option>
                <option value="Teknik Geomatika">Teknik Geomatika</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Kelautan">Teknik Kelautan</option>
                <option value="Teknik Kimia">Teknik Kimia</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                <option value="Teknik Material">Teknik Material</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Perkeretaapian">Teknik Perkeretaapian</option>
                <option value="Teknik Pertambangan">Teknik Pertambangan</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Sistem Energi">Teknik Sistem Energi</option>
                <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                <option value="Teknologi Industri Pertanian">Teknologi Industri Pertanian</option>
                <option value="Teknologi Pangan">Teknologi Pangan</option>
            </select>
        </label>
        <button type="submit">Cari Data</button>
    </form>
</body>

</html>