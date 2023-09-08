<!DOCTYPE html>
<html>

<head>
    <title>Studi Kasus: Preselecting pada Seleksi</title>
</head>

<body>
    <center>
        <div style="background:#123123; padding-top:50px; width:400px;height:400px">
            <h2>Daftar Nama Lengkap</h2>
            <strong>Nama panggilan:</strong><br>
            <em>Silakan pilih untuk menampilkan nama lengkap</em>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <select name="nama">
                    <option value="riandy" <?php if (isset($_POST['nama'])&&$_POST['nama']=='riandy') {
				echo "selected";
			} ?>>riandy</option>
                    <option value="frandika" <?php if (isset($_POST['nama'])&&$_POST['nama']=='frandika') {
				echo "selected";
			} ?>>frandika</option>
                    <option value="alfarez" <?php if (isset($_POST['nama'])&&$_POST['nama']=='alfarez') {
				echo "selected";
			} ?>>alfarez</option>
                    <option value="ojan" <?php if (isset($_POST['nama'])&&$_POST['nama']=='ojan') {
				echo "selected";
			} ?>>ojan</option>
                    <option value="buluk" <?php if (isset($_POST['nama'])&&$_POST['nama']=='buluk') {
				echo "selected";
			} ?>>buluk</option>
                </select>
                <br>
                <input type="submit" value="OK">
            </form>
            <?php 
	if (isset($_POST['nama'])) {
		switch ($_POST['nama']) {
			case 'riandy':
				echo "<div id='nilai'>Nama lengkap : riandy pratama</div>";
				break;

			case 'frandika':
				echo "<div id='nilai'>Nama lengkap : frandika kusuma</div>";
				break;

			case 'alfarez':
				echo "<div id='nilai'>Nama lengkap : alfarez sitorus</div>";
				break;

			case 'ojan':
				echo "<div id='nilai'>Nama lengkap : ojan mandala</div>";
				break;

			case 'buluk':
				echo "<div id='nilai'>Nama Lengkap : buluk wakwaw</div>";
				break;	
			default:
				# code...
				break;
		}
	}
	 ?>
        </div>
    </center>
</body>

</html>