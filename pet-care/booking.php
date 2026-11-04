<?php
$services = [
    'dog-walk' => 'Dog Walking',
    'drop-in' => 'Drop-In Visit',
    'pet-sitting' => 'Pet Sitting',
];

// Read the selected service from $_GET.
// Use isset() to redirect when the key is missing or not in $services.
$serviceKey = $_GET["service"] ?? "";

// When the request method is POST, read the owner and pet names.
if(!isset($services[$serviceKey])) {
    header("Location: services.php");
    exit;
} 
else {
    $serviceName = $services[$serviceKey];
}
//echo $serviceKey;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request Pet Care</title>
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php'; ?>
</head>
<body class="bg-light">
    <?php require __DIR__ . '/includes/navigation.php'; ?>

    <main class="container py-4" style="max-width: 760px;">
        <h1>Request Pet Care</h1>

        <!-- Display the selected service name with htmlspecialchars(). -->
        <?= htmlspecialchars($serviceName)?>
        
        <!-- On POST, display a designed request summary. -->
        <?php  if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <p><?= $_POST["owner_name"] ?? ""; ?></p>
            <p><?= $_POST["pet_name"] ?? ""; ?></p>
            <a class="btn btn-secondary" href="booking.php?service=<?= htmlspecialchars($serviceKey)?>">Back to form</a>
        <!-- On GET, wrap these Bootstrap controls in a working <form>. -->
        <?php elseif ($_SERVER['REQUEST_METHOD'] === 'GET'): ?>
        <form action="booking.php?service=<?= htmlspecialchars($serviceKey) ?>" method="post">
            <div class="card shadow-sm border-0 mt-4">
                <div class="card-body p-4">
                    <div class="mb-3">
                        <label class="form-label" for="owner_name">Owner name</label>
                        <input class="form-control" type="text" id="owner_name" name="owner_name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="pet_name">Pet name</label>
                        <input class="form-control" type="text" id="pet_name" name="pet_name">
                    </div>

                    <button class="btn btn-primary" type="submit">Send care request</button>
                </div>
            </div>
        </form>

        <?php endif; ?>
    </main>
</body>
</html>
