<?php
    class Template{
        protected $_CI;

        // ini untuk api
        // var $API = "";

        function __construct(){
            $this->_CI=&get_instance();

            $this->_CI->load->model('M_AllFunction');

            // ini untuk api
            // $this->API = "http://192.168.64.2/APIAbsensiQR/";
        }

        function display($template, $data=null){
            $data['_MenuLv1'] = $this->_CI->M_AllFunction->Menu("Menu_Lv1");
            $data['_MenuLv2'] = $this->_CI->M_AllFunction->Menu("Menu_Lv2");
            
            // ini untuk api
            // $data['_MenuLv1'] = json_decode($this->_CI->curl->simple_get($this->API.'MenuAkses/getData/getData_lv1/'.$this->_CI->session->userdata('GroupID')));
            // $data['_MenuLv2'] = json_decode($this->_CI->curl->simple_get($this->API.'MenuAkses/getData/getData_lv2/'.$this->_CI->session->userdata('GroupID')));

            $data['_navbar']        = $this->_CI->load->view('template/T_Navbar', $data, true);
            $data['_sidebar']       = $this->_CI->load->view('template/T_Sidebar', $data, true);
            $data['_pageheader']    = $this->_CI->load->view('template/T_Header', $data, true);
            $data['_content']       = $this->_CI->load->view($template, $data, true);
            $data['_footer']        = $this->_CI->load->view('template/T_Footer', $data, true);

            $this->_CI->load->view('/V_Templates.php', $data);
        }
    }
?>