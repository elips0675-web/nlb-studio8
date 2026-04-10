<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowHead();?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?
    Asset::getInstance()->addString('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/styles.css");
    ?>
</head>
<body>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">NLB Studio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "top_menu",
                        array(
                            "ROOT_MENU_TYPE" => "top",
                            "MAX_LEVEL" => "1",
                        ),
                        false
                    );?>
                </div>
            </div>
        </nav>
    </header>

    <?if($APPLICATION->GetCurPage(false) === '/'):?>
    <section class="hero-section" style="background-image: url('https://images.unsplash.com/photo-1764406807567-a24faaaad034?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtb2Rlcm4lMjBsaWJyYXJ5JTIwaW50ZXJpb3IlMjBhcmNoaXRlY3R1cmV8ZW58MXx8fHwxNzc0OTcxMDY2fDA&ixlib=rb-4.1.0&q=80&w=1080');">
        <div class="hero-content">
            <h1>Мир знаний нового поколения</h1>
            <p>Современная библиотека с более чем 500,000 книг, цифровыми ресурсами и инновационными пространствами.</p>
            <a href="/services/" class="btn btn-primary">Начать исследование</a>
        </div>
    </section>
    <?endif;?>

    <main role="main">
        <div class="container py-4">
