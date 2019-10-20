<template>
    <div>
        <!-- simple pagination -->
        <div class="">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#" @click="makePaginationDown()">Previous</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">{{ this.paginate +'/'+  this.all.pages }}</a></li>

                    <li class="page-item"><a class="page-link" href="#" @click="makePaginationUp()">Next</a></li>
                </ul>
            </nav>
        </div>
        <br><br><br><br>
        <!-- check if data loaded or not using v-if statement and show the loading style -->
        <div class="loading text-center" v-if="!this.loaded">
            <div class="spinner text-center">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!-- check if data loaded or not using v-if statement -->
        <div class="posts" v-if="this.loaded">
            <!-- lopping on data and show it -->
            <article class="hentry post post-standard has-post-thumbnail sticky" v-for="post in posts" v-bind:key='post.id'>
                <div class="post-thumb">
                    <!-- bind the source of the post image -->
                    <img v-bind:src="post.thumbnail_images.large.url" alt="seo">
                    <div class="overlay">
                    </div>
                    <a bind-href="post.thumbnail_images.large.url" class="link-image js-zoom-image">
                        <i class="seoicon-zoom"></i>
                    </a>
                    <a href="#" class="link-post">
                        <i class="seoicon-link-bold"></i>
                    </a>
                </div>
                <div class="post__content">
                    <div class="post__content-info text-right">
                        <h2 class="post__title entry-title ">
                            <!-- bind the href with single page and id of post parametre -->
                           <a :href="'/single/'+post.id">{{ post.title }}</a>
                        </h2>
                        <div class="post-additional-info">
                            <span class="post__date">
                                <i class="seoicon-clock"></i>
                                <time class="published">
                                    <!-- show the date of the post -->
                                    {{ post.date }}
                                </time>
                            </span>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</template>
<script>
export default {
    mounted(){

    },
    data(){
        return{
            posts : [], // using posts array for load the data into it
            all : [], // using all for load all the data json from url
            post : {
                title : '',
                content : '',
                url : '',
                id : ''
            }, // single post object for looping
            loaded : false, // test if data loaded initilising by false
            paginate : 1 // pagination start with 1
        }
    },
    created(){
        this.fetchAllArticles(); // this method will called in the first land of this component
    },
    methods : {
        // override the method detchAllArticles()
        fetchAllArticles(page){
            let vm = this
            // check if the page parametre have data or not it true , page will take the value of page else will take this.paginate
            page = page || this.paginate;
            // get data by axios method get and fetch the link concatinated with page parametre
            axios.get(' http://femme.nextmedia.ma/api/get_recent_posts/?page='+page)
            .then((response) => {
                // add request data posts to the posts array
                this.posts = response.data.posts;
                // add request data to the all array
                this.all = response.data;
            }).then((response) => {
                // make loaded = true for show the posts
                this.loaded = true;
            }).catch((err) => {
                console.log('err'+err);
            })
        },
        // create method for call it in next page pagination
        makePaginationUp(){
            // set loaded to false
            this.loaded=false;
            // check if next page id Younger than all pages for up it
            if(this.paginate<this.all.pages)
            {
                var pa = ++this.paginate;
                this.fetchAllArticles(pa);
            }
            // set loaded to true
             this.loaded=true;
        },
        makePaginationDown(){
            // set loaded to false
            this.loaded=false;
            // check if next page id big  than 0 for lower it
            if(this.paginate>0)
            {
                var pa = --this.paginate;
                this.fetchAllArticles(pa);
            }
             // set loaded to true
             this.loaded=true;
        }
    }
}
</script>
