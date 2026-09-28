<?php
// Функция: учет продажи товаров
function showSale() {
    echo "=== Учет продажи товаров ===\n";
    echo "1. Создать расходную накладную\n";
    echo "2. Просмотреть список продаж\n";
    echo "3. Вернуться в главное меню\n";
    echo "Выберите действие: ";
    $choice = trim(fgets(STDIN));
    switch ($choice) {
        case '1': echo "Создание расходной накладной...\n"; break;
        case '2': echo "Список продаж...\n"; break;
        case '3': return;
        default: echo "Неверный выбор.\n";
    }
}
showSale();