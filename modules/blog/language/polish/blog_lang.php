<?php
/*
|--------------------------------------------------------------------------
| Module Names
|--------------------------------------------------------------------------
*/
$lang['module_blog_posts'] = 'Posty';
$lang['module_blog_categories'] = 'Kategorie';
$lang['module_blog_tags'] = 'Tagi';
$lang['module_blog_comments'] = 'Komentarze';
$lang['module_blog_links'] = 'Linki';
$lang['module_blog_authors'] = 'Autorzy';
$lang['module_blog_settings'] = 'Ustawienia';

/*
|--------------------------------------------------------------------------
| Errors
|--------------------------------------------------------------------------
*/
$lang['blog_error_blank_comment'] = 'Proszę wpisać treść komentarza.';
$lang['blog_error_invalid_comment_email'] = 'Proszę wprowadzić prawidłowy adres e-mail.';
$lang['blog_error_comment_site_submit'] = 'Komentarze należy przesłać za pośrednictwem formularza na stronie internetowej.';
$lang['blog_error_comment_already_submitted'] = 'Ten komentarz został już przesłany.';
$lang['blog_error_consecutive_comments'] = 'Proszę zaczekać, aby opublikować kolejne komentarze.';
$lang['blog_error_delete_uncategorized'] = 'You cannot delete the \'Uncategorized\' category.';
//$lang['blog_comment_does_not_exist'] = 'The request blog comment does not exist.'; /  maybe request-ed- ??
$lang['blog_comment_does_not_exist'] = 'Żądany komentarz do blogu nie istnieje.';

/*
|--------------------------------------------------------------------------
| Page Titles
|--------------------------------------------------------------------------
*/
$lang['blog_archives_page_title'] = 'Archiwa';
$lang['blog_authors_list_page_title'] = 'Autorzy';
$lang['blog_author_posts_page_title'] = '%s Posty';
$lang['blog_categories_page_title'] = 'Kategorie';
$lang['blog_tags_page_title'] = 'Tagi';
//$lang['blog_search_page_title'] = '%s Search Results';
$lang['blog_search_page_title'] = 'Wyniki wyszukiwania %s';
/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/
$lang['blog_page_num_title'] = 'Posty %1s-%2s';
$lang['blog_prev_page'] = '&lt;&lt; Poprzednia strona';
$lang['blog_next_page'] = 'Następna strona &gt;&gt;';
$lang['blog_first_link'] = '';
$lang['blog_last_link'] = '';


//$lang['blog_error_no_posts_to_comment'] = 'There are no posts to comment on.';
$lang['blog_error_no_posts_to_comment'] = 'Brak postów do skomentowania.';
//$lang['blog_post_is_not_published'] = 'The post associated with this comment is not published and so no notifications will be sent on comment replies.';
$lang['blog_post_is_not_published'] = 'Post powiązany z tym komentarzem nie jest opublikowany, więc nie będą wysyłane powiadomienia o komentarzach.';
//$lang['blog_comment_notify_option1'] = 'All';
$lang['blog_comment_notify_option1'] = 'Wszystkich';
//$lang['blog_comment_notify_option2'] = 'Commentor';
$lang['blog_comment_notify_option2'] = 'Komentującego';
$lang['blog_comment_notify_option3'] = 'Nikogo';



/***************************************************************************
IMPORTANT: SEVERAL FORM FIELD LABELS ALREADY EXIST IN THE fuel language file
***************************************************************************/

