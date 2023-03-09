<!-- This is a template which we can use in different pages, in React we can say this is a component -->
<template>
    <Link href="/"> Main Page </Link> &nbsp;
    <Link href="/hello"> Show Page </Link>

    <div>
        The page with time {{ timer }}
    </div>

    <slot>Default</slot> <!-- Slot is used to put other tags from page to this layout -->
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'


// ref is used to create reactive variable
const timer = ref(0)
setInterval(() => timer.value++, 1000)
</script>
