<?php include_once('select_tanggal_berakhir.php'); ?>
<p id="demo"></p>
<script>
	var countDownDate = new Date("<?php echo $time; ?>").getTime();

	var x = setInterval(function() {

	    var now = new Date().getTime();

	    var distance = countDownDate - now;

	    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	    
	    document.getElementById("demo").innerHTML = days + "h " + hours + "j "
	    + minutes + "m " + seconds + "d ";
	    
	    if (distance < 0) {
	        clearInterval(x);
	        document.getElementById("demo").innerHTML = "Barang Ini Sudah Terjual";
	    }
	}, 1000);
</script>