/*
|--------------------------------------------------------------------------
| Posts (several fields are in the main form_label_ common)
|--------------------------------------------------------------------------
*/
//$lang['form_label_formatting'] = 'Formatting';
$lang['form_label_formatting'] = 'Formatowanie';
$lang['form_label_author'] = 'Autor';
$lang['form_label_sticky'] = 'Przyklejony';
//$lang['form_label_allow_comments'] = 'Allow Comments';
$lang['form_label_allow_comments'] = 'Zezwól na komentowanie';
$lang['form_label_category'] = 'Kategoria';
$lang['form_label_tags'] = 'Tagi';
$lang['form_label_main_image'] = 'Głowny obraz';
//$lang['form_label_list_image'] = 'List image';
$lang['form_label_list_image'] = 'Obraz w listach';
$lang['form_label_thumbnail_image'] = 'Obraz miniatury';
$lang['form_label_page_title'] = 'Tytuł strony';
$lang['form_label_meta_description'] = 'Opis<br />(tag meta description)';
$lang['form_label_meta_keywords'] = 'Słowa kluczowe<br />(tag meta keywords)';
$lang['form_label_publish_date'] = 'Data publikacji';
//$lang['form_label_related_posts'] = 'Related posts';
$lang['form_label_related_posts'] = 'Powiązane posty';
$lang['form_label_blocks'] = 'Bloki';

//$lang['form_category_comment'] = 'Categories must have context value of "blog" OR be empty in order to be used by the Blog module.';
$lang['form_category_comment'] = 'Kategorie muszą mieć wartość kontekstową "blog" albo muszą być puste, aby mogły być używane przez moduł Blog.';
//$lang['form_tags_comment'] = 'Tags must belong to a category that has the context of "blog" or is empty in order to be used by the Blog module.';
$lang['form_tags_comment'] = 'Tagi muszą należeć do kategorii, która ma kontekst "blog" lub jest pusta, aby mogły być używane przez moduł Blog.';


/*
|--------------------------------------------------------------------------
| Comments 
|--------------------------------------------------------------------------
*/
$lang['blog_comment_monitor_subject']= "%s: Komentarz został dodany.";
//$lang['blog_comment_monitor_msg']= "A comment has been added to your blog post. To review the comment login to FUEL:";
$lang['blog_comment_monitor_msg']= "Komentarz został dodany do Twojego posta na blogu. Aby przejrzeć komentarz zaloguj się do systemu FUEL:";
//$lang['blog_comment_reply_subject']= "%1s Blog Comment Reply";
$lang['blog_comment_reply_subject']= "Odpowiedz na komentarz w blogu: %1s";
//$lang['blog_comment_reply_msg']= "%1s has replied to your comment on the article %2s.";
$lang['blog_comment_reply_msg']= "%1s odpowiedział na Twój komentarz do artykułu %2s.";

//$lang['blog_captcha_text'] = "Enter the text you see in the image in the form field above. <br />If you cannot read the text, refresh the page.";
$lang['blog_captcha_text'] = "Wprowadź tekst widoczny na obrazku w powyższym polu formularza. <br /> Jeśli nie możesz odczytać tekstu, odśwież stronę.";

//$lang['blog_comment_is_spam'] = "The comment posted cannot be submitted as is because it was flagged as spam.";
$lang['blog_comment_is_spam'] = "Opublikowany komentarz nie może zostać przesłany, ponieważ został oznaczony jako spam.";
$lang['blog_error_captcha_mismatch'] = "Wprowadzony tekst nie pasował do brazu.";

$lang['blog_email_flagged_as_spam'] = 'OZNACZONO JAKO SPAM!!!';
$lang['blog_email_published'] = 'Opublikowano';
$lang['blog_email_author_name'] = 'Autor';
$lang['blog_email_author_email'] = 'Adres e-mail autora';
$lang['blog_email_author_website'] = 'Strona WWW';
$lang['blog_email_author_ip'] = 'Adres IP autora';
$lang['blog_email_content'] = 'Zawartość wiadomości';
$lang['form_label_post_title'] = 'Tytuł postu';
$lang['form_label_comment'] = 'Komentarz';
$lang['form_label_comment_author_name'] = 'Autor komentarza';
$lang['form_label_is_spam'] = 'Jest apamem';
$lang['form_label_post_published'] = 'Post poublikowano';
$lang['form_label_date_submitted'] = 'Data wysłania';
$lang['form_label_ip_host'] = 'IP/Host';
$lang['form_label_replies'] = 'Odpowiedzi';
$lang['form_label_reply'] = 'Odpowiedź';
$lang['form_label_commentor'] = 'Skomentował';
$lang['form_label_reply_notify'] = 'Notify';
$lang['form_label_author_ip'] = 'Adres IP autora';


