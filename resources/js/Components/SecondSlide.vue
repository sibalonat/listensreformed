<script setup>
import LogoKeySoft from "@/Components/LogoKeySoftPicola.vue";
import { onMounted, ref } from "@vue/runtime-core";
// import { provide } from "vue";
// provide
const prop = defineProps({
    contact: Boolean,
})
const emit = defineEmits(['update:contattaci']);
const contattaci = ref(false)
const contact = () => {
    contattaci.value === false ? contattaci.value = true : contattaci.value = false
    emit('update:contact', contattaci.value)
}
// provide('contact', contattaci)

onMounted(() => {
    console.log(contattaci);
})

// watch(contattaci, (newC) => {
//     console.log(newC);
// })
</script>
<template>
    <div class="w-full font-GB scroll-smooth">
        <div class="w-1/2 mx-auto scr">
            <LogoKeySoft />
        </div>
        <div class="flex w-full mt-16">
            <p class="w-5/6 mx-auto font-black text-center uppercase text-28xl text-gblue">Mission</p>
        </div>
        <div class="flex w-full mt-0">
            <p class="w-5/6 mx-auto text-2xl font-black text-center text-gblue">
                Permettervi di digitalizzare in modo semplice e a costi competitivi.
            </p>
        </div>
        <div class="flex w-full mt-12">
            <p class="w-5/6 mx-auto text-3xl font-bold text-center uppercase text-gblue">
                LE NOSTRE ARMI VINCENTI
            </p>
        </div>
        <div class="flex w-full mt-9">
            <div class="w-5/6 mx-auto">
                <p class="w-full mx-auto text-2xl font-black text-center uppercase text-gblue">
                    SEMPLICITÀ
                </p>
                <div class="w-full mt-3">
                    <p class="w-3/6 mx-auto text-base font-normal text-center text-gblue">
                        Siamo uno «one stop shop» per semplificare notevolmente sviluppi software con un unico
                        interlocutore.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex w-full mt-9">
            <div class="w-5/6 mx-auto">
                <p class="w-full mx-auto text-2xl font-black text-center uppercase text-gblue">
                    VELOCITÀ
                </p>
                <div class="w-full mt-3">
                    <p class="w-3/6 mx-auto text-base font-normal text-center text-gblue">
                        Abbiamo uno staff di oltre cento persone tra programmatori e project manager per garantirvi consegne
                        rapide.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex w-full mt-9">
            <div class="w-5/6 mx-auto">
                <p class="w-full mx-auto text-2xl font-black text-center uppercase text-gblue">
                    COMPETITIVITÀ
                </p>
                <div class="w-full mt-3">
                    <p class="w-5/6 mx-auto text-base font-normal text-center text-gblue">
                        La nostra presenza internazionale ci garantisce il reperimento di talento a costi competitivi e ci
                        permette di offrire prezzi fino al 40% inferiori al mercato Italiano. La qualità del nostro lavoro
                        di programmazione è comprovata: Keysoft vanta infatti come clienti varie multinazionali leader di
                        mercato nel settore dell'energia, software, automotive, aeronautica.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex w-full mt-20">
            <button class="w-1/6 px-2 py-1 mx-auto text-xl font-semibold text-white uppercase cursor-pointer bg-gblue"
                @click="contact"> contattaci</button>
        </div>
        <div class="flex w-full mb-20">

    </div>
</div></template>
