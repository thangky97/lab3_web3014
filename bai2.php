<?php

class ConNguoi
{
    function __construct($ten, $tuoi, $gioiTinh, $ngaySinh, $canNang, $chieuCao)
    {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
        $this->gioiTinh = $gioiTinh;
        $this->ngaySinh = $ngaySinh;
        $this->canNang = $canNang;
        $this->chieuCao = $chieuCao;
    }
}

class MonThiDau
{
    public $tenMon;
    public $chieuCao;
    public $canNang;

    public function __construct($tenMon, $chieuCao, $canNang)
    {
        $this->tenMon = $tenMon;
        $this->chieuCao = $chieuCao;
        $this->canNang  = $canNang;
    }
}

class VanDongVien extends ConNguoi
{
    protected $huyChuong;
    protected $cacMonThiDau;

    function __construct($ten, $tuoi, $gioiTinh, $ngaySinh, $canNang, $chieuCao, $huyChuong, $cacMonThiDau)
    {
        $this->ten = $ten;
        $this->tuoi = $tuoi;
        $this->gioiTinh = $gioiTinh;
        $this->ngaySinh = $ngaySinh;
        $this->canNang = $canNang;
        $this->chieuCao = $chieuCao;;
        $this->huyChuong = $huyChuong;
        $this->cacMonThiDau = $cacMonThiDau;
    }

    public function hienThiThongTin()
    {
        $cacMonThiDau = implode(", ", $this->cacMonThiDau);
        return "
        Tên: $this->ten <br>
        Tuổi: $this->tuoi <br>
        Giới tính: $this->gioiTinh <br>
        Ngày sinh: $this->ngaySinh <br>
        Cân nặng: $this->canNang <br>
        Chiều cao: $this->chieuCao <br>
        Số huy chương: $this->huyChuong <br>
        Các môn đã thi đấu: $cacMonThiDau <br>";
    }

    public function thiDau($monThidau, $soHuyChuong)
    {
        if ($this->chieuCao < $monThidau->chieuCao || $this->canNang < $monThidau->canNang) {
            $this->huyChuong -= $soHuyChuong;
        }
        return "Tổng số huy chương: $this->huyChuong";
    }
}

echo "<h2>Thông tin vận động viên</h2>";
$vanDongVien = new VanDongVien("Nguyễn Thị Kim Ngân", 22, "Nữ", "6/11/2002", 54, 168, 10, ["Đá bóng", "Nhảy cao"]);
echo ($vanDongVien->hienThiThongTin());
$monThidau = new monThiDau("Đá bóng", 160, 62);

echo ($vanDongVien->thiDau($monThidau, 2));
