<button
        @click="toggleTheme()"
        class="flex items-center justify-center transition">
    <svg class="w-7 h-7 text-indigo-600 transition hover:text-indigo-800 dark:text-indigo-300 dark:hover:text-indigo-600"
         x-show="!darkMode"
         style="display: none;"
         fill="none"
         stroke="currentColor"
         viewBox="0 0 24 24"
         xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
    </svg>
    <svg class="w-7 h-7 text-indigo-600 transition hover:text-indigo-800 dark:text-indigo-300 dark:hover:text-indigo-600"
         x-show="darkMode"
         style="display: none;"
         fill="none"
         stroke="currentColor"
         viewBox="0 0 24 24"
         xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
    </svg>
</button>
