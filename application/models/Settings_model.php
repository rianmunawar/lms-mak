<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\123\105\120\101\x54\x48") or exit("\116\157\40\x64\x69\x72\x65\x63\x74\40\x73\x63\x72\151\160\x74\40\x61\x63\x63\x65\163\x73\40\141\x6c\154\157\167\145\144"); class Settings_model extends CI_Model { public function not_admin() { goto PFlTz; S9wFK: $this->db->join("\165\x73\x65\x72\x73\137\147\x72\157\165\160\x73\x20\x62", "\x61\x2e\x69\144\x3d\x62\x2e\x75\163\145\x72\x5f\x69\x64"); goto aqIyB; T077u: return $this->db->get()->result(); goto UnDZP; PFlTz: $this->db->select("\x61\56\151\x64"); goto UwwF1; aqIyB: $this->db->where_not_in("\142\x2e\147\162\x6f\x75\x70\137\x69\x64", ["\61"]); goto T077u; UwwF1: $this->db->from("\165\163\145\x72\163\x20\141"); goto S9wFK; UnDZP: } public function truncate($table) { goto KUacQ; qtuTQ: return; goto HD_lB; zXwDG: $users = $this->not_admin(); goto N8XeY; KUacQ: $this->load->helper("\x66\x69\x6c\x65"); goto bUvS0; N8XeY: foreach ($users as $user) { $this->db->delete("\x75\163\145\162\x73", array("\151\x64" => $user->id)); zCb39: } goto tsRoH; bUvS0: $this->db->query("\123\105\x54\40\106\117\x52\x45\x49\x47\x4e\137\113\x45\x59\137\103\110\x45\103\113\x53\x20\x3d\x20\60"); goto vOAyL; Tp9GH: $this->db->query("\123\x45\124\40\106\x4f\x52\x45\111\107\116\x5f\x4b\x45\x59\x5f\x43\x48\105\103\113\123\x20\x3d\40\61"); goto Ba8N6; Ba8N6: delete_files("\x2e\x2f\x75\160\x6c\157\x61\x64\x73\x2f\142\x61\156\x6b\x5f\x73\157\141\154\57"); goto zXwDG; tsRoH: bpTWG: goto qtuTQ; vOAyL: foreach ($table as $tb) { $this->db->truncate($tb); ZeGCt: } goto IxM3u; IxM3u: T8Mlo: goto Tp9GH; HD_lB: } public function getSetting() { return $this->db->get("\x73\145\x74\x74\151\x6e\147")->row(); } function toJSON($table) { $query = $this->db->get($table); return json_encode($query->result(), JSON_PRETTY_PRINT); } function rowSize($table) { $query = $this->db->get($table); return $query->num_rows(); } }