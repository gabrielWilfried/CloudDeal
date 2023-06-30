window.addEventListener('alpine:init', () => {

    Alpine.data('adList', () => ({
        category : $('#category').val,
        ads: [],
        page: 1,
        totalPages: 2,
        search(){

        },
        getAllAds(){    
            fetch('/clouddeal/allAds').then(response => response.json())
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
        filterByCategories(){

            fetch('/clouddeal/allAds/search/' + this.category).then(response => response.json())
                .then(data => {
                    this.filteredAds = data.annonces.data;
                    console.log(this.filteredAds);
                })
                .catch(error => {
                    console.error(error);
                });
        },
        filterByPrice(){

        },
        filter(){

}}))});
