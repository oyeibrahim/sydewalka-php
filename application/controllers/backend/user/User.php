<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array(
			'backend/user/user_model',
            'common_model',
		));

		$this->load->model(array(
			'backend/dashboard/message_model'
		));

		if (!$this->session->userdata('isAdmin'))
			redirect('logout');

		if (
			!$this->session->userdata('isLogin')
			&& !$this->session->userdata('isAdmin')
		)
			redirect('admin');
	}

	public function index()
	{
		$data['title']  = display('user_list');

		$data['content'] = $this->load->view("backend/user/list", $data, true);
		$this->load->view("backend/layout/main_wrapper", $data);
	}

	public function chat_admins($page = 1)
	{
		$data['title']  = "Chat Admin List";

		$count = $this->user_model->countChatAdminLog();
		$total = 50;
		$pageNumTemp = $count / $total;

		$pageNum = (int)ceil($pageNumTemp);

		//deal with too much or less request
		if ($page < 1) {
			redirect("backend/user/user/chat_admins/1");
		}

		$data['pageNum'] = $pageNum;
		$data['userReq'] = $page;

		$start = ((int)$page * $total) - $total;

		$data['No'] = 1 + ((int)$page * $total) - $total;

		$data['admins'] = $this->user_model->readChatAdminLog($total, $start);

		$data['content'] = $this->load->view("backend/user/chat_admin_list", $data, true);
		$this->load->view("backend/layout/main_wrapper", $data);
	}

	/*
    |----------------------------------------------
    |   Datatable Ajax data Pagination+Search
    |----------------------------------------------     
    */
	public function ajax_list()
	{
		$list = $this->user_model->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $users) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = '<a href="' . base_url("backend/user/user/user_details/$users->id") . '">' . $users->user_id . '</a>';
			$row[] = '<a href="' . base_url("backend/user/user/user_details/$users->id") . '">' . $users->first_name . " " . $users->last_name . '</a>';
			$row[] = '<a href="' . base_url("backend/user/user/user_details/$users->id") . '">' . $users->referral_id . '</a>';
			$row[] = $users->email;
			$row[] = $users->spot_maker_percent_of_fee . " %";
			$row[] = $users->spot_taker_percent_of_fee . " %";
			$row[] = '<a href="' . base_url("backend/user/user/form/$users->id") . '"' . ' class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a>  ' . (($users->status == 1) ? '<button class="btn btn-success btn-sm">Active</button>' : (($users->status == 2) ? '<button class="btn btn-danger btn-sm">Pending</button>' : (($users->status == 3) ? '<button class="btn btn-danger btn-sm">Suspend</button>' : '<button class="btn btn-kingfisher-daisy btn-sm">Deactive</button>'))) . '  ' . (($users->verified == 1) ? '<button class="btn btn-success btn-sm">verified</button>' : (($users->verified == 2) ? '<button class="btn btn-danger btn-sm">Cancel</button>' : (($users->verified == 3) ? '<a href=' . base_url("backend/user/user/pending_user_verification/$users->user_id") . ' class="btn btn-info btn-sm" data-toggle="tooltip">Requested</a>' : '<button class="btn btn-danger btn-sm">Not Verified</button>')));

			$data[] = $row;
		}

		// <button class="btn btn-success btn-sm"></button>
		// <button class="btn btn-danger btn-sm"></button>
		// <button class="btn btn-kingfisher-daisy btn-sm"></button>
		// "0=Deactivated account, 1=Activated account, 2=Pending account, 3=Suspend account"
		// 0= did not submit info, 1= verified, 2=Cancel, 3=processing
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->user_model->count_all(),
			"recordsFiltered" => $this->user_model->count_filtered(),
			"data" => $data,
		);
		//output to json format
		echo json_encode($output);
	}


	public function email_check($email, $id)
	{
		$emailExists = $this->db->select('email')
			->where('email', $email)
			->where_not_in('id', $id)
			->get('dbt_user')
			->num_rows();

		if ($emailExists > 0) {
			$this->form_validation->set_message('email_check', 'The {field} is already registered.');
			return false;
		} else {
			return true;
		}
	}
	public function phone_check($phone, $id)
	{
		$emailExists = $this->db->select('phone')
			->where('phone', $phone)
			->where_not_in('id', $id)
			->get('dbt_user')
			->num_rows();

		if ($emailExists > 0) {
			$this->form_validation->set_message('phone_check', 'The {field} is already registered.');
			return false;
		} else {
			return true;
		}
	}


	public function form($id = null)
	{
		$data['title']  = display('add_user');

		//if updating percentage of maker and taker fee
		if ($this->input->post('use_percent_fee') == 1) {

			$data['user'] = (object)$userdata = array(
				'id' 		  					=> $this->input->post('id'),
				'user_id' 	  					=> $this->input->post('user_id'),
				'spot_maker_percent_of_fee' 	=> $this->input->post('percent_of_maker_fee'),
				'spot_taker_percent_of_fee' 	=> $this->input->post('percent_of_taker_fee'),
			);

			if ($this->user_model->update($userdata)) {
				$this->session->set_flashdata('message', "Percentage of Maker and Taker fee for user Updated successfully");
			} else {
				$this->session->set_flashdata('exception', display('please_try_again'));
			}
			redirect("backend/user/user/form/$id");
			return;
		}

		//if updating chat admin status
		if ($this->input->post('use_chat_admin') == 1) {

			$data['user'] = (object)$userdata = array(
				'id' 		  		=> $this->input->post('id'),
				'user_id' 	  		=> $this->input->post('user_id'),
				'is_chat_admin' 	=> $this->input->post('is_chat_admin'),
				'chat_admin_id' 	=> $this->input->post('chat_admin_id'),
			);

			if ($this->user_model->update($userdata)) {
				$this->session->set_flashdata('message', "User is now chat admin");
			} else {
				$this->session->set_flashdata('exception', display('please_try_again'));
			}
			redirect("backend/user/user/form/$id");
			return;
		}


		$this->form_validation->set_rules('first_name', display('firstname'), 'required|max_length[50]');

		if (!empty($id)) {
			$this->form_validation->set_rules('email', display('email'), "required|valid_email|max_length[100]|callback_email_check[$id]|trim");
			$this->form_validation->set_rules('mobile', display('mobile'), "required|callback_phone_check[$id]|max_length[100]");
		} else {
			$this->form_validation->set_rules('email', display('email'), 'required|valid_email|is_unique[dbt_user.email]|max_length[100]');
			$this->form_validation->set_rules('mobile', display('mobile'), 'required|is_unique[dbt_user.phone]|max_length[100]');
		}

		$this->form_validation->set_rules('password', display('password'), 'required|min_length[6]|max_length[32]|md5');
		$this->form_validation->set_rules('conf_password', display('conf_password'), 'required|min_length[6]|max_length[32]|md5|matches[password]');
		$this->form_validation->set_rules('status', display('status'), 'required|max_length[1]');

		if (empty($id)) {
			$data['user'] = (object)$userdata = array(
				'id' 		  => $this->input->post('id'),
				'user_id' 	  => $this->randomID(),
				'referral_id' => $this->input->post('referral_id'),
				'first_name'  => $this->input->post('first_name'),
				'last_name'   => $this->input->post('last_name'),
				'email' 	  => $this->input->post('email'),
				'password' 	  => md5($this->input->post('password')),
				'phone' 	  => $this->input->post('mobile'),
				'ip'      	  => $this->input->ip_address(),
				'status'      => $this->input->post('status'),
			);
		} else {
			$data['user'] = (object)$userdata = array(
				'id' 		  => $this->input->post('id'),
				'user_id' 	  => $this->input->post('user_id'),
				'first_name' 	  => $this->input->post('first_name'),
				'last_name' 	  => $this->input->post('last_name'),
				'email' 	  => $this->input->post('email'),
				'password' 	  => md5($this->input->post('password')),
				'phone' 	  => $this->input->post('mobile'),
				'ip'      => $this->input->ip_address(),
				'status'      => $this->input->post('status'),
			);
		}


		if ($this->form_validation->run()) {

			if (empty($id)) {
				if ($this->user_model->create($userdata)) {
					$this->session->set_flashdata('message', display('save_successfully'));
				} else {
					$this->session->set_flashdata('exception', display('please_try_again'));
				}
				redirect("backend/user/user/form/");
			} else {
				if ($this->user_model->update($userdata)) {
					$this->session->set_flashdata('message', display('update_successfully'));
				} else {
					$this->session->set_flashdata('exception', display('please_try_again'));
				}
				redirect("backend/user/user/form/$id");
			}
		} else {
			if (!empty($id)) {
				$data['title'] = display('edit_user');
				$data['user']   = $this->user_model->single($id);
			}

			$data['content'] = $this->load->view("backend/user/form", $data, true);
			$this->load->view("backend/layout/main_wrapper", $data);
		}
	}

	public function user_details($id = null)
	{
		$data['title']  = display('details');

		if (!empty($id)) {
			$data['user']   	= $this->user_model->single($id);

			// $data['balance'] = $this->user_model->checkUserAllBalance($data['user']->user_id);
			// $data['user_trade_history']   	= $this->user_model->userTradeHistory($data['user']->user_id);
			// $data['user_balanceLog']   	= $this->user_model->userBalanceLog($data['user']->user_id);

			$data['coins'] = $this->user_model->allCoins();
		} else {
			$user_id = $this->input->post('user_id');

			$data['user']   	= $this->user_model->userByUserId($user_id);
			// $data['balance'] = $this->user_model->checkUserAllBalance($user_id);
			// $data['user_trade_history']   	= $this->user_model->userTradeHistory($user_id);
			// $data['user_balanceLog']   	= $this->user_model->userBalanceLog($user_id);

			$data['coins'] = $this->user_model->allCoins();
		}

		$data['content'] = $this->load->view("backend/user/search_user", $data, true);
		$this->load->view("backend/layout/main_wrapper", $data);
	}



	public function balance_edit()
	{

		$id = $this->input->post('id');
		$user_id = $this->input->post('user_id');
		//already have the normal db value
		$coin_symbol = $this->input->post('coin_symbol');
		//ADD or SUBTRACT
		$action = $this->input->post('action');
		//already have the normal db value //balance or on_hold
		$from = $this->input->post('from');

		$amount = $this->input->post('amount');
		$info = $this->input->post('info');

		$user_balance = $this->user_model->getBalanceValues($from, $user_id, $coin_symbol);

		$transaction_type = "";
		$executed = 0;

		if ($action == "ADD") {
			$this->user_model->addUserBalance($from, $amount, $user_id, $coin_symbol);
			$this->session->set_flashdata('message', "Balance changed successfully");
			$transaction_type = "CREDIT";
			$executed = 1;
		} else { //for subtract //check to make sure the balance isn't zero
			if ($user_balance->value > 0) {
				if ($user_balance->value >= $amount) {
					$this->user_model->subtractUserBalnace($from, $amount, $user_id, $coin_symbol);
					$this->session->set_flashdata('message', "Balance changed successfully");
					$transaction_type = "DEBIT";
					$executed = 1;
				} else {
					$this->session->set_flashdata('exception', "User's Balance is less than the amount you want to deduct and will result in minus balance !!!");
				}
			} else {
				$this->session->set_flashdata('exception', "Zero balance can't be deducted !!!");
			}
		}

		//check if the balance was changed and didn't encounter error before logging
		if ($executed > 0) {
			//only add log if the amount is to be added or removed from available balance
			if ($from == "balance") {
				//User Financial Log
				$balanceEditData = array(
					'user_id'            => $user_id,
					'balance_id'         => $user_balance->id,
					'currency_symbol'    => $coin_symbol,
					'transaction_type'   => $transaction_type,
					'transaction_amount' => $amount,
					'transaction_fees'   => 0,
					'transaction_hash'   => $info,
					'ip'                 => $this->input->ip_address(),
					'date'               => date('Y-m-d H:i:s')
				);

				$this->user_model->addBalanceLog($balanceEditData);
			}
		}



		redirect("backend/user/user/user_details/" . $id);
	}



	public function balance_list()
	{
		$page = ($this->input->get('page')) ? $this->input->get('page') : 1;
		$user_id = $this->input->get('user');

		$count = $this->user_model->countBalance($user_id);
		$total = 100;
		$pageNumTemp = $count / $total;

		$pageNum = (int)ceil($pageNumTemp);

		//deal with too much or less request
		if ($page < 1) {
			$page = 1;
		}
		// if($page>$pageNum){
		// 	$page = $pageNum;
		// }

		// $data['pageNum'] = $pageNum;
		// $data['userReq'] = $page;

		$start = ((int)$page * $total) - $total;

		$data = $this->user_model->readBalance($user_id, $total, $start);

		echo json_encode($data);
	}


	public function transaction_list()
	{
		$page = ($this->input->get('page')) ? $this->input->get('page') : 1;
		$user_id = $this->input->get('user');

		$count = $this->user_model->countTransaction($user_id);
		$total = 100;
		$pageNumTemp = $count / $total;

		$pageNum = (int)ceil($pageNumTemp);

		//deal with too much or less request
		if ($page < 1) {
			$page = 1;
		}
		// if($page>$pageNum){
		// 	$page = $pageNum;
		// }

		// $data['pageNum'] = $pageNum;
		// $data['userReq'] = $page;

		$start = ((int)$page * $total) - $total;

		$data = $this->user_model->readTransaction($user_id, $total, $start);

		echo json_encode($data);
	}



	public function trade_history_list()
	{
		$page = ($this->input->get('page')) ? $this->input->get('page') : 1;
		$user_id = $this->input->get('user');

		$count = $this->user_model->countTradeHistory($user_id);
		$total = 100;
		$pageNumTemp = $count / $total;

		$pageNum = (int)ceil($pageNumTemp);

		//deal with too much or less request
		if ($page < 1) {
			$page = 1;
		}
		// if($page>$pageNum){
		// 	$page = $pageNum;
		// }

		// $data['pageNum'] = $pageNum;
		// $data['userReq'] = $page;

		$start = ((int)$page * $total) - $total;

		$data = $this->user_model->readTradeHistory($user_id, $total, $start);

		echo json_encode($data);
	}



	public function address_list()
	{
		$page = ($this->input->get('page')) ? $this->input->get('page') : 1;
		$user_id = $this->input->get('user');

		$count = $this->user_model->countAddress($user_id);
		$total = 100;
		$pageNumTemp = $count / $total;

		$pageNum = (int)ceil($pageNumTemp);

		//deal with too much or less request
		if ($page < 1) {
			$page = 1;
		}
		// if($page>$pageNum){
		// 	$page = $pageNum;
		// }

		// $data['pageNum'] = $pageNum;
		// $data['userReq'] = $page;

		$start = ((int)$page * $total) - $total;

		$data = $this->user_model->readAddress($user_id, $total, $start);

		echo json_encode($data);
	}




	public function fiat_list()
	{

		$page = ($this->input->get('page')) ? $this->input->get('page') : 1;
		$user_id = $this->input->get('user');

		$count = $this->user_model->countUserFiat($user_id);
		$total = 100;
		$pageNumTemp = $count / $total;

		$pageNum = (int)ceil($pageNumTemp);

		//deal with too much or less request
		if ($page < 1) {
			$page = 1;
		}
		// if($page>$pageNum){
		//     redirect("fiat/fiat_list/".$pageNum);
		// }

		// $data['pageNum'] = $pageNum;
		// $data['userReq'] = $page;

		$start = ((int)$page * $total) - $total;

		$data = $this->user_model->readUserFiat($user_id, $total, $start);

		echo json_encode($data);
	}




	public function services_list()
	{

		$page = ($this->input->get('page')) ? $this->input->get('page') : 1;
		$user_id = $this->input->get('user');

		$count = $this->user_model->countUserServices($user_id);
		$total = 100;
		$pageNumTemp = $count / $total;

		$pageNum = (int)ceil($pageNumTemp);

		//deal with too much or less request
		if ($page < 1) {
			$page = 1;
		}
		// if($page>$pageNum){
		//     redirect("fiat/fiat_list/".$pageNum);
		// }

		// $data['pageNum'] = $pageNum;
		// $data['userReq'] = $page;

		$start = ((int)$page * $total) - $total;

		$data = $this->user_model->readUserServices($user_id, $total, $start);

		echo json_encode($data);
	}




	public function contract_list()
	{

		$page = ($this->input->get('page')) ? $this->input->get('page') : 1;
		$user_id = $this->input->get('user');

		$count = $this->user_model->countUserContract($user_id);
		$total = 100;
		$pageNumTemp = $count / $total;

		$pageNum = (int)ceil($pageNumTemp);

		//deal with too much or less request
		if ($page < 1) {
			$page = 1;
		}
		// if($page>$pageNum){
		//     redirect("fiat/fiat_list/".$pageNum);
		// }

		// $data['pageNum'] = $pageNum;
		// $data['userReq'] = $page;

		$start = ((int)$page * $total) - $total;

		$data = $this->user_model->readUserContract($user_id, $total, $start);

		echo json_encode($data);
	}




	public function support_list()
	{

		$page = ($this->input->get('page')) ? $this->input->get('page') : 1;
		$user_id = $this->input->get('user');

		$count = $this->user_model->countUserSupport($user_id);
		$total = 100;
		$pageNumTemp = $count / $total;

		$pageNum = (int)ceil($pageNumTemp);

		//deal with too much or less request
		if ($page < 1) {
			$page = 1;
		}
		// if($page>$pageNum){
		//     redirect("fiat/fiat_list/".$pageNum);
		// }

		// $data['pageNum'] = $pageNum;
		// $data['userReq'] = $page;

		$start = ((int)$page * $total) - $total;

		$data = $this->user_model->readUserSupport($user_id, $total, $start);

		echo json_encode($data);
	}




	public function investment_list()
	{

		$page = ($this->input->get('page')) ? $this->input->get('page') : 1;
		$user_id = $this->input->get('user');

		$count = $this->user_model->countUserInvestments($user_id);
		$total = 100;
		$pageNumTemp = $count / $total;

		$pageNum = (int)ceil($pageNumTemp);

		//deal with too much or less request
		if ($page < 1) {
			$page = 1;
		}
		// if($page>$pageNum){
		//     redirect("fiat/fiat_list/".$pageNum);
		// }

		// $data['pageNum'] = $pageNum;
		// $data['userReq'] = $page;

		$start = ((int)$page * $total) - $total;

		$data = $this->user_model->readUserInvestments($user_id, $total, $start);

		echo json_encode($data);
	}




	public function api_list()
	{

		$page = ($this->input->get('page')) ? $this->input->get('page') : 1;
		$user_id = $this->input->get('user');

		$count = $this->user_model->countUserApiKeys($user_id);
		$total = 100;
		$pageNumTemp = $count / $total;

		$pageNum = (int)ceil($pageNumTemp);

		//deal with too much or less request
		if ($page < 1) {
			$page = 1;
		}
		// if($page>$pageNum){
		//     redirect("fiat/fiat_list/".$pageNum);
		// }

		// $data['pageNum'] = $pageNum;
		// $data['userReq'] = $page;

		$start = ((int)$page * $total) - $total;

		$all_apis = $this->user_model->readUserApiKeys($user_id, $total, $start);

		//empty array to be filled in the foreach loop
		$data = array();

		foreach ($all_apis as $key => $api_data) {

			$api_key = $api_data->api_key;

			$where = "user_id = '" . $user_id . "' and api_key = '" . $api_key . "' and TIMESTAMPDIFF(SECOND, created, NOW()) <= 3600";
			$h1 = $this->db->select('COUNT(*) as h1')->from('dbt_api_log')->where($where)->get()->row();

			$where = "user_id = '" . $user_id . "' and api_key = '" . $api_key . "' and TIMESTAMPDIFF(SECOND, created, NOW()) <= 86400";
			$h24 = $this->db->select('COUNT(*) as h24')->from('dbt_api_log')->where($where)->get()->row();

			$where = "user_id = '" . $user_id . "' and api_key = '" . $api_key . "' and TIMESTAMPDIFF(SECOND, created, NOW()) <= 604800";
			$w1 = $this->db->select('COUNT(*) as w1')->from('dbt_api_log')->where($where)->get()->row();

			$where = "user_id = '" . $user_id . "' and api_key = '" . $api_key . "' and TIMESTAMPDIFF(SECOND, created, NOW()) <= 2628000";
			$m1 = $this->db->select('COUNT(*) as m1')->from('dbt_api_log')->where($where)->get()->row();

			//create a new array to fill in the stats to the data
			$res = array(
				'id' 		=> $api_data->id,
				'user_id' 	=> $api_data->user_id,
				'api_key' 	=> $api_data->api_key,
				'status' 	=> $api_data->status,
				'created' 	=> $api_data->created,
				'updated' 	=> $api_data->updated,
				'h1' 		=> $h1->h1,
				'h24' 		=> $h24->h24,
				'w1' 		=> $w1->w1,
				'm1' 		=> $m1->m1,
			);
			//append the new array to data
			array_push($data, $res);
		}

		echo json_encode($data);
	}
	//this not used again since we create and insert array to build custom data above
	public function api_stat()
	{ //get user api stats for 1h, 24h, 1 week and 1 month

		$user_id = $this->input->get('user');
		$api_key = $this->input->get('api');

		$where = "user_id = '" . $user_id . "' and api_key = '" . $api_key . "' and TIMESTAMPDIFF(SECOND, created, NOW()) <= 3600";
		$h1 = $this->db->select('COUNT(*) as h1')->from('dbt_api_log')->where($where)->get()->row();

		$where = "user_id = '" . $user_id . "' and api_key = '" . $api_key . "' and TIMESTAMPDIFF(SECOND, created, NOW()) <= 86400";
		$h24 = $this->db->select('COUNT(*) as h24')->from('dbt_api_log')->where($where)->get()->row();

		$where = "user_id = '" . $user_id . "' and api_key = '" . $api_key . "' and TIMESTAMPDIFF(SECOND, created, NOW()) <= 604800";
		$w1 = $this->db->select('COUNT(*) as w1')->from('dbt_api_log')->where($where)->get()->row();

		$where = "user_id = '" . $user_id . "' and api_key = '" . $api_key . "' and TIMESTAMPDIFF(SECOND, created, NOW()) <= 2628000";
		$m1 = $this->db->select('COUNT(*) as m1')->from('dbt_api_log')->where($where)->get()->row();

		$res = array(
			'h1' => $h1->h1,
			'h24' => $h24->h24,
			'w1' => $w1->w1,
			'm1' => $m1->m1,
		);

		echo json_encode($res);
	}

	public function change_api_key_status($user, $api_key, $status)
	{

		$newstatus  = array(
			'status' => $status,
		);

		$this->db->where('api_key', $api_key)->update("dbt_api_keys", $newstatus);

		$message_val = ($status == 1) ? "Active" : "Inactive";

		$this->session->set_flashdata('message', "Status changed to " . $message_val . " successfully");
		redirect("backend/user/user/user_details/" . $user);
	}

	public function delete_api_key($user, $user_id, $key_id)
	{

		$this->db->query("delete from dbt_api_keys where id = '" . $key_id . "' and user_id = '" . $user_id . "'");

		$this->session->set_flashdata('message', "API key deleted successfully");
		redirect("backend/user/user/user_details/" . $user);
	}











	function ajax_tradelist()
	{

		$user_id = $this->uri->segment(5);

		$config = array();
		$config["base_url"] = base_url('backend/user/user/ajax_tradelist');
		$config["total_rows"] = $this->db->select('bidmaster.*, biddetail.bid_type as bid_type1, biddetail.bid_price as bid_price1, biddetail.market_symbol as market_symbol1, biddetail.complete_amount as complete_amount1, biddetail.success_time as success_time1, biddetail.complete_qty, biddetail.complete_amount, biddetail.success_time')
			->from('dbt_biding bidmaster')
			->join('dbt_biding_log biddetail', 'biddetail.bid_id = bidmaster.id', 'left')
			->where('bidmaster.user_id', $user_id)
			->get()
			->num_rows();

		$config["per_page"] = 15;
		$config["uri_segment"] = 6;
		$config["last_link"] = "Last";
		$config["first_link"] = "First";
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
		$config['full_tag_close'] = "</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tag_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(6)) ? $this->uri->segment(6) : 0;
		$start = ($page - 1) * $config["per_page"];
		$output = array(
			'pagination_link'  => $this->pagination->create_links(),
			'country_table'   => $this->user_model->ajax_trade_fetch_details($config["per_page"], $start, $user_id)
		);
		echo json_encode($output);
	}

	public function pending_user_verification_list()
	{
		$data['title']  = "Pending User List";

		/******************************
		 * Pagination Start
		 ******************************/
		$config["base_url"] = base_url('backend/user/user/pending_user_verification_list');
		$config["total_rows"] = $this->db->get_where('dbt_user', array('verified' => 3))->num_rows();
		$config["per_page"] = 25;
		$config["uri_segment"] = 5;
		$config["last_link"] = "Last";
		$config["first_link"] = "First";
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
		$config['full_tag_close'] = "</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tag_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		/* ends of bootstrap */
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;

		$data['users'] = $this->db->select('*')->from('dbt_user')
			->where('verified', 3)
			->limit($config["per_page"], $page)
			->get()
			->result();

		$data["links"] = $this->pagination->create_links();
		/******************************
		 * Pagination ends
		 ******************************/



		$data['content'] = $this->load->view("backend/user/pending_user_verification_list", $data, true);
		$this->load->view("backend/layout/main_wrapper", $data);
	}
	public function subscriber_list()
	{
		$data['title']  = "Subscriber List";

		/******************************
		 * Pagination Start
		 ******************************/
		$config["base_url"] = base_url('backend/user/subscriber_list');
		$config["total_rows"] = $this->db->count_all('web_subscriber');
		$config["per_page"] = 500;
		$config["uri_segment"] = 5;
		$config["last_link"] = "Last";
		$config["first_link"] = "First";
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['full_tag_open'] = "<ul class='pagination col-xs pull-right'>";
		$config['full_tag_close'] = "</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tag_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		/* ends of bootstrap */
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(5)) ? $this->uri->segment(5) : 0;

		$data['subscriber'] = $this->db->select('*')->from('web_subscriber')
			->where('status', 1)
			->limit($config["per_page"], $page)
			->get()
			->result();

		$data["links"] = $this->pagination->create_links();
		/******************************
		 * Pagination ends
		 ******************************/

		$data['content'] = $this->load->view("backend/user/subscribelist", $data, true);
		$this->load->view("backend/layout/main_wrapper", $data);
	}
	public function pending_user_verification($user_id = null)
	{
		$data['title']  = "Pending User verification";

		$user_data = $this->user_model->singleUserVerifyDoc($user_id);
		$data['user'] = $user_data;


		$this->form_validation->set_rules('user_id', display('user_id'), 'required|trim');

		if ($this->form_validation->run()) {

			if (isset($_POST['cancel'])) {

				$update_verify = $this->db->set('verified', '2')->where('user_id', $this->input->post('user_id'))->update("dbt_user");

				if ($update_verify) {

					unlink($user_data->document1);
					unlink($user_data->document2);
					@unlink($user_data->document3);

					$this->db->query("delete from dbt_user_verify_doc where user_id='" . $user_data->user_id . "'");

					$user_email = $this->db->select('email')->from('dbt_user')->where('user_id', $user_id)->get()->row();

					//send mail
					$email_content = "The submitted KYC document was rejected and 
					approval declined because : 
					<br>
					" . ($this->input->post('reason')) ? $this->input->post('reason') : "Reason not available please contact support";

					$data['title']      = 'LiboPro Exchange';
					$data['to']         = $user_email->email;
					$data['subject']    = 'KYC Rejected';
					$data['heading']    = 'KYC Document Rejected';
					$data['message']    = $email_content;
					//dynamically passing in email and password to send from
					//all the site password has only one unique part, that's what's passed in here
					$data['from_email']    = 'no-reply@libopro.com';
					$data['from_password_unique_word']    = 'No-reply';
					$data['priority']    = 1;

					$this->common_model->send_email($data);

					$this->session->set_flashdata('message', 'User verification cancelled and data deleted');
					redirect("backend/user/user/pending_user_verification_list");
				} else {
					$this->session->set_flashdata('exception', display('please_try_again'));
				}
			}

			if (isset($_POST['approve'])) {

				$verify_data = $this->db->select('*')->from('dbt_user_verify_doc')->where('user_id', $user_id)->get()->row();

				$user_update_data = array(
					'first_name'	=> $verify_data->first_name,
					'last_name'		=> $verify_data->last_name,
					'phone'			=> $verify_data->phone,
					'gender'		=> $verify_data->gender,
					'country'		=> $verify_data->country,
					'city'			=> $verify_data->city,
					'address'		=> $verify_data->address,
					'verified'		=> 1
				);

				$update_verify = $this->db->where('user_id', $this->input->post('user_id'))->update("dbt_user", $user_update_data);

				if ($update_verify) {

					//send mail
					$user_email = $this->db->select('email')->from('dbt_user')->where('user_id', $user_id)->get()->row();

					$email_content = "Your KYC data was approved.
					<br><br>
					Thanks for choosing LiboPro.";

					$data['title']      = 'LiboPro Exchange';
					$data['to']         = $user_email->email;
					$data['subject']    = 'Approved';
					$data['heading']    = 'KYC Document Approved';
					$data['message']    = $email_content;
					//dynamically passing in email and password to send from
					//all the site password has only one unique part, that's what's passed in here
					$data['from_email']    = 'no-reply@libopro.com';
					$data['from_password_unique_word']    = 'No-reply';
					$data['priority']    = 1;

					$this->common_model->send_email($data);

					$this->session->set_flashdata('message', 'User Verified');
					redirect("backend/user/user/pending_user_verification/$user_id");
				} else {
					$this->session->set_flashdata('exception', display('please_try_again'));
				}
			}
		}



		$data['content'] = $this->load->view("backend/user/pending_user_verification", $data, true);
		$this->load->view("backend/layout/main_wrapper", $data);
	}


	public function delete($user_id = null)
	{
		if ($this->user_model->delete($user_id)) {
			$this->session->set_flashdata('message', display('delete_successfully'));
		} else {
			$this->session->set_flashdata('exception', display('please_try_again'));
		}
		redirect("backend/user/user/");
	}

	/*
    |----------------------------------------------
    |        id genaretor
    |----------------------------------------------     
    */
	public function randomID($mode = 2, $len = 6)
	{
		$result = "";
		if ($mode == 1) :
			$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		elseif ($mode == 2) :
			$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		elseif ($mode == 3) :
			$chars = "abcdefghijklmnopqrstuvwxyz0123456789";
		elseif ($mode == 4) :
			$chars = "0123456789";
		endif;

		$charArray = str_split($chars);
		for ($i = 0; $i < $len; $i++) {
			$randItem = array_rand($charArray);
			$result .= "" . $charArray[$randItem];
		}
		return $result;
	}
	public function generateChatAdminID($mode = 2, $len = 6)
	{
		$result = "";
		if ($mode == 1) :
			$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
		elseif ($mode == 2) :
			$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		elseif ($mode == 3) :
			$chars = "abcdefghijklmnopqrstuvwxyz0123456789";
		elseif ($mode == 4) :
			$chars = "0123456789";
		endif;

		$charArray = str_split($chars);
		for ($i = 0; $i < $len; $i++) {
			$randItem = array_rand($charArray);
			$result .= "" . $charArray[$randItem];
		}
		echo "CH-" . $result;
	}
	/*
    |----------------------------------------------
    |         Ends of id genaretor
    |----------------------------------------------
    */
}
