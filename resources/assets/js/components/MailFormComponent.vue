    <template>
        <div id="MailFormComponent">
            <h3>Send email</h3>
            <input v-model="mail.email" placeholder="example@your.domen" />
            <input v-model="mail.message" placeholder="your message" />
            <button v-on:click="send">send</button>
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
                    axios.post('/sendMail', this.mail).then(response => {console.log(response.data)});
                }
            }
        };
    </script>

<style scoped>

</style>