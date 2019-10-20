<template>
    <div>
        <!-- start of the show title section -->
        <div class="stunning-header stunning-header-bg-lightviolet">
            <div class="stunning-header-content">
                <h1 class="stunning-header-title">{{ this.single.title }}</h1>
            </div>
        </div>
        <!-- end of the show title section -->
        <!-- check if the data loaded and show the spinner design -->
        <div class="loading text-center mt-3" v-if="!this.loaded">
            <div class="spinner text-center">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!-- check if the data loaded and show the single post details -->
        <div class="container" v-if="this.loaded">
            <!-- start of the single post details -->
            <div class="row medium-padding120">
                <main class="main">
                    <div class="col-lg-10 col-lg-offset-1">
                        <article class="hentry post post-standard-details">
                            <!-- start of the single post image -->
                            <div class="post-thumb">
                                <img v-bind:src="this.single.thumbnail_images.large.url" alt="" srcset="">
                            </div>
                            <!-- end of the single post image -->

                            <!-- start of the single post content -->
                            <div class="post__content">
                                <div class="post-additional-info">

                                    <!-- start of the single post date -->
                                    <span class="post__date">
                                        <i class="seoicon-clock"></i>
                                        <time class="published">
                                            {{ single.date }}
                                        </time>
                                    </span>
                                    <!-- end of the single post date -->

                                    <!-- start of the single post category -->
                                    <span class="category">
                                        <i class="seoicon-tags"></i>
                                        <a href="#">Business,</a>
                                        <a href="#">Seo</a>
                                    </span>
                                    <!-- end of the single post category -->
                                </div>

                                <!-- start of the single post title and details -->
                                <div class="post__content-info text-right" >
                                    <div class="testimonial-item quote-left">
                                        <!-- start of the single post title -->
                                        <h5 class="h5 testimonial-text" v-html="single.title">
                                            {{ single.title }}
                                        </h5>
                                        <!-- end of the single post title -->

                                        <!-- start of the single post creator -->
                                        <div class="author-info-wrap table">
                                            <div class="author-info table-cell">
                                                <h6 class="author-name c-primary">Angelina Johnson</h6>
                                                <div class="author-company">Envato Market</div>
                                            </div>
                                        </div>
                                        <!-- end of the single post creator -->

                                        <div class="quote">
                                            <i class="seoicon-quotes"></i>
                                        </div>
                                    </div>
                                    <!-- start of the single post content -->
                                    <p class="post__text" v-html="single.content">
                                        {{ single.content }}
                                    </p>
                                    <!-- end of the single post content -->

                                    <!-- start of the single post excerpt -->
                                    <h4 class="mb30">مقتطفات</h4>
                                    <ul class="list list--secondary">
                                        <li>
                                            <i class="seoicon-check"></i>
                                            <a href="#" v-html="single.excerpt">
                                                {{ single.excerpt }}
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- end of the single post excerpt -->
                                </div>
                                <!-- end of the single post title and details -->

                            </div>
                            <!-- end of the single post content -->
                            <div class="socials">Share:
                                <a href="#" class="social__item">
                                    <i class="seoicon-social-facebook"></i>
                                </a>
                                <a href="#" class="social__item">
                                    <i class="seoicon-social-twitter"></i>
                                </a>
                                <a href="#" class="social__item">
                                    <i class="seoicon-social-linkedin"></i>
                                </a>
                                <a href="#" class="social__item">
                                    <i class="seoicon-social-google-plus"></i>
                                </a>
                                <a href="#" class="social__item">
                                    <i class="seoicon-social-pinterest"></i>
                                </a>
                            </div>

                        </article>



                    </div>


                    <!-- End Sidebar-->

                </main>
            </div>
            <!-- end of the single post details -->
        </div>
    </div>
</template>
<script>
export default {
    props : ['id'], // this is a varriable coming from the call of this component in the master page like this below
                    // <single :id='1'></single> exemple for use it in the request of the post
    mounted(){

    },
    data () {
      return {
          single : [], // array of single post
          loaded : false // loaded false , to check if data is loaded
      }
    },
    methods : {
        // override the fetchSinglePost method
        fetchSinglePost(){
            // get the data from the url concated by the id of the post , varriable in the props
            axios.get('http://femme.nextmedia.ma/api/get_post/?id='+this.id)
            .then((response) => {
                // upload the data single post to the single array
                this.single = response.data.post
            }).then((response) => {
                // set loaded to true
                this.loaded = true;
            }).catch((err) => {
                console.log('err'+err);
            })
        }
    },
    created(){
        // call the fetchSinglePost method in the first land
        this.fetchSinglePost();
    }
}
</script>
