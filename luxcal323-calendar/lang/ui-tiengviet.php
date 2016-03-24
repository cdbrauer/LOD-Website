<?php
/*
= LuxCal event calendar user interface language file =

This file has been translated by Chayote. Please send commentsto rb@luxsoft.eu.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LUI","3.2.3");
define("ISOCODE","vi");

/* -- Titles on the Header of the Calendar and Date Picker -- */

$months = array("Tháng 1","Tháng 2","Tháng 3","Tháng 4","Tháng 5","Tháng 6","Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12");
$months_m = array("Thg1","Thg2","Thg3","Thg4","Thg5","Thg6","Thg7","Thg8","Thg9","Thg10","Thg11","Thg12");
$wkDays = array("Chủ nhật","Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7","Chủ nhật");
$wkDays_l = array("CN","T2","T3","T4","T5","T6","T7","CN");
$wkDays_m = array("CN","T2","T3","T4","T5","T6","T7","CN");
$wkDays_s = array("CN","2","3","4","5","6","7","CN");


/* -- User Interface texts -- */

$xx = array(

//general
"submit" => "Submit",
"none" => "None.",
"back" => "Trở lại",
"by" => "bởi",
"of" => "của",
"done" => "Ok",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"no_way" => "You are not authorized to perform this action",

//index.php
"title_log_in" => "Log In",
"title_upcoming" => "Sự kiện sắp tới",
"title_event" => "Lịch hẹn",
"title_add_event" => "Đặt lịch",
"title_check_event" => "Kiểm tra lịch hẹn",
"title_search" => "Tìm kiếm",
"title_user_guide" => "Hướng dẫn",
"title_settings" => "Quản lý cài đặt",
"title_edit_cats" => "Sửa menu",
"title_edit_users" => "Sửa users",
"title_manage_db" => "Quản lý dữ liệu",
"title_changes" => "Added / Edited / Deleted Events",
"title_csv_import" => "CSV File Import",
"title_ics_import" => "iCal File Import",
"title_ics_export" => "iCal File Export",
"idx_public_name" => "TƯ VẤN QUẢN TRỊ RỦI RO VÀ XÂY DỰNG HỆ THỐNG KIỂM SOÁT",

//header.php
"hdr_button_back" => "Back to parent page",
"hdr_button_options" => "Lựa chọn",
"hdr_options_submit" => "Bạn hãy lựa chọn và bấm vào 'Ok'",
"hdr_options_panel" => "Bảng lựa chọn",
"hdr_select_date" => "Chọn ngày",
"hdr_view" => "Xem",
"hdr_select_view" => "Chọn xem",
"hdr_filter" => "Lọc",
"hdr_select_filter" => "Chọn lọc",
"hdr_lang" => "Ngôn ngữ",
"hdr_select_lang" => "Chọn ngôn ngữ",
"hdr_all_cats" => "Tất cả danh sách",
"hdr_all_users" => "Tất cả user",
"hdr_year" => "Năm",
"hdr_month_full" => "Đủ tháng",
"hdr_month_work" => "Tháng làm việc",
"hdr_week_full" => "Đủ tuần",
"hdr_week_work" => "Tuần làm việc",
"hdr_day" => "Ngày",
"hdr_upcoming" => "Sắp diễn ra",
"hdr_changes" => "Thay đổi",
"hdr_select_admin_functions" => "Select Admin Function",
"hdr_admin" => "Administration",
"hdr_settings" => "Cài đặt",
"hdr_categories" => "Tất cả danh mục",
"hdr_users" => "Người dùng",
"hdr_database" => "Dữ liệu",
"hdr_import_csv" => "CSV Import",
"hdr_import_ics" => "iCal Import",
"hdr_export_ics" => "iCal Export",
"hdr_calendar" => "Calendar",
"hdr_back_to_cal" => "Back to calendar view",
"hdr_button_print" => "In",
"hdr_print_page" => "In trang",
"hdr_button_todo" => "Todo",
"hdr_todo_list" => "Công việc cần làm",
"hdr_button_upco" => "Upcoming",
"hdr_upco_list" => "Lịch hẹn sắp tới",
"hdr_button_search" => "Search",
"hdr_search" => "Tìm kiếm",
"hdr_button_add" => "Add",
"hdr_add_event" => "Thêm lịch hẹn",
"hdr_button_help" => "Giúp đỡ",
"hdr_help" => "User Guide",
"hdr_log_in" => "Đăng nhập/Đăng ký",
"hdr_button_log_in" => "Đăng nhập/Đăng ký",
"hdr_button_log_out" => "Thoát",
"hdr_today" => "Hôm nay", //dtpicker.js
"hdr_clear" => "clear", //dtpicker.js

//event.php
"evt_no_title" => "Không tiêu đề",
"evt_no_start_date" => "Không ngày bắt đầu",
"evt_bad_date" => "Ngày xấu",
"evt_bad_rdate" => "Lặp lại ngày xấu",
"evt_no_start_time" => "Không thời gian bắt đầu",
"evt_bad_time" => "Thời gian xấu",
"evt_end_before_start_time" => "Thời gian kết thúc trước thời gian bắt đầu",
"evt_end_before_start_date" => "Ngày kết thúc trước ngày bắt đầu",
"evt_until_before_start_date" => "Lặp lại ngày cuối trước ngày bắt đầu",
"evt_approved" => "Event approved",
"evt_apd_locked" => "Event approved and locked",
"evt_title" => "Tiêu đề",
"evt_venue" => "Nơi hẹn",
"evt_category" => "Danh mục",
"evt_description" => "Mô tả",
"evt_date_time" => "Ngày / Thời gian",
"evt_mailer" => "mailer",
"evt_private" => "Lịch hẹn cá nhân",
"evt_start_date" => "Bắt đầu",
"evt_end_date" => "Kết thúc",
"evt_select_date" => "Chọn ngày",
"evt_select_time" => "Chọn thời gian",
"evt_all_day" => "Cả ngày",
"evt_change" => "Thay đổi",
"evt_set_repeat" => "Lặp lại",
"evt_set" => "OK",
"evt_help" => "help",
"evt_repeat_not_supported" => "Không hỗ trợ lặp lại",
"evt_no_repeat" => "Không lặp lại",
"evt_repeat" => "Lặp lại",
"evt_repeat_on" => "Lặp lại mỗi ngày",
"evt_until" => "Đến khi",
"evt_blank_no_end" => "Trống: không kết thúc",
"evt_each_month" => "Mỗi tháng",
"evt_interval1_1" => "Mỗi ngày",
"evt_interval1_2" => "Khác",
"evt_interval1_3" => "Mỗi ba lần",
"evt_interval1_4" => "Mỗi bốn lần",
"evt_interval1_5" => "Mỗi năm lần",
"evt_interval1_6" => "Mỗi sáu lần",
"evt_interval2_1" => "Đầu tiên",
"evt_interval2_2" => "Lần hai",
"evt_interval2_3" => "Lần ba",
"evt_interval2_4" => "Lần bốn",
"evt_interval2_5" => "Lần cuối",
"evt_period1_1" => "Ngày",
"evt_period1_2" => "Tuần",
"evt_period1_3" => "Tháng",
"evt_period1_4" => "Năm",
"evt_notify" => "Gửi mail",
"evt_now_and_or" => "ngay và/hoặc",
"evt_event_added" => "Lịch hẹn mới",
"evt_event_edited" => "Đổi lịch hẹn",
"evt_event_deleted" => "Xoá lịch hẹn",
"evt_days_before_event" => "Ngày(s) trước lịch hẹn:",
"evt_mail_help" => "Email reminders can be sent directly (now) or the specified number of days before the start of the event. In the field below, recipient mail addresses and/or names of files with recipient mail addresses can be specified. Each address/file name should be separated by a semicolon. The field can contain max. 255 characters. Files with email addresses with one email address per line should be located in the folder \'emlists\'.<br>When omitted, the default file name extension of a file with email addresses is .txt.",
"evt_eml_list_too_long" => "Địa chỉ email quá nhiều ký tự.",
"evt_eml_list_missing" => "Email nhắc lịch(es) lỗi",
"evt_not_in_past" => "Ngày nhắc lịch trong quá khứ",
"evt_not_days_invalid" => "Ngày nhắc lịch không đúng",
"evt_status" => "Tình trạng",
"evt_descr_help" => "The following items can be used in the description field ...<br>- HTML tags &lt;b&gt;, &lt;i&gt;, &lt;u&gt; and &lt;s&gt; for bold, italic, underlined and striked-through text.<br>- small images (thumbnails) in the following format: folder/image_name.ext or image_name.ext. When omitted, the default folder is \'thumbnails\'. The folder must be a subfolder of the calendar and the extension must be .gif, .jpg or .png. The thumbnail (image) files should be uploaded via FTP.<br>- URL links in the following format: url or url [name], where \'name\' will be the title of the link. E.g. www.google.com [search].<br>URL links can also be used in the extra fields, if in use",
"evt_confirm_added" => "Liệc hẹn đã được đặt",
"evt_confirm_saved" => "Lịch hẹn đã được lưu",
"evt_confirm_deleted" => "Lịch hẹn đã được xoá",
"evt_add_close" => "Thêm và đóng",
"evt_add" => "Thêm",
"evt_edit" => "Sửa",
"evt_save_close" => "Lưu và đóng",
"evt_save" => "Lưu",
"evt_clone" => "Lưu lịch hẹn mới",
"evt_delete" => "Xoá",
"evt_close" => "Đóng",
"evt_open_calendar" => "Mở lịch",
"evt_added" => "Đã thêm",
"evt_edited" => "Đã sửa",
"evt_is_repeating" => "Đang lặp lại lịch hẹn.",
"evt_is_multiday" => "Lịch hẹn nhiều ngày.",
"evt_edit_series_or_occurrence" => "Bạn có muốn sửa hàng loạt hoặc chỉ sự kiện ngày không",
"evt_edit_series" => "Sửa hàng loạt",
"evt_edit_occurrence" => "Sửa sự kiện ngày",

//views
"vws_add_event" => "Thêm lịch hẹn",
"vws_view_month" => "Xem tháng",
"vws_view_week" => "Xem tuần",
"vws_view_day" => "Xem ngày",
"vws_click_for_full" => "for full calendar click month",
"vws_view_full" => "View full calendar",
"vws_prev_month" => "Tháng trước",
"vws_next_month" => "Tháng tiếp",
"vws_today" => "Hôm nay",
"vws_back_to_today" => "Trở lại tháng ngày hôm nay",
"vws_week" => "Tuần",
"vws_wk" => "wk",
"vws_time" => "Thời gian",
"vws_events" => "Các lịch hẹn",
"vws_all_day" => "Cả ngày",
"vws_earlier" => "Sớm hơn",
"vws_later" => "Muộn hơn",
"vws_venue" => "Nơi hẹn",
"vws_events_for_next" => "Upcoming events for the next",
"vws_days" => "Ngày(s)",
"vws_added" => "Đã thêm",
"vws_edited" => "Đã sửa",
"vws_notify" => "Thông báo",
"vws_check_mark" => "Check mark",
"vws_none_due_in" => "No events due in the next",
"vws_download" => "Download",
"vws_download_title" => "Download a text file with these events",

//changes.php
"chg_from_date" => "Từ ngày",
"chg_select_date" => "Chọn ngày bắt đầu",
"chg_notify" => "Thông báo",
"chg_days" => "Ngày(s)",
"chg_added" => "Đã thêm",
"chg_edited" => "Đã sửa",
"chg_deleted" => "Đã xoá",
"chg_changed_on" => "Thay đổi",
"chg_changes" => "Thay đổi",
"chg_no_changes" => "Không thay đổi.",

//search.php
"sch_define_search" => "Define search",
"sch_search_text" => "Tìm kiếm",
"sch_event_fields" => "Trường lịch hẹn",
"sch_all_fields" => "Các trường",
"sch_title" => "Tiêu đề",
"sch_description" => "Mô tả",
"sch_venue" => "Nơi hẹn",
"sch_event_cat" => "Danh mục lịch hẹn",
"sch_all_cats" => "Tất cả danh mục",
"sch_occurring_between" => "Đang diễn ra giữa",
"sch_select_start_date" => "Chọn ngày bắt đầu",
"sch_select_end_date" => "Chọn ngày kết thúc",
"sch_search" => "Tìm kiếm",
"sch_invalid_search_text" => "Search text missing or too short",
"sch_bad_start_date" => "Bad start date",
"sch_bad_end_date" => "Bad end date",
"sch_no_results" => "Không có kết quả",
"sch_new_search" => "Tìm kiếm mới",
"sch_calendar" => "Đi tới lịch hẹn",
"sch_extra_field1" => "Extra field 1",
"sch_extra_field2" => "Extra field 2",
"sch_instructions" =>
"<h4>Text Search Instructions</h4>
<p>The calendar database can be searched for events matching specific text.</p>
<br><p><b>Search text</b>: The selected fields (see below) of each event will 
be searched. The search is not case sensitive.</p>
<p>Two wildcard characters can be used:</p>
<ul>
<li>Underscore characters (_) in the search text will match any single 
character.<br>E.g.: '_e_r' matches 'beer', 'dear', 'heir'.</li>
<li>Ampersand characters (&amp;) in the search text will match any number of 
characters.<br>E.g.: 'de&amp;r' matches 'December', 'dear', 'developer'.</li>
</ul>
<p>However, the search text must contain at least two other characters.</p>
<br><p><b>Event fields</b>: The selected fields will be searched only.</p>
<br><p><b>Event category</b>: Events in the selected category will be searched 
only.</p>
<br><p><b>Occurring between</b>: The start and end date are both optional. A 
blank start date means: one year from now in the past and a blank end date 
means: one year from now in the future.</p>
<br><p>The search results will be displayed in chronological order.</p>",

//stand-alone sidebar (lcsbar.php)
"ssb_upco_events" => "Upcoming Events",
"ssb_all_day" => "All day",
"ssb_none" => "No events."
);
?>
