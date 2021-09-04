<template>
    <div class="container">
        <div class="row">
            <div v-for="post in posts" :key="post.id" class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <router-link :to="'/post/'+post.id">{{post.title}}</router-link>
                    </div>
                    <div class="card-body">
                        <img :src="'images/'+post.image" width="100px" height="100px" style="display:inline-block;">
                        <p>{{post.body}}</p>
                        <span><strong>Posted By: </strong>{{post.user.name}}</span><br>
                        <span><strong>Date: </strong>{{post.added_at}}</span><br>
                        <span><strong>Comments: </strong>{{post.comments_count}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                posts:{}
            }
        },
        mounted() {
            console.log('Component mounted.')
            this.getPosts();
        },
        methods:{
            getPosts(){
                axios.get('/api/posts')
                .then(res => {
                    this.posts = res.data;
                    console.log(this.posts);
                })
                .then(err => console.log(err));
            }
        }
    }
</script>
