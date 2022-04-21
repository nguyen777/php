<html>
<head><title>:: Weicome to PHP</title></head>
<body>

<?php
//đảo ngược chuỗi
// echo strrev("Hello World!");

class car {
    public $mauxe;
    public $hang;
    public function __construct($mauxe,$hang)
    {
        $this->mauxe= $mauxe;
        $this->hang = $hang;
        
    }
    public function message(){

        return "tôi có xe màu " .$this->mauxe ." cua hang " .$this->hang;
    }
}
$mycar = new car("đỏ","toyota");
echo $mycar->message();
 
?>
</body>
</html>