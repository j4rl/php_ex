<?php
declare(strict_types=1);

session_start();

$config = require __DIR__ . '/config.php';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli(
    $config['server'],
    $config['user'],
    $config['pass'],
    $config['db']
);
$conn->set_charset($config['charset']);

$error = "";

function h(?string $value): string
{
    return htmlspecialchars($value ?? "", ENT_QUOTES, "UTF-8");
}

function csrfToken(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['csrf_token'];
}

function hasValidCsrfToken(): bool
{
    return isset($_POST['csrf_token'], $_SESSION['csrf_token'])
        && hash_equals($_SESSION['csrf_token'], (string) $_POST['csrf_token']);
}

function fixUrl(string $url): ?string
{
    $url = trim($url);

    if ($url === "") {
        return null;
    }

    if (parse_url($url, PHP_URL_SCHEME) === null) {
        $url = "https://" . $url;
    }

    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        return null;
    }

    $scheme = strtolower((string) parse_url($url, PHP_URL_SCHEME));
    if (!in_array($scheme, ["http", "https"], true)) {
        return null;
    }

    return $url;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!hasValidCsrfToken()) {
        $error = "Ogiltig formulärtoken. Ladda om sidan och försök igen.";
    } elseif (isset($_POST['delete_id'])) {
        $id = filter_input(INPUT_POST, 'delete_id', FILTER_VALIDATE_INT);

        if ($id !== false && $id !== null) {
            $stmt = $conn->prepare("DELETE FROM linx WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }

        header("Location: linx.php");
        exit;
    } elseif (isset($_POST['btn'])) {
        $url = fixUrl((string) ($_POST['url'] ?? ""));
        $description = trim((string) ($_POST['description'] ?? ""));

        if ($url === null) {
            $error = "Ange en giltig http- eller https-URL.";
        } elseif ($description === "") {
            $error = "Ange en beskrivning.";
        } else {
            $stmt = $conn->prepare("INSERT INTO linx (url, description) VALUES (?, ?)");
            $stmt->bind_param("ss", $url, $description);
            $stmt->execute();

            header("Location: linx.php");
            exit;
        }
    }
}

$result = $conn->query("SELECT id, url, description, date_stored FROM linx ORDER BY date_stored DESC");
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Länkar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="linx.php" method="post">
        <input type="hidden" name="csrf_token" value="<?= h(csrfToken()) ?>">
        <input type="text" name="url" placeholder="URL" maxlength="2048" required>
        <input type="text" name="description" placeholder="Beskrivning" maxlength="255" required>
        <input type="submit" name="btn" value="Spara" title="Lägger till länk i databasen">
        <?php if ($error !== ""): ?>
            <p class="error"><?= h($error) ?></p>
        <?php endif; ?>
    </form>
    <div class="container">
        <h1>Länkar</h1>
        <?php if ($result->num_rows === 0): ?>
            <p>Inga länkar inlagda</p>
        <?php else: ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="line">
                    <a href="<?= h($row['url']) ?>" title="Gå till <?= h($row['url']) ?>">
                        <?= h($row['description']) ?>
                    </a>
                    <i>inlagd <?= h($row['date_stored']) ?></i>
                    <form class="delete-form" action="linx.php" method="post">
                        <input type="hidden" name="csrf_token" value="<?= h(csrfToken()) ?>">
                        <input type="hidden" name="delete_id" value="<?= h($row['id']) ?>">
                        <button class="trash-button" type="submit" title="Ta bort <?= h($row['description']) ?>" aria-label="Ta bort <?= h($row['description']) ?>">
                            <i class="gg-trash"></i>
                        </button>
                    </form>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</body>
</html>
