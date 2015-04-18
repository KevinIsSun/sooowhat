<?php 
/**
 * 主页面
 * @author kevin
 *
 */
class IndexModel extends CI_Model
{

	function __construct()
    {
        parent::__construct();
    }

    public function getIntroduceData()
    {
        $this->db->select('content, position');
        $query = $this->db->get('introduce');
        return $query->result_array();
    }

    public function getProjectData()
    {
        $this->db->select('content, position');
        $query = $this->db->get('project');
        return $query->result_array();
    }

    public function getEvaluationData()
    {
        $this->db->select('content, position');
        $query = $this->db->get('evaluation');
        return $query->result_array();
    }

    public function getTeamData()
    {
        $this->db->select('content, position');
        $query = $this->db->get('team');
        return $query->result_array();
    }
    
}

?>