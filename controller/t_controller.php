<?php
$data = array();
    flexible_function($data );  // call function 
    function flexible_function(&$data) 
    {
        $function = "view";  //run first 
        if(isset($_GET['action']))  //get from url
        {
            $function = $_GET['action'];
        }
        $function($data);  //call function
    }
        //end declare function

    function view(&$data)
    {
       $data['student_data']= m_view();
       $data['page']="test/view.php";
    }

    function add(&$data) {
        $data['page'] = "test/add.php";
    }
    function form_data(&$data) {
        $add_data = m_add_data($_POST);
        if($add_data) {
            $action = "view";
        }else {
            $action = "add";
        }
        header("Location: index.php?action=$action");
    }
    function detail(&$data){
        $data['student_data']= m_detail();
        $data['page']="test/detial.php";
    }
    function delete(&$data){;
            $delete = m_delete();
            if($delete){
                header ('location:index.php ?action =view');
            }
         }
         
    function edit(&$data){
        $data ['page']= "test/edit.php";
        $data['student_data']= m_detail();
        }
    function edit_form(&$date){
        $edit = m_edit($_POST);
        if($edit){
        $action ='view';
        }else{
            $action='edit';
        }
        header("location:index.php?=$action");
    }

?>