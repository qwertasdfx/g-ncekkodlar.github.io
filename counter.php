<?php
// counter.txt dosyasını açar ve içeriğini okur
$counterFile = "counter.txt";

// Dosya yoksa oluştur ve 0 ile başlat
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, 0);
}

// Dosyadan mevcut ziyaretçi sayısını okur
$counter = file_get_contents($counterFile);

// Sayacı bir artırır
$counter++;

// Güncellenmiş ziyaretçi sayısını dosyaya yazar
file_put_contents($counterFile, $counter);

// Güncel ziyaretçi sayısını döndürür
echo $counter;
?>
