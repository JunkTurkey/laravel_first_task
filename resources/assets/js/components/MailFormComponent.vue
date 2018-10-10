    <template>
        <div id="MailFormComponent">
            <h3>Send email</h3>
            <input v-model="mail.email" placeholder="example@your.domen" />
            <textarea v-model="mail.message" placeholder="your message" />
            <button @click.prevent="send">send</button>
        </div>
    </template>

    <script>
        export default {
            name: "MailFormComponent",
            data: function(){
                return {
                    mail: {
                        email: '',
                        message: '',
                    },
                };
            },
            methods : {
                send : function(){
                    console.log("do");
                    axios.post('/sendmail', this.mail).then(response => {console.log("posle")});
                }
            }
        };
    </script>

<style scoped>

</style>