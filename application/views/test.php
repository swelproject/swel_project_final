<?php
$this->db->where('name', 'php');
$this->db->from('block');
$query = $this->db->get();
if ($query->num_rows() > 0) {
    $rows = $query->result();
    foreach ($rows as $row) {
        //$row->content;
        echo eval("?>".$row->content."<?");
    }
}
?>