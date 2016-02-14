<script type="text/javascript">
$(document).ready(function(){
	$("#cek").click(function(){
		var noujian = $("#noujian").val();
		if(noujian.length==0){
			alert('Maaf, Anda belum mengisi Nomor Ujian');
			$("#noujian").focus();
			return false();
		}
		$.ajax({
		  type	: 'POST',
		  url	: "<?php echo site_url(); ?>/ref_json/cari_lulusan",
		  data	: "noujian="+noujian,
		  cache	: false,
		  success	: function(data){
			  $("#tampil_data").html(data);
		  }
	  });
	});
});
</script>
<ul id="crumbs">
		<li><a href="<?php echo base_url();?>index.php/home" class="home"><i class="icon-home icon-black"></i>Home</a></li>
		<li class="active">Pengumuman Kelulusan</li>
</ul>
<br>
<center><h2>Pengumuman Kelulusan PCB Tahun 2016/2017</h2></center>
<div align="center">
<label><b>Masukan Nomor Ujian</b></label>
<input type="text" name="noujian" id="noujian" class="span3"><br>
<button type="button" class="btn btn-primary" name="cek" id="cek"><i class="icon-ok"></i> Cek Kelulusan</button>
</div>
<br>
<div id="tampil_data"></div>
<div>
<center><h2>PENGUMUMAN</h2></center>
<center><strong>embel-embel<br>
HASIL UJIAN TULIS DAN LISAN<br>
PENERIMAAN CALON MAHASISWA BARU<br>
Universitas Politeknik Gorontalo<br>
TAHUN AKADEMIK 2016/2017<br>
</strong></center>
<br>
<p align="justify">
Berdasarkan Rapat Kelulusan Penerimaan Calon Mahasiswa Baru (PMB) Tahun Akademik 2016/2017 
pada Politeknik Gorontalo tanggal 2 Agustus 2017, 
dengan ini diumumkan Hasil Ujian Tulis dan Lisan Penerimaan Calon Mahasiswa Baru dengan perincian sebagai berikut:</p>
<ol>
<li>Peserta yang dinyatakan Lulus PMB Berjumlah <b>175 orang</b> terdiri atas :</li>
	Fakultas Teknik<br>
<ul>
<li>Fakultas Teknik Informatika		: 75 Orang</li>
<li>Fakultas Mesin Dan Peralatan Pertanian				: 50 Orang</li>
<li>Fakultas Teknik Hasil Pertanian			: 50 Orang</li>
<li>Jumlah							: 175 Orang</li>
</ul>


<li>Peserta yang tidak tercantum dalam lampiran pengumuman ini dinyatakan TIDAK LULUS;</li>
<li>Peserta yang dinyatakan lulus agar melakukan registrasi dari tanggal 19 sampai dengan 23 Agustus 2016 pada <strong>Admin Poligon</strong>, 
secara langsung dengan melakukan <b>Pemotretan untuk pembuatan KTM</b> <i>(Kartu Tanda Mahasiswa)</i> ;</li>
<li>Apabila sampai dengan tanggal tersebut peserta tidak melakukan registrasi,  maka dianggap mengundurkan diri;</li>
<li>Hal-hal yang menyangkut PMB dapat dikonfirmasikan kebagian Akademik dan Kemahasiswaan.</li>
</ol>

Demikian Pengumuman ini disampaikan untuk diketahui.<br>
Gorontalo, 16 Agustus 2016<br>
Rektor, <br>
<br>
<br>
<br>
Nama Rektor <br>
NIP <br>
<br>
</div>