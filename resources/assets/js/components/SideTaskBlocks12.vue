<template>
    <div id="SideTask">
        <button>block1</button>
        <button>block2</button>
        <div id="block1">
            <input type="text"/>
            <select>
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            <input type="checkbox" id="check1" value="1" v-model="checked"/>
            <input type="checkbox" id="check2" value="2" v-model="checked"/>
            <input type="checkbox" id="check3" value="3" v-model="checked"/>
            <button v-on:click="send"></button>
        </div>
        <div id="block2">

        </div>
    </div>
</template>

<script>
    export default {
        name: "SideTaskBlocks12",
        data: function (){
            return {
                block1 : {
                    checked: [],
                    message: '',
                    selected: '',
                },
            };
        },
        methods : {
            send : function () {
                axios.post('/sideTask1', this.block1);
            }
        }
    }
</script>

<style scoped>

</style>