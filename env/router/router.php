<?php
	namespace env\router;
	class router implements \env\router\irouter {

		private $default_output_format = 'html';

		/* explain from `uri` into `module_path`, `output_format`
		 *
		 * @param	uri, string
		 *			/group/example
		 *			/group/example/
		 *			/group/example.html
		 *
		 *			/group/example?a=1
		 *			/group/example.html?a=1
		 *
		 * @param	module_path, string
		 * @param	output_format, string
		 *
		 * @return	always true	
		 */
		public function explain($uri, &$module_path, &$output_format = 'html'){
			$uri = ltrim($uri, "/");
			if($uri==null){
				$uri="common/login.html";
			}
			
			/* filter out the query part ( string following charater '?') */
			if (preg_match('/^([^?]+)\?.*$/', $uri, $match)) {	
				$uri = $match[1];
			} 

			/* get module_path and output_format */
			if (preg_match('/^([^.]+)\.(\w+)$/', $uri, $match)) {
				$module_path = $match[1];
				$output_format = $match[2];

			} else if (preg_match('/^([^.]+)$/', $uri, $match)) {
				$module_path = $uri;
				$output_format = $this->default_output_format;

			} else {
				throw new \Exception("default::explain($uri)");
			}

			if ($module_path == null || $output_format == null) {
				throw new \Exception("default::explain($uri)");
			}
			return true;
		}
	}

