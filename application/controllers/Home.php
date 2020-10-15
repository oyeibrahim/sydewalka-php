<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model(array(
            'website/web_model',
            'common_model',

        ));


        $this->load->helper('captcha');

        //set db timezone as default timezone
        $settings = $this->db->select('time_zone')->get('setting')->row();

        date_default_timezone_set($settings->time_zone);

        //set the theme, default is LIGHT
        $theme_mode = "LIGHT";

        if ($this->session->userdata('theme_mode')) {
            $theme_mode  = $this->session->userdata('theme_mode');
        } else {
            $this->session->set_userdata('theme_mode', $theme_mode);
        }

        $globdata['theme_mode']  = $theme_mode;

        $this->load->vars($globdata);
    }

    public function index()
    {

        $data['title'] = "SydeWalKa | Crypto Exchange Whitelabel | Web, Mobile and PC App Development | Crypto, Blockchain and Smart Contract App Development";
        $data['active'] = "home_page";

        $data['sliders']       = $this->web_model->slider();

        //get posts
        // $data['announcements']      = $this->web_model->readPosts(5, 0, "announcement");
        // $data['notices']      = $this->web_model->readPosts(5, 0, "notice");
        // $data['news']      = $this->web_model->readPosts(2, 0, "news");
        // $data['articles']      = $this->web_model->readPosts(2, 0, "article");

        // $data['coins'] = $this->web_model->activeHomeCoin();


        $this->load->view('website/header', $data);
        $this->load->view('website/index', $data);
        $this->load->view('website/footer', $data);
    }



    public function contact_controller()
    {

        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $subject = $this->input->post("subject");
        $message = $this->input->post("message");

        if ($name && $email && $subject && $message) {

            $contact_data = array(
                "name"      =>  $name,
                "email"     =>  $email,
                "subject"   =>  $subject,
                "message"   =>  $message,
                "status"    =>  1,
            );
            $this->db->insert('web_contacts', $contact_data);

            // /////////////////////////////////////////////////////////////////////
            // //mail site

            // $email_content = "New Contact message:
            // <br><br>
            // Name : " . $name . "
            // <br><br>
            // Email : " . $email . "
            // <br><br>
            // Subject : " . $subject . "
            // <br><br>
            // Message : " . $message . "
            // <br><br>";

            // $data['title']      = 'New Contact';
            // $data['to']         = 'admin@sydewalka.com';
            // $data['subject']    = 'New Contact Message';
            // $data['heading']    = 'New Contact Message';
            // $data['message']    = $email_content;
            // //dynamically passing in email and password to send from
            // //all the site password has only one unique part, that's what's passed in here
            // $data['from_email']    = 'info@sydewalka.com';
            // $data['priority']    = 1;

            // $this->common_model->send_email($data);
            // /////////////////////////////////////////////////////////////////////////////

            echo 1;
        } else {
            echo -1;
        }
    }


    public function change_theme()
    {

        if ($this->session->userdata('user_id')) { //if logged in user change DB and session value
            $prev_theme = $this->db->query("SELECT theme_mode FROM user WHERE user_id = '" . $this->session->userdata('user_id') . "'")->row()->theme_mode;

            $new_theme = ($prev_theme == "LIGHT") ? "DARK" : "LIGHT";
            //change in DB
            $updatedata = array(
                'user_id' => $this->session->userdata('user_id'),
                'theme_mode'  => $new_theme,
            );

            $this->web_model->updateUser($updatedata);

            //Change in session
            $this->session->unset_userdata('theme_mode');
            $this->session->set_userdata('theme_mode', $new_theme);
        } else { //if not logged in, just session

            $prev_theme = $this->session->userdata('theme_mode');

            $new_theme = ($prev_theme == "LIGHT") ? "DARK" : "LIGHT";

            //Change in session
            $this->session->unset_userdata('theme_mode');
            $this->session->set_userdata('theme_mode', $new_theme);
        }

        echo 1;
    }


    public function page_not_found()
    {
        $data['title']      = "SydeWalKa | 404 Error - Page Not Found";
        $data['active']      = "page_not_found";

        $this->load->view('website/header', $data);
        $this->load->view('website/404_error', $data);
        $this->load->view('website/footer', $data);
    }


    public function privacy_policy()
    {
        $data['title']      = "SydeWalKa | Exchange Privacy Policy";
        $data['active']      = "privacy_policy";

        $data['content'] = $this->db->query("SELECT * FROM web_article WHERE cat_slug = 'privacy-policy'")->row();

        $this->load->view('website/header', $data);
        $this->load->view('website/privacy_policy', $data);
        $this->load->view('website/footer', $data);
    }


    public function terms_and_conditions()
    {
        $data['title']      = "SydeWalKa | Exchange Terms";
        $data['active']      = "terms_and_conditions";

        $data['content'] = $this->db->query("SELECT * FROM web_article WHERE cat_slug = 'terms-and-conditions'")->row();

        $this->load->view('website/header', $data);
        $this->load->view('website/terms_and_conditions', $data);
        $this->load->view('website/footer', $data);
    }


    public function about_us()
    {
        $data['title']      = "SydeWalKa | About SydeWalKa";
        $data['active']      = "about_us";

        $data['content'] = $this->db->query("SELECT * FROM web_article WHERE cat_slug = 'about-us'")->row();

        $this->load->view('website/header', $data);
        $this->load->view('website/about_us', $data);
        $this->load->view('website/footer', $data);
    }


    public function account()
    {
        if (!($this->session->userdata('isLogIn') && $this->session->userdata('user_id')))
            redirect('login');


        $data['title']      = "SydeWalKa | User Center";
        $data['active']      = "account";

        $data['user_info'] = $this->web_model->retriveUserInfo();
        $data['user_log'] = $this->web_model->retriveUserlog();
        $data['user_ref'] = $this->web_model->retriveUserRef();

        ///////////////////--- For API---///////////////////
        $all_apis = $this->web_model->readUserApiKeys($this->session->userdata('user_id'));

        //empty array to be filled in the foreach loop
        $all_data = array();

        foreach ($all_apis as $key => $api_data) {
            $user_id = $api_data->user_id;
            $api_key = $api_data->api_key;

            $where = "user_id = '" . $user_id . "' and api_key = '" . $api_key . "' and TIMESTAMPDIFF(SECOND, created, NOW()) <= 3600";
            $h1 = $this->db->select('COUNT(*) as h1')->from('api_log')->where($where)->get()->row();

            $where = "user_id = '" . $user_id . "' and api_key = '" . $api_key . "' and TIMESTAMPDIFF(SECOND, created, NOW()) <= 86400";
            $h24 = $this->db->select('COUNT(*) as h24')->from('api_log')->where($where)->get()->row();

            $where = "user_id = '" . $user_id . "' and api_key = '" . $api_key . "' and TIMESTAMPDIFF(SECOND, created, NOW()) <= 604800";
            $w1 = $this->db->select('COUNT(*) as w1')->from('api_log')->where($where)->get()->row();

            $where = "user_id = '" . $user_id . "' and api_key = '" . $api_key . "' and TIMESTAMPDIFF(SECOND, created, NOW()) <= 2628000";
            $m1 = $this->db->select('COUNT(*) as m1')->from('api_log')->where($where)->get()->row();

            //create a new array to fill in the stats to the data
            $res = array(
                'id'         => $api_data->id,
                'user_id'     => $api_data->user_id,
                'api_key'     => $api_data->api_key,
                'status'     => $api_data->status,
                'created'     => $api_data->created,
                'updated'     => $api_data->updated,
                'h1'         => $h1->h1,
                'h24'         => $h24->h24,
                'w1'         => $w1->w1,
                'm1'         => $m1->m1,
            );
            //append the new array to data
            array_push($all_data, (object)$res);
        }

        // echo json_encode($data);
        $data['apis'] = $all_data;
        ///////////////////--- end API---///////////////////

        $this->load->view('website/header', $data);
        $this->load->view('website/account', $data);
        $this->load->view('website/footer', $data);
    }


    public function posts($cat_slug = null)
    {

        if (!$cat_slug && !$this->input->get("q")) {
            //if no category in the link and not a search, display the post home page

            $data['title']      = "SydeWalKa | SydeWalKa Posts Desk";
            $data['active']      = "posts";

            $data['announcements'] = $this->web_model->readPosts(20, 0, "announcement");
            $data['articles'] = $this->web_model->readPosts(8, 0, "article");
            $data['notices'] = $this->web_model->readPosts(5, 0, "notice");
            $data['news_posts'] = $this->web_model->readPosts(5, 0, "news");
            $data['symbol_detail'] = $this->web_model->readPosts(5, 0, "symbol-detail");


            $this->load->view('website/header', $data);
            $this->load->view('website/posts', $data);
            $this->load->view('website/footer', $data);
        }

        if (!$cat_slug && $this->input->get("q")) {
            //if a search and not category, display the category empasised and pagination page

            $data['title']      = "SydeWalKa | SydeWalKa Posts Desk";
            $data['active']      = "search_posts";

            $page = ($this->input->get('p')) ? $this->input->get('p') : 1;

            $count = $this->web_model->countSearchPosts($this->input->get("q"));
            $total = 20;
            $pageNumTemp = $count / $total;

            $pageNum = (int)ceil($pageNumTemp);

            //deal with too much or less request
            if ($page < 1) {
                redirect("posts?q=" . $this->input->get("q") . "&p=1");
            }
            if ($page > $pageNum && $pageNum != 0) {
                redirect("posts?q=" . $this->input->get("q") . "&p=" . $pageNum);
            }

            $data['pageNum'] = $pageNum;
            $data['userReq'] = $page;

            $data['cat'] = $cat_slug;

            $start = ((int)$page * $total) - $total;

            $data['posts'] = $this->web_model->readSearchPosts($total, $start, $this->input->get("q"));

            $data['announcements'] = $this->web_model->readPosts(5, 0, "announcement");
            $data['articles'] = $this->web_model->readPosts(5, 0, "article");
            $data['notices'] = $this->web_model->readPosts(5, 0, "notice");
            $data['news_posts'] = $this->web_model->readPosts(5, 0, "news");

            $this->load->view('website/header', $data);
            $this->load->view('website/search_posts', $data);
            $this->load->view('website/footer', $data);
        }

        if ($cat_slug && !$this->input->get("q")) {
            //if category is in the link and not a search, display the category empasised and pagination page

            $data['title']      = "SydeWalKa | SydeWalKa Posts Desk";
            $data['active']      = "category_posts";

            $page = ($this->input->get('p')) ? $this->input->get('p') : 1;

            $count = $this->web_model->countPosts($cat_slug);
            $total = 20;
            $pageNumTemp = $count / $total;

            $pageNum = (int)ceil($pageNumTemp);

            //deal with too much or less request
            if ($page < 1) {
                redirect("posts/" . $cat_slug . "?p=1");
            }
            if ($page > $pageNum) {
                redirect("posts/" . $cat_slug . "?p=" . $pageNum);
            }

            $data['pageNum'] = $pageNum;
            $data['userReq'] = $page;

            $data['cat'] = $cat_slug;

            $start = ((int)$page * $total) - $total;

            $data['posts'] = $this->web_model->readPosts($total, $start, $cat_slug);

            $data['announcements'] = $this->web_model->readPosts(5, 0, "announcement");
            $data['articles'] = $this->web_model->readPosts(5, 0, "article");
            $data['notices'] = $this->web_model->readPosts(5, 0, "notice");
            $data['news_posts'] = $this->web_model->readPosts(5, 0, "news");

            $this->load->view('website/header', $data);
            $this->load->view('website/category_posts', $data);
            $this->load->view('website/footer', $data);
        }
    }


    //for single post
    public function post($cat_slug, $post_slug)
    {
        $data['title']      = "SydeWalKa | SydeWalKa Post from Category - " . $cat_slug;
        $data['active']      = "single_post";



        $post = $this->web_model->getPost($cat_slug, $post_slug);

        if (!$post) {
            $this->session->set_flashdata('exception', "The requested post doesn't exist");
            redirect("posts");
        }

        $data['post'] = $post;
        $data['cat'] = $cat_slug;

        $data['announcements'] = $this->web_model->readPosts(2, 0, "announcement");
        $data['articles'] = $this->web_model->readPosts(2, 0, "article");
        $data['notices'] = $this->web_model->readPosts(2, 0, "notice");
        $data['news_posts'] = $this->web_model->readPosts(2, 0, "news");

        $this->load->view('website/header', $data);
        $this->load->view('website/single_post', $data);
        $this->load->view('website/footer', $data);
    }


    public function register()
    {
        $data['title']      = "SydeWalKa | Create an account with us";
        $data['active']      = "register";

        if ($this->session->userdata('isLogIn'))
            redirect(base_url());

        $rcode = $this->input->post('rcode');
        if ($rcode == '') {
            //Load Cookie For Store Referral ID
            $this->load->helper(array('cookie', 'url'));
            //Load Cookie For Store Referral ID
            $this->load->helper(array('cookie', 'url'));
            $ref = $this->input->get('ref');

            $rcode = $this->input->cookie('referral_id');

            if (isset($ref) && ($ref != "")) {
                $user_id = $this->db->select('user_id')->where('user_id', $ref)->get('user')->row();
                if ($user_id) {
                    set_cookie('referral_id', $ref, 86400 * 30);
                } else {
                    $this->session->set_flashdata('exception', 'Referral ID is invalid');
                    redirect("register");
                }
            } else {
            }
        }

        //Load Helper For [user_id] Generate
        $this->load->helper('string');

        //Set Rules From validation
        $this->form_validation->set_rules('f_name', 'Firstname', 'required|max_length[50]|trim');
        $this->form_validation->set_rules('l_name', 'Lastname', 'required|max_length[50]|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|max_length[50]|trim');
        $this->form_validation->set_rules('remail', 'Email', "required|valid_email|max_length[100]|trim");
        $this->form_validation->set_rules('rpass', 'Password', 'required|min_length[8]|matches[rr_pass]|trim');
        $this->form_validation->set_rules('rr_pass', 'Confirm Password', 'trim');
        $this->form_validation->set_rules('raccept_terms', 'Accept Terms and Conditions', 'required|trim');
        $this->form_validation->set_rules(
            'captcha',
            'Captcha',
            array(
                'matches[captcha]',
                function ($captcha) {
                    $oldCaptcha = $this->session->userdata('captcha');
                    if ($captcha == $oldCaptcha) {
                        return true;
                    }
                }
            )
        );

        //From Validation Check
        if ($this->form_validation->run()) {

            if (!$this->input->valid_ip($this->input->ip_address())) {
                $this->session->set_flashdata('exception',  'Invalid IP address');
                redirect("register");
            }

            //Generate User Id
            //helper loaded above
            $userid = strtoupper(random_string('alnum', 5));

            while ($this->web_model->checkUseridExist($userid)) {
                $userid = strtoupper(random_string('alnum', 5));
            }

            if ($this->web_model->checkEmailExist($this->input->post('remail'))) {

                if ($this->web_model->accountStatusCheck($this->input->post('remail')) == 0) {
                    $this->session->set_flashdata('exception',  'Your account is pending confirmation ckeck your email');
                    redirect("login");
                } elseif ($this->web_model->accountStatusCheck($this->input->post('remail')) == 1) {
                    $this->session->set_flashdata('exception',  'Email already registered');
                    redirect("login");
                } elseif ($this->web_model->accountStatusCheck($this->input->post('remail')) == 2) {
                    $this->session->set_flashdata('exception',  'Account marked pending please contact support');
                    redirect("login");
                } elseif ($this->web_model->accountStatusCheck($this->input->post('remail')) == 3) {
                    $this->session->set_flashdata('exception',  'Account suspended please contact support');
                    redirect("register");
                }
            }

            if ($this->web_model->checkUsernameExist($this->input->post('username'))) {
                $this->session->set_flashdata('exception',  'Username chosen');
                redirect("register");
            }

            $dlanguage = $this->db->select('language')->get('setting')->row();

            //hash password with BCRYPT
            $hashed_password = password_hash($this->input->post('rpass'), PASSWORD_BCRYPT);

            $password_reset_token = $this->randomID(1, 110);

            $data = [
                'first_name'    => $this->input->post('f_name'),
                'last_name'     => $this->input->post('l_name'),
                'username'      => $this->input->post('username'),
                'referral_id'   => $rcode,
                'language'      => $dlanguage->language,
                'user_id'       => $userid,
                'email'         => $this->input->post('remail'),
                'password'      => $hashed_password,
                'password_reset_token' => $password_reset_token,
                'status'        => 0,
                'ip'            => $this->input->ip_address()
            ];

            if ($this->web_model->registerUser($data)) {

                $alertData = array(
                    'user_id'       => $userid,
                    'trade_id'      => "",
                    'trade_type'    => "Registration",
                    'title'         => "Welcome to SydeWalKa",
                    'message'       => "Your registration was successful, Welcome with love from SydeWalKa Group. Explore our platform and feel free to contact us if you encounter any issue.",
                    'link'          => base_url("account"),
                    'status'        => 1,
                );

                $this->web_model->createAlert($alertData);

                //////////////////////////////////////////////////////////////////////////
                $email_content = "Your SydeWalKa account was created successfully.
                <br><br>
                Your User ID is : " . $userid . "
                <br><br>
                Please click the button below to activate your account.
                <br><br>
                <a href='" . base_url('activate-account') . "?c=" . $password_reset_token . "&e=" . $this->input->post('remail') . "&i=" . $userid . "'>
                    <button style='text-decoration: none; background-color: #8E84B7; color: white; border-radius: 5px; padding-right:10px; padding-left:10px; padding-top: 8px; padding-bottom: 8px;'>
                        Activate Account
                    </button>
                </a>
                <br>
                or copy and paste this link to your browser
                <a href='" . base_url('activate-account') . "?c=" . $password_reset_token . "&e=" . $this->input->post('remail') . "&i=" . $userid . "'>"
                    . base_url('activate-account') . "?c=" . $password_reset_token . "&e=" . $this->input->post('remail') . "&i=" . $userid . "</a>";

                $data['title']      = 'SydeWalKa';
                $data['to']         = $this->input->post('remail');
                $data['subject']    = 'Account Activation';
                $data['heading']    = 'Activate your SydeWalKa account';
                $data['message']    = $email_content;
                //dynamically passing in email and password to send from
                //all the site password has only one unique part, that's what's passed in here
                $data['from_email']    = 'no-reply@sydewalka.com';
                
                $data['priority']    = 1;

                $this->common_model->send_email($data);
                //////////////////////////////////////////////////////////////////////////

                //subscribe user to email list  //we won't use feature of marking all users in subscriber
                // $sub_data['email'] = $this->input->post('remail');
                // $this->web_model->subscribe($sub_data);

                $this->session->set_flashdata('message', 'Account created successfully click the link sent to your email to activate your account');
                redirect("login");
            }
        } else {
            $captcha = create_captcha(array(
                'img_path'      => FCPATH . 'assets/images/captcha/',
                'img_url'       => base_url('assets/images/captcha/'),
                'font_path'     => FCPATH . 'assets/fonts/Harabara.ttf',
                'img_width'     => '270',
                'img_height'    => 64,
                'expiration'    => 120, //2 min
                'word_length'   => 7,
                'font_size'     => 72,
                'img_id'        => 'Imageid',
                'pool'          => '0123456789abcdefghijklmnopqrstuvwxyz',

                // White background and border, black text and red grid
                'colors'        => array(
                    'background' => array(255, 255, 255),
                    'border' => array(142, 132, 183),
                    'text' => array(73, 86, 119),
                    'grid' => array(255, 255, 255)
                )
            ));

            $data['captcha_word'] = $captcha['word'];
            $data['captcha_image'] = $captcha['image'];

            $this->session->set_userdata('captcha', $captcha['word']);
        }

        $this->load->view('website/header', $data);
        $this->load->view('website/register', $data);
        $this->load->view('website/footer', $data);
    }

    public function login()
    {

        if ($this->session->userdata('isLogIn'))
            redirect(base_url());


        $data['title']      = "SydeWalKa | Login to your account";
        $data['active']      = "login";

        $email      = $this->input->post('luseremail');
        $password   = $this->input->post('lpassword');

        //Set Rules From validation
        $this->form_validation->set_rules('luseremail', 'Email', 'required|max_length[100]|trim');
        $this->form_validation->set_rules('lpassword', 'Password', 'required|max_length[32]|md5|trim');

        $this->form_validation->set_rules(
            'captcha',
            "Captcha",
            array(
                'matches[captcha]',
                function ($captcha) {
                    $oldCaptcha = $this->session->userdata('captcha');
                    if ($captcha == $oldCaptcha) {
                        return true;
                    }
                }
            )
        );



        //From Validation Check
        if ($this->form_validation->run()) {
            $date = new DateTime();
            $access_time = $date->format('Y-m-d H:i:s');

            $data['user'] = (object)$userData = array(
                'email'      => $email,
                'password'   => $password
            );

            if ($this->web_model->checkEmailExist($email)) {

                $user_status = $this->web_model->accountStatusCheck($email);

                if ($user_status == 0) {
                    $this->session->set_flashdata('exception',  'Account pending activation please click the activation link in your email');
                    redirect("login");
                } elseif ($user_status == 2) {
                    $this->session->set_flashdata('exception',  'Account marked pending please contact support');
                    redirect("login");
                } elseif ($user_status == 3) {
                    $this->session->set_flashdata('exception',  'Account suspended please contact support');
                    redirect("login");
                } elseif ($user_status == 1) {

                    //check login do BCRYPT decrypt of password also
                    $user = $this->web_model->loginCheckUser($userData);

                    if ($user) {

                        $query = $this->db->select('googleauth')->from('user')->where('user_id',  $user->user_id)->get()->row();

                        if ($query->googleauth != '') { //If user is using googleAuth

                            $user_agent = array(
                                'device'     => $this->agent->browser(),
                                'browser'    => $this->agent->browser() . ' V-' . $this->agent->version(),
                                'platform'   => $this->agent->platform()
                            );


                            $sData = array(
                                'method'      => 'googleAuth', //to know which verification to use
                                'id'          => $user->id,
                                'user_id'     => $user->user_id,
                                'fullname'    => $user->first_name . ' ' . $user->last_name,
                                'email'       => $user->email
                            );
                            $logData = array(
                                'log_type'     => 'login',
                                'access_time'  => $access_time,
                                'user_agent'   => json_encode($user_agent),
                                'user_id'      => $user->user_id,
                                'ip'           => $this->input->ip_address()
                            );

                            $this->session->set_userdata('userdata', $sData);
                            $this->session->set_userdata('userlogdata', $logData);
                            redirect(base_url('login-verify'));
                        } else { //if no googleAuth then use email

                            $user_agent = array(
                                'device'     => $this->agent->browser(),
                                'browser'    => $this->agent->browser() . ' V-' . $this->agent->version(),
                                'platform'   => $this->agent->platform()
                            );


                            $sData = array(
                                'method'      => 'emailAuth', //to know which verification to use
                                'id'          => $user->id,
                                'user_id'     => $user->user_id,
                                'fullname'    => $user->first_name . ' ' . $user->last_name,
                                'email'       => $user->email
                            );
                            $logData = array(
                                'log_type'     => 'login',
                                'access_time'  => $access_time,
                                'user_agent'   => json_encode($user_agent),
                                'user_id'      => $user->user_id,
                                'ip'           => $this->input->ip_address()
                            );

                            //Store data to session, log & Login
                            $this->session->set_userdata('userdata', $sData);
                            $this->session->set_userdata('userlogdata', $logData);

                            //create new email veruification code
                            $e_verify_data['email_auth'] = $this->randomID(2, 7);
                            $this->db->where('user_id', $user->user_id)
                                ->update('user', $e_verify_data);

                            /////////////////////////////////////////////////////////////////////////
                            ////send code through mail
                            // $email_content = "Your login code is :
                            // <br>
                            // <span style='font-size:30px;'>".$e_verify_data['email_auth']."</span>";

                            // $data['title']      = 'SydeWalKa';
                            // $data['to']         = $user->email;
                            // $data['subject']    = 'Login Code';
                            // $data['heading']    = 'Auth Code for Account Login';
                            // $data['message']    = $email_content;
                            // //dynamically passing in email and password to send from
                            // //all the site password has only one unique part, that's what's passed in here
                            // $data['from_email']    = 'no-reply@sydewalka.com';
                            // 
                            // $data['priority']    = 1;

                            // $this->common_model->send_email($data);
                            /////////////////////////////////////////////////////////////////////////

                            redirect(base_url('login-verify'));
                        }
                    } else {
                        $this->session->set_flashdata('exception', 'Wrong password');
                        redirect(base_url('login'));
                    }
                } else {
                    $this->session->set_flashdata('exception', 'An error occured please try again !');
                    redirect(base_url('login'));
                }
            } else {
                $this->session->set_flashdata('exception', "Email doesn't exist, new user? please register");
                redirect(base_url('login'));
            }
        } else {
            $captcha = create_captcha(array(
                'img_path'      => FCPATH . 'assets/images/captcha/',
                'img_url'       => base_url('assets/images/captcha/'),
                'font_path'     => FCPATH . 'assets/fonts/Harabara.ttf',
                'img_width'     => '270',
                'img_height'    => 64,
                'expiration'    => 120, //2 min
                'word_length'   => 7,
                'font_size'     => 72,
                'img_id'        => 'Imageid',
                'pool'          => '0123456789abcdefghijklmnopqrstuvwxyz',

                // White background and border, black text and red grid
                'colors'        => array(
                    'background' => array(255, 255, 255),
                    'border' => array(142, 132, 183),
                    'text' => array(73, 86, 119),
                    'grid' => array(255, 255, 255)
                )
            ));

            $data['captcha_word'] = $captcha['word'];
            $data['captcha_image'] = $captcha['image'];

            $this->session->set_userdata('captcha', $captcha['word']);
        }



        $this->load->view('website/header', $data);
        $this->load->view('website/login', $data);
        $this->load->view('website/footer', $data);
    }

    public function login_verify()
    {

        if ($this->session->userdata('isLogIn'))
            redirect(base_url());

        $data['title']      = "SydeWalKa | Login Authentication";
        $data['active']      = "login_verify";

        $userdata = $this->session->userdata('userdata');
        $userlogdata = $this->session->userdata('userlogdata');


        if (!$userdata) {
            redirect(base_url('login'));
            return;
        }


        if ($userdata['method'] == "googleAuth") { //for Google Auth
            // 2 factor authentication codes.
            $this->load->library('GoogleAuthenticator');

            $query = $this->db->select('googleauth')->from('user')->where('user_id',  $userdata['user_id'])->get()->row();

            if (!$query->googleauth) {
                $this->session->set_flashdata('exception', 'Session expired !!! Please login again');
                redirect('login');
            }

            $appSetting = $this->common_model->get_setting();

            $ga = new GoogleAuthenticator();
            $secret = $query->googleauth;
            $qrCodeUrl = $ga->getQRCodeGoogleUrl($appSetting->title, $secret);
            $data['qrCodeUrl'] = $qrCodeUrl;

            //Set Rules Form validation
            $this->form_validation->set_rules('token', 'token', 'required|max_length[6]|trim');

            //Form Validation Check
            if ($this->form_validation->run()) {
                $oneCode = $this->input->post('token');
                // $oneCode = $ga->getCode($secret);
                //echo "Checking Code '$oneCode' and Secret '$secret':\n";


                $checkResult = $ga->verifyCode($secret, $oneCode, 2);    // 2 = 2*30sec clock tolerance
                if ($checkResult) {
                    $user_agent = array(
                        'device'     => $this->agent->browser(),
                        'browser'    => $this->agent->browser() . ' V-' . $this->agent->version(),
                        'platform'   => $this->agent->platform()
                    );

                    $theme_mode = $this->db->query("SELECT theme_mode FROM user WHERE user_id = '" . $userdata['user_id'] . "'")->row()->theme_mode;
                    $sData = array(
                        'isLogIn'     => true,
                        'id'          => $userdata['id'],
                        'user_id'     => $userdata['user_id'],
                        'fullname'    => $userdata['fullname'],
                        'email'       => $userdata['email'],
                        'theme_mode'  => $theme_mode
                    );
                    $logData = array(
                        'log_type'     => 'login',
                        'access_time'  => $userlogdata['access_time'],
                        'user_agent'   => json_encode($user_agent),
                        'user_id'      => $userlogdata['user_id'],
                        'ip'           => $userlogdata['ip']
                    );

                    //Unset session, log & Login
                    $this->session->unset_userdata('userdata');
                    $this->session->unset_userdata('userlogdata');

                    //Store new data to session, log & Login
                    $this->session->set_userdata($sData);

                    $this->web_model->storeUserLogData($logData);

                    // //////////////////////////////////////////////////////////////////////////////////
                    // //mail user
                    // $email_content = "A login activity was carried out on your SydeWalKa account
                    // with details : 
                    // <br><br>
                    // Time : ".$userlogdata['access_time']."
                    // <br>
                    // Agent : ".$this->agent->platform().' <br>Browser: '.$this->agent->browser().' V-'.$this->agent->version()."
                    // <br>
                    // IP Address : ".$this->input->ip_address()."
                    // <br><br>
                    // Please contact an admin right away if this wasn't you.";

                    // $data['title']      = 'SydeWalKa';
                    // $data['to']         = $userdata['email'];
                    // $data['subject']    = 'Login Alert';
                    // $data['heading']    = 'New Login to Your Account';
                    // $data['message']    = $email_content;
                    // //dynamically passing in email and password to send from
                    // //all the site password has only one unique part, that's what's passed in here
                    // $data['from_email']    = 'no-reply@sydewalka.com';
                    // 
                    // $data['priority']    = 3;

                    // $this->common_model->send_email($data);
                    // //////////////////////////////////////////////////////////////////////////////////

                    redirect(base_url());
                } else {

                    $this->session->set_flashdata('exception', "Invalid authentication code");
                }
            }
        } else { //for Email Auth

            $query = $this->db->select('email_auth')->from('user')->where('user_id',  $userdata['user_id'])->get()->row();

            if (!$query->email_auth) {
                $this->session->set_flashdata('exception', 'Session expired !!! Please login again');
                redirect('login');
            }

            //Set Rules Form validation
            $this->form_validation->set_rules('token', 'token', 'required|max_length[7]|trim');

            //Form Validation Check
            if ($this->form_validation->run()) {
                $user_code = $this->input->post('token');
                if ($query->email_auth == $user_code) {

                    $time_check = $this->db->query("select TIMESTAMPDIFF(SECOND, updated, NOW()) AS 'seconds' FROM user WHERE user_id ='" . $userdata['user_id'] . "'")->row();

                    if ($time_check->seconds > 300) { //   5 minutes
                        $this->session->set_flashdata('exception', 'Code expired !!! Please login again');
                        redirect('login');
                    }

                    $user_agent = array(
                        'device'     => $this->agent->browser(),
                        'browser'    => $this->agent->browser() . ' V-' . $this->agent->version(),
                        'platform'   => $this->agent->platform()
                    );

                    $theme_mode = $this->db->query("SELECT theme_mode FROM user WHERE user_id = '" . $userdata['user_id'] . "'")->row()->theme_mode;

                    $sData = array(
                        'isLogIn'     => true,
                        'id'          => $userdata['id'],
                        'user_id'     => $userdata['user_id'],
                        'fullname'    => $userdata['fullname'],
                        'email'       => $userdata['email'],
                        'theme_mode'  => $theme_mode
                    );

                    $logData = array(
                        'log_type'     => 'login',
                        'access_time'  => $userlogdata['access_time'],
                        'user_agent'   => json_encode($user_agent),
                        'user_id'      => $userlogdata['user_id'],
                        'ip'           => $userlogdata['ip']
                    );

                    //Unset session, log & Login
                    $this->session->unset_userdata('userdata');
                    $this->session->unset_userdata('userlogdata');

                    //Store data to session, log & Login
                    $this->session->set_userdata($sData);
                    $this->web_model->storeUserLogData($logData);

                    //////////////////////////////////////////////////////////////////////////
                    //mail user
                    // $email_content = "A login activity was carried out on your SydeWalKa account
                    // with details : 
                    // <br><br>
                    // Time : ".$userlogdata['access_time']."
                    // <br>
                    // Agent : ".$this->agent->platform().' <br>Browser: '.$this->agent->browser().' V-'.$this->agent->version()."
                    // <br>
                    // IP Address : ".$this->input->ip_address()."
                    // <br><br>
                    // Please contact an admin right away if this wasn't you.";

                    // $data['title']      = 'SydeWalKa';
                    // $data['to']         = $userdata['email'];
                    // $data['subject']    = 'Login Alert';
                    // $data['heading']    = 'New Login to Your Account';
                    // $data['message']    = $email_content;
                    // //dynamically passing in email and password to send from
                    // //all the site password has only one unique part, that's what's passed in here
                    // $data['from_email']    = 'no-reply@sydewalka.com';
                    // 
                    // $data['priority']    = 3;

                    // $this->common_model->send_email($data);
                    //////////////////////////////////////////////////////////////////////////

                    redirect(base_url());
                } else {

                    $this->session->set_flashdata('exception', "Invalid Authentication code");
                    redirect('login-verify');
                }
            }
        }


        if ($userdata['method'] == "googleAuth") { //for Google Auth
            $this->load->view('website/header', $data);
            $this->load->view('website/gauthlogin', $data);
            $this->load->view('website/footer', $data);
        } else { //for Email Auth
            $this->load->view('website/header', $data);
            $this->load->view('website/eauthlogin', $data);
            $this->load->view('website/footer', $data);
        }
    }

    public function email_check($email, $user_id)
    {

        $emailExists = $this->db->select('*')
            ->where('email', $email)
            ->where_not_in('user_id', $user_id)
            ->get('user')
            ->num_rows();

        if ($emailExists > 0) {
            $this->form_validation->set_message('email', 'The {field} is already registered.');
            return false;
        } else {
            return true;
        }
    }


    public function phone_check($phone, $user_id)
    {
        $emailExists = $this->db->select('phone')
            ->where('phone', $phone)
            ->where_not_in('user_id', $user_id)
            ->get('user')
            ->num_rows();

        if ($emailExists > 0) {
            $this->form_validation->set_message('phone_check', 'The {field} is already registered.');
            return false;
        } else {
            return true;
        }
    }


    public function edit_profile()
    {

        if (!($this->session->userdata('isLogIn') && $this->session->userdata('user_id')))
            redirect('login');


        $data['title']      = "SydeWalKa | Edit your SydeWalKa account details";
        $data['active']      = "edit_profile";

        $user_id = $this->session->userdata('user_id');

        $this->form_validation->set_rules('user_id', 'User', 'required|max_length[50]');

        if ($this->form_validation->run()) {

            $user   = $this->web_model->retriveUserInfo();

            if (!password_verify($this->input->post('password'), $user->password)) {
                $this->session->set_flashdata('exception', 'Invalid Password');
                redirect("edit-profile");
            }
            //set config 
            $config = [
                'upload_path'      => './upload/user/',
                'allowed_types'    => 'gif|jpg|png|jpeg',
                'overwrite'        => false,
                'maintain_ratio'   => true,
                'encrypt_name'     => true,
                'remove_spaces'    => true,
                'file_ext_tolower' => true,
                'max_size'         => 1024 //Max size is 1MB
            ];
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $data = $this->upload->data();
                $image = $config['upload_path'] . $data['file_name'];

                //delete previous picture from the site if new image was uploaded
                if ($image && $this->input->post('old_image')) {
                    unlink($this->input->post('old_image'));
                }

                $config['image_library']  = 'gd2';
                $config['source_image']   = $image;
                $config['create_thumb']   = false;
                $config['encrypt_name'] = TRUE;
                $config['width']          = 125;
                // $config['height']         = 125;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $this->session->set_flashdata('message', 'Profile Picture Updated');
            }
            /*-----------------------------------*/
            $data['user'] = (object)$userData = array(
                'user_id'   => $user_id,
                // 'first_name'   => $this->input->post('first_name'),
                // 'last_name'    => $this->input->post('last_name'),
                // 'email'       => $this->input->post('email'),
                // 'phone'       => $this->input->post('phone'),
                'bio'       => $this->input->post('bio', true),
                'image'       => (!empty($image) ? $image : $this->input->post('old_image'))
            );

            // if (empty($userData['image'])) {
            //     $this->session->set_flashdata('exception', $this->upload->display_errors()); 

            // }


            if ($this->web_model->updateUser($userData)) {
                $this->session->set_userdata(array(
                    'fullname'   => $user->first_name . ' ' . $user->last_name,
                    'email'       => $user->email,
                    'image'       => (!empty($image) ? $image : $this->input->post('old_image'))
                ));
                $this->session->set_flashdata('message', 'Profile Updated');
            } else {
                $this->session->set_flashdata('exception',  'An error occured please try again');
            }
            redirect("account#nav-settings");
        }


        $data['user']   = $this->web_model->retriveUserInfo();

        $this->load->view('website/header', $data);
        $this->load->view('website/edit_profile', $data);
        $this->load->view('website/footer', $data);
    }



    public function change_password()
    {

        if (!($this->session->userdata('isLogIn') && $this->session->userdata('user_id')))
            redirect('login');

        $data['title']      = "SydeWalKa | Change password";
        $data['active']      = "change_password";

        $this->form_validation->set_rules('old_pass', 'Enter old password', 'required');
        $this->form_validation->set_rules('new_pass', 'Enter new password', 'required|max_length[32]|matches[confirm_pass]|trim');
        $this->form_validation->set_rules('confirm_pass', 'Confirm new password', 'required|max_length[32]|trim');

        if ($this->form_validation->run()) {
            $oldpass = $this->input->post('old_pass');

            //hash new password
            $new_pass['password'] = password_hash($this->input->post('new_pass'), PASSWORD_BCRYPT);

            $query = $this->db->select('password')
                ->from('user')
                ->where('user_id', $this->session->userdata('user_id'))
                ->get()
                ->row();

            //can't change to previous password
            if (password_verify($this->input->post('new_pass'), $query->password)) {
                $this->session->set_flashdata('exception', "Passsword musn't be the previous password");
                redirect('change-password');
            }

            if ($query && password_verify($oldpass, $query->password)) {

                $this->db->where('user_id', $this->session->userdata('user_id'))
                    ->update('user', $new_pass);

                $log_data = $this->db->select('*')->from('password_log')
                    ->where('user_id', $this->session->userdata('user_id'))
                    ->get()
                    ->row();
                if ($log_data) { //if already exist, update to keep track of last password change action and time
                    $this->db->set('track', $this->randomID())
                        ->where('user_id', $this->session->userdata('user_id'))
                        ->update('password_log');
                } else { //else create new log
                    $newlog = array(
                        "user_id"   =>  $this->session->userdata('user_id'),
                        "track"     =>  $this->randomID(),
                    );
                    $this->db->insert('password_log', $newlog);
                }

                /////////////////////////////////////////////////////////////////////
                //mail user
                $user_email = $this->db->select('email')->from('user')->where('user_id', $this->session->userdata('user_id'))->get()->row();
                $date = new DateTime(); //to get current time

                $email_content = "Password changed successfully, details below : 
                <br><br>
                Time : " . $date->format('Y-m-d H:i:s') . "
                <br>
                Agent : " . $this->agent->platform() . ' 
                <br>
                Browser: ' . $this->agent->browser() . ' V-' . $this->agent->version() . "
                <br>
                IP Address : " . $this->input->ip_address() . "
                <br><br>
                Please contact an admin right away if this wasn't you.
                <br><br>
                Withdrawal will be disabled on your account for the next 24 hours 
                for security reasons.";

                $data['title']      = 'SydeWalKa';
                $data['to']         = $user_email->email;
                $data['subject']    = 'Password Changed';
                $data['heading']    = 'Password Changed Successfully';
                $data['message']    = $email_content;
                //dynamically passing in email and password to send from
                //all the site password has only one unique part, that's what's passed in here
                $data['from_email']    = 'no-reply@sydewalka.com';
                
                $data['priority']    = 1;

                $this->common_model->send_email($data);
                /////////////////////////////////////////////////////////////////////////////

                $alertData = array(
                    'user_id'       => $this->session->userdata('user_id'),
                    'trade_id'      => "",
                    'trade_type'    => "Password Change",
                    'title'         => "Password changed successfully",
                    'message'       => "Your SydeWalKa password was changed successfully",
                    'link'          => base_url("account"),
                    'status'        => 1,
                );

                $this->web_model->createAlert($alertData);

                $this->session->set_flashdata('message', 'Password Changed Successfully');
                redirect('account#nav-settings');
            } else {
                $this->session->set_flashdata('exception', 'Wrong Password !!');
                redirect('change-password');
            }
        }


        $this->load->view('website/header', $data);
        $this->load->view('website/change_password', $data);
        $this->load->view('website/footer', $data);
    }

    public function forgotPassword()
    {

        //Set Rules From validation
        $this->form_validation->set_rules('fuseremail', 'Email', 'required');

        //Form Validation Check
        if ($this->form_validation->run()) {

            $user_data = $this->db->select("*")
                ->from('user')
                ->where('email', $this->input->post('fuseremail'))
                ->get()
                ->row();

            if ($user_data && $user_data->email) {

                $email = $this->input->post('fuseremail');


                $varify_code = $user_data->password_reset_token;

                /******************************
                 *  Email Verify
                 ******************************/

                ///////////////////////////////////////////////////////////////////////
                $email_content = "You have requested a reset of your SydeWalKa account
                password. To execute this request click the button below
                <br><br>
                <a href='" . base_url('resetpassword?rcode=') . $varify_code . "'>
                    <button style='text-decoration: none; background-color: #8E84B7; color: white; border-radius: 5px; padding-right:10px; padding-left:10px; padding-top: 8px; padding-bottom: 8px;'>
                        Click here
                    </button>
                </a>
                <br>
                or copy and paste this link to your browser
                <a href='" . base_url('resetpassword?rcode=') . $varify_code . "'>"
                    . base_url('resetpassword?rcode=') . $varify_code . "</a>
                <br><br>
                Your code is: " . $varify_code . "
                <br><br>
                If it wasn't you please contact support immediately.
                <br><br>
                Thanks for choosing SydeWalKa.";

                $data['title']      = 'SydeWalKa';
                $data['to']         = $user_data->email;
                $data['subject']    = 'Password Reset';
                $data['heading']    = 'Password Reset Verification';
                $data['message']    = $email_content;
                //dynamically passing in email and password to send from
                //all the site password has only one unique part, that's what's passed in here
                $data['from_email']    = 'no-reply@sydewalka.com';
                
                $data['priority']    = 1;

                //Send Mail Password Reset Verification
                $send = $this->common_model->send_email($data);
                ///////////////////////////////////////////////////////////////////////

                if (isset($send)) {

                    //change password reset token
                    $newtoken = array(
                        'password_reset_token' => $this->randomID(1, 110),
                    );
                    $this->db->where('email', $user_data->email)->update('user', $newtoken);

                    //delete previous unused verify data for this email
                    $this->db->query("delete from verify where email = '" . $email . "' and status = '1'");

                    $varify_data = array(

                        'ip_address'    => $this->input->ip_address(),
                        'user_id'       => $user_data->user_id,
                        'session_id'    => $this->session->userdata('isLogIn'),
                        'verify_code'   => $varify_code,
                        'email'         => $email
                    );
                    //insert new verify data
                    $this->db->insert('verify', $varify_data);
                    $id = $this->db->insert_id();

                    $this->session->set_flashdata('message', 'Password reset code sent check your email');
                    redirect("resetpassword");
                }
            } else {
                $this->session->set_flashdata('exception', "Email isn't registered");
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('exception', "Please enter a valid email");
            redirect('login');
        }
    }

    public function resetpassword()
    {
        $code = $this->input->get('rcode');

        //in case the user didnt visit the GET method link check for availability of the code in GET
        if ($code) {
            $chkdata = $this->db->select('*')
                ->from('verify')
                ->where('verify_code', $code)
                ->where('status', 1)
                ->get()
                ->row();

            //code expires after 5 minutes
            if ($chkdata) {
                $query = $this->db->query("select TIMESTAMPDIFF(SECOND, created, NOW()) AS 'seconds' FROM verify WHERE verify_code ='" . $code . "'")->row();

                if ($query->seconds > 300) {
                    //delete the code
                    $this->db->query("delete from verify where verify_code = '" . $code . "'");
                    $this->session->set_flashdata('exception', 'Link expired Please try again');
                    redirect('login');
                    return;
                }
            } else {
                $this->session->set_flashdata('exception', 'Invalid reset code');
                redirect('login');
                return;
            }
        }


        $data['title']      = "SydeWalKa | Reset password";
        $data['active']      = "reset_password";


        $code = $this->input->post('verificationcode');
        $newpassword = $this->input->post('newpassword');

        $chkdata = $this->db->select('*')
            ->from('verify')
            ->where('verify_code', $code)
            ->where('status', 1)
            ->get()
            ->row();

        //Set Rules Form validation
        $this->form_validation->set_rules('verificationcode', 'Enter verification code', 'required');
        $this->form_validation->set_rules('newpassword', 'Password', 'required|trim|min_length[8]|max_length[32]|matches[r_pass]');
        $this->form_validation->set_rules('r_pass', 'Password', 'trim');

        //Form Validation Check
        if ($this->form_validation->run()) {
            if ($chkdata != NULL) {

                $query = $this->db->query("select TIMESTAMPDIFF(SECOND, created, NOW()) AS 'seconds' FROM verify WHERE verify_code ='" . $code . "'")->row();

                if ($query->seconds > 300) {
                    //delete the code
                    $this->db->query("delete from verify where verify_code = '" . $code . "'");
                    $this->session->set_flashdata('exception', 'Link expired Please try again');
                    redirect('login');
                    return;
                }

                $email = $chkdata->email;

                $password   = array(
                    'password' => password_hash($newpassword, PASSWORD_BCRYPT)
                );

                $status     = array(
                    'status'   => 0
                );

                $this->db->where('verify_code', $code)
                    ->update('verify', $status);

                $this->db->where('email', $email)
                    ->update('user', $password);

                $log_data = $this->db->select('*')->from('password_log')
                    ->where('user_id', $chkdata->user_id)
                    ->get()
                    ->row();
                if ($log_data) { //if already exist, update to keep track of last password change action and time
                    $this->db->set('track', $this->randomID())
                        ->where('user_id', $chkdata->user_id)
                        ->update('password_log');
                } else { //else create new log
                    $newlog = array(
                        "user_id"   =>  $chkdata->user_id,
                        "track"     =>  $this->randomID(),
                    );
                    $this->db->insert('password_log', $newlog);
                }

                $alertData = array(
                    'user_id'       => $chkdata->user_id,
                    'trade_id'      => "",
                    'trade_type'    => "Password Change",
                    'title'         => "Password changed successfully",
                    'message'       => "Your SydeWalKa password was changed successfully",
                    'link'          => base_url("account"),
                    'status'        => 1,
                );

                $this->web_model->createAlert($alertData);

                /////////////////////////////////////////////////////////////////////////
                //mail user
                $date = new DateTime(); //to get current time

                $email_content = "Password changed successfully, details below : 
                <br><br>
                Time : " . $date->format('Y-m-d H:i:s') . "
                <br>
                Agent : " . $this->agent->platform() . ' 
                <br>
                Browser: ' . $this->agent->browser() . ' V-' . $this->agent->version() . "
                <br>
                IP Address : " . $this->input->ip_address() . "
                <br><br>
                Please contact an admin right away if this wasn't you.
                <br><br>
                Withdrawal will be disabled on your account for the next 24 hours 
                for security reasons.";

                $data['title']      = 'SydeWalKa';
                $data['to']         = $email;
                $data['subject']    = 'Password Changed';
                $data['heading']    = 'Password Changed Successfully';
                $data['message']    = $email_content;
                //dynamically passing in email and password to send from
                //all the site password has only one unique part, that's what's passed in here
                $data['from_email']    = 'no-reply@sydewalka.com';
                
                $data['priority']    = 1;

                $this->common_model->send_email($data);
                ///////////////////////////////////////////////////////////////////////////////////

                $this->session->set_flashdata('message', 'Password changed successfully');
                redirect('login');
            } else {
                $this->session->set_flashdata('exception', 'Invalid code');
                redirect('resetpassword');
            }
        } else {
            $this->load->view('website/header', $data);
            $this->load->view('website/passwordreset', $data);
            $this->load->view('website/footer', $data);
        }
    }

    //used for enabling and disabling GAuth
    public function googleauth()
    {

        if (!($this->session->userdata('isLogIn') && $this->session->userdata('user_id')))
            redirect('login');

        $data['title']      = "SydeWalKa | Setup Google Authentication";
        $data['active']      = "googleauth";


        // 2 factor authentication codes.
        $this->load->library('GoogleAuthenticator');

        $ga = new GoogleAuthenticator();


        $query = $this->db->select('googleauth')->from('user')->where('user_id', $this->session->userdata('user_id'))->get()->row();
        $appSetting = $this->common_model->get_setting();

        if ($query->googleauth != '') { //used to know if the user want to enable or disable GAuth
            $secret = $query->googleauth;
            $data['btnenable'] = 0;
        } else {
            $secret = $ga->createSecret();
            $data['btnenable'] = 1;
        }

        $data['secret'] = $secret;

        $user_email = $this->db->select('email')->from('user')->where('user_id', $this->session->userdata('user_id'))->get()->row();
        //render the Auth as SydeWalKa (example@email.com) on the user's device
        $qrCodeUrl = $ga->getQRCodeGoogleUrl($appSetting->title . " (" . $user_email->email . ")", $secret);
        //echo "Google Charts URL for the QR-Code: ".$qrCodeUrl."\n\n";
        $data['qrCodeUrl'] = $qrCodeUrl;


        //Set Rules From validation
        $this->form_validation->set_rules('token', "token", 'required|max_length[6]|trim');
        $this->form_validation->set_rules('secret', "secret", 'required|max_length[16]|trim');

        //From Validation Check
        if ($this->form_validation->run()) {

            if (isset($_POST['disable'])) {
                $oneCode = $this->input->post('token');
                $secret = $query->googleauth;
                $checkResult = $ga->verifyCode($secret, $oneCode, 2);    // 2 = 2*30sec clock tolerance

                if ($checkResult) {
                    $secret = NULL;
                    $this->db->set('googleauth', $secret)->where('user_id', $this->session->userdata('user_id'))->update("user");

                    //using password change log for Google Auth disable also
                    $log_data = $this->db->select('*')->from('password_log')
                        ->where('user_id', $this->session->userdata('user_id'))
                        ->get()
                        ->row();
                    if ($log_data) { //if already exist, update to keep track of last password change (G Auth change) action and time
                        $this->db->set('track', $this->randomID())
                            ->where('user_id', $this->session->userdata('user_id'))
                            ->update('password_log');
                    } else { //else create new log
                        $newlog = array(
                            "user_id"   =>  $this->session->userdata('user_id'),
                            "track"     =>  $this->randomID(),
                        );
                        $this->db->insert('password_log', $newlog);
                    }

                    // ////////////////////////////////////////////////////////////////////
                    // //mail user
                    // $date = new DateTime();
                    // $access_time = $date->format('Y-m-d H:i:s');
                    // $user_email = $this->db->select('email')->from('user')->where('user_id', $this->session->userdata('user_id'))->get()->row();
                    // $email_content = "Google Authenticator was disabled on your SydeWalKa account, 
                    // details below : 
                    // <br><br>
                    // Time : ".$access_time."
                    // <br>
                    // Agent : Platform: ".$this->agent->platform().' Browser: '.$this->agent->browser().' V-'.$this->agent->version()."
                    // <br>
                    // IP Address : ".$this->input->ip_address()."
                    // <br><br>
                    // Please contact an admin right away if this wasn't you.";

                    // $data['title']      = 'SydeWalKa';
                    // $data['to']         = $user_email->email;
                    // $data['subject']    = 'Authenticator Disabled';
                    // $data['heading']    = 'Google Auth Disabled';
                    // $data['message']    = $email_content;
                    // //dynamically passing in email and password to send from
                    // //all the site password has only one unique part, that's what's passed in here
                    // $data['from_email']    = 'no-reply@sydewalka.com';
                    // 
                    // $data['priority']    = 1;

                    // $this->common_model->send_email($data);
                    // /////////////////////////////////////////////////////////////////////

                    $alertData = array(
                        'user_id'       => $this->session->userdata('user_id'),
                        'trade_id'      => "",
                        'trade_type'    => "Google Auth",
                        'title'         => "Google Auth Disabled",
                        'message'       => "GoogleAuth was disabled on your account",
                        'link'          => base_url("account"),
                        'status'        => 1,
                    );

                    $this->web_model->createAlert($alertData);

                    $this->session->set_flashdata('message', "Google authenticator disabled");
                    redirect("account");
                } else {

                    $this->session->set_flashdata('exception', "Invalid authentication code");
                }
            }

            if (isset($_POST['enable'])) {
                $oneCode = $this->input->post('token');
                $secret = $this->input->post('secret');
                $checkResult = $ga->verifyCode($secret, $oneCode, 2);    // 2 = 2*30sec clock tolerance

                if ($checkResult) {
                    $this->db->set('googleauth', $secret)->where('user_id', $this->session->userdata('user_id'))->update("user");

                    // ////////////////////////////////////////////////////////////////////
                    // //mail user
                    // $date = new DateTime();
                    // $access_time = $date->format('Y-m-d H:i:s');
                    // $user_email = $this->db->select('email')->from('user')->where('user_id', $this->session->userdata('user_id'))->get()->row();
                    // $email_content = "Google Authenticator was enabled on your SydeWalKa account, 
                    // details below : 
                    // <br><br>
                    // Time : ".$access_time."
                    // <br>
                    // Agent : Platform: ".$this->agent->platform().' Browser: '.$this->agent->browser().' V-'.$this->agent->version()."
                    // <br>
                    // IP Address : ".$this->input->ip_address()."
                    // <br><br>
                    // Please contact an admin right away if this wasn't you.";

                    // $data['title']      = 'SydeWalKa';
                    // $data['to']         = $user_email->email;
                    // $data['subject']    = 'Authenticator Enabled';
                    // $data['heading']    = 'Google Auth Enabled';
                    // $data['message']    = $email_content;
                    // //dynamically passing in email and password to send from
                    // //all the site password has only one unique part, that's what's passed in here
                    // $data['from_email']    = 'no-reply@sydewalka.com';
                    // 
                    // $data['priority']    = 1;

                    // $this->common_model->send_email($data);
                    // /////////////////////////////////////////////////////////////////////

                    $alertData = array(
                        'user_id'       => $this->session->userdata('user_id'),
                        'trade_id'      => "",
                        'trade_type'    => "Google Auth",
                        'title'         => "Google Auth Enabled",
                        'message'       => "GoogleAuth was enabled on your account",
                        'link'          => base_url("account"),
                        'status'        => 1,
                    );

                    $this->web_model->createAlert($alertData);

                    $this->session->set_flashdata('message', "Google authenticator enabled");
                    redirect("account");
                } else {

                    $this->session->set_flashdata('exception', "Invalid authentication code");
                }
            }
        }

        $this->load->view('website/header', $data);
        $this->load->view('website/googleauthenticator', $data);
        $this->load->view('website/footer', $data);
    }

    public function activate_account()
    {

        $activation_code = $this->input->get('c');
        $email = $this->input->get('e');
        $user_id = $this->input->get('i');

        if ($activation_code && $email && $user_id) {

            $where = "password_reset_token = '" . $activation_code . "' and email = '" . $email . "' and user_id = '" . $user_id . "'";
            $user = $this->db->select('*')
                ->from('user')
                ->where($where)
                ->get()
                ->row();

            if ($user) {

                //check user status
                $user = $this->web_model->passwordtokenCheck($activation_code);

                if ($user->status == 1) {
                    $this->session->set_flashdata('message', 'Account already activated');
                    redirect("login");
                } elseif ($user->status == 2) {
                    $this->session->set_flashdata('exception',  'Account marked pending please contact support');
                    redirect("login");
                } elseif ($user->status == 3) {
                    $this->session->set_flashdata('exception',  'Account suspended please contact support');
                    redirect("login");
                } elseif ($user->status == 0) { //if nothing wrong
                    //activate account
                    $this->web_model->activeUserAccount($activation_code);

                    $alertData = array(
                        'user_id'       => $user_id,
                        'trade_id'      => "",
                        'trade_type'    => "Account Activation",
                        'title'         => "Account Activated",
                        'message'       => "Your account was activated successfully. Welcome to SydeWalKa.",
                        'link'          => base_url("account"),
                        'status'        => 1,
                    );

                    $this->web_model->createAlert($alertData);

                    //////////////////////////////////////////////////////////////////////////////
                    //mail user
                    $email_content = "Your SydeWalKa account was activated successfully and 
                    we are glad to have you here. Explore our trading system and feel free to 
                    contact support if you run into any problem, you can also join us on Telegram 
                    and chat with admins and other users and keep up to date by following us on Twitter 
                    and Facebook.
                    <br><br>
                    Thanks once again for choosing SydeWalKa.";

                    $data['title']      = 'SydeWalKa';
                    $data['to']         = $email;
                    $data['subject']    = 'Account Activated';
                    $data['heading']    = 'Welcome to SydeWalKa';
                    $data['message']    = $email_content;
                    //dynamically passing in email and password to send from
                    //all the site password has only one unique part, that's what's passed in here
                    $data['from_email']    = 'no-reply@sydewalka.com';
                    
                    $data['priority']    = 3;

                    $this->common_model->send_email($data);
                    ///////////////////////////////////////////////////////////////////////////////

                    //change password reset token
                    $newtoken = array(
                        'password_reset_token' => $this->randomID(1, 110),
                    );
                    $this->db->where('email', $email)->update('user', $newtoken);

                    $this->session->set_flashdata('message', 'Account activated successfully... Welcome to SydeWalKa');
                    redirect("login");
                } else {
                    $this->session->set_flashdata('exception', 'An error occured');
                    redirect(base_url('login'));
                }
            } else {
                $this->session->set_flashdata('exception', 'Incorrect activation parameters');
                redirect("login");
            }
        } else {
            $this->session->set_flashdata('exception', 'Incomplete Parameter');
            redirect("login");
        }
    }


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
}
