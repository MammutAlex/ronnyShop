<template>
    <div>
        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <i class="ion-ios-cart fs20"></i> ({{list.length}})
        </a>
        <ul class="dropdown-menu dropdown-menu-right cart-dropdown">
            <li>Ваша корзина</li>
            <li class="clearfix" v-for="product in list">
                <img :src="product.attributes.img" width="60" :alt="product.name" class="img-responsive">
                <div class="cart-desc">
                    <h5><a :href="product.attributes.url">{{product.name | shortName}}</a></h5>
                    <span class="cart-item-price">
                        <em>{{product.price}}&#8381;</em> x {{product.quantity}}
                    </span>
                </div>
            </li>
            <li class="cart-footer d-flex flex-column pt-4">
                <a href="/checkout" class="theme-btn-color btn btn-block">Оформить</a>
            </li>
        </ul>
    </div>
</template>

<script>
    import {mapGetters, mapActions} from 'vuex';

    export default {
        mounted() {
            this.prepareComponent();
        },
        computed: {
            ...mapGetters({
                list: 'cartList'
            })
        },
        filters: {
            shortName(value) {
                if (value.length > 25) {
                    return value.substring(0, 23) + '...';
                }
                return value;
            }

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
    .cart-desc {
        margin-left: 10px;
    }
</style>
