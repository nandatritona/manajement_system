<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Administrator extends CI_Model {

	function __construct(){
		parent::__construct();
	}

    public function Create()
    {
        $admin = array(
            "UserName"			=> "Administrator",
            "Email"				=> "Administrator@administrator.com",
            "Gender"            => 1,
            "Password"			=> md5("admin"),
            "Active"			=> True,
            "GroupID"			=> 1,
            "CreatedBy"			=> "System"
		);
        $this->db->insert('User', $admin);
        $admin = array(
            "GroupID"			=> 1,
            "GroupName"			=> "Administrator",
            "Active"			=> 1,
            "CreatedBy"			=> "System"
		);
        $this->db->insert('UserGroup', $admin);
        $menu_akses = array(
            array(
                "GroupID"   =>  1,
                "MenuID"    =>  7000
            ),
            array(
                "GroupID"   =>  1,
                "MenuID"    =>  7001
            ),
            array(
                "GroupID"   =>  1,
                "MenuID"    =>  7002
            ),
            array(
                "GroupID"   =>  1,
                "MenuID"    =>  7003
            ),
            array(
                "GroupID"   =>  1,
                "MenuID"    =>  7004
            ),
            array(
                "GroupID"   =>  1,
                "MenuID"    =>  8000
            ),
            array(
                "GroupID"   =>  1,
                "MenuID"    =>  9000
            ),
            array(
                "GroupID"   =>  1,
                "MenuID"    =>  9001
            ),
            array(
                "GroupID"   =>  1,
                "MenuID"    =>  9002
            )
        );
        $this->db->insert_batch('Menu_Akses', $menu_akses);
        $menu_lv1 = array(
            array(
                "MenuID"    =>  7000,
                "MenuName"  =>  "Example",
                "MenuLabel" =>  "Example",
                "MenuIcon"  =>  "<i class='icon-grid'></i>"
            ),
            array(
                "MenuID"    =>  8000,
                "MenuName"  =>  "Master",
                "MenuLabel" =>  "Master",
                "MenuIcon"  =>  "<i class='icon-gear'></i>"
            ),
            array(
                "MenuID"    =>  9000,
                "MenuName"  =>  "Utility",
                "MenuLabel" =>  "Utility",
                "MenuIcon"  =>  "<i class='icon-wrench2'></i>"
            )
        );
        $this->db->insert_batch('Menu_Lv1', $menu_lv1);
        $menu_lv2 = array(
            array(
                "MenuID"        =>  7001,
                "MenuName"      =>  "Form",
                "MenuLabel"     =>  "Form",
                "MenuIcon"      =>  "",
                "MenuLink"      =>  "Example/Form",
                "MenuHeader"    =>  7000
            ),
            array(
                "MenuID"        =>  7002,
                "MenuName"      =>  "Table",
                "MenuLabel"     =>  "Table",
                "MenuIcon"      =>  "",
                "MenuLink"      =>  "Example/Table",
                "MenuHeader"    =>  7000
            ),
            array(
                "MenuID"        =>  7003,
                "MenuName"      =>  "Chart",
                "MenuLabel"     =>  "Chart",
                "MenuIcon"      =>  "",
                "MenuLink"      =>  "Example/Chart",
                "MenuHeader"    =>  7000
            ),
            array(
                "MenuID"        =>  7004,
                "MenuName"      =>  "Map",
                "MenuLabel"     =>  "Map",
                "MenuIcon"      =>  "",
                "MenuLink"      =>  "Example/Map",
                "MenuHeader"    =>  7000
            ),
            array(
                "MenuID"        =>  9001,
                "MenuName"      =>  "User",
                "MenuLabel"     =>  "User",
                "MenuIcon"      =>  "",
                "MenuLink"      =>  "Utility/User",
                "MenuHeader"    =>  9000
            ),
            array(
                "MenuID"        =>  9002,
                "MenuName"      =>  "UserGroup",
                "MenuLabel"     =>  "User Group",
                "MenuIcon"      =>  "",
                "MenuLink"      =>  "Utility/UserGroup",
                "MenuHeader"    =>  9000
            ),
        );
        $this->db->insert_batch('Menu_Lv2', $menu_lv2);
        return true;
    }
}