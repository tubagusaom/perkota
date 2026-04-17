<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends MY_Model {     

  public function get_konfigurasi($id = null) {

    // var_dump('ok'); die();

      if ($id == null) {
          // return $this->db->get('r_konfigurasi_aplikasi')->result_array();

          $this->db->select('*');
          $this->db->from('r_konfigurasi_aplikasi');

          $data_konfigurasi = $this->db->get();
      } else {
          // return $this->db->get_where('r_konfigurasi_aplikasi', ['id' => $id])->result_array();

          $this->db->select('*');
          $this->db->from('r_konfigurasi_aplikasi');
          $this->db->where("id",$id);

          $data_konfigurasi = $this->db->get();
      }

      return $data_konfigurasi->result_array();

  }

  public function insert_product($data){

    date_default_timezone_set("Asia/Bangkok");
   
    $this->id_member    = $data['kode_merchant'];
    $this->kode_product = $data['kode_sku'];
    $this->kondisi_product = $data['kondisi'];
    $this->min_pesan_product = $data['min_pembelian'];
    $this->jumlah_product = $data['stok'];
    $this->harga_product = $data['harga'];
    $this->disc_product = $data['promo'];
    $this->berat_product = $data['berat_produk'];
    $this->berat_paket = $data['berat_paket'];
    $this->is_product = '1';
    $this->created_by = $data['created_by'];
    $this->created_when = date("Y-m-d H:i:s");

    if($this->db->insert('api_product',$this))
    {
        $this->restapi->response_api('201');
    }
    else
    {
        $this->restapi->response_api('400');
    }

    // header('Content-Type: application/json');
    // echo json_encode($response);
}







    function get_api_key($key) {
        $this->db->where('key', $key);
        // $this->db->limit(1);
        // $this->db->select('
        //     key as APIKEY,
        //     sess_id as SESSION,
        //     level as APILEVEL,
        //     is_api as ISAPI
        // ');

        $this->db->select('key,sess_id,level,is_api');

        // return $this->db->get('api_keys')->row();

        $this->db->from('api_keys');
    
        // $this->db->where('key', $key);
        $query = $this->db->get()->row();
        
        // $query->row();

        if(count($query) > 0){
            return $query;
        }else{
            return false;
        }

    }


    public function get_product($task_id,$sub_task_id,$status,$page,$perpage,$sku,$data) {

        // var_dump($data->user_id); die();
        // var_dump($data); die();

        if ($data == TRUE) {

            $id = $data->user_id;

            // var_dump($page); die();

            if (empty($sku)) {

                if ($page == 1 ) {
                    $offset = 0;
                }else {
                    $offset = (($page-1) * $perpage);
                }

                // var_dump($offset); die();

                $this->db->select('
                    a.kode_product AS ItemNo,
                    a.is_product AS Status
                ');
                $this->db->from(kode_tbl().'product a');
                $this->db->where("a.id_member",$id);
                $this->db->order_by('a.kode_product', 'ASC');

                $this->db->limit($perpage);
                $this->db->offset($offset);

                $data_sql = $this->db->get();
                $data_product = $data_sql->result();
                
                // var_dump($xxx); die();

            } else {

                $this->db->select('
                    a.kode_product AS ItemNo,
                    a.is_product AS Status
                ');
                $this->db->from(kode_tbl().'product a');
                // $this->db->join(kode_tbl() . 'members b', 'a.id_member=b.id');
                $this->db->where("a.id_member",$id);
                $this->db->where("a.kode_product",$sku);
                
                $data_sql = $this->db->get();
                $data_product = $data_sql->row();
            }

            $get_result['TaskId'] = $task_id;
            $get_result['SubTaskId'] = $sub_task_id;
            $get_result['PageNo'] = $page;
            $get_result['TotalDataPerPage'] = $perpage;

            $get_result['ItemDetails'] = $data_product;
            
            $result = $get_result;
            // $result['Data'] = $get_product;
            $result['Status'] = $this->restapi->response_api('200');

        } else {
            $result['Status'] = $this->restapi->response_api('400');
        }

        $data_arr = $result;
        echo json_encode($data_arr);

    }



    function get_stok_arr($task_id,$sub_task_id,$status,$arr_sku,$data) {

        $id_user = $data->user_id;

        // var_dump($arr_sku); die();

        if ($data == TRUE) {

            $this->db->select('
                a.kode_product AS ItemNo,
                b.jumlah_product_api AS Qty
            ');
            $this->db->from(kode_tbl().'product a');
            $this->db->join('api_product b', 'a.kode_product=b.kode_sku_api');

            $this->db->where("a.id_member",$id_user);
            $this->db->where_in('kode_product', $arr_sku);
            $this->db->order_by('a.kode_product', 'ASC');

            $data_sql = $this->db->get();
            $data_product = $data_sql->result();

            $get_result['TaskId'] = $task_id;
            $get_result['SubTaskId'] = $sub_task_id;
            $get_result['PageNo'] = $page;
            $get_result['TotalDataPerPage'] = $perpage;

            $get_result['StockItemDetails'] = $data_product;
            
            $result = $get_result;
            // $result['Data'] = $get_product;
            $result['Status'] = $this->restapi->response_api('200');

        } else {
            $result['Response'] = $this->restapi->response_api('400');
        }
        
        $data_arr = $result;
        
        echo json_encode($data_arr);

    }



    function get_stok_active($task_id,$sub_task_id,$status,$page,$perpage,$sku,$data) {
        
        if ($data == TRUE) {

            $id = $data->user_id;

            if ($page == 1 ) {
                $offset = 0;
            }else {
                $offset = (($page-1) * $perpage);
            }
    
            // var_dump($offset); die();
    
            $this->db->select('
                a.kode_product AS ItemNo,
                b.jumlah_product_api AS Qty
            ');

            $this->db->from(kode_tbl().'product a');
            $this->db->join('api_product b', 'a.kode_product=b.kode_sku_api');

            $this->db->where("a.id_member",$id);
            $this->db->where("b.is_product_api",'1');

            $this->db->order_by('a.kode_product', 'ASC');
    
            $this->db->limit($perpage);
            $this->db->offset($offset);
    
            $data_sql = $this->db->get();
            $data_product = $data_sql->result();
    
            $get_result['TaskId'] = $task_id;
            $get_result['SubTaskId'] = $sub_task_id;
            $get_result['PageNo'] = $page;
            $get_result['TotalDataPerPage'] = $perpage;
    
            $get_result['StockItemDetails'] = $data_product;
                
            $result = $get_result;
            // $result['Data'] = $get_product;
            $result['Status'] = $this->restapi->response_api('200');

        }else {
            $result['Status'] = $this->restapi->response_api('400');
        }

        $data_arr = $result;
        echo json_encode($data_arr);

    }



    function get_toko($task_id,$sub_task_id,$status,$data) {

        // var_dump($data->user_id); die();
        $id_user = $data->user_id;

        if ($data == TRUE) {
            
            $this->db->select('
                a.member,
                c.province_name,
                a.kode_member,
                a.is_member,
                count(b.kode_product) AS Total
            ');
            $this->db->from(kode_tbl() . 'members a');
            $this->db->join(kode_tbl() . 'product b', 'a.id=b.id_member');
            $this->db->join('m_ro_provinsi c', 'a.id_province_member=c.province_id');
            $this->db->where("a.id",$id_user);
            $query = $this->db->get()->row();
            // $merchant = $query->result();

            $query_row['LocationCode'] = $query->kode_member;
            $query_row['LocationStatus'] = $query->is_member;
            $query_row['CountItems'] = $query->Total;

            $get_result['TaskId'] = $task_id;
            $get_result['SubTaskId'] = $sub_task_id;
            $get_result['Status'] = $status;
            $get_result['StoreList'] = $query_row;
            
            
            // $result['Merchant'] = json_encode([$query->member,$query->province_name]);
            // $result[$query->member] = $query->province_name;
            $result['Data'] = $get_result;
            $result['Status'] = $this->restapi->response_api('200');

        } else {
            $result['Response'] = $this->restapi->response_api('400');
        }
        
        $data_arr = $result;
        
        echo json_encode($data_arr);
    }

    function get_video($data) {

        // var_dump($data); die();
        
        if ($data == TRUE) {

            // $id = $data->APIKEY;
            // var_dump($id); die();
    
            // $this->db->select('
            //     a.code_video AS CodeVideo,
            //     a.nama_video AS NameVideo,
            //     a.link_video AS LinkVideo,
            //     a.logo_video AS LogoVideo
            // ');

            $this->db->select('
                a.nama_video AS title,
                b.description AS category,
                a.link_video AS link,
                a.poster_video AS thumbnail,
                a.desc_video AS description
            ');

            $this->db->from('tv_video a');
            $this->db->join('tv_categories b', 'a.id_categorie=b.id');

            // $this->db->where("a.id_member",$id);
            // $this->db->where("b.is_product_api",'1');

            $this->db->order_by('a.code_video', 'ASC');
    
            // $this->db->limit($perpage);
            // $this->db->offset($offset);
    
            $data_sql = $this->db->get();
            $data_video = $data_sql->result();

            // $get_result['xxx'] = '';

            // var_dump($data_video); die();
            $result['status'] = $this->restapi->response_api('200');
            $get_result['data'] = $data_video;
                
            $result = $get_result;
            // $result['Data'] = $get_product;

        }else {
            $result['status'] = $this->restapi->response_api('400');
        }

        $data_arr = $result;
        echo json_encode($data_arr);

    }


    function get_banner($data) {

        // var_dump($data); die();
        
        if ($data == TRUE) {

            $this->db->select('
                a.id,
                a.image_slide AS image_url,
                a.title AS alt_text,
                a.link
            ');

            $this->db->from('tv_banner a');

            $this->db->order_by('a.no_urut', 'ASC');
    
            $data_sql = $this->db->get();
            $data_video = $data_sql->result();

            // var_dump($data_video); die();
            $result['status'] = $this->restapi->response_api('200');
            $get_result['data'] = $data_video;
                
            $result = $get_result;
            // $result['Data'] = $get_product;

        }else {
            $result['status'] = $this->restapi->response_api('400');
        }

        $data_arr = $result;
        echo json_encode($data_arr);

    }

    function get_program($data) {

        // var_dump($data); die();
        
        if ($data == TRUE) {

            $this->db->select('
                a.description AS id,
                a.logo_img AS image_url,
                a.categories AS alt_text
            ');

            $this->db->from('tv_categories a');
            $this->db->where('a.id >', '1');
            $this->db->order_by('a.id', 'ASC');
    
            $data_sql = $this->db->get();
            $data_video = $data_sql->result();

            // var_dump($data_video); die();
            $result['status'] = $this->restapi->response_api('200');
            $get_result['data'] = $data_video;
                
            $result = $get_result;
            // $result['Data'] = $get_product;

        }else {
            $result['status'] = $this->restapi->response_api('400');
        }

        $data_arr = $result;
        echo json_encode($data_arr);

    }

    function get_highlight($data) {

        // var_dump($data); die();
        
        if ($data == TRUE) {

            $this->db->select('
                a.link_embed AS src,
                a.nama_video AS title,
                a.frame_border AS frameBorder,
                a.allow_arr AS allow,
                a.allow_full_screen AS allowFullScreen
            ');

            $this->db->from('tv_video a');
            $this->db->where("a.id",'1');

            $this->db->order_by('a.id', 'ASC');
    
            $data_sql = $this->db->get();
            $data_video = $data_sql->row();
            
            $result['status'] = $this->restapi->response_api('200');
            $get_result['data'] = $data_video;
                
            $result = $get_result;

        }else {
            $result['status'] = $this->restapi->response_api('400');
        }

        $data_arr = $result;
        echo json_encode($data_arr);

    }

    function get_latest($data) {

        // var_dump($data); die();
        
        if ($data == TRUE) {

            // $id = $data->APIKEY;
            // var_dump($id); die();

            $this->db->select("
                a.nama_video AS title,
                CASE
                    WHEN a.id_categorie = 1 THEN 'energy-corner'
                    WHEN a.id_categorie = 4 THEN 'mitra-corner'
                    WHEN a.id_categorie = 5 THEN 'umkm-corner'
                    ELSE  'null' END AS category,
                a.link_video AS link,
                a.poster_video AS thumbnail,
                a.desc_video AS description
            ", FALSE);

            $this->db->from('tv_video a');
            // $this->db->join('tv_categories b', 'a.id_categorie=b.id');

            // $this->db->where("a.id_member",$id);
            $this->db->where('a.id >', '3');

            $this->db->order_by('a.id', 'DESC');

            // $this->db->limit(8);
    
            // $this->db->limit($perpage);
            // $this->db->offset($offset);
    
            $data_sql = $this->db->get();
            $data_video = $data_sql->result();

            // $arr_video[] = $data_video;

            // var_dump($arr_video); die();
            $result['status'] = $this->restapi->response_api('200');
            $get_result['data'] = $data_video;
                
            $result = $get_result;
            // $result['Data'] = $get_product;

        }else {
            $result['status'] = $this->restapi->response_api('400');
        }

        $data_arr = $result;
        echo json_encode($data_arr);

    }

    function get_energy_corner($data) {

        // var_dump($data); die();
        
        if ($data == TRUE) {

            $this->db->select('
                a.nama_video AS title,
                b.description AS category,
                a.link_video AS link,
                a.poster_video AS thumbnail,
                a.desc_video AS description
            ');

            $this->db->from('tv_video a');
            $this->db->join('tv_categories b', 'a.id_categorie=b.id');
            $this->db->where("a.id_categorie",'2');

            $this->db->order_by('a.code_video', 'ASC');
    
            $data_sql = $this->db->get();
            $data_video = $data_sql->result();
            
            $result['status'] = $this->restapi->response_api('200');
            $get_result['data'] = $data_video;
                
            $result = $get_result;

        }else {
            $result['status'] = $this->restapi->response_api('400');
        }

        $data_arr = $result;
        echo json_encode($data_arr);

    }

    function get_mitra_corner($data) {

        // var_dump($data); die();
        
        if ($data == TRUE) {

            $this->db->select('
                a.nama_video AS title,
                b.description AS category,
                a.link_video AS link,
                a.poster_video AS thumbnail,
                a.desc_video AS description
            ');

            $this->db->from('tv_video a');
            $this->db->join('tv_categories b', 'a.id_categorie=b.id');
            $this->db->where("a.id_categorie",'4');

            $this->db->order_by('a.code_video', 'ASC');
    
            $data_sql = $this->db->get();
            $data_video = $data_sql->result();
            
            $result['status'] = $this->restapi->response_api('200');
            $get_result['data'] = $data_video;
                
            $result = $get_result;

        }else {
            $result['status'] = $this->restapi->response_api('400');
        }

        $data_arr = $result;
        echo json_encode($data_arr);

    }

    function get_umkm_corner($data) {

        // var_dump($data); die();
        
        if ($data == TRUE) {

            $this->db->select('
                a.nama_video AS title,
                b.description AS category,
                a.link_video AS link,
                a.poster_video AS thumbnail,
                a.desc_video AS description
            ');

            $this->db->from('tv_video a');
            $this->db->join('tv_categories b', 'a.id_categorie=b.id');
            $this->db->where("a.id_categorie",'5');

            $this->db->order_by('a.code_video', 'ASC');
    
            $data_sql = $this->db->get();
            $data_video = $data_sql->result();
            
            $result['status'] = $this->restapi->response_api('200');
            $get_result['data'] = $data_video;
                
            $result = $get_result;

        }else {
            $result['status'] = $this->restapi->response_api('400');
        }

        $data_arr = $result;
        echo json_encode($data_arr);

    }

    function get_random($data) {

        // var_dump($data); die();
        
        if ($data == TRUE) {

            $this->db->select("
                a.nama_video AS title,
                CASE
                    WHEN a.id_categorie = 1 THEN 'energy-corner'
                    WHEN a.id_categorie = 4 THEN 'mitra-corner'
                    WHEN a.id_categorie = 5 THEN 'umkm-corner'
                    ELSE  'null' END AS category,
                a.link_video AS link,
                a.poster_video AS thumbnail,
                a.desc_video AS description
            ", FALSE);

            $this->db->from('tv_video a');
            // $this->db->join('tv_categories b', 'a.id_categorie=b.id');

            // $this->db->where("a.id_member",$id);
            // $this->db->where('a.id >', '3');

            $this->db->order_by('a.id', 'DESC');

            // $this->db->limit(8);
    
            // $this->db->limit($perpage);
            // $this->db->offset($offset);
    
            $data_sql = $this->db->get();
            $data_video = $data_sql->result();
            shuffle ($data_video);

            // $arr_video[] = $data_video;

            // var_dump($arr_video); die();
            $result['status'] = $this->restapi->response_api('200');
            $get_result['data'] = $data_video;
                
            $result = $get_result;
            // $result['Data'] = $get_product;

        }else {
            $result['status'] = $this->restapi->response_api('400');
        }

        $data_arr = $result;
        echo json_encode($data_arr);

    }

    function get_search($data,$keyword) {

        // var_dump($keyword); die();
        
        if ($data == TRUE) {

            $this->db->select("
                a.nama_video AS title,
                CASE
                    WHEN a.id_categorie = 1 THEN 'energy-corner'
                    WHEN a.id_categorie = 4 THEN 'mitra-corner'
                    WHEN a.id_categorie = 5 THEN 'umkm-corner'
                    ELSE  'null' END AS category,
                a.link_video AS link,
                a.poster_video AS thumbnail,
                a.desc_video AS description
            ", FALSE);

            $this->db->from('tv_video a');
            // $this->db->join('tv_categories b', 'a.id_categorie=b.id');

            // $this->db->where("a.id_member",$id);
            $this->db->like('a.nama_video', $keyword);

            $this->db->order_by('a.id', 'DESC');

            // $this->db->limit(8);
    
            // $this->db->limit($perpage);
            // $this->db->offset($offset);
    
            $data_sql = $this->db->get();
            $data_video = $data_sql->result();

            // $arr_video[] = $data_video;

            // var_dump($arr_video); die();
            $result['status'] = $this->restapi->response_api('200');
            $get_result['data'] = $data_video;
                
            $result = $get_result;
            // $result['Data'] = $get_product;

        }else {
            $result['status'] = $this->restapi->response_api('400');
        }

        $data_arr = $result;
        echo json_encode($data_arr);

    }



}
