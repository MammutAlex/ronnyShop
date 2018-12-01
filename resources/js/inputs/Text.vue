<template>
    <input class="form-control"
           :type="type"
           :value="value"
           :disabled="disabled"
           :placeholder="placeholder"
           @input="$emit('input', $event.target.value)"
           @change="$emit('change', $event.target.value)"
           @keyup.enter="$emit('enter', $event)">
</template>
<script>
    export default {
        props: {
            placeholder: {
                default: 'Data'
            },
            value: {
                default: ''
            },
            disabled: {
                default: false
            },
            type: {
                default: 'text'
            },
        }
    }
</script>
