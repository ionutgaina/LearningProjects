<!-- This is a template which we can use in different pages, in React we can say this is a component -->
<template>
    <Link href="/"> Main Page </Link> &nbsp;
    <Link href="/hello"> Show Page </Link>

    <slot></slot> <!-- Slot is used to put other tags from page to this layout -->
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>
