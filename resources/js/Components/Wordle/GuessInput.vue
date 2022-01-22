<template>
    <div class="flex gap-x-2 justify-between">
        <template v-if="lock == true">
            <input
                v-for="index in length"
                :key="index"
                class="border-2 border-white w-full max-w-[6rem] aspect-square bg-gray-100 text-center text-2xl uppercase"
                :class="{
                    'bg-green-400': correctness[index - 1] === 'green',
                    'bg-yellow-300': correctness[index - 1] === 'yellow',
                }"
                type="text"
                maxlength="1"
                disabled="disabled"
                :value="value[index - 1]"
            />
        </template>

        <form @submit.prevent="submitGuess" v-else class="text-2xl w-full">
            <input
                class="w-full p-2"
                type="text"
                :value="modelValue"
                @input="$emit('update:modelValue', $event.target.value)"
                :maxlength="length"
                placeholder="Guess here (todo: style)"
            />
        </form>
    </div>
</template>

<script>
export default {
    name: 'guess-input',
    props: {
        length: { type: Number },
        lock: { type: Boolean },
        value: { type: String },
        correctness: { type: Array }, // eg ['*', 'yellow', 'yellow', 'green', '*']
        modelValue: { type: String },
    },
    emits: ['update:modelValue', 'submitGuess'],
    methods: {
        submitGuess() {
            this.$emit('submitGuess', this.modelValue.toLowerCase());
        },
    },
};
</script>
