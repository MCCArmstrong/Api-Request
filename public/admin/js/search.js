var app = new Vue({
    el: '#app',
    data: {
        posts : '',
        search : '',
        count : 0,
        width: 0,
        menuItem : 'menu-item',
        activeClass : 'active'

    },
    methods: {
        getPosts: _.debounce(function() {
            this.posts = "";
            this.count = 0;
            self = this;

            if (this.search.trim() != '') {
                axios.post("{{ url('product-media') }}",
                {
                    search : self.search
                })
               .then(function (response) {
                  self.posts = response.data;
                })
               .catch(function (error) {
                    console.log(error);
                });  
            }

        }, 500),
        selectPost: function(keyCode) {
            // If down arrow key is pressed
            if (keyCode == 40 && this.count < this.posts.length) {
                this.count++;
            }
            // If up arrow key is pressed
            if (keyCode == 38 && this.count > 1) {
                this.count--;
            }
            // If enter key is pressed
            if (keyCode == 13) {
                // Go to selected post
                document.getElementById(this.count).childNodes[0].click();
            }
        },
        clearData: function(e) {
            if (e.target.id != 'search') {
                this.posts = '',
                this.count = 0
            }
        }
    },
    mounted:function(){
        self = this;

        // get width of search input for vue search widget on initial load
        this.width = document.getElementById("search").offsetWidth; 
        // get width of search input for vue search widget when page resize
        window.addEventListener('resize', function(event){
            self.width = document.getElementById('search').offsetWidth; 
        });

        // To clear vue search widget when click on body
        document.body.addEventListener('click',function (e) {
           self.clearData(e);
        });

        document.getElementById('search').addEventListener('keydown', function(e) {
            // check whether arrow keys are pressed
            if(_.includes([37, 38, 39, 40, 13], e.keyCode) ) {
                if (e.keyCode === 38 || e.keyCode === 40) {
                    // To prevent cursor from moving left or right in text input
                    e.preventDefault();
                }

                if (e.keyCode === 40 && self.posts == "") {
                    // If post list is cleared and search input is not empty 
                    // then call ajax again on down arrow key press 
                    self.getPosts();
                    return;
                }
                    
                self.selectPost(e.keyCode);

            } else {
                self.getPosts();
            }
        });
    },
});