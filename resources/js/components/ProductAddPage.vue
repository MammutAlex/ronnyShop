<template>
    <form class="cart">
        <div class="add-to-cart-table">
            <div class="quantity">
                <input type="number" step="1" min="1" name="quantity" class="input-text qty text" v-model="quantity">
            </div>
            <button type="button" class="button" @click="addToCart()">В корзину</button>
        </div>
    </form>
</template>

<script>
    import {mapActions} from 'vuex';

    export default {
        props: {
            id: {
                type: String,
                required: true
            },
        },
        data() {
            return {
                quantity: 1
            }
        },
        methods: {
            ...mapActions({
                addProduct: 'cartAddProduct'
            }),
            addToCart() {
                this.addProduct({
                    id: this.id,
                    quantity: this.quantity,
                });
                this.quantity = 1;
            }
        }
    }
</script>

<style scoped>

</style>
