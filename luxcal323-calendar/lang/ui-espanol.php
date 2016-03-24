<?php
/*
= LuxCal event calendar user interface language file =

Traducido al español por Michel Trottier y su novia - Montreal, Canada.
Traducción corregida y actualizada por Pantricio - Murcia, España.

© Copyright 2009-2014 LuxSoft - www.LuxSoft.eu
This file is part of the LuxCal Web Calendar.
*/

//LuxCal ui language file version
define("LUI","3.2.3");
define("ISOCODE","es");

/* -- Titles on the Header of the Calendar -- */

$months = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$months_m = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
$wkDays = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
$wkDays_l = array("Dom","Lun","Mar","Mié","Jue","Vie","Sáb","Dom");
$wkDays_m = array("Do","Lu","Ma","Mi","Ju","Vi","Sá","Do");
$wkDays_s = array("D","L","M","X","J","V","S","D");


/* -- User Interface texts -- */

$xx = array(

//general
"submit" => "Enviar",
"none" => "Ninguno.",
"back" => "Volver",
"by" => "by",
"of" => "de",
"done" => "Done",
"at_time" => "@", //date and time separator (e.g. 11-09-2014 @ 10:45)
"no_way" => "You are not authorized to perform this action",

//index.php
"title_log_in" => "Log In",
"title_upcoming" => "Próximos eventos", 
"title_event" => "Evento",
"title_add_event" => "Añadir evento",
"title_check_event" => "Marcar evento",
"title_search" => "Buscar texto",
"title_user_guide" => "Guía del usuario de LuxCal",
"title_settings" => "Configurar el calendario", 
"title_edit_cats" => "Modificar categorías",
"title_edit_users" => "Modificar usuarios",
"title_manage_db" => "Gestionar la base de datos",
"title_changes" => "Eventos añadidos / modificados / suprimidos",
"title_csv_import" => "Importación de archivos CSV",
"title_ics_import" => "Importación de archivos iCal",
"title_ics_export" => "Exportación de archivos iCal",
"idx_public_name" => "Vista pública",

//header.php
"hdr_button_back" => "Back to parent page",
"hdr_button_options" => "Opciones",
"hdr_options_submit" => "Seleccione una opción y pulse 'Done'",
"hdr_options_panel" => "Panel de opciones",
"hdr_select_date" => "Ir a Fecha",
"hdr_view" => "Vista",
"hdr_select_view" => "Seleccionar vista",
"hdr_filter" => "Filtro",
"hdr_select_filter" => "Seleccionar filtro",
"hdr_lang" => "Idioma",
"hdr_select_lang" => "Seleccionar idioma",
"hdr_all_cats" => "Todas las categorías",
"hdr_all_users" => "Todos los usuarios",
"hdr_year" => "Año",
"hdr_month_full" => "Mes (7d)",
"hdr_month_work" => "Mes laboral",
"hdr_week_full" => "Semana (7d)",
"hdr_week_work" => "Semana laboral",
"hdr_day" => "Día",
"hdr_upcoming" => "Próximos",
"hdr_changes" => "Cambios",
"hdr_select_admin_functions" => "Seleccionar función de administración",
"hdr_admin" => "Administración",
"hdr_settings" => "Configuración",
"hdr_categories" => "Categorías",
"hdr_users" => "Usuarios",
"hdr_database" => "Base de datos",
"hdr_import_csv" => "Importar CSV",
"hdr_import_ics" => "Importar iCal",
"hdr_export_ics" => "Exportar iCal",
"hdr_calendar" => "Calendario",
"hdr_back_to_cal" => "Back to calendar view",
"hdr_button_print" => "Imprimir",
"hdr_print_page" => "Imprima esta página",
"hdr_button_todo" => "Todo",
"hdr_todo_list" => "Lista de pendientes",
"hdr_button_upco" => "Upcoming",
"hdr_upco_list" => "Próximos eventos",
"hdr_button_search" => "Search",
"hdr_search" => "Buscar",
"hdr_button_add" => "Add",
"hdr_add_event" => "Añadir Evento",
"hdr_button_help" => "Ayuda",
"hdr_help" => "User Guide",
"hdr_log_in" => "Iniciar sesión",
"hdr_button_log_in" => "Iniciar sesión",
"hdr_button_log_out" => "Cerrar sesión",
"hdr_today" => "hoy", //dtpicker.js
"hdr_clear" => "borrar", //dtpicker.js

//event.php
"evt_no_title" => "Sin título",
"evt_no_start_date" => "No hay fecha de inicio",
"evt_bad_date" => "Fecha errónea",
"evt_bad_rdate" => "Fecha final de repetición erronea",
"evt_no_start_time" => "No hay hora de inicio",
"evt_bad_time" => "Hora incorrecta",
"evt_end_before_start_time" => "Hora de finalización anterior a la hora de inicio",
"evt_end_before_start_date" => "Fecha de finalización anterior a la fecha de inicio",
"evt_until_before_start_date" => "Fecha final de repetición anterior a la fecha de inicio",
"evt_approved" => "Event approved",
"evt_apd_locked" => "Event approved and locked",
"evt_title" => "Título",
"evt_venue" => "Ubicación del evento",
"evt_category" => "Categoría",
"evt_description" => "Descripción",
"evt_date_time" => "Fecha / hora",
"evt_mailer" => "correo electrónico",
"evt_private" => "Evento Privado",
"evt_start_date" => "Inicio",
"evt_end_date" => "Final",
"evt_select_date" => "Seleccione fecha",
"evt_select_time" => "Seleccione hora",
"evt_all_day" => "Todo el día",
"evt_change" => "Cambiar",
"evt_set_repeat" => "Establecer repetición",
"evt_set" => "OK",
"evt_help" => "help",
"evt_repeat_not_supported" => "La repetición solicitada no está soportada",
"evt_no_repeat" => "No repetir",
"evt_repeat" => "Repetir",
"evt_repeat_on" => "Repetir el",
"evt_until" => "hasta",
"evt_blank_no_end" => "en blanco: sin final",
"evt_each_month" => "cada mes",
"evt_interval1_1" => "cada",
"evt_interval1_2" => "cada dos",
"evt_interval1_3" => "cada tres",
"evt_interval1_4" => "cada cuatro",
"evt_interval1_5" => "cada cinco",
"evt_interval1_6" => "cada seis",
"evt_interval2_1" => "primer",
"evt_interval2_2" => "segudo",
"evt_interval2_3" => "tercer",
"evt_interval2_4" => "cuarto",
"evt_interval2_5" => "último",
"evt_period1_1" => "día(s)",
"evt_period1_2" => "semana(s)",
"evt_period1_3" => "mes(es)",
"evt_period1_4" => "año(s)",
"evt_notify" => "Notificar",
"evt_now_and_or" => "ahora y/o",
"evt_event_added" => "Evento añadido",
"evt_event_edited" => "Evento modificado",
"evt_event_deleted" => "Evento eliminado",
"evt_days_before_event" => "días antes del evento",
"evt_mail_help" => "direcciones de correo electrónico para notificación - separadas por un punto y coma - max. 255 car.",
"evt_eml_list_too_long" => "Lista de direcciones de correo electrónico demasiado larga.",
"evt_eml_list_missing" => " Dirección de correo electrónico para notificación vacía",
"evt_not_in_past" => "Fecha de notificación pasada (anterior a hoy)",//
"evt_not_days_invalid" => "Fecha de notificación inválidas",//
"evt_status" => "Estado",
"evt_descr_help" => "The following items can be used in the description field ...<br>- HTML tags &lt;b&gt;, &lt;i&gt;, &lt;u&gt; and &lt;s&gt; for bold, italic, underlined and striked-through text.<br>- small images (thumbnails) in the following format: folder/image_name.ext or image_name.ext. When omitted, the default folder is \'thumbnails\'. The folder must be a subfolder of the calendar and the extension must be .gif, .jpg or .png. The thumbnail (image) files should be uploaded via FTP.<br>- URL links in the following format: url or url [name], where \'name\' will be the title of the link. E.g. www.google.com [search].<br>URL links can also be used in the extra fields, if in use",
"evt_confirm_added" => "evento añadido",
"evt_confirm_saved" => "evento guardado",
"evt_confirm_deleted" => "evento eliminado",
"evt_add_close" => "Añadir y cerrar",
"evt_add" => "Añadir",
"evt_edit" => "Modificar",
"evt_save_close" => "Guardar y cerrar",
"evt_save" => "Guardar",
"evt_clone" => "Guardar como nuevo",
"evt_delete" => "Borrar",
"evt_close" => "Cerrar",
"evt_open_calendar" => "Abrir el calendario",
"evt_added" => "Añadido",
"evt_edited" => "Editado",
"evt_is_repeating" => "es un evento con repetición.",
"evt_is_multiday" => "es un evento multi-día.",
"evt_edit_series_or_occurrence" => "¿Quiere editar la serie completa o solo esta ocurrencia",
"evt_edit_series" => "Editar la serie completa",
"evt_edit_occurrence" => "Edit solo esta ocurrencia",

//views
"vws_add_event" => "Añadir Evento",
"vws_view_month" => "Ver mes",
"vws_view_week" => "Vista de la semana",
"vws_view_day" => "Ver día",
"vws_clic_for_full" => "para el calendario completo haga clic en mes",
"vws_view_full" => "Ver calendario completo",
"vws_prev_month" => "Mes anterior",
"vws_next_month" => "Mes siguiente",
"vws_today" => "Hoy",
"vws_back_to_today" => "Volver al mes de hoy",
"vws_week" => "Semana",
"vws_wk" => "sem",
"vws_time" => "Hora",
"vws_events" => "Eventos",
"vws_all_day" => "Todo el día",
"vws_earlier" => "Earlier",
"vws_later" => "Later",
"vws_venue" => "Ubicación del evento",
"vws_events_for_next" => "Eventos para los próximos",
"vws_days" => "día(s)",
"vws_added" => "Añadido",
"vws_edited" => "Editado",
"vws_notify" => "Notificar",
"vws_check_mark" => "Check mark",
"vws_none_due_in" => "No events due in the next",
"vws_download" => "Download",
"vws_download_title" => "Download a text file with these events",

//changes.php
"chg_from_date" => "Fecha de inicio",
"chg_select_date" => "Seleccionar la fecha de inicio",
"chg_notify" => "Notificar",
"chg_days" => "Día(s)",
"chg_added" => "Añadido",
"chg_edited" => "Corregido",
"chg_deleted" => "Suprimido",
"chg_changed_on" => "Cambiado el",
"chg_changes" => "Cambios",
"chg_no_changes" => "Sin cambios.",

//search.php
"sch_define_search" => "Definir búsqueda",
"sch_search_text" => "Texto buscado",
"sch_event_fields" => "Campos del evento",
"sch_all_fields" => "Todos los campos",
"sch_title" => "Título",
"sch_description" => "Descripción",
"sch_venue" => "Ubicación",
"sch_event_cat" => "Categoría del evento",
"sch_all_cats" => "Todas las categorías",
"sch_occurring_between" => "Ocurre entre",
"sch_select_start_date" => "Seleccionar fecha inicial",
"sch_select_end_date" => "Seleccionar fecha final",
"sch_search" => "Buscar",
"sch_invalid_search_text" => "El texto buscado está vacío o es demasiado corto",
"sch_bad_start_date" => "Fecha inicial erronea",
"sch_bad_end_date" => "Fecha final erronea",
"sch_no_results" => "No se han encontrado resultados",
"sch_new_search" => "Nueva búsqueda",
"sch_calendar" => "Ir al calendario",
"sch_extra_field1" => "Extra field 1",
"sch_extra_field2" => "Extra field 2",
"sch_instructions" =>
"<h4>Instrucciones de la búsqueda de texto</h4>
<p>Puede buscar eventos en la base de datos del calendario que contengan un texto específico.</p>
<br><p><b>Buscar texto</b>: Se buscará en los campos seleccionados (ver más adelante) de cada evento. 
La búsqueda no distingue entre mayúsculas y minúsculas.</p>
<p>Puede usar dos comodines:</p>
<ul>
<li>Los guiones bajos (_) en el texto buscado sustituyen a cualquier carácter individual.<br>
P.ej.: 'p_t_' encuentra 'pata', 'pita', y 'poto'.</li>
<li>El signo &amp; en el texto buscado sustituyen a cualquier combinación de carácteres.<br>
P.ej.: 'so&amp;o' encuentra 'solp', 'sombrero', y 'sonajero'.</li>
</ul>
<p>Sin embargo, el texto buscado debe contener al menos dos caracteres que no sean comodines.</p>
<br><p><b>Campos del evento</b>: Solo se buscará en los campos seleccionados.</p>
<br><p><b>Categoría del evento</b>: Solo se buscarán eventos de las categorías seleccionadas.</p>
<br><p><b>Ocurre entre</b>: Las fechas de inicio y final son opcionales. 
Una fecha inicial vacía significa buscar eventos con hasta un año de antigüedad.
Una fecha final vacía significa buscar eventos que ocurren hasta dentro de año.</p>
<br><p>Los resultados se mostrarán en orden cronológico.</p>",

//stand-alone sidebar (lcsbar.php)
"ssb_upco_events" => "Upcoming Events",
"ssb_all_day" => "All day",
"ssb_none" => "No events."
);
?>