/*
|--------------------------------------------------------------------------
| Settings 
|--------------------------------------------------------------------------
*/
$lang['form_label_uri'] = 'URI';
$lang['form_label_theme_path'] = 'Theme Location';
$lang['form_label_theme_layout'] = 'Theme Layout';
$lang['form_label_theme_module'] = 'Theme module';
$lang['form_label_use_cache'] = 'Use Cache';
$lang['form_label_allow_comments'] = 'Zezwól komentować';
$lang['form_label_monitor_comments'] = 'Monitoruj komentarze';
$lang['form_label_use_captchas'] = 'Użyj CAPTCHA';
$lang['form_label_save_spam'] = 'Zapisz Spam';
$lang['form_label_akismet_api_key'] = 'Akismet Key';
//$lang['form_label_multiple_comment_submission_time_limit'] = 'Comment Submission Time Limit';
$lang['form_label_multiple_comment_submission_time_limit'] = 'Limit czasu zgłaszania komentarzy';
//$lang['form_label_multiple_comment_submission_time_limit_after_html'] = ' (in seconds)';
$lang['form_label_multiple_comment_submission_time_limit_after_html'] = ' (w sekundach)';
//$lang['form_label_comments_time_limit'] = 'Allow comments for how long';
$lang['form_label_comments_time_limit'] = 'Zezwalaj na komentarze przez jak długi czas';
//$lang['form_label_comments_time_limit_after_html'] = ' after post date (in days)';
$lang['form_label_comments_time_limit_after_html'] = ' po dacie postu (w dniach)';
$lang['form_label_cache_ttl'] = 'Cache Time to Live';
//$lang['form_label_asset_upload_path'] = 'Asset Upload Path';
$lang['form_label_asset_upload_path'] = 'Ścieżka przesyłania zasobów';
$lang['form_label_per_page'] = 'Na stronę';
$lang['form_label_page_title_separator'] = 'Separator tytułu strony';
//$lang['form_label_email_notify_comment_reply'] = 'E-mail notifications on comment replies';
$lang['form_label_email_notify_comment_reply'] = 'Powiadomienia e-mail o odpowiedziach na komentarze';


/*
|--------------------------------------------------------------------------
| Front-end
|--------------------------------------------------------------------------
*/
$lang['blog_blog'] = 'Blok';
$lang['blog_archives'] = 'Archiwa';
$lang['blog_categories'] = 'Kategorie';
$lang['blog_category_posts'] = '%1s Post(ów)';
$lang['blog_tags'] = 'Tagi';
$lang['blog_tags_posts'] = '%1s Post(ów)';
$lang['blog_publish_date_format'] = 'd F, Y';//'F d, Y';
$lang['blog_post_published'] = 'Opublikowany';
$lang['blog_post_published_by'] = 'przez';
$lang['blog_post_read_more'] = 'Zobacz więcej';
//$lang['blog_search'] = '%1s Search Result(s) Returned for “%2s”';
$lang['blog_search'] = 'Wynik(i) wyszukiwania %1s zwrócone dla “%2s”';
$lang['blog_pagination_all'] = 'Powrót do wszytskich postów';
$lang['blog_pagination_next'] = 'Następny';
$lang['blog_pagination_prev'] = 'Poprzedni';
$lang['blog_comment_heading'] = 'Komentarz';
$lang['blog_leave_comment_heading'] = 'Skomentuj';
$lang['blog_comments_off'] = 'Komentarze zostały wyłączone dla tego postu.';
$lang['blog_comment_thanks'] = 'Dziękuję za komentarz';
$lang['blog_comments_monitored'] = 'Komentarze do tego postu są monitorowane i będą publikowane po zatwierdzeniu przez autora.';
$lang['blog_share'] = 'Podziel się tym postem';
$lang['blog_related_posts'] = 'Powiązane posty';
$lang['blog_links'] = 'Polecane linki';
$lang['blog_about_author'] = 'O autorze';
$lang['blog_post_date_format'] = 'j F, Y';

