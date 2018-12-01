<template>
    <div>
        <ul class="reviews list-unstyled">
            <li class="clearfix" v-for="review in list">
                <span class="avtar">
                    <img src="/img/shop/avtar.png" alt="" class="img-circle" width="60">
                </span>
                <div class="review-content">
                    <span class="rating">
                        <i class="ion-star"></i>
                        <i class="ion-star"></i>
                        <i class="ion-star"></i>
                        <i class="ion-star"></i>
                        <i class="ion-star"></i>
                    </span>
                    <h4 v-text="review.name"></h4>
                    <span class="time-review">{{ review.date | moment }}</span>
                    <p v-text="review.text"></p>
                </div>
            </li><!--review end-->
        </ul>

        <div class="space-30"></div>
        <div class="add-review">

            <h4>Add Review</h4>
            <hr>
            <div class="space-30"></div>
            <form role="form">
                <div class="form-group">
                    <label>Your Review</label>
                    <textarea class="form-control" rows="6"
                              placeholder="Type Your Review Here"></textarea>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Your Full Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Your Email Address">
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-lg theme-btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            id: {
                type: String,
                required: true
            },
        },
        data() {
            return {
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
                })
            }
        }
    }
</script>
