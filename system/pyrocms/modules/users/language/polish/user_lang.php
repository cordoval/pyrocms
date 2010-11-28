<?php

$lang['user_register_header'] 	= 'Rejestracja';
$lang['user_register_step1'] 	= '<strong>Krok 1:</strong> Zarejestruj się';
$lang['user_register_step2'] 	= '<strong>Krok 2:</strong> Aktywuj konto';

$lang['user_login_header'] 		= 'Login';

// titles
$lang['user_add_title'] 		= 'Dodaj użytkownika';
$lang['user_inactive_title']	= 'Nieaktywni użytkownicy';
$lang['user_active_title'] 		= 'Aktywni użytkownicy';
$lang['user_registred_title'] 	= 'Zarejestrowani użytkownicy';

// labels
$lang['user_edit_title'] 		= 'Edytuj użytkownika "%s"';
$lang['user_details_label'] 	= 'Szczegóły';
$lang['user_first_name_label']	= 'Imię';
$lang['user_last_name_label']	= 'Nazwisko';
$lang['user_email_label'] 		= 'E-mail';
$lang['user_group_label'] 		= 'Grupa';
$lang['user_activate_label'] 	= 'Aktywuj';
$lang['user_password_label'] 	= 'Hasło';
$lang['user_password_confirm_label'] = 'Potwierdź hasło';
$lang['user_name_label'] 		= 'Nazwa';
$lang['user_joined_label'] 		= 'Utworzony';
$lang['user_last_visit_label'] 	= 'Ostatnia wizyta';
$lang['user_actions_label']		= 'Akcje';
$lang['user_never_label'] 		= 'Nigdy';
$lang['user_delete_label'] 		= 'Usuń';
$lang['user_edit_label'] 		= 'Edytuj';
$lang['user_view_label'] 		= 'Podgląd';

$lang['user_no_inactives'] = 'Nie ma nieaktywnych użytkowników.';
$lang['user_no_registred'] = 'Nie ma zarejestrowanych użytkowników.';

$lang['account_changes_saved'] = 'Zmiany konta zostały pomyślnie zapisane.';

$lang['indicates_required'] = 'Wskazuje wymagane pola';

// -- Registration / Activation / Reset Password ----------------------------------------------------------

$lang['user_register_title'] 			= 'Zarejestruj';
$lang['user_activate_account_title'] 	= 'Aktywuj konto';
$lang['user_activate_label'] 			= 'Aktywuj';
$lang['user_activated_account_title'] 	= 'Konto aktywowane';
$lang['user_reset_password_title'] 		= 'Resetuj hasło';
$lang['user_password_reset_title'] 		= 'Reset hasła';

$lang['user_full_name'] 	= 'Imię i nazwisko';
$lang['user_first_name'] 	= 'Imię';
$lang['user_last_name'] 	= 'Nazwisko';
$lang['user_email'] 		= 'E-mail';
$lang['user_confirm_email'] = 'Potwierdź E-mail';
$lang['user_password'] 		= 'Hasło';
$lang['user_confirm_password'] = 'Potwierdź hasło';

$lang['user_level']			= 'Rola użytkownika';
$lang['user_active']		= 'Aktywuj';
$lang['user_lang']			= 'Język';

$lang['user_activation_code'] = 'Kod aktywacyjny';

$lang['user_reset_password_link'] = 'Zapomniałeś hasła?';

$lang['user_activation_code_sent_notice'] = 'Na twoją skrzynkę pocztową został wysłany email z kodem aktywacyjnym.';
$lang['user_activation_by_admin_notice'] = 'Twoje rejestracja oczekuje na zatwierdzenie przez administratora.';

// -- Settings ---------------------------------------------------------------------------------------------

$lang['user_details_section'] = 'Nazwa';
$lang['user_password_section'] = 'Zmień hasło';
$lang['user_other_settings_section'] = 'Inne ustawienia';

$lang['user_settings_saved_success'] 	= 'Ustawienia Twojego konta zostały zapisane.';
$lang['user_settings_saved_error'] 		= 'Wystąpił błąd.';

// -- Buttons ----------------------------------------------------------------------------------------------

$lang['user_register_btn']		= 'Zarejestruj się';
$lang['user_activate_btn']		= 'Aktywuj';
$lang['user_reset_pass_btn']    = 'Resetuj hasło';
$lang['user_login_btn'] 		= 'Zaloguj się';
$lang['user_settings_btn'] 		= 'Zapisz ustawienia';

