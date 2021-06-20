<?php
class Madmin extends CI_Model{

    public function get_perwakilan()
    {
        $query=$this->db->get('perwakilan'); 
        return $query;
    }
    
	public function get_cabang()
    {
        $query=$this->db->get('cabang'); 
        return $query;
    }
	
	public function get_kelompok()
    {
        $query=$this->db->get('kelompok'); 
        return $query;
    
	}

	public function get_gelombang()
    {
        $query=$this->db->get('gelombang'); 
        return $query;
    }


    public function insert_entry($data)
    {
        $this->db->insert('pengurus', $data);
        
    }
    
    public function edit_entry($data)
    {
        $up=array(
            'b_id'=>$data['b_id'],
            'booksname'=>$data['booksname'],
            'authorname'=>$data['authorname'],
            'copies'=>$data['copies'],
            'avl_cpy'=>$data['avl_cpy'],
            'dept'=>$data['dept']
        );
        $this->db->where('b_id',$data['b_id']);
        $this->db->update('book', $up);
    }

    public function delete_entry($key)
    {
        $this->db->delete('book',array('b_id'=>$key));
    }

}

?>
