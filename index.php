<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Segera Hadir | Dalam Pengerjaan</title>

    <!-- Config tailwind harus duluan -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        darkMode: 'class',
      };
    </script>

    <!-- Cek preferensi dark mode, TARUH DI SINI, setelah tailwind -->
    <script>
      if (
        localStorage.getItem('theme') === 'dark' ||
        (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
      ) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap"
      rel="stylesheet"
    />

    <style>
      body {
        font-family: 'Inter', sans-serif;
      }
    </style>
  </head>
  <body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 transition-colors duration-300">
    <button
      id="theme-toggle"
      type="button"
      class="fixed top-5 right-5 text-gray-500 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5"
    >
      <svg
        id="theme-toggle-dark-icon"
        class="w-5 h-5 hidden"
        fill="currentColor"
        viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
        ></path>
      </svg>
      <svg
        id="theme-toggle-light-icon"
        class="w-5 h-5 hidden"
        fill="currentColor"
        viewBox="0 0 20 20"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.707.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 5.05A1 1 0 003.636 6.464l.707.707a1 1 0 001.414-1.414l-.707-.707zM3 11a1 1 0 100-2H2a1 1 0 100 2h1zM6.464 16.364l-.707.707a1 1 0 001.414 1.414l.707-.707a1 1 0 00-1.414-1.414z"
        ></path>
      </svg>
    </button>

    <main class="min-h-screen flex items-center justify-center px-4">
      <div class="text-center w-full max-w-lg mx-auto">
        <div class="mb-6">
          <svg
            class="w-24 h-24 mx-auto text-blue-500 dark:text-blue-400"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z"
            />
          </svg>
        </div>

        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mb-4">
          Situs Sedang Dalam Pengerjaan
        </h1>

        <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 mb-8">
          Kami sedang bekerja keras membangun website ini dan memberikan Anda
          pengalaman terbaik. Kami akan segera kembali dengan tampilan baru.
          Terima kasih atas kesabaran Anda!
        </p>

        <div class="space-x-4">
          <a
            href="#"
            class="inline-block bg-blue-500 hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition-colors duration-300"
          >
            Hubungi Kami
          </a>
        </div>
      </div>
    </main>

    <script>
      const htmlElement = document.documentElement;
      const themeToggleBtn = document.getElementById('theme-toggle');
      const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
      const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

      function setInitialIcon() {
        if (htmlElement.classList.contains('dark')) {
          themeToggleLightIcon.classList.remove('hidden');
          themeToggleDarkIcon.classList.add('hidden');
        } else {
          themeToggleDarkIcon.classList.remove('hidden');
          themeToggleLightIcon.classList.add('hidden');
        }
      }

      setInitialIcon();

      themeToggleBtn.addEventListener('click', () => {
        htmlElement.classList.toggle('dark');

        if (htmlElement.classList.contains('dark')) {
          localStorage.setItem('theme', 'dark');
        } else {
          localStorage.setItem('theme', 'light');
        }

        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');
      });
    </script>
  </body>
</html>