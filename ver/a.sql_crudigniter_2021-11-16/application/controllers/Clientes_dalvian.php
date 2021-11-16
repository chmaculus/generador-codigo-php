<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Clientes_dalvian extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Clientes_dalvian_model');
    } 

    /*
     * Listing of clientes_dalvian
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('clientes_dalvian/index?');
        $config['total_rows'] = $this->Clientes_dalvian_model->get_all_clientes_dalvian_count();
        $this->pagination->initialize($config);

        $data['clientes_dalvian'] = $this->Clientes_dalvian_model->get_all_clientes_dalvian($params);
        
        $data['_view'] = 'clientes_dalvian_view/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new clientes_dalvian
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'codigo_cliente' => $this->input->post('codigo_cliente'),
				'apellido' => $this->input->post('apellido'),
				'nombres' => $this->input->post('nombres'),
				'tipo_documento' => $this->input->post('tipo_documento'),
				'numero_documento' => $this->input->post('numero_documento'),
				'manzana' => $this->input->post('manzana'),
				'casa' => $this->input->post('casa'),
				'calle' => $this->input->post('calle'),
				'numero' => $this->input->post('numero'),
				'piso' => $this->input->post('piso'),
				'dpto' => $this->input->post('dpto'),
				'cod_postal' => $this->input->post('cod_postal'),
				'telefono' => $this->input->post('telefono'),
				'email' => $this->input->post('email'),
				'imagen_nombre' => $this->input->post('imagen_nombre'),
				'fecha_creado' => $this->input->post('fecha_creado'),
				'fecha_modificado' => $this->input->post('fecha_modificado'),
				'observaciones' => $this->input->post('observaciones'),
            );
            
            $clientes_dalvian_id = $this->Clientes_dalvian_model->add_clientes_dalvian($params);
            redirect('clientes_dalvian/index');
        }
        else
        {            
            $data['_view'] = 'clientes_dalvian_view/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a clientes_dalvian
     */
    function edit($id)
    {   
        // check if the clientes_dalvian exists before trying to edit it
        $data['clientes_dalvian'] = $this->Clientes_dalvian_model->get_clientes_dalvian($id);
        
        if(isset($data['clientes_dalvian']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'codigo_cliente' => $this->input->post('codigo_cliente'),
					'apellido' => $this->input->post('apellido'),
					'nombres' => $this->input->post('nombres'),
					'tipo_documento' => $this->input->post('tipo_documento'),
					'numero_documento' => $this->input->post('numero_documento'),
					'manzana' => $this->input->post('manzana'),
					'casa' => $this->input->post('casa'),
					'calle' => $this->input->post('calle'),
					'numero' => $this->input->post('numero'),
					'piso' => $this->input->post('piso'),
					'dpto' => $this->input->post('dpto'),
					'cod_postal' => $this->input->post('cod_postal'),
					'telefono' => $this->input->post('telefono'),
					'email' => $this->input->post('email'),
					'imagen_nombre' => $this->input->post('imagen_nombre'),
					'fecha_creado' => $this->input->post('fecha_creado'),
					'fecha_modificado' => $this->input->post('fecha_modificado'),
					'observaciones' => $this->input->post('observaciones'),
                );

                $this->Clientes_dalvian_model->update_clientes_dalvian($id,$params);            
                redirect('clientes_dalvian/index');
            }
            else
            {
                $data['_view'] = 'clientes_dalvian_view/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The clientes_dalvian you are trying to edit does not exist.');
    } 

    /*
     * Deleting clientes_dalvian
     */
    function remove($id)
    {
        $clientes_dalvian = $this->Clientes_dalvian_model->get_clientes_dalvian($id);

        // check if the clientes_dalvian exists before trying to delete it
        if(isset($clientes_dalvian['id']))
        {
            $this->Clientes_dalvian_model->delete_clientes_dalvian($id);
            redirect('clientes_dalvian/index');
        }
        else
            show_error('The clientes_dalvian you are trying to delete does not exist.');
    }
    
}