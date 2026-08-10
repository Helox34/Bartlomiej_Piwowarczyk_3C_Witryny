# Poprawka — przykładowy projekt

Instrukcje uruchomienia lokalnie (XAMPP):

1. Skopiuj folder `poprawka_sierpien` do `htdocs` w instalacji XAMPP (jeśli już nie jest tam).
2. Uruchom w XAMPP Panel `Apache` i `MySQL`.
3. Otwórz phpMyAdmin (`http://localhost/phpmyadmin`) i zaimportuj plik `init.sql`, lub uruchom polecenie MySQL:

```sql
SOURCE init.sql;
```

4. Otwórz przeglądarkę: `http://localhost/poprawka_sierpien/` i przetestuj formularz.

Uwagi:
- Domyślne ustawienia XAMPP: użytkownik `root`, puste hasło. Jeśli masz inne dane, edytuj `config.php`.
- Projekt zawiera podstawową walidację klient-/serwer-side i zapis do bazy używając PDO (prepared statements).
