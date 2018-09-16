<template>
    <div>
        <div class="well" v-for="message in messages">
            <h5>{{ message.user.name }}:</h5>
            {{ message.message }}
        </div>
    </div>

</template>

<script>
    export default {
        props: ['messages']
    };
</script>