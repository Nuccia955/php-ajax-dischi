/*  VUE INSTANCE */
const app = new Vue({
    el: '#app',
    data: {
        discList: null,
    },
    created() {
        this.getDiscList()
    },
    methods: {
        getDiscList() {
            axios.get('http://localhost/php-ajax-dischi/ajax%20version/partials/scripts/database.php')
            .then(response => {
                console.log(response.data);
                this.discList = response.data;
            })
            .catch(error => {
                console.log(error);
            })
        }
    }
})