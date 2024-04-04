<script src="//unpkg.com/alpinejs" defer></script>
<link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
<div x-data="{ open: true }" class="">
  <button @click="open = ! open" class="rounded-md bg-gray-700/80 px-3 py-2.5">
    Add New User
  </button>
  <div x-show="open" x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-90"
    class="absolute right-0 z-50 flex max-h-full w-full items-center justify-center gap-4 rounded-sm">
    <div class="relative max-h-full w-full max-w-md p-4">
      <div class="relative rounded-sm bg-gray-800">
        <div
          class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            Create New User
          </h3>
          <button type="button" @click="open = ! open"
            class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-toggle="crud-modal">
            <svg class="h-3 w-3" aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 14 14">
              <path stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="2"
                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>
        <form class="p-4 md:p-5" autocomplete="off">
          <div class="mb-4 grid grid-cols-2 gap-4">
            <div class="col-span-2">
              <x-modal.label for="name"><i class="ti ti-user text-2xl"></i>
                Name
              </x-modal.label>
              <x-modal.input id="name" placeholder="Username"
                type="text" required />
            </div>
            <div class="col-span-2">
              <x-modal.label for="email"><i class="ti ti-mail text-2xl"></i>
                Email</x-modal.label>
              <x-modal.input id="email" placeholder="Email" type="email"
                required />
            </div>
            <div class="col-span-2">
              <x-modal.label for="password"><i
                  class="ti ti-brand-samsungpass text-2xl"></i>Password</x-modal.label>
              <x-modal.input id="password" placeholder="Password"
                type="password" required />
            </div>
          </div>
          <button type="submit"
            class="inline-flex items-center rounded-lg bg-gray-700 px-5 py-2.5 text-center text-sm font-medium text-white">
            Add new User
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
