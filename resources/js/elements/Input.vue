<template>
    <div class="form-group" :class="hasError">
        <label v-text="title" :class="classRequired"></label>
        <slot></slot>
    </div>
</template>

<script>
    export default {
        props: {
            title: {
                type: String,
                default: ''
            },
            error: {
                type: Boolean,
                default: false
            },
            required: {
                type: Boolean,
                default: false
            },
        },
        computed: {
            hasError() {
                return {
                    'has-error': this.error
                };
            },
            classRequired() {
                return {
                    'required': this.required
                };
            }
        },
    }
</script>
<style >
    .required:after {
        content: "*";
    }
    .has-error .form-control {
        border-color: #a94442;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    }
    .has-error .form-control:focus {
        border-color: #843534;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
    }
</style>
