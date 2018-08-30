<?php
    //$carBrand = Mersedes;
    //$carBrand = BMW;
    //$carBrand = Audi;
    //$carBrand = Volkswagen;
    //$carBrand = Opel;
    //$carBrand = Trabant;
    //$carBrand = Man;
    //$carBrand = Maybach;
    //$carBrand = Porsche;
    //$carBrand = Smart;

$listBucs = array("451° по Фаренгейту", "Шантарам", "1984", "Мастер и Маргарита", "Три товарища", "Портрет Дориана Грея", "Вино из одуванчиков", "Цветы для Элджернона", "Над пропастью во ржи", "Маленький принц", "Анна Каренина", "Сто лет одиночества", "Тень горы", "Атлант расправил плечи");

echo "<strong>Список книг:</strong>";
echo "<ol>";

for ($i = 0; $i < count($listBucs); $i++) {
    
    echo "<li> $listBucs[$i] </li>";
}

echo "</ol>";

?>