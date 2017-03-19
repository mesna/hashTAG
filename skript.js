document.getElementById('tekstiala').onkeyup = function(){
	var kaunter = this.value.length;
	document.getElementById('kaunter').innerHTML = "Tähemärke alles: " + (255 - kaunter);
}
