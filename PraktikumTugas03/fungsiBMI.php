<?php
class BMI {
    public $tinggi;
    public $berat;
    function __construct($tinggi, $berat) {
        $tinggi = $tinggi / 100;
        $this->BMI = $berat / ($tinggi ** 2);
    }
    function get_BMI() {
        $this->BMI = round($this->BMI, 2);
        return $this->BMI;
    }
    function get_hasil (){
        if ($this->BMI <= 18,5{
            $hasilBMI = "Kekurangan berat badan";
        }
        elseif ($this->BMI >= 18,6 and $this->BMI <= 24,9){
            $hasilBMI = "Normal (ideal)";
        }
        elseif ($this->BMI >= 25 and $this->BMI >= 29,9) {
            $hasilBMI = "Kelebihan berat badan";
        }
        elseif ($this->BMI > 30){
            $hasilBMI = "Kegemukan (Obesitas)";
        }
    }
}

$orang = new BMI($_GET['tinggi'],$_GET['berat']);
echo $orang->get_BMI();
?>