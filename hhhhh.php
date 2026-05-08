<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Алая река - Лиз Мур | Триллеры | Купить | Эксмо</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg bg-white fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="picturs/eksmo-tm.jpg" alt="logo" width="150" height="80" class="me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link text-dark fw-semibold" href="#">Книги</a></li>
                    <li class="nav-item"><a class="nav-link text-dark fw-semibold" href="#">Новинки</a></li>
                    <li class="nav-item"><a class="nav-link text-dark fw-semibold" href="#">Бестселлеры</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark fw-semibold" href="#" role="button" data-bs-toggle="dropdown">Жанры</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Детектив</a></li>
                            <li><a class="dropdown-item" href="#">Фэнтези</a></li>
                            <li><a class="dropdown-item" href="#">Роман</a></li>
                            <li><a class="dropdown-item" href="#">Нон-фикшн</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link text-dark fw-semibold" href="#">Авторы</a></li>
                </ul>
                <form class="d-flex" role="search">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Поиск книг...">
                        <button class="btn btn-outline-secondary" type="submit">Найти</button>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <main class="container" style="padding-top: 5rem;"> 
        <nav aria-label="breadcrumb" class="mt-4 pt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Главная</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Книги</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Зарубежная проза</a></li>
                <li class="breadcrumb-item active" aria-current="page">Алая река</li>
            </ol>
        </nav>

        <div class="row g-5">
            <div class=" col-lg-4">
                <img src="picturs\oblozhka.jpg" class="img-fluid rounded shadow-sm w-100">
                <div class="mt-3 d-flex gap-2">
                    <span class="badge bg-secondary bg-opacity-10 text-dark border">Хит</span>
                    <span class="badge bg-secondary bg-opacity-10 text-dark border">Бестселлер</span>
                </div>
            </div>
            <div class="col-md-7 col-lg-8">
                <h1 class="display-6 fw-bold">Алая река</h1>
                <div class="d-flex flex-wrap gap-3 mt-2 mb-3 text-secondary">
                    <span>Автор: <strong class="text-dark">Анна Грей</strong></span>
                    <span>Год: 2024</span>
                    <span>384 стр.</span>
                    <span>Переводчик: И. Иванова</span>
                </div>
                <div class="mb-3">
                    <span class="badge bg-secondary me-1">триллер</span>
                    <span class="badge bg-secondary me-1">мистика</span>
                    <span class="badge bg-secondary">детектив</span>
                </div>
                <div class="mb-2">
                    <span class="ms-2 text-secondary">4.7 (124 оценки)</span>
                </div>
                <p class="lead">«Алая река» — леденящий кровь психологический триллер о тайнах маленького городка, где каждая река хранит чьи-то секреты. Когда в водах Алой реки находят тело девушки, местный детектив понимает: прошлое не умрёт никогда.</p>
                <div class="mt-4">
                    <span class="fs-1 fw-bold text-danger">650 ₽</span>
                    <span class="text-secondary text-decoration-line-through ms-2 fs-5">890 ₽</span>
                    <div class="mt-3 d-flex flex-wrap gap-3">
                        <button class="btn btn-danger btn-lg">Купить</button>
                        <button class="btn btn-outline-danger btn-lg">В избранное</button>
                        <button class="btn btn-outline-secondary btn-lg">Читать фрагмент</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <ul class="nav nav-tabs" id="bookTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc" type="button" role="tab">Описание</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab">Отзывы <span class="badge bg-secondary rounded-pill ms-1">23</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab">Характеристики</button>
                    </li>
                </ul>
                <div class="tab-content p-4 border border-top-0 rounded-bottom bg-white shadow-sm">
                    <div class="tab-pane fade show active" id="desc" role="tabpanel">
                        <p><strong>«Алая река»</strong> — новый роман Анны Грей, автора бестселлера «Тени старого дома». Действие разворачивается в провинциальном городке Редвуд, где вот уже несколько десятилетий ходят легенды о проклятой реке. Главная героиня — детектив Лиза Морозова — возвращается в родные места, чтобы расследовать странную смерть подростка. По мере погружения в дело она понимает, что все жители что-то скрывают, а река помнит каждое преступление.</p>
                        <p>Книга наполнена атмосферой напряжения, неожиданными поворотами и глубокой психологией персонажей. Идеально для поклонников Ю Несбё и Таны Френч.</p>
                        <p class="fst-italic mt-3">«Напоминает, что даже самая тихая вода может скрывать смертельную опасность» — <strong>BookTrib</strong></p>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="border-bottom pb-3 mb-3">
                            <div class="d-flex justify-content-between">
                                <strong>Елена К.</strong>
                                <div>★★★★★</div>
                            </div>
                            <p class="mt-2">Прочитала на одном дыхании!</p>
                            <small class="text-secondary">15 марта 2025</small>
                        </div>
                        <div class="border-bottom pb-3 mb-3">
                            <div class="d-flex justify-content-between">
                                <strong>Дмитрий С.</strong>
                                <div>★★★★☆</div>
                            </div>
                            <p>Хорошая книга</p>
                            <small class="text-secondary">2 апреля 2025</small>
                        </div>
                        <button class="btn btn-outline-danger">Написать отзыв</button>
                    </div>
                    <div class="tab-pane fade" id="details" role="tabpanel">
                        <ul class="list-unstyled">
                            <li><strong>Издательство:</strong> Эксмо</li>
                            <li><strong>Серия:</strong> Мастера саспенса</li>
                            <li><strong>ISBN:</strong> 978-5-04-194051-4</li>
                            <li><strong>Переплет:</strong> Твердый</li>
                            <li><strong>Формат:</strong> 130x200 мм</li>
                            <li><strong>Тираж:</strong> 5000 экз.</li>
                            <li><strong>Возрастные ограничения:</strong> 18+</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-5">
            <h3 class="fw-bold mb-4">Похожие книги</h3>
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Тени прошлого</h6>
                            <p class="card-text small text-secondary">М. Петрова</p>
                            <span class="fw-bold">540 ₽</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Ложь</h6>
                            <p class="card-text small text-secondary">К. Грей</p>
                            <span class="fw-bold">475 ₽</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Берег скелетов</h6>
                            <p class="card-text small text-secondary">Д. Хокинс</p>
                            <span class="fw-bold">699 ₽</span>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Чёрная вода</h6>
                            <p class="card-text small text-secondary">А. Рид</p>
                            <span class="fw-bold">590 ₽</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php

        require_once 'db.php';

        $journals = $pdo->query("SELECT id, name FROM journals ORDER BY name")->fetchAll();
        $authors  = $pdo->query("SELECT id, full_name FROM authors ORDER BY full_name")->fetchAll();
        $topics   = $pdo->query("SELECT id, name FROM topics ORDER BY name")->fetchAll();

        $where = [];
        $params = [];

        if (!empty($_GET['title'])) {
            $where[] = "a.title LIKE ?";
            $params[] = "%" . $_GET['title'] . "%";
        }
        if (!empty($_GET['author_id'])) {
            $where[] = "a.author_id = ?";
            $params[] = $_GET['author_id'];
        }
        if (!empty($_GET['journal_id'])) {
            $where[] = "a.journal_id = ?";
            $params[] = $_GET['journal_id'];
        }
        if (!empty($_GET['topic_id'])) {
            $where[] = "a.topic_id = ?";
            $params[] = $_GET['topic_id'];
        }
        if (!empty($_GET['year'])) {
            $where[] = "a.year = ?";
            $params[] = $_GET['year'];
        }

        $sql = "SELECT 
                    a.id,
                    a.title,
                    a.image_path,
                    a.content,
                    a.year,
                    j.name AS journal_name,
                    au.full_name AS author_name,
                    t.name AS topic_name
                FROM articles a
                JOIN journals j ON a.journal_id = j.id
                JOIN authors au ON a.author_id = au.id
                JOIN topics t ON a.topic_id = t.id";

        if (count($where) > 0) {
            $sql .= " WHERE " . implode(" AND ", $where);
        }

        $sql .= " ORDER BY a.year DESC, a.title ASC";

        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);
        $articles = $stmt->fetchAll();
        ?>

            <div class="card shadow-sm mb-4 mt-5">
                <div class="card-body">
                    <form method="GET">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label small fw-bold">Название статьи</label>
                                <input type="text" name="title" class="form-control" placeholder="Поиск по названию" value="<?= htmlspecialchars($_GET['title'] ?? '') ?>">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small fw-bold">Автор</label>
                                <select name="author_id" class="form-select">
                                    <option value="">Все авторы</option>
                                    <?php foreach ($authors as $author): ?>
                                        <option value="<?= $author['id'] ?>" <?= (isset($_GET['author_id']) && $_GET['author_id'] == $author['id']) ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($author['full_name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small fw-bold">Журнал</label>
                                <select name="journal_id" class="form-select">
                                    <option value="">Все журналы</option>
                                    <?php foreach ($journals as $journal): ?>
                                        <option value="<?= $journal['id'] ?>" <?= (isset($_GET['journal_id']) && $_GET['journal_id'] == $journal['id']) ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($journal['name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small fw-bold">Тема</label>
                                <select name="topic_id" class="form-select">
                                    <option value="">Все темы</option>
                                    <?php foreach ($topics as $topic): ?>
                                        <option value="<?= $topic['id'] ?>" <?= (isset($_GET['topic_id']) && $_GET['topic_id'] == $topic['id']) ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($topic['name']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small fw-bold">Год</label>
                                <input type="number" name="year" class="form-control" placeholder="Год" value="<?= htmlspecialchars($_GET['year'] ?? '') ?>">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 d-flex gap-2">
                                <button type="submit" class="btn btn-danger">Найти</button>
                                <a href="?" class="btn btn-secondary">Сброс</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th>Картинка</th>
                                    <th>Название</th>
                                    <th>Журнал</th>
                                    <th>Автор</th>
                                    <th>Тема</th>
                                    <th>Год</th>
                                    <th>Текст статьи (кратко)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($articles) > 0): ?>
                                    <?php foreach ($articles as $article): ?>
                                        <tr>
                                            <td class="align-middle">
                                                <?php if (!empty($article['image_path']) && file_exists('images/' . $article['image_path'])): ?>
                                                    <img src="images/<?= htmlspecialchars($article['image_path']) ?>" class="img-thumbnail" style="max-width: 80px; max-height: 60px;" alt="Анонс">
                                                <?php else: ?>
                                                    <span class="text-muted small">нет фото</span>
                                                <?php endif; ?>
                                            </td>
                                            <td class="align-middle"><strong><?= htmlspecialchars($article['title']) ?></strong></td>
                                            <td class="align-middle"><?= htmlspecialchars($article['journal_name']) ?></td>
                                            <td class="align-middle"><?= htmlspecialchars($article['author_name']) ?></td>
                                            <td class="align-middle"><?= htmlspecialchars($article['topic_name']) ?></td>
                                            <td class="align-middle"><?= $article['year'] ?></td>
                                            <td class="align-middle"><?= mb_substr(htmlspecialchars($article['content']), 0, 100) ?>…</td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="7" class="text-center text-muted py-4">
                                            Статей не найдено. Измените параметры фильтра.
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="bg-dark text-white-50 mt-5 pt-4 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="text-white">Эксмо</h5>
                    <p class="small">Крупнейшее издательство России. Более 20 000 книг. Классика, детективы, фэнтези, нон-фикшн.</p>
                </div>
                <div class="col-md-2">
                    <h6 class="text-white">Покупателям</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#" class="text-white-50 text-decoration-none">Доставка</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Оплата</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Возврат</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h6 class="text-white">О нас</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#" class="text-white-50 text-decoration-none">Издательство</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Авторам</a></li>
                        <li><a href="#" class="text-white-50 text-decoration-none">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="text-white">Мы в соцсетях</h6>
                    <i class="bi bi-telegram fs-4 me-3"></i>
                    <i class="bi bi-vk fs-4 me-3"></i>
                    <i class="bi bi-youtube fs-4"></i>
                </div>
            </div>
            <hr class="bg-secondary mt-4">
            <p class="text-center small mb-0">© 2025 Издательство Эксмо. Все права защищены.</p>
        </div>
    </footer>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>