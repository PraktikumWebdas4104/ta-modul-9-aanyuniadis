<?php 
include 'database.php';
$db = (new database()); //isi dengan deklarasi method
?>

<h1>CRUD OOP PHP</h1>
<h3>Edit Data User</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
	$array1 = explode(", ", $d['genre']);
	$array2 = explode(", ", $d['wisata']);
 //panggil method edit dari class database
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['usia'] ?>"></td>
	</tr>
	<tr>
		<td>Genre Film</td>
		<td>:</td>
		<td>
			<input type="checkbox" name="genre[]" value="horror" <?php if(in_array('horror',$array1)){echo "checked=checked";} ?> >Horror <br>
			<input type="checkbox" name="genre[]" value="action" <?php if(in_array('action',$array1)){echo "checked=checked";} ?> >Action <br>
			<input type="checkbox" name="genre[]" value="anime" <?php if(in_array('anime',$array1)){echo "checked=checked";} ?> >Anime  <br>
			<input type="checkbox" name="genre[]" value="thriller" <?php if(in_array('ahriller',$array1)){echo "checked=checked";} ?> >Thriller <br>
			<input type="checkbox" name="genre[]" value="animasi" <?php if(in_array('animasi',$array1)){echo "checked=checked";} ?> >Animasi <br>	
		</td>
	</tr>
	<tr>
		<td>Tempat Wisata</td>
		<td>:</td>
		<td>
			<td>
		<input type="checkbox" name="wisata[]" value="bali" <?php if(in_array('bali',$array2)){echo "checked=checked";} ?> >Bali <br>
		<input type="checkbox" name="wisata[]" value="raja ampat" <?php if(in_array('raja ampat',$array2)){echo "checked=checked";} ?> >Raja Ampat <br>
		<input type="checkbox" name="wisata[]" value="pulau derawan" <?php if(in_array('pulau derawan',$array2)){echo "checked=checked";} ?> >Pulau Derawan <br>
		<input type="checkbox" name="wisata[]" value="bangka belitung" <?php if(in_array('bangka belitung',$array2)){echo "checked=checked";} ?> >Bangka Belitung <br>
		<input type="checkbox" name="wisata[]" value="labuan bajo" <?php if(in_array('labuan bajo',$array2)){echo "checked=checked";} ?> >Labuan Bajo <br>
		</td>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
