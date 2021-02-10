<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-3 mb-3" >
                    <div v-bind:class="defineCor">{{titulo}}</div>
                    <div class="card-body">
                        <slot></slot>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
            props: ['titulo', 'cor'],
            computed: {
                defineCor: function(){
                    return "card "+ (this.cor || "card-header mb-1");
                }       
            }
        }
</script>

