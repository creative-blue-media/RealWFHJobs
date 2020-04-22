window.onload = function() {

    var footer  = document.getElementById('footer');
    footer.addEventListener('click', function(e) {
        e.preventDefault(); 

        this.style.background = 'rgb(255, 0, 0)';
    })
}

