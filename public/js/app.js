new  Vue({
    el:'#app',
    data:{
        blogs:[],
        search: ''
    },
    created(){
        axios.get('https://jsonplaceholder.typicode.com/comments').then(res => this.blogs = res.data);
    },
    computed:{
        filteredBlogs:function(){
            return this.blogs.filter((blog) =>{
                return blog.name.match(this.search);
            });
        }
    }
});