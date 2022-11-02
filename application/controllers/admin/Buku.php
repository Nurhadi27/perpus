<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buku extends MY_Controller {


	public function __construct(){
		parent::__construct();

		$this->load->model('Buku_model');
	}

	//menampilkan daftar buku
	public function buku()
	{
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		/*jika status login Yes dan status admin tampilkan*/
		if(!empty($cek) && $stts=='admin')
		{
			/*layout*/	
			$data['title']='Daftar buku';
			$data['pointer']="buku/buku";
			$data['classicon']="fa fa-book";
			$data['main_bread']="Data Buku";
			$data['sub_bread']="Daftar Buku";
			$data['desc']="Data Master Buku, Menampilkan data Buku Perpustakaan";

			/*data yang ditampilkan*/
			$data['data_buku'] = $this->Buku_model->getAllData("tb_buku");
			$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
			$data['data_penerbit'] = $this->Buku_model->getAllData("tb_penerbit");
			$data['data_pengarang'] = $this->Buku_model->getAllData("tb_pengarang");
			$data['data_rak'] = $this->Buku_model->getAllData("tb_rak");
			$data['model'] = $this->Buku_model;
			/*masukan data kedalam view */
			//$data['js']=$this->load->view('admin/buku/js');
			$tmp['content']=$this->load->view('admin/buku/R_buku',$data, TRUE);
			$this->load->view('admin/layout',$tmp);
		}
		else
		/*jika status login NO atau status bukan admin kembalikan ke login*/
		{
			header('location:'.base_url().'web/log');
		}
	}

	//hapus buku
	public function hapus_buku()
	{
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			$id_buku = $this->input->get('id_buku', TRUE);			
			$hapus = array('id_buku' => $id_buku);
			
			$this->Buku_model->deleteData('tb_buku',$hapus);
			header('location:'.base_url().'admin/Buku/buku');
		}
		else
		{
			header('location:'.base_url().'web/log');
		}
	}

	//tambah buku
	public function tambah_buku()
	{
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{	

			$this->form_validation->set_rules('id_buku', 'id_buku', 'required');
			$this->form_validation->set_rules('judul', 'judul', 'required');
			$this->form_validation->set_rules('kategori', 'kategori', 'required');
			$this->form_validation->set_rules('penerbit', 'penerbit', 'required');
			$this->form_validation->set_rules('pengarang', 'pengarang', 'required');			
			$this->form_validation->set_rules('no_rak', 'no_rak', 'required');
			if ($this->form_validation->run() === FALSE)
			{
				/*layout*/	
				$data['title']='Tambah Buku';
				$data['pointer']="buku/buku";
				$data['classicon']="fa fa-book";
				$data['main_bread']="Daftar Buku";
				$data['sub_bread']="Tambah Buku";
				$data['desc']="Form menambahkan data buku Perpustakaan";

				/*data yang ditampilkan*/
				$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
				$data['data_penerbit'] = $this->Buku_model->getAllData("tb_penerbit");
				$data['data_pengarang'] = $this->Buku_model->getAllData("tb_pengarang");
				$data['data_rak'] = $this->Buku_model->getAllData("tb_rak");
				/*masukan data kedalam view */
				$tmp['content']=$this->load->view('admin/buku/C_buku',$data, TRUE);
				$this->load->view('admin/layout',$tmp);
			}
			else
			{
				$this->db->where('id_buku',$this->input->post('id_buku'));
				$isi=$this->db->count_all_results('tb_buku');
				if($isi==0){
					$data= array (
							'id_buku' => $this->input->post('id_buku'),
							'ISBN' => $this->input->post('ISBN'),
							'judul' => $this->input->post('judul'),
							'id_kategori' => $this->input->post('kategori'),
							'id_penerbit' => $this->input->post('penerbit'),
							'id_pengarang' => $this->input->post('pengarang'),
							'no_rak' => $this->input->post('no_rak'),
							'thn_terbit' => $this->input->post('thn_terbit'),
							'ket' => $this->input->post('keterangan'),
						);

							$this->Buku_model->insertData('tb_buku',$data);
							redirect ('admin/Buku/buku');
				}
				else 
					{
					/*layout*/	
					$data['title']='Tambah Buku';
					$data['pointer']="buku/buku";
					$data['classicon']="fa fa-book";
					$data['main_bread']="Daftar Buku";
					$data['sub_bread']="Tambah Buku";
					$data['desc']="Form menambahkan data buku Perpustakaan";

					/*data yang ditampilkan*/
					$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
					$data['data_penerbit'] = $this->Buku_model->getAllData("tb_penerbit");
					$data['data_pengarang'] = $this->Buku_model->getAllData("tb_pengarang");
					$data['data_rak'] = $this->Buku_model->getAllData("tb_rak");
					/*masukan data kedalam view */
					$tmp['content']=$this->load->view('admin/buku/C_buku',$data, TRUE);
					$this->load->view('admin/layout',$tmp);
				
				}
			}
		}
		else
		{
		
			header('location:'.base_url().'web/log');
		}
	}

	//edit buku
	public function edit_buku()
	{
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{	
			$id_buku = $this->input->get('id_buku', TRUE);	
				
			/*layout*/	
				$data['title']='Edit Buku';
				$data['pointer']="buku/buku";
				$data['classicon']="fa fa-book";
				$data['main_bread']="Daftar Buku";
				$data['sub_bread']="Edit Buku";
				$data['desc']="Form untuk melakukan edit data buku Perpustakaan";

				/*data yang ditampilkan*/
				$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
				$data['data_penerbit'] = $this->Buku_model->getAllData("tb_penerbit");
				$data['data_pengarang'] = $this->Buku_model->getAllData("tb_pengarang");
				$data['data_rak'] = $this->Buku_model->getAllData("tb_rak");
				$data['buku'] = $this->Buku_model->get_detail('tb_buku','id_buku', $id_buku);
				
				/*masukan data kedalam view */
				$tmp['content']=$this->load->view('admin/buku/U_buku',$data, TRUE);
				$this->load->view('admin/layout',$tmp);		
		}
		else
		{
			header('location:'.base_url().'web/log');
		}
	}

	//update buku
	public function update_buku()
	{
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{	
			$this->form_validation->set_rules('judul', 'judul', 'required');
			$this->form_validation->set_rules('kategori', 'kategori', 'required');
			$this->form_validation->set_rules('penerbit', 'penerbit', 'required');
			$this->form_validation->set_rules('pengarang', 'pengarang', 'required');			
			$this->form_validation->set_rules('no_rak', 'no_rak', 'required');
			

			$id_buku=$this->input->post('id');
		
			
			if ($this->form_validation->run() === FALSE)
			{
				$data['title']='Edit Buku';
				$data['pointer']="buku/buku";
				$data['classicon']="fa fa-book";
				$data['main_bread']="Daftar Buku";
				$data['sub_bread']="Edit Buku";
				$data['desc']="Form untuk melakukan edit data buku Perpustakaan";

				/*data yang ditampilkan*/
				$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
				$data['data_penerbit'] = $this->Buku_model->getAllData("tb_penerbit");
				$data['data_pengarang'] = $this->Buku_model->getAllData("tb_pengarang");
				$data['data_rak'] = $this->Buku_model->getAllData("tb_rak");
				$data['buku'] = $this->Buku_model->get_detail('tb_buku','id_buku', $id_buku);
				
				/*masukan data kedalam view */
				$tmp['content']=$this->load->view('admin/buku/U_buku',$data, TRUE);
				$this->load->view('admin/layout',$tmp);		
			}
			else
			{
				$data= array (
							'ISBN' => $this->input->post('ISBN'),
							'judul' => $this->input->post('judul'),
							'id_kategori' => $this->input->post('kategori'),
							'id_penerbit' => $this->input->post('penerbit'),
							'id_pengarang' => $this->input->post('pengarang'),
							'no_rak' => $this->input->post('no_rak'),
							'thn_terbit' => $this->input->post('thn_terbit'),
							'ket' => $this->input->post('keterangan'),
						);

				$this->Buku_model->updateData('tb_buku',$data,$id_buku,'id_buku');
				redirect('admin/Buku/Buku','refresh');
				

			}
		
		}
		else
		{
			header('location:'.base_url().'web/log');
		}
	}

	//menampilkan daftar detail stock buku
	public function detail_stok(){
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		/*jika status login Yes dan status admin tampilkan*/
		if(!empty($cek) && $stts=='admin')
		{
			$id_buku = $this->input->get('id_buku', TRUE);	
			/*layout*/	
			$data['title']='Daftar Detail Stock Buku';
			$data['pointer']="buku/buku/";
			$data['classicon']="fa fa-book";
			$data['main_bread']="Data Buku";
			$data['sub_bread']="Detail Stock Buku";
			$data['desc']="Data Detail Stock, Menampilkan Detail Stock Buku Perpustakaan";

			/*data yang ditampilkan*/
			$data['data_stok_buku'] = $this->Buku_model->get_detail("tb_detail_buku",'id_buku', $id_buku);
			$data['data_kategori'] = $this->Buku_model->getAllData("tb_kategori");
			$data['data_penerbit'] = $this->Buku_model->getAllData("tb_penerbit");
			$data['data_pengarang'] = $this->Buku_model->getAllData("tb_pengarang");
			$data['data_rak'] = $this->Buku_model->getAllData("tb_rak");
			$data['id']= $id_buku;
			$data['error']="";
			
			/*masukan data kedalam view */
			$tmp['content']=$this->load->view('admin/buku/R_detail_stok',$data, TRUE);
			$this->load->view('admin/layout',$tmp);
		}
		else
		/*jika status login NO atau status bukan admin kembalikan ke login*/
		{
			header('location:'.base_url().'web/log');
		}
	}

	//hapus detail buku
	public function hapus_det_buku()
	{
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			
			$id_buku = $this->input->get('id_buku',TRUE);		
			$id_det_buku = $this->input->get('id_detail_buku',TRUE);	

			$hapus = array('id_detail_buku' => $id_det_buku);
			$status=$this->Buku_model->get_detail1('tb_detail_buku','id_detail_buku',$id_det_buku);
			//jika status buku tersedia, maka dapat dihapus. jika status dipinjamkan tidak dapat dihapus
			if($status['status']==1){
			$this->Buku_model->deletedetData('tb_detail_buku','id_detail_buku',$id_det_buku);
			$stok_sebelum=$this->Buku_model->get_stok($id_buku)->stok;
			$stok_sesudah=$stok_sebelum-1;
			$data2= array (
						'stok' => $stok_sesudah,
			);
			$this->Buku_model->updateData('tb_buku',$data2,$id_buku,'id_buku');
			header('location:'.base_url().'admin/buku/detail_stok/?id_buku='.$id_buku.'');
			}else{
				//tampilkan error
				 $this->session->set_flashdata("message","<div class='callout callout-info'>
                <h4>Info!</h4>
                <p>Data stok buku tidak dapat dihapus karena status dipinjamkan</p>
                </div>");
            header('location:'.base_url().'admin/buku/detail_stok/?id_buku='.$id_buku.'');
			}
		}
		else
		{
			header('location:'.base_url().'web/log');
		}
	}

	//tambah detail buku
	public function tambah_det_buku()
	{
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{	
			
			$this->form_validation->set_rules('no_buku1', 'no_buku1', 'required');
			$this->form_validation->set_rules('no_buku2', 'no_buku2', 'required');

			$id_buku = $this->input->get('id_buku', TRUE);		


			if ($this->form_validation->run() === FALSE)
			{
				/*layout*/	
				$data['title']='Tambah Detail Stok Buku';
				$data['pointer']='buku/detail_stok/?id_buku='.$id_buku.'';
				$data['classicon']="fa fa-book";
				$data['main_bread']="Detail Stok Buku";
				$data['sub_bread']="Tambah Detail Stok";
				$data['desc']="Form menambahkan data detail stok buku Perpustakaan";
				$data['id_buku']=$id_buku;
				/*masukan data kedalam view */
				$tmp['content']=$this->load->view('admin/buku/C_detail_stok',$data, TRUE);
				$this->load->view('admin/layout',$tmp);
			}
			else
			{
					//ambil id buku
					$id_buku = $this->input->post('id_buku');
					
					//ambil no awal dan no akhir buku (range)
					$no_awal=$this->input->post('no_buku1');
					$no_akhir=$this->input->post('no_buku2');

					//validasi no awal tidak boleh lebih besar dari no akhir
					if($no_awal>$no_akhir){
						//tampilkan error
						 $this->session->set_flashdata("message","<div class='callout callout-info'>
		                <h4>Info!</h4>
		                <p>No awal tidak boleh lebih besar dari No akhir</p>
		                </div>");
		            header('location:'.base_url().'admin/buku/tambah_det_buku/?id_buku='.$id_buku.'');
					}
					else{

					//deklarasi array
					$no_buku=array();
					$data=array();
					//masukan masing - masing no buku awal sampai akhir
					for ($i=$no_awal; $i <= $no_akhir  ; $i++) { 
						$no_buku[]=$i;
					}
					//hitung jumlah buku
					$jml=count($no_buku);
					//masukan no buku beserta id buku dan status nya
					for ($i=0; $i < $jml  ; $i++) { 
					$data[]= array (
							'id_buku' => $this->input->post('id_buku'),
							'no_buku' => $no_buku[$i],
							'status' => $this->input->post('status'),
						);
					}
					
					//insert buku dengan no buku secara berurutan sesuai range
					 	$this->Buku_model->insertData_batch('tb_detail_buku',$data);

					//update stock
					$stok_sebelum=$this->Buku_model->get_stok($id_buku)->stok;
					$stok_sesudah=$stok_sebelum+$jml;
					$data2= array (
							'stok' => $stok_sesudah,
						);
					$this->Buku_model->updateData('tb_buku',$data2,$id_buku,'id_buku');

					header('location:'.base_url().'admin/buku/detail_stok/?id_buku='.$id_buku.'');
					}
			
			}
		}
		else
		{
		
			header('location:'.base_url().'web/log');
		}
	}

	//edit buku
	public function edit_det_buku()
	{
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{	
			$id_det_buku = $this->input->get('id_detail_buku', TRUE);	
			$id_buku = $this->input->get('id_buku', TRUE);		

			/*layout*/	
				$data['title']='Edit Detail Stok Buku';
				$data['pointer']='buku/detail_stok/?id_buku='.$id_buku.'';
				$data['classicon']="fa fa-book";
				$data['main_bread']="Detail Stok Buku";
				$data['sub_bread']="Edit Stok Buku";
				$data['desc']="Form untuk melakukan edit detail stok buku Perpustakaan";
				$data['id_detail_buku']=$id_det_buku;
				$data['id_buku']=$id_buku;
				$data['det_buku'] = $this->Buku_model->get_detail('tb_detail_buku','id_detail_buku', $id_det_buku);
				
				/*masukan data kedalam view */
				$tmp['content']=$this->load->view('admin/buku/U_detail_stok',$data, TRUE);
				$this->load->view('admin/layout',$tmp);		
		}
		else
		{
			header('location:'.base_url().'web/log');
		}
	}

	//update buku
	public function update_det_buku()
	{
		$data['log']=$this->db->get_where('tb_petugas',array('id_petugas' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			$id_det_buku = $this->input->get('id_det_buku', TRUE);		
			$id_buku = $this->input->get('id_buku', TRUE);

			$this->form_validation->set_rules('no_buku', 'no_buku', 'required');
					
			if ($this->form_validation->run() === FALSE)
			{
				$data['title']='Edit Detail Stok Buku';
				$data['pointer']='buku/detail_stok/?id_buku='.$id_buku.'';
				$data['classicon']="fa fa-book";
				$data['main_bread']="Detail Stok Buku";
				$data['sub_bread']="Edit Stok Buku";
				$data['desc']="Form untuk melakukan edit detail stok buku Perpustakaan";
				$data['det_buku'] = $this->Buku_model->get_detail('tb_detail_buku','id_detail_buku', $id_det_buku);
				
				/*masukan data kedalam view */
				$tmp['content']=$this->load->view('admin/buku/U_detail_stok',$data, TRUE);
				$this->load->view('admin/layout',$tmp);		
				
			}
			else
			{
				
					$id_buku = $this->input->post('id_buku');
					$data= array (
							'id_buku' => $this->input->post('id_buku'),
							'no_buku' => $this->input->post('no_buku'),
							'status' => $this->input->post('status'),
						);
				
					$this->Buku_model->updateData('tb_detail_buku',$data,$id_det_buku,'id_detail_buku');		
					header('location:'.base_url().'admin/buku/detail_stok/?id_buku='.$id_buku.'');
			
			}
			
		
		}
		else
		{
			header('location:'.base_url().'web/log');
		}
	}
/*
	public function export(){
		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		
		// Panggil class PHPExcel nya
		$excel = new PHPExcel();
		// Settingan awal fil excel
		$excel->getProperties()->setCreator('Perpus')
					 ->setLastModifiedBy('Perpus')
					 ->setTitle("Data Buku")
					 ->setSubject("Buku")
					 ->setDescription("Laporan Semua Data Buku")
					 ->setKeywords("Data Buku");
		// Buat sebuah variabel untuk menampung pengaturan style dari header tabel
		$style_col = array(
		  'font' => array('bold' => true), // Set font nya jadi bold
		  'alignment' => array(
			'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
		  ),
		  'borders' => array(
			'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
			'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
			'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
			'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
		  )
		);
		// Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
		$style_row = array(
		  'alignment' => array(
			'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
		  ),
		  'borders' => array(
			'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
			'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
			'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
			'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
		  )
		);
		$excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA BUKU"); // Set kolom A1 dengan tulisan "DATA BUKU"
		$excel->getActiveSheet()->mergeCells('A1:E1'); // Set Merge Cell pada kolom A1 sampai E1
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
		$excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
		$excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
		// Buat header tabel nya pada baris ke 3
		$excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
		$excel->setActiveSheetIndex(0)->setCellValue('B3', "ID Buku"); // Set kolom B3 dengan tulisan "NIS"
		$excel->setActiveSheetIndex(0)->setCellValue('C3', "ISBN"); // Set kolom C3 dengan tulisan "NAMA"
		$excel->setActiveSheetIndex(0)->setCellValue('D3', "JUDUL"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
		$excel->setActiveSheetIndex(0)->setCellValue('E3', "KATEGORI"); // Set kolom E3 dengan tulisan "ALAMAT"
		$excel->setActiveSheetIndex(0)->setCellValue('F3', "PENERBIT"); 
		$excel->setActiveSheetIndex(0)->setCellValue('G3', "PENGARANG"); 
		$excel->setActiveSheetIndex(0)->setCellValue('H3', "NO RAK"); 
		$excel->setActiveSheetIndex(0)->setCellValue('I3', "TAHUN TERBIT"); 
		$excel->setActiveSheetIndex(0)->setCellValue('J3', "KETERANGAN"); 
		// Apply style header yang telah kita buat tadi ke masing-masing kolom header
		$excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
		$excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
		// Panggil function view yang ada di BukuModel untuk menampilkan semua data siswanya
		$buku = $this->Buku_model->view();
		$no = 1; // Untuk penomoran tabel, di awal set dengan 1
		$numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
		foreach($buku as $data){ // Lakukan looping pada variabel siswa
		  $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
		  $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $data->id_buku);
		  $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, $data->ISBN);
		  $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $data->judul);
		  $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $data->kategori);
		  $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $nama_penerbit);
		  $excel->setActiveSheetIndex(0)->setCellValue('G'.$numrow, $data->nama_pengarang);
		  $excel->setActiveSheetIndex(0)->setCellValue('H'.$numrow, $data->nama_rak);
		  $excel->setActiveSheetIndex(0)->setCellValue('I'.$numrow, $data->thn_terbit);
		  $excel->setActiveSheetIndex(0)->setCellValue('J'.$numrow, $data->ket);
		  
		  // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
		  $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('E'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
		  $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
		  $no++; // Tambah 1 setiap kali looping
		  $numrow++; // Tambah 1 setiap kali looping
		}
		// Set width kolom
		$excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
		$excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
		$excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
		$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
		$excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
		$excel->getActiveSheet()->getColumnDimension('F')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('I')->setWidth(30);
		$excel->getActiveSheet()->getColumnDimension('J')->setWidth(30);

		// Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
		$excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
		// Set orientasi kertas jadi LANDSCAPE
		$excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
		// Set judul file excel nya
		$excel->getActiveSheet(0)->setTitle("Laporan Data Buku");
		$excel->setActiveSheetIndex(0);
		// Proses file excel
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="Data Buku.xlsx"'); // Set nama file excel nya
		header('Cache-Control: max-age=0');
		$write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
		$write->save('php://output');
	
}*/
}
