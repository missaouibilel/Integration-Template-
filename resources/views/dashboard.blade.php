<x-app-layout>
    <x-slot name="header">

        <section id="topbar" class="d-flex align-items-center fixed-top ">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
            <h2>
                {{ __('Commune Houmt Souk Djerba') }}
            </h2>
            </div>
            <div class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
            <i class="bi bi-phone d-flex align-items-center"><a href="tel:+21675650020"><span>+216 75 650 020</span></a></i>
            <i class="bi bi-at ms-4 d-none d-lg-flex align-items-center"><a href="mailto:contact@commune-houmtsouk.gov.tn"><span>contact@commune-houmtsouk.gov.tn</span></a></i>

            </div>
        </section>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
