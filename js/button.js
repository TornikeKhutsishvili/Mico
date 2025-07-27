
// search button show-hide

document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('toggleSearch');
    const searchForm = document.getElementById('searchForm');

    if (toggleBtn && searchForm) {
        toggleBtn.addEventListener('click', function () {
        if (searchForm.style.display === 'none' || searchForm.style.display === '') {
            searchForm.style.display = 'inline-block';
        } else {
            searchForm.style.display = 'none';
        }
        });
    } else {
        console.log('❌ not found!');
    }
});
