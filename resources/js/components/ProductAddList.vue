<template>
    <div class="product-thumb-overlay">
        <p>
            <a class="cursor-pointer" @click="addToCart()"><i class="ion-bag"></i> В корзину</a>
        </p>
    </div>
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
        methods: {
            ...mapActions({
                addProduct: 'cartAddProduct'
            }),
            addToCart() {
                this.addProduct({
                    id: this.id,
                    quantity: 1,
                });
            }
        }
    }
</script>

<style scoped>
    .cursor-pointer {
        cursor: pointer;
    }
</style>
