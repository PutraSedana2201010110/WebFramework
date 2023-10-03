<?php 
class mobil {
    private $kecepatan = 0;

    private function tampilkanKecepatan(){
        return "Kecepatan: " .$this->kecepatan . "km/jam";
    } 

    public function tambahKecepatan ($nilai) {
        $this->kecepatan += $nilai;
        echo $this->tampilkanKecepatan();
    }
}

class contoh{
    private function privateMethod() {
        echo "Ini adalah private Method. ";
    }

    public function publicMethod() {
        // Mengakses private method dari dalam kelas
        $this->privateMethod();
    }
}

$mobil = new Mobil();
$mobil->tambahKecepatan(50); //  Output: Kecepatan 50 km/jm
echo $mobil->tambahKecepatan(); // Akan menghasilkan error karena metode private

$contoh = new Contoh();
$contoh->publicMethod(); // Ini adalah private method.

?>