<template>
    <div>
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->

                <!-- start looping in the feed -->
                <div class="swiper-slide" v-for="rec in recents" v-bind:key="rec.recent_id">
                    <div class="card">
                        <img v-bind:src="rec.thumbnail_images.medium.url" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ rec.title }}</h5>
                        <p class="card-text"><small class="text-muted">{{ rec.date }}</small></p>
                        </div>
                    </div>
                </div>
                <!-- end looping in the feed -->

            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>


        </div>
    </div>
</template>
<script>
export default {
    mounted(){

    },
    data () {
        return {
            recents : [], // array for upload the data coming by url
            recent : {
                slug: '',
                title: '',
                url: '',
                recent_id : ''
            } ,// single object

        }
    },
    created(){
        // call the method fetchAllRecents in the first land
        this.fetchAllRecents();
    },
    methods : {
        // override the method fetchAllRecents
        fetchAllRecents(){
            // fetch data using axios and method get
            axios.get('http://femme.nextmedia.ma/api/get_recent_posts/')
            .then((response) => {
                // upload data to recents array
                this.recents = response.data.posts
            }).catch((err) => {
                console.log('err'+err);
            })
        }
    }
}
</script>
