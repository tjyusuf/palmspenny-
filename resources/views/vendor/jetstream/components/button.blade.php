<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest  focus:outline-none  disabled:opacity-25 transition ease-in-out duration-150  border border-primary-light text-secondary bg-primary hover:bg-primary hover:text-gray-light active:bg-primary-dark']) }}>
    {{ $slot }}
</button>
