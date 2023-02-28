<script setup>
import LogoKeySoft from "@/Components/LogoKeySoftGrande.vue";
import { Link } from "@inertiajs/vue3";
import { onMounted, ref } from "@vue/runtime-core";
import { Slide } from 'vue3-burger-menu';

const logoPicola = ref('./brands/KEYSOFT_Logo blu.svg')
const w = window.innerWidth - 200;

const prop = defineProps({
    contact: Boolean,
})
const emit = defineEmits(['update:contattaci']);
const contattaci = ref(false)
const contact = () => {
    contattaci.value === false ? contattaci.value = true : contattaci.value = false

    emit('update:contact', contattaci.value)
}

onMounted(() => {
    Link, LogoKeySoft, Slide
})
</script>
<template>
    <div class="w-full">
        <div class="relative w-11/12 mx-auto mt-0 mb-14">
            <LogoKeySoft />
            <div class="flex w-full mt-28">
                <p class="w-11/12 mx-auto text-xl font-black text-center uppercase lg:w-4/6 text-gblue">
                    Keysoft è una società multinazionale che offre servizi di programmazione «high-end», gestione
                    infrastruttura IT, cybersecurity e cripto programming a costi competitivi.
                    Operiamo da geografie low cost con un vasto team di programmatori e project managers.
                </p>
            </div>
            <div class="flex w-full mt-20">
                <button class="w-1/6 px-2 py-1 mx-auto text-lg font-semibold text-white uppercase cursor-pointer bg-gblue"
                    @click="contact"> contattaci</button>
            </div>
        </div>
    </div>
</template>
