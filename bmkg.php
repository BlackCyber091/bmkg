#!/usr/bin/php
<?php
// Data Gempa Terkini
// Coded By Mr.Devil
// DrCyberTeam.ID

function main(){
	$url = "http://data.bmkg.go.id/autogempa.xml";
	$get = file_get_contents($url, False);
	$data = simplexml_load_string($get) or die("Error: Cannot create object");
	print " Tanggal   : ".$data->gempa->Tanggal."\n";
	print " Jam       : ".$data->gempa->Jam."\n";
	print "\n";
	print "\033[1;92m"; // BIBlue
	print " Lintang   : ".$data->gempa->Lintang."\n";
	print " Bujur     : ".$data->gempa->Bujur."\n";
	print " Magnitude : ".$data->gempa->Magnitude."\n";
	print " Kedalaman : ".$data->gempa->Kedalaman."\n";
	print "\n";
	print "\033[1;95m"; // BIPurple
	print " Wilayah   : ".$data->gempa->Wilayah1."\n";
	print " Potensi   : ".$data->gempa->Potensi."\n";
	print "\033[0m"; // Normal
}
system('clear');
print "\033[1;33m"; // BYellow
print "============================================= \n";
print "        INFO GEMPA DAN TSUNAMI TERINI         \n";
print "  Gampa Terkini yang diambil dari data BMKG   \n";
print "                                              \n";
print "     Mod By     : Mr.Devil                    \n";
print "     Contact Me : 08989956xxx                 \n";
print "     Instagram  : RanggaHarsya01              \n";
print "     Thanks to  : DrCyberTeam                 \n";
print "                                              \n";
print "  Semoga kita dalam lindungan ALLAH S.W.T     \n";
print "============================================= \n";
print "\033[0m"; // Normal
main();
?>
