<script setup>
import LogoKeySoft from "@/Components/LogoKeySoftGrande.vue";

import { onMounted, ref } from "@vue/runtime-core";

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
    LogoKeySoft
})
</script>
<template>
    <div class="w-full">
        <div class="relative w-11/12 mx-auto mt-0 mb-14">
            <LogoKeySoft />
            <div class="flex w-full mt-16 lg:mt-28">
                <p class="w-full px-5 mx-auto text-base font-black text-center uppercase lg:px-0 lg:text-xl lg:w-4/6 text-gblue">
                    Keysoft è una società multinazionale che offre servizi di programmazione «high-end», gestione
                    infrastruttura IT, cybersecurity e cripto programming a costi competitivi.
                    Operiamo da geografie low cost con un vasto team di programmatori e project managers.
                </p>
            </div>
            <div class="flex w-full mt-20">
                <button class="w-5/6 px-2 py-1 mx-auto text-lg font-semibold text-white uppercase cursor-pointer lg:w-1/6 bg-gblue"
                    @click="contact"> contattaci</button>
            </div>
        </div>
    </div>
</template>
