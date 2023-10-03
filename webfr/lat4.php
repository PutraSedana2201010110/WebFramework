<?php
class hewan{
    protected $jenis;

    protected function tampilkanJenis() {
        return "Jenis hewan: " . $this->jenis;
    }
}

class kucing extends Hewan {
    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    public function info() {
        echo $this->tampilkanJenis();
    }
}

$kucing = new kucing();
$kucing->setJenis("Kucing Persia");
$kucing->info(); // output: Jenis hewan : Kucing Persia

?>