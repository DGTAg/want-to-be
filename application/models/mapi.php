<?php

class Mapi extends CI_Model {

	function __construct() {

		parent::__construct();
		date_default_timezone_set('Asia/Kuala_Lumpur');
	}



	function logout($fbid="") {

		$data = array(
			'gcmid' => null
		);

		$this->db->where('fbid', $fbid);
		$this->db->update('client', $data);
	}

  public function getUnilist()
  {

    $params = json_decode(file_get_contents('php://input'));
		$search = $params->search;

    if($search != "0") {

      $sql = "SELECT KSS_ID,UNI_DESC,KSS_KOD_PROG,KSS_PROG_DESC,KSS_SEM,BID_DESC,FAK_DESC
              FROM kursus
              INNER JOIN lookup
              INNER JOIN fbpageinfo
              INNER JOIN bidang
              INNER JOIN core_universiti
              INNER JOIN fakulti
              ON lookup.LOK_BIDANG=kursus.kss_bid AND
              lookup.LOK_FBPAGE = fbpageinfo.FBPINFO_ID AND
              bidang.BID_ID = KSS_BID AND
              core_universiti.UNI_ID = KSS_UNI AND
              fakulti.FAK_ID = KSS_FAK
              where fbpageinfo.FBPINFO_DESC like '%$search%'
              GROUP BY KSS_KOD_PROG";

    } else {

      $sql = "SELECT KSS_ID,UNI_DESC,KSS_KOD_PROG,KSS_PROG_DESC,KSS_SEM,BID_DESC,FAK_DESC
              FROM kursus
              INNER JOIN lookup
              INNER JOIN fbpageinfo
              INNER JOIN bidang
              INNER JOIN core_universiti
              INNER JOIN fakulti
              ON lookup.LOK_BIDANG=kursus.kss_bid AND
              lookup.LOK_FBPAGE = fbpageinfo.FBPINFO_ID AND
              bidang.BID_ID = KSS_BID AND
              core_universiti.UNI_ID = KSS_UNI AND
              fakulti.FAK_ID = KSS_FAK
              GROUP BY KSS_KOD_PROG
              LIMIT 0, 20";

    }

    $rs = $this->db->query($sql);
    $data = array();
    if($rs->num_rows() > 0) {
      foreach ($rs->result() as $row) {
        $data[] = $row;
      }
    }

    echo json_encode($data);
  }

  function getOptList() {

		$params = json_decode(file_get_contents('php://input'));

		$fbid = $params->fbid;

		$sql = "SELECT
    				tendency
    				FROM core_profile
    				WHERE fbid = '$fbid'";

		$rs = $this->db->query($sql);

		$data = array();
		if($rs->num_rows() > 0) {
			foreach($rs->result() as $row) {
				$data[] = $row;
			}
		}

    $tendency = json_decode($data[0]->tendency); // json to array
    $json_data = '[';
    $limit = 0;
    while($limit < 4) {
      $json_data = $json_data . '{"like_category":"'.$tendency[$limit]->like_category.'",';
      $json_data = $json_data . '"weight":"'.$tendency[$limit]->weight.'"}';

      if($limit < 3) {
        $json_data = $json_data.',';

      }

      $limit++;
    }
    $json_data = $json_data.']';
    echo $json_data;

	}

  public function getUniDetail()
  {
    $params = json_decode(file_get_contents('php://input'));

		$uni = $params->uni;

    $this->db->where('UNI_DESC', $uni);
		$qry = $this->db->get('core_universiti');

		$data = null;
		if($qry->num_rows() > 0) {
			$data = $qry->row();
		}

		echo json_encode($data);

  }

  // for reference only. delete after use

	function getCatalogue($search="") {

		$sql = "SELECT
				product.id,
				product.code,
				product.name,
				product.description,
				product.price,
				product.grp,
				COALESCE(product_image.filename, '') AS img
				FROM product
				LEFT JOIN product_image
				ON product.grp = product_image.grp
				WHERE product.name LIKE '%$search%'
				GROUP BY product.code";

		$rs = $this->db->query($sql);

		$data = array();
		if($rs->num_rows() > 0) {
			foreach($rs->result() as $row) {
				$data[] = $row;
			}
		}

		echo json_encode($data);
	}

	function productDetail($pid="") {

		$this->db->where('id', $pid);
		$qry = $this->db->get('product');

		$data = null;
		if($qry->num_rows() > 0) {
			$data = $qry->row();
		}

		echo json_encode($data);

	}

	function productImages($pid="") {

		$this->db->where('id', $pid);
		$qry = $this->db->get('product');

		$data = array();
		if($qry->num_rows() > 0) {

			$this->db->where('grp', $qry->row()->grp);
			$rs = $this->db->get('product_image');

			if($rs->num_rows() > 0) {
				foreach($rs->result() as $row) {
					$data[] = $row;
				}
			}
		}

		echo json_encode($data);

	}

	function storePromotion($search="") {

		$this->db->like('message', $search);
		$this->db->order_by('timestamp', 'desc');
		$rs = $this->db->get('promotion');

		$data = array();
		if($rs->num_rows() > 0) {
			foreach($rs->result() as $row) {
				$data[] = $row;
			}
		}

		echo json_encode($data);
	}

	function getInbox($fbid="") {

		$this->db->where('sender', $fbid);
		$this->db->group_by('grp');
		$this->db->order_by('timestamp', 'desc');
		$rs = $this->db->get('inbox');

		$data = array();
		if($rs->num_rows() > 0) {
			foreach($rs->result() as $row) {
				$data[] = $row;
			}
		}

		echo json_encode($data);
	}

	function newMessage($subject="", $msg="", $fbid="") {

		$grp = uniqid();

		$data = array(
			'sender' => $fbid,
			'receiver' => 'phonecast',
			'subject' => $subject,
			'message' => $msg,
			'grp' => $grp
		);

		$this->db->insert('inbox', $data);

	}

	function getChat($grp="") {

		$this->db->where('grp', $grp);
		$this->db->order_by('timestamp', 'asc');
		$rs = $this->db->get('inbox');

		$data = array();
		if($rs->num_rows() > 0) {
			foreach($rs->result() as $row) {
				$data[] = $row;
			}
		}

		echo json_encode($data);
	}

	function replyChat($msg="", $sub="", $fbid="", $grp="") {

		$data = array(
			'sender' => $fbid,
			'receiver' => 'phonecast',
			'subject' => $sub,
			'message' => $msg,
			'grp' => $grp
		);

		$this->db->where('grp', $grp);
		$this->db->insert('inbox', $data);
	}

}
