<template>
    <div>
    <header class="header" id="site-header">
        <div class="container">
            <div class="header-content-wrapper">
                    <!-- start of logo -->
                <div class="logo">
                        <div class="logo-text">
                            <div class="logo-title">Maroc.ma</div>
                        </div>
                </div>
                <!-- end of logo -->
                <!-- start of menu -->
                <nav id="primary-menu" class="primary-menu" style="float:right;">
                        <ul class="primary-menu-menu" style="overflow: hidden;">
                            <!-- looping on the navbar array and bind the key of any single nav  -->
                            <li class="" v-for="nav in navbar" v-bind:key="nav.object_id">
                                <!-- show label -->
                                <a href="">{{ nav.label }}</a>
                            </li>
                        </ul>
                </nav>
                <!-- end of menu -->
            </div>
        </div>
    </header>
    </div>
</template>
<script>
export default {
    mounted(){

    },
    data (){
        return {
            navbar : [], // navbar array for upload the navbar data coming from url
            navbar : {
                Icon: '',
                color: '',
                id: '',
                label: '',
                object_id: ''
            }, // single navbar for lopping
        }

    },
    methods : {
        // override fetchNavbarData method
        fetchNavbarData(){
            // fetch data by axios method get
            axios.get('http://femme.nextmedia.ma/api/menus/get_menu/?menu_id=7')
            .then((response) => {
                // upload menu output to the navbar array
                this.navbar = response.data.menu.output;
            }).catch((err) => {
                console.log('err'+err);
            })
        }
    },
    created(){
        this.fetchNavbarData(); // call the method fetchNavbarData() in the first land
    }
}
</script>
