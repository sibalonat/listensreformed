<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';

import { XMarkIcon } from '@heroicons/vue/24/solid'
import FirstSlide from "@/Components/FirstSlide.vue";
import SecondSlide from "@/Components/SecondSlide.vue";
import TerzoSlide from "@/Components/TerzoSlide.vue";
import QuartoSlide from "@/Components/QuartoSlide.vue";
import Modal from '@/Components/Modal.vue';
import MenuComponent from '@/Components/SliderForMenu.vue';

import { onMounted, provide, ref, watch } from '@vue/runtime-core';

const contattaci = ref(false)
const nameComponent = ref('home')
const i = ref('')

const form = useForm({
    nome: '',
    message: ''
})


defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});

const changeContact = (e) => {
    console.log(e);
}

const sendEmail = () => {
    form.post(route("contact"))
}


// contattaci
onMounted(() => {
    FirstSlide, TerzoSlide, SecondSlide, QuartoSlide, Modal, XMarkIcon, i

    // methods
    changeContact, sendEmail
})

watch(contattaci, (newC) => {
    console.log(newC);
})


watch(nameComponent, (shpia) => {
    if (shpia === 'clicked') {
        nameComponent.value = 'home'
    }
})

provide('hm', nameComponent)

provide('i', contattaci)

</script>

<template>

    <Head title="Benvenuti" />

    <MenuComponent v-model:nameComponent="nameComponent" />

    <div class="flex w-full font-GB scroll-smooth">
        <component :is="nameComponent === 'home' ?
        FirstSlide : nameComponent !== 'home' && nameComponent === 'competenze' ?
        TerzoSlide : nameComponent !== 'home' && nameComponent === 'mission' ?
        SecondSlide : nameComponent !== 'home' && nameComponent === 'servizi' ?
        QuartoSlide : FirstSlide"
        v-model:contact="contattaci" />
    </div>
    <div class="flex z-100">
        <Modal :show="contattaci" >
            <div class="w-full p-5 font-GB">
                <div class="grid grid-cols-3 px-4 mt-5 mb-5">
                    <p class="col-span-2 text-2xl text-white uppercase">Contattaci</p>
                    <XMarkIcon class="w-8 h-8 my-auto text-white cursor-pointer justify-self-end"
                        @click="contattaci = false" />
                </div>
                <form @submit.prevent="sendEmail">
                    <div class="flex flex-col py-4">
                        <div class="flex flex-col w-full px-4 mb-2">
                            <input type="text" class="rounded-0 font-GBook" placeholder="Nome" v-model="form.nome">
                        </div>
                        <div class="flex flex-col w-full px-4 mb-2">
                            <textarea class="rounded-0 font-GBook" v-model="form.message" placeholder="Messagio"> </textarea>
                        </div>
                    </div>
                    <div class="px-4 pb-5">
                        <button type="submit" class="block w-full py-2 mx-auto bg-white font-GM text-gblue">Send</button>
                    </div>
                </form>
            </div>
        </Modal>
    </div>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
