<script setup>
import GuessInput from './GuessInput.vue';
</script>

<template>
    <div class="flex flex-col gap-y-2 w-[350px]">
        <guess-input
            v-for="(guess, index) in guesses"
            :key="index"
            :lock="true"
            :value="guess.word"
            :correctness="guess.correctness"
            :length="5"
        />
        <guess-input
            :length="5"
            v-model="currentGuess"
            @submitGuess="submitGuess"
        />
    </div>
</template>

<script>
export default {
    components: { GuessInput },
    data() {
        return {
            guesses: this.$page.props.guesses,
            currentGuess: '',
            guessObj: {
                word: '',
                correctness: ['*', '*', '*', '*', '*'],
            },
        };
    },
    methods: {
        submitGuess(guess) {
            if (guess.length < 5) {
                return;
            }
            let newGuess = { ...this.guessObj }; // need new pointers
            newGuess.word = guess;
            this.guesses.push(newGuess);
            this.currentGuess = '';
        },
    },
};
</script>
