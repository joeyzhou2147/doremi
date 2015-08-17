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
        $result = array();
        $musicTitle = str_replace(" ", "%", $musicTitle);
        //$this->db->select('musicId, musicTitle, singer');
        $this->db->select('musicId, musicTitle, singer')->from('music')->like('musicTitle', $musicTitle);
        $query = $this->db->get();
        $str = $this->db->last_query();
        echo $str;
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
        }
        return $result;
    }

    public function activeGetIdByTitleSinger($musicTitle,$singer){
        $result = array();
        $musicTitle = str_replace(" ", "%", $musicTitle);
        $singer = str_replace(" ", "%", $singer);
        $this->db->select('musicId, musicTitle, singer');
        $this->db->from('music');
        $this->db->like('musicTitle', $musicTitle);
        $this->db->like('singer', $singer);//not or like
        //$this->db->or_like('singer', $singer);
        $query = $this->db->get();
        $str = $this->db->last_query();
        echo $str;
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
        }
        return $result;
    }

    public function queryGetIdByTitle($news_id){
        $result = array();
        $this->db->where('news_id', $news_id);
        $query = $this->db->get('news');
        $str = $this->db->last_query();
        echo $str;
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
        }
            return $result;

    }



    public function activeGetIdBySinger($singer){
        $result = array();
        $this->db->select('musicId, musicTitle, singer');
        $this->db->from('music');
        $this->db->like('singer', $singer);
        $query = $this->db->get();
        $str = $this->db->last_query();
        echo $str;
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
        }
        return $result;
    }
}