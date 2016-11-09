<h1>Lisää asiakas</h1>
<FORM action="<?php echo site_url('asiakas/lisaaAsiakas'); ?>" method="post">
<TABLE>
	<tr><td>Etunimi</td><td><input type="text" name="en"></td></tr>
	<tr><td>Sukunimi</td><td><input type="text" name="sn"></td></tr>
	<tr><td>Email</td><td><input type="text" name="email"></td></tr>
</TABLE>
<br>
<a href="<?php echo site_url();?>">Peruuta</a>
<input type="submit" name="btn" value="Tallenna">
</FORM>