// -- Errors & Messages ------------------------------------------------------------------------------------

// Create
$lang['user_added_and_activated_success'] 		= 'Nowy użytkownik został utworzony i aktywowany.';
$lang['user_added_not_activated_success'] 		= 'Nowy użytkownik został utworzony i musi aktywować swoje konta.';

// Edit
$lang['user_edit_user_not_found_error'] = 'Użytkownik nie znaleziony.';
$lang['user_edit_success'] 				= 'Użytkownik zaktualizowany pomyślnie.';
$lang['user_edit_error'] 				= 'Wystąpił błąd podczas aktualizowania danych użytkownika.';

// Activate
$lang['user_activate_success'] 				= '%s użytkowników z %s pomyślnie aktywowało konto.';
$lang['user_activate_error'] 				= 'Najpierw musisz wybrać użytkowników.';

// Delete
$lang['user_delete_self_error'] 			= 'Nie możesz sam usunąć swojego konta!';
$lang['user_mass_delete_success'] 			= '%s użytkowników z %s skasowano pomyślnie.';
$lang['user_mass_delete_error'] 			= 'Najpierw musisz wybrać użytkowników.';

// Register
$lang['user_email_pass_missing'] = 'Pola email lub hasło nie zostały wypełnione.';
$lang['user_email_exists'] = 'Adres email, który wybrałeś jest już używany przez innego użytkownika.';
$lang['user_register_reasons'] = 'Dołącz do nas, aby uzyskać dostęp do treści zarezerwowanych tylko dla zarejestrowanych użytkowników. Oznacza tom ze Twoje osobiste ustawienia zostaną zapamiętane, więcej treści, mniej reklam.';


// Activation
$lang['user_activation_incorrect']   = 'Aktywacja nie powiodła się. Sprawdź dane i upewnij się, że klawisz CAPS LOCK nie jest wciśnięty.';
$lang['user_activated_message']   = 'Twoje konto zostało aktywowane, możesz teraz się zalogować na swoje konto.';


// Login
$lang['user_logged_in']							= 'You have logged in successfully.'; #translate
$lang['user_already_logged_in'] = 'Jesteś już zalogowany. Proszę się wylogować zanim spróbujesz ponowanie się zalogować.';
$lang['user_login_incorrect'] = 'Podany email i hasło nie pasują. Sprawdź dane i upewnij się, że klawisz CAPS LOCK nie jest wciśnięty.';
$lang['user_inactive']   = 'Konto do którego próbujesz uzyskać dostęp jest w tym momencie nieaktywne.<br />Sprawdź czy na Twojej skrzynce pocztowej nie ma wiadomości z instrukcjami jak aktywować konto - <em>wiadomość może znajdować się w folderze ze SPAMem</em>.';


// Logged Out
$lang['user_logged_out']   = 'Zostałeś wylogowany.';


// Forgot Pass
$lang['user_forgot_incorrect']   = "Nie znaleziono konta z takimi danymi.";

$lang['user_password_reset_message']   = "Twoje hasło zostało zresetowane. Powinieneś otrzymać wiadomość na skrzynkę pocztową w ciągu następnych 2 godzin. Jeżeli nie ma jej w skrzynce odbiorczej, mogła trafić do katalogu ze SPAMem.";

// Emails ----------------------------------------------------------------------------------------------------

// Activation
$lang['user_activation_email_subject'] = 'Wymagana aktywacja';
$lang['user_activation_email_body'] = 'Dziękujemy za aktywację Twojego konta na %s. Aby zalogować się na stronie, kliknij link poniżej:';


$lang['user_activated_email_subject'] = 'Aktywacja zakończona';
$lang['user_activated_email_content_line1'] = 'Dziękujemy za rejestrację na %s. Zanim Twoje konto będzie aktywne, dokończ proces rejestracji klikając w poniższy link:';
$lang['user_activated_email_content_line2'] = 'W przypadku gdy Twój klient poczy nie rozpoznaje linku poniżej, wpisz w swojej przeglądarce następujący adres URL i wpisz kod aktywacyjny:';

// Reset Pass
$lang['user_reset_pass_email_subject'] = 'Reset hasła';
$lang['user_reset_pass_email_body'] = 'Twoje hasło na stronie %s zostało zresetowane. Jeśli nie żądałeś zmiany hasły, skontaktuj się z nami wysyłąc email na adres %s postaramy się rozwiązać problem.';