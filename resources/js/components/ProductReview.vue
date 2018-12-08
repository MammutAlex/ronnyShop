<template>
    <div>
        <ul class="reviews list-unstyled">
            <li class="clearfix" v-for="review in list">
                <span class="avtar">
                    <img src="/img/shop/avtar.png" alt="" class="img-circle" width="60">
                </span>
                <div class="review-content">
                    <h4 v-text="review.name"></h4>
                    <span class="time-review">{{ review.date | moment }}</span>
                    <p v-text="review.text"></p>
                </div>
            </li><!--review end-->
        </ul>

        <div class="space-30"></div>
        <div class="add-review">

            <h4>Добавить отзыв</h4>
            <hr>
            <div class="space-30"></div>
            <form role="form">
                <element-input title="Ваш отзыв" :required="form.hasRequired('text')"
                               :error="form.hasError('text')">
                    <input-textarea v-model="form.text" placeholder="Ваш отзыв"/>
                </element-input>
                <div class="row">
                    <div class="col-sm-6">
                        <element-input title="Имя" :required="form.hasRequired('name')" :error="form.hasError('name')">
                            <input-text v-model="form.name" placeholder="Ваше имя"/>
                        </element-input>
                    </div>
                    <div class="col-sm-6">
                        <element-input title="Email" :required="form.hasRequired('email')"
                                       :error="form.hasError('email')">
                            <input-text v-model="form.email" placeholder="Ваш email"/>
                        </element-input>
                    </div>
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-lg theme-btn-default" @click="sendForm()">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    import ElementInput from '../elements/Input';
    import InputText from '../inputs/Text';
    import InputTextarea from '../inputs/Textarea';

    export default {
        props: {
            id: {
                type: String,
                required: true
            },
        },
        components: {
            ElementInput,
            InputText,
            InputTextarea,
        },
        data() {
            return {
                form: new Form({
                    name: '',
                    email: '',
                    text: '',
                }, {
                    name: 'required',
                    email: 'required',
                    text: 'required',
                }),
                list: [],
            };
        },
        mounted() {
            this.prepareComponent();
        },
        filters: {
            moment(date) {
                return moment.utc(date, 'YYYY-MM-DD hh:mm:ss').utcOffset(moment().utcOffset()).fromNow();
            },
        },
        methods: {
            prepareComponent() {
                axios.get(`/api/product/reviews/${this.id}`).then(response => {
                    this.list = response.data.data;
                });
            },
            sendForm() {
                this.form.post(`/api/product/reviews/${this.id}`).then(response => {
                    this.list.push(response.data);
                    this.form.reset();
                });
            }
        }
    }
</script>
