<?php
/*
= LuxCal event calendar user interface language file =

Traduzido para Português-Portugal (Rodrigo Pedro) - Contacto: rodrigocaetanopedro@gmail.com

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu

This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LUI","3.2.3");
define("ISOCODE","pt");

/* -- Titles on the Header of the Calendar and Date Picker -- */

$months = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
$months_m = array("Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez");
$wkDays = array("Domingo","Segunda-Feira","Terça-Feira","Quarta-Feira","Quinta-Feira","Sexta-Feira","Sábado","Domingo");
$wkDays_l = array("Domi","Segu","Terç","Quar","Quin","Sext","Sába","Domi");
$wkDays_m = array("Dom","Seg","Ter","Qua","Qui","Sex","Sáb","Dom");
$wkDays_s = array("D","S","T","Q","Q","S","S","D");


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
"title_upcoming" => "Próximos Eventos",
"title_event" => "Eventos",
"title_add_event" => "Adicionar Eventos",
"title_check_event" => "Check Event",
"title_search" => "Text Search",
"title_user_guide" => "Manual do Utilizador LuxCal",
"title_settings" => "Gerir Definições do Calendário",
"title_edit_cats" => "Categorias",
"title_edit_users" => "Utilizadores",
"title_manage_db" => "Controlar Base de Dados",
"title_changes" => "Eventos Adicionado(s) / Alterardo(s) / Eliminado(s)",
"title_csv_import" => "Importar Ficheiro CSV",
"title_ics_import" => "Importar Ficheiro iCal",
"title_ics_export" => "Exportar Ficheiro iCal",
"idx_public_name" => "Vista Pública",

//header.php
"hdr_button_back" => "Back to parent page",
"hdr_button_options" => "Options",
"hdr_options_submit" => "Make your choice and press 'Done'",
"hdr_options_panel" => "Options panel",
"hdr_select_date" => "Ir para a data",
"hdr_view" => "Vista",
"hdr_select_view" => "Selecionar Vista",
"hdr_filter" => "Filtro",
"hdr_select_filter" => "Selecionar Filtro",
"hdr_lang" => "Idioma",
"hdr_select_lang" => "Selecionar Idioma",
"hdr_all_cats" => "Todas as categorias",
"hdr_all_users" => "Todos os utilizadores",
"hdr_year" => "Anual",
"hdr_month_full" => "Mensal (7d)",
"hdr_month_work" => "Work month",
"hdr_week_full" => "Semanal (7d)",
"hdr_week_work" => "Work week",
"hdr_day" => "Diária",
"hdr_upcoming" => "Próximos Eventos",
"hdr_changes" => "Alterações",
"hdr_select_admin_functions" => "Selecionar Funções do Administrador",
"hdr_admin" => "Administração",
"hdr_settings" => "Definições",
"hdr_categories" => "Categorias",
"hdr_users" => "Utilizadores",
"hdr_database" => "Base de dados",
"hdr_import_csv" => "Importar CSV",
"hdr_import_ics" => "Importar iCal",
"hdr_export_ics" => "Exportar iCal",
"hdr_calendar" => "Calendar",
"hdr_back_to_cal" => "Back to calendar view",
"hdr_button_print" => "Imprimir",
"hdr_print_page" => "Imprima esta página",
"hdr_button_todo" => "Todo",
"hdr_todo_list" => "Todo List",
"hdr_button_upco" => "Upcoming",
"hdr_upco_list" => "Próximos Eventos",
"hdr_button_search" => "Search",
"hdr_search" => "Text Search",
"hdr_button_add" => "Add",
"hdr_add_event" => "Adicionar Evento",
"hdr_button_help" => "Ajuda",
"hdr_help" => "User Guide",
"hdr_log_in" => "Iniciar Sessão",
"hdr_button_log_in" => "Iniciar Sessão",
"hdr_button_log_out" => "Terminar Sessão",
"hdr_today" => "Hoje", //dtpicker.js
"hdr_clear" => "Apagar", //dtpicker.js

