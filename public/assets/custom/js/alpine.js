window.addEventListener('alpine:init', () => {

    Alpine.data('data', () => ({
        category_id: new URL(window.location.href).searchParams.get('category_id'),
        data: [],
        page: 1,
        totalPages: 2,
        maxPageNumber: 3,
        minPageNumber: 1,
        displaySearchByCategores: false,
        getAllAds(){
            this.displaySearchByCategores = false
            fetch('/clouddeal/allAds/ads?page='+this.page).then(response => response.json())
            .then(data => {
                this.data = data;
                this.totalPages = data.annonces.last_page;
                console.log(this.data);
                console.log(this.category_id);
            })
            .catch(error => {
                console.error(error);
            });
        },
        getAdsByCategory(){
            this.displaySearchByCategores = true;
            console.log(this.category_id);
            fetch('/clouddeal/allAds/search?category_id='+this.category_id).then(response => response.json())
            .then(data => {
                this.data = data;
                this.totalPages = data.annonces.last_page;
                console.log(this.data);
                console.log(this.category_id);
            })
            .catch(error => {
                console.error(error);
            });
        },
        nextPage() {
            if (this.page < this.totalPages) {
                this.page++;
                if (this.maxPageNumber < this.totalPages) {
                    this.minPageNumber++;
                    this.maxPageNumber++;
                }
                this.getAllAds();
            }
        },
        previousPage() {
            if (this.page > 1) {
                this.page--;
                if (this.minPageNumber > 1) {
                    this.minPageNumber--;
                    this.maxPageNumber--;
                }
                this.getAllAds();
            }
        },
        currentPage(num){
            this.page = num;
            this.getAllAds();
        },
        serachByCat(){
            fetch('/clouddeal/allAds/search/'+ this.category_id).then(response => response.json())
            .then(data => {
                this.data = data;
                console.log(this.data);
            })
            .catch(error => {
                console.error(error);
            });
        },
    }));

    Alpine.data('ads', () => ({
        ads: [],
        page: 1,
        totalPages: 2,
        loadAds: function loadAds() {
            fetch('/clouddeal/ads?page=' + this.page).then(response => response.json())
                .then(data => {
                    this.ads = (this.ads || []).concat(data.allAds.data);
                    this.page++;
                    this.totalPages = data.allAds.last_page;
                    console.log(this.ads);
                })
                .catch(error => {
                    console.error(error);
                });
        },
    }))
});
