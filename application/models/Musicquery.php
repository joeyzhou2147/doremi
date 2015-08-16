<?php
/**
 * Created by PhpStorm.
 * User: yuzhou
 * Date: 2015/8/16
 * Time: 9:39
 */
class News_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    public function getIdByTitle($news_id){
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

}
