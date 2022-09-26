
<?php
interface PhepTinh
{
    public function phepCong();
    public function phepTru();
    public function phepNhan();
    public function phepChia();
}

class TinhToan implements PhepTinh
{
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    function phepCong()
    {
        return $this->a + $this->b;
    }

    function phepTru()
    {
        return $this->a - $this->b;
    }

    function phepNhan()
    {
        return $this->a * $this->b;
    }

    function phepChia()
    {
        return $this->a / $this->b;
    }
}

$tinhtoan = new TinhToan(20, 10);
echo "Số a = 20, b = 10;";
echo '<pre>';
echo "<br> Phép Cộng: ";
echo ($tinhtoan->phepCong());
echo "<br> Phép Trừ: ";
echo ($tinhtoan->phepTru());
echo "<br> Phép Nhân: ";
echo ($tinhtoan->phepNhan());
echo "<br> Phép Chia: ";
echo ($tinhtoan->phepChia());
