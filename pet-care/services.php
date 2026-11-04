<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Care Services</title>
    <?php require __DIR__ . '/includes/bootstrapcdnlinks.php'; ?>
</head>
<body class="bg-light">
    <?php require __DIR__ . '/includes/navigation.php'; ?>

    <main class="container py-5">
        <h1>Pet Care Services</h1>
        <p>Choose a service to begin a care request.</p>

        <div class="row g-4 mt-2">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title h4">Dog Walking</h2>
                        <p class="card-text">A neighborhood walk with exercise and fresh water.</p>
                        <a class="btn btn-primary mt-auto" href="booking.php?service=dog-walk">Request a walk</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title h4">Drop-In Visit</h2>
                        <p class="card-text">A short home visit for feeding, water, or play.</p>
                        <a class="btn btn-primary mt-auto" href="booking.php?service=drop-in">Request a visit</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h2 class="card-title h4">Pet Sitting</h2>
                        <p class="card-text">Extended care when a pet owner is away.</p>
                        <a class="btn btn-primary mt-auto" href="booking.php?service=pet-sitting">Request pet sitting</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
