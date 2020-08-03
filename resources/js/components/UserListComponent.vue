<template>
    <ol>
        <li v-bind:key="user.id" v-for="user in users">{{ user.name }}</li>
    </ol>
</template>

<script>
export default {
    name: "UserListComponent",
    props: {
        users: Array,
    }
}
</script>

<style>
    li{
        color: #2b2b2b;
    }
</style>
