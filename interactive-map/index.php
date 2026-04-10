<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интерактивная карта");
?>

<div class="container py-5">
    <h1 class="text-center mb-5">Карта Сервисов Минска</h1>
    <div style="width: 100%; height: 80vh; border: 1px solid #ccc; border-radius: 8px; overflow: hidden;">
        <iframe
            src="/minsk_services_map.html"
            style="width: 100%; height: 100%; border: none;"
            title="Карта Сервисов Минска"
        ></iframe>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>