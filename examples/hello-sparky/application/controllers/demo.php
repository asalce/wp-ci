<?php
/** 
* @user_can(manage_options) 
*/
class Demo extends Controller {

  /** 
  * @menu(page_title=Hello Sparky&menu_title=Hello Sparky) 
  */
  function index() {
    $this->load->view('demo');
  }
  
}