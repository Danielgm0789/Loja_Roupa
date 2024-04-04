function show(id) {
    all = document.querySelectorAll(".form");
    all.forEach(function (form) {
        form.style.display = "none";
    });
    form = document.getElementById(id);
    form.style.display = "block";
}