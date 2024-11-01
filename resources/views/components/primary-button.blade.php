<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => 'inline-flex items-center
     px-4 py-2 bg-orange-800 dark:bg-orange-700 border border-transparent rounded-md font-semibold
      text-xs text-white dark:text-white-800 uppercase tracking-widest hover:bg-orange-700 dark:hover:bg-orange-500
       focus:bg-orange-700 active:orange-gray-900  focus:outline-none
       focus:ring-2 transition
       ease-in-out duration-150',
    ]) }}>
    {{ $slot }}
</button>
