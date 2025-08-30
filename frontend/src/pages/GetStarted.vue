<template>
  <div class="min-h-screen bg-gray-900 text-gray-100 font-sans">
    <!-- Hero section -->
    <div class="bg-gradient-to-b from-blue-800 via-purple-800 to-purple-900 text-center py-16 px-4">
      <div class="max-w-4xl mx-auto">
        <div class="inline-flex items-center justify-center gap-3 mb-4">
          <div class="bg-orange-500 text-black rounded-full w-10 h-10 flex items-center justify-center text-xl">🌙</div>
          <h1 class="text-3xl md:text-4xl font-bold">WP Dark Mode</h1>
        </div>
        <p class="text-gray-300 text-lg mb-6">Welcome to the #1 dark mode plugin for WordPress.<br>Let's get started!</p>
        <div class="flex flex-wrap justify-center gap-3">
          <button class="bg-white text-gray-900 font-semibold px-5 py-2 rounded-lg shadow-md hover:shadow-lg transition">Get in touch</button>
          <a href="#" class="px-4 py-2 rounded-lg border border-gray-400 hover:bg-gray-800 transition">Gutenberg</a>
          <a href="#" class="px-4 py-2 rounded-lg border border-gray-400 hover:bg-gray-800 transition">Elementor</a>
          <a href="#" class="px-4 py-2 rounded-lg border border-gray-400 hover:bg-gray-800 transition">FAQ</a>
          <a href="#" class="px-4 py-2 rounded-lg border border-gray-400 hover:bg-gray-800 transition">Free vs Ultimate</a>
        </div>
      </div>
    </div>

    <!-- Content cards -->
    <div class="max-w-6xl mx-auto py-12 px-4 grid md:grid-cols-2 gap-6">
      <!-- Documentation -->
      <div class="bg-gray-800 rounded-lg p-6 hover:shadow-lg transition">
        <div class="flex items-center gap-4 mb-4">
          <div class="bg-blue-600 w-12 h-12 flex items-center justify-center rounded-md text-white">📄</div>
          <h2 class="text-xl font-semibold">Documentations</h2>
        </div>
        <p class="text-gray-300 mb-4">If you get stuck while exploring a feature, feel free to check our docs for a step-by-step guide.</p>
        <a href="#" class="text-blue-500 font-semibold hover:underline">Open Docs →</a>
      </div>

      <!-- Tutorial -->
      <div class="bg-gray-800 rounded-lg p-6 hover:shadow-lg transition">
        <div class="flex items-center gap-4 mb-4">
          <div class="bg-blue-600 w-12 h-12 flex items-center justify-center rounded-md text-white">🎥</div>
          <h2 class="text-xl font-semibold">Tutorial</h2>
        </div>
        <p class="text-gray-300 mb-4">Check the WP Dark Mode playlist to become an expert dark mode user.</p>
        <a href="#" class="text-blue-500 font-semibold hover:underline">Watch Videos →</a>
      </div>

      <!-- Customer Support -->
      <div class="bg-gray-800 rounded-lg p-6 hover:shadow-lg transition">
        <div class="flex items-center gap-4 mb-4">
          <div class="bg-pink-600 w-12 h-12 flex items-center justify-center rounded-md text-white">💖</div>
          <h2 class="text-xl font-semibold">Customer Support</h2>
        </div>
        <p class="text-gray-300 mb-4">Our support team is here 24/7 to answer your queries and resolve your issues. Don't hesitate to reach out to us!</p>
        <a href="#" class="text-blue-500 font-semibold hover:underline">Contact Support →</a>
      </div>

      <!-- Facebook Community -->
      <div class="bg-gray-800 rounded-lg p-6 hover:shadow-lg transition">
        <div class="flex items-center gap-4 mb-4">
          <div class="bg-green-600 w-12 h-12 flex items-center justify-center rounded-md text-white">👥</div>
          <h2 class="text-xl font-semibold">Facebook Community</h2>
        </div>
        <p class="text-gray-300 mb-4">Did you know that there is a Facebook community for dark mode users like you? Feel free to join to be involved in the discussion.</p>
        <a href="#" class="text-blue-500 font-semibold hover:underline">Join Community →</a>
      </div>
    </div>
  </div>
</template>

<script setup>
</script>
