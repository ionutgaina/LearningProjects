<template>
        <div>
            Index
        </div>

        <Link href="/hello"> Show Page </Link>

        <div>
            The message is {{ message }}
        </div>
</template>


<script setup>
import { Link } from '@inertiajs/vue3'
// defineProps is used to take props from controller ex IndexController.php in index method
defineProps({
    message: String
});
</script>


