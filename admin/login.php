<?php
// Page settings
$pageTitle = 'Admin Login';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> | Stillness Aroma</title>

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Libraries -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Admin CSS -->
    <link href="../assets/css/admin.css" rel="stylesheet">
    
</head>
<body class="admin-body">
    
    <main class="flex flex-col items-center justify-center min-h-screen p-4">
        <!-- Logo Header -->
        <div class="flex items-center gap-3 mb-8" data-aos="fade-down">
            <i class="fas fa-coffee text-2xl text-[var(--admin-accent)]"></i>
            <h1 class="text-2xl font-bold">Stillness Aroma Admin</h1>
        </div>

        <!-- Login Card -->
        <div class="admin-card w-full max-w-md" data-aos="fade-up">
            <form class="settings-form p-8 space-y-6">
                <div class="text-center">
                    <h2 class="text-xl font-bold">Admin Login</h2>
                    <p class="text-sm text-[var(--admin-text-secondary)] mt-1">Welcome back. Please enter your credentials.</p>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1 text-[var(--admin-text-secondary)]">Username or Email</label>
                    <input type="email" required class="form-input" />
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1 text-[var(--admin-text-secondary)]">Password</label>
                    <input type="password" required class="form-input" />
                </div>

                <div class="flex items-center justify-end text-sm">
                    <a href="#" class="font-medium text-[var(--admin-text-secondary)] hover:text-[var(--admin-accent)] hover:underline">
                        Forgot Password?
                    </a>
                </div>

                <div>
                    <button type="submit" class="btn-primary w-full">Login</button>
                </div>
            </form>
        </div>
    </main>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({ once: true, duration: 600 });
    </script>
</body>
</html>