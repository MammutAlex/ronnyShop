<template>
    <div class="table-responsive">
        <table id="shopping-cart-table" class="shopping-cart-table table table-bordered table-striped">
            <thead>
            <tr>
                <th></th>
                <th class="td-name">Название</th>
                <th class="td-price">Цена (рублей)</th>
                <th class="td-qty">Количество</th>
                <th class="td-total">Всего</th>
                <th class="td-remove"></th>
            </tr>
            </thead>
            <tbody>
            <cart-product v-for="product in list" :product="product" :key="product.id"/>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="td-total">
                    <div class="price">{{fullPrice}}&#8381;</div>
                </td>
                <td></td>
            </tr>
            </tbody>
        </table><!-- .shopping-cart-table -->
    </div>
</template>

<script>

    import {mapGetters, mapActions} from 'vuex';
    import CartProduct from './CartProduct';

    export default {
        mounted() {
            this.prepareComponent();
        },
        computed: {
            ...mapGetters({
                list: 'cartList'
            }),
            fullPrice() {
                return this.list.reduce((sum, product) => sum + (product.price * product.quantity), 0)
            }
        },
        components: {
            CartProduct
        },
        methods: {
            ...mapActions({
                getList: 'cartGetList'
            }),
            prepareComponent() {
                this.getList();
            }
        }
    }
</script>

<style scoped>
</style>
