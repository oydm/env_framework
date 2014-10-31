<?php
	namespace env\upload;

	/* upload file 
	 *
	 */

	interface iupload {
		/*
		 * add file which to be upload
		 *
		 * @param	file_name, string;	file path which to be uploaded
		 * @param	mime_type, string;	mimetype of the file
		 * @param	post_name, string;	name of the file
		 * 
		 * @return	true or false
		 */
		public function add_file($file_name, $form_name = 0, $mime_type = null, $post_name = null);


		/* 
		 *	upload all files 
		 *
		 * @param	uri, string;		server uri, like "/upload/file.php"
		 * @param	form, array;	form variables
		 *
		 * @return	always true (if failed, exception should be thrown out)
		 */
		public function upload($uri, array $form = array());
	}
