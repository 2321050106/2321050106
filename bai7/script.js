const bannerAnh = document.getElementById("bannerAnh");
const trailer = document.getElementById("trailer");

let Trailerhientai = "";

trailer.style.display = "none";

function doiBanner(anhphim) {
  bannerAnh.src = anhphim.src;
  trailerhientai = anhphim.getAttribute("data-trailer");
  bannerAnh.style.display = "block";
  trailer.style.display = "none";
  trailer.src = "";
}
function PhatTrailer() {
  if (trailerhientai === "") {
    alert("Hãy chọn phim bạn muốn xem trailer!");
    return;
  }
  bannerAnh.style.display = "none";
  trailer.style.display = "block";
  const urlTrailer = new URL(trailerhientai);
  urlTrailer.searchParams.set("autoplay", "1");
  trailer.src = urlTrailer.toString();
}
