<script setup>
defineProps({
    message: {
        type: String,
    },
});
</script>

<template>
    <div v-show="message">
        <p class="text-left text-red" style="color: red">
            {{ message }}
        </p>
    </div>
</template>
