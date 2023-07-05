window.addEventListener('alpine:init', () => {

    Alpine.data('data', () => ({
        searchText: '',
        minPrice: 0,
        maxPrice: 0,
        priceFilter: [],
        sortBy: '',
        currentCategories: [],
        isLoading: false,
        category_id: null,
        data: [],
        page: 1,
        totalPages: 2,
        maxPageNumber: 3,
        minPageNumber: 1,
        search() {
            this.getAllAds();
        },
        filterPrice() {

            this.priceFilter = $("#slider-range").slider("values");
            this.getAllAds();
        },
        filterByCategories() {
            this.getAllAds();
        },
        getAllAds() {
            this.isLoading = true;
            fetch('/clouddeal/allAds/ads?page=' + this.page + '&search=' + this.searchText + '&filterCategories=' + this.currentCategories + '&filterPrice=' + this.priceFilter).then(response => response.json())
                .then(data => {
                    this.data = data;
                    this.totalPages = data.annonces.last_page;
                    this.isLoading = false;
                })
                .catch(error => {
                    console.log(error);
                    this.isLoading = false;
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
        currentPage(num) {
            this.page = num;
            this.getAllAds();
        },
        serachByCat() {
            fetch('/clouddeal/allAds/search/' + this.category_id).then(response => response.json())
                .then(data => {
                    this.data = data;
                    console.log(this.data);
                })
                .catch(error => {
                    console.error(error);
                });
        },
    }))
});
