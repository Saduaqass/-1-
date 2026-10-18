<?php
// 1. Құрылғылар туралы мәліметтер (PHP массиві)
$devices = [
    [
        "id" => 1,
        "name" => "AMD Ryzen 7 7800X3D",
        "category" => "Процессоры",
        "price" => 189990,
        "image" => "https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?q=80&w=600&auto=format&fit=crop",
        "description" => "Игровой процессор нового поколения с технологией 3D V-Cache, обеспечивающий невероятную производительность в играх и тяжелых задачах.",
        "specifications" => [
            "Ядра" => "8",
            "Потоки" => "16",
            "Базовая частота" => "4.2 GHz",
            "TDP" => "120W"
        ]
    ],
    [
        "id" => 2,
        "name" => "NVIDIA GeForce RTX 4070 SUPER",
        "category" => "Видеокарты",
        "price" => 349990,
        "image" => "https://images.unsplash.com/photo-1591488320449-011701bb6704?q=80&w=600&auto=format&fit=crop",
        "description" => "Мощная видеокарта для игр в 1440p на максимальных настройках с поддержкой DLSS 3 и трассировки лучей.",
        "specifications" => [
            "Видеопамять" => "12 GB GDDR6X",
            "Шина памяти" => "192-bit",
            "CUDA ядра" => "7168",
            "Рекомендуемый БП" => "650W"
        ]
    ],
    [
        "id" => 3,
        "name" => "Samsung 990 PRO 1TB",
        "category" => "SSD",
        "price" => 69990,
        "image" => "https://images.unsplash.com/photo-1597849182310-2131bb03a272?q=80&w=600&auto=format&fit=crop",
        "description" => "Сверхбыстрый NVMe M.2 SSD накопитель с интерфейсом PCIe 4.0 для максимальной скорости загрузки ОС и игр.",
        "specifications" => [
            "Форм-фактор" => "M.2 2280",
            "Скорость чтения" => "до 7450 МБ/с",
            "Скорость записи" => "до 6900 МБ/с",
            "Ресурс (TBW)" => "600 TB"
        ]
    ],
    [
        "id" => 4,
        "name" => "Corsair Vengeance 32GB DDR5",
        "category" => "Оперативная память",
        "price" => 75990,
        "image" => "https://images.unsplash.com/photo-1562975267-313dcf507a2c?q=80&w=600&auto=format&fit=crop",
        "description" => "Высокоскоростная оперативная память стандарта DDR5, обеспечивающая стабильную работу и отличный разгонный потенциал.",
        "specifications" => [
            "Объем" => "32 GB (2x16GB)",
            "Тип памяти" => "DDR5",
            "Частота" => "6000 MHz",
            "Тайминги" => "CL36"
        ]
    ],
    [
        "id" => 5,
        "name" => "ASUS TUF Gaming B650-PLUS",
        "category" => "Материнские платы",
        "price" => 105990,
        "image" => "https://images.unsplash.com/photo-1518770660439-4636190af475?q=80&w=600&auto=format&fit=crop",
        "description" => "Надежная материнская плата формата ATX с усиленной подсистемой питания и современными интерфейсами.",
        "specifications" => [
            "Сокет" => "AM5",
            "Чипсет" => "AMD B650",
            "Форм-фактор" => "ATX",
            "Слоты M.2" => "3"
        ]
    ],
    [
        "id" => 6,
        "name" => "ASUS ROG Swift 27”",
        "category" => "Мониторы",
        "price" => 259990,
        "image" => "https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?q=80&w=600&auto=format&fit=crop",
        "description" => "Профессиональный игровой монитор с высокой частотой обновления и точной цветопередачей.",
        "specifications" => [
            "Диагональ" => "27 дюймов",
            "Разрешение" => "2560x1440 (2K)",
            "Частота" => "240 Hz",
            "Матрица" => "Fast IPS"
        ]
    ],
    [
        "id" => 7,
        "name" => "Logitech G Pro X Superlight 2",
        "category" => "Мыши",
        "price" => 85990,
        "image" => "https://images.unsplash.com/photo-1595225476474-87563907a212?q=80&w=600&auto=format&fit=crop",
        "description" => "Сверхлегкая беспроводная игровая мышь с топовым сенсором для киберспорта.",
        "specifications" => [
            "Сенсор" => "HERO 2",
            "Вес" => "60 грамм",
            "Подключение" => "Беспроводное",
            "Автономность" => "До 95 часов"
        ]
    ],
    [
        "id" => 8,
        "name" => "Logitech G Pro X TKL",
        "category" => "Клавиатуры",
        "price" => 95990,
        "image" => "https://images.unsplash.com/photo-1595044426077-d36d9236d54a?q=80&w=600&auto=format&fit=crop",
        "description" => "Компактная механическая клавиатура турнирного уровня с возможностью горячей замены переключателей.",
        "specifications" => [
            "Форм-фактор" => "TKL (80%)",
            "Переключатели" => "Тактильные",
            "Подсветка" => "RGB Lightsync",
            "Подключение" => "Беспроводное"
        ]
    ],
    [
        "id" => 9,
        "name" => "HyperX Cloud III",
        "category" => "Наушники",
        "price" => 54990,
        "image" => "https://images.unsplash.com/photo-1618366712010-f4ae9c647dcb?q=80&w=600&auto=format&fit=crop",
        "description" => "Удобная игровая гарнитура с отличным позиционированием звука и качественным микрофоном.",
        "specifications" => [
            "Тип" => "Закрытые",
            "Подключение" => "Проводное (3.5мм / USB)",
            "Диаметр динамиков" => "53 мм",
            "Микрофон" => "Съемный"
        ]
    ],
    [
        "id" => 10,
        "name" => "Corsair RM850x",
        "category" => "Блоки питания",
        "price" => 78990,
        "image" => "https://images.unsplash.com/photo-1587202372634-32705e3bf49c?q=80&w=600&auto=format&fit=crop",
        "description" => "Надежный модульный блок питания с сертификатом 80 PLUS Gold и тихим вентилятором.",
        "specifications" => [
            "Мощность" => "850W",
            "Сертификат" => "80 PLUS Gold",
            "Модульность" => "Полностью модульный",
            "Вентилятор" => "135 мм"
        ]
    ]
];

