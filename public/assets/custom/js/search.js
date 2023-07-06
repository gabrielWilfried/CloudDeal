window.addEventListener('alpine:init', () => {

    Alpine.data('data', () => ({
        searchText: '',
        priceFilter: '',
        minPrice: 0,
        maxPrice: 0,
        sortBy: '',
        currentCategories:[],
        isLoading: false,
        town_id: 0,
        data: [],
        page: 1,
        totalPages: 2,
        maxPageNumber: 3,
        minPageNumber: 1,
        mycat: [],
        search() {
            this.getAllAds();
        },
        filterPrice() {
            console.log(this.minPrice);
            console.log(this.maxPrice);
        },
        getAllAds() {
            this.isLoading = true;
            fetch('/clouddeal/allAds/ads?page=' + this.page + '&search=' + this.searchText+'&categories=' + this.currentCategories+'&town=' + this.selectedTown).then(response => response.json())
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
            //this.isLoading = true;
            if (this.page < this.totalPages) {
                this.page++;
                if (this.maxPageNumber < this.totalPages) {
                    this.minPageNumber++;
                    this.maxPageNumber++;
                }
                this.getAllAds();
                console.log(this.data);
            }
        },
        previousPage() {
           // this.isLoading = true;
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
        sortByCat(){

            var selectedCategories = [];

            $('.category-checkbox:checked').each(function() {
                selectedCategories.push($(this).val());
            });
            this.currentCategories = selectedCategories;
            this.getAllAds()
        },
        sortByTown(){

            this.selectedTown = $('.town-select').val();
            this.getAllAds()
        }
    }))
});
