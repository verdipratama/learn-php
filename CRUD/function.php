<?php 
    // koneksi ke database
	$db = mysqli_connect("localhost", "root","", "yt");
	
    function query($query) { // menampilkan data dari tabel mysql
		global $db; // menggunakan variable scope yg ada didalem function berbeda dengan variable yg diluar
		
    	$result = mysqli_query($db, $query);
    	$rows = []; // Membuat array assosiatif kotak kosong
    	while ($mhs = mysqli_fetch_assoc($result)) { // ketika diambil datanya menggunakan looping
    		$rows[] = $mhs; // akan menambahkan element baru diakhir tiap array tabel mahasiswa
    	}

    	return $rows; // harus dikembalikan kotaknya
	}
	
	function tambah($data) { 
		global $db; // menggunakan variable scope yg ada didalem function berbeda dengan variable yg diluar

		// Ambil data dari tiap element dalam form
        $nama    = htmlspecialchars($data["nama"]);
        $nim     = htmlspecialchars($data["nim"]);
        $email   = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
	
		$gambar = upload(); // jalankan fungsi upload gambar
		if(!$gambar) { // jika gambar false , ! not gambar

			return false; // cek apakah data berhasil atau tidak (kalo gagal -1 klo tidak 1)
		}


        // query insert data - GAK BOLEH KETUKER
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('','$nama','$nim','$email','$jurusan','$gambar')
                	";
		mysqli_query($db, $query); // jalankan querynya

		return mysqli_affected_rows($db); // cek apakah data berhasil atau tidak (kalo gagal -1 klo tidak 1)
	}

	function upload() {
		// Ambil data dari tiap element
		$namaFile   = $_FILES['gambar']['name']; // $_FILES adalah arrya multi dimensi jd bisa numerik dan assos
		$ukuranFile = $_FILES['gambar']['size'];
		$error      = $_FILES['gambar']['error'];
		$tmpName    = $_FILES['gambar']['tmp_name'];

		// cek apakah tidak ada gambar yang diupload
		if($error === 4) { // 4 itu tdk ada gambar yg diupload
            echo "
            <script>
            alert('Pilih gambar terlebih dahulu!');
            </script>
			";

			return false; //  berhentikan function / cek apakah data berhasil atau tidak
		}

		// cek apakah yang diupload adalah gambar atau bukan?
		$ekstensiGambarValid = ['jpg','jpeg','png']; // deklarasikan format gambarnya
		$ekstensiGambar = explode('.',$namaFile); // memecah sebuah string jd array agar tidak ada nama yg sama
		$ekstensiGambar = strtolower(end($ekstensiGambar)); // ambil yg terakhir dan dirubah jd huruf kcl
		// in_array adakah sebuah string dalam sebuah array
		// !in_array = kalo tidak ada ekstensi gambar
		if ( !in_array($ekstensiGambar, $ekstensiGambarValid)) { // kasih pesan kalo ada yang tidak valid
            echo "
            <script>
            alert('Yang anda UPLOAD BUKAN GAMBAR!');
            </script>
			";

			return false;
		}

		// cek jika ukurannya terlalu besar - 1jt itu 1mb
		if ($ukuranFile > 1000000) {
            echo "
            <script>
            alert('Ukuran gambar TERLALU BESAR!');
            </script>
			";

			return false;
		}

		// generate nama gambar baru
		$namaFileBaru  = uniqid(); // uniqid adalah akan membuat string random
		$namaFileBaru .= '.'; // . adalah untuk extensi file 
		$namaFileBaru .= $ekstensiGambar;
		// var_dump($namaFileBaru); die; adalah script yg dibawah tdk akan dijalankan

		// lolos pengecekan, gambar siap di upload!
		move_uploaded_file($tmpName, 'img/' . $namaFileBaru); // function php untuk memindahkan ke dalam server

		return $namaFileBaru; // berubah nama baru - kenapa di return? supaya isi dari gambar adalah nama filenya
	}

	function hapus($id) {
		global $db;

		mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");
		return mysqli_affected_rows($db);  // cek apakah data berhasil atau tidak
	}

	function ubah($data) {
		// Ambil data dari tiap element dalam form
		global $db;

		$id      = $data["id"]; // tdk menggunakan htmlsc karena tdk diinputkan oleh user
        $nama    = htmlspecialchars($data["nama"]); // ngambil dari varible html
        $nim     = htmlspecialchars($data["nim"]);
        $email   = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
		$gambarLama = htmlspecialchars($data["gambarLama"]);

		// cek apakah user pilih gambar baru atau tidak
		if ($_FILES['gambar']['error'] === 4) { // 4 adalah tidak ada gambar
			$gambar = $gambarLama; // gambar diisi dengan gambar lama
		} else {
			$gambar  = upload(); // pake function upload
		}

        // query insert data - GAK BOLEH KETUKER
        $query = "UPDATE mahasiswa SET
                    nama = '$nama',
					nim = '$nim',
					email = '$email',
					jurusan = '$jurusan',
					gambar = '$gambar'
				WHERE id = $id
                "; // BUTUH ID UNTUK IDENTIFIER
		mysqli_query($db, $query); // jalankan querynya
		
		return mysqli_affected_rows($db); // cek apakah data berhasil diupdate atau tidak (kalo gagal -1 klo tidak 1)
	}

	function cari($keyword) { // ditangkap oleh $keyword
		$query = "SELECT * FROM mahasiswa
				WHERE
				nama LIKE '%$keyword%' OR
				nim LIKE '%$keyword%' OR
				email LIKE '%$keyword%' OR
				jurusan LIKE '%$keyword%'
				";

		return query($query); // memanggil function query di dalam function yg baru
	}

	function registrasi($data) {
		global $db;
		// $data harus disimpan dalam variable
		$username  = strtolower(stripslashes($data["username"])); // strtolower huruf kcl - stripslash huruf bsr kcl
		$password  = mysqli_real_escape_string($db, $data["password"]); // untuk memungkingkan user ada tanda kutipnya
		$password2 = mysqli_real_escape_string($db, $data["password2"]);

		// cek username sudah ada apa belum
		$result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");
		if(mysqli_fetch_assoc($result)) {
            echo "
            <script>
            alert('USERNAME sudah terdaftar!');
            </script>
			";

			return false; // berhentikan function supaya yg dibawah tidak dijalankan
		}

		// cek konfirmasi password
		if ($password !== $password2) { // jika password tidak sesuai
            echo "
            <script>
            alert('konfirmasi password tidak sesuai!');
            </script>
			";
			
			return false; // berhentikan functionya supaya masuk ke else di register
		}
		// return 1;
		// enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);
		// var_dump($password); die;

		// tambah userbaru ke database
		mysqli_query($db, "INSERT INTO user VALUES('','$username','$password')"); // kosongkan id krna auto increment
		return mysqli_affected_rows($db); // untuk menghasilkan +1 jika berhasil -1 jika gagal
	}
?>