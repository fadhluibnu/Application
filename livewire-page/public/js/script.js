// title
var title = document.getElementById("title").innerHTML;
document.title = title;

// active
var overview = document.getElementById("overview"),
    tambah = document.getElementById("tambah");

if (title == "Overview") {
    overview.classList.add("active");
} else if (title == "Tambah") {
    tambah.classList.add("active");
}
