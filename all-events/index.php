<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мероприятия");
?>

<div class="container py-5">
    <h1 class="mb-4 text-center">Предстоящие мероприятия</h1>
    <p class="text-center text-muted mb-5">Присоединяйтесь к нашим лекциям, мастер-классам и встречам</p>

    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-100 shadow-sm border-0 rounded-lg">
                <img src="https://images.unsplash.com/photo-1763462711669-263800467e26?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsaWJyYXJ5JTIwZXZlbnQlMjBjb21tdW5pdHl8ZW58MXx8fHwxNzc1MDU2MzY2fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" class="card-img-top" alt="Встреча с автором">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge badge-primary">Литература</span>
                        <div class="text-right">
                            <div class="font-weight-bold">15 Апр</div>
                            <small class="text-muted">18:00</small>
                        </div>
                    </div>
                    <h5 class="card-title">Встреча с автором</h5>
                    <p class="card-text">Лекция и автограф-сессия с современным писателем</p>
                    <p class="card-text"><small class="text-muted">Конференц-зал</small></p>
                    <p class="card-text"><small class="text-muted">45 участников</small></p>
                    <a href="#" class="btn btn-primary btn-block">Зарегистрироваться</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 shadow-sm border-0 rounded-lg">
                <img src="https://images.unsplash.com/photo-1763462711669-263800467e26?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsaWJyYXJ5JTIwZXZlbnQlMjBjb21tdW5pdHl8ZW58MXx8fHwxNzc1MDU2MzY2fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" class="card-img-top" alt="Детский читательский клуб">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge badge-danger">Для детей</span>
                        <div class="text-right">
                            <div class="font-weight-bold">22 Апр</div>
                            <small class="text-muted">15:00</small>
                        </div>
                    </div>
                    <h5 class="card-title">Детский читательский клуб</h5>
                    <p class="card-text">Интерактивное чтение и творческие мастер-классы</p>
                    <p class="card-text"><small class="text-muted">Детская зона</small></p>
                    <p class="card-text"><small class="text-muted">30 участников</small></p>
                    <a href="#" class="btn btn-primary btn-block">Зарегистрироваться</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 shadow-sm border-0 rounded-lg">
                <img src="https://images.unsplash.com/photo-1763462711669-263800467e26?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxsaWJyYXJ5JTIwZXZlbnQlMjBjb21tdW5pdHl8ZW58MXx8fHwxNzc1MDU2MzY2fDA&ixlib=rb-4.1.0&q=80&w=1080&utm_source=figma&utm_medium=referral" class="card-img-top" alt="Цифровые технологии в образовании">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge badge-success">Технологии</span>
                        <div class="text-right">
                            <div class="font-weight-bold">28 Апр</div>
                            <small class="text-muted">19:00</small>
                        </div>
                    </div>
                    <h5 class="card-title">Цифровые технологии в образовании</h5>
                    <p class="card-text">Практический семинар по использованию AI в обучении</p>
                    <p class="card-text"><small class="text-muted">Медиа-зал</small></p>
                    <p class="card-text"><small class="text-muted">60 участников</small></p>
                    <a href="#" class="btn btn-primary btn-block">Зарегистрироваться</a>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron text-center mt-5">
        <h1 class="display-4">Не пропустите наши события</h1>
        <p class="lead">Подпишитесь на рассылку и получайте уведомления о новых мероприятиях</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Подписаться</a>
    </div>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>