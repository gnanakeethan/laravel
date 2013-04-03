<?php

class Admin_Controller extends Base_Controller {

	public function action_index() {
		Asset::container('bootstrapper')->styles();
		Asset::container('bootstrapper')->scripts();
	}

}