<x-layout>
    <x-section>
        <h1>Hewo One</h1>
    </x-section>
    <x-section>
        <h1>Hewo Two</h1>
    </x-section>
    <x-section>
        <h1>Hewo Three</h1>
    </x-section>

    <x-flash type="warning">Opps, something went wrong</x-flash>

    <x-flash class="mt-10">Yeeeeey</x-flash>

    <x-modal title="Deactivate account">
        <x-slot name="trigger">
            <button @click="on = true">Show Modal</button>
        </x-slot>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat magnam, quia excepturi ducimus tenetur nulla labore minus fugiat esse asperiores!
    </x-modal>
</x-layout>