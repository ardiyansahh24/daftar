<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PPDB Online</title>
{{-- <link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet" id="bootstrap-css"> --}}

  </head>
  <div class="container">
  <body >
    <div class="thankyou-page">
        <div class="_header">
            <div class="logo">
                <img src="/img/logo.png" alt="">
            </div>
        
        </div>
        <div class="_body">
            <div class="_box">
                 <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pdbs.index') }}"> Back</a>
            </div>
                <h2>
                    <strong>Form Pendaftaran</strong>
                </h2>
                <p>
                
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
       
    <form action="{{ route('pdbs.store') }}" method="POST">
        @csrf
        <td>No Pendaftaran : </td>
        <input type="text" name="no_pendaftaran" class="col-sm-2 "> 
        <td>No Tes : </td>
         <input type="text" name="no_tes" class="col-sm-2 ">
            <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>I.Data Calon Murid</h4>
            </div>
        </div>
    </div>
       
    <form method="POST" action="{{ route('pdbs.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
      
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    Nama Lengkap :
                    <input type="text" name="namalengkap" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                     Nama Panggilan :
                    <input type="text" name="namapanggilan" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    Jenis Kelamin :
                    <td>
                    <input type="checkbox" name="jk" class="form-check-label" value="P"><a>Perempuan</a>
                </td>
                <td>
                    <input type="checkbox" name="jk" class="form-check-label" value="L"><a>Laki-Laki</a>
                </td>
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                     Tempat tanggal lahir :
                    <input type="date" name="ttl" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                     Agama :
                    <input type="text" name="agama" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    Cita-cita :
                    <input type="text" name="citacita" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    Hobi :
                    <input type="text" name="hobi" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                     Anak ke :
                    <input type="text" name="anakke" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    Jumlah Saudara :
                    <input type="text" name="jmlsaudara" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    Berat Badan :
                    <input type="text" name="bb" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                     Tinggi Badan :
                    <input type="text" name="tb" class="form-control">
                </div>
            </div>
            <br>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                     Golongan darah :
                    <input type="text" name="goldar" class="form-control">
                </div>
            </div>
            <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>II.Keterangan Tempat Tinggal</h4>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                 Alamat rumah :
                <div class="form-group">
                     <textarea class="form-control" style="height:150px"name="alamat"></textarea>
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    Keluarahan :
                    <input type="text" name="kel" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Kecamatan  :
                    <input type="text" name="kec" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    Kota Kabupaten :
                    <input type="text" name="kota_kab" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Provinsi  :
                    <input type="text" name="provinsi" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   No.Telepon Rumah  :
                    <input type="text" name="no_telprumah" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    Email :
                    <input type="text" name="email" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    Tinggal Dengan :
                    
                     <td>
                    <input type="checkbox" name="tgldgn" class="form-check-label" value="Ortu"><a>Orang Tua</a>
                </td>
                <td>
                    <input type="checkbox" name="tgldgn" class="form-check-label" value="Asrama"><a>Asrama</a>
                </td>
                <td>
                    <input type="checkbox" name="tgldgn" class="form-check-label" value="Saudara"><a>Saudara</a>
                </td>
                </div>
            </div>
            <br>
            <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>III.Keterangan Kesehatan</h4>
            </div>
        </div>
            Penyakit yang pernah di derita
            <br>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   TBC (sebutkan/kapan) :
                    <input type="text" name="tbc" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Malaria (sebutkan/kapan) :
                    <input type="text" name="malaria" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    Chotipa (sebutkan/kapan) :
                    <input type="text" name="chotipa" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Cacar (sebutkan/kapan) :
                    <input type="text" name="cacar" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Kelainan jasmani lainnya :
                    <input type="text" name="lainlain" class="form-control">
                </div>
            </div>
            <br>
            <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>IV.Data Orang tua/Wali</h4>
            </div>
        </div>
        <strong>A.Ayah</strong>
        <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Nama Ayah :
                    <input type="text" name="nm_ayah" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 Tempat,tanggal lahir   :
                    <input type="date" name="ttl_ayah" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Pekerjaan :
                    <input type="text" name="pk_ayah" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Pendidikan Terakhir :
                    <input type="text" name="pd_ayah" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Kewarganegaraan/Agama :
                    <input type="text" name="kwgagama_ayah" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   No HP/WA :
                    <input type="text" name="no_ayah" class="form-control">
                </div>
            </div>
             <br>
             <br>
             <strong>B.Ibu</strong>
                <br>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Nama Ibu :
                    <input type="text" name="nm_ibu" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 Tempat,tanggal lahir   :
                    <input type="date" name="ttl_ibu" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Pekerjaan :
                    <input type="text" name="pk_ibu" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Pendidikan Terakhir :
                    <input type="text" name="pd_ibu" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Kewarganegaraan/Agama :
                    <input type="text" name="kwgagama_ibu" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   No HP/WA :
                    <input type="text" name="no_ibu" class="form-control">
                </div>
            </div>
            <br>
             <strong>C.Wali</strong>
            <br>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Nama Wali :
                    <input type="text" name="nm_wali" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Tempat,tanggal lahir :
                    <input type="date" name="ttl_wali" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  Pekerjaan  :
                    <input type="text" name="pk_wali" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  Pendidikan Terakhir  :
                    <input type="text" name="pd_wali" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  Hubungan dengan murid  :
                    <input type="text" name="hdm" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  Kewarganegaraan/Agama  :
                    <input type="text" name="kwgagama_wali" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  No.HP / WA   :
                    <input type="text" name="no_wali" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    Alamat E-Mail:
                    <input type="text" name="email_wali" class="form-control">
                </div>
            </div>
             <br>
              <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>VI.Nilai RAPOR</h4>
            </div>
        </div>
            <h5>Diisi dengan nilai rata rata semester 1-5</h5>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   PAI :
                    <input type="text" name="pai" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    Bahasa Indonesia :
                    <input type="text" name="bindo" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    Bahasa Ingrris :
                    <input type="text" name="bing" class="form-control">
                </div>
            </div>
             <br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    Matematika:
                    <input type="text" name="mtk" class="form-control">
                </div>
            </div>
            <br>
                   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    IPA :
                    <input type="text" name="ipa" class="form-control">
                </div>
            </div>
            <br>
                   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   IPS :
                    <input type="text" name="ips" class="form-control">
                </div>
            </div>
            <br>
                   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 Prestasi yang pernah diraih   :
                    <input type="text" name="prestasi" class="form-control">
                </div>
            </div>
            <br>
            <div class="form-group">
            <h3>Informasi SMK Wikrama 1 Garut dari : </h3>
            
              <td>
                    <input type="checkbox" name="informasi" class="form-check-label" value="Keluarga"><a>Keluarga</a>
                </td>
                <td>
                    <input type="checkbox" name="informasi" class="form-check-label" value="Website"><a>Website</a>
                </td>
                <td>
                    <input type="checkbox" name="informasi" class="form-check-label" value="Teman"><a>Teman</a>
                </td>
                <td>
                    <input type="checkbox" name="informasi" class="form-check-label" value="Brosur"><a>Brosur</a>
                </td>
                <td>
                    <input type="checkbox" name="informasi" class="form-check-label" value="SekolahSMP">Sekolah SMP<a></a>
                </td>
                <td>
                    <input type="checkbox" name="informasi" class="form-check-label" value="Facebook"><a>Facebook</a>
                </td>
                <td>
                    <input type="checkbox" name="informasi" class="form-check-label" value="Karyawan">Karyawan/Guru<a></a>
                </td>
                <td>
                    <input type="checkbox" name="informasi" class="form-check-label" value="Lainnya">Lainnya<a></a>
                </td>
                <h5>Berkas pendaftaran dibawa saat mengikuti tes seleksi : </h5>
                <p>- Fotokopi Raport SMP kelas 7-9 Semester 1</p>
                <p>- Fotokopi Akte Kelahiran</p>
                <p>- Fotokopi Kartu kelurga</p>
                <p>- Fotokopi Photo Berwarna (Berkemeja) Ukuran: 3 x 4 (6 lembar)</p>
            </div>
                 <br>
                 <br>
          <!--  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   Foto Peserta :
                    <input type="file" name="image" class="form-control">
                </div>
            </div> --->
            <br>
            <br>
            
        </div>
        <div class="form-group text-center">
            <button class="btn btn-success" onclick="ayFunction()" id="button" style="margin-left: 38%">cetak</button>
            <input type="submit" name="add" class="btn btn-primary input-lg" value="Kirim Data">
           </div>
       
    </form>

        
    </div>
        </div>
    </div>
      </body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<script>
    function ayFunction(){
        var x = document.getElementById("button");
        if(x.style.display == "none"){
            x.style.display="block";
        }else{
            x.style.display="none";
        }
        window.print();
        x.style.display="block";
        x.style.float="right";
        x.style.marginBottom="10px";
    }
</script>



{{-- 


<!DOCTYPE html>
<html>
<head>
<title>PPDB Online</title>
<link href="{!! asset('assets/css/create.css') !!}" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>

</html> --}}

