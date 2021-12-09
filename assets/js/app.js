const App = new Vue({
    el: '#app',
    data: {
        albums: null,
        genres: [],
        selectGenre: ""
    },
    mounted() {
        axios
            .get('./api/albums.php')
            .then(response => {
                this.albums = response.data
                response.data.forEach((album) => {
                    if (!this.genres.includes(album.genre)) {
                        this.genres.push(album.genre)
                    }
                });
            }).catch(error => {
                console.log(error);
            });
    },
    methods: {
        changeGenre(value) {
            this.selectGenre = value
        }
    },
    computed: {
        filterMusics() {
            if (this.selectGenre === "") {
                return this.albums
            } else {
                let filterMusic = this.albums.filter((album) => {
                    return album.genre.includes(this.selectGenre)
                })
                return filterMusic
            }
        }
    }
});