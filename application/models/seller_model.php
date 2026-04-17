<?php

class Seller_Model extends MY_Model {

    function show_seller($id){
        $this->db->select('a.*,b.province_name,c.city_name');
        $this->db->from(kode_tbl() . 'members a');
        $this->db->join('m_ro_provinsi b', 'a.id_province_member=b.province_id', 'left');
        $this->db->join('m_ro_kota c', 'a.id_kabupaten_member=c.city_id', 'left');
        $this->db->where('a.id', $id);

        $query = $this->db->get()->row();
        return $query;
    }

    // function show_product_all($id){
    //     $this->db->select('a.*,c.member,c.inisial_member');
    //     $this->db->from(kode_tbl() . 'product a');
    //     // $this->db->join('t_repositori b', 'a.id=b.id_product', 'left');
    //     $this->db->join(kode_tbl() . 'members c', 'a.id_member=c.id');
    //     // $this->db->join(kode_tbl().'skema b', 'a.skema_sertifikasi = b.id', 'left');

    //     // $this->db->where('c.id_member !=', $id_member);
    //     // $this->db->where('b.nama_dokumen', 'produk_1');
    //     $this->db->where('a.id_member', $id);
    //     $this->db->limit('200');
    //     // $this->db->group_by('a.id');

    //     $query = $this->db->get()->result();

    //     // random query
    //     shuffle($query);

    //     return $query;
    //   }

      public function get_all_product($id,$perpage, $offset)
      {

        // var_dump($id); die();

        $this->db->select(
          '
            a.*,
            b.id AS id_repo,
            b.nama_file,
            c.member,
            c.inisial_member
          '
        );
        // $this->db->like('a.nama_product', $search);
        // $this->db->order_by('a.id', 'DESC');
        $this->db->where('a.id_member =',$id);
        $this->db->where('a.is_product !=','2');
        // $this->db->where('a.id_member','111');
        $this->db->limit($perpage);
        $this->db->offset($offset);
        $this->db->join('t_repositori b', 'a.id=b.id_product', 'left');
        $this->db->join(kode_tbl() . 'members c', 'a.id_member=c.id', 'left');
        $query = $this->db->get(kode_tbl() . 'product a');
        return $query->result();
      }

      function show_file_utama($id){

        // var_dump($id); die();

        // $this->db->select('a.*');
        $this->db->from('t_repositori a');
        // $this->db->join(kode_tbl() . 'product b', 'a.id_product=b.id');
        $this->db->where('a.id_product', $id);
        $this->db->where('a.nama_dokumen', 'produk_1');

        $query = $this->db->get()->row();

        return $query;
      }

      function show_file($id){

        // var_dump($id); die();

        // $this->db->select('a.*');
        $this->db->from('t_repositori a');
        // $this->db->join(kode_tbl() . 'product b', 'a.id_product=b.id');
        $this->db->where('a.id_product', $id);
        // $this->db->where('a.nama_dokumen', 'produk_1');



        $query = $this->db->get()->result();

        return $query;
      }

}
