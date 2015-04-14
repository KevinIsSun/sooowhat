<?php 
/**
 * 主页面
 * @author kevin
 *
 */
class HomeModel extends CI_Model
{

	function __construct()
    {
        parent::__construct();
    }

    public function editIntroduce($content, $pos)
    {
        $this->db->where('position', $pos);
        $this->db->update('introduce', array('content' => $content));
    }

    public function editProject($content, $pos)
    {
        $this->db->where('position', $pos);
        $this->db->update('project', array('content' => $content));
    }

    public function editEvaluation($content, $pos)
    {
        $this->db->where('position', $pos);
        $this->db->update('evaluation', array('content' => $content));
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
}

?>