<?php

// Thêm bài viết vào database
function add_ai($data)
{
    db_insert("tbl_ai", $data);
}
// Lấy số lượng user trong hệ thống
function get_number_ai()
{
    $number = db_num_rows("select * from `tbl_ai`");
    if ($number > 0) {
        return $number;
    }
    return 0;
}
// Lấy danh sách bài viết
function get_list_ai($start = 1, $num_per_page = 5)
{
    return db_fetch_array("select `tbl_ai`.*,`tbl_category`.`cat_title` from `tbl_ai` inner join `tbl_category` on `tbl_ai`.`cat_id` =  `tbl_category`.`cat_id` LIMIT {$start},{$num_per_page}");
}
//Lấy thông tin bài biết by id
function get_info_ai_by_id($ai_id)
{
    return db_fetch_row("select * from `tbl_ai` where `ai_id` = {$ai_id}");
}

//Lấy thông tin bài biết by id
function get_info_ai($field, $ai_id)
{
    $info_ai_id = db_fetch_row("select `$field` from `tbl_ai` where `ai_id` = '{$ai_id}'");
    return  $info_ai_id[$field];
}
// Cập nhật bài viết theo id
function update_ai($post_id, $data)
{
    db_update('tbl_ai', $data, "`ai_id`= {$ai_id}");
}

// Xóa bài viết theo id
function delete_ai_by_id($ai_id)
{
    db_delete("tbl_ai", "`ai_id` = {$ai_id}");
}
//kiểm tra xem slug có tồn tại trước đó kh
function slug_url_exists($slug_url)
{
    $check = db_num_rows("select * from `tbl_ai` where `ai_url` = '{$slug_url}'");
    if ($check > 0) return true;
    return false;
}
//kiểm tra xem title có tồn tại trước đó kh
function check_name_ai_exists($ai_title)
{
    $check = db_num_rows("select * from `tbl_ai` where `ai_title` = '{$ai_title}'");
    if ($check > 0) return true;
    return false;
}
function get_status($table, $field)
{

    $item = db_num_rows("select * from `{$table}` where `status` = '{$field}'");
    return $item;
}
///tìm kiếm bài viết
function searchai($key)
{
    return db_fetch_array("select `tbl_ai`.*,`tbl_category`.`cat_title` from `tbl_ai` inner join `tbl_category` on `tbl_ai`.`cat_id` =  `tbl_category`.`cat_id` WHERE `ai_title` LIKE '%$key%'");
}

//số lượng bài viết khi tìm được
function get_number_ai_search($key)
{
    $number = db_num_rows("SELECT `tbl_ai`.*,`tbl_category`.`cat_title` FROM `tbl_ai` inner join `tbl_category` on `tbl_ai`.`cat_id` =  `tbl_category`.`cat_id` WHERE `ai_title` LIKE '%$key%'");
    if ($number > 0) {
        return $number;
    }
    return 0;
}
// Lấy danh sách bài viết tìm kiếm cộng với phân trang
function get_list_ai_search($key, $start = 1, $num_per_page = 2)
{
    return db_fetch_array("select `tbl_ai`.*,`tbl_category`.`cat_title` from `tbl_ai` inner join `tbl_category` on `tbl_ai`.`cat_id` =  `tbl_category`.`cat_id` WHERE `ai_title` LIKE '%$key%' LIMIT {$start},{$num_per_page}");
}
//cập nhật status cho trang bài viết
function update_status($data_status, $list_ai_id)
{

    return db_update("tbl_ai", $data_status, "`ai_id` IN ({$list_ai_id})");
}
