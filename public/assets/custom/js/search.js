window.addEventListener('alpine:init', () => {

    Alpine.data('data', () => ({
        searchText: '',
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
            // const minPrice = $("#slider-range").slider("values", 0);
            // const maxPrice = $("#slider-range").slider("values", 1);
            // this.priceFilter = minPrice + ',' + maxPrice;pm
            this.priceFilter =$("#slider-range").slider("values");
            this.getAllAds();
        },
        filterByCategories() {
            this.getAllAds();
        },
        getAllAds() {
            this.isLoading = true;
            fetch('/clouddeal/allAds/ads?page=' + this.page + '&search=' + this.searchText + '&filterCategories=' + this.currentCategories + '&filterPrice=' + this.priceFilter).then(response => response.json())
                .then(data => {
                    this.data = data.data;
                    this.totalPages = data.last_page;
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
    }))
});
