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
		$hcolor = Loader::helper('form/color');
		$this->set('hcolor', $hcolor);

	}


	public function view() {
		
	}

	public function color_updated() {
		$this->set('message', 'Color Saved.');
	}

	public function update_color() {
		

		// $this->view();
		if ($this->myUI instanceof UserInfo) {

			// $color = $this->post('color');
			//  print $color;
			// exit;

			Loader::library('file/importer');
			$fi = new FileImporter();
			$pathTofile = $_FILES['my_image']['tmp_name'];
			$nameOfFile = $_FILES['my_image']['name'];
			$myFileObject = $fi->import($pathTofile, $nameOfFile);

			if (is_object($myFileObject)) {
				Loader::model('file_set');
				$fs = FileSet::getByName('Favorite Color Pics');
				$fs->addFileToSet($myFileObject);
			}

			$this->myUI->setAttribute('favorite_color', $this->post('color'));
			$this->myUI->setAttribute('favorite_color_picture', $myFileObject);
			// print_r($this->myUI);
			// exits;
		}

		$this->redirect('my_favorite_color', 'color_updated');
	}



}
