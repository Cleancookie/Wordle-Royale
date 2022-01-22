<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import Layout from '../Shared/Layout.vue'
</script>

<template>
<div>
    <Layout>
        <h1>{{ title }}</h1>
        <Link :href="route('home')">Homepage</Link>
    </Layout>
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
