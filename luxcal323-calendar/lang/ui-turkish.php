<?php
/*
= LuxCal event calendar user interface language file =

This file has been produced by LuxSoft. Please send comments / improvements to rb@luxsoft.eu.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LUI","3.2.3");
define("ISOCODE","tr");

/* -- Titles on the Header of the Calendar and Date Picker -- */

$months = array("Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
$months_m = array("Ock","Şeb","Mar","Nis","May","Haz","Tem","Agts","Eyl","Ekm","Ksm","Arlk");
$wkDays = array("Pazar","Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
$wkDays_l = array("Paz","Pzts","Sal","Çar","Per","Cum","Cmts","Paz");
$wkDays_m = array("Pz","Pa","SA","Ça","Pe","Cu","Cm","Pz");
$wkDays_s = array("P","S","Ç","P","C","C","P","P");


/* -- User Interface texts -- */

$xx = array(

//general
"submit" => "Submit",
"none" => "None.",
"back" => "Back",
"by" => "by",
"of" => "of",
"done" => "Done",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"no_way" => "You are not authorized to perform this action",

//index.php
"title_log_in" => "Log In",
"title_upcoming" => "Gelecek Randevular",
"title_event" => "Olay",
"title_add_event" => "Olay Ekle",
"title_check_event" => "Check Event",
"title_search" => "Text Search",
"title_user_guide" => "Ajanda Kullanıcı Rehberi",
"title_settings" => "Ajanda Ayarlarını Düzenle",
"title_edit_cats" => "Kategorileri Düzenle",
"title_edit_users" => "Edit Users",
"title_manage_db" => "Veritabanı Ayarları",
"title_changes" => "Olayları Ekle / Düzenle / SİL",
"title_csv_import" => "CSV File Import",
"title_ics_import" => "iCal File Import",
"title_ics_export" => "iCal File Export",
"idx_public_name" => "Genel Görünüm",

//header.php
"hdr_button_back" => "Back to parent page",
"hdr_button_options" => "Options",
"hdr_options_submit" => "Make your choice and press 'Done'",
"hdr_options_panel" => "Options panel",
"hdr_select_date" => "Tarihe Git",
"hdr_view" => "View",
"hdr_select_view" => "Görünüm Seçin",
"hdr_filter" => "Filter",
"hdr_select_filter" => "Select Filter",
"hdr_lang" => "Language",
"hdr_select_lang" => "Arayüz Dili",
"hdr_all_cats" => "Bütün Kategoriler",
"hdr_all_users" => "All Users",
"hdr_year" => "YIL",
"hdr_month_full" => "AY (7G)",
"hdr_month_work" => "Work month",
"hdr_week_full" => "HAFTA (7G)",
"hdr_week_work" => "Work week",
"hdr_day" => "GÜN",
"hdr_upcoming" => "Gelecek Randevular",
"hdr_changes" => "Değişikler",
"hdr_select_admin_functions" => "Yönetici Fonksiyonlarını Seç",
"hdr_admin" => "Yönetici",
"hdr_settings" => "Ayarlar",
"hdr_categories" => "Kategoriler",
"hdr_users" => "Kullanıcılar",
"hdr_database" => "Veritabanı",
"hdr_import_csv" => "CSV Import",
"hdr_import_ics" => "iCal Import",
"hdr_export_ics" => "iCal Export",
"hdr_calendar" => "Calendar",
"hdr_back_to_cal" => "Back to calendar view",
"hdr_button_print" => "Yazdır",
"hdr_print_page" => "Bu sayfayı yazdır",
"hdr_button_todo" => "Todo",
"hdr_todo_list" => "Todo List",
"hdr_button_upco" => "Upcoming",
"hdr_upco_list" => "Gelecek Randevular",
"hdr_button_search" => "Search",
"hdr_search" => "Text Search",
"hdr_button_add" => "Add",
"hdr_add_event" => "OLAY EKLE",
"hdr_button_help" => "Yardım",
"hdr_help" => "User Guide",
"hdr_log_in" => "GİRİŞ",
"hdr_button_log_in" => "GİRİŞ",
"hdr_button_log_out" => "ÇIKIŞ",
"hdr_today" => "Bugün", //dtpicker.js
"hdr_clear" => "Kapat", //dtpicker.js

//event.php
"evt_no_title" => "Başlık Yok",
"evt_no_start_date" => "No start date",
"evt_bad_date" => "Bad date",
"evt_bad_rdate" => "Bad repeat end date",
"evt_no_start_time" => "No start time",
"evt_bad_time" => "Bad time",
"evt_end_before_start_time" => "End time before start time",
"evt_end_before_start_date" => "End date before start date",
"evt_until_before_start_date" => "Repeat end before start date",
"evt_approved" => "Event approved",
"evt_apd_locked" => "Event approved and locked",
"evt_title" => "Başlık",
"evt_venue" => "Yer",
"evt_category" => "Kategori",
"evt_description" => "Açıklama",
"evt_date_time" => "Tarih / Saat",
"evt_mailer" => "Hatırlatıcı",
"evt_private" => "Bu kişisel bir olay",
"evt_start_date" => "Başlangıç",
"evt_end_date" => "Bitiş",
"evt_select_date" => "Tarih Seç",
"evt_select_time" => "Select time",
"evt_all_day" => "Tüm Gün",
"evt_change" => "Değiştir",
"evt_set_repeat" => "Tekrar Ayarlayın",
"evt_set" => "OK",
"evt_help" => "help",
"evt_repeat_not_supported" => "Specified repetition not supported",
"evt_no_repeat" => "Tekrar Yok",
"evt_repeat" => "Tekrar",
"evt_repeat_on" => "Her",
"evt_until" => "bu zamana kadar",
"evt_blank_no_end" => "Boş Bırakılırsa: Hiç Bitmez",
"evt_each_month" => "each month",
"evt_interval1_1" => "her",
"evt_interval1_2" => "her iki",
"evt_interval1_3" => "her üç",
"evt_interval1_4" => "her dört",
"evt_interval1_5" => "every fifth",
"evt_interval1_6" => "every sixth",
"evt_interval2_1" => "birinci",
"evt_interval2_2" => "ikinci",
"evt_interval2_3" => "üçüncü",
"evt_interval2_4" => "dördüncü",
"evt_interval2_5" => "son",
"evt_period1_1" => "gün",
"evt_period1_2" => "hafta",
"evt_period1_3" => "ay",
"evt_period1_4" => "yıl",
"evt_notify" => "Mail Gönder",
"evt_now_and_or" => "şimdi ve/veya Olaydan",
"evt_event_added" => "Yeni Olay",
"evt_event_edited" => "Olayı Değiştir",
"evt_event_deleted" => "Olayı Sil",
"evt_days_before_event" => "gün önce",
"evt_mail_help" => "Email reminders can be sent directly (now) or the specified number of days before the start of the event. In the field below, recipient mail addresses and/or names of files with recipient mail addresses can be specified. Each address/file name should be separated by a semicolon. The field can contain max. 255 karekter. Files with email addresses with one email address per line should be located in the folder \'emlists\'.<br>When omitted, the default file name extension of a file with email addresses is .txt.",
"evt_eml_list_too_long" => "Eposta kısmında fazla karekter sayısı.",
"evt_eml_list_missing" => "Hatırlatıcı maillerinde hata var.",
"evt_not_in_past" => "Notification date in past",
"evt_not_days_invalid" => "Notification days invalid",
"evt_status" => "Status",
"evt_descr_help" => "The following items can be used in the description field ...<br>- HTML tags &lt;b&gt;, &lt;i&gt;, &lt;u&gt; and &lt;s&gt; for bold, italic, underlined and striked-through text.<br>- small images (thumbnails) in the following format: folder/image_name.ext or image_name.ext. When omitted, the default folder is \'thumbnails\'. The folder must be a subfolder of the calendar and the extension must be .gif, .jpg or .png. The thumbnail (image) files should be uploaded via FTP.<br>- URL links in the following format: url or url [name], where \'name\' will be the title of the link. E.g. www.google.com [search].<br>URL links can also be used in the extra fields, if in use",
"evt_confirm_added" => "Olay Eklendi",
"evt_confirm_saved" => "Olay Kaydedildi",
"evt_confirm_deleted" => "Olay Silindi",
"evt_add_close" => "Add and close",
"evt_add" => "Ekle",
"evt_edit" => "Düzenle",
"evt_save_close" => "Kaydet ve Kapat",
"evt_save" => "Kaydet",
"evt_clone" => "Kaydet ve Yeni Aç",
"evt_delete" => "SİL",
"evt_close" => "KAPAT",
"evt_open_calendar" => "Açık Ajanda",
"evt_added" => "Ekle",
"evt_edited" => "Düzenle",
"evt_is_repeating" => "is a repeating event.",
"evt_is_multiday" => "is a multi-day event.",
"evt_edit_series_or_occurrence" => "Do you want to edit the series or this occurrence",
"evt_edit_series" => "Edit the series",
"evt_edit_occurrence" => "Edit this occurrence",

//views
"vws_add_event" => "Olay Ekle",
"vws_view_month" => "Aylık Görünüm",
"vws_view_week" => "Haftalık Görünüm",
"vws_view_day" => "Günlük Görünüm",
"vws_click_for_full" => "Aylık Tam Görünüm",
"vws_view_full" => "Tüm Ajanda Görünümü",
"vws_prev_month" => "Önceki Ay",
"vws_next_month" => "Sonraki Ay",
"vws_today" => "Bugün",
"vws_back_to_today" => "Bu Ay a geri dön",
"vws_week" => "Hafta",
"vws_wk" => "HF",
"vws_time" => "Saat",
"vws_events" => "Olaylar",
"vws_all_day" => "Tüm Gün",
"vws_earlier" => "Earlier",
"vws_later" => "Later",
"vws_venue" => "Yer",
"vws_events_for_next" => "Önümüzdeki şukadar günü yazdır ",
"vws_days" => "gün(ler)",
"vws_added" => "Ekle",
"vws_edited" => "Düzenle",
"vws_notify" => "Notify",
"vws_check_mark" => "Check mark",
"vws_none_due_in" => "No events due in the next",
"vws_download" => "Download",
"vws_download_title" => "Download a text file with these events",

//changes.php
"chg_from_date" => "Bu Tarihten",
"chg_select_date" => "Başlangıç Tarihini Seç",
"chg_notify" => "Hatırlatıcı",
"chg_days" => "Gün(ler)",
"chg_added" => "Ekle",
"chg_edited" => "Düzenle",
"chg_deleted" => "Silindi",
"chg_changed_on" => "Değiştirilen:",
"chg_changes" => "Değişen",
"chg_no_changes" => "Değişiklik Yok.",

//search.php
"sch_define_search" => "Define search",
"sch_search_text" => "Search text",
"sch_event_fields" => "Event fields",
"sch_all_fields" => "All fields",
"sch_title" => "Title",
"sch_description" => "Description",
"sch_venue" => "Venue",
"sch_event_cat" => "Event category",
"sch_all_cats" => "All Categories",
"sch_occurring_between" => "Occurring between",
"sch_select_start_date" => "Select start date",
"sch_select_end_date" => "Select end date",
"sch_search" => "Search",
"sch_invalid_search_text" => "Search text missing or too short",
"sch_bad_start_date" => "Bad start date",
"sch_bad_end_date" => "Bad end date",
"sch_no_results" => "No results found",
"sch_new_search" => "New Search",
"sch_calendar" => "Go to calendar",
"sch_extra_field1" => "Extra field 1",
"sch_extra_field2" => "Extra field 2",
"sch_instructions" =>
"<h4>Text Search Instructions</h4>
<p>The calendar database can be searched for events matching specific text.</p>
<br><p><b>Search text</b>: The selected fields (see below) of each event will 
be searched. The search is case insensitive.</p>
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
