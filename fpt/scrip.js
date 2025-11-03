let danhSachPhim = [
  {
    id: 1,
    tenPhim: "Mưa đỏ",
    namPhatHanh: 2025,
    theLoai: "chiếu rạp",
    tuoi: 16,
    quocGia: "Việt Nam",
    poster: "img/mua-do2-1122.jpeg",
    thoiLuong: "120 phút",
  },
  {
    id: 2,
    tenPhim: "Beauty and the beaets",
    namPhatHanh: 2025,
    theLoai: "chiếu rạp",
    tuoi: 16,
    quocGia: "Mỹ",
    poster: "fpt/img/banner-nguoi-dep-va-quai-vat.jfif",
    thoiLuong: "120 phút",
  },
  {
    id: 3,
    tenPhim: "Cám",
    namPhatHanh: 2025,
    theLoai: "chiếu rạp",
    tuoi: 16,
    quocGia: "Việt Nam",
    poster: ".img/banner-cam.jfif",
    thoiLuong: "120 phút",
  },
];

let phimHientai = danhSachPhim[0];

let mainbanner2 = document.getElementsByClassName("poster")[0];

function chonPhim(idPhim) {
  for (let i = 0; i < danhSachPhim.length; i++) {
    if (danhSachPhim[i].id == idPhim) {
      mainbanner2.src = danhSachPhim[i].poster;
    }
  }
}
