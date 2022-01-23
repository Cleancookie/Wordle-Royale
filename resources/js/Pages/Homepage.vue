<script setup>
import Board from '../Components/Wordle/Board.vue';
</script>

<template>
    <board />
</template>

<script>
export default {
    props: {
        title: {
            type: String,
        },
    },
};
</script>
