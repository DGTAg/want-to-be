<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct() {

		parent::__construct();
	}

  function getUnilist()
  {
    header("Access-Control-Allow-Origin: *");
		$this->mapi->getUniList();
  }

  function optList()
  {
    header("Access-Control-Allow-Origin: *");
		$this->mapi->getOptList();
  }

  function uniDetail()
  {
    header("Access-Control-Allow-Origin: *");
		$this->mapi->getUniDetail();
  }

	function index() {

		header("Access-Control-Allow-Origin: *");

		if(isset($_GET["action"])) {

			$action = $_GET["action"];

			switch($action) {

				case "saveAuth":
					$username = $_GET["username"];
					$fullname = $_GET["fullname"];
					$gender = $_GET["gender"];
					$fbid = $_GET["fbid"];
					$email = $_GET["email"];
					$gcmid = $_GET["gcmid"];
					$model = $_GET["model"];
					$version = $_GET['version'];
					$this->mapi2->saveAuth($username, $fullname, $gender, $fbid,
											$email, $gcmid, $model, $version);
					break;

				case "logout":
					$fbid = $_GET["fbid"];
					$this->mapi2->logout($fbid);
					break;

				case "productDetail":
					$id = $_GET["id"];
					$this->mapi2->productDetail($id);
					break;

				case "productImages":
					$id = $_GET["id"];
					$this->mapi2->productImages($id);
					break;

				case "storePromotion":
					$search = $_GET["search"];
					$this->mapi2->storePromotion($search);
					break;

				case "getInbox":
					$fbid = $_GET["fbid"];
					$this->mapi2->getInbox($fbid);
					break;

				case "newMessage":
					$subject = $_GET["subject"];
					$msg = $_GET["msg"];
					$fbid = $_GET["fbid"];
					$this->mapi2->newMessage($subject, $msg, $fbid);
					break;

				case "getChat":
					$grp = $_GET["grp"];
					$this->mapi2->getChat($grp);
					break;

				case "replyChat":
					$msg = $_GET["msg"];
					$sub = $_GET["sub"];
					$fbid = $_GET["fbid"];
					$grp = $_GET["grp"];
					$this->mapi2->replyChat($msg, $sub, $fbid, $grp);
					break;

				default:
					//$this->ng_model->findAll("");

			}

		}
	}

}
