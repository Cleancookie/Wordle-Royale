<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<template>
<div>
    <h1>{{ title }}</h1>
    <Link :href="route('home')">Homepage</Link>
</div>
</template>

<script>
export default {
    name: 'about',
    props: {
        title: {
            type: String
        }
    }
};
</script>
