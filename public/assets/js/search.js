window.addEventListener('alpine:init', () => {

    Alpine.data('data', () => ({
        category_id: null,
        data: [],
        page: 1,
        totalPages: 2,
        maxPageNumber: 3,
        minPageNumber: 1,
        getAllAds(){
            fetch('/clouddeal/allAds/ads?page='+ this.page).then(response => response.json())
            .then(data => {
                this.data = data;
                this.totalPages = data.annonces.last_page;
                console.log(this.data);
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
    }))});
