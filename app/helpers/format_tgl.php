<?php

	function getHari($tgl){
		$nama_hari = array("","senin", "selasa", "rabu", "kamis", "jumat", "sabtu","minggu");
		$hari = $nama_hari[$tgl];
		
		return $hari;
	}
	function tgl_indo_with_jam($tgl, $tampil_hari=true){
		$nama_hari=array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");
		$nama_bulan=array(1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		
		$tahun=substr($tgl,0,4);
		$bulan=$nama_bulan[(int)substr($tgl,5,2)];
		$tanggal=substr($tgl,8,2);
		
		$text="";
		
		if($tampil_hari){
			$urutan_hari=date('w', mktime(0,0,0, substr($tgl,5,2), $tanggal, $tahun));
			
			$hari=$nama_hari[$urutan_hari];
			$text .= $hari.", ";
		}
		
		$text .=$tanggal." ".$bulan." ".$tahun;
		
		return $text.', Pukul '.substr($tgl,10,19);
	}
	function gabungTGL($tgl)
	{
		$getTGL = explode(' ',trim($tgl));
		$gabung = $getTGL[1].'-'.$getTGL[2].'-'.$getTGL[3];
		$date 	= strtotime($gabung);
		return $date;
	}
	function toRupiah($rp)
	{
		$harga = $rp;
		return 'Rp. '.number_format($harga, 0, ".", ".");
	}
?>