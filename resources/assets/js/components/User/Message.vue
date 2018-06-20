<template>
    <div>
        <div id="id01"  :style="{ display: showModal}" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                <div class="w3-center"><br>
                    <span v-hotkey="keymap"
                          @click="stateModal"
                          class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">&times;</span>
                    <!--<img src="img_avatar4.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">-->
                </div>

                <form class="w3-container">
                    <div class="w3-section">
                        <div class="w3-row-padding">

                        </div>






                        <ons-button :disabled="!loading"
                                    @click="Send"
                                    class="w3-button w3-block w3-green w3-section w3-padding"
                                    modifier="large--cta"></ons-button>

                    </div>
                </form>

                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button :disabled="loading"  @click="stateModal" type="button"
                            class="w3-button w3-red">Cancel
                    </button>
                </div>

            </div>
        </div>
    </div>
</template>
<style>
</style>
<script>
    export default{
        data(){
            return{
                showModal: 'block',
                errors: [],
                loading: false
            }
        },
        mounted(){

        },
        computed:{
            hasErrors(){
                var vm = this
                return vm.errors.length > 0
            },
            keymap () {
                var vm = this
                return {
                    // bind to hotkey
                    'esc': vm.stateModal
                }
            }
        },
        methods:{
            Send(){

            },
            stateModal(){
                var vm = this
                vm.showModal == 'none' ? vm.showModal = 'block' : vm.showModal = 'none'
                vm.$emit('close')
            }
        }
    }
</script>

