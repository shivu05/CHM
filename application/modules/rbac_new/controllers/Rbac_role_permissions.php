<?php

                if (!defined('BASEPATH')) exit('No direct script access allowed');
               /**
                * @class   : Rbac_role_permissions
                * @desc    :
                * @author  : HimansuS
                * @created :05/17/2018
                */
class Rbac_role_permissions extends CI_Controller {
public function __construct(){
                    parent::__construct();                    
                
$this->load->model('rbac_role_permission');$this->load->library('pagination');$this->load->library('form_validation');
        $this->layout->layout='admin_layout';
        $this->layout->layoutsFolder = 'layouts/admin';
        $this->layout->lMmenuFlag=1;
        $this->layout->rightControlFlag = 1; 
        $this->layout->navTitleFlag = 1;}/**
                * @param  : $export=0
                * @desc   :
                * @return :
                * @author :
                * @created:05/17/2018
                */
public function index($export=0){

        $this->breadcrumbs->push('index','/rbac_new/rbac_role_permissions/index');
        $this->scripts_include->includePlugins(array('datatable'), 'css');
        $this->scripts_include->includePlugins(array('datatable'), 'js');
        $this->layout->navTitle='Rbac role permission list';
        $data=array();$data = array();
        $buttons[] = array(
            'btn_class' => 'btn-info',
            'btn_href' => base_url('rbac_new/rbac_role_permissions/view'),
            'btn_icon' => 'fa-eye',
            'btn_title' => 'view record',
            'btn_separator' => ' ',
            'param' => array('$1'),
            'style' => ''
        );
        $buttons[] = array(
            'btn_class' => 'btn-primary',
            'btn_href' => base_url('rbac_new/rbac_role_permissions/edit'),
            'btn_icon' => 'fa-pencil',
            'btn_title' => 'edit record',
            'btn_separator' => ' ',
            'param' => array('$1'),
            'style' => ''
        );

        $buttons[] = array(
            'btn_class'     => 'btn-danger delete-record',
            'btn_href'      => '#',
            'btn_icon'      => 'fa-remove',
            'btn_title'     => 'delete record',
            'btn_separator' => '',
            'param'         => array('$1'),
            'style'         => '',
            'attr'           => 'data-role_permission_id="$1"'
        );
        $button_set = get_link_buttons($buttons);
        $data['button_set'] = $button_set;

        if ($this->input->is_ajax_request()) {
            $returned_list = '';
            $returned_list = $this->rbac_role_permission->get_rbac_role_permission_datatable($data);
            echo $returned_list;
            exit();
        }
        if ($export) {
            $tableHeading = array('role_id'=>'role_id','permission_id'=>'permission_id','status'=>'status','created'=>'created','modified'=>'modified',);;
            $this->rbac_role_permission->get_rbac_role_permission_datatable($data, $export, $tableHeading);
        }
        
        $config['grid_config'] = array(
            'table' => array(
                'columns' => array('role_id','permission_id','status','created','modified'),
                'columns_alias' => array('role_id','permission_id','status','created','modified' ,'Action')
            ),
            'grid' => array(
                'ajax_source' => 'rbac_new/rbac_role_permissions/index',
                'table_tools' => array('pdf', 'xls', 'csv'),
                'cfilter_columns' => array('role_id','permission_id','status','created','modified'),
                'sort_columns' => array('role_id','permission_id','status','created','modified'),
                'column_order' => array('0' => 'ASC'),
            //'cfilter_pos'=>'buttom'
            ),
            'table_tools' => array(
                'xls' => array(
                    'url' => 'rbac_new/rbac_role_permissions/index/xls'
                ), 'csv' => array(
                    'url' => 'rbac_new/rbac_role_permissions/index/csv'
                )
            )
        );
        $data['data'] = $config;
        $this->layout->render($data);

}/**
                * @param  : 
                * @desc   :
                * @return :
                * @author :
                * @created:05/17/2018
                */
public function create(){
$this->breadcrumbs->push('create','/rbac_new/rbac_role_permissions/create');

$this->layout->navTitle='Rbac role permission create';
$data=array();
	 if($this->input->post()):
	 $config = array(
array(
                        'field' => 'role_id',
                        'label' => 'role_id',
                        'rules' => 'required'
                    ),
array(
                        'field' => 'permission_id',
                        'label' => 'permission_id',
                        'rules' => 'required'
                    ),
array(
                        'field' => 'status',
                        'label' => 'status',
                        'rules' => 'required'
                    ),
array(
                        'field' => 'created',
                        'label' => 'created',
                        'rules' => 'required'
                    ),
array(
                        'field' => 'modified',
                        'label' => 'modified',
                        'rules' => 'required'
                    ),
);
        $this->form_validation->set_rules($config);
        
	 if($this->form_validation->run()):
	 
                                $data['data']=$this->input->post();                        
                                $result=$this->rbac_role_permission->save($data['data']);
                                
	 if($result>=1):
	 $this->session->set_flashdata('success', 'Record successfully saved!');
	 redirect('/rbac_new/rbac_role_permissions');
	 else:
	 $this->session->set_flashdata('error', 'Unable to store the data, please conatact site admin!');
	 endif;
	 endif;
	 endif;
$data['permission_id_list'] = $this->rbac_role_permission->get_rbac_permissions_options('permission_id','permission_id');
$data['role_id_list'] = $this->rbac_role_permission->get_rbac_roles_options('role_id','role_id');
$this->layout->data = $data;
               $this->layout->render();

}/**
                * @param  : $role_permission_id=null
                * @desc   :
                * @return :
                * @author :
                * @created:05/17/2018
                */
public function edit($role_permission_id=null){
$this->breadcrumbs->push('edit','/rbac_new/rbac_role_permissions/edit');

$this->layout->navTitle='Rbac role permission edit';$data=array();
	 if($this->input->post()):
	 $data['data']=$this->input->post();
	 $config = array(
array(
                        'field' => 'role_id',
                        'label' => 'role_id',
                        'rules' => 'required'
                    ),
array(
                        'field' => 'permission_id',
                        'label' => 'permission_id',
                        'rules' => 'required'
                    ),
array(
                        'field' => 'status',
                        'label' => 'status',
                        'rules' => 'required'
                    ),
array(
                        'field' => 'created',
                        'label' => 'created',
                        'rules' => 'required'
                    ),
array(
                        'field' => 'modified',
                        'label' => 'modified',
                        'rules' => 'required'
                    ),
);
        $this->form_validation->set_rules($config);
        
	 if($this->form_validation->run()):
	                                                       
                                $result=$this->rbac_role_permission->update($data['data']);
                                
	 if($result>=1):
	 $this->session->set_flashdata('success', 'Record successfully updated!');
	 redirect('/rbac_new/rbac_role_permissions');
	 else:
	 $this->session->set_flashdata('error', 'Unable to store the data, please conatact site admin!');
	 endif;
	 endif;
	 else:
	 $role_permission_id=c_decode($role_permission_id);
 $result = $this->rbac_role_permission->get_rbac_role_permission(null, array('role_permission_id' => $role_permission_id));
	 if($result):
	 $result = current($result);
	 endif;
$data['data'] = $result;
	 endif;
$data['permission_id_list'] = $this->rbac_role_permission->get_rbac_permissions_options('permission_id','permission_id');
$data['role_id_list'] = $this->rbac_role_permission->get_rbac_roles_options('role_id','role_id');
$this->layout->data = $data;
               $this->layout->render();

}/**
                * @param  : $role_permission_id
                * @desc   :
                * @return :
                * @author :
                * @created:05/17/2018
                */
public function view($role_permission_id){
$this->breadcrumbs->push('view','/rbac_new/rbac_role_permissions/view');

$data=array();
	 if($role_permission_id):
	 $role_permission_id=c_decode($role_permission_id);

	 $this->layout->navTitle='Rbac role permission view';$result = $this->rbac_role_permission->get_rbac_role_permission(null, array('role_permission_id' => $role_permission_id),1);
	 if($result):
	 $result = current($result);
	 endif;

                     $data['data'] = $result;
                     $this->layout->data = $data;
                     $this->layout->render();
                     
	 endif;
return 0 ;

}/**
                * @param  : 
                * @desc   :
                * @return :
                * @author :
                * @created:05/17/2018
                */
public function delete(){
	 if($this->input->is_ajax_request()):
	 $role_permission_id=  $this->input->post('role_permission_id');
	 if($role_permission_id):
	 $role_permission_id=c_decode($role_permission_id);

	 $result = $this->rbac_role_permission->delete($role_permission_id);
	 if($result ==1):
	 echo 'success';
 exit();
	 else:
	 echo 'Data deletion error !';
 exit();
	 endif;
	 endif;
echo 'No data found to delete';
 exit();
	 endif;
return 'Invalid request type.' ;

}
} ?>