<button {{ $attributes->merge(['type' => 'submit', 'class' => ' bg-[#5a4d3d] px-7 py-2 text-white text-lg rounded-md']) }}>
    {{ $slot }}
</button>
