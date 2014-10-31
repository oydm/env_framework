<?php
	namespace env\lib;

	class upload_file {

		private $info = array();

		public function __construct(){
			$this->info = array();

			if (!empty($_FILES)) {
				$this->info = $_FILES;
			}
		}

		public function all_file_names(){
			return array_keys($this->info);
		}


		/* check if $file_name exists or not
		 *
		 * @return	true or false
		 */
		public function exists($file_name){
			if (isset($this->info[$file_name])) {
				return true;
			}
			return false;
		}
		/* get file's name
		 *
		 * @return  string
		 */
		public function get_name($file_name){
			if (isset($this->info[$file_name]['name'])) {
				return $this->info[$file_name]['name'];
			}
			return false;
		}
		
	
		
		
		 /* get file's type
		 * 
		 * @return	string	
		 */
		public function get_type($file_name){
			if (isset($this->info[$file_name]['type'])) {
				return $this->info[$file_name]['type'];
			}
			return false;
		}


		/* get file's tmp file-path 
		 *
		 * @return	string	
		 */
		public function get_tmp_name($file_name){
			if (isset($this->info[$file_name]['tmp_name'])) {
				return $this->info[$file_name]['tmp_name'];
			} 
			return false;
		}


		/* get error
		 *
		 * @return  string or 0(if no error)
		 */
		public function get_error($file_name){
			if (!isset($this->info[$file_name]['error'])){
				return false;
			}
			if ($this->info[$file_name]['error'] != 0) {
				return $this->info[$file_name]['error']; 
			}
			return 0;
		}


		/* return bytes of uploaded file
		 *
		 * @return	int or false(if no file)
		 */
		public function get_size($file_name){	
			if (isset($this->info[$file_name]['size'])) {
				return $this->info[$file_name]['size'];
			}
			return false;
		}


		
		/*
		 * move $file_name from 'tmp_name' into $dst_file_path
		 * when success, 'tmp_name' of $filename will be set as null
		 *
		 * @return	true or false
		 */
		public function move($file_name, $dst_file_path){
			if (!isset($this->info[$file_name])) {
				return false;
			}
			if (!move_uploaded_file($this->info[$file_name]['tmp_name'], $dst_file_path)) {
				return false;
			}
			$this->info[$file_name]['tmp_name'] = null;
			return true;
		}
	}
