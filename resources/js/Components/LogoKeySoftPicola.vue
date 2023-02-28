<script setup>
import { inject, ref } from "vue";
// inject

const dt = inject('hm');

const datainjext = ref('')

const perShpi = () => {
    datainjext.value = 'clicked'
    dt.value = datainjext.value
}

</script>
<template>
    <div class="w-full">
        <div class="flex w-full mt-36">
            <img :src="'./brands/KEYSOFT_Logo blu.svg'" class="w-1/5 mx-auto cursor-pointer" alt="" @click="perShpi">
        </div>
    </div>
</template>
