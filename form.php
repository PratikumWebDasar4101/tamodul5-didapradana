<form method="post" action="" enctype="multipart/form-data">
	<input type="text" name="nama" maxlength="25" required> Nama <br><br>
	<input type="text" name="Nim" pattern="\d*" maxlength="10" required> NIM <br><br>
	<input type="email" name="email" pattern="[a-z0-9._-]+@+[a-z]+.com" required> Email <br><br>
	Jurusan<br>
	<select>
	  <option value="MI">D3MI</option>
	  <option value="TK">D3TK</option>
	  <option value="IF">D3IF</option>
	  <option value="SM">D4SM</option>
	</select><br><br>
	Fakultas<br>
	<select>
	  <option value="FIT">FIT</option>
	  <option value="FIF">FIF</option>
	  <option value="FKB">FKB</option>
	  <option value="FIK">FIK</option>
	</select>
	<br><br>
	Hobi<br>
	<input type="checkbox" name="hobi" required> Olahraga
	<input type="checkbox" name="hobi" required> Bermain Game
	<input type="checkbox" name="hobi" required> Tidur
	<br><br>
	<input type="file" name="upload" required>
	<br><br>
	<input type="submit" name="kirim">
</form>