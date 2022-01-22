<template>
<div>
    <h1>{{ yerd }}</h1>
</div>
</template>

<script>
export default {
    name: "my-page",
    props: {
        yerd: {
            type: String
        }
    }
};
</script>
