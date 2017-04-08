<?php 
class Category extends MY_Controller{
	/*分类信息*/
	public function index(){
		/*获取用户信息*/
		$result = $this->session->userdata('user');
		$userdata['user_id'] = $result['user_id'];
		$user = $this->bakend->obtainUser($userdata);
		$data['user'] = $user[0];
		/*获取分类信息*/
		$info['cty_state'] = 1;
		/*载入分页类*/
		$this->load->library('pagination');
		/*配置项*/
		$perPage=5;
		$config['base_url'] = '/forum/index.php/category/Category/index';
		$config['total_rows'] = $this->db->where($info)->count_all_results('category');
		$config['per_page'] = $perPage;
		$config['uri_segment']=4;
		$config['first_link']='首页';
		$config['prev_link']='上一页';
		$config['next_link']='下一页';
		$config['last_link']='尾页';
		$config['cur_tag_open'] = ' <li class="active"><a >'; // 当前页开始样式  
		$config['cur_tag_close'] = '</a></li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';//“数字”链接的打开标签。
		$config['num_tag_close'] = '</li>' ;
		$config['prev_tag_open'] = '<li>';//“上一页”链接的打开标签。
		$config['prev_tag_close'] = '</li>';//“上一页”链接的关闭标签。
		$config['next_tag_open'] = '<li>';//“下一页”链接的打开标签。
		$config['next_tag_close'] = '</li>';//“下一页”链接的关闭标签。
		$this->pagination->initialize($config);	
		$offset=$this->uri->segment(4);
		$this->db->limit($perPage,$offset);
		$data['links']=$this->pagination->create_links();
		$category = $this->category->obtainCategory($info);
		$data['category'] = $category;
		$this->load->view('category/category',$data);
	}
	/*上传分类名*/
	public function uploadCategory(){
		/*获取用户信息*/
		$result = $this->session->userdata('user');
		$userdata['user_id'] = $result['user_id'];
		$user = $this->bakend->obtainUser($userdata);
		$data['user'] = $user[0];
		$this->load->view('category/uploadCategory',$data);
	}
	/*修改分类名*/
	public function updateCategory($cty_id){
		/*获取用户信息*/
		$result = $this->session->userdata('user');
		$userdata['user_id'] = $result['user_id'];
		$user = $this->bakend->obtainUser($userdata);
		$data['user'] = $user[0];
		/*获取分类信息*/
		$info['cty_id'] = $cty_id;
		$data['category'] = $this->category->obtainCategory($info);
		$this->load->view('category/updateCategory',$data);
	}
}
?>