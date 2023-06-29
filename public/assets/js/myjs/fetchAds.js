

function fetchAds(page) {
    return fetch('/clouddeal/ads?page=' + page)
      .then(response => response.json())
      .then(data => {
        return data.allAds.data;
      })
      .catch(error => {
        console.error(error);
        return [];
      });
  }
