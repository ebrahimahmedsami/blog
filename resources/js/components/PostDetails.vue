<template>
    <div class="container">
        <div class="card">
            <div class="card-header">
                {{post.title}}
            </div>
            <div class="card-body" v-if="post.user">
                <img :src="'images/'+post.image" width="50%" height="100px" style="display:inline-block;">
                <h5>Time :{{post.added_at}}</h5>
                <p>{{post.body}}</p>
                <h2>Posted By : {{post.user.name}}</h2>
                <h3>Category : {{post.category.name}}</h3>
                <div>
                    <p>{{post.comments[0].body}}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                post:''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },created() {
            this.getPost();
        },methods:{
            getPost(){
                axios.get('/api/posts/'+this.$route.params.id)
                .then(res => {
                    this.post = res.data;
                    console.log(this.post);
                }).catch(err => console.log(err));
            }
        }
    }
</script>
