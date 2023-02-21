<script setup>
import LogoKeySoft from "@/Components/LogoKeySoft.vue";
</script>
<template>
    <div class="w-full">
        <div class="w-11/12 mx-auto mt-14">
            <div class="grid grid-cols-3 justify-items-center mx-auto">
                <p class="text-gblue text-xl font-semibold uppercase">Competenze</p>
                <p class="text-gblue text-xl font-semibold uppercase">Mission</p>
                <p class="text-gblue text-xl font-semibold uppercase">Servizi</p>
            </div>
            <LogoKeySoft />
            <div class="flex w-full mt-28">
                <p class="w-5/6 text-2xl font-black text-center uppercase mx-auto text-gblue">
                    Keysoft è una società multinazionale che offre servizi di programmazione «high-end», gestione infrastruttura IT, cybersecurity e cripto programming a costi competitivi.
                    Operiamo da geografie low cost con un vasto team di programmatori e project managers.
                </p>
            </div>
            <div class="flex w-full mt-20">
                <button class="bg-gblue text-white px-2 py-1 w-1/6 mx-auto text-xl font-semibold uppercase"> contattaci</button>
            </div>
        </div>
    </div>
</template>
