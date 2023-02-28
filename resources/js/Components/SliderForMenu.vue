<script setup>

import { computed, onMounted, ref, watch } from 'vue';

import 'animate.css';

const menuOpen = ref(false)
const slideOpen = ref('')

const isOpen = computed({
    get() {
        return menuOpen
    },
    set(ndr) {
        menuOpen.value = ndr
    }
})

const slide = computed({
    get() {
        return slideOpen
    },
    set(open) {
        slideOpen.value = open
    }
})


const emit = defineEmits(['update:name-component']);
onMounted(() => {
    slide
})

watch(slide.value, (toPass) => {
    emit('update:name-component', toPass)
})

</script>
<template>
    <div class="fixed w-full bg-white z-100">
    <div class="relative w-full mx-auto mt-0 mb-2">
        <div class="flex flex-row">
            <div class="basis-11/12">
                <Transition mode="out-in"
                enter-active-class="animate__animated animate__fadeIn"
                leave-active-class="animate__animated animate__fadeOut">
                    <div class="grid w-full grid-cols-3 px-8 py-10 mx-auto mb-3 bg-white justify-items-end"
                    v-if="isOpen.value">
                        <button type="button" class="w-9/12" @click="slide = 'competenze'">
                            <p class="text-xl font-semibold uppercase text-gblue">Competenze</p>
                        </button>
                        <button type="button" class="w-9/12" @click="slide = 'mission'">
                            <p class="text-xl font-semibold uppercase text-gblue">Mission</p>
                        </button>
                        <button type="button" class="w-9/12" @click="slide = 'servizi'">
                            <p class="text-xl font-semibold uppercase text-gblue">Servizi</p>
                        </button>
                    </div>
                </Transition>
            </div>
            <button class="py-8 basis-1/12">
                <img :src="'/brands/bauhausclose.svg'" v-if="isOpen.value" class="block mx-auto cursor-pointer w-14" alt="" @click="isOpen.value === false ? isOpen.value = true : isOpen.value = false">
                <img :src="'/brands/bauhausopen.svg'" v-else class="block mx-auto cursor-pointer w-14" @click="isOpen.value === true ? isOpen.value = false : isOpen.value = true" alt="">
            </button>
            </div>
        </div>
    </div>
</template>

<style>
.animate__animated.animate__fadeIn {
    --animate-duration: 3s;
}
</style>

