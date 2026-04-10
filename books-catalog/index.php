<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Электронный каталог");

$books = [
  [
    'id' => 'war-and-peace',
    'title' => 'Война и мир',
    'author' => 'Лев Толстой',
    'description' => 'Эпический роман, описывающий русское общество в эпоху наполеоновских войн.',
    'image' => 'https://images.unsplash.com/photo-1576487147775-50e8de637e6b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxvbGQlMjBib29rJTIwcnVzc2lhfGVufDF8fHx8MTc3NTMwMTI2NHww&ixlib=rb-4.1.0&q=80&w=1080',
    'category' => 'Роман',
    'year' => 1869,
  ],
  [
    'id' => 'crime-and-punishment',
    'title' => 'Преступление и наказание',
    'author' => 'Фёдор Достоевский',
    'description' => 'Философский роман о студенте, который решается на убийство.',
    'image' => 'https://images.unsplash.com/photo-1622324185735-39a40d1a4f1d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxkb3N0b2V2c2t5fGVufDF8fHx8MTc3NTA1NzE0NHww&ixlib=rb-4.1.0&q=80&w=1080',
    'category' => 'Роман',
    'year' => 1866,
  ],
  [
    'id' => 'anna-karenina',
    'title' => 'Анна Каренина',
    'author' => 'Лев Толстой',
    'description' => 'Трагическая история любви замужней женщины.',
    'image' => 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxib29rcyUyMGxvdmV8ZW58MXx8fHwxNzc1MDU3MTQ0fDA&ixlib=rb-4.1.0&q=80&w=1080',
    'category' => 'Роман',
    'year' => 1877,
  ],
    [
    'id' => 'eugene-onegin',
    'title' => 'Евгений Онегин',
    'author' => 'Александр Пушкин',
    'description' => 'Роман в стихах о жизни и любви русского дворянина.',
    'image' => 'https://images.unsplash.com/photo-1507842217343-583bb7270b66?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxwdXNoa2lufGVufDF8fHx8MTc3NTA1NzE0N3ww&ixlib=rb-4.1.0&q=80&w=1080',
    'category' => 'Поэзия',
    'year' => 1833,
  ],
  [
    'id' => 'the-master-and-margarita',
    'title' => 'Мастер и Маргарита',
    'author' => 'Михаил Булгаков',
    'description' => 'Сатирический роман, в котором переплетаются мистика и реальность.',
    'image' => 'https://images.unsplash.com/photo-1512820790803-83ca734da794?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxib29rJTIwc3RvcmV8ZW58MXx8fHwxNzc1MzAzMDExfDA&ixlib=rb-4.1.0&q=80&w=1080',
    'category' => 'Роман',
    'year' => 1967,
  ],
  [
    'id' => 'the-cherry-orchard',
    'title' => 'Вишнёвый сад',
    'author' => 'Антон Чехов',
    'description' => 'Пьеса о продаже имения и смене эпох.',
    'image' => 'https://images.unsplash.com/photo-1543002588-b9b65660ac6a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxjaGVraG92fGVufDF8fHx8MTc3NTMwMzA2MXww&ixlib=rb-4.1.0&q=80&w=1080',
    'category' => 'Драма',
    'year' => 1904,
  ],
];

$categories = [
  'Роман',
  'Поэзия',
  'Драма',
  'Фантастика',
  'Детектив',
  'История',
  'Психология',
  'Бизнес',
  'Экономика',
  'Технологии',
  'IT',
  'Наука',
];
?>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4">Электронный каталог книг</h1>
        <p class="lead text-muted">Найдите интересующую вас литературу</p>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card sticky-top">
                <div class="card-body">
                    <h5 class="card-title">Фильтры</h5>
                    <form>
                        <div class="form-group">
                            <label for="searchInput">Поиск</label>
                            <input type="text" class="form-control" id="searchInput" placeholder="Найти книгу...">
                        </div>
                        <div class="form-group">
                            <label>Жанры</label>
                            <? foreach ($categories as $category): ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="<?= $category ?>" id="<?= $category ?>">
                                    <label class="form-check-label" for="<?= $category ?>">
                                        <?= $category ?>
                                    </label>
                                </div>
                            <? endforeach; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="row">
                <? foreach ($books as $book): ?>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="<?= $book['image'] ?>" class="card-img-top" alt="<?= $book['title'] ?>">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?= $book['title'] ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?= $book['author'] ?></h6>
                                <p class="card-text flex-grow-1"><?= $book['description'] ?></p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <a href="#" class="btn btn-primary">Заказать</a>
                                    <div class="text-right">
                                        <small class="text-muted"><?= $book['category'] ?></small><br>
                                        <small class="text-muted"><?= $book['year'] ?></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>