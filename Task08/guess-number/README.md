# Проект "Угадай число"

## Описание проекта

Проект включает разработку Single Page Application игры "Угадай число" (Guess Number), который с помощью REST API взаимодействует с базой данных SQLite на сервере для сохранения результатов игр. Пользователям предоставляется возможность просматривать историю игр и воспроизводить ранее сыгранные партии.

Цель игры - угадать загаданное компьютером число в заданном диапазоне. Игрок вводит число, и система сообщает, больше или меньше это число, чем загаданное. Игрок продолжает попытки угадывания, пока не угадает правильное число.

### Правила игры

- Игрок вводит диапазон чисел, в котором будет происходить угадывание.
- Компьютер загадывает случайное число в этом диапазоне.
- Игрок вводит свое число и получает подсказку, больше или меньше оно загаданного.
- Игрок продолжает угадывать, пока не назовет правильное число.
- Количество попыток фиксируется и сохраняется в базе данных.

### Требования

- Выбор диапазона чисел: Вводится пользователем перед началом игры.
- Сохранение данных: Вся информация об играх и попытках угадывания сохраняется в базе данных SQLite.
- Хранение данных:
  - Дата игры
  - Имя игрока
  - Диапазон чисел
  - Загаданное число
  - Исход игры
  - Запись попыток
- Режимы игры:
  - Новая игра
  - Просмотр списка сохраненных игр (в различном виде)
  - Просмотр справочной информации (помощи)
  
## Игровой процесс

### Доступные функции:
- Новая игра: Позволяет начать новую игру с заданными параметрами (максимальное число и количество попыток).
- Просмотр прошлых игр: Открывает список всех сохранённых игр. Чтобы посмотреть повтор конкретной игры, нажмите на кнопку "Просмотреть прошлые игры" и выберите интересующую игру из списка.
- Просмотр выигранных игр: Открывает список всех игр, которые были выиграны.
- Просмотр проигранных игр: Открывает список всех игр, которые были проиграны.
- Просмотр статистики: Показывает статистику по всем игрокам, включая количество побед и поражений, отсортированную по количеству побед.
- Повтор игры (Replay): Показывает пошаговую историю выбранной игры, включая информацию о каждом ходе (число и результат).

### Как играть:
1. Введите ваше имя в поле "Имя игрока".
2. Установите параметры игры (максимальное число и количество попыток).
3. Нажмите кнопку "Начать игру", чтобы начать новую игру.
4. Введите число в поле "Угадать" и нажмите кнопку "Угадать".
5. Цель игры — угадать число за указанное количество попыток.
6. Если введенное число меньше загаданного, вы увидите подсказку "Введенное число меньше загаданного".
7. Если введенное число больше загаданного, вы увидите подсказку "Введенное число больше загаданного".
8. Если вы угадали число, вы увидите сообщение "Вы угадали число!".
9. Если попытки закончились, вы увидите сообщение "Вы проиграли! Загаданное число было: [загаданное число]".

### Повтор игры:
Чтобы просмотреть повтор игры:
1. Нажмите кнопку "Просмотреть прошлые игры".
2. В появившемся списке выберите игру, кликнув на неё.
3. Повтор игры будет отображён в отдельном окне, где вы сможете увидеть все шаги и результат.

---

## Окружение и требования для запуска

1. **Браузер**:
   - Совместимость с современными браузерами, поддерживающими JavaScript и IndexedDB (Chrome, Firefox, Edge и другие).

2. **IndexedDB**:
   - Поддержка IndexedDB для хранения данных игры локально в браузере.

3. **PHP**:
   - Версия: 7.4 или выше.
   - Настройки в `php.ini`:
     - Включите SQLite (`extension=sqlite3`).
     - Убедитесь, что настройки отображения ошибок (`display_errors`) включены в режиме разработки.

4. **SQLite**:
   - Версия: 3.x.
   - Проверьте наличие прав записи в каталоге, где находятся файлы баз данных.

5. **Composer**:
   - Composer должен быть установлен глобально.
   - Используйте команду `composer` для управления зависимостями.
   - Для установки Composer следуйте [официальной документации](https://getcomposer.org/doc/00-intro.md).

---

## Установка и запуск проекта

1. **Склонируйте репозиторий**:
   ```bash
   git clone
   ```

2. **Перейдите в каталог проекта**:
   ```bash
   cd C:\Users\User\Desktop\Andpop\402_DBTech_Kolotuhin_DV\Task08
   ```

3. **Установите зависимости через Composer**:
   ```bash
   composer install
   ```

4. **Запуск сервера: Выполните команду для запуска локального сервера**:
   ```bash
   php -S localhost:3000 -t public
   ```

5. **Запуск игры: Заходим на созданный сервер**:
   - Обычно он выглядит так:
   ```bash
   http://localhost:3000/index.html
   ```
   - Или так:
   ```bash
   http://localhost:3000/