//event.php
"evt_no_title" => "Título vazio!",
"evt_no_start_date" => "Data de início vazia!",
"evt_bad_date" => "Data inválida!",
"evt_bad_rdate" => "Repetição da date final errada!",
"evt_no_start_time" => "Hora de início vazia!",
"evt_bad_time" => "Hora inválida!",
"evt_end_before_start_time" => "Hora do fim anterior há hora do início!",
"evt_end_before_start_date" => "Data do fim anterior há data do início!",
"evt_until_before_start_date" => "Repete o fim antes da data de início!",
"evt_approved" => "Event approved",
"evt_apd_locked" => "Event approved and locked",
"evt_title" => "Título",
"evt_venue" => "Local",
"evt_category" => "Categoria",
"evt_description" => "Descrição",
"evt_date_time" => "Data / tempo",
"evt_mailer" => "remetente",
"evt_private" => "Evento Privado",
"evt_start_date" => "Início",
"evt_end_date" => "Fim",
"evt_select_date" => "Selecionar data",
"evt_select_time" => "Selecionar hora",
"evt_all_day" => "Todo o dia",
"evt_change" => "Alterar",
"evt_set_repeat" => "Definir repetição",
"evt_set" => "OK",
"evt_help" => "help",
"evt_repeat_not_supported" => "Repetição especificada não é suportada",
"evt_no_repeat" => "Não repetir",
"evt_repeat" => "Repetir",
"evt_repeat_on" => "Repetir a cada",
"evt_until" => "até",
"evt_blank_no_end" => "em branco: sem fim",
"evt_each_month" => "each month",
"evt_interval1_1" => "todos(as) os(as)",
"evt_interval1_2" => "a cada dois(duas)",
"evt_interval1_3" => "a cada três",
"evt_interval1_4" => "a cada quatro",
"evt_interval1_5" => "every fifth",
"evt_interval1_6" => "every sixth",
"evt_interval2_1" => "primeiro(a)",
"evt_interval2_2" => "segundo(a)",
"evt_interval2_3" => "terceiro(a)",
"evt_interval2_4" => "quarto(a)",
"evt_interval2_5" => "último(a)",
"evt_period1_1" => "dias",
"evt_period1_2" => "semanas",
"evt_period1_3" => "meses",
"evt_period1_4" => "anos",
"evt_notify" => "Enviar e-mail",
"evt_now_and_or" => "agora e/ou",
"evt_event_added" => "O Seguinte evento foi adicionado",
"evt_event_edited" => "O Seguinte evento foi alterado",
"evt_event_deleted" => "O Seguinte evento foi eliminado",
"evt_days_before_event" => "dia(s) antes do evento:",
"evt_mail_help" => "Email reminders can be sent directly (now) or the specified number of days before the start of the event. In the field below, recipient mail addresses and/or names of files with recipient mail addresses can be specified. Each address/file name should be separated by a ponto e vírgula. The field can contain max. 255 caracteres. Files with email addresses with one email address per line should be located in the folder \'emlists\'.<br>When omitted, the default file name extension of a file with email addresses is .txt.",
"evt_eml_list_too_long" => "Lista de endereços de e-mail possu&iacute muitos caracteres.",
"evt_eml_list_missing" => "Notificação de e-mail(s) em falta",
"evt_not_in_past" => "Dia de notificação não pode ser anterior ao dia de hoje",
"evt_not_days_invalid" => "Dias de notificação inválidos",
"evt_status" => "Status",
"evt_descr_help" => "The following items can be used in the description field ...<br>- HTML tags &lt;b&gt;, &lt;i&gt;, &lt;u&gt; and &lt;s&gt; for bold, italic, underlined and striked-through text.<br>- small images (thumbnails) in the following format: folder/image_name.ext or image_name.ext. When omitted, the default folder is \'thumbnails\'. The folder must be a subfolder of the calendar and the extension must be .gif, .jpg or .png. The thumbnail (image) files should be uploaded via FTP.<br>- URL links in the following format: url or url [name], where \'name\' will be the title of the link. E.g. www.google.com [search].<br>URL links can also be used in the extra fields, if in use",
"evt_confirm_added" => "evento added",
"evt_confirm_saved" => "evento saved",
"evt_confirm_deleted" => "evento deleted",
"evt_add_close" => "Add and close",
"evt_add" => "Adicionar",
"evt_edit" => "Editar ",
"evt_save_close" => "Salvar e Fechar",
"evt_save" => "Salvar",
"evt_clone" => "Salvar como Novo",
"evt_delete" => "Eliminar",
"evt_close" => "Fechar",
"evt_open_calendar" => "Abre o calendário",
"evt_added" => "Adicionado",
"evt_edited" => "Editado",
"evt_is_repeating" => "is a repeating event.",
"evt_is_multiday" => "is a multi-day event.",
"evt_edit_series_or_occurrence" => "Do you want to edit the series or this occurrence",
"evt_edit_series" => "Edit the series",
"evt_edit_occurrence" => "Edit this occurrence",

//views
"vws_add_event" => "Adiconar Evento",
"vws_view_month" => "Ver Mês",
"vws_view_week" => "Ver Semana",
"vws_view_day" => "Ver Dia",
"vws_click_for_full" => "para ver todo o calendário clique em mês",
"vws_view_full" => "View full calendar",
"vws_prev_month" => "Mês Anterior",
"vws_next_month" => "Próximo Mês",
"vws_today" => "Hoje",
"vws_back_to_today" => "Voltar para o dia de hoje",
"vws_week" => "Semana",
"vws_wk" => "sem",
"vws_time" => "Hora",
"vws_events" => "Eventos",
"vws_all_day" => "Todo o dia",
"vws_earlier" => "Earlier",
"vws_later" => "Later",
"vws_venue" => "Local",
"vws_events_for_next" => "Próximos eventos",
"vws_days" => "dia(s)",
"vws_added" => "Adicionado",
"vws_edited" => "Editado",
"vws_notify" => "Notificar",
"vws_check_mark" => "Check mark",
"vws_none_due_in" => "No events due in the next",
"vws_download" => "Download",
"vws_download_title" => "Download a text file with these events",

//changes.php
"chg_from_date" => "Da data",
"chg_select_date" => "Selecionar data de inicio",
"chg_notify" => "Notificação",
"chg_days" => "Dia(s)",
"chg_added" => "Adicionado",
"chg_edited" => "Editado",
"chg_deleted" => "Eliminado",
"chg_changed_on" => "Mudou em",
"chg_changes" => "Alterações",
"chg_no_changes" => "Sem alterações.",

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