<template>
    <form action="" method="post" class="form-horizontal" style="margin-bottom: 50px;">

        <div class="control-group">
                <textarea name="message"  class="form-control" rows="3" id="btn-input"
                          placeholder="Ваше сообщение..."
                          v-model="newMessage" @keyup.enter="sendMessage"></textarea>
        </div>
        <div class="control-group">
            <button class="btn btn-primary" id="btn-chat" @click="sendMessage">Отправить сообщение</button>
        </div>
    </form>
</template>

<script>
    export default {
        props: ['user'],

        data() {
            return {
                newMessage: ''
            }
        },

        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage
                });

                this.newMessage = ''
            }
        }
    }
</script>