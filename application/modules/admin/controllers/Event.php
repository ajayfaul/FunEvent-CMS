<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Event extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Event_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

      $dataevent=$this->Event_model->get_all();//panggil ke modell
      $datafield=$this->Event_model->get_field();//panggil ke modell

      $data = array(
        'contain_view' => 'admin/event/event_list',
        'sidebar'=>'admin/sidebar',
        'css'=>'admin/crudassets/css',
        'script'=>'admin/crudassets/script',
        'dataevent'=>$dataevent,
        'datafield'=>$datafield,
        'module'=>'admin',
        'titlePage'=>'event',
        'controller'=>'event'
       );
      $this->template->load($data);
    }


    public function create(){
      $data = array(
        'contain_view' => 'admin/event/event_form',
        'sidebar'=>'admin/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'admin/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'admin/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
        'action'=>'admin/event/create_action',
        'module'=>'admin',
        'titlePage'=>'event',
        'controller'=>'event'
       );
      $this->template->load($data);
    }

    public function edit($id){
      $dataedit=$this->Event_model->get_by_id($id);
      $data = array(
        'contain_view' => 'admin/event/event_edit',
        'sidebar'=>'admin/sidebar',//Ini buat menu yang ditampilkan di module admin {DIKIRIM KE TEMPLATE}
        'css'=>'admin/crudassets/css',//Ini buat kirim css dari page nya  {DIKIRIM KE TEMPLATE}
        'script'=>'admin/crudassets/script',//ini buat javascript apa aja yang di load di page {DIKIRIM KE TEMPLATE}
        'action'=>'admin/event/update_action',
        'dataedit'=>$dataedit,
        'module'=>'admin',
        'titlePage'=>'event',
        'controller'=>'event'
       );
      $this->template->load($data);
    }


    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_event' => $this->input->post('nama_event',TRUE),
		'tanggal_mulai' => $this->input->post('tanggal_mulai',TRUE),
		'tanggal_selesai' => $this->input->post('tanggal_selesai',TRUE),
		'jam_mulai' => $this->input->post('jam_mulai',TRUE),
		'jam_selesai' => $this->input->post('jam_selesai',TRUE),
		'kota' => $this->input->post('kota',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'gambar' => $this->input->post('gambar',TRUE),
	    );

            $this->Event_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('admin/event'));
        }
    }



    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($this->input->post('id_event', TRUE));
        } else {
            $data = array(
		'nama_event' => $this->input->post('nama_event',TRUE),
		'tanggal_mulai' => $this->input->post('tanggal_mulai',TRUE),
		'tanggal_selesai' => $this->input->post('tanggal_selesai',TRUE),
		'jam_mulai' => $this->input->post('jam_mulai',TRUE),
		'jam_selesai' => $this->input->post('jam_selesai',TRUE),
		'kota' => $this->input->post('kota',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
		'gambar' => $this->input->post('gambar',TRUE),
	    );

            $this->Event_model->update($this->input->post('id_event', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('admin/event'));
        }
    }

    public function delete($id)
    {
        $row = $this->Event_model->get_by_id($id);

        if ($row) {
            $this->Event_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/event'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/event'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('nama_event', 'nama event', 'trim|required');
	$this->form_validation->set_rules('tanggal_mulai', 'tanggal mulai', 'trim|required');
	$this->form_validation->set_rules('tanggal_selesai', 'tanggal selesai', 'trim|required');
	$this->form_validation->set_rules('jam_mulai', 'jam mulai', 'trim|required');
	$this->form_validation->set_rules('jam_selesai', 'jam selesai', 'trim|required');
	$this->form_validation->set_rules('kota', 'kota', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
	$this->form_validation->set_rules('gambar', 'gambar', 'trim|required');

	$this->form_validation->set_rules('id_event', 'id_event', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}