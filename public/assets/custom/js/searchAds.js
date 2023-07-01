window.addEventListener('alpine:init', () => {
    Alpine.data('announces', (maxPrice) => ({
        searchText: '',
        priceFilter: '',
        minPrice: 0,
        maxPrice: maxPrice,
        sortBy: '',
        currentCategories: [],
       
        filter(){
            let filteredAds = annonces.filter(annonce => {
                const checkboxValue= document.getElementById('').checked;
                // Filter by ads name
                if(this.searchText && !annonce.name.toLowerCase().includes(this.searchText.toLowerCase())){
                    return false;
                }

                // Filter by town
                if(this.sortBy && !annonce.town_id.includes(this.sortBy.toLowerCase())){
                    return false;
                }

                // filter by category



                // Filter by price
                
                return true;
                
            })
            
            fetch('/').then(response => {
                method: "POST",
                console.log(response);
            }).catch(error => console.log(error));
        }

    }));
});
