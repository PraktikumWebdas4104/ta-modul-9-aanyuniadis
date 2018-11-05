<h1>CRUD OOP PHP</h1>
<h3>Tambah Data User</h3>

<form action="proses.php?aksi=tambah" method="post">
	
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia"></td>
	</tr>
	<tr>
		<td>Pilih Genre Film</td>
		<td><input type="checkbox" name="genre[]" value ="horror">Horror<br>
			<input type="checkbox" name="genre[]" value ="action">Action<br>
			<input type="checkbox" name="genre[]" value ="anime">Anime<br>
			<input type="checkbox" name="genre[]" value ="thriller">Thriller<br>
			<input type="checkbox" name="genre[]" value ="animasi">Animasi
		</td>
	</tr>
	<tr>
		<td>Pilih Tempat Wisata</td>
		<td><input type="checkbox" name="wisata[]" value ="bali">Bali<br>
			<input type="checkbox" name="wisata[]" value ="raja ampat">Raja Ampat<br>
			<input type="checkbox" name="wisata[]" value ="pulau derawan">Pulau Derawan<br>
			<input type="checkbox" name="wisata[]" value ="bangka belitung">Bangka Belitung<br>
			<input type="checkbox" name="wisata[]" value ="labuan bajo">Labuan Bajo
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>
