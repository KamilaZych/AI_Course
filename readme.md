
# Aplikacja do nauki języka angielskiego
Aplikacja do nauki języka angielskiego ma na celu pomoc użytkownikom w szybkim i efektywnym uczeniu się słownictwa. Dzięki aplikacji użytkownicy w dowolnym miejscu i czasie korzystając ze swojego komputera lub smartfonu będą mogli poszerzać swoją wiedzę z zakresu wybranego języka. 

Jest to aplikacja internetowa napisana w języku PHP z wykorzystaniem bazy danych MySQL, aplikacja zawiera 3 rodzaje użytkowników: zalogowany użytkownik, gość i administrator. Każdy z użytkowników ma swój zakres możliwości. Uwierzytelnianie odbywa się za pomocą haseł, których zaszyfrowane wersje są przechowywane w naszej bazie danych. 

## Wymagania systemowe
* wersja apache'a Apache/2.4.41 (Ubuntu)
* wersja PHP'a: 8.2
* wersja MySQL libmysql - mysqlnd 7.4.3-4ubuntu2.18

## Instalacja
1. stwórz plik config
2. Jeżeli istnieje to sprawdzamy, czy zawiera odpowiednie dane
3. Jeżeli plik config zawiera odpowiednie dane zostajemy w index.php-> oznacza brak potrzeby instalacji
4. Sprawdzamy, czy plik jest writable
5. Jeżeli nie dostajemy komunikat: zmien uprawnienia
6. Uruchamiamy instal.php, pobieramy dane od użytkownika
7. Tworzymy strukturę bazy i dane 
8. Pobieramy dane administratora
9. Dodajemy administratora do bazy
10. Instalacja zakończona. Przekierowanie do cms.



## Autor

* **Natalia Hańczka** 
* *nr  album: 404352*
* *nhanczka*

* **Kamila Zych** 
* *nr  album: 398900*
* *kamila_z*

* **Paulina Swaczyna** 
* *nr  album: 398891*
* *swaczyna*

## Wykorzystane zewnętrzne biblioteki

* Bootstrap v4.1.3 
* jquery-1.12.4
* jquery-1.11.0