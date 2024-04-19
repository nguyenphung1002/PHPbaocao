<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class C_khach_hang
{
    public function khach_hang()
    {
        if (isset($_SESSION['makh'])) {     
            include("models/m_khach_hang.php");
            $m_khach_hang=new M_khach_hang();
            $ma_kh= $_SESSION['makh'];
            $kh=$m_khach_hang-> Doc_khach_hang_theo_ma_kh($ma_kh);
            if (isset($_POST['luu'])) {
                $this->Sua_khach_hang($ma_kh,$m_khach_hang);
                $_SESSION['ma_hoa_don']=$this->luu_gio_hang($ma_kh);
                header('Location: dat-hang-thanh-cong.html');
            }
            include("c_data_contact.php");
            include("models/m_hoa.php");
            $m_hoa=new M_hoa();
            $hoa=$m_hoa->doc_tat_ca_hoa();
            include("Smarty_shop_hoa.php");
            $smarty = new Smarty_Shop_Hoa();
            $title = "Thông tin khách hàng";
            $view = "views/v_khach_hang.tpl";
            include("c_smarty_info.php");
            $smarty->assign('kh', $kh);
            $smarty->assign('hoa', $hoa);
            $smarty->display("layout.tpl");
        }
        else{
             header('Location: dang-nhap.html');
        }
    }
    public function Sua_khach_hang($ma_kh,$m_khach_hang)
    {
        $_SESSION['hoTen']=$_POST['ten_kh'];
        $phai=$_POST['phai'];
        $dia_chi=$_POST['dia_chi'];
        $_SESSION['dien_thoai']=$_POST['dien_thoai'];
        $m_khach_hang->Sua_khach_hang($_SESSION['hoTen'], $phai, $dia_chi, $_SESSION['dien_thoai'],$ma_kh);
    }
    public function luu_gio_hang($ma_kh)
    {
        include("models/m_hoa_don.php");
        $m_hoa_don=new M_hoa_don();
        $ma_hoa_don=$m_hoa_don->luu_hoa_don($ma_kh, $_SESSION['tong_tt']);
        foreach ($_SESSION["giohang"] as $k=>$value) {
            $m_hoa_don->luu_chi_tiet_hoa_don($k, $value, $ma_hoa_don);
        }
        return $ma_hoa_don;
    }
    public function CapNhapSoLuongHoa()
    {
        include("models/m_hoa.php");
        $m_hoa=new M_hoa();
        foreach ($_SESSION["giohang"] as $k=>$value) {
            $sl_hoa_db=$m_hoa->doc_hoa_theo_ma($k)->SoLuongSP;
            $sl=$sl_hoa_db-$value;
            $m_hoa->CapNhapSoLuongHoa($sl, $k);
        }
    }
    
    public function luu_du_lieu()
    {
      if (isset($_SESSION['giohang'])) {
        $this->CapNhapSoLuongHoa();
        
        unset($_SESSION['giohang']);
        unset($_SESSION['ma_hoa_don']);
        unset($_SESSION['tong_tt']);
        unset($_SESSION['tong_gio_hang']);
        include("c_data_contact.php");
        include("Smarty_shop_hoa.php");
        $smarty = new Smarty_Shop_Hoa();
        $title ="Đặt hàng thành công";
        $view = "views/v_dh_thanh_cong.tpl";
        include("c_smarty_info.php");
        $smarty->display("layout.tpl");
    } else{
      header('Location: .');
    }
  }
}
