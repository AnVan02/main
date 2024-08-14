<?php

function construct()
{
    load_model('index');
    load_model('indexCategory');
}
//danh sách bài viết
function indexAction()
{

    load('lib', 'pagging');
    //TRẠNG THÁI CỦA BÀI VIẾT
    if (isset($_ai['btn_action'])) {
        if (isset($_ai['checkItem'])) {
            $list_ai_id = implode(",", $_ai['checkItem']);
        }
        // echo $ai_id;
        // die();
        $action = $_ai['action'];
        if ($action == 'public') {
            $ai_public = 'public';
            $data_status = array(
                'status' => $ai_public
            );
            update_status($data_status, $list_ai_id);
        }
        if ($action == 'pending') {
            $ai_pending = 'pending';
            $data_status = array(
                'status' => $ai_pending
            );
            update_status($data_status, $list_ai_id);
        }
    }
    //PHÂN TRANG
    $num_per_page = 10;
    $total_row = get_number_ai();
    $num_page = ceil($total_row / $num_per_page);
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $start = ($page - 1) * $num_per_page;
    $list_ai = get_list_ai($start, $num_per_page);
    $status_public = get_status('tbl_ai', 'public');
    $status_pending = get_status('tbl_ai', 'pending');
    
    $data = array(
        'list_ai' => $list_ai,
        'start' => $start,
        'num_page' => $num_page,
        'page' => $page,
        'total_row' => $total_row,
        'status_public' => $status_public,
        'status_pending' => $status_pending,
    );
    load_view('index', $data);
}
function addAction()
{
    global $error, $ai_title, $success, $parent_id, $friendly_url;
    // Kiểm tra submit
    if (isset($_ai['btn_add'])) {
        $error = array();
        if (empty($_ai['ai_title'])) {
            $error['ai_title'] = "Không được để trống trường tiêu đề";
        } else {
            if (check_name_ai_exists($_ai['ai_title'])) {
                $error['ai_title'] = "Tiêu đề đã được tồn tại trước đó";
            } else {
                $ai_title = $_ai['ai_title'];
            }
        }
        if (empty($_ai['friendly_url'])) {
            $error['friendly_url'] = "Bạn chưa nhập link thân thiện";
        } else {
            if (slug_url_exists(create_slug($_ai['friendly_url']))) {
                $error['friendly_url'] = "Đường dẫn này đã tồn tại trước đó";
            } else {
                $friendly_url = create_slug($_ai['friendly_url']);
            }
        }
        if (empty($_ai['ai_content'])) {
            $error['ai_content'] = "Không được để trống trường nội dung bài viết";
        } else {
            $ai_content = $_ai['ai_content'];
        }
        if (isset($_FILES['file']) && !empty($_FILES['file']['name'])) {
            $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            $size = $_FILES['file']['size'];
            if (!is_image($type, $size)) {
                $error['upload_image'] = "kích thước hoặc kiểu ảnh không đúng";
            }
        } else {
            $error['upload_image'] = "Bạn chưa upload tệp";
        }
        if (empty($_ai['parent_cat'])) {
            $error['parent_cat'] = "Vui lòng chọn danh mục của bài viết";
        } else {
            $parent_id = $_ai['parent_cat'];
        }
        if (empty($_ai['status'])) {
            $status = "pending";
        } else {
            $status = $_ai['status'];
        }
        if (empty($error)) {
            $fullname = get_fullname_by_username(user_login());
            $ai_thumb = upload_image("public/uploads/post/", $type);
            $data = array(
                'ai_title' => $ai_title,
                'ai_url'     => $friendly_url,
                'ai_content' => $ai_content,
                'created_at' => time(),
                'creator' => $fullname,
                'status' => $status,
                'ai_thumb' => $ai_thumb,
                'cat_id' => $parent_id
            );
            add_ai($data);
            $success['ai'] = "Thêm bài viết mới thành công";
        }
    }
    // Lấy danh sách category
    $list_category = get_list_category();

    $data = array(
        'list_category' => $list_category
    );
    load_view('add', $data);
}

// Cập nhật bài viết
function updateAction()
{
    $ai_id = (int)$_GET['ai_id'];
    $info_ai = get_info_ai_by_id($ai_id);
    $list_category = get_list_category();
    global $error, $ai_title, $success, $parent_id, $friendly_url, $ai_thumb, $type, $size;

    if (isset($_ai['btn_update'])) {
        $error = array();
        if (empty($_ai['ai_title'])) {
            $error['ai_title'] = "Không được để trống trường tiêu đề";
        } else {
            $ai_title = $_ai['ai_title'];
        }
        if (empty($_ai['friendly_url'])) {
            $error['friendly_url'] = "Bạn chưa nhập link thân thiện";
        } else {
            $friendly_url = create_slug($_ai['friendly_url']);
        }
        if (empty($_ai['ai_content'])) {
            $error['ai_content'] = "Không được để trống trường nội dung bài viết";
        } else {
            $ai_content = $_ai['ai_content'];
        }
        // check upload file
        if (isset($_FILES['file']) && !empty($_FILES['file']['name'])) {
            $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
            $size = $_FILES['file']['size'];
            if (!is_image($type, $size)) {
                $error['upload_image'] = "kích thước hoặc kiểu ảnh không đúng";
            } else {
                $old_thumb = $info_ai['ai_thumb'];
                if (!empty($old_thumb)) {
                    delete_image($old_thumb);
                    $ai_thumb = upload_image('public/uploads/post/', $type);
                } else {
                    $ai_thumb = upload_image('public/uploads/post/', $type);
                }
            }
        } else {
            $ai_thumb = $info_ai['ai_thumb'];
        }
        if (empty($_ai['parent_cat'])) {
            $error['parent_cat'] = "Vui lòng chọn danh mục của bài viết";
        } else {
            $parent_id = $_ai['parent_cat'];
        }
        if (empty($_ai['status'])) {
            $status = "pending";
        } else {
            $status = $_ai['status'];
        }
        if (empty($error)) {
            $fullname = get_fullname_by_username(user_login());
            $data_update = array(
                'ai_title' => $ai_title,
                'ai_url' => $friendly_url,
                'updated_user' => $fullname,
                'update_at' => time(),
                'ai_content' => $ai_content,
                'status' => $status,
                'ai_thumb' => $ai_thumb,
                'cat_id' => $parent_id
            );
            update_ai($ai_id, $data_update);
            $info_ai = $data_update;
            $success['ai'] = "Cập nhật bài viết mới thành công";
        }
    }
    $data = array(
        'list_category' => $list_category,
        'info_post' => $info_post
    );
    load_view('update', $data);
}


function searchAction()
{
    load('lib', 'pagging');
    global $key;
    if (isset($_ai['btn_search'])) {
        if (empty($_ai['search'])) {
            redirect("?mod=ai&action=search");
        } else {
            $key = $_ai['search'];
            $list_ai = searchai($key);
            $total_row = get_number_ai_search($key);
        }
    }
    $total_row_search =  $total_row;
    $num_per_page = 2;
    $num_page = ceil($total_row_search  / $num_per_page);
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $start = ($page - 1) * $num_per_page;
    $list_ai = get_list_ai_search($key, $start, $num_per_page);
    $data = array(
        'list_ai' => $list_ai,
        'start' => $start,
        'num_page' => $num_page,
        'page' => $page,
        'total_row_search' =>  $total_row_search,
        'key' => $key
    );

    load_view('search', $data);
}
function deleteAction()
{
    $ai_id = (int)$_GET['ai_id'];
    delete_ai_by_id($ai_id);
    redirect("?mod=ai");
}
