<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="bg-black text-white">
  <x-navbar />
  <x-app-layout title="Users">
    <div class="mb-12 flex items-center justify-between whitespace-nowrap">
      <h1 class="font-semibold uppercase">User Table</h1>
      {{-- <button class="rounded-md bg-gray-700/80 px-3 py-2.5" as="a">Add New
        User</button> --}}
      <x-modal />
    </div>
    <div class="overflow-x-auto">
      <table class="w-[100%] border-collapse">
        <thead>
          <tr class="whitespace-nowrap border-b border-white/20">
            <th class="w-[50px] p-4 text-left">#</th>
            <th class="p-4 text-left">Name</th>
            <th class="p-4 text-left">Email</th>
            <th class="p-4 text-left">Created at</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr class="even:bg-gray-800/45 border-b border-white/20">
              <td class="p-4 text-left">
                {{ $loop->iteration }}</td>
              <td class="p-4 text-left">
                {{ $user->name }}
              </td>
              <td class="p-4 text-left">
                {{ $user->email }}
              </td>
              <td class="p-4 text-left">
                {{ $user->created_at->format('d M Y') }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </x-app-layout>
</body>

</html>
