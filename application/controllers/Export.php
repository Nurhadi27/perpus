<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require('vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class Export extends MY_Controller {


	public function __construct(){
		parent::__construct();

          $this->load->model('Buku_model');
    }
    
    public function index()
     {
          $data['semua_buku'] = $this->Buku_model->getAllData()->result();
          $this->load->view('export', $data);
     }

     public function export()
     {
          

          $spreadsheet = new Spreadsheet;

          $spreadsheet->setActiveSheetIndex(0)
                      ->setCellValue('A1', 'No')
                      ->setCellValue('B1', 'ID Buku')
                      ->setCellValue('C1', 'ISBN')
                      ->setCellValue('D1', 'Judul')
                      ->setCellValue('E1', 'Kategori')
                      ->setCellValue('F1', 'Penerbit')
                      ->setCellValue('G1', 'Pengarang')
                      ->setCellValue('H1', 'No Rak')
                      ->setCellValue('I1', 'Tahun Terbit')
                      ->setCellValue('J1', 'Total Stok')
                      ->setCellValue('K1', 'Keterangan');

          $kolom = 2;
          $nomor = 1;
          $data_buku = $this->Buku_model->getAllData("tb_buku");
		$data_kategori = $this->Buku_model->getAllData("tb_kategori");
		$data_penerbit = $this->Buku_model->getAllData("tb_penerbit");
		$data_pengarang = $this->Buku_model->getAllData("tb_pengarang");
          $data_rak = $this->Buku_model->getAllData("tb_rak");
          $model = $this->Buku_model;
     
          foreach($data_buku->result_array() as $op) {   
               foreach ($data_kategori ->result_array()  as $op2) {
                    if($op2['id_kategori']==$op['id_kategori']){
                         $kategori = $op2['kategori'];
                    }
               }
               foreach ($data_penerbit ->result_array()  as $op2) {
                    if($op2['id_penerbit']==$op['id_penerbit']){
                        $penerbit = $op2['nama_penerbit'];
                    }
               }
               foreach ($data_pengarang->result_array()  as $op2) {
                    if($op2['id_pengarang']==$op['id_pengarang']){
                        $pengarang = $op2['nama_pengarang'];
                    }
               }
               foreach ($data_rak->result_array()  as $op2) {
                    if($op2['no_rak']==$op['no_rak']){
                        $no_rak = $op2['nama_rak'];
                    }
                  }
               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $op['id_buku'])
                           ->setCellValue('C' . $kolom, $op['ISBN'])
                           ->setCellValue('D' . $kolom, $op['judul'])
                           ->setCellValue('E' . $kolom, $kategori)
                           ->setCellValue('F' . $kolom, $penerbit)
                           ->setCellValue('G' . $kolom, $pengarang)
                           ->setCellValue('H' . $kolom, $no_rak)
                           ->setCellValue('I' . $kolom, $op['thn_terbit'])
                           ->setCellValue('J' . $kolom, $op['stok'])
                           ->setCellValue('K' . $kolom, $op['ket']);

                           

               $kolom++;
               $nomor++;

          }

          $writer = new Xlsx($spreadsheet);
          ob_end_clean();
          // We'll be outputting an excel file
          header('Content-type: application/vnd.ms-excel');
          header('Content-Disposition: attachment; filename="Data_Buku.xlsx"');
	     $writer->save('php://output');
     }
}