// PHP мүмкіндіктері: массив арқылы бірегей категорияларды жинау (if, in_array қолдану)
$categories = [];
foreach ($devices as $device) {
    if (!in_array($device['category'], $categories)) {
        $categories[] = $device['category'];
    }
}

// PHP мүмкіндіктері: GET параметрін тексеру (isset)
$initialSearch = '';
if (isset($_GET['search'])) {
    $initialSearch = htmlspecialchars($_GET['search']);
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Компьютер құрылғылары</title>
    <style>
        /* CSS: Минимализм, заманауи дизайн */
        :root {
            --bg-color: #fbfbfd;
            --text-color: #1d1d1f;
            --card-bg: #ffffff;
            --accent-color: #0066cc;
            --accent-hover: #0077ed;
            --border-color: #e5e5ea;
            --secondary-text: #86868b;
        }
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.5;
        }
        
        /* Header */
        header {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 1px solid var(--border-color);
        }
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 16px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-weight: 600;
            font-size: 1.2rem;
            text-decoration: none;
            color: var(--text-color);
            letter-spacing: -0.5px;
        }
        .nav-links {
            display: flex;
            gap: 24px;
        }
        .nav-links a {
            text-decoration: none;
            color: var(--text-color);
            font-size: 0.85rem;
            transition: color 0.3s;
        }
        .nav-links a:hover {
            color: var(--accent-color);
        }

        /* Hero */
        .hero {
            text-align: center;
            padding: 80px 24px;
            background: #fff;
            border-bottom: 1px solid var(--border-color);
        }
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            letter-spacing: -1.5px;
            margin-bottom: 12px;
        }
        .hero p {
            font-size: 1.25rem;
            color: var(--secondary-text);
            margin-bottom: 32px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .hero-img {
            max-width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 24px;
            margin-bottom: 32px;
        }
        .btn {
            background-color: var(--accent-color);
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 980px;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s, transform 0.1s;
        }
        .btn:hover {
            background-color: var(--accent-hover);
        }
        .btn:active {
            transform: scale(0.98);
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 24px;
        }
        .section-title {
            text-align: center;
            font-size: 2.2rem;
            font-weight: 600;
            letter-spacing: -0.5px;
            margin-bottom: 40px;
        }

        /* Filters */
        .filters-wrapper {
            background: #fff;
            padding: 24px;
            border-radius: 20px;
            margin-bottom: 40px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.03);
            border: 1px solid var(--border-color);
        }
        .filters-top {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }
        .search-input {
            flex: 2;
            min-width: 250px;
            padding: 14px 16px;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s;
        }
        .search-input:focus {
            border-color: var(--accent-color);
        }
        .price-filter {
            display: flex;
            gap: 10px;
            flex: 1;
            min-width: 280px;
        }
        .price-input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            outline: none;
        }
        .btn-apply {
            padding: 0 24px;
            background: var(--text-color);
            color: #fff;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 500;
            transition: background 0.2s;
        }
        .btn-apply:hover {
            background: #000;
        }
        .categories-filter {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        .cat-btn {
            padding: 8px 16px;
            border: 1px solid var(--border-color);
            background: #fff;
            border-radius: 980px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.2s;
            color: var(--text-color);
        }
        .cat-btn.active, .cat-btn:hover {
            background: var(--text-color);
            color: #fff;
            border-color: var(--text-color);
        }

        /* Catalog Grid */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 24px;
        }
        .card {
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.02);
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            border: 1px solid var(--border-color);
        }
        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.06);
        }
        .card-img-wrap {
            height: 220px;
            overflow: hidden;
            background: #f5f5f7;
        }
        .card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        .card:hover .card-img {
            transform: scale(1.03);
        }
        .card-content {
            padding: 24px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        .card-category {
            font-size: 0.75rem;
            color: var(--secondary-text);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            font-weight: 600;
        }
        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 12px;
            line-height: 1.2;
        }
        .card-desc {
            font-size: 0.9rem;
            color: var(--secondary-text);
            margin-bottom: 20px;
            flex-grow: 1;
        }
        .card-specs-preview {
            font-size: 0.85rem;
            color: var(--text-color);
            margin-bottom: 16px;
            background: #f5f5f7;
            padding: 8px 12px;
            border-radius: 8px;
        }
        .card-price {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 16px;
        }
        .card-btn {
            width: 100%;
            text-align: center;
            background: #f5f5f7;
            color: var(--text-color);
            border-radius: 12px;
            padding: 10px;
        }
        .card-btn:hover {
            background: var(--border-color);
        }

        /* Modal */
        .modal-overlay {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.5);
            backdrop-filter: blur(8px);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s;
        }
        .modal-overlay.active {
            display: flex;
            opacity: 1;
        }
        .modal-content {
            background: #fff;
            border-radius: 24px;
            width: 100%;
            max-width: 900px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            display: flex;
            flex-direction: column;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
            transform: translateY(20px);
            transition: transform 0.3s;
        }
        .modal-overlay.active .modal-content {
            transform: translateY(0);
        }
        @media(min-width: 768px) {
            .modal-content {
                flex-direction: row;
            }
        }
        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            background: rgba(0,0,0,0.05);
            border: none;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            z-index: 10;
            transition: background 0.2s;
        }
        .modal-close:hover {
            background: rgba(0,0,0,0.1);
        }
        .modal-img-wrap {
            flex: 1;
            background: #fbfbfd;
            display: flex;
            align-items: center;
        }
        .modal-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            min-height: 300px;
        }
        .modal-info {
            flex: 1.2;
            padding: 40px;
        }
        .modal-category {
            font-size: 0.8rem;
            color: var(--secondary-text);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            font-weight: 600;
        }
        .modal-title {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 16px;
        }
        .modal-desc {
            font-size: 1rem;
            color: var(--secondary-text);
            margin-bottom: 24px;
        }
        .modal-price {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 30px;
            color: var(--text-color);
        }
        .modal-specs {
            background: #fbfbfd;
            border-radius: 16px;
            padding: 20px;
            border: 1px solid var(--border-color);
        }
        .modal-specs div {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid var(--border-color);
            font-size: 0.95rem;
        }
        .modal-specs div:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        .modal-specs span:first-child {
            color: var(--secondary-text);
        }
        .modal-specs span:last-child {
            font-weight: 500;
            text-align: right;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 40px 24px;
            background: #f5f5f7;
            color: var(--secondary-text);
            font-size: 0.9rem;
            margin-top: 40px;
        }
        
        /* Mobile adjustments */
        @media(max-width: 768px) {
            .nav-links {
                display: none;
            }
            .hero h1 {
                font-size: 2.2rem;
            }
            .modal-info {
                padding: 24px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="nav-container">
            <a href="#" class="logo">Компьютер құрылғылары</a>
            <nav class="nav-links">
                <a href="#">Главная</a>
                <a href="#catalog">Каталог</a>
                <a href="#catalog">Категории</a>
                <a href="#">О нас</a>
                <a href="#">Контакты</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Компьютер құрылғылары</h1>
        <p>Барлық қажетті компьютерлік құрылғылар бір жерде. Үздік өнімділік пен сапаны бізбен бірге таңдаңыз.</p>
        <img src="https://images.unsplash.com/photo-1587831990711-23ca6441447b?q=80&w=1200&auto=format&fit=crop" alt="Hero Setup" class="hero-img">
        <br>
        <a href="#catalog" class="btn">Смотреть каталог</a>
    </section>

    <!-- Main Container -->
    <main class="container" id="catalog">
        <h2 class="section-title">Каталог устройств</h2>

        <!-- Filters Section -->
        <div class="filters-wrapper">
            <div class="filters-top">
                <input type="text" id="search-input" class="search-input" placeholder="Поиск устройства..." value="<?= $initialSearch ?>">
                <div class="price-filter">
                    <input type="number" id="min-price" class="price-input" placeholder="Минимальная цена">
                    <input type="number" id="max-price" class="price-input" placeholder="Максимальная цена">
                    <button id="apply-price" class="btn-apply">Применить</button>
                </div>
            </div>
            
            <div class="categories-filter">
                <button class="cat-btn active" data-cat="Все">Все</button>
                <!-- PHP foreach арқылы категорияларды шығару -->
                <?php foreach ($categories as $cat): ?>
                    <button class="cat-btn" data-cat="<?= htmlspecialchars($cat) ?>"><?= htmlspecialchars($cat) ?></button>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Catalog Grid -->
        <div class="grid" id="catalog-grid">
            <!-- PHP foreach арқылы 10 құрылғыны шығару -->
            <?php foreach ($devices as $device): ?>
                <?php 
                    // Қысқаша спецификацияларды алу (тек алғашқы 2)
                    $previewSpecs = array_slice($device['specifications'], 0, 2);
                    $specString = [];
                    foreach ($previewSpecs as $val) {
                        $specString[] = $val;
                    }
                ?>
                <div class="card device-card" 
                     data-id="<?= $device['id'] ?>" 
                     data-category="<?= htmlspecialchars($device['category']) ?>"
                     data-price="<?= $device['price'] ?>"
                     data-name="<?= htmlspecialchars(mb_strtolower($device['name'])) ?>"
                     data-desc="<?= htmlspecialchars(mb_strtolower($device['description'])) ?>">
                     
                    <div class="card-img-wrap">
                        <img src="<?= htmlspecialchars($device['image']) ?>" alt="<?= htmlspecialchars($device['name']) ?>" class="card-img">
                    </div>
                    
                    <div class="card-content">
                        <div class="card-category"><?= htmlspecialchars($device['category']) ?></div>
                        <h3 class="card-title"><?= htmlspecialchars($device['name']) ?></h3>
                        
                        <div class="card-specs-preview">
                            <?= htmlspecialchars(implode(' • ', $specString)) ?>
                        </div>
                        
                        <p class="card-desc"><?= htmlspecialchars($device['description']) ?></p>
                        <!-- PHP number_format қолдану -->
                        <div class="card-price"><?= number_format($device['price'], 0, '', ' ') ?> ₸</div>
                        
                        <button class="btn card-btn" onclick="openModal(<?= $device['id'] ?>)">Подробнее</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- Modal Window -->
    <div class="modal-overlay" id="device-modal">
        <div class="modal-content">
            <button class="modal-close" onclick="closeModal()">✕</button>
            <div class="modal-img-wrap">
                <img src="" alt="" class="modal-img" id="modal-img">
            </div>
            <div class="modal-info">
                <div class="modal-category" id="modal-category"></div>
                <h2 class="modal-title" id="modal-title"></h2>
                <p class="modal-desc" id="modal-desc"></p>
                <div class="modal-price" id="modal-price"></div>
                
                <h3 style="font-size: 1.1rem; margin-bottom: 12px;">Характеристики:</h3>
                <div class="modal-specs" id="modal-specs">
                    <!-- JS арқылы толтырылады -->
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>Компьютер құрылғылары</p>
        <p>Учебный проект на PHP</p>
        <p>© 2026 Компьютер құрылғылары</p>
    </footer>

    <!-- JavaScript -->
    <script>
        // PHP массивін JavaScript объектісіне айналдыру (json_encode)
        const devicesData = <?= json_encode($devices) ?>;

        // Modal басқару функциялары
        function openModal(id) {
            const device = devicesData.find(d => d.id === id);
            if (!device) return;

            document.getElementById('modal-img').src = device.image;
            document.getElementById('modal-title').textContent = device.name;
            document.getElementById('modal-category').textContent = device.category;
            document.getElementById('modal-desc').textContent = device.description;
            
            // Бағаны форматтау
            const formattedPrice = new Intl.NumberFormat('ru-RU').format(device.price) + ' ₸';
            document.getElementById('modal-price').textContent = formattedPrice;

            // Сипаттамаларды (specifications) шығару
            const specsContainer = document.getElementById('modal-specs');
            specsContainer.innerHTML = '';
            
            for (const [key, value] of Object.entries(device.specifications)) {
                const row = document.createElement('div');
                const keySpan = document.createElement('span');
                keySpan.textContent = key;
                const valSpan = document.createElement('span');
                valSpan.textContent = value;
                
                row.appendChild(keySpan);
                row.appendChild(valSpan);
                specsContainer.appendChild(row);
            }

            document.getElementById('device-modal').classList.add('active');
        }

        function closeModal() {
            document.getElementById('device-modal').classList.remove('active');
        }

        // Фильтрация логикасы
        const searchInput = document.getElementById('search-input');
        const minPriceInput = document.getElementById('min-price');
        const maxPriceInput = document.getElementById('max-price');
        const applyPriceBtn = document.getElementById('apply-price');
        const catBtns = document.querySelectorAll('.cat-btn');
        const cards = document.querySelectorAll('.device-card');

        let currentCategory = 'Все';

        function filterCards() {
            const query = searchInput.value.toLowerCase();
            const minPrice = parseInt(minPriceInput.value) || 0;
            const maxPrice = parseInt(maxPriceInput.value) || Infinity;

            cards.forEach(card => {
                const category = card.getAttribute('data-category');
                const price = parseInt(card.getAttribute('data-price'));
                const name = card.getAttribute('data-name');
                const desc = card.getAttribute('data-desc');

                const matchesCategory = (currentCategory === 'Все' || category === currentCategory);
                const matchesSearch = name.includes(query) || category.toLowerCase().includes(query) || desc.includes(query);
                const matchesPrice = price >= minPrice && price <= maxPrice;

                if (matchesCategory && matchesSearch && matchesPrice) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Категориялар батырмаларын басу оқиғалары
        catBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                catBtns.forEach(b => b.classList.remove('active'));
                e.target.classList.add('active');
                currentCategory = e.target.getAttribute('data-cat');
                filterCards();
            });
        });

        // Іздеу және баға бойынша оқиғалар
        searchInput.addEventListener('input', filterCards);
        applyPriceBtn.addEventListener('click', filterCards);

        // Егер GET параметрі арқылы іздеу сөзі берілген болса, бірден фильтрді іске қосу
        if (searchInput.value !== '') {
            filterCards();
        }

        // Модальды терезені сыртынан басқанда жабу
        window.addEventListener('click', (e) => {
            const modal = document.getElementById('device-modal');
            if (e.target === modal) {
                closeModal();
            }
        });
    </script>
</body>
</html>