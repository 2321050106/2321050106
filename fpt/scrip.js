let danhSachPhim = [
  {
    id: 1,
    tenPhim: "Mưa đỏ",
    namPhatHanh: 2025,
    theLoai: "chiếu rạp",
    tuoi: 16,
    quocGia: "Việt Nam",
    poster: "../fpt/img/phim/640x396-muado.jpg",
    thoiLuong: "120 phút",
    trailer: "https://www.youtube.com/watch?v=UEqjUBGjvwI",
  },
  {
    id: 2,
    tenPhim: "Beauty and the beaets",
    namPhatHanh: 2025,
    theLoai: "chiếu rạp",
    tuoi: 12,
    quocGia: "Mỹ",
    poster: "../fpt/img/phim/nguoidep.jpg",
    thoiLuong: "90 phút",
    traiLer: "https://www.youtube.com/watch?v=o6k1ChY8kDg",
  },
  {
    id: 3,
    tenPhim: "Cám",
    namPhatHanh: 2025,
    theLoai: "chiếu rạp",
    tuoi: 16,
    quocGia: "Việt Nam",
    poster: "../fpt/img/phim/Cám.jpg",
    thoiLuong: "100 phút",
    traiLer: "https://www.youtube.com/watch?v=_8qUFEmPQbc",
  },
];

let phimHientai = danhSachPhim[0];

let mainbanner2 = document.getElementsByClassName("poster")[0];

let infoTenPhim = document.getElementById("info-tenPhim");
let infoTheLoai = document.getElementById("info-theLoai");
let infoQuocGia = document.getElementById("info-quocGia");
let infoThoiLuong = document.getElementById("info-thoiLuong");
let infoNamPhatHanh = document.getElementById("info-namPhatHanh");
let infoTuoi = document.getElementById("info-tuoi");
let trailerLink = document.getElementById("trailer-link");

function chonPhim(idPhim) {
  for (let i = 0; i < danhSachPhim.length; i++) {
    if (danhSachPhim[i].id == idPhim) {
      mainbanner2.src = danhSachPhim[i].poster;

      trailerLink.href = danhSachPhim[i].traiLer;
      infoTenPhim.textContent = danhSachPhim[i].tenPhim;
      infoTheLoai.textContent = danhSachPhim[i].theLoai;
      infoQuocGia.textContent = danhSachPhim[i].quocGia;
      infoThoiLuong.textContent = danhSachPhim[i].thoiLuong;
      infoNamPhatHanh.textContent = danhSachPhim[i].namPhatHanh;
      infoTuoi.textContent = danhSachPhim[i].tuoi + "+";

      return;
    }
  }
}
