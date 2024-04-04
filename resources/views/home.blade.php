<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <x-app-layout title="Dashboard"></x-app-layout>
</head>

<body class="text-white">
  <x-navbar />
  <x-app-layout>
    <section class="[welcome-to-homepage] grid grid-cols-2 items-center gap-2">
      <div class="col-span-2 md:col-span-1">
        <h1 class="text-6xl font-bold">Selamat Datang di Website Saya.</h1>
        <p class="mt-5 text-xl text-gray-500">Tingkatkan level keahlian Anda
          melalui screencast dan artikel yang
          mendalam. Pelajari beragam topik penting seperti <span
            class="text-white">Laravel, React, Next.js,
            Tailwind CSS</span>, dan banyak lagi.</p>
        <div class="mt-5 flex gap-2">
          <button
            class="rounded-md bg-white px-8 py-2.5 text-black outline-none">Temukan
            Seri</button>
          <button
            class="rounded-md border border-gray-600 bg-gray-800 px-8 py-2.5 text-white outline-none">Baca
            Artikel</button>
        </div>
      </div>
      <div class="col-span-2 md:col-span-1">
        <img
          src="https://assets-global.website-files.com/5e2d970a86f417102b21abd2/64494eaad131714ac84349b1_How%20to%20become%20a%20computer%20programmer.png"
          alt="fotonya"
          class="h-fit w-full rounded-md object-contain outline-none">
      </div>
    </section>
  </x-app-layout>
</body>

</html>
