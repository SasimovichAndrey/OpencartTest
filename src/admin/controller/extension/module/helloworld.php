<?php
    class Controllerextensionmodulehelloworld extends Controller{
        public function index(){
            $this->language->load('extension/module/helloWorld');

            $data['greetings'] = $this->language->get('text_greeting');

            $this->response->setOutput($this->load->view('extension/module/helloworld', $data));
        }
    }
?>