<template>
    <tr>
        <td class="td-images">
            <a :href="product.attributes.url" class="product-image">
                <img class="replace-2x" :src="product.attributes.img" :alt="product.name" width="70">
            </a>
        </td>
        <td class="td-name">
            <h4 class="product-name">
                <a :href="product.attributes.url" v-text="product.name"></a>
            </h4>
        </td>
        <td class="td-price">
            <div class="price">{{product.price}}&#8381;</div>
        </td>
        <td class="td-qty">
            <input class="form-control" :class="hasError" type="text" v-model="quantity" @input="addToCart()">
        </td>
        <td class="td-total">
            <div class="price">{{product.price*product.quantity}}&#8381;</div>
        </td>
        <td class="td-remove">
            <a class="product-remove cursor-pointer" @click="deleteProduct(product.id)">
                <i class="ion-trash-b"></i>
            </a><!-- .product-remove -->
        </td>
    </tr>
</template>

<script>
    import {mapActions} from 'vuex';

    export default {
        props: {
            product: {
                type: Object,
                required: true
            },
        },
        data() {
            return {
                quantity: this.product.quantity,
                validate: false,
            }
        },
        computed: {
            hasError() {
                return {
                    'has-error': this.validate
                };
            },
        },
        methods: {
            ...mapActions({
                updateProduct: 'cartUpdateProduct',
                deleteProduct: 'cartDeleteProduct',
            }),
            addToCart() {
                if (Number(this.quantity) === 0) {
                    this.validate = true;
                } else {
                    this.validate = false;
                    this.updateProduct({
                        id: this.product.attributes.id,
                        quantity: this.quantity,
                    });
                }
            }
        }
    }
</script>
<style>
    .has-error {
        border-color: #a94442;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
    }

    .has-error:focus {
        border-color: #843534;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #ce8483;
    }

    .cursor-pointer {
        cursor: pointer;
    }
</style>
