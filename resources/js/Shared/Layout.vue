<template>
    <div
        class="w-full bg-gray-600 text-gray-200 text-center p-2 text-xl cursor-pointer hover:underline"
        @click="setNickname"
    >
        <p v-if="nickname">{{ nickname }}</p>
    </div>
    <div class="w-full">
        <slot />
    </div>
</template>

<script>
import axios from 'axios';
export default {
    name: 'layout',
    data() {},
    computed: {
        nickname() {
            return this.$page.props.nickname;
        },
    },
    methods: {
        async setNickname() {
            let nickname = window.prompt('New nickname');
            let response = await axios.post(route('nickname.store'), {
                nickname: nickname,
            });
            this.$inertia.reload({ only: ['nickname'] });
        },
    },
};
</script>
