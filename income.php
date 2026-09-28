<?php
// Функция: учет прихода товаров
function showIncome() {
    echo "=== Учет прихода товаров ===\n";
    echo "1. Создать приходную накладную\n";
    echo "2. Просмотреть список приходов\n";
    echo "3. Вернуться в главное меню\n";
    echo "Выберите действие: ";
    $choice = trim(fgets(STDIN));
    switch ($choice) {
        case '1': echo "Создание приходной накладной...\n"; break;
        case '2': echo "Список приходов...\n"; break;
        case '3': return;
        default: echo "Неверный выбор.\n";
    }
}
showIncome();