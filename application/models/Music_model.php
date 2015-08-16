<?php
/**
 * Created by PhpStorm.
 * User: yuzhou
 * Date: 2015/8/16
 * Time: 9:39
 */
class Music_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function activeGetIdByTitle($musicTitle){
        $this->db->like('musicTitle', $musicTitle);
        $this->db->select('musicId, musicTitle, singer');
        $this->db->from('music');
        $query = $this->db->get();
        if ($query->num_rows()> 0) {
            $result = $query->row_array();
            return $result;
        } else {
            return false;
        }
    }

    public function activeGetIdByTitleSinger($musicTitle,$singer){
        $this->db->like('musicTitle', $musicTitle);
        $this->db->like('singer', $singer);
        $this->db->select('musicId, musicTitle, singer');
        $this->db->from('music');
        $query = $this->db->get();
        if ($query->num_rows()> 0) {
            $result = $query->row_array();
            return $result;
        } else {
            return false;
        }
    }

    public function queryGetIdByTitle($news_id){
        $this->db->where('news_id', $news_id);
        $query = $this->db->get('news');
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            if(isset($result['content'])){
                $result['content'] = stripcslashes($result['content']);}
            return $result;
        } else {
            return false;
        }
    }



    public function activeGetIdBySinger($singer){
        $this->db->like('singer', $singer);
        $this->db->select('musicId, musicTitle, singer');
        $this->db->from('music');
        $query = $this->db->get();
        if ($query->num_rows()> 0) {
            $result = $query->row_array();
            return $result;
        } else {
            return false;
        }
    }
}