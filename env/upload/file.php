<?php
	namespace env\upload_file;

	class file implements \env\upload_file\iuf {

		private $info = array();

		public function __construct(){
			$this->info = array();

			if (!empty($_FILES)) {
				if (is_string($_FILES['name'])) {
					$file_name = $_FILES['name'];
					$this->info[$file_name] = array();

					foreach ($_FILES as $field => $val) {
						$this->info[$file_name][$field] = $val;
					}

				} else if (is_array($_FILES['name'])){

					$tmp = array();
					foreach ($_FILES['name'] as $i => $name) {
						$this->info[$name] = array();
						$tmp[$i] = $name;
					}

					foreach ($_FILES as $field => $info) {
						foreach ($info as $i => $val) {
							$this->info[$tmp[$i]][$field] = $val;
						}
					}
					unset($tmp);

				}  else {
					throw new \Exception("upload_file/file::__construct()");
				}
			}
		}



		 /* return file's type
		 * 
		 * @return	string	(if $file_name not exists, exception should be thrown out)
		 */
		public function get_type($file_name){
			if (!isset($this->info[$file_name])) {
				throw new \Exception("file::get_type($file_name)");
			}
			return $this->info[$file_name]['name'];
		}


		/* return file's tmp file-path 
		 *
		 * @return	string	(if $file_name not exists, exception should be thrown out)
		 */
		public function get_tmp_name($file_name){
			if (!isset($this->info[$file_name])) {
				throw new \Exception("file::get_tmp_name($file_name)");
			}
			return $this->info[$file_name]['tmp_name'];
		}


		/* return error
		 *
		 * @return	when uploading success, return 0; else return error string	(if $file_name not exists, exception should be thrown out)
		 */
		public function get_error($file_name){
			if (!isset($this->info[$file_name])) {
				throw new \Exception("file::get_error($file_name)");
			}
			if (!$this->info[$file_name]['error']) {
				return $this->info[$file_name]['error']; 
			}
			return 0;
		}


		/* return bytes of uploaded file
		 *
		 * @return	int		(if $file_name not exists, exception should be thrown out)
		 */
		public function get_size($file_name){	
			if (!isset($this->info[$file_name])) {
				throw new \Exception("file::get_size($file_name)");
			}
			return $this->info[$file_name]['size'];
		}


		
		/*
		 * move $file_name from 'tmp_name' into $dst_file_path
		 * when success, 'tmp_name' of $filename will be set as null
		 *
		 * @return	always true
		 */
		public function move($file_name, $dst_file_path){
			if (!isset($this->info[$file_name])) {
				throw new \Exception("file::move($file_name)");
			}
			move_uploaded_file($this->info[$file_name]['tmp_name'], $dst_file_path);
			$this->info[$file_name]['tmp_name'] = null;
			return true;
		}
	}
