<?php
class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->_old_url_redirect();
    }

    public function set_session_data($session_name, $data)
    {
        $this->session->set_userdata($session_name,$data);
    }

    protected function _old_url_redirect()
    {
        $seg = $this->uri->segment(1);
        switch ($seg) {
            case 'cafe.html':
                redirect('/cafe_system/', 'location', 301);
                break;
            case 'system':
                redirect('/cafe_system/', 'location', 301);
                break;
            case 'cafe-01.html':
                redirect('/staff/', 'location', 301);
                break;
            case 'cafe-02.html':
                redirect('/party_and_event/', 'location', 301);
                break;
            case 'access.html':
                redirect('/access/', 'location', 301);
                break;
            case 'lesson.html':
                redirect('/lesson/', 'location', 301);
                break;
            default:
                break;

        }
    }

}
