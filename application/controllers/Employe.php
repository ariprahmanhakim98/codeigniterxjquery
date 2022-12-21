<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employe extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('employe_model');
		//include modal.php in views
		$this->inc['modal'] = $this->load->view('modal', '', true);
	}
	public function index(){
		$this->load->view('show', $this->inc);
	}

	public function show(){
		$data = $this->employe_model->show();
		$output = array();
		foreach($data as $row){
			?>
			<tr>
				<td><?php echo $row->id; ?></td>
				<td><?php echo $row->username; ?></td>
				<td><?php echo $row->full_name; ?></td>
				<td><?php echo $row->id_card; ?></td>
				<td><?php echo $row->division; ?></td>
				<td><?php echo $row->address; ?></td>
				<td>
					<button class="btn btn-sm btn-warning edit" data-id="<?php echo $row->id; ?>">Edit</button> || 
					<button class="btn btn-sm btn-danger delete" data-id="<?php echo $row->id; ?>">Delete</button>
				</td>
			</tr>
			<?php
		}
	}

	public function insert(){
		$employe['username'] = $_POST['username'];
		$employe['full_name'] = $_POST['full_name'];
		$employe['id_card'] = $_POST['id_card'];
		$employe['division'] = $_POST['division'];
		$employe['address'] = $_POST['address'];
		
		$query = $this->employe_model->insert($employe);
	}

	public function getemployes(){
		$id = $_POST['id'];
		$data = $this->employe_model->getemployes($id);
		echo json_encode($data);
	}

	public function update(){
		$id = $_POST['id'];
		$employe['username'] = $_POST['username'];
		$employe['full_name'] = $_POST['full_name'];
		$employe['id_card'] = $_POST['id_card'];
		$employe['division'] = $_POST['division'];
		$employe['address'] = $_POST['address'];

		$query = $this->employe_model->updateemployes($employe, $id);
	}

	public function delete(){
		$id = $_POST['id'];
		$query = $this->employe_model->delete($id);
	}

}
