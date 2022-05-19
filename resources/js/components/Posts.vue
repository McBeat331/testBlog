<template>
    <div class="container my-5">
        <div class="row justify-content-center">
                <div v-if="posts">
                    <div class="col-lg-4 col-md-4 col-sm-4 contentPost" v-for="(posts,index) in posts.data" :key="index">
                        <div class="categoryPost">
                            <span>{{ posts.category.title }}</span>
                        </div>
                        <div class="titlePost">
                            <h3><a href="">{{ posts.title }}</a></h3>
                        </div>
                        <div class="descPost">
                            <span>{{ posts.content }}</span>
                        </div>
                        <div class="footerPost">
                            <div class="datePost"><span>{{ date('d M Y', strtotime( posts.created_at )) }}</span></div>
                            <div class="authorPost"><span>{{ posts.author.name }}</span></div>
                            <div class="timeReadPost"><img class="clockIcon" src="/images/Icon/Clock.svg"/><span>{{ posts.time_read }} min read</span></div>
                        </div>
                    </div>
                </div>
            <pagination align="center" :data="posts" @pagination-change-page="list"></pagination>
        </div>
    </div>
</template>

<script>
    import pagination from 'laravel-vue-pagination'
    export default {
        name:"posts",
        components:{
            pagination
        },
        data(){
            return {
                posts:{
                    type:Object,
                    default:null
                }
            }
        },
        created(){
            this.list()
        },
        methods:{
            async list(page=1){
                await axios.get(`/api/ajax-pagination?page=${page}`).then(({data})=>{
                    this.posts = data
                }).catch(({ response })=>{
                    console.error(response)
                })
            }
        }
    }
</script>

<style scoped>
    .pagination{
        margin-bottom: 0;
    }
</style>