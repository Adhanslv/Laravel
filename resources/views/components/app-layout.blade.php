<head>
  <link rel="icon"
    href="https://logos-world.net/wp-content/uploads/2023/12/F1-Logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  @vite('resources/css/app.css')

</head>
<title>
  @isset($title)
    {{ $title }}
  @else
    Dashboard
  @endisset
</title>

<body class="bg-black text-white">
  <div class="px-[3vw]">
    {{ $slot }}
  </div>
  <style>
    * {
      font-family: "Poppins", sans-serif;
    }
  </style>
  <script src="https://cdn.tailwindcss.com"></script>

</body>
