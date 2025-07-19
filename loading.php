<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loading | Bea Cukai</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .fade-in-up {
      animation: fadeInUp 0.8s ease-out;
    }
  </style>
</head>
<body class="bg-[#002147] flex items-center justify-center h-screen text-white">
  <div class="flex flex-col items-center gap-6 fade-in-up">
    <img src="bea-cukai.png" alt="Logo Bea Cukai" class="w-28 h-28 animate-pulse drop-shadow-lg">
    <p class="text-xl font-medium text-white">Memuat Halaman... Mohon Tunggu</p>
    <div class="w-10 h-10 border-4 border-yellow-400 border-t-transparent rounded-full animate-spin"></div>
  </div>

  <script>
    // Redirect ke dashboard.php setelah 1.5 detik
    setTimeout(() => {
      window.location.href = 'dashboard.php';
    }, 1500);
  </script>
</body>
</html>