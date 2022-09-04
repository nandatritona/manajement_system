<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_AllFunction extends CI_Model {

	function __construct(){
		parent::__construct();
	}

    public function Delete($table, $where)
    {
        $this->db->where($where);
        return $this->db->delete($table);
    }

    public function Get($table)
    {
        return $this->db->get($table)->result();
    }

    public function Insert($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function InsertBatch($table, $data)
    {
        return $this->db->insert_batch($table, $data);
    }

    public function Join($table1, $table2, $on)
    {
        $this->db->select("*");
        $this->db->from($table1);
        $this->db->join($table2, $table1 . "." . $on . "=" . $table2 . "." .  $on);
        return $this->db->get()->result();
    }

    public function JoinWhere($table1, $table2, $on, $where)
    {
        $this->db->select("*");
        $this->db->from($table1);
        $this->db->join($table2, $table1 . "." . $on . "=" . $table2 . "." .  $on);
        $this->db->where($where);
        return $this->db->get()->result();
    }

    public function Menu($table)
    {
        $where = $this->session->userdata('GroupID');
        $this->db->select('*');
        $this->db->from('Menu_Akses');
        $this->db->join($table, 'Menu_Akses.MenuID = '.$table.'.MenuID');
        $this->db->where('Menu_Akses.GroupID', $where);
        return $this->db->get()->result();
    }

    public function MenuAkses($GroupID, $Menu_Lv)
    {
        $query = "SELECT $Menu_Lv.*,
            CASE WHEN Menu_A.GroupID IS NOT NULL THEN True ELSE False END AS Active
            FROM $Menu_Lv
            LEFT JOIN
            (SELECT * FROM Menu_Akses WHERE GroupID = '$GroupID') AS Menu_A
            ON $Menu_Lv.MenuID = Menu_A.MenuID";
        return $this->db->query($query)->result();
    }

    public function Truncate($table)
    {
        return $this->db->truncate($table);
    }

    public function Update($table, $data, $where)
    {
        $this->db->where($where);
        return $this->db->update($table, $data);
    }

    public function Where($table, $where)
    {
        $this->db->where($where);
        return $this->db->get($table)->result();
    }
}