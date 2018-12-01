<template>
    <textarea :placeholder="placeholder"
              class="form-control"
              :rows="rows"
              @input="$emit('input', $event.target.value)"
              :value="value"></textarea>
</template>
<script>
    export default {
        props: {
            placeholder: {
                default: 'Note'
            },
            value: {
                default: ''
            },
            rows: {
                default: 6
            },
        }
    }
</script>
