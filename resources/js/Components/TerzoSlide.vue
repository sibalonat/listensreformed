
<script setup>
import { ref } from '@vue/reactivity';
import LogoKeySoftPicola from './LogoKeySoftPicola.vue';

const prop = defineProps({
    contact: Boolean,
})
const emit = defineEmits(['update:contattaci']);
const contattaci = ref(false)
const contact = () => {
    contattaci.value === false ? contattaci.value = true : contattaci.value = false
    emit('update:contact', contattaci.value)
}

</script>

<template>

<div class="w-full">
        <div class="w-1/2 mx-auto mt-20" id="competenze">
            <LogoKeySoftPicola />
        </div>
        <div class="flex w-full mt-20">
            <p class="w-5/6 mx-auto text-3xl font-bold text-center uppercase text-gblue">
                COME PROGRAMMIAMO PER IL WEB
            </p>
        </div>
        <div class="flex w-full mt-20">
            <div class="w-1/2 mx-auto">
                <div class="grid grid-cols-3 gap-x-3 gap-y-4">
                    <div class="flex flex-col w-full">
                        <img :src="'./brands/Laravel Logo.svg'" class="w-full" alt="">
                    </div>
                    <div class="flex flex-col w-full">
                        <img :src="'./brands/Livewire.svg'" class="w-full" alt="">
                    </div>
                    <div class="flex flex-col w-full">
                        <img :src="'./brands/Vue.svg'" class="w-68" alt="">
                    </div>
                </div>
            </div>

        </div>
        <div class="flex w-full my-24">
            <button class="w-1/6 px-2 py-1 mx-auto text-xl font-semibold text-white uppercase cursor-pointer bg-gblue"
            @click="contact"> contattaci</button>
        </div>
    </div>

</template>
