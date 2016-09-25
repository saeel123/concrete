<?php
Class MyFavoriteColorController extends Controller {

	protected $myUI;

	//load when controller is loaded
	public function on_start(){
		$u = new User();
		if ($u->isRegistered()) {
			$ui = UserInfo::getByID($u->getUserID());
			$this->myUI = $ui;
			$color = $ui->getUserFavoriteColor(); // "favorite color"
			$this->set('favoriteColor',$color);
		}
		$form = Loader::helper('form');
		$this->set('form', $form);
	}


	public function view() {
		
	}

	public function color_updated() {
		$this->set('message', 'Color Saved.');
	}

	public function update_color() {
		$this->view();
		if ($this->myUI instanceof UserInfo) {
			$this->myUI->setAttribute('favorite_color', $this->post('color'));
			// print_r($this->myUI);
			// exits;
		}
		$this->redirect('my_favorite_color', 'color_updated');
	}



}
