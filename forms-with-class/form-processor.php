<?php
    class FormProcessor{
        public $fields;
        public $values;
        public $success_message = "";
        
        public static $error_exists = false;
        public static $errors = "";

        function __construct($fields = array(), $values = array(), $success = "Successful"  ){
            $this->fields = $fields;
            $this->values = $values;
            $this->success_message = $success;

            $field_to_check = array_shift($fields);

            if ( isset($_POST[$field_to_check])) {
                $this->check_empty_fields();

                if ( !FormProcessor::$error_exists ){
                    $this->check_fields_values();

                    if ( !FormProcessor::$error_exists ){
                        echo $this->success_message;
                    } else{
                        $this->output_errors();
                    }
                    
                } else{
                    $this->output_errors();
                }

                
            }
        }

        private function check_fields_values(){
            foreach($this->fields as $key => $field){
                $value = $this->values[$key];
                if( $value != $_POST[$field] ) {
                    FormProcessor::$error_exists = true;
                    FormProcessor::$errors = "$field is wrong";
                    break;
                }
            }
        }

        private function check_empty_fields(){
            foreach ($this->fields as $field) {
                if ( empty( $_POST[$field] ) ){
                    FormProcessor::$error_exists = true;
                    FormProcessor::$errors = "$field is empty";
                    break;
                }
            }
        }

        public function output_errors(){
            if ( FormProcessor::$error_exists ){ 
                echo FormProcessor::$errors;
            }
        }
    